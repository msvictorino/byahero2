<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">Byahero</a>
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
                <a class="nav-link" href="">Testimonials</a>
            </li>
            <?php if($this->session->is_logged_in && $this->session->role == "admin" ): ?>
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?= base_url() ?>admin">Administrator</a>
                </li>
            <?php endif; ?>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-user-circle"> </i> Insert Name Here</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="text-capitalize dropdown-item" href="<?= base_url() ?>frontend/profile">Profile</a>
                <?php if(!$this->session->is_logged_in): ?>
                <a class="text-capitalize dropdown-item" href="<?= base_url().'login'?>">Login</a>
                <?php else: ?>
                <a class="text-capitalize dropdown-item" href="" id="btn-logout">Logout</a>
                <?php endif; ?>
                </a>
            </div>
            </li>
            
            </ul>
        </div>
    </div>
</nav>
 