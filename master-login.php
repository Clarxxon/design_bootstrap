<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(isset($_SESSION['auth'])){
    echo 'need auth!';
    header("Location: /master-page.php");
    
}
?>

<div class="container">
    <div class="row">
        <div class="center-form">
            <div class="form-login" style="text-align: center;">
                <h4>Авторизация</h4>
                <form action="auth-check.php" method='POST'>
                    <input type="text" id="userName" name="login" class="form-control input-sm chat-input" placeholder="username" />
                    </br>
                    <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
                    </br>
                    <div class="wrapper">
                    

                    <button type="submit" style="margin: auto; display: flex;" 
                    class="btn btn-outline-primary" onclick="checkForm()">Войти</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
.center-form{
    margin-top:120px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>
<?include('footer.php')?>