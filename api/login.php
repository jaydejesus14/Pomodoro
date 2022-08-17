<?php
         
include 'database.php';

$user_name = $_POST['email'];
$password   = hash('ripemd160', $_POST['psw']);
$sql = "SELECT * FROM user_info WHERE (user_uname = '$user_name' OR user_email = '$user_name') AND user_password = '$password' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $json_return = array();
    while($row = $result->fetch_assoc()){
        $json_return['data']   = $row;
    }
    $json_return['status'] = true;
    
    echo json_encode($json_return);
}else{
    echo json_encode(array("status"=>false));
}

?>