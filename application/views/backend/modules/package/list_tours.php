<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tours Created</h1>
        
    </div>

    <div class = "row">
    <div class = col-md-7>
    <form class="form-inline ">
        <input class="form-control mr-md-2" id="txt-search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-3" type="submit">Search</button>  
    </form>
    </div>
    <div class = col-md-5>
    <a href = "<?= base_url()?>admin/tour_create" class="btn btn-info my-3 pull-right" style = "color:white;"> <i class = "fa fa-plus"> </i> Add Tour</a>
    </div>
    </div>
    <section>

        <div class="table-responsive">
            <table class = "table table-striped table-sm"> 
                <thead> 
                    <tr>   
                        <th>Tour Name</th>   
                        <th>Location</th>   
                        <th>Region</th> 
                        <th>Actions</th> 
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> BANAUE-SAGADA OPTIONAL TOURS </td>
                        <td> BANAUE-SAGADA</td>
                        <td> Luzon </td>
                        <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
                             <a class = "btn btn-danger btn-sm"> <i class = "fa fa-trash-o" style = "color:white;"> </i>  </a>
                             <a class = "btn btn-warning btn-sm"style = "color:white;" href = "<?= base_url()?>admin/package_create"> <i class = "fa fa-edit" style = "color:white;"> </i> Create a package </a>
                        </td>
                    </tr>

                <tbody>

            </table>
        
        </div>
        
        <nav aria-label="Page navigation example" id="pagination_link">

        </nav>
        
        

        

    </section>