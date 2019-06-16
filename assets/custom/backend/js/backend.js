
var protocol = window.location.protocol + "//";
var host = window.location.host;
var path = "/byahero2/"; 
var app_url = protocol + host + path; 


$(document).ready(function(){

    var page = 1;
    var url_user = app_url + "backend/getUsers/";
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
                    $('#pagination_link').html(response.pagination_link);
                }
                else{
                    $('#user_table').html(response.empty_message);
                }

                console.log(response);
                console.table(response);
            },
            error:function(response){
                console.log(response);
            }
        });
    }

    $(document).on("click", ".pagination li a", function(event){
        event.preventDefault();
        page = $(this).data("ci-pagination-page");
        load_user_data(page);
    });

    $(document).on("keyup", "#txt-search", function(event){
        var s = $(this).val();
        load_user_data(page, s);
        console.log(s);
    });
    
    load_user_data(page);
   
   });