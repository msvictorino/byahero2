<style>
$card-media-size: 218px;
$card-title-color: #0066c0;

h3{
  margin: 60px 0px;
}

.card{
  flex-direction: row;

  .card-media{
    width: $card-media-size;
    height: $card-media-size;

    img{
      width: 100%;
      height: 100%;
    }
  }
  .card-body{
    width: calc(100% - #{$card-media-size});
    padding: 16px;
    display: flex;
    justify-content: space-between;
    flex-direction: column;

    .card-title{
      color: $card-title-color;
    }

    .card-text{
      small{
        display: flex;
        width: 100%;
      }
    }

    .card-footer{
      display: flex;
      justify-content: space-between;
      background-color: transparent;
      padding: .75rem 0 0 0;
      align-items: center;

      .card-price{
        color: #111;
        font-size: 18px;
        small{
          display: flex;
          width: 100%;
          color: #555;
          font-size: 12px;
        }
      }
    }
  }

  @media only screen and (max-width: 991px){
    flex-direction: column;

    .card-media{
      width: 100%;
      img{
        object-fit: contain;
      }
    }

    .card-body{
      width: 100%;
    }

  }
}
</style>

<div class="container">
  <div class="row">
      <div class="col-sm-12">
          <h3>Package Selection </h3> <br>
      </div>
  </div>
  <div class="row">
    <?php
    if($tours){
      foreach($tours as $t):
    ?>
      <div class="col-sm-12 p-2">
    <form class="frm-package">
        <div class="card">
          <div class="card-media">
              <a href="#">
                  <img src="https://images-na.ssl-images-amazon.com/images/I/61pmrFT-M7L._AC_US218_.jpg" alt="DESTINATION NAME">
              </a>
          </div>
          <div class="card-body">
            <input type="hidden" value="<?= $t-> id?>" name="tour_id">
            <h5 class="card-title">
                    <?= $t->name ?> 
            </h5>
            <div class="col-md-8 mb-3">
              <select class="custom-select d-block w-100" name="package" id="package" required>
                <option value="">Select Package</option>
                <?php 
                  if($packages){
                    foreach($packages as $p):
                      if($p->tour_id == $t->id):
                    ?>
                      <option value="<?= $p->id ?>"><?= $p-> name ?></option>
                    <?php
                    endif;
                    endforeach;
                  }
                ?>
              </select>
            </div>
            <div class="col-md-8 mb-3">
              <select class="custom-select d-block w-100" name="pax" required>
                <option value="">Number of Pax</option>
                <?php
                  for($i = 1; $i <= (intval($t->pax)) ; $i++){
                    ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php
                  }
                ?>    
              </select>
            </div>
            <div class="col-md-8 mb-3 form-inline">
                <div class="form-group">
                  <select class="custom-select d-block" name="year"  required>
                    <option >Select Year</option>     
                    <?php
                      $currentYear = date('Y');
                      for($i = $currentYear + 1; $i >= $currentYear; $i--){
                        ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php

                      }
                    ?>
                  </select>
                  <select class="custom-select d-block mr-2 " name="month"  required>
                    <option >Select Month</option>     
                    <?php
                      $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
                      for($i = 1;$i <= 12; $i++){
                        ?>
                        <option value="<?= $i ?>"><?= $months[$i-1] ?></option>
                        <?php

                      }
                    ?>
                  </select>
                  <select class="custom-select d-block mr-2 " name="day"  required>
                    <option >Select Day</option>     
                    <?php
                      for($i = 1;$i <= 31; $i++){
                        ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php

                      }
                    ?>
                  </select>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4 ml-3 mb-3">
                  <button class="btn" type="submit" style="background-color: #FE9900;"><B style="color:white">Book Now</B></button>

              </div>
              <div class="col-md-4 mb-3">
                      <button class="btn" type="submit" style="background-color: #FE9900;"><B style="color:white">View Details</B></button>

              </div>
            </div>
          </div> 
        </form>
      </div>
    </div>
    <?php endforeach; }?>
  </div>
</div>