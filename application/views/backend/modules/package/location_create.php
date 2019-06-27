
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h3>Add Location</h3>
    </div>

      
    <form id="frm-location" class="needs-validation" novalidate>
      <div class="row">
        <div class = "col-md-6">
            <div class="mb-3">
                <label for="region">Region</label>
                <select name="region" class="form-control">
                  <option value="luzon">Luzon</option>
                  <option value="visayas">Visayas</option>
                  <option value="mindanao">Mindanao</option>
                </select>     
                <div class="invalid-feedback" id="error-region">
                  Valid Region is required.
                </div>
            </div>
            
      

        
          <div class=" mb-3">
            <label for="name">Location</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Location name" required>
            <div class="invalid-feedback" id="error-name">
              Valid location name is required.
            </div>
          </div>
        

        
        <div class="mb-3">
            <label for="country">Notes</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            <div class="invalid-feedback" id="error-description">
              Please select a valid country.
            </div>
          </div>
        

       
        <div class=" mb-4"> 
            
             <label for="country" style = "margin:0px;">Upload Cover Photo</label> 
             <h6 style = "font-size:11px; color:#bdbdbd;"> The picture uploaded will be displayed as the location picture on website</h6>
             <input type = "file" name="imgInp" id="imgInp">  
        </div>
        
           
        

        
        <div class=" mb-3 text-center"> 
        <button class="btn btn-warning btn-block" type="submit" style=" color: white;">Create Location Tour</button>
           <br> <a href = "#" style= "text-decoration: underline;"> Back  </a>
          </div>

        </div>
        <div class = "col-md-6">
            <p class = "mb-2"> Preview Uploaded Picture </p>
            <div id="imagePayment" style="width: 100%;"></div>

        </div>

    
        <br>

      </form>

      
</div>
    </div>
  


      </div>
  
  </div>
</div>