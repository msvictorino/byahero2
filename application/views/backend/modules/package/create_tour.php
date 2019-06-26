
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Add Tour</h3>
      </div>

      
      <form class="needs-validation" novalidate>
      <div class="row">
        <div class = "col-md-6">
            <div class="mb-3">
                <label for="firstName">Tour Name</label>
                <input type="text" class="form-control" id="firstName" value="" required>
                <div class="invalid-feedback">
                Valid first name is required.
                </div>
            </div>
            
          <div class=" mb-3">
            <label for="firstName">Region</label>
            <select class="custom-select d-block w-100" id="region" name="region" required>
                            <option hidden selected = "selected">Choose Region</option>
                            <option value="Luzon">Luzon</option>
                            <option value="Visayas">Visayas</option>
                            <option value="Mindanao">Mindanao</option>
                        </select>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class=" mb-3">
            <label for="firstName">Location</label>
            <select class="custom-select d-block w-100" id="location" name="location" required>
                            <option hidden selected = "selected">Choose Location</option>
                            <!-- yung mga created na locations sa database dapat options here--> 
                        </select>
            <div class="invalid-feedback">
              Valid first name is required.
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
             <input type = "file" > </button>
        </div>
        
        <div class=" mb-3 text-center"> 
        <button class="btn btn-warning btn-block mb-1" type="submit" style="color: white;">Create Tour</button>
            <a href = "<?= base_url()?>admin/tourslist" style= "text-decoration: underline; font-size:13px;"> Back To Tour List  </a>
          </div>
        </div>

        <div class = "col-md-6">
            <p class = "mb-2"> Preview Uploaded Picture </p>
            <div class="card" style = "border-style: dashed;">
                <div class="card-body">
                    <img src="..." class="card-img-top" alt="...">
                </div>
            </div>

        </div>

    
        <br>

      </form>

      
</div>
    </div>
  


      </div>
  
  </div>
</div>

