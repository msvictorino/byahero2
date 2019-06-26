
<style>
#imagePayment {
	background: #ccc;
	background-position: center center;
	background-size: cover; 
    height: 400px;
    border: 1px solid #bbb;
    display:none;
}

/* body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
} */
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #f3f3f3;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 0.5rem;
    width: 100%;
    padding: 2%;
    /* font-weight: 600; */
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
    /* color: #fe9900; */
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #fe9900;
}
.profile-work{
    padding: 14%;
    margin-top: -18%;
}
.profile-work span{
    font-size: 18px;
    color: #818182;
    font-weight: 600;
    /* margin-top: 10%; */
    vertical-align:middle;
    display:inline;
}
.profile-work p{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 13px;
    margin: 0px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>


    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h4> Coleen Santiano </h4>
                                    <h6> coleeng</h6>
                                    <p class="proile-rating"> Your recent activity: Booked Reservation (Mactan Tour) on June 2,2019</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <i class = "fa fa-user fa-sm"> </i> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <i class = "fa fa-list fa-sm"> </i> To-Do</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false"><i class = "fa fa-history fa-sm"> </i>  History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a class = "btn btn-warning btn-sm"> <i class = "fa fa-edit" > </i>  Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <i class = "fa fa-user fa-sm"> </i> <span>About</span> 
                            <div class ="row">
                                <div class = "col-md-7"> 
                                    <p> Coleen Santiano </p>
                                    <p> Coleeng</p>
                                    <p> coleensantiano@me</p>
                                    <p> 03-30-98</p>
                                    <p> Single</p>
                                    <p> Femaile</p>
                                    <p> +639123456789</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Block 9 Lot 2 Sugartowne Batasan Hills</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Quezon City</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Zip Code</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>1126</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telephone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row"> 
                                            <div class="form-group" style = "margin-bottom:0px;">
                                                    <div class = "col-sm-12 col-md-12"> 
                                                         <label for="imgInp">Upload Proof of Payment</label>
                                                    </div>            
                                            </div>
                                        </div>

                                        <div class="row mb-3"> 
                                                    <div class = "col-sm-6 col-md-3"> 
                                                         <p style = "margin-bottom:0px;"> Tour: </p> 
                                                         <p style = "margin-bottom:5px;"> Package: </p> 
                                                    </div>   

                                                    <div class = "col-sm-6 col-md-6"> 
                                                         <p style = "color: black; margin-bottom:0px;"> Insert Name </p> 
                                                         <p style = "color: black; margin-bottom:5px;"> Insert Name </p> 
                                                    </div>
                                                    
                                        </div>

                                            <div class = "row">
                                             <form id = "frm-payment" enctype = "multipart/form-data"> 
                                                <div class="col-sm-12 col-md-6 mt-1"> 
                                                    <div class="form-group">
                                                        <input type="file" name="imgInp" id="imgInp">
                                                    </div>
                                                </div>

                                                <div class ="col-sm-12 col-md-6"> 
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success" style = "width:100px">Upload</button>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-9">             
                                                <div id="imagePayment">
                                                <p class = "mb-2"style = "color:black;"> Preview Uploaded Picture </p>
                                                    <div class="card text-center" style = "border-style: dashed;">
                                                        <div class="card-body">
                                                            <img src="..." class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
                                </div>


                             <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row"> 
                                                    <div class = "col-sm-12 col-md-12"> 
                                                    <div class="table-responsive">
                                                        <table class = "table table-striped table-sm"> 
                                                            <thead> 
                                                                <tr> 
                                                                      
                                                                    <th> Package </th>
                                                                    <th>Date</th>   
                                                                    <th> Activity </th>
                                                                    <th>Actions</th> 
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                   
                                                                    <td> Mactan Island Hopping</td>
                                                                    <td> 06/21/29</td>
                                                                    <td> For review</td>
                                                                    <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
                                                                            <a class = "btn btn-warning btn-sm" style = "color:white;"a> <i class = "fa fa-comment" style = "color:white;"> </i> Rate this tour </a>
                                                                    </td>
                                                                    <!-- If na-rate nya na mawawala na ung button na upload payment magiging katulad nung nasa pinakadulo na row -->
                                                                </tr>

                                                                <tr> 
                                                                    <td> North and South Batan Tour</td>
                                                                    <td> 06/21/29</td>
                                                                    <td> Upload payment</td>
                                                                    <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
                                                                            <a class = "btn btn-success btn-sm" style = "color:white;"a> <i class = "fa fa-upload" style = "color:white;"> </i> Upload Payment </a>
                                                                    </td>
                                                                    <!-- If na-upload nya na mawawala na ung button na upload payment magiging katulad nung nasa baba -->
                                                                </tr>

                                                                <tr> 
                                                                    <td> Bohol Countryside Tour</td>
                                                                    <td> 06/21/29</td>
                                                                    <td> Done</td>
                                                                    <td> <a class = "btn btn-primary btn-sm"> <i class = "fa fa-eye" style = "color:white;"> </i>  </a>
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
                                            
                                
                             </div>
                                        
                                        
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    
   
            
        
        
