
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

        function notify(title, type){
            swal({
                title: title,
                icon: type,
            });
        }

    });