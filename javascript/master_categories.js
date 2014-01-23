$(document).ready(function (){
          var n=0;
   $("#add_categories").click(function(){
      $("#Master_addcategories").slideToggle("slow");
      if(n === 0)
      {
          $(".addcategories_close").text(" -");
          n=1;
      }
      else
      {
          $(".addcategories_close").text("+");
          n=0;
      }
   });   
});



$(document).ready(function (){
$('#content_close').click(function (){
      $('#Master_addcategories').slideUp();    
   });
});