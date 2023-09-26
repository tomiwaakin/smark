<?php session_start();?>
<?php 
$un = $_POST['uname'];
$em = $_POST['mail'];
$ph = $_POST['phone'];
$pw = $_POST['pword'];




$connection = mysqli_connect("localhost","root","","inventory");
if($connection){
    
  $chk = "SELECT * FROM user_table WHERE username = '$un'";
  $r = mysqli_query($connection,$chk);
  $num = mysqli_num_rows($r);
 echo $num;
   if($num > 0 ){
    echo "username not available";
      }else{
        $query ="INSERT INTO user_table (username,user_email,user_phone,user_password)
 value('$un','$em','$ph','$pw')";

$result = mysqli_query($connection,$query);
if($result){
  header("location:index.php");
}else{
  echo mysqli_error($connection);

}
}
    
}
?>