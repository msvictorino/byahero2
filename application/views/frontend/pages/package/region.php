<style>

#pribtn {
	width:40%;
	height:100px;
	background-color: #FE9900; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 280%;
    margin: 4px 2px;
    cursor: pointer;
}

.btn-regions{
	border-radius: 12px;
	background-color:#FE9900;
}

</style>
    <section class="page-section" id="team">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Travel Packages</h2>
              <br><br>
              <div class="container">
                  <a id="pribtn" class="btn-regions" type="button" href="<?= base_url('package?region=luzon') ?>">Luzon</a>
                  <a id="pribtn" class="btn-regions" type="button" href="<?= base_url('package?region=visayas') ?>">Visayas</a>
                  <a id="pribtn" class="btn-regions" type="button" href="<?= base_url('package?region=mindanao') ?>">Mindanao</a>
              </div>
            </div>
          </div>
      </div>
        
  </section>
