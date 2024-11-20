<?php
    include('connection.php');
    header('Content-Type: application/json');
    header('Access-Control-Origin: *');
    $data = json_decode(file_get_contents('php://input'), true);
    $userId = $data['id'];

    $query = "DELETE FROM users WHERE id = '$userId'";
    $sql = mysqli_query($conn, $query);
    if($sql){
        echo json_encode(array('message' => 'Record has been deleted successfully', 'status' => true));
    } else {
        echo json_encode(array('message' => 'Failed to delete the record', 'status' => false));
    }
?>