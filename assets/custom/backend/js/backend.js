
var protocol = window.location.protocol + "//";
var host = window.location.host;
var path = "/byahero2/"; 
var app_url = protocol + host + path; 


$(document).ready(function(){

    var page = 1;
    var url_user = app_url + "backend/getUsers/";
    var url_tour = app_url + "backend/getTours/";
    var url_package = app_url + "backend/getPackages/";
    var url_testimonial = app_url + "backend/getTestimonials/";
    function load_user_data(page, search = null)
    {
        var url = url_user + page + (search ? "?search="+search : '');
        $.ajax({
            url: url,
            method:"GET",
            dataType:"json",
            success:function(response){
                if(response.success){
                    $('#user_table').html(response.userTable);
                    $('#pagination_link_user').html(response.pagination_link);
                }
                else{
                    $('#user_table').html(response.empty_message);
                }

                // console.log(response);
                // console.table(response);
            },
            error:function(response){
                console.log(response);
            }
        });
    }


    function load_tour_data(page, search = null)
    {
        var url = url_tour + page + (search ? "?search="+search : '');
        $.ajax({
            url: url,
            method:"GET",
            dataType:"json",
            success:function(response){
                if(response.success){
                    $('#tour_table').html(response.userTable);
                    $('#pagination_link_tour').html(response.pagination_link);
                }
                else{
                    $('#tour_table').html(response.empty_message);
                }

                console.log(response);
                console.table(response);
            },
            error:function(response){
                console.log(response);
            }
        });
    }

    
    function load_package_data(page, search = null)
    {
        var url = url_package + page + (search ? "?search="+search : '');
        $.ajax({
            url: url,
            method:"GET",
            dataType:"json",
            success:function(response){
                if(response.success){
                    $('#package_table').html(response.userTable);
                    $('#pagination_link_package').html(response.pagination_link);
                }
                else{
                    $('#package_table').html(response.empty_message);
                }

                console.log(response);
                console.table(response);
            },
            error:function(response){
                console.log(response);
            }
        });
    }

    
    function load_testimonial_data(page, search = null)
    {
        var url = url_testimonial + page + (search ? "?search="+search : '');
        $.ajax({
            url: url,
            method:"GET",
            dataType:"json",
            success:function(response){
                if(response.success){
                    $('#testimonial_table').html(response.userTable);
                    $('#pagination_link_testimonial').html(response.pagination_link);
                }
                else{
                    $('#testimonial_table').html(response.empty_message);
                }

                console.log(response);
                console.table(response);
            },
            error:function(response){
                console.log(response);
            }
        });
    }


    $("#frm-user-update").submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: app_url + "backend/updateUser",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response){
                console.log(response);
                if(response.success){
                    notify(response.message, "success");
                    setTimeout(() => {
                        window.location = "../user";
                    }, 1000);
                }
                else{
                    notify(response.message, "warning");
                }
            },
            error: function(response){
                console.log(response);
            }
        })
    });

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            // Get Image size
            // var fileInput = $(this).find("#imgInp")[0],
            //     file = fileInput.files && fileInput.files[0];
            var file = input.files && input.files[0];
            if( file ) {
                var img = new Image();

                img.src = window.URL.createObjectURL( file );

                img.onload = function() {
                    var width = img.naturalWidth,
                        height = img.naturalHeight;

                    window.URL.revokeObjectURL( img.src );

                    reader.onload = function(e) {
                        console.log(e);
                        // $('#blah').attr('src', e.target.result);
                        // $("#blah").hide();
                        $("#imagePayment").show();
                        $("#imagePayment").css('background-image','url('+ e.target.result + ')'); 
                        $("#imagePayment").css('height',"350px");
                        $("#imagePayment").css('width',"350px");
                    }
                    reader.readAsDataURL(input.files[0]);
                };
            }
            

        }
    }

    $(document).on("change", "#imgInp",function() {
        readURL(this);
    });

    // For Locations Module
    // Create Location
    $(document).on("submit", "#frm-location", function(e){
        e.preventDefault();
        // var formData = $(this).serialize();
        var formData =  new FormData(this);
        // var d = $("#imgInp")[0].files;
        // formData.append("img", d); 
        $.ajax({
            url: app_url + "backend/createLocation",
            type: "POST",
            data : formData,
            dataType : "json",
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            cache: false,//Options to tell jQuery not to process data or worry about content-type.
            success: function(response){
                console.log(response);
                if(response.success){
                    notify(response.message, "success");
                    setTimeout(() => {
                        window.location.reload(); 
                    }, 1000);
                }
                else{
                    var errorMessage = response.message;
                    if(response.error_upload)
                        errorMessage = response.error;

                    notify(errorMessage, "error"); 
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    });
    
    // For Tours Module

    $(document).on("change", "#region-tour", function(e){
        var val = $(this).val();
        console.log(val);
        $.ajax({
            url : app_url + "backend/getLocationByRegion",
            type : "POST",
            data : { region : val },
            dataType : "json",
            success: function(response){
                if(response.success){
                    $("#location-tour").html(response.html);
                }
                
                console.log(response);
            },
            error: function(response){
                console.log(response);
            }
        })
    });
    // Create Tour
    $(document).on("submit", "#frm-tour", function(e){
        e.preventDefault();
        // var formData = $(this).serialize();
        var formData =  new FormData(this);
        // var d = $("#imgInp")[0].files;
        // formData.append("img", d); 
        $.ajax({
            url: app_url + "backend/createTour",
            type: "POST",
            data : formData,
            dataType : "json",
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            cache: false,//Options to tell jQuery not to process data or worry about content-type.
            success: function(response){
                console.log(response);
                if(response.success){
                    notify(response.message, "success");
                    setTimeout(() => {
                        window.location.reload(); 
                    }, 1000);
                }
                else{
                    var errorMessage = response.message;
                    if(response.error_upload)
                        errorMessage = response.error;
                    
                    var errorMessages = response.messages;
                    for (const key in errorMessages) {
                        if (errorMessages.hasOwnProperty(key)) {
                            const message = errorMessages[key];
                            if(message != "")
                                showError(key, message);
                        }
                    }
                    errorMessage = errorMessage ? errorMessage : "Please check all fields";
                    notify(errorMessage, "error"); 
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    });

    var ctr = 1;
    // Create Package
    $(document).on("submit", "#frm-package", function(e){
        e.preventDefault();
        // var formData = $(this).serialize();
        var formData =  new FormData(this);
        // var d = $("#imgInp")[0].files;
        // formData.append("img", d); 
        $.ajax({
            url: app_url + "backend/createPackage",
            type: "POST",
            data : formData,
            dataType : "json",
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            cache: false,//Options to tell jQuery not to process data or worry about content-type.
            success: function(response){
                console.log(response);
                if(response.success){
                    notify(response.message, "success");
                    setTimeout(() => {
                        window.location.reload(); 
                    }, 1000);
                }
                else{
                    var errorMessage = response.message;
                    if(response.error_upload)
                        errorMessage = response.error;
                    
                    var errorMessages = response.messages;
                    for (const key in errorMessages) {
                        if (errorMessages.hasOwnProperty(key)) {
                            const message = errorMessages[key];
                            if(message != "")
                                showError(key, message);
                        }
                    }
                    errorMessage = errorMessage ? errorMessage : "Please check all fields";
                    notify(errorMessage, "error"); 
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    });

    //Create Package Pax
    $(document).on("submit", "#frm-package-pax", function(e){
        e.preventDefault();
        // var formData = $(this).serialize();
        var formData =  new FormData(this);
        // var d = $("#imgInp")[0].files;
        // formData.append("img", d); 
        $.ajax({
            url: app_url + "backend/createPackagePax",
            type: "POST",
            data : formData,
            dataType : "json",
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            cache: false,//Options to tell jQuery not to process data or worry about content-type.
            success: function(response){
                console.log(response);
                if(response.success){
                    notify(response.message, "success");
                    setTimeout(() => {
                        window.location.reload(); 
                    }, 1000);
                }
                else{
                    var errorMessage = response.message; 
                    errorMessage = errorMessage ? errorMessage : "Please check all fields";
                    notify(errorMessage, "error"); 
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    });

    $(document).on("click", ".btn-add-package", function(event){
        var tour_id = $(this).data("id");
        $("#tour-id").val(tour_id);   
    });

    $(document).on("click", ".btn-add-package-pax", function(event){
        var package_id = $(this).data("id");
        $("#package-id").val(package_id);   
        $.ajax({
            url: app_url + "backend/getPackagesPax",
            type : "POST",
            data : { package_id : package_id},
            dataType : "json",
            success: function(response){
                console.log(response);
                if(response.success){
                    $("#div-package-pax").html(response.html);
                }
                
            },
            error: function(response){
                console.log(response);
            }

        });
    });

    $(document).on("click", ".btn-view-rate", function(event){
        var test_id = $(this).data("id");
        $("#test-id").val(test_id);   
        $.ajax({
            url: app_url + "backend/getTestimonialById",
            type : "POST",
            data : { test_id : test_id},
            dataType : "json",
            success: function(response){
                console.log(response);
                var res = response.data;
                if(response.success){
                    var rate = '';
                    rate += "RATE : ";
                    for(var i = 0;i < res.rate;i++){
                        rate += ' <i class="fa fa-star"></i> ';
                    }
                    $("#test-rate").html(rate);
                    $("#test-comment").html(res.comment);
                }
                
            },
            error: function(response){
                console.log(response);
            }

        });
    });

    
    $(document).on("click", ".btn-update-test-status", function(event){
        var test_id = $(this).data("id");
        $("#test-id").val(test_id);   
        $.ajax({
            url: app_url + "backend/updateTestimonialStatus",
            type : "POST",
            data : { test_id : test_id},
            dataType : "json",
            success: function(response){
                console.log(response); 
                if(response.success){
                    notify(response.message, "success");
                    setTimeout(() => {
                        window.location.reload(); 
                    }, 1000);
                }
                else{
                    notify(response.message, "error"); 
                }
                
            },
            error: function(response){
                console.log(response);
            }

        });
    });

    

    $(document).on("click", "#btn-add-package-pax", function(event){
        event.preventDefault();
        var html = `<div class="row mb-3" id="div-child-pax-`+ctr+`">
                        <div class="col"> 
                                
                            <label for="pax">Pax</label>
                            <input type="number" min=0 name="pax[]" class="form-control ">
                        </div>
                        <div class="col"> 
                            <label for="amount">Amount</label>
                            <input type="number" min=0 name="amount[]" placheholder="Amount" class="form-control ">
                        </div>
                        <div class="col">
                            <button class="btn btn-danger btn-sm btn-remove-pax ml-2 mt-3" data-no="`+ctr+`"><i class="fa fa-trash"></i></button> 
                        </div>
                    </div>`;
        $("#div-package-pax").append(html);
        ctr++;
    });

    $(document).on("click", ".btn-remove-pax", function(event){
        event.preventDefault();
        var remove_no = $(this).data("no");
        $("#div-child-pax-"+remove_no).remove();
    });
    
    $(document).on("click", "#pagination_link_testimonial .pagination li a", function(event){
        event.preventDefault();
        page = $(this).data("ci-pagination-page");
        load_testimonial_data(page);
    });
 
    $(document).on("click", "#pagination_link_package .pagination li a", function(event){
        event.preventDefault();
        page = $(this).data("ci-pagination-page");
        load_package_data(page);
    });

    $(document).on("click", "#pagination_link_tour .pagination li a", function(event){
        event.preventDefault();
        page = $(this).data("ci-pagination-page");
        load_tour_data(page);
    });

    $(document).on("click", "#pagination_link_user .pagination li a", function(event){
        event.preventDefault();
        page = $(this).data("ci-pagination-page");
        load_user_data(page);
    });

    $(document).on("keyup", "#txt-search-user", function(event){
        var s = $(this).val();
        load_user_data(page, s);
        console.log(s);
    });

    $(document).on("keyup", "#txt-search-tour", function(event){
        var s = $(this).val();
        load_tour_data(page, s);
        console.log(s);
    });

    $(document).on("keyup", "#txt-search-package", function(event){
        var s = $(this).val();
        load_package_data(page, s);
        console.log(s);
    });

    $(document).on("keyup", "#txt-search-testimonial", function(event){
        var s = $(this).val();
        load_user_data(page, s);
        console.log(s);
    });

    load_package_data(page);
    load_tour_data(page);
    load_user_data(page);
    load_testimonial_data(page);

    function notify(title, type){
        swal({
            title: title,
            icon: type,
        });
    }
    
    function showError(id, message){
        if(message != ""){
            $("#error-"+id).show();
            $("#error-"+id).html(message);
        }
        else{
            $("#error-"+id).show();
            $("#error-"+id).html("");
        }
    }
   
   });