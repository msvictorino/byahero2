<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Location</h1>    
    </div>

<div class="accordion" id="accordionExample" style = "border-color:#f3f3f3;">

  <div class="card" style = "border-color:#f3f3f3;">
    <div class="card-header" id="headingOne">
      <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <h5 class="mb-0"> Luzon </h5>
        </button>
    
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class = "row">
    <div class = col-md-7>
    <form class="form-inline ">
        <input class="form-control mr-md-2" id="txt-search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-3" type="submit">Search</button>  
    </form>
    </div>
    <div class = col-md-5>
    <a href = "<?= base_url()?>admin/location_create" class="btn btn-info my-3 pull-right" style = "color:white;"> <i class = "fa fa-plus"> </i> Add Location</a>
    </div>
    </div>
    <section>

        <div class="table-responsive">
            <table class = "table table-striped table-sm"> 
                <thead> 
                    <tr> 
                        <th>Location Name</th>   
                        <th>Region</th>   
                        <th> # of tours created </th>
                        <th>Actions</th> 
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> Baguio</td>
                        <td> Luzon</td>
                        <td> 13</td>
                        <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
                                <a class = "btn btn-warning btn-sm"> <i class = "fa fa-edit" style = "color:white;"> </i>  </a>
                                <a class = "btn btn-danger btn-sm"> <i class = "fa fa-trash-o" style = "color:white;"> </i>  </a>
                        </td>
                    </tr>
                <tbody>

            </table>
        
        </div>
        
        <nav aria-label="Page navigation example" id="pagination_link">

        </nav>
      </div>
    </div>
  </div>


  <div class="card" style = "border-color:#f3f3f3;">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h5 class="mb-0"> Visayas </h5> 
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class = "row">
    <div class = col-md-7>
    <form class="form-inline ">
        <input class="form-control mr-md-2" id="txt-search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-3" type="submit">Search</button>  
    </form>
    </div>
    <div class = col-md-5>
    <a href = "<?= base_url()?>admin/location_create" class="btn btn-warning my-3 pull-right" style = "color:white;"> <i class = "fa fa-plus"> </i> Add Location</a>
    </div>
    </div>
    
    <section>

        <div class="table-responsive">
            <table class = "table table-striped table-sm"> 
                <thead> 
                    <tr> 
                        <th>Location Name</th>   
                        <th>Region</th>   
                        <th> # of tours created </th>
                        <th>Actions</th> 
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> Cebu</td>
                        <td> Visayas</td>
                        <td> 13</td>
                        <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
                                <a class = "btn btn-warning btn-sm"> <i class = "fa fa-edit" style = "color:white;"> </i>  </a>
                                <a class = "btn btn-danger btn-sm"> <i class = "fa fa-trash-o" style = "color:white;"> </i>  </a>
                        </td>
                    </tr>
                <tbody>

            </table>
        
        </div>
        
        <nav aria-label="Page navigation example" id="pagination_link">

        </nav>
</section>
      </div>
    </div>
  </div>
      

  
  <div class="card" style = "border-color:#f3f3f3;">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn  collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h5 class="mb-0"> Mindanao </h5>  
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <div class = "row">
    <div class = col-md-7>
    <form class="form-inline ">
        <input class="form-control mr-md-2" id="txt-search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-3" type="submit">Search</button>  
    </form>
    </div>
    <div class = col-md-5>
    <a href = "<?= base_url()?>admin/location_create" class="btn btn-success my-3 pull-right" style = "color:white;"> <i class = "fa fa-plus"> </i> Add Location</a>
    </div>
    </div>
    
    <section>

        <div class="table-responsive">
            <table class = "table table-striped table-sm"> 
                <thead> 
                    <tr> 
                        <th>Location Name</th>   
                        <th>Region</th>   
                        <th> # of tours created </th>
                        <th>Actions</th> 
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> Cebu</td>
                        <td> Visayas</td>
                        <td> 13</td>
                        <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
                                <a class = "btn btn-warning btn-sm"> <i class = "fa fa-edit" style = "color:white;"> </i>  </a>
                                <a class = "btn btn-danger btn-sm"> <i class = "fa fa-trash-o" style = "color:white;"> </i>  </a>
                        </td>
                    </tr>
                <tbody>

            </table>
        
        </div>
        
        <nav aria-label="Page navigation example" id="pagination_link">

        </nav>
</section>
      </div>
    </div>
  </div>
</div>

   

        

    