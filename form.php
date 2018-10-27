<?session_start();
ob_start();
    include('db_connection.php');
    include('sms.php');
    $cl_name=strtolower(trim(htmlspecialchars($_POST['name'])));
    $cl_phone=strtolower(trim(htmlspecialchars($_POST['phone'])));
    $service=strtolower(trim(htmlspecialchars($_POST['service'])));

    echo($service);
    $date=date("Y-m-d H:i:s"); 
    echo($date);

    $digits = 4;
    $code=rand(pow(10, $digits-1), pow(10, $digits)-1);
    $str_id= $code+$cl_phone+$rec_cl_name;
    $id= md5_hex_to_dec(md5($str_id));

    $q="INSERT INTO `recording`(`rec_id`,`rec_date_create`, `rec_cl_name`, `rec_cl_phone`,`fk_service`,`rec_status`, `rec_code`) 
    VALUES ('$id','$date', '$cl_name', '$cl_phone', '$service','no_confirmed','$code')";

    echo (send("gate.iqsms.ru", 80, "z1540396107190", "421793", 
    $cl_phone, $code));

    $_SESSION['code'] = $code;
    $_SESSION['id_record'] = $id;
    

    echo($q);

    $connection->query($q)->fetch(PDO::FETCH_ASSOC);
    //header("Location: /code_confirm_page.php");
    //header('code_conform.php');



    function md5_hex_to_dec($hex_str)
    {
        $arr = str_split($hex_str, 4);
        foreach ($arr as $grp) {
            $dec[] = str_pad(hexdec($grp), 5, '0', STR_PAD_LEFT);
        }
        return implode('', $dec);
    }
?>