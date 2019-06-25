
var protocol = window.location.protocol + "//";
var host = window.location.host;
var path = "/byahero2/"; 
var app_url = protocol + host + path; 

    $(document).ready(function() {
        $("#frm-login").submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url : app_url + "login/do_login",
                type : "POST",
                dataType:  "json",
                data : formData,
                success : function(response){
                    console.log(response);
                    console.table(response);
                    if(response.success){
                        notify(response.message, "success");
                        if(response.is_booking)
                            window.location.href = app_url + "booking";

                        setTimeout(() => {
                            window.location.href = app_url; ///();// = "/";
                        }, 500);
                    }
                    else{
                        notify(response.message, "error");
                    }
                },
                error: function(response){
                    console.log(response);
                    console.table(response);
                }
            });
        });

        $("#btn-logout").click(function(){
            $.ajax({
                url: app_url + "logout",
                success: function(response){
                    notify("Successfully Logout", "success");
                        setTimeout(() => {
                            window.location.reload();// = "/";
                        }, 500);
                },
                error: function(response){
                    console.log(response);
                    console.table(response);
                }
            })
        });

        
            $(document).on("submit",".frm-package", function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: app_url + "frontend/savePackage",
                    type : "POST",
                    dataType:  "json",
                    data : formData,
                    success : function(response){
                        // console.log(response);
                        // console.table(response);
                        if(response.success){
                            notify(response.message, "success");
                            setTimeout(() => {
                                window.location.href = app_url + "booking" ;//();// = "/";
                            }, 500);
                        }
                        else{
                            notify(response.message, "error");
                        }
                    },
                    error: function(response){
                        console.log(response);
                        console.table(response);
                    }
                })
                console.log(formData);
            });

            $(document).on("submit","#frm-user-create", function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: app_url + "register/do_register",
                    type : "POST",
                    dataType:  "json",
                    data : formData,
                    success : function(response){
                        console.log(response);
                        console.table(response);
                        if(response.success){
                            
                            notify(response.message, "success");
                            if(response.is_booking)
                                window.location.href = app_url + "booking";
                            setTimeout(() => {
                                window.location.href = app_url ;//();// = "/";
                            }, 500);
                        }
                        else{
                            var txt = '';
                            var errorMessages = response.messages;
                            for (const key in errorMessages) {
                                if (errorMessages.hasOwnProperty(key)) {
                                    const message = errorMessages[key];
                                    if(message != "")
                                        showError(key, message);
                                }
                            }
                            notify(response.message, "error");
                        }
                    },
                    error: function(response){
                        console.log(response);
                        console.table(response);
                    }
                })
                console.log(formData);
            });

            $(document).on("submit","#frm-booking", function(e){
                e.preventDefault();
                $.ajax({
                    url: app_url + "booking/saveBooking",
                    dataType: "json",
                    success:function(response){
                        if(response.success){
                            notify(response.message, "success");
                            setTimeout(() => {
                                window.location.href = app_url + "profile"; 
                            }, 500);
                        }
                        else{
                            notify(response.message, "error");
                            setTimeout(() => {
                                window.location.href = app_url ; 
                            }, 500);
                        }
                        console.log(response);
                    },
                    error:function(response){
                        console.log(response);
                    }
                })
            });

            $(document).on("submit", "#frm-payment", function(e){
                e.preventDefault();
                // var formData = $(this).serialize();
                var formData =  new FormData(this);
                // var d = $("#imgInp")[0].files;
                // formData.append("img", d);
                console.log(formData);
                $.ajax({
                    url: app_url + "booking/uploadPayment",
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
                                $("#imagePayment").css('height',height + "px");
                            }
                            reader.readAsDataURL(input.files[0]);
                        };
                    }
                    
        
                }
            }
    
            $(document).on("change", "#imgInp",function() {
                readURL(this);
            });
    

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