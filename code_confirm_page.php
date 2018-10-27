<? include('header.php')?>
<? include('footer.php')?>


<div class="container" style="display: flex;">
    <div class="col-md-2"></div>
    <div class="col-md-6 col-sm-6 col-xl-6 col-6">
        <form action="code_check.php" method='POST' style="margin-top: 50%;">
          <div class="form-group">
              <label for="exampleInputEmail1" style="text-align: -webkit-center;"><?if($_GET["retry"]==1){?><p style="color:red;">Что-то пошло не так! Попробуйте ввести код еще раз)</p> <?}?>Введите код подтверждения</label>
              <input type="number" name="code" maxlength="4" class="form-control" id="exampleInputEmail1" placeholder="0000">
       
          </div>
         
          <button type="submit" style="margin: auto;
              display: flex;" class="btn btn-outline-primary">Подтвердить</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>