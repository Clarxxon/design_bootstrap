<body>
  <?if($_GET["record_done"]==1){?>
    <div class="alert alert-primary" role="alert" style="background-image: linear-gradient(66deg, #DD5E89, #F7BB97); color:black;">
      Вы успешно записались к нам! Мастер скоро вам перезвонит и уточнит время)
    </div>
  <?}?>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal company-name">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Features</a>
      <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Enterprise</a>
      <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Support</a>
      <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Pricing</a>
    </nav>
    <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Sign up</a>
  </div>

  <div class="block">
    <img src="https://unsplash.it/1920/1920/?image=1005" data-speed="-1" class="img-parallax">
    <h2>Parallax Speed -1</h2>
    <h2 class="container" style="display:flex;">
      <a class="btn btn-outline-primary" style="margin: auto" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Sign
        up</a>
  </div>
  </div>


  <div class="gradient">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Наши услуги</h1>
      <p class="lead">Мы предлагаем вам широкий спектр услуг, вообще любые-любые. За ваши деньги. Хоть на край света</p>
    </div>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">

        <? 
            $sql = 'SELECT * FROM services';

            foreach($connection->query($sql) as $key=>$row) {?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><?echo($row['s_name'])?></h4>
                    </div>
                    <div class="card-body">
                    <h1 class="card-title pricing-card-title"><?echo($row['s_price'])?> <small class="text-muted">/ руб</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <?echo($row['s_description'])?>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Записаться</button>
                    </div>
                </div>
                       
        <?} ?>
    </div>
  </div>

  <div class="gradient">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Наши работы</h1>
      <p class="lead">Мы предлагаем вам широкий спектр услуг, вообще любые-любые. За ваши деньги. Хоть на край света</p>
    </div>
  </div>

  <div class="container">
  <div class="card-deck mb-3 text-center">
    <? 
      $sql = 'SELECT * FROM gallery';
      foreach($connection->query($sql) as $key=>$row) {?>

   
      <div class="card mb-4 shadow-sm" >
        <img class="card-img-top" style="" src='<?echo($row['g_picture'])?>'/>
        <div class="card-body">
          <h5 class="card-title"><?echo($row['g_description'])?></h5>
        </div>
      </div>
    
      <?} ?>
    </div>
  </div>
    


  <div class="container">
        <form action="form.php" method='POST'>
          <div class="form-group">
              <label for="exampleInputEmail1">Ваше имя</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
       
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Телефон</label>
              <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="+71111111111">
          </div>

          <div class="form-group">
              <label for="exampleInputPassword1">Услуга</label>
              <select name="service" class="form-control">
              <? 
                $sql = 'SELECT * FROM services';

                foreach($connection->query($sql) as $key=>$row) {?>
                  <option value=<?echo($row['s_id'])?>><?echo($row['s_name'])?></option>
              <?}?>
              </select>
          </div>


         
          <button type="submit" style="    margin: auto;
              display: flex;" class="btn btn-outline-primary">Записаться</button>
        </form>


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="./src/bootstrap-solid.svg" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Cool stuff</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Random feature</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Team feature</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Stuff for developers</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Another one</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Resource</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Resource name</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Another resource</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Team</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Locations</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Privacy</a></li>
            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>