function openNav(){
    var x = document.getElementById("navmenu");
    if(x.style.display ==="block"){
        x.style.display ="none";
    }else{
        x.style.display ="block";
    }
}

function myFunction(){
    document.getElementById("mySidenav").style.width ="270px";
}


function closeNav(){
    document.getElementById("mySidenav").style.width ="0";
}
function showPass(){
    var x = document.getElementById("password");
    if(x.type === "password"){
    x.type = "text";
    }else{
    x.type = "password";
    }
    }
    

    function showPwd(){
        var x = document.getElementById("password");
        if(x.type === "password"){
        x.type = "text";
        }else{
        x.type = "password";
        }
        }

        $(".modal").each(function(l)
        {$(this).on("show.bs.modal",function(l){var o=$(this).attr(data-easein);"shake"==o?
        $(".modal-dialog").velocity("callout."+o):"pulse"==o?
        $(".modal-dialog").velocity("callout."+o):"tada"==o?
        $(".modal-dialog").velocity("callout."+o):"flash"==o?
        $(".modal-dialog").velocity("callout."+o):"bounce"==o?
        $(".modal-dialog").velocity("callout."+o):"swing"==o?
        $(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)

         })});

       

        