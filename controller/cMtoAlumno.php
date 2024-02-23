<?php

/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 02/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Aplicación Final - Parte de 'cMtoDepartamento' 
 * 
 */
// Estructura del botón salir, si el usuario pulsa el botón 'salir'
if (isset($_REQUEST['salirAlumnos'])) {
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'inicioPrivado'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón editarAlumno, si el usuario pulsa el botón del icono de un 'lapiz'
if (isset($_REQUEST['cConsultarModificarAlumno'])) {
    $_SESSION['codAlumnoActual'] = $_REQUEST['cConsultarModificarAlumno']; // Almaceno en una variable de sesión el Codigo del Alumno Seleccionado
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'editarAlumno'; // Asigno a la página en curso la pagina de editarDepartamento
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón detalleAlumno, si el usuario pulsa el botón del icono de un 'ojo'
if (isset($_REQUEST['cDetalleAlumno'])) {
    $_SESSION['codAlumnoActual'] = $_REQUEST['cDetalleAlumno']; // Almaceno en una variable de sesión el Codigo del Alumno Seleccionado
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'detalleAlumno'; // Asigno a la página en curso la pagina de editarDepartamento
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón eliminarAlumno, si el usuario pulsa el botón del icono de una 'X'
if (isset($_REQUEST['cEliminarAlumno'])) {
    $_SESSION['codAlumnoActual'] = $_REQUEST['cEliminarAlumno']; // Almaceno en una variable de sesión el Codigo del Alumno Seleccionado
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'eliminarAlumno'; // Asigno a la página en curso la pagina de eliminarAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del boton baja, si el usuario pulsa el icono de la flecha roja 
if (isset($_REQUEST['cBajaLogicaAlumno'])) {
    $_SESSION['codAlumnoActual'] = $_REQUEST['cBajaLogicaAlumno']; // Almaceno en una variable de sesión el Codigo del Alumno Seleccionado
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'bajaAlumno'; // Asigno a la página en curso la pagina de bajaAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del boton alta, si el usuario pulsa el icono de la flecha verde 
if (isset($_REQUEST['cRehabilitacionAlumno'])) {
    $_SESSION['codAlumnoActual'] = $_REQUEST['cRehabilitacionAlumno']; // Almaceno en una variable de sesión el Codigo del Alumno Seleccionado
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'altaAlumno'; // Asigno a la página en curso la pagina de altaAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón exportar, si el usuario pulsa el botón 'exportar'
if (isset($_REQUEST['exportarAlumnos'])) {
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'wip'; // Asigno a la página en curso la pagina de exportarAlumnos
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón importar, si el usuario pulsa el botón 'importar'
if (isset($_REQUEST['importarAlumnos'])) {
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'wip'; // Asigno a la página en curso la pagina de importarAlumnos
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón añadir alumno, si el usuario pulsa el botón 'añadir alumno'
if (isset($_REQUEST['añadirAlumno'])) {
    $_SESSION['paginaAnterior'] = 'consultarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'añadirAlumno'; // Asigno a la página en curso la pagina de añadirAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

//Declaración de variables de estructura para validar la ENTRADA de RESPUESTAS o ERRORES
//Valores por defecto
$entradaOK = true; //Indica si todas las respuestas son correctas
$aErrores ['NombreAlumno'] = ''; // Almacena los errores
// //Almacena los errores
//Comprobamos si se ha enviado el formulario
if (isset($_REQUEST['buscaAlumnoPorNomb'])) {
    //Introducimos valores en el array $aErrores si ocurre un error
    $aErrores['NombreAlumno'] = validacionFormularios::comprobarAlfabetico($_REQUEST['NombreAlumno'], 255, 1, 0);

    //Recorremos el array de errores
    foreach ($aErrores as $sCampo => $sError) {
        if ($sError != null) { // Si hay errores
            $_REQUEST[$sCampo] = ''; // Limpio el campo del formulario
            $entradaOK = false; // Y cambio el valor de entrada a False
        }
    }
} else {
    $entradaOK = false; //Si no ha pulsado el botón de enviar la validación es incorrecta.  
}

//Si la entrada es Ok almacenamos el valor de la respuesta del usuario en el array $aRespuestas
if ($entradaOK) {
    //Almacenamos el valor en el array
    $_SESSION['criterioBusquedaAlumnos']['nombreBuscado'] = $_REQUEST['NombreAlumno'];
}

$aAlumnosVista = []; //Array para guardar el contenido de un alumno
$numeroDeRegistrosConsulta = 0;

$aAlumnosBuscados = AlumnoPDO::buscaAlumnoPorNomb($_SESSION['criterioBusquedaAlumnos']['nombreBuscado'] ?? '');

// Ejecutando la declaración SQL
if ($aAlumnosBuscados) {
    foreach ($aAlumnosBuscados as $aAlumno) {//Recorro el objeto del resultado que contiene un array
        array_push($aAlumnosVista, [//Hago uso del metodo array push para meter los valores en el array $aAlumnosVista
            'codAlumno' => $aAlumno->get_CodAlumno(), //Guardo en el valor codAlumno el codigo del alumno
            'nombreAlumno' => $aAlumno->get_NombreAlumno(), //Guardo en el valor nombreAlumno el nombre del alumno
            'apellidoAlumno' => $aAlumno->get_ApellidosAlumno(), //Guardo en el valor apellidoAlumno el apellido del alumno
            'fechaNacimiento' => $aAlumno->get_FechaNacimiento(), //Guardo en el valor fechaNacimiento la fecha de de nacimiento del alumno
            'grupo' => $aAlumno->get_Grupo(), //Guardo en el valor grupo el grupo del alumno
            'importeMatricula' => $aAlumno->get_ImporteMatricula(), //Guardo en el valor importeMatricula el importe de la matricula del alumno
            'fechaBaja' => !is_null($aAlumno->get_FechaBaja()) ? $aAlumno->get_FechaBaja() : '' //Guardo en el valor fechaBaja la fecha de baja del alumno
        ]);
        $numeroDeRegistrosConsulta++;
    }
} else {
    $aErrores['NombreAlumno'] = "No existen departamentos con esa descripcion";
}

require_once $aView[$_COOKIE['idioma']]['layout']; // Cargo la vista de 'MtoAlumno'