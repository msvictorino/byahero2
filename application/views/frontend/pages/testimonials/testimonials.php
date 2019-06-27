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
                          <?php
                            $noData = true;
                            if($testimonials){
                              if(sizeof($testimonials) > 0){
                                $noData = false;
                                foreach($testimonials as $t){
                                ?>

                                  <div class="card text-white bg-info mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title" style = "margin-bottom: 1px; font-weight: 600;"><?= $t->first_name . ' ' . $t->last_name ?></h5>
                                            <?php 
                                              for($i = 0;$i < $t->rate; $i++){
                                                ?>

                                                  <i class = "fill-gold fa fa-star fa-xs card-subtitle"> </i>
                                                <?php
                                              }
                                              ?> 
                                            <p class="card-text mt-2"><?= $t->comment ?></p>
                                        </div>
                                  </div>
                                <?php
                                }
                              }
                            }
                            if($noData){
                              ?>
                              <div class="alert alert-warning">
                                No Testimonials
                              </div>
                              <?php
                            }
                          ?> 
                    </div>
            </div>
        </div>
      </div>
    

    <div class="col-md-7 order-md-1">
      <form id="frm-testimonial" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-4 mb-3">
                <img src="<?= base_url()?>img/feedback.jpg" class="card-img-top" alt="...">
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="rating" style = "display:block;">Kindly rate us, 5-highest and 1-lowest</label> 
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>
            <div class="invalid-feedback" id="error-rating">
              Valid rate name is required.
            </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="email">What did you like about our service? Please write your comments and sugggestions below:<span class="text-muted"></span></label>
          <textarea name="comment" id="comment" class="form-control" rows="9" cols="25" required="required"></textarea>
          <div class="invalid-feedback" id="error-comment">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
   
        <hr class="mb-4">
        <button class="btn btn-lg btn-block" type="submit" style="background-color: #FE9900;"><B style="color:white">SEND</B></button>
      </form>
    </div>
  </div>
</div>