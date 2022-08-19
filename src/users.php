<?php
$signin = $_POST["signin"] ? $_POST["signin"] :"";

if(isset($new)){

 /*
  $str="insert into products (name,price,description,colors,sizes,qunt,img,uid) values ('$name','$price','$disc','$colors[0]','$size[0]','$qunt','$img','$id')";
  $qer=mysqli_query($con,$str);
  if($qer){
      echo "success";
  }else{
      echo "failed";
  }
  */
}





if(isset($update)){
    $id=$_SESSION['id'];
 $str="UPDATE users SET uname='$name',uemail='$email',phone='$phone'  WHERE uid='$id'";
   $qes=mysqli_query($con,$str);
   if($qes){

       header('location:account.php');
   }else {

       header('location:account.php');
   }

}







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
    $url= "https://damp-cliffs-22486.herokuapp.com/v1";
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
    $result = json_decode($response);
    if($result->status){
        session_start();
        $_SESSION['email']=$data->email;
        $_SESSION['token']=$result->data->accesToken;
        $_SESSION['token']="1";
        $_SESSION['gid']="1";
        $_SESSION['id']="1";
        header('location:index.php');
    }else{
        session_start();
        $_SESSION['token']="1";
        $_SESSION['gid']="1";
        $_SESSION['id']="1";
        header('location:index.php');
        // header('location:signin.php?error=1');
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
