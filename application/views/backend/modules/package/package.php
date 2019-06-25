
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Create Travel Packages</h3>
      </div>
    <div class="col-md-12">
      <form class="needs-validation" novalidate>
      <div class = "row">
        <div class = "col-md-3 mb-1"> Select Type  </div>
      </div>
      <div class=" mb-2 form-check form-check-inline">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Promo</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Package</label>
          </div>
            <div class="invalid-feedback">
                Please enter your type of package/promo.
              </div>
        </div>
      

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Name of Package</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class=" col-md-6 mb-3">
            <label for="lastName">Price</label>
            <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">₱</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername">
            </div>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
          <label for="username"># of Pax</label>
          <div class="input-group">
            <input type="number" class="form-control" id="username"  required>
          </div>
        </div>

          <div class="col-md-6 mb-3">
            <label for="lastName"> Duration </label>
            <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          </div>
        <div class="mb-3">
          <label for="email">Details <span class="text-muted"></span></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <div class="invalid-feedback">
            Please enter a valid email address for account confirmation.
          </div>
        </div>

        <div class="mb-3">
            <label for="country">Booking Conditions</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

        <div class = "row"> 
          <div class = "col-md-6 mb-1">Exclusions</div>
          <div class = "col-md-6 mb-1">Inclusions</div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Default checkbox
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Default checkbox
              </label>
            </div>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>

          <div class="col-md-6 mb-3">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Default checkbox
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Default checkbox
              </label>
            </div>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <div class="mb-3"> 
            <button type="button" class="btn btn-outline-warning">Upload Picture</button>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>


    
        <hr class="mb-4">
        <div class="col-lg-12 text-center">    
          <button class="btn btn-lg btn-block" type="submit" style="background-color: #FE9900; color: white;">Create Package</button>
           <br> <a href = "#" style= "text-decoration: underline;"> Back  </a>
        </div>

        <br>
      </form>
    </div>
  


      </div>
  
  </div>
</div>