$(document).ready(function(){
    $("#menuInicio").click(function(event){
        $("#divInicio").show(1000);
        $("#divtrabajosequipoC1").hide(1000);

    });
    $("#menuTrabajdosEquipoC1").click(function(event){
        $("#divtrabajosequipoC1").show(1000);
        $("#divInicio").("slow");
        
    });
    $("#menuLuisDJC1").click(function(event){
        $("#menuTrabajdosEquipoC1").show(1000);
        
    });
    $("#menuLaloC1").click(function(event){
        $("#menuTrabajdosEquipoC1").show(1000);
        
    });
    $("#menuChoryC1").click(function(event){
        $("#menuTrabajdosEquipoC1").show(1000);
        
    });
    $("#menuAlexC1").click(function(event){
        $("#menuTrabajdosEquipoC1").show(1000);
        
    });
    

});