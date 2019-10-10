<?php
session_start();
include 'index.php';

//$conn = OpenCon();
//echo "Connected Successfully";
$conn = mysqli_connect('localhost', 'rawabi', 'Rawabiorange@1995', 'SignUp');
if(!$conn){
    echo 'error in connection: '. mysqli_connect_error();
}

if (isset($_POST['submit'])) {
    echo  "Hello";
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    echo  "Hello";
    if ($Name != "" && $Password != "") {
        echo  "Hellovvv";
        echo $Name;
        echo  $Password;

        $sql_query = "SELECT count(*) as cntUser from www where Name='" . $Name . "' and Password='" . $Password . "'";
//        echo  $sql_query;
        echo  "Helloggggggg";
        $result = mysqli_query($conn, $sql_query);
//        echo  $result;
        echo  "Hello";
        $row = mysqli_fetch_array($result);
//        echo  $row;


        $count = $row['cntUser'];
//        echo  $count;

        if ($count > 0) {

            $_SESSION['Name'] = $Name;
            var_dump($_SESSION['Name']);

            header("Location: LoginPage.php");

            echo "add  username and password"   ;
        } else {
            echo "Invalid username and password";
        }

    }

}





$conn -> close();

?>