<?php
        include("connection.php");

        header('Content-Type: application/json');
        header('Access-Control-Origin: *');
        $data = json_decode(file_get_contents('php://input'), true);
        $user_id = $data['id'];

        $query = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $query);  
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo json_encode($row);
        } else{
            echo json_encode(array("message" => "No data found", "status" => false));
        }

?>