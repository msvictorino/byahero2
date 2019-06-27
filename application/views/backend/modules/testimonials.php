<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Module</h1>
        
    </div>

    
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-md-2" id="txt-search-testimonial" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br>
    <section>

        <div class="table-responsive" id="testimonial_table">
        
        </div>
        
        <nav aria-label="Page navigation example" id="pagination_link_testimonial">

        </nav>
        
        

        

    </section>


    
<!-- Modal -->
<div class="modal fade" id="view-testimonial-modal" tabindex="-1" role="dialog" aria-labelledby="view-testimonial-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="frm-package">
                <div class="modal-header">
                    <h5 class="modal-title" id="view-testimonial-modalLabel">View Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3" id="test-rate">
                                    
                                </div> 
                                <div class="mb-3">
                                    <div class="alert alert-info" id="test-comment">

                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                </div>
            </form>
        </div>
    </div>
</div>