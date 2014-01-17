$(document).ready(function(){
     $("#logout").click(function (){
         var d="1";
        $.ajax({
          url:'../controllers/logout.php',
          type:'GET',
          data:{d:d},
          success:function(data){
          if(data == 1)
          {
              window.open('../index.php','_self');
          } 
          else if(data == 0)
          {
                    alert("Some error in server side");
          }
                                  
          }
        });
                            
 });
});

