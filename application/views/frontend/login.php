    
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
        
          .form-signin {
          width: 100%;
          max-width: 420px;
          padding: 15px;
          margin: auto;
          padding-top: 100px;
          }

          .form-label-group {
          position: relative;
          margin-bottom: 1rem;
          }

          .form-label-group > input,
          .form-label-group > label {
          height: 3.125rem;
          padding: .75rem;
          }

          .form-label-group > label {
          position: absolute;
          top: 0;
          left: 0;
          display: block;
          width: 100%;
          margin-bottom: 0; /* Override default `<label>` margin */
          line-height: 1.5;
          color: #495057;
          pointer-events: none;
          cursor: text; /* Match the input under the label */
          border: 1px solid transparent;
          border-radius: .25rem;
          transition: all .1s ease-in-out;
          }

          .form-label-group input::-webkit-input-placeholder {
          color: transparent;
          }

          .form-label-group input:-ms-input-placeholder {
          color: transparent;
          }

          .form-label-group input::-ms-input-placeholder {
          color: transparent;
          }

          .form-label-group input::-moz-placeholder {
          color: transparent;
          }

          .form-label-group input::placeholder {
          color: transparent;
          }

          .form-label-group input:not(:placeholder-shown) {
          padding-top: 1.25rem;
          padding-bottom: .25rem;
          }

          .form-label-group input:not(:placeholder-shown) ~ label {
          padding-top: .25rem;
          padding-bottom: .25rem;
          font-size: 12px;
          color: #777;
          }

  }
} 
      </style>

  <!-- <div class="jumbotron"> -->
    <div class="container">
      <?php if($this->session->is_booking): ?>
        <div class="row m-2">
          <div class="col-md-12">
            <div class="alert alert-warning text-center">
              <h3>Please login to continue on booking</h3>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <div class="row">
        <div class="col-lg-6 col-sm-12 mx-auto my-auto" style="padding-top: 60px">
      
            <img src="<?= base_url().'img/logo.png'?>"">
          
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
            <a href="<?= base_url()?>register/index"> Sign Up </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=""> Forgot Password? </a> 
          </form>
        </div>
      </div>
    </div>
  <!-- </div> -->