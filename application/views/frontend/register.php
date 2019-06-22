<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 250px;

  

}

.container {
  max-width: 1000px;
}
</style>
<div class="container bg-light">
<br>
<center>
<h4> Be a byaHERO member!</h4>
<h3> REGISTER ACCOUNT </h3>
   </center>
<img class="center" src="<?= base_url().'img/logo.png'?>">

        <div class="col-md-12 "> 
            <br>
            <form  id="frm-user-create" novalidate> 
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email">Email <span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="">
                        <div class="invalid-feedback">
                            Please enter a valid email address for account confirmation.
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="password"> Password</label>
                    <input type="text" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">
                        Password is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="rpassword">Confirm Password</label>
                    <input type="text" class="form-control" id="rpassword" name="rpassword">
                    <div class="invalid-feedback">
                        Confirm Password is required.
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="birthday">Birthdate</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="">
                        <div class="invalid-feedback">
                            Please select a valid date.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="marital_status">Marital Status</label>
                        <select class="custom-select d-block w-100" id="marital_status" name="marital_status" required>
                            <option value="">Choose...</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="gender">Gender</label>
                        <select class="custom-select d-block w-100" id="gender" name="gender" required>
                            <option value="">Choose...</option>
                            <option value="male"  >Male</option>
                            <option value="female"  >Female</option>
                        </select> 
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="contact_no">Mobile Number</label>
                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="eg. +639999999999" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tel_no">Landline Number</label>
                        <input type="text" class="form-control" id="tel_no" name="tel_no" placeholder="eg. 02-1234567" value="">
                    </div>
                </div>

            
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="" required>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Pasig City" value="" required>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div> 
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="eg. 1900" value="" required> 
                    </div>
                </div> 
        
            <hr class="mb-4">
                <button class="btn btn-lg btn-block" type="submit" style="background-color: #FE9900;"><B style="color:white">Create Account</B></button>
            <br>
        </form>
        </div>
    </div>
        
  </div>

