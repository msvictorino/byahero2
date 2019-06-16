<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #FE9900;">
    <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">BYAHERO</a>

    <div class="btn-group mr-2" >
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
            Administrator
        </button>
        <div class="dropdown-menu dropdown-menu-lg-right">
            <button class="dropdown-item" type="button">Account</button>
            <button class="dropdown-item" type="button" id="btn-logout">Logout</button> 
        </div>
    </div>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    
    <div class="collapse navbar-collapse d-md-none" id="navbarTogglerDemo03">
        <ul class="navbar-nav px-3">
            <li class="nav-item">
                <a class="nav-link text-nowrap active" href="<?= base_url()?>admin">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?= base_url()?>admin/user">
                <span data-feather="file"></span>
                Users
                </a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?= base_url()?>admin/package">
                <span data-feather="shopping-cart"></span>
                Packages
                </a>
            </li>
            
            <li class="nav-item text-nowrap" >
                <a class="nav-link" href="<?= base_url()?>admin/logs">
                <span data-feather="bar-chart-2"></span>
                Logs
                </a>
            </li> 
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?= base_url()?>logout">Sign out</a>
            </li>
        </ul>
    </div>
</nav>