<?php
    include('connection.php');
    header('Content-Type: application/json');
    header('Access-Control-Origin: *');

    $data = json_decode(file_get_contents('php://input'), true);
    $userId = $data['id'];
    $userName = $data['name'];
    $userEmail = $data['email'];
    $userMobile = $data['mobile'];

    $query = "UPDATE users SET name = '$userName', email = '$userEmail', mobile = '$userMobile' WHERE id = '$userId'";
    $sql = mysqli_query($conn, $query);
    if($sql){
        echo json_encode(array('message' => 'Record has been updated successfully', 'status' => true));
    } else {
        echo json_encode(array('message'=> 'Failed to update', 'status' => false));
    }
    ?>