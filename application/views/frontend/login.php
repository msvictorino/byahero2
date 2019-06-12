    
    <!-- <link href="<?= base_url().'assets/css/floating-labels.css'?>" rel="stylesheet"> -->
      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        } 
      </style>

  <!-- <div class="jumbotron"> -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 mx-auto my-auto">
          <form class="form-signin">
            <img src="<?= base_url().'img/logo.png'?>"">
          </form>
        </div>
        <div class="col-md-6 col-sm-12 mx-auto my-auto">
          
          <form class="form-signin" id="frm-login">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
              <label for="inputEmail">Email</label>
            </div>

            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-block" type="submit" style="background-color: #FE9900;"><B style="color:white">LOGIN</B></button>
            <a href=""> Sign Up </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=""> Forgot Password? </a> 
          </form>
        </div>
      </div>
    </div>
  <!-- </div> -->