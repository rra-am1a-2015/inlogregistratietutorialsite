<?php
    include("./lessphp/lessc.inc.php");
    $less = new lessc();
    $less->checkedCompile("./css/phpless.less", "./css/phpless.css");
?>
<link rel="stylesheet/less" type="text/css" href="./css/phpless.css">
<link rel="stylesheet" type="text/css" href="./css/phpless.css">

<h3>Het parsen van een less file naar een css file met php</h3>

<div id="divDesign">
    Dit is een test
</div>

<button onclick="test();">Klik!</button>

<script>
    function test()
    {
        alert("Hoi");
        less.modifyVars({
           '@test': 'rgb(0, 0, 0)';
        });
    }    
</script>

