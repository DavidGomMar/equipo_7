$(document).ready(function(){


$("#menuAgregarUsuario").click(function(event){
    $("#divInicio").hide("slow");
    $("#divAgregarUsuario").show(1000);
    $("#divMostrarUsuarios").hide(1000);
    $("#divAgregarEquipo").hide(1000);
    $("#divMostrarEquipos").hide(1000);
    $("#divAsignarEquipo").hide(1000);
    $("#divMostrarEquiposAsignados").hide(1000);
    $("#divEmpleados").hide(1000);
    $("#divDepartamentos").hide(1000);
    limpiarCamposBeneficiario();