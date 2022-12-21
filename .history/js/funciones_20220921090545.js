$(document).ready(function(){
    $("#menuInicio").click(function(event){
        limpiarTodo();
        $("#divInicio").show(1000);
        $("#divAgregarUsuario").hide(1000);
        $("#divMostrarUsuarios").hide(1000);
        $("#divAgregarEquipo").hide(1000);
        $("#divMostrarEquipos").hide(1000);
        $("#divAsignarEquipo").hide(1000);
        $("#divMostrarEquiposAsignados").hide(1000);
        $("#divMostrarEquiposElimiandos").hide(1000);
        $("#divEmpleados").hide(1000);
        $("#divDepartamentos").hide(1000);
    });
    $("#menuTrabajdosEquipoC1").click(function(event){
        $("#divtrabajosequipoC1").show(1000);
        
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