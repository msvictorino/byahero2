
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Add Package for kung anong tour sya</h3> <br>
        
      </div>
    <div class = "row">
        <div class = "col-3 col-md-2"> </div>
        <div class = "col-5 col-md-7">
      <div class="card" style = "border-style: dashed;">
      <!-- <div class="card-header">
            Steps
        </div> -->
            <div class="card-body text-center">
            <h5 class="mb-3"> Steps</h5> 
                <div class = "row">
                    <div class = "col-md-6">
                    <img src = "<?= base_url()?>img/one_done.png" class = "img-fluid" style = "vertical-align:middle; margin-bottom: 0.35em; width:40px;height:40px;"> 
                     <span> Fill out package details </span>
                    </div>
                    <div class = "col-md-6">
                    <img src = "<?= base_url()?>img/two_orange.png" class = "img-fluid" style = "vertical-align:middle; margin-bottom: 0.35em; width:40px;height:40px;"> 
                    Create price according to pax 
                    </div>
                    
                </div>  
            </div>
        </div>
      </div>
    </div>  
            
            

    <br>
      
      
      <form class="needs-validation" novalidate>
      <div class="row">
        <div class = "col-md-7">
            <div class="mb-3">
                <label for="firstName">Total Number of Pax</label>
                <input type="number" class="form-control" id="firstName" value="" required>
                <div class="invalid-feedback">
                Valid first name is required.
                </div>
            </div>
            
          

          <div class="mb-3">
            <div id = "price_pax" class = "row">
              <div class = "col-md-4">
                <label for="lastName">Minimum Pax</label>
                    <select class="custom-select d-block w-100" id="location" name="location" required>
                            <option hidden selected = "selected">Choose Location</option>
                            <!-- yung mga created na locations sa database dapat options here--> 
                    </select>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class = "col-md-4"> 
              <label for="lastName">Maximum Pax</label>
                   <select class="custom-select d-block w-100" id="location" name="location" required>
                            <option hidden selected = "selected">Choose Location</option>
                            <!-- yung mga created na locations sa database dapat options here--> 
                    </select>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class = "col-md-4"> 
                <label for="lastName">Price</label>
                  <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">₱</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername">
                  </div>
                      <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
              </div>
</div>
</div>

           

          <div class="mb-5"> 
        <button id = "add" class="btn btn-primary btn-sm mb-1"><i class = "fa fa-plus"> Add more </i> </button>
          </div>
        
        <div class="mb-3 text-center"> 
        <button class="btn btn-outline-warning btn-block mb-1">Create Package  </button>
            <a href = "<?= base_url()?>admin/package_create" style= "text-decoration: underline; font-size:13px;"> Back To Step 1  </a>
          </div>
        </div>
    
    
         
</form>

        <div class = "col-md-5 mt-4">
            <div class="card" style = "border-style: dashed;">
            <div class="card-header pb-1">
            <h5> Package Details </h5>
            </div>
                <div class="card-body">
                    
                    <table class = "table" style = "margin-bottom:0px;">
                        <tr>
                            <td style = "border: none;"> <h6> Package Name</h6> </td>
                            <td style = "border: none;"> <p style= "font-size:15px; color: gray; margin:0px;">dasd </p> </td>
                        </tr>

                        <tr>
                            <td style = "border: none;"> <h6> Duration Tour</h6> </td>
                            <td style = "border: none;"> <p style= "font-size:15px; color: gray; margin:0px;">dasd </p> </td>
                        </tr>

                        <tr> 
                            <td style = "border: none;"> <h6> Package Description</h6> </td>
                        </tr>

                        <tr>
                            <td style = "border: none;"> dfsfsdf </td>
                        </tr>
                        <tr> </tr>

                        <tr> 
                        <td style = "border: none;"> <h6> Iterinary</h6> </td>
                        </tr>
                    </table>

                       
                            
                           
                        

                      
                
                       
                        
                    
                    
                
                  

                    

                    
                </div>
            </div>

        </div>

    
        <br>

      

      
</div>
    </div>
  


      </div>
  
  </div>
</div>


