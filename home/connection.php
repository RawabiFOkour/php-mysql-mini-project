<?php
session_start();
include 'index.php';

$conn = mysqli_connect('localhost', 'rawabi', 'Rawabiorange@1995', 'SignUp');
if(!$conn){
    echo 'error in connection: '. mysqli_connect_error();
}


echo $_POST['Name'] . "<br />";
echo $_POST['Email'] . "<br />";
echo "ADSDASDASSADSAD" . "<br />";
//echo $conn;
echo "ADSDASDASSADSAD" . "<br />";
$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);


//echo $Name;
//echo $Email;
//echo $Phone;
//echo $Password;
// Attempt insert query execution
$sql = "INSERT INTO www (Name, Email, Phone,Password) VALUES ('$Name', '$Email','$Phone','$Password')";
//$sql = "INSERT INTO users(first_name,last_name,username,password,email) VALUES('$first_name','$last_name','$username','$password','$email')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//
////session_start();
//if (isset($_POST['submit'])) {
//   echo  "Hello";
//    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
//    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
//    echo  "Hello";
//    if ($Name != "" && $Password != "") {
//        echo  "Hellovvv";
//        echo $Name;
//        echo  $Password;
//
//        $sql_query = "SELECT count(*) as cntUser from www where Name='" . $Name . "' and Password='" . $Password . "'";
////        echo  $sql_query;
//        echo  "Helloggggggg";
//        $result = mysqli_query($conn, $sql_query);
////        echo  $result;
//        echo  "Hello";
//        $row = mysqli_fetch_array($result);
////        echo  $row;
//
//
//        $count = $row['cntUser'];
////        echo  $count;
//
//        if ($count > 0) {
//            $_SESSION['$Name'] = $Name;
//            var_dump($_SESSION['$Name']);
//           // header('Location: dashbord.php');
//            header("Location: LoginPage.html");
//
//            echo "add  username and password"   ;
//        } else {
//            echo "Invalid username and password";
//        }
//
//    }
//
//}


$conn -> close();
//CloseCon($conn);
?>