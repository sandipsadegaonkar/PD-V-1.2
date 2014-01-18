$(document).ready(function(){
 var c=0;
  $("#cata").click(function (){
        $("#cata1").slideToggle("slow");
          if(c === 0)
           {
               $(".cp1").text("-");
               c=1;
           }
          else
          {
              $(".cp1").text("+");
              c=0;
          } 
    });
});

$(document).ready(function(){
      var n=0;
     $("#noti").click(function (){
      $("#noti1").slideToggle("slow");
 
     if(n === 0)
      {
          $(".sp").text("-");
          n=1;
      }
      else
      {
          $(".sp").text("+");
          n=0;
      } 
     });
});
  
$(document).ready(function(){ 
    var s=0;
   $("#stor").click(function (){
        $("#stor1").slideToggle();
         if(s === 0)
      {
          $(".spp").text("-");
          s=1;
      }
      else
      {
          $(".spp").text("+");
          s=0;
      } 
     });
});
$(document).ready(function(){ 
    var s2 =0;
   $("#syst").click(function (){
    $("#syst1").slideToggle();
      if(s2 === 0)
      {
          $(".sy").text("-");
          s2=1;
      }
      else
      {
          $(".sy").text("+");
          s2=0;
      } 
     });
    
});
$(document).ready(function(){ 
   var sc=0;
        $("#static").click(function (){
        $("#static1").slideToggle();
         if(sc === 0)
      {
          $(".sc1").text("-");
          sc=1;
      }
      else
      {
          $(".sc1").text("+");
          sc=0;
      } 
     });
});
$(document).ready(function(){ 
   var u=0;
$("#util").click(function (){
        $("#util1").slideToggle();
         if(u=== 0)
      {
          $(".u1").text("-");
          u=1;
      }
      else
      {
          $(".u1").text("+");
          u=0;
      } 
     });
        
});


/********************************************************
        Menu click and open sub menu
*******************************************************/
$(document).ready(function(){ 
$('#catalog_mc').click(function(){
//    $.ajaxSetup({
//        beforeSend: function(xhr, status) {
//            // TODO: show spinner
//            $('#process').show();
//        },
//        complete: function() {
//            // TODO: hide spinner
//            $('#process').hide();
//        }
//    });
                        $.ajax({
                            url:'../controllers/admin_cities_data.php',
                            type:'GET',
                            data:{},
                            success:function(data){
                                    $('#content_page').slideDown("slow");
                                    $('#content_page').load('sub/master_cities.php');
                                    $('#content_page').css('display','block');
                                    $('#content_header').text(" >> Catalog >> Master Cities");
                                    $("#dat").html(data);
                                    
                            }
                        });
 
});
$('#catalog_ma').click(function(){ 
    $('#content_page').slideDown("slow");
      $('#content_page').load('sub/master_area.php');
      $('#content_page').css('display','block');
$('#content_header').text(" >> Catalog >> Master Area"); 
});
$('#udb').click(function(){
    $('#content_page').slideDown("slow");
    $('#content_page').load('sub/database_backup.php');
    $('#content_page').css('display','block');
    $('#content_header').text(" >> Utility >> Database Backup"); 
      
 });

$('#content_close').click(function (){
  //$('#add_cities').slideUp();    
    $('#content_page').slideUp();        
//    $('#content_page').css('display','none');
    $('#content_header').text(""); 
});
});
$(document).ready(function(){

$("#noti").mouseenter(function (){
   $("#menu_effect").animate({
    width:'180'    
});
});
$("#noti").mouseleave(function (){
   $("#menu_effect").animate({
    width:'5'   
});
});
});
$(document).ready(function(){
$("#cata").mouseenter(function (){
   $("#menu_effect1").animate({
    width:'180'    
});
});
$("#cata").mouseleave(function (){
   $("#menu_effect1").animate({
    width:'5'   
});
});
});
$(document).ready(function(){
$("#stor").mouseenter(function (){
   $("#menu_effect2").animate({
    width:'180'    
});
});
$("#stor").mouseleave(function (){
   $("#menu_effect2").animate({
    width:'5'   
});
});
});
$(document).ready(function(){
$("#syst").mouseenter(function (){
   $("#menu_effect3").animate({
    width:'180'    
});
});
$("#syst").mouseleave(function (){
   $("#menu_effect3").animate({
    width:'5'   
});
});
});
$(document).ready(function(){
$("#static").mouseenter(function (){
   $("#menu_effect4").animate({
    width:'180'    
});
});
$("#static").mouseleave(function (){
   $("#menu_effect4").animate({
    width:'5'   
});
});
});
$(document).ready(function(){
$("#util").mouseenter(function (){
   $("#menu_effect5").animate({
    width:'180'    
});
});
$("#util").mouseleave(function (){
   $("#menu_effect5").animate({
    width:'5'   
});
});
});