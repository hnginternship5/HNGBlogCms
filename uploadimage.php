<html>
<head>
    <title>Uploading images</title>
</head>

<body>

<form action="uploadimage.php" method="post" enctype="multipart/form-data">
    Select Image:<input type="file" name="image"><br /><br />
    <input type="submit" name="upload" value="Upload Now">
</form>

<hr style="border:2px solid green;">
<?php
if(isset($_POST['upload'])){
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name= $_FILES['image']['tmp_name'];
    $desc = $_POST['desc'];


    move_uploaded_file($image_tmp_name,"photos/$image_name");
    echo "<img src='photos/$image_name' width='100' height='100'><br>$desc";




}
?>
</body>
</html>