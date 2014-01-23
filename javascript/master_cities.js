$(document).ready(function (){
             var n=0;
    $("#add_cities").click(function(){
      $("#Master_addcities").slideToggle("slow");

        if(n === 0)
        {
          $(".addcities_close").text(" -");
          n=1;
        }
        else
        {
          $(".addcities_close").text("+");
          n=0;
        }
   });  
   
});
