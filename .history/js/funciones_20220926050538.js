$(document).ready(function(){
    $("#menuInicio").click(function(event){
        $("#divInicio").show(1000);
        $("#divtrabajosequipoC1").hide(1000);
        $("#divtrabajosLuisC1").hide(1000);

    });
    $("#menuTrabajdosEquipoC1").click(function(event){
        $("#divtrabajosequipoC1").show(1000);
        $("#divtrabajosLuisC1").hide(1000);
        $("#divInicio").hide("slow");

        
    });
    $("#menuLuisC1").click(function(event){
        $("#divtrabajosLuisC1").show(1000);
        $("#divtrabajosequipoC1").hide(1000);
        $("#divInicio").hide("slow");
        
    });
    $("#menuLaloC1").click(function(event){
        $("#divtrabajosLaloC1").swho(1000);
        $("#divtrabajosLuisC1").hide(1000);
        $("#divtrabajosequipoC1").hide(1000);
        $("#divInicio").hide("slow");
    });
    $("#menuChoryC1").click(function(event){
        $("#divtrabajosequipoC1").hide(1000);
        $("#divInicio").hide("slow");
        
    });
    $("#menuAlexC1").click(function(event){
        $("#menuTrabajdosEquipoC1").hide(1000);
        $("#divInicio").hide("slow");
        
    });
    

});