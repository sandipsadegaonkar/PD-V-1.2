$(document).ready(function (){
          var n=0;
   $("#add_area").click(function(){
      $("#Master_addarea").slideToggle("slow");
      if(n === 0)
      {
          $(".addarea_close").text("-");
          n=1;
      }
      else
      {
          $(".addarea_close").text("+");
          n=0;
      }
   });   
});



$(document).ready(function (){
$('#content_close').click(function (){
      $('#Master_addarea').slideUp();    
   });
});