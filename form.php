<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">


    <title>Registration</title>

    <link href="style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/esi3xon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




</head>


<?php include 'header.php';?>

<main>

<?php
    
$servername = "localhost";
$username = "alyszjvj_admin";
$password = "Mikeyd101!";
$dbname = "alyszjvj_admin";
$users_name = $_POST['name'];
$users_age = $_POST['age'];
$users_role = $_POST['roletype'];
$users_phone = $_POST['phone'];
$users_email = $_POST['email'];
$emergencycontact = $_POST['emergencycontactname'];
$emergencycontact_phone = $_POST['emergencycontactnumber'];
$gender = $_POST['gender'];
$size = $_POST['size'];
$saturdayevents = $_POST['saturday'];
$sundayevents = $_POST['sunday'];
$chk="";
$special_requests = $_POST['specialrequests'];

foreach($saturdayevents as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   
foreach($sundayevents as $chk2)
    {
        $chk3 .= $chk2.",";
    }
    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    

$sql ="
  INSERT INTO eventregistration (name, age, roletype, phone, email, emergencycontactname, emergencycontactnumber, gender, size, saturdayevents, sundayevents, specialrequests ) VALUES ('$users_name', '$users_age', '$users_role', '$users_phone', '$users_email', '$emergencycontact', '$emergencycontact_phone', '$gender', '$size', '$chk', '$chk3', '$special_requests')";


if ($conn->query($sql) === TRUE) {
  echo "<center><h1>Your registration was successful!</h1><br>If we have any questions, we will contact you via the information you provided.</b></p></center>";
} else {
  echo "<p>Uh oh. It looks like that form didn't go through. Please try again!</p> " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>

    </main>
    
    <?php include 'footer.php'; ?>


</html>


