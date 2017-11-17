<!DOCTYPE html>
<html>
  <head> 
        <title>Contatore accessi pagina</title> 
   </head> 
  <body>

  <h1>Pandolfi Luca</h1>

  <?php
  echo "Hello World!";
  ?>
    
  <?php 

    if (!isset($_COOKIE['count']))
    {
   ?> 
    Contatore = 1 
    <?php 
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = $_COOKIE['count']++;
        setcookie("count", $cookie);
        ?> 
    Contatore = <?= $_COOKIE['count'] ?>  
    <?php  }
    ?> 
  


</body>
</html>
