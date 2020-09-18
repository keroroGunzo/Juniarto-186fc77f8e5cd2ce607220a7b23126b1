$(document).ready(function() {
    $("#jam").clock({"format":"24","calendar":"false"});    
})

function insertData(){
    var form = $("#frm").serialize();
    var models = $("#frm").attr("data-models");
    if ($("#pass1").val() == $("#pass2").val()){ 
    $.ajax({
        url  : "http://localhost/Juniarto-186fc77f8e5cd2ce607220a7b23126b1/back-end/"+ models + ".php",
        data : form,
        type : "POST",
        dataType : "html",
        success:function(data){
            alert(data)
            location.href = "login.html";
            }
        })
    }else{
    alert("Password tidak sama");
}
}

