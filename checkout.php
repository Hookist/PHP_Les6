<?php
  

     session_start();
 
?>
               
                <html>
   <title>

   </title>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
       

       
       
   </head>
    <body>
     
      <?php
        if($_SERVER['REQUEST_METHOD'] != 'POST'):
        ?>
        
       <form action="" method="post">
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name:</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="name">
</div>



<div class="input-group">
  <span class="input-group-addon">Adress :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)" name="adress">
  <span class="input-group-addon">need more then 6 symbols</span>
</div>

        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">phone number:</span>
  <input type="text" class="form-control" placeholder="phoneNumber" aria-describedby="basic-addon1" name="phone">
</div>

        <div >
  <span class="input-group-addon" id="basic-addon1" name="model">Model : Lenovo vovo</span>
  
    <span class="input-group-addon" id="basic-addon1" name="price">price : 7000 grn </span>
    
        <span class="input-group-addon" id="basic-addon1" name="count">count : 1 </span>


</div>
   
    
     <button type="submit">
       OFORMITI
        
     </button>
            <title>
 
   </title>
             <div id="title">
             <h1>
                 <?=$title?> 
             </h1>
            
           
                 
         </div>
     </form>
        <?php
         
            else:
               $_SESSION["name"]= $_POST["name"];
                $_SESSION["adress"]= $_POST["adress"];
                $_SESSION["phone"]= $_POST["phone"];
                $_SESSION["model"]= $_POST["model"];
                $_SESSION["price"]= $_POST["price"];
                $_SESSION["count"]= $_POST["count"];
              var_dump($_SESSION);
                echo "<a href='http://localhost/php_les6/result.php' >send</a>" ;
            endif;
        ?>

        
      </body>
</html>