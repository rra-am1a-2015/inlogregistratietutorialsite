<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "am1a_2015_loginregistration";
    
    try
    {
        $conn = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
        
        $stmt = $conn->prepare("SELECT * FROM `users`");
        
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);  // FETCH_NUM, FETCH_ASSOC, FETCH_BOTH
        
        $result = $stmt->fetchAll();
        
        $fields = array("id", "firstname", "infix", "lastname", "userrole");
        
        $output = "<table class='tblPDO'>";
        for ($i = 0; $i < sizeof($result); $i++)
        {
            $output .= "<tr>";
            foreach($result[$i] as $key => $value)
            {
                if (in_array($key, $fields))
                {
                    $output .= "<td>".$value."</td>";
                }
            }    
            $output .= "</tr>";        
        }
        $output .= "</table>";       
        //var_dump($result);       
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }    
?>
<h3>PDO Syntax</h3>
<p>Alle records uit de tabel Users</p>
<?php echo $output; ?>
