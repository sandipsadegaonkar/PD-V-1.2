$(document).ready(function (){
        var n=0;
    $("#store_proflie").click(function (){
    $("#store_proflie1").slideToggle("slow");
      if(n === 0)
        {
          $(".add_profile_b").text(" -");
          n=1;
        }
        else
        {
          $(".add_profile_b").text("+");
          n=0;
        }
        });
   
});

