<?php
$signin = $_POST["signin"] ? $_POST["signin"] :"";
if(isset($action)){
if($_POST['action']=='logout'){
    logout();
}}

function logout(){
    session_start();
    session_destroy();

}

if(isset($Register)){
register($_POST);
}
if($signin){
  signin($_POST);
}

function signin($data){
    $curl = curl_init();
    $url= "https://nutech-test1.herokuapp.com/v1";
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url.'/auth/signin',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
            "email":"' . $data["email"] . '",
            "password":"' . $data["password"] . '"
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($response,true);
    if($result["status"] == 200){
        session_start();
        $_SESSION['email']=$data["email"];
        $_SESSION['token']=$result["responseData"]["accessToken"];
        header('location:index.php');
    }else{
        session_start();
        header('location:signin.php?error=1');
    }
}











function register($data){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
date_default_timezone_set('asia/kolkata');
$time= date('Y-m-d H:i:s');

extract($_POST);
    include 'dbconnect.php';

$st="select * from users where uemail='$email'";
    $res=mysqli_query($con,$st);
   // print_r($res);

   if(mysqli_num_rows($res)<1){


$str="INSERT INTO users(uname,upass, uemail,created, ip, phone) VALUES('$name','$password','$email','$time','$ip','$phone')";
$qer=mysqli_query($con,$str);
if($qer){
   header('location:index.php');
}else
{
echo "registration failed";
 header('location:register.php?error=2');
}

   }else{
   header('location:register.php?error=1');
   }



}











?>
