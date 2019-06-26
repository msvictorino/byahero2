
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h3 class="">Destionation Selection </h3> <br>
        </div>
    </div>
    <div class="row">
        <?php 
            if($regions){
                foreach($regions as $r){
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card text-center">
                            <div class="card-media">
                                <a href="<?= base_url('package?region='.$r->region.'&destination='.$r->name) ?>">
                                    <img width="100%" height="200px" src="<?= base_url('img/frontend/team/baguio_picture.jpg') ?>" alt="DESTINATION NAME">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-capitalize pt-1">
                                    <?= $r->name ?> Tour
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
        
    </div>
</div>