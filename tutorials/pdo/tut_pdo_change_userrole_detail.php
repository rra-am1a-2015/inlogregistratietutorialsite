<?php
try
{
    include_once("./tutorials/pdo/pdo_connect.php");
    
    if ( isset($_POST["submit"]))
    {
        $stmt_update = $conn->prepare("UPDATE `users` SET `userrole` = :userrole WHERE `id` = :id");
        
        $stmt_update->bindParam(":userrole", $_POST["userrole"]);
        $stmt_update->bindParam(":id", $_GET["id"]);
        
        $stmt_update->execute();
        
        header("location: index.php?content=developer_homepage&page=tutorials/pdo/tut_pdo_change_userrole&topic=pdo");
    }
    
    $stmt = $conn->prepare("SELECT `id`,
                                `firstname`,
                                `infix`,
                                `lastname`,
                                `userrole`
                            FROM   `users`
                            WHERE  `id` = :id");
    $stmt->bindParam(":id", $_GET["id"]);         
    $stmt->execute(); 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);    
    $result = $stmt->fetchAll();
    $user = array_shift($result);
    
    $stmt_userrole = $conn->prepare("SELECT DISTINCT `userrole` FROM `users`");
    $stmt_userrole->execute();
    $stmt_userrole->setFetchMode(PDO::FETCH_ASSOC);
    $result_userrole = $stmt_userrole->fetchAll();
    
    $fields = array("id", "firstname", "infix", "lastname");

    $output = "<table class='tblPDO'>";
    $output .= "<tr>";
    $id = "";
    foreach($user as $key => $value)
    {
        if (in_array($key, $fields))
        {
            $id = $user["id"];
            $output .= "<td>".$value."</td>";
        } 
                            
    }
    $output .= "<td>
                    <select name='userrole'>";
                        for ( $i = 0; $i < sizeof($result_userrole); $i++)
                        {
                            if ($result_userrole[$i]["userrole"] == $user["userrole"] )
                            {
                                $output .= "<option selected>".$result_userrole[$i]["userrole"]."</option>";
                            }
                            else {
                                $output .= "<option>".$result_userrole[$i]["userrole"]."</option>";
                            }
                        }                        
    $output .= "    </select>
                </td>";
    $output .= "<td>
                    <input type='submit' name='submit' value='sla op!' >
                </td>";        
    $output .= "</tr>";        

$output .= "</table>";
    
    
}
catch(PDOException $e)
{
    $e->getFile();
}
     
?>

<h3>Verander de gebruikersrol</h3>
<form action="index.php?content=developer_homepage&page=tutorials/pdo/tut_pdo_change_userrole_detail&topic=pdo&id=<?php echo $id; ?>" method="post">
    <?php echo $output; ?>
</form>