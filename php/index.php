<?php
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
   
   $host = 'localhost';
   $user = 'whituezj_auxanodev';
   $pass = 'wfm@lsdev!';
   $dbname = 'whituezj_wfmauxdevdb';
   
   $conn = mysqli_connect($host, $user, $pass, $dbname);
   
   $sql = "INSERT INTO student(fisrtname, lastname, callnumber, whatsapp, email, address, origin, knowChurch, tongues, commitment, learn) values ('$fisrtname', '$lastname', '$callnumber', '$whatsapp', '$email', '$address', '$origin', '$knowChurch', '$tongues', '$commitment', '$learn')";
   mysqli_query($conn, $sql); 
   if($sql) {
        echo "<script>alert('Data Uploaded Successfully')</script>"; 
        header('Location: index.html');
        exit();
        }else{
        echo "<script>alert('There was an error, please try again')</script>"; 
        header('Location: index.html');
        exit();
    }
}
?>