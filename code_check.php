<?session_start();
ob_start();
    include('db_connection.php');

    $code_confirm=strtolower(trim(htmlspecialchars($_POST['code'])));
    $code_=$_SESSION['code'];
    echo($code_);
    echo($code_confirm);

    $id=$_SESSION['id_record'];
    if(strlen($code_confirm)>0 && $code_confirm==$code_){
        $q = "UPDATE `recording` SET `rec_status` = 'co' WHERE `recording`.`rec_id` = '$id'";
        echo($q);
        $connection->query($q)->fetch(PDO::FETCH_ASSOC);
        header("Location: /index.php?record_done=1");
    }else{
        header("Location: /code_confirm_page.php?retry=1");
    }

?>