$(document).ready(function(){
    var n=0;
    $("#store_user").click(function (){
        $("#store_user1").slideToggle("slow");
         if(n === 0)
        {
          $(".add_store_user_b").text(" -");
          n=1;
        }
        else
        {
          $(".add_store_user_b").text("+");
          n=0;
        }
        });
 });

