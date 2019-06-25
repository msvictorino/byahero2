PROFILE
<style>
#imagePayment {
	background: #ccc;
	background-position: center center;
	background-size: cover; 
    height: 400px;
    border: 1px solid #bbb;
    display:none;
}
</style>

<div class="container">
    <form id="frm-payment" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="imgInp">Upload Proof of Payment</label>
                    <input type="file" name="imgInp" id="imgInp" class="form-control input-lg">
                </div>

            </div>
            
            <div class="col-sm-12 col-md-6">
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-info">Upload</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">             
                <div id="imagePayment"></div>
            </div>
        </div>
    </form>

</div>