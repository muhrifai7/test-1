<?php
session_start();
if (!isset($_SESSION['token'])){
	header("location: signin.php");
}
// todo hit delete by name cause unix
// todo upload file
$curl = curl_init();
$id = $_POST["nama_barang"];
if($id){
    $url= "https://nutech-test1.herokuapp.com/v1";
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url.'/product/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => '{
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'hris-token: ' . $_SESSION['token']
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($response,true);

    if($result["status"] == 200){
        header('location:index.php');
    }else{
        echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
        echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
    }
}
?>