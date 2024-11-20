<?php
    include('connection.php');

    header('Content-Type: application/json');

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $data = [];
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        echo json_encode($data);
    } else{
        echo json_encode(array('message' => 'No data found', 'status' => false));
    }

?>