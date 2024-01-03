<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Location = $_POST['Location'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $About = $_POST['About'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'surprise_form';

    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn -> connect_error){
        echo 'Connection Failed'.$conn -> connect_error ;
    }else{

        $query = "INSERT INTO form_Data VALUE('$Fname', '$Lname', '$Location', '$Email', '$Password', '$About')";
        if($conn->query($query) === TRUE){
            echo 'Row inserted successfully';
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}else{
    echo 'Connection Failed';
}

$conn->close();

?>