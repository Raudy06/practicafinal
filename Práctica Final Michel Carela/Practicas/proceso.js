var codigoQR = new QRCode("codigoQR");
$(document).ready(function() {
    $("#generarCodigo").on("click", function() {
        
        var nombre = $("#Nombres").val();
        var celular = $("#Celular").val();
        var correo = $("#Correo").val();

        if (nombre.length == 0) {
            $('.validacion p').remove();
            $('.validacion').html("<p>El campo 'Nombres' es obligatorio</p>");
        } else if (celular.length == 0) {
            $('.validacion p').remove();
            $('.validacion').html("<p>El campo 'Movil' es obligatorio</p>");
        } else if (correo.length == 0) {
            $('.validacion p').remove();
            $('.validacion').html("<p>El campo 'correo' es obligatorio</p>");
        } else if (correo.length < 5) {
            $('.validacion p').remove();
            $("#Correo").val("");
            $('.validacion').html("<p>Correo No valido</p>");
        } else {
            $('.validacion p').remove();
            
            var cadena = $("#Nombres").val() +
                '\n' + $("#Telefono").val() +
                '\n' + $("#Celular").val() +
                '\n' + $("#Correo").val()

            codigoQR.makeCode(cadena);

        }
    });
});