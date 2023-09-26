<?php
$bimg = $_POST["ido"];
$target_dir ="slide_images/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;
$imagefiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if($check !==false){
        echo "File is an image -" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)){
    echo "sorry, file already exists.";
    $uploadOk = 0;
}
if($uploadOk ==0){
    echo "sorry, your file was not uploaded.";
}else{
    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)){
        echo "The file ". htmlspecialchars( basename( $_FILES["picture"]["name"])). " has been uploaded.";
        echo "<br>";

        $connection = mysqli_connect("Localhost","root","","quickal");
$sql = "UPDATE slideshow SET slide_image = '$target_file' WHERE slide_id = $bimg";
$result = mysqli_query($connection,$sql);
    echo $target_file;
    }else{
        echo "Sorry,".$target_file.", there was an error uploading your file.";

    }
}
echo ' <script>
      window.history.back();
    </script>';
?>
