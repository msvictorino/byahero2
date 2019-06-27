<style> 
 @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label {
    margin-bottom: 0.5rem;
    padding: 0; 
    /* margin-left:0.5rem; */
    }
/* body{ margin: 20px; } */
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.5rem;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

.fill-gold{
    color:#FFED85;   
}

.scroll{
  overflow-y: auto;
  max-height: 650px;
}

</style>
<div class="container">
   <div class="py-5 text-center">
    <h2>Review Our Service</h2>
    <p class="lead"> Your Opinion Matters!</p>
    <p> If you're happy with our service, please let us know so that we may be continously inspired to improve and 
    do better.</p>
  </div>

  <div class="row">
    <div class="col-md-5 order-md-2 mb-4">  
      <div class="card border-warning" style = "height: 738px;">
        <div class ="card-header border-warning"> 
            <p class = "lead text-center" style = "margin-bottom:0px;"> What our customers saying about us</p>
        </div>
            <div class = "scroll">
                    <div class="card-body">
                            <div class="card text-white bg-info mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style = "margin-bottom: 1px; font-weight: 600;">Maria Clara </h5>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <p class="card-text mt-2">Kristel and Jowen did a good job in helping us with our needs. I've always trusted Jeron to handle our travel requirements and they've never disappointed. Highly recommended!</p>
                                    </div>
                            </div>
                            <div class="card text-white bg-info mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style = "margin-bottom: 1px; font-weight: 600;">Manny Pacquiao </h5>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <p class="card-text mt-2">I appreciate the fast turnaround and assistance when we had a problem when we arrived in Bangkok. Great customer service on Facebook and looking forward to my next trip with Jeron Travel! More Power!</p>
                                    </div>
                            </div>
                            <div class="card text-white bg-info mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style = "margin-bottom: 1px; font-weight: 600;">Manny Pacquiao </h5>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                        <p class="card-text mt-2">I appreciate the fast turnaround and assistance when we had a problem when we arrived in Bangkok. Great customer service on Facebook and looking forward to my next trip with Jeron Travel! More Power!</p>
                                    </div>
                            </div>
                    </div>
            </div>
        </div>
      </div>
    

    <div class="col-md-7 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card text-center" style = "border-style: dashed;">
                    <div class="card-body">
                        <img src="<?= base_url()?>img/feedback.jpg" class="card-img-top" alt="...">
                        <!-- insert here kung ano picture ng package/tour ang rate nila -->
                        <p class="card-text mt-2"> Batanes Tour </p>
                    </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName" style = "display:block;">Kindly rate us, 5-highest and 1-lowest</label> 
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
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