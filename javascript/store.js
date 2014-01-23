$(document).ready(function(){
    var n=0;
    $("#add_store").click(function (){
        $("#add_store1").slideToggle("slow");
        if(n === 0)
        {
          $(".add_store_b").text(" -");
          n=1;
        }
        else
        {
          $(".add_store_b").text("+");
          n=0;
        }
        });
 });
