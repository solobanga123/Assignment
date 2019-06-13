<!DOCTYPE html>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
       
      $expensions= array("jpeg","jpg","png");
       
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
      }
       
      if($file_size > 2097152) {
         $errors[]='Kích thước file không được lớn hơn 2MB';
      }
       
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
       
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
             
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
             
      </form>
       

<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-174-129-240-67.compute-1.amazonaws.com;port=5432;user=wrflrxtavasvqh;password=fbfef36049fbd28f1200e3a775a389e014838e86522765e67782f9cf7a3f516b;dbname=d3mmhribgmc6bf",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}
?>

<?php
    // gioi han file upload khong qua 100kb
    $max_size = 100000000;
 
    // lay thong tin file upload
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
   
    if(isset($name) && !empty($name)){
 
    // lay duoi file
    $extension = substr($name, strpos($name, '.') + 1);
 
    // kiem tra xem co dung la file hinh anh hay khong
    if( size<=$max_size){
        $location = "uploads/";
        if(move_uploaded_file($name, $location.$name)){
      
            // dua thong tin file vao csdl
            $query = "INSERT INTO upload(name, size, type) VALUES ('$name', '$size', '$type')";
            $stmt = $pdo->prepare($query);
            
                 if($stmt->execute() == TRUE){
                    echo "Upload file successfully.";
                    } 
                 else {
                     echo "Upload failed";
                 }
        }
    else{
        echo "Chỉ hỗ trợ file dung lượng không quá 100 KiloBytes";
    }
 
    }else{
        echo "Chọn file upload";
    }
    }
 else {
       echo "File name must be not null"; 
}
?>

</body>
</html>