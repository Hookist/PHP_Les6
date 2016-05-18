<?php
//phpinfo();
//header("Location:http://localhost/php_les5/autorize.php");
   // var_dump($GLOBALS);
    //ob_start();
   // echo "Hello World";
    //header("Set-Cookie:User=3asda");
//$a = ob_get_contents();
    //echo "World";
   // $b = ob_get_contents();
   // ob_end_clean();
   // var_dump($a,$b);

//header("Refresh:3;url=http://localhost/php_les5/autorize.php");
    
//ob_end_flush();
   
 session_start();
   // $_SESSION("name"=>"John");
  
    $_SESSION["name"]="John";
  var_dump($_SESSION);
    //var_dump($_COOKIE);
    //Session_destroy();

?>