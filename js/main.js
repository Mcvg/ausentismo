//DOCENTE...

function Consultar_Docentes() {
    var identificacion = $("#Identificacion").val();
    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosDocentes = new Object();
    DatosDocentes["Identificacion"] = identificacion;
    DatosDocentes["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Docente&controller=controller_docente', 'false'];
    Resultado = PeticionAjax(DatosDocentes);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
        var Mensaje = Resultado.Datos;
        $("#Docente_Id").val(Mensaje[0].Docente_Id);
        $("#Identificacion_consultado").val(Mensaje[0].Identificacion);
        $("#Nombres_Consultados").val(Mensaje[0].Primer_Nombre);
        $("#Apellidos_Consultados").val(Mensaje[0].Primer_Apellido);
        $("#Telefono_Fijo").val(Mensaje[0].Telefono_Fijo);
        $("#Telefono_Movil").val(Mensaje[0].Telefono_Movil);
        $("#Correo_Electronico").val(Mensaje[0].Correo_Electronico);

        /*var contenido = "<a btn btn-lg btn-success btn-block onclick='Guardar_Ausentismo()'>Guardar</a>";
        contenido += "<a class='btn btn-lg btn-success btn-block' onclick='Limpiar_Ausentismo()'>Cancelar</a>";*/
        var btnguardar = "<a class='btn btn-lg btn-success btn-block' onclick='Registrar_Ausentismo()'>Guardar</a>";
        var btncancelar = "<a class='btn btn-lg btn-success btn-block' onclick='Limpiar_Ausentismo()'>Cancelar</a>";
        $("#btnguardar").html(btnguardar);
        $("#btncancelar").html(btncancelar);
    }else{
        abrirmodal("REGISTRAR AUSENTISMO","El docente consultado, no existe...");
    }

}

function Registrar_Docente() {
    var Identificacion = $("#Identificacion").val();
    var Primer_Nombre = $("#Primer_Nombre").val();
    var Segundo_Nombre = $("#Segundo_Nombre").val();
    var Primer_Apellido = $("#Primer_Apellido").val();
    var Segundo_Apellido = $("#Segundo_Apellido").val();
    var Sexo = $("#Sexo").val();
    var Telefono_Fijo = $("#Telefono_Fijo").val();
    var Telefono_Movil = $("#Telefono_Movil").val();
    var Correo_Electronico = $("#Correo_Electronico").val();
    var Sedes = $("#Sedes").val();
    var Estado = $("#Estado").val();

    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosRegistrar_Docente = new Object();
    DatosRegistrar_Docente["Identificacion"] = Identificacion;
    DatosRegistrar_Docente["Primer_Nombre"] = Primer_Nombre;
    DatosRegistrar_Docente["Segundo_Nombre"] = Segundo_Nombre;
    DatosRegistrar_Docente["Primer_Apellido"] = Primer_Apellido;
    DatosRegistrar_Docente["Segundo_Apellido"] = Segundo_Apellido;
    DatosRegistrar_Docente["Sexo"] = Sexo;
    DatosRegistrar_Docente["Telefono_Fijo"] = Telefono_Fijo;
    DatosRegistrar_Docente["Telefono_Movil"] = Telefono_Movil;
    DatosRegistrar_Docente["Correo_Electronico"] = Correo_Electronico;
    DatosRegistrar_Docente["Sedes"] = Sedes;
    DatosRegistrar_Docente["Estado"] = Estado;

    DatosRegistrar_Docente["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Registrar_Docente&controller=controller_docente', 'false'];
    Resultado = PeticionAjax(DatosRegistrar_Docente);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        //location.href("inicio.php");
        //window.location.assign('inicio.php');
        abrirmodal("REGISTRAR DOCENTE","Docente Registrado...");
        Limpiar_Docente();
    }else{
        abrirmodal("REGISTRAR DOCENTE","Algo ha fallado, intentelo de nuevo");
    }
}



//LOGIN......
function Autenticacion() {
    var Usuario_Ingreso = $("#Usuario_Ingreso").val();
    var Contrasena_Ingreso = $("#Contrasena_Ingreso").val();
    /*console.log(Usuario_Ingreso);*/
    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosAutenticacion = new Object();
    DatosAutenticacion["Usuario_Ingreso"] = Usuario_Ingreso;
    DatosAutenticacion["Contrasena_Ingreso"] = Contrasena_Ingreso;
    DatosAutenticacion["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Autenticacion&controller=controller_usuario', 'false'];
    Resultado = PeticionAjax(DatosAutenticacion);
    /*console.log(Resultado);
    return false;*/
    if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        //location.href("inicio.php");
        window.location.assign('inicio.php');
    }else{
     abrirmodal("AUTENTICACIÓN","Usuario o Contraseña Incorrecto");
 }

}


//SEDES....
function Consultar_Sedes() {   
    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosSedes = new Object();
    DatosSedes["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Sedes&controller=controller_sede', 'false'];
    Resultado = PeticionAjax(DatosSedes);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        /*console.log(Mensaje);*/
        select = '';
        select += '<option value="">Seleccione una Opción...</option>';
        $.each(Resultado.Datos, function(indice, valor) {
            Sede_Id = valor.Sede_Id;
            Nombre_Sede = valor.Nombre_Sede;
            select += '<option value="' + Sede_Id + '">' + Nombre_Sede + '</option>';
        });
        $("#Sedes").html(select);
        //window.location.assign('inicio.php');        
    }else{
        alert("Falló");
    }

}

//CAUSAS
function Consultar_Causas() {   
    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosCausas = new Object();
    DatosCausas["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Causas&controller=controller_Causa', 'false'];
    Resultado = PeticionAjax(DatosCausas);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        /*console.log(Mensaje);*/
        select = '';
        select += '<option value="">Seleccione una Opción...</option>';
        $.each(Resultado.Datos, function(indice, valor) {
            Causa_Id = valor.Causa_Id;
            Nombre = valor.Nombre;
            select += '<option value="' + Causa_Id + '">' + Nombre + '</option>';
        });
        $("#Causa_Id_Ausentismo").html(select);
        //window.location.assign('inicio.php');        
    }else{

    }

}

//AUSENTISMO
function Registrar_Ausentismo() {
    var Docente_Id = $("#Docente_Id").val();
    var Causa_Id_Ausentismo = $("#Causa_Id_Ausentismo").val();
    var Fecha_Inicial = $("#Fecha_Inicial").val();
    var Hora_Inicial = $("#Hora_Inicial").val();
    var Fecha_Final = $("#Fecha_Final").val();
    var Hora_Final = $("#Hora_Final").val();

    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosRegistrarAusentismo = new Object();
    DatosRegistrarAusentismo["Docente_Id"] = Docente_Id;
    DatosRegistrarAusentismo["Causa_Id_Ausentismo"] = Causa_Id_Ausentismo;
    DatosRegistrarAusentismo["Fecha_Inicial"] = Fecha_Inicial;
    DatosRegistrarAusentismo["Hora_Inicial"] = Hora_Inicial;
    DatosRegistrarAusentismo["Fecha_Final"] = Fecha_Final;
    DatosRegistrarAusentismo["Hora_Final"] = Hora_Final;

    DatosRegistrarAusentismo["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Registrar_Ausentismo&controller=controller_ausentismo', 'false'];
    Resultado = PeticionAjax(DatosRegistrarAusentismo);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        abrirmodal("REGISTRAR AUSENTISMO", "Ausentismo Registrado...");
        Limpiar_Ausentismo();

    }else{
     abrirmodal("REGISTRAR AUSENTISMO","Algo ha fallado, intentelo de nuevo");
 }
}


function Consultar_Ausentismos(){
 var Docente_Id_Ausentismo = $("#Docente_Id").val();
 /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
 var DatosConsultaAusentismo = new Object();
 DatosConsultaAusentismo["Docente_Id_Ausentismo"] = Docente_Id_Ausentismo;
 DatosConsultaAusentismo["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Ausentismos&controller=controller_ausentismo', 'false'];
 Resultado = PeticionAjax(DatosConsultaAusentismo);
 /*console.log(Resultado);*/
 if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
    var Mensaje = Resultado.Datos;

    var Tabla = '';
    Tabla += '<table class="table">';
    Tabla +=    '<thead>';                                                                           
    Tabla +=        '<tr>';
    Tabla +=            '<th>Causa Ausentismo</th>';
    Tabla +=            '<th>Fecha Inicial</th>';
    Tabla +=            '<th>Hora Inicial</th>';
    Tabla +=            '<th>Fecha Final</th>';
    Tabla +=            '<th>Hora Final</th>';
    Tabla +=            '<th>Horas Ausencia</th>';
    Tabla +=        '</tr>';
    Tabla +=    '</thead>';
    Tabla +=    '<tbody>';
    $.each(Resultado.Datos, function(indice, valor) {
        Fecha_Inicial = valor.Fecha_Inicial;
        Hora_Inicial = valor.Hora_Inicial;
        Fecha_Final = valor.Fecha_Final;
        Hora_Final = valor.Hora_Final;
        Causa_Id_Ausentismo = valor.Causa_Id_Ausentismo;
        Nombre_Causa = valor.Nombre;
        Docente_Id_Ausentismo = valor.Docente_Id_Ausentismo;
        resta = restarHoras(Hora_Inicial, Hora_Final);
        Tabla +=        '<tr>';
        Tabla +=            '<td>' + Nombre_Causa + '</td>';
        Tabla +=            '<td>'+ Fecha_Inicial +'</td>';
        Tabla +=            '<td>'+ Hora_Inicial +'</td>';
        Tabla +=           ' <td>'+ Fecha_Final +'</td>';
        Tabla +=           ' <td>'+Hora_Final+'</td>';
        Tabla +=           ' <td>'+resta+'</td>';
        Tabla +=        '</tr>';
    });
    Tabla +=   ' </tbody>';
    Tabla += '</table>';
    $("#tabla_Ausentismo").html(Tabla);
}else{

}
}


//Consultar Ausentismo Institucion
function Consultar_Ausentismo_Institucion(){
 var Institucion_Id = $("#Institucion_Id_Sede").val();
 var Fecha_Inicial = $("#Fecha_Inicial").val();
 var Fecha_Final = $("#Fecha_Final").val();
 /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
 var DatosConsultar_Asuentismo_Institucion = new Object();
 DatosConsultar_Asuentismo_Institucion["Institucion_Id"] = Institucion_Id;
  DatosConsultar_Asuentismo_Institucion["Fecha_Inicial"] = Fecha_Inicial;
   DatosConsultar_Asuentismo_Institucion["Fecha_Final"] = Fecha_Final;
 DatosConsultar_Asuentismo_Institucion["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Ausentismo_Institucion&controller=controller_ausentismo', 'false'];
 Resultado = PeticionAjax(DatosConsultar_Asuentismo_Institucion);
 /*console.log(Resultado);*/
 if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
    var Mensaje = Resultado.Datos;

    var Tabla = '';
    Tabla += '<table class="table">';
    Tabla +=    '<thead>';                                                                           
    Tabla +=        '<tr>';
    Tabla +=            '<th>Nit</th>';
    Tabla +=            '<th>Nombre Institucion</th>';
    Tabla +=            '<th>Nombre Sede</th>';
    Tabla +=            '<th>Identificación</th>';
    Tabla +=            '<th>Primer Nombre</th>';
    Tabla +=            '<th>Primer Apellido</th>';
    Tabla +=            '<th>Fecha Inicial</th>';
    Tabla +=            '<th>Hora Incial</th>';
    Tabla +=            '<th>Fecha Final</th>';
    Tabla +=            '<th>Hora Final</th>';
    Tabla +=            '<th>Causa Ausentismo</th>';
    Tabla +=            '<th>Total Horas Ausencia</th>';
    Tabla +=        '</tr>';
    Tabla +=    '</thead>';
    Tabla +=    '<tbody>';
    $.each(Resultado.Datos, function(indice, valor) {
        Nit = valor.Nit;
        Nombre_Institucion = valor.Nombre_Institucion;
        Nombre_Sede = valor.Nombre_Sede;
        Identificacion = valor.Identificacion;
        Primer_Nombre = valor.Primer_Nombre;
        Primer_Apellido = valor.Primer_Apellido;
        Fecha_Inicial = valor.Fecha_Inicial;
        Hora_Inicial = valor.Hora_Inicial;
        Fecha_Final = valor.Fecha_Final;
        Hora_Final = valor.Hora_Final;
        Nombre_Causa = valor.Nombre;
        //Causa_Id_Ausentismo = valor.Causa_Id_Ausentismo;
        //Nombre_Causa = valor.Nombre;
        resta = restarHoras(Hora_Inicial, Hora_Final);
        Tabla +=        '<tr>';
        Tabla +=            '<td>' + Nit + '</td>';
        Tabla +=            '<td>'+ Nombre_Institucion +'</td>';
        Tabla +=            '<td>'+ Nombre_Sede +'</td>';
        Tabla +=           ' <td>'+ Identificacion +'</td>';
        Tabla +=           ' <td>'+Primer_Nombre+'</td>';
        Tabla +=           ' <td>'+Primer_Apellido+'</td>';
        Tabla +=           ' <td>'+Fecha_Inicial+'</td>';
        Tabla +=           ' <td>'+Hora_Inicial+'</td>';
        Tabla +=           ' <td>'+Fecha_Final+'</td>';
        Tabla +=           ' <td>'+Hora_Final+'</td>';
        Tabla +=           ' <td>'+Nombre_Causa+'</td>';
        Tabla +=           ' <td>'+resta+'</td>';
        Tabla +=        '</tr>';
    });
    Tabla +=   ' </tbody>';
    Tabla += '</table>';
    $("#tabla_Ausentismo_Institucion").html(Tabla);
}else{

}
}

function Consultar_Todos_Ausentismos(){
 var DatosConsultaAusentismo = new Object();
 DatosConsultaAusentismo["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Todos_Ausentismos&controller=controller_ausentismo', 'false'];
 Resultado = PeticionAjax(DatosConsultaAusentismo);
 /*console.log(Resultado);*/
 if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
    var Mensaje = Resultado.Datos;
    //console.log(Resultado);
    //return;

    var Tabla = '';
    Tabla += '<table class="table">';
    Tabla +=    '<thead>';                                                                           
    Tabla +=        '<tr>';
    Tabla +=            '<th>Fecha Registro</th>';
    Tabla +=            '<th>Hora Registro</th>';
    Tabla +=            '<th>Fecha Inicial</th>';
    Tabla +=            '<th>Hora Inicial</th>';
    Tabla +=            '<th>Fecha Final</th>';
    Tabla +=            '<th>Hora Final</th>';
     Tabla +=            '<th>Horas ausente</th>';
    Tabla +=            '<th>Causa</th>';
    Tabla +=            '<th>Docente</th>';
    Tabla +=        '</tr>';
    Tabla +=    '</thead>';
    Tabla +=    '<tbody>';
    $.each(Resultado.Datos, function(indice, valor) {
        Fecha_Registro = valor.Fecha_Registro;
        Hora_Registro = valor.Hora_Registro;
        Fecha_Inicial = valor.Fecha_Inicial;
        Hora_Inicial = valor.Hora_Inicial;
        Fecha_Final = valor.Fecha_Final;
        Hora_Final = valor.Hora_Final;
        Causa_Id_Ausentismo = valor.Causa_Id_Ausentismo;
        Nombre_Causa = valor.Nombre;
        Docente_Id_Ausentismo = valor.Docente_Id_Ausentismo;
        resta = restarHoras(Hora_Inicial, Hora_Final);
        Tabla +=        '<tr>';
        Tabla +=            '<td>' + Fecha_Registro + '</td>';
        Tabla +=            '<td>' + Hora_Registro + '</td>';
        Tabla +=            '<td>' + Fecha_Inicial + '</td>'; 
        Tabla +=            '<td>'+ Hora_Inicial +'</td>';
        Tabla +=           ' <td>'+ Fecha_Final +'</td>';
        Tabla +=           ' <td></td>';
        Tabla +=           ' <td>'+Hora_Final+'</td>';
        Tabla +=           ' <td>'+Nombre_Causa+'</td>';
        Tabla +=           ' <td>'+Docente_Id_Ausentismo+'</td>';
        Tabla +=        '</tr>';
    });
    Tabla +=   ' </tbody>';
    Tabla += '</table>';
    $("#tabla_Ausentismo_Todos").html(Tabla);
}else{

}
}




//Perfiles
function Registrar_Perfil(){
    var Nombre_Perfil = $("#Nombre_Perfil").val();


    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosRegistrarPerfil = new Object();
    DatosRegistrarPerfil["Nombre_Perfil"] = Nombre_Perfil;

    DatosRegistrarPerfil["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Registrar_Perfil&controller=controller_perfil', 'false'];
    Resultado = PeticionAjax(DatosRegistrarPerfil);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        abrirmodal("REGISTRAR PERFIL", "Perfil Registrado...");
        
    }else{
     abrirmodal("REGISTRAR PERFIL","Algo ha fallado, intentelo de nuevo");
 }

}

function Consultar_Perfil(){
 /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
 var DatosConsultaPerfil = new Object();
 DatosConsultaPerfil["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Perfil&controller=controller_perfil', 'false'];
 Resultado = PeticionAjax(DatosConsultaPerfil);
 console.log(Resultado);
 if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
    var Mensaje = Resultado.Datos;

    var Tabla = '';
    Tabla += '<table class="table">';
    Tabla +=    '<thead>';                                                                           
    Tabla +=        '<tr>';
    Tabla +=            '<th>Perfil Id</th>';
    Tabla +=            '<th>Nombre Perfil</th>';
    Tabla +=        '</tr>';
    Tabla +=    '</thead>';
    Tabla +=    '<tbody>';
    $.each(Resultado.Datos, function(indice, valor) {
        Perfil_Id = valor.Perfil_Id;
        Nombre_Perfil = valor.Nombre_Perfil;
        Tabla +=        '<tr>';
        Tabla +=            '<td>' + Perfil_Id + '</td>';
        Tabla +=            '<td>'+ Nombre_Perfil +'</td>';
        Tabla +=        '</tr>';
    });
    Tabla +=   ' </tbody>';
    Tabla += '</table>';
    $("#tabla_perfil").html(Tabla);
}else{

}
}

function Consultar_Perfil_Combo(){
 /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
 var DatosConsultaPerfil = new Object();
 DatosConsultaPerfil["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Perfil&controller=controller_perfil', 'false'];
 Resultado = PeticionAjax(DatosConsultaPerfil);
 console.log(Resultado);
 if (Resultado != false && Resultado != '') {
    var Mensaje = Resultado.Datos;
    /*console.log(Mensaje);*/
    select = '';
    select += '<option value="">Seleccione una Opción...</option>';
    $.each(Resultado.Datos, function(indice, valor) {
        Perfil_Id = valor.Perfil_Id;
        Nombre_Perfil = valor.Nombre_Perfil;
        select += '<option value="' + Perfil_Id + '">' + Nombre_Perfil + '</option>';
    });
    $("#Perfil_Id_Usuario").html(select);
        //window.location.assign('inicio.php');        
    }else{

    }
}


//INSTITUCIÓN
function Registrar_Institucion(){
    var Nit = $("#Nit").val();
    var Nombre_Institucion = $("#Nombre_Institucion").val();
    var Direccion_Institucion = $("#Direccion_Institucion").val();
    var Telefono_Fijo = $("#Telefono_Fijo").val();


    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosRegistrarInstitucion = new Object();
    DatosRegistrarInstitucion["Nit"] = Nit;
    DatosRegistrarInstitucion["Nombre_Institucion"] = Nombre_Institucion;
    DatosRegistrarInstitucion["Direccion_Institucion"] = Direccion_Institucion;
    DatosRegistrarInstitucion["Telefono_Fijo"] = Telefono_Fijo;


    DatosRegistrarInstitucion["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Registrar_Institucion&controller=controller_institucion', 'false'];
    Resultado = PeticionAjax(DatosRegistrarInstitucion);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        abrirmodal("REGISTRAR INSTITUCIÓN", "Institucion Registrada...");
        Limpiar_Institucion();

    }else{
     abrirmodal("REGISTRAR INSTITUCIÓN","Algo ha fallado, intentelo de nuevo");
 }
}


function Consultar_Instituciones_Combo(){
 /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
 var DatosConsultarInstitucion = new Object();
 DatosConsultarInstitucion["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Institucion&controller=controller_institucion', 'false'];
 Resultado = PeticionAjax(DatosConsultarInstitucion);
 console.log(Resultado);
 if (Resultado != false && Resultado != '') {
    var Mensaje = Resultado.Datos;
    /*console.log(Mensaje);*/
    select = '';
    select += '<option value="">Seleccione una Opción...</option>';
    $.each(Resultado.Datos, function(indice, valor) {
        Institucion_Id = valor.Institucion_Id;
        Nombre_Institucion = valor.Nombre_Institucion;
        select += '<option value="' + Institucion_Id + '">' + Nombre_Institucion + '</option>';
    });
    $("#Institucion_Id_Sede").html(select);
        //window.location.assign('inicio.php');        
    }else{

    }
}


//SEDES
function Registrar_Sede(){
    var Nombre_Sede = $("#Nombre_Sede").val();
    var Direccion_Sede = $("#Direccion_Sede").val();
    var Telefono_Fijo_Sede = $("#Telefono_Fijo_Sede").val();
    var Institucion_Id_Sede = $("#Institucion_Id_Sede").val();


    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosRegistrarSede = new Object();
    DatosRegistrarSede["Nombre_Sede"] = Nombre_Sede;
    DatosRegistrarSede["Direccion_Sede"] = Direccion_Sede;
    DatosRegistrarSede["Telefono_Fijo_Sede"] = Telefono_Fijo_Sede;
    DatosRegistrarSede["Institucion_Id_Sede"] = Institucion_Id_Sede;


    DatosRegistrarSede["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Registrar_Sede&controller=controller_sede', 'false'];
    Resultado = PeticionAjax(DatosRegistrarSede);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        abrirmodal("REGISTRAR SEDE", "Sede Registrada...");
        Limpiar_Sede();
    }else{
        abrirmodal("REGISTRAR SEDE","Algo ha fallado, intentelo de nuevo");
    }
}


//USUARIO
function Consultar_Usuario() {
    var identificacion = $("#Identificacion").val();
    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosDocentes = new Object();
    DatosDocentes["Identificacion"] = identificacion;
    DatosDocentes["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Consultar_Docente&controller=controller_docente', 'false'];
    Resultado = PeticionAjax(DatosDocentes);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '' && Resultado["Datos"].length > 0) {
        var Mensaje = Resultado.Datos;
        $("#Docente_Id").val(Mensaje[0].Docente_Id);
        $("#Identificacion_consultado").val(Mensaje[0].Identificacion);
        $("#Nombres_Consultados").val(Mensaje[0].Primer_Nombre);
        $("#Apellidos_Consultados").val(Mensaje[0].Primer_Apellido);
        $("#Telefono_Fijo").val(Mensaje[0].Telefono_Fijo);
        $("#Telefono_Movil").val(Mensaje[0].Telefono_Movil);
        $("#Correo_Electronico").val(Mensaje[0].Correo_Electronico);

        /*var contenido = "<a btn btn-lg btn-success btn-block onclick='Guardar_Ausentismo()'>Guardar</a>";
        contenido += "<a class='btn btn-lg btn-success btn-block' onclick='Limpiar_Ausentismo()'>Cancelar</a>";*/
        var btnguardar = "<a class='btn btn-lg btn-success btn-block' onclick='Registrar_Ausentismo()'>Guardar</a>";
        var btncancelar = "<a class='btn btn-lg btn-success btn-block' onclick='Limpiar_Ausentismo()'>Cancelar</a>";
        $("#btnguardar").html(btnguardar);
        $("#btncancelar").html(btncancelar);
    }else{
        abrirmodal("REGISTRAR AUSENTISMO","El docente consultado, no existe...");
    }

}

function Registrar_Usuario() {
    var Identificacion = $("#Identificacion").val();
    var Primer_Nombre = $("#Primer_Nombre").val();
    var Segundo_Nombre = $("#Segundo_Nombre").val();
    var Primer_Apellido = $("#Primer_Apellido").val();
    var Segundo_Apellido = $("#Segundo_Apellido").val();
    var Telefono_Fijo = $("#Telefono_Fijo").val();
    var Telefono_Movil = $("#Telefono_Movil").val();
    var Correo_Electronico = $("#Correo_Electronico").val();
    var Usuario_Ingreso = $("#Usuario_Ingreso").val();
    var Contrasena_Ingreso = $("#Contrasena_Ingreso").val();
    var Perfil_Id_Usuario = $("#Perfil_Id_Usuario").val();
    var Estado = $("#Estado").val();


    /*SE CREA EL OBJETO QUE ALMACENA LOS DATOS*/
    var DatosRegistrarUsuario = new Object();
    DatosRegistrarUsuario["Identificacion"] = Identificacion;
    DatosRegistrarUsuario["Primer_Nombre"] = Primer_Nombre;
    DatosRegistrarUsuario["Segundo_Nombre"] = Segundo_Nombre;
    DatosRegistrarUsuario["Primer_Apellido"] = Primer_Apellido;
    DatosRegistrarUsuario["Segundo_Apellido"] = Segundo_Apellido;
    DatosRegistrarUsuario["Telefono_Fijo"] = Telefono_Fijo;
    DatosRegistrarUsuario["Telefono_Movil"] = Telefono_Movil;
    DatosRegistrarUsuario["Correo_Electronico"] = Correo_Electronico;
    DatosRegistrarUsuario["Usuario_Ingreso"] = Usuario_Ingreso;
    DatosRegistrarUsuario["Contrasena_Ingreso"] = Contrasena_Ingreso;
    DatosRegistrarUsuario["Perfil_Id_Usuario"] = Perfil_Id_Usuario;
    DatosRegistrarUsuario["Estado"] = Estado;

    DatosRegistrarUsuario["ConfigAjax"] = ['POST', 'RespuestaAjax.php?func=Registrar_Usuario&controller=controller_usuario', 'false'];
    Resultado = PeticionAjax(DatosRegistrarUsuario);
    /*console.log(Resultado);*/
    if (Resultado != false && Resultado != '') {
        var Mensaje = Resultado.Datos;
        //console.log(Mensaje);
        //location.href("inicio.php");
        //window.location.assign('inicio.php');
        abrirmodal("REGISTRAR USUARIO","Usuario Registrado...");
        Limpiar_Usuario();
    }else{
        abrirmodal("REGISTRAR USUARIO","Algo ha fallado, intentelo de nuevo");
    }
}





//OTRAS
function abrirmodal(titulo,texto){
    $("#tituloModal").html(titulo);
    $("#textoModal").html(texto);
    $("#myModal").modal('show');
}


function Limpiar_Ausentismo(){
    var limpiar = $('#formulario_ausentismo :input');
    limpiar.val("");
}

function Limpiar_Institucion(){
    var limpiar = $('#form_registrar_institucion :input');
    limpiar.val("");
}

function Limpiar_Sede(){
    var limpiar = $('#form_registrar_sedes :input');
    limpiar.val("");
}

function Limpiar_Docente(){
    var limpiar = $('#form_registrar_docente :input');
    limpiar.val("");
}

function Limpiar_Usuario(){
    var limpiar = $('#form_registrar_usuario :input');
    limpiar.val("");
}



//Esta función es la encargada de realizar la petición AJAX
function PeticionAjax(Datos) {
    var ResultadoPOST = false;
    var Config = Datos['ConfigAjax'];
    var _Type = Config[0];
    var _Url = Config[1];
    var _Async = eval(Config[2]);
    Datos['ConfigAjax'] = '';
    $.ajax({
        type: _Type,
        url: _Url,
        async: _Async,
        global: true,
        dataType: 'json',
        data: Datos,
        success: function(data) {
            ResultadoPOST = data;
            //AjaxFinalizarIndicadorPeticion();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            errores(XMLHttpRequest, textStatus);
            //AjaxFinalizarIndicadorPeticion();
        }
        ,
        complete: function() {
            //hideLightbox_loader();
            //AjaxFinalizarIndicadorPeticion();
        }
    });
    return ResultadoPOST;
}

function errores(jqXHR, exception) {
    if (jqXHR.responseText != '') {
        alert('Error Interno');
        console.log(jqXHR.responseText);
    }
    if (jqXHR.status == 404) {
        alert('No se ha podido conectar al destino');
    } else if (jqXHR.status == 500) {
        alert('Error interno del servicio');
    } else if (exception == 'parsererror') {} else if (exception == 'timeout') {
        alert('Se ha superado el tiempo de espera');
    } else if (exception == 'abort') {
        alert('Petición cancelada');
    } else if (jqXHR.status == 405) {
        alert('La peticón no es correcta para dominios externos');
    }
}


function restarHoras(Hora_Inicial, Hora_Final) {

  inicioMinutos = parseInt(Hora_Inicial.substr(3,2));
  inicioHoras = parseInt(Hora_Inicial.substr(0,2));
  
  finMinutos = parseInt(Hora_Final.substr(3,2));
  finHoras = parseInt(Hora_Final.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
}

horas = transcurridoHoras.toString();
minutos = transcurridoMinutos.toString();

if (horas.length < 2) {
    horas = "0"+horas;
}

if (horas.length < 2) {
    horas = "0"+horas;
}

return horas+":"+minutos;

}
