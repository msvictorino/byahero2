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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-media">
                        <a href="#">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61pmrFT-M7L._AC_US218_.jpg" alt="product name">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                               Cebu Tours
                        </h5>
                        <div class="col-md-8 mb-3">
                          <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Select Package</option>
                            <option>Tour 1</option>
                            <option>Tour 2</option>     
                          </select>
                        </div>
                        <div class="col-md-8 mb-3">
                          <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Number of Pax</option>
                            <option>1</option>
                            <option>2</option>     
                          </select>
                        </div>
                        <div class="col-md-8 mb-3">
                          <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Schedule</option>
                            <option>May 23, 2019</option>
                            <option>August 1, 2019</option>     
                          </select>
                        </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                    <button class="btn" type="submit" style="background-color: #FE9900;"><B style="color:white">Book Now</B></button>

            </div>
            <div class="col-md-4 mb-3">
                    <button class="btn" type="submit" style="background-color: #FE9900;"><B style="color:white">View Details</B></button>

            </div>
          </div>
        </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>