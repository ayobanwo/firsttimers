<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

if(isset($_POST['submit'])){
   $fisrtname = $_POST['fisrtname'];
   $lastname = $_POST['lastname'];
   $callnumber = $_POST['callnumber'];
   $whatsapp = $_POST['whatsapp'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $origin = $_POST['origin'];
   $knowChurch = $_POST['knowChurch'];
   $tongues = $_POST['tongues']; 
   $commitment = $_POST['commitment'];
   $learn = $_POST['learn'];
   
    //Live server configuration

   $host = 'localhost';
   $user = 'whituezj_auxanodev';
   $pass = 'wfm@lsdev!';
   $dbname = 'whituezj_wfmauxdevdb';
   
   $conn = mysqli_connect($host, $user, $pass, $dbname) or die('Database connection error');
   $sql = "INSERT INTO firsttimers(firstname, lastname, callnumber, whatsapp, email, address, origin, knowChurch, tongues, commitment, learn) values ('$fisrtname', '$lastname', '$callnumber', '$whatsapp', '$email', '$address', '$origin', '$knowChurch', '$tongues', '$commitment', '$learn')";
   mysqli_query($conn, $sql); 
   if($sql) {
        echo "Success";
        //direct to success screen
        header('Location: success.html');
        exit();
        }else{
            echo "Error";
             //direct to failed screen
            header('Location: index.html');
            exit();
    }
}
?>

