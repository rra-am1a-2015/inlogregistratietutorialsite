<?php
     require_once("./lessphp/lessc.inc.php");    
     $less = new lessc();   
     $lesscode = "
     
     @rand: 100px;
     
     .test(@pixels, ) when (@pixels > 20)
     {
         border: @pixels solid red;
         padding: 2em;
     }
     
     
     
     
     .lessToets
     {
         .test(@rand, );
     }
     
     ";    
?>

<style>
    <?php echo $less->compile($lesscode); ?>
</style>


<table class="lessToets">
   <tr>
       <td>Dit is wat tekst voor de tabel</td>
   </tr> 
</table>