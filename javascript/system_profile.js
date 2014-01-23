$(document).ready(function(){
    var n=0;
    $("#add_system_profile").click(function (){
        $("#system_profile_page").slideToggle("slow");
         if(n === 0)
        {
          $(".systemprofile_close").text(" -");
          n=1;
        }
        else
        {
          $(".systemprofile_close").text("+");
          n=0;
        }
        });
 });

