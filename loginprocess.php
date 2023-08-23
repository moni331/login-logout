<?php 
session_start();



 $user=$_POST['username'];
 $password=$_POST['Password'];
//  echo $user;
//  echo $password;


$firstname='John';
$lastname='Doe';
$dob='10-10-2000';
$mobile='0176.......09';
$email='john007@gmail.com';
$university='DIIT';
$department='CSE';


// $mobile='0176...';
// $email='abc@example.com';
// $dob='10-10-2010';
// $university='diit';

$validuser="Imam";
$validpassword="123456";

if ($user==$validuser && $password==$validpassword){
$_SESSION["firstname"]=$firstname;
$_SESSION["lastname"]=$lastname;
$_SESSION['dob']=$dob;
$_SESSION['mobile']=$mobile;
$_SESSION['email']=$email;
$_SESSION['university']=$university;
$_SESSION['department']=$department;

header('Location:variable.php');
}

else {
    header('Location:login.php');
}

?>