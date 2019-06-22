<style>

#pribtn {
	width:40%;
	height:100px;
	margin:10px;
	border-radius:9px;
	background-color:#FE9900;
	color:white;
	font-size:280%;
    text-decoration: none;
}

</style>
    <section class="page-section" id="team">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Travel Packages</h2>
              <br><br>
              <div class="container">
                  <a id="pribtn" type="button" href="<?= base_url('frontend/package?region=luzon') ?>">Luzon</a>
                  <a id="pribtn" type="button" href="<?= base_url('frontend/package?region=visayas') ?>">Visayas</a>
                  <a id="pribtn" type="button" href="<?= base_url('frontend/package?region=mindanao') ?>">Mindanao</a>
              </div>
            </div>
          </div>
      </div>
        
  </section>
