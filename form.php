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
$saturdayevents = $_POST['saturdayevents'];
$sundayevents = $_POST['sundayevents'];
$special_requests = $_POST['specialrequests'];

    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    

$sql ="
  INSERT INTO eventregistration (name, age, roletype, phone, email, emergencycontactname, emergencycontactnumber, gender, size, saturdayevents, sundayevents, specialrequests ) VALUES ('$users_name', '$users_age', '$users_role', '$users_phone', '$users_email', '$emergencycontact', '$emergencycontact_phone', '$gender', '$size', '$saturdayevents', '$sundayevents', '$special_requests')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>


