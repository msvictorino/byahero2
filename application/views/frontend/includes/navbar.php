<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color: #FE9900;">
    <a class="navbar-brand" href="#"><b>BYAHERO</a></b>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="<?= base_url() ?>" class="nav-link <?= $curr_path == '' ? 'active' : '' ?>"> Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>about" class="nav-link <?= $curr_path == 'about' ? 'active' : '' ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>promo" class="nav-link <?= $curr_path == 'promo' ? 'active' : '' ?>">Travel Promos</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>package" class="nav-link <?= $curr_path == 'package' ? 'active' : '' ?>">Travel Packages</a> 
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>contact" class="nav-link <?= $curr_path == 'contact' ? 'active' : '' ?> ">Contact</a>
            </li>
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-user icon"></i> LOGIN</button>
        </form> -->
    </div>
</nav>
 