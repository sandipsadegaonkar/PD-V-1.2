$(document).ready(function(){
     $("#logout").click(function (){
        $.ajax({
          url:'../controllers/logout.php',
          type:'GET',
          data:{},
          success:function(data){
                alert(data);
          if(data === 1)
          {
              window.open('../index.php','_self');
          } 
          else if(data === 0)
          {
                    alert("Some error in server side");
          }
                                  
          }
        });
                            
 });
});

