
var protocol = window.location.protocol + "//";
var host = window.location.host;
var path = "/byahero"; 
var app_url = protocol + host + path; 

    $(document).ready(function() {
        $("#frm-login").submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url : app_url + "/login/do_login",
                type : "POST",
                dataType:  "json",
                data : formData,
                success : function(response){
                    console.log(response);
                    console.table(response);
                },
                error: function(response){
                    console.log(response);
                    console.table(response);
                }
            });
        });

    });