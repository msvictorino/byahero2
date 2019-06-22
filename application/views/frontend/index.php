
  <style>
.checked {
  color: orange;
}

#pribtn {
	width:40%;
	height:100px;
	margin:10px;
	border-radius:9px;
	background-color:#FE9900;
	color:white;
	font-size:280%;
}
</style>
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Start your getaway here with us!</div>
       <center>  <img src="<?= base_url()?>img/frontend/logos/logo.png" alt="Italian Trulli"> <br>
       <div class="row">
          <div class="col-md-8 mb-3">
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>Baguio</option>
              <option>Batanes</option>
              <option>Cebu</option>
              <option>Palawan</option>
              <option>Iloilo</option>
              <option>La Union</option>
              <option>Bataan</option>
              <option>Batangas</option>
              <option>Coron</option>
              <option>Davao</option>
              <option>Ilocos</option>
            </select>
          </div>
          
          <div class="col-md-4 mb-3">

          <button class="btn" type="submit" style="background-color: #FE9900;"><B style="color:white">Find Tours</B></button>

            </div>
          </div>
        </div>
              </center>
          </form>
      </div>
    </div>
  </header>

  <!-- Popular Destinations -->
  <section class="bg-light page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Popular Destinations</h2><br><br>
        </div>
      </div>
      <div class="container">
	<div class="row">
		<div class="container">
	<div class="row">
	    <div class="col-md-4">
    		<div class="card mb">
              <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary mb">Read More</button>
              </div>
              <div class="card-footer">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </div>
            </div>
        </div>
        <div class="col-md-4">
    		<div class="card mb">
              <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary mb">Read More</button>
              </div>
              <div class="card-footer">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </div>
            </div>
        </div>
        <div class="col-md-4">
    		<div class="card mb">
              <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary mb">Read More</button>
              </div>
              <div class="card-footer">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              </div>
            </div>
        </div>
	</div>
</div>
	</div>
</div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About us</h2>
          <img class="center" src="<?= base_url().'img/logo.png'?>">
            <p style="align: left"> Who are we? What do we run? The world! Who run the world? GIRLS!
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
             galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
              the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with th
              release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
      </div>
  </div>
 
  </section>

    <!-- About -->
    <section class="page-section" id="team">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Travel Packages</h2>
              <br><br>
              <div class="container">
                  <button id="pribtn" type="button" href="<?= base_url('frontend/package') ?>">Luzon</button>
                  <button id="pribtn" type="button" >Visayas</button>
                  <button id="pribtn">Mindanao</button>
              </div>
            </div>
          </div>
      </div>
        
  </section>

  <!-- Meet the Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Meet the team!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?= base_url()?>img/frontend/team/1.jpg" alt="">
            <h4>Coleen Santiano</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?= base_url()?>img/frontend/team/2.jpg" alt="">
            <h4>JM Urgelles</h4>
            <p class="text-muted">Quality Assurance Analyst</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?= base_url()?>img/frontend/team/3.jpg" alt="">
            <h4>Mica Victorino</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Well, my family's role for me is so important, because there was the wa-- they're, they was the one who's... very... haha... Oh I'm so sorry. Umm, my Pamily... my Pamily... Oh my God. I'm... Ok. I'm so sorry. I... I told you that I'm so confident. </p>        </div>
      </div>
    </div>
  </section>

  
   <!-- Contact Us -->
   <section class="page-section" id="contactus">
<div class="container" style=" max-width: 1000px;">
   <div class="py-5 text-center">
    <h2>Contact Us</h2>
    <p class="lead"> Your Opinion Matters!</p>
    <p> If you're happy with our service, please let us know so that we may be continously inspired to improve and 
    do better.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <div class="col-md-5">
       <h6><b>Customer Service:</b> <br></h6>
        <p>Phone: +639179097260<br /></p>
        E-mail: <a href="mailto:support@mysite.com">byaherosupport@gmail.com</a><br />
        <br /><br />
        <b>Headquarter:</b><br />
        Far Eastern University <br />
        Las vegas street 201<br />
        55001 Nevada, USA<br />
        Phone: +1 145 000 101<br />
        <a href="mailto:usa@mysite.com">byhaero@gmail.com</a><br />
      </div>
    </div>
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Contact Number <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="enumbermail" placeholder="+639**********">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Travel Buddy<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="enumbermail">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">What did you like about our service? Please write your comments and sugggestions below:<span class="text-muted"></span></label>
          <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"></textarea>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
   
        <hr class="mb-4">
        <button class="btn btn-lg btn-block" type="submit" style="background-color: #FE9900;"><B style="color:white">SEND</B></button>
      </form>
    </div>
  </div>
</div>

   </section>
<!-- Contact -->
  <section class="page-section" id="contact">
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Byahero 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
