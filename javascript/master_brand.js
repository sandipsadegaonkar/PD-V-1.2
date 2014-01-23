$(document).ready(function (){
          var n=0;
   $("#add_brand").click(function(){
      $("#Master_addbrand").slideToggle("slow");
      if(n === 0)
      {
          $(".addbrand_close").text(" -");
          n=1;
      }
      else
      {
          $(".addbrand_close").text("+");
          n=0;
      }
   });   
});



$(document).ready(function (){
$('#content_close').click(function (){
      $('#Master_addbrand').slideUp();    
   });
});