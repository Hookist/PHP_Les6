<?php
    var_dump($_FILES);

?>
   

   <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" max="MAX_FILE_SIZE" value="30000">
    <input type="file" name="myfile">
    <input type="submit">
</form>