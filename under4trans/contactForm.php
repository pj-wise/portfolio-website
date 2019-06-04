<?php

//$serverName = "localhost";
//$userName = "root";
//$pass = "root";
//$dbname = "underFour";

//include "connect.php";
//
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];


date_default_timezone_set('EST');
$date = date("m/d/y");
//if(isset($_POST["submit"])){
//
//
//$stmt = $db->prepare("INSERT INTO contacts(fname, lname, email, message)
//VALUES(:fname, :lname, :email, :message)");
//
//
// $stmt->bindParam(":fname", $fname);
// $stmt->bindParam(":lname", $lname);
// $stmt->bindParam(":email", $email);
// $stmt->bindParam(":message", $message);
//
// $stmt->execute();
// $stmt = null;
//
// header("location: index.html");
//}
//
//try {
//   $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $userName, $pass);
// // set the PDO error mode to exception
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO contacts (fname, lname, email, message)
// VALUES ('$fname', '$lname', '$email', '$message)";
// $db->exec($sql);
//header("location: contactHtml.php");  
//}
//catch(PDOException $e)
//    {
//    echo $sql . "<br>" . $e->getMessage(); 
//    
// 
//    
//    $conn = null;
//}
    

$email_from = "contact@under4transport.com";
    
    $email_subject = "Under4Transport Contact Submission";

        $email_body = "Date of Contact: $date\n".
                      "User's First Name: $fname\n".
                      "User's Last Name: $lname\n".
                      "User's Email: $email\n".
                      "User's Message: $message\n";

$to = "under4transport@gmail.com";

$headers = "Email from \r\n";

$headers = "Reply_To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
    
?>
