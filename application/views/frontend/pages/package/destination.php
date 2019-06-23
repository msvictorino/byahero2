
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Destionation Selection </h3> <br>
        </div>
    </div>
    <div class="row">
        <?php 
            if($regions){
                foreach($regions as $r){
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-media">
                                <a href="<?= base_url('package?region='.$r->region.'&destination='.$r->name) ?>">
                                    <img width="100%" height="200px" src="<?= base_url('img/frontend/team/baguio_picture.jpg') ?>" alt="DESTINATION NAME">
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-center text-capitalize">
                                    <?= $r->name ?> Tour
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
        
    </div>
</div>