<?php
    include('connection.php');
    header('Content-Type: application/json');
    header('Access-Control-Origin: *');

    $data = json_decode(file_get_contents('php://input'), true);
    $userId = $data['id'];
    $userName = $data['name'];
    $userEmail = $data['email'];
    $userMobile = $data['mobile'];

    $query = "INSERT INTO users(name, email, mobile) VALUES('$userName','$userEmail','$userMobile')";
    $sql = mysqli_query($conn, $query);
    if($sql){
        echo json_encode(array('message' => 'Data inserted successfully', 'status' => true));
    } else {
        echo json_encode(array('message' => 'Failed to insert data, please try again', 'status' => false));
    }
?>