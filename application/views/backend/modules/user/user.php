<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Account</h1>
        
    </div>

    <h2> <?= $user->first_name . ' ' . $user->last_name ?></h2> 
    <section>
 
        <div class="col-md-12 "> 
            <br>
            <form class="needs-validation" id="frm-user-update" novalidate>
                <input type="hidden" name="csrf" value="<?= $csrf ?>">
                <input type="hidden" name="user_id" value="<?= $user->id ?>">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="<?= $user->first_name ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="<?= $user->last_name ?>" required>
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
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password"> Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="" value="<?= $user->password ?>" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?= $user->email ?>">
                    <div class="invalid-feedback">
                        Please enter a valid email address for account confirmation.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="birthday">Birthdate</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $user->birthday ? date("Y-m-d", strtotime($user->birthday)) : NULL ?>">
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Marital Status</label>
                        <select class="custom-select d-block w-100" id="marital_status" name="marital_status" required>
                            <option value="">Choose...</option>
                            <option value="single" <?= $user->marital_status == 'single' ? 'selected' : '' ?> >Single</option>
                            <option value="married" <?= $user->marital_status == 'married' ? 'selected' : '' ?>>Married</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="gender">Gender</label>
                        <select class="custom-select d-block w-100" id="gender" name="gender" required>
                            <option value="">Choose...</option>
                            <option value="male" <?= $user->gender == 'male' ? 'selected' : '' ?> >Single</option>
                            <option value="female" <?= $user->gender == 'female' ? 'selected' : '' ?>>Married</option>
                        </select> 
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="contact_no">Mobile Number</label>
                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="eg. +639999999999" value="<?= $user->contact_no ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tel_no">Landline Number</label>
                        <input type="text" class="form-control" id="tel_no" name="tel_no" placeholder="eg. 02-1234567" value="<?= $user->tel_no ?>">
                    </div>
                </div>

            
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?= $user->address ?>" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Pasig City" value="<?= $user->city ?>" required>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div> 
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="eg. 1900" value="<?= $user->zip ?>" required> 
                    </div>
                </div>
                <div class="mb-3">
                    <label for="role">Role</label>
                    <select class="custom-select d-block w-100" id="role" name="role" required>
                        <option value="">Choose...</option>
                        <option value="admin" <?= $user->role == 'admin' ? 'selected' : '' ?> >Administrator</option>
                        <option value="user" <?= $user->gender == 'user' ? 'selected' : '' ?>>User</option>
                    </select> 
                </div>
        
            <hr class="mb-4">
                <button class="btn btn-lg btn-block" type="submit" style="background-color: #FE9900;"><B style="color:white">Edit Account</B></button>
            <br>
        </form>
        </div>
    </div>
        

    </section>