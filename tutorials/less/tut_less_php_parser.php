<?php
    require_once("./lessphp/lessc.inc.php");    
    $less = new lessc();
    
    //var_dump($_SESSION);
    switch ($_SESSION["id"])
    {
        case 9:
        $color = "#FF0";
        $border = "0.5";
        break;
        case 7:
        $color = "#0FF";
        $border = "0.3";
        break;
        default:
        $color = "#000";
        $border = "0.5";
        break;        
    }
    
    $lesscode = "
    //************** - Inline Less code - ****************************
    @border: ".$border."em;    
    #lessCompiler 
    { 
        border: @border solid ".$color.";
        background-color: rgb(255, 127, 0);        
    }
    //*****************************************************************
    ";    
?>

<style>
    <?php echo $less->compile($lesscode); ?>
</style>

<p id="lessCompiler">Deze paragraaf heeft css gekregen door middel van een PHP less compiler</p>