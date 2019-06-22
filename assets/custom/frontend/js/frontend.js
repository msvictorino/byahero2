
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
                        setTimeout(() => {
                            window.location.reload();// = "/";
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
                        console.log(response);
                        console.table(response);
                        if(response.success){
                            notify(response.message, "success");
                            setTimeout(() => {
                                window.location.href = app_url + "/booking" ;//();// = "/";
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
                            if(response.is_booking)
                                window.location.href = app_url + "/booking";
                            notify(response.message, "success");
                            setTimeout(() => {
                                window.location.href = app_url + "/" ;//();// = "/";
                            }, 500);
                        }
                        else{
                            var txt = '';
                            
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

        function notify(title, type){
            swal({
                title: title,
                icon: type,
            });
        }

    });