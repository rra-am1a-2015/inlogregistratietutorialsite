<?php
    include("./lessphp/lessc.inc.php");
    $less = new lessc();
    $kleur = "rgb(255, 127, 255)";
    $less->setVariables(array("lettergrootte" => "1em",
                              "breedteDiv" => "50%",
                              "colorRraTest" => $kleur));
    echo $less->compileFile("./css/phpless.less", "./css/phpless.css");
    
    
    if ( isset($_POST["submit"]))
    {
        echo "Er is gedrukt. De css-code ziet er zo uit:<br>";
        $less->setVariables(array("lettergrootte" => "4em",
                                  "breedteDiv" => "75%"));
        echo $less->compileFile("./css/phpless.less", "./css/phpless.css");
    }
    
?>

<link rel="stylesheet" type="text/css" href="./css/phpless.css">

<h3>Het parsen van een less file naar een css file met php</h3>

<div id="divDesign">
    Dit is een test
</div>

<form action="index.php?content=developer_homepage&page=tutorials/less/tut_less_php_compile_file&topic=less" method="post">
    <input type="submit" name="submit" value="Verander CSS">
</form>
