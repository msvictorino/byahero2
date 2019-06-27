<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Packages Created</h1>
        
    </div>

    <div class = "row">
    <div class = col-md-7>
    <form class="form-inline ">
        <input class="form-control mr-md-2" id="txt-search-package" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-3" type="submit">Search</button>  
    </form>
    </div>
    <div class = col-md-5>
        <!-- <a href = "<?= base_url()?>admin/package_create" class="btn btn-info my-3 pull-right" style = "color:white;"> <i class = "fa fa-plus"> </i> Add Package</a> -->
    </div>
    </div>
    <section>

        <div class="table-responsive" id="package_table">
        
        </div>
        
        <nav aria-label="Page navigation example" id="pagination_link_package">

        </nav>
        
        
        

        

    </section>

    
<!-- Modal -->
<div class="modal fade" id="add-package-pax-modal" tabindex="-1" role="dialog" aria-labelledby="add-package-pax-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="frm-package-pax">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-package-pax-modalLabel">Add Package Pax</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="package_id" id="package-id">
                    <div class="container"> 
                        <div class="row">
                            <div class="col">
                                <h5>Pax per price</h5>
                                <p>Examples:</p>
                                <p> 1pax - P3,000.00 : Total P3,000.00</p>
                                <p> 2pax = P1,600.00 : Total P3,200.00</p>
                                <button class="btn btn-info btn-sm" id="btn-add-package-pax"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div id="div-package-pax">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>