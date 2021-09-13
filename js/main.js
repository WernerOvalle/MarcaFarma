$(document).ready(function(){
    
$("#formulario").on("submit", function(e){
e.preventDefault();
var url= "crearcupon.php";
$.ajax({                        
    type: "POST",                 
    url: url,                     
    data: $("#formulario").serialize(), 
    beforeSend: function(){
        $("#cargando").show();
    },
    success: function(data)             
    {
        $("#cargando").hide();
        $('#div-formulario').append(data);               
    }
});
});


$("#formulario2").on("submit", function(e){
    e.preventDefault();
    var url= "canjearcupon.php";
    $.ajax({                        
        type: "POST",                 
        url: url,                     
        data: $("#formulario2").serialize(), 
      
        success: function(data)             
        {
          $('#div-formulario').append(data);               
        }
    });
    })

});

