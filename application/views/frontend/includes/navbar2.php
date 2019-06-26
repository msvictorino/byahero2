
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Byahero</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Travel Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contactus">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>frontend/testimonials">Testimonials</a>
          </li>
          <!-- <?php if($this->session->is_logged_in && $this->session->role == "admin" ): ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url() ?>admin">Administrator</a>
            </li>
          <?php endif; ?> -->
          
          <?php if(!$this->session->is_logged_in): ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(). 'login' ?>">Login</a>
          </li>
            <?php endif; ?> 
          
          <?php if($this->session->is_logged_in): ?> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-user-circle"> </i> Hi, <?= $user->first_name . ' ' . $user->last_name ?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php if( $this->session->role == "admin" ): ?>
                <a class="text-capitalize dropdown-item" href="<?= base_url().'admin'?>">Administrator</a>
              <?php endif; ?>
 
                <a class="text-capitalize dropdown-item" href="<?= base_url().'profile' ?>">Profile</a> 
 
                <a class="text-capitalize dropdown-item" href="" id="btn-logout">Logout</a>

                </a>
              </div>
          </li>
          
          <?php endif; ?>
          
        </ul>
      </div>
    </div>
  </nav>

