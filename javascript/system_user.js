$(document).ready(function(){
    var n=0;
    $("#add_system_user").click(function (){
        $("#system_user_page").slideToggle("slow");
         if(n === 0)
        {
          $(".systemuser_close").text(" -");
          n=1;
        }
        else
        {
          $(".systemuser_close").text("+");
          n=0;
        }
        });
 });

