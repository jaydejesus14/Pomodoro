<?php
	include 'database.php';
    $id = $_POST['id'];

    $is_insert = $db->sessionTask->updateMany(
        [ 'routineId' =>  $id],
        [ '$set' => [ 'is_complete' => false ]]
    );
    
    if($is_insert){
        echo 'true';
    }else{
        echo 'false';
    }
    
?>

