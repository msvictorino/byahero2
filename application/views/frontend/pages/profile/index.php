
<style>
#imagePayment {
	background: #ccc;
	background-position: center center;
	background-size: cover;  
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
                                    <h4> <?= $user->first_name . ' ' . $user->last_name ?> </h4>
                                    <h6> username : <?= $user->username != "" ? $user->username : 'Username Not Set' ?></h6>
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
                                    <p> <?= $user->first_name . ' ' . $user->last_name ?> </p>
                                    <p> <?= $user->username != "" ? $user->username : 'Username Not Set' ?></p>
                                    <p> <?= $user->email != "" ? $user->email : 'Email Not Set' ?></p>
                                    <p> <?= $user->birthday != NULL ? date("Y-m-d", strtotime($user->birthday) ) : 'Birthday Not Set' ?></p>
                                    <p> <?= $user->marital_status != "" ? $user->marital_status : 'Marital Not Set' ?></p>
                                    <p> <?= $user->gender != "" ? $user->gender : 'Gender Not Set' ?></p> 
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
                                                <p><?= $user->address != "" ? $user->address : 'Address Not Set' ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $user->city != "" ? $user->city : 'City Not Set' ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Zip Code</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $user->zip != "" ? $user->zip : 'Zip Code Not Set' ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $user->contact_no != "" ? $user->contact_no : 'Phone No. Not Set' ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="container-fluid">
                                    <form id="frm-payment" enctype="multipart/form-data"> 
                                        <div class="row"> 
                                            <div class="form-group" style = "margin-bottom:0px;">
                                                    <div class = "col-sm-12 col-md-12"> 
                                                         <label for="imgInp">Upload Proof of Payment</label>
                                                    </div>            
                                            </div>
                                        </div>
                                        <?php
                                            $noData = false;
                                            if($paymentTransactions){
                                                if(sizeof($paymentTransactions) > 0){
                                                    ?>

                                        <div class="row mb-3"> 
                                            <div class = "col-sm-12 col-md-12"> 
                                                <div class="form-group">
                                                    <select name="transaction" id="" class="form-control">
                                                        <?php 
                                                            foreach($paymentTransactions as $t){
                                                                ?>
                                                            <option value="<?= $t->id ?>"><?= 'Tour Name: ' . $t->name . ' | Package Name : ' . $t->package_name .' | Date: ' . $t->travel_date ?></option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                                    <?php
                                                } else $noData = true;
                                            } else $noData = true;
                                        ?> 
                                        <?php if(!$noData): ?>
                                        <div class = "row">
                                            <div class="col-sm-12 col-md-6 mt-1"> 
                                                <div class="form-group">
                                                    <input type="file" name="imgInp" id="imgInp">
                                                </div>
                                            </div>

                                            <div class ="col-sm-12 col-md-6"> 
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success" >Upload</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">             
                                                <p class = "mb-2"style = "color:black;"> Preview Uploaded Picture </p>
                                                <div id="imagePayment"></div>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alert alert-warning">
                                                    No Pending Payments Available
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                    </form>
                                </div>
                            </div>


                             <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="profile-tab">
                                <?php
                                    $noData = false;
                                    if($transactions){
                                        if(sizeof($transactions) > 0){
                                            ?>
                                            <div class="row"> 
                                                <div class = "col-sm-12 col-md-12"> 
                                                    <div class="table-responsive">
                                                        <table class = "table table-striped table-sm"> 
                                                            <thead> 
                                                                <tr> 
                                                                        
                                                                    <th>Tour </th>
                                                                    <th>Package</th>
                                                                    <th>Date</th>   
                                                                    <th>Activity </th>
                                                                    <th>Actions</th> 
                                                                </tr>
                                                            </thead>

                                                            <tbody> 
                                                            <?php
                                                                foreach($transactions as $t){
                                                            ?>
                                                                <tr>
                                                                    <td><?= $t->name ?></td>
                                                                    <td><?= $t->package_name ?></td>
                                                                    <td><?= date("Y-m-d", strtotime($t->travel_date)) ?></td>
                                                                    <td>
                                                                        <?php
                                                                        if($t->upload_path == "" || $t->upload_path == NULL)// && $t->payment_status == 0 && $t->is_review == 0)
                                                                            echo '<span class="badge badge-info">For Upload</span>';
                                                                        else if($t->upload_path != "" || $t->upload_path != NULL)// == 1 && $t->is_review == 0)
                                                                            echo '<span class="badge badge-warning">For Proofing</span>';
                                                                        elseif($t->payment_status == 1 && $t->is_review == 0)
                                                                            echo '<span class="badge badge-warning">For Review</span>';
                                                                        elseif($t->payment_status == 1 && $t->is_review == 1)
                                                                            echo '<span class="badge badge-success">Done</span>';
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($t->upload_path == "" || $t->upload_path == NULL)// && $t->payment_status == 0 && $t->is_review == 0)
                                                                            echo ' <a class = "btn btn-success btn-sm" href="'. base_url('profile#profile'). '" style = "color:white;"a> <i class = "fa fa-upload" style = "color:white;"> </i>  </a>';
                                                                        else if($t->upload_path != "" || $t->upload_path != NULL)// == 1 && $t->is_review == 0)
                                                                            echo '<span class="badge badge-warning">Processing</span>';
                                                                        elseif($t->payment_status == 1 && $t->is_review == 0)
                                                                            echo ' <a class = "btn btn-warning btn-sm" style = "color:white;"a> <i class = "fa fa-comment" style = "color:white;"> </i> Rate </a>';
                                                                        // yung ginawa ko na user_after na view ayun yung kapag tapos na sya sa tour then ratings connected here kapag for review activity
                                                                        elseif($t->payment_status == 1 && $t->is_review == 1)
                                                                            echo '<span class="badge badge-success">Done</span>';
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                                }
                                                            ?>
                                                            <tbody>

                                                        </table>
                                                    
                                                    </div>
                                                        
                                                    <nav aria-label="Page navigation example" id="pagination_link">

                                                    </nav>  
                                                        </div>
                                                            
                                                </div>
                                            </div>
                                <?php
                                        }
                                        else $noData = true;
                                    }
                                    else $noData = true;
                                    if($noData):
                                ?>
                                <div class="row">
                                    <div class="col">
                                        <div class="alert alert-warning">
                                            No Data Available
                                        </div>
                                    </div>
                                </div>
                                    <?php endif; ?>
                                            
                                
                             </div>
                                        
                                        
                                
                                
                            </div>
                        </div>
                    </div>
                </div>   
        </div>
    
   
            
        
        
