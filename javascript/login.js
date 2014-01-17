$(document).ready(function(){
                        $('#login').click(function(){
                        var user=$('#user').val();
                        var pass=$('#pass').val();
                        var remember;
                        if($('#remember').is(":checked"))
                            {
                                remember="yes";                                
                            }
                            else
                                {
                                    remember="no";                                    
                               }
                        $.ajax({
                            url:'controllers/admin_login.php',
                            type:'GET',
                            data:{user:user,pass:pass,remember:remember},
                            success:function(data){
                                if(data==='true')
                                {
                                    alert('You are welcome.....!');
                                   window.open('views/admin_landing_page.php','_self');
                                } 
                                else if(data==='false')
                                    {
//                                        alert('Please enter data properly');
                                        $("#error").text("Incorrect Username or Password");
                                        $('#user').val("");
                                        $('#pass').val("");
                                        $(".home_text").css("border-color","red");
                                    }
                                    else{
                                        $("#error").text(data);
                                        $('#user').val("");
                                        $('#pass').val("");
                                        $(".home_text").css("border-color","red");
                                    }
                            }
                        });
                        });
                        
                        $('#reset').click(function(){
                                        $('#user').val("");
                                        $('#pass').val("");
                                        $("#error").text(" ");
                                        $(".home_text").css("border-color","#FFFFFF");
                                        $('#remember').prop("checked",false);
                        });
                        
                        $(".home_text").focus(function (){
                                        $("#error").text(" ");
                        });
                        
                        
});
$(document).ready(function(){
     $("#for").click(function (){
      $(".forget").slideToggle("slow");
     });
});
$(document).ready(function(){
     $("#close").click(function (){
      $(".forget").slideToggle("slow");
     });
});
