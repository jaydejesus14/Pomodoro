<?php
	include 'database.php';
    $id = $_POST['id'];

    $is_update = $db->sessionTask->updateMany(
        [ 'routineId' =>  $id],
        [ '$set' => [ 'is_complete' => false ]]
    );


    $where = array(
        '_id' => new MongoDB\BSON\ObjectId ($id)
    );
    
    $cursor = $db->session->find($where);
    $docs = $cursor->toArray();
    
    // if($_POST['key'] == 'end'){
    $total = 1;
    if(isset($docs[0]['times_done'])){
        $total = $docs[0]['times_done'] + 1;
    }
        $for_update_section['times_done'] = $total;
        // $for_update_section['end_date'] = $_POST['date'];
    
        $is_insert = $db->session->updateOne(
            [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
            [ '$set' => $for_update_section]
        );
    
    if($is_insert){
        echo 'true';
    }else{
        echo 'false';
    }
    
?>

