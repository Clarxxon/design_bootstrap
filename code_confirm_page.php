<?session_start();
include('header.php');
include('db_connection.php');

if($_GET["retry"]==1){
    $id=$_SESSION['id_record'];
    $_SESSION = array();
    include("simple-php-captcha.php");
    $_SESSION['captcha'] = simple_php_captcha();
    $code=$_SESSION['captcha']['code'];
    $q="UPDATE `recording` SET `rec_code` = '$code' WHERE `recording`.`rec_id` = '$id'";
    echo $q;
    $connection->query($q)->fetch(PDO::FETCH_ASSOC);
}

?>
<? include('footer.php')?>


<div class="container" style="display: flex;">
    <div class="col-md-2"></div>
    <div class="col-md-6 col-sm-6 col-xl-6 col-6" style="text-align: -webkit-center;">
        <?php
            echo '<img style="margin-top:60px;"src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
        ?>

        <form action="code_check.php" method='POST' style="margin-top: 50%;">
          <div class="form-group">
              <label for="exampleInputEmail1" style="text-align: -webkit-center;"><?if($_GET["retry"]==1){?><p style="color:red;">Что-то пошло не так! Попробуйте ввести код еще раз)</p> <?}?>Введите код подтверждения</label>
              <input type="text" name="code" maxlength="5" class="form-control" id="exampleInputEmail1" placeholder="0000">
       
          </div>
         
          <button type="submit" style="margin: auto;
              display: flex;" class="btn btn-outline-primary">Подтвердить</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>