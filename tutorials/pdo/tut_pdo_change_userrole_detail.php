<?php
     var_dump($_GET);
     try
     {
         include_once("./tutorials/pdo/pdo_connect.php");
         
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
         var_dump($result);
         $user = array_shift($result);
         var_dump($user);
         
         
         
         
         $stmt_userrole = $conn->prepare("SELECT DISTINCT `userrole` FROM `users`");
         $stmt_userrole->execute();
         $stmt_userrole->setFetchMode(PDO::FETCH_ASSOC);
         $result_userrole = $stmt_userrole->fetchAll();
         var_dump($result_userrole);
         
         $fields = array("id", "firstname", "infix", "lastname", "userrole");
        
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
                            <select>";
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
                            <a href='index.php?content=developer_homepage&page=tutorials/pdo/tut_pdo_change_userrole_detail&topic=pdo&id=".$id."'>
                                <img src='./img/b_edit.png' alt='pencil'>
                            </a>
                        </td>";        
            $output .= "</tr>";        
        
        $output .= "</table>";       
        //var_dump($result);
        
         
         
     }
     catch(PDOException $e)
     {
         $e->getFile();
     }
     
?>

<h3>Verander de gebruikersrol</h3>
<?php echo $output; ?>