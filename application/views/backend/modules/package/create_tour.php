
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Add Tour</h3>
      </div>

      
      <form id="frm-tour" class="needs-validation" novalidate>
        <div class="row">
          <div class = "col-md-6">
              <div class="mb-3">
                <label for="firstName">Tour Name</label>
                <input type="text" class="form-control" id="firstName" name="name" value="" required>
                <div class="invalid-feedback" id="error-name">
                  Valid first name is required.
                </div>
              </div>
            
              <div class=" mb-3">
                <label for="firstName">Region</label>
                <select class="custom-select d-block w-100" id="region-tour" name="region" required>
                      <option hidden selected = "selected">Choose Region</option>
                      <option value="luzon">Luzon</option>
                      <option value="visayas">Visayas</option>
                      <option value="mindanao">Mindanao</option>
                </select>
                <div class="invalid-feedback" id="error-regon">
                  Valid Region is required.
                </div>
              </div>

              <div class=" mb-3">
                <label for="location">Location</label>
                <select class="custom-select d-block w-100 text-capitalize" id="location-tour" name="location" required>
                    <option hidden selected = "selected">Choose Location</option> 
                </select>
                <div class="invalid-feedback" id="error-location">
                  Valid Location is required.
                </div>
              </div>
              <div class=" mb-3">
                <label for="firstName">Total Pax</label> 
                <input type="number" class="form-control" name="pax" id="location-pax" value="" required>   
                <div class="invalid-feedback" id="error-pax">
                  Valid Total Pax is required.
                </div>
              </div>
              <div class=" mb-3">
                <label for="firstName">Price</label>
                <input type="number" class="form-control" name="price" min="0" step="0" id="location-price" value="" required>   
                <div class="invalid-feedback" id="error-price">
                  Valid Price is required.
                </div>
              </div>
          
              <div class="mb-3">
                <label for="country">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
      
              <div class=" mb-4"> 
                  <label for="country" style = "margin:0px;">Upload Cover Photo</label> 
                  <h6 style = "font-size:11px; color:#bdbdbd;"> The picture uploaded will be displayed as the location picture on website</h6>
                  <input type = "file" name="imgInp" id="imgInp">  
              </div>
          
              <div class=" mb-3 text-center"> 
                <button class="btn btn-warning btn-block mb-1" type="submit" style="color: white;">Create Tour</button>
                  <a href = "<?= base_url()?>admin/tourslist" style= "text-decoration: underline; font-size:13px;"> Back To Tour List  </a>
              </div>
            </div> 

            <div class = "col-md-6">
              <p class = "mb-2"> Preview Uploaded Picture </p>
              <img class="card-img-top"  id="imagePayment" style="width: 100%;"></div>
               

            </div>
        </div>

    
        <br>

      </form>

      
</div>
    </div>
  