$(document).ready(function(){
    $(document).on("submit","#form1",function(e){ 
        e.preventDefault();
        var userid=$("#userid").val();
        var password=$("#password").val();
        alert(userid+password);

        $.ajax({
            url:"/tuqb/phpajaxhandler/floginajax.php",
            type:"POST",
            datatype:"json",
            data:{"f_id":userid,"password":password,"action":"floginajax"},
            beforeSend:function(){
                alert("About to send an ajax call.");
                //alert(username+password);
            },
            success:function(result){
                //console.log(result);
                alert(result);
                console.log("Ajax handled Successful.");
                if (result.Status=="OK") {
                    document.location.replace('/tuqb/userinterface/home/home.php');
                }
                else
                {
                    $("#errorMsg").html('INVALID USER/PASSWORD');
                    $("#errorMsg").css("color","black");
                }
                
            },
            error:function(xhr, status, error){
                console.error(xhr.responseText);
            }

        });
        
    });
});