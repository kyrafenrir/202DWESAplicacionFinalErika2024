<?php

/**
 * @author Erika Martínez Pérez
 * @version 1.0
 * @since 11/01/2024
 *
 * @Annotation Aplicación Final - Parte de 'editarDepartamento' 
 * 
 */
// Estructura del botón cancelar, si el usuario pulsa el botón 'cancelar'
if (isset($_REQUEST['cancelarEditar'])) {
    $_SESSION['paginaAnterior'] = 'editarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarDepartamento
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Declaracion de la variable de confirmación de envio de formulario correcto
$entradaOK = true;

// Declaramos el array de errores y lo inicializamos vacío
$aErrores = ['T09_NombreAlumno' => '',
    'T09_ApellidosAlumno' => '',
    'T09_FechaNacimiento' => '',
    'T09_ImporteMatricula' => ''];

/*
 * Recuperamos el código del alumno seleccionado anteriormente por medio de una variable de sesión
 * Y usando el metodo 'buscaAlumnoPorCod' de la clase 'AlumnoPDO' recuperamos el objeto completo
 */
$oAlumnoAEditar = AlumnoPDO::buscaAlumnoPorCod($_SESSION['codAlumnoActual']);

// Almaceno la información del alumno actual en las siguiente variables, para mostrarlas en el formulario
if ($oAlumnoAEditar) {
    $codAlumnoAEditar = $oAlumnoAEditar->get_CodAlumno();
    $nombreAlumnoAEditar = $oAlumnoAEditar->get_NombreAlumno();
    $apellidoAlumnoAEditar = $oAlumnoAEditar->get_ApellidosAlumno();
    $fechaNacimientoAlumnoAEditar = $oAlumnoAEditar->get_FechaNacimiento();
    $grupoAlumnoAEditar = $oAlumnoAEditar->get_Grupo();
    $importeMatriculaAlumnoAEditar = $oAlumnoAEditar->get_ImporteMatricula();
}

if (isset($_REQUEST['confirmarCambiosEditar'])) { // Comprobamos que el usuario haya enviado el formulario para 'confirmar los cambios'
    $aErrores['T09_NombreAlumno'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['T09_NombreAlumno'], 255, 3, 1);
    $aErrores['T09_ApellidosAlumno'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['T09_ApellidosAlumno'], 255, 3, 1);
    $aErrores['T09_FechaNacimiento'] = validacionFormularios::validarFechaHora($_REQUEST['T09_FechaNacimiento'], '2010-01-01 00:00:00', '1980-01-01 00:00:00', 1);
    $aErrores['T09_ImporteMatricula'] = validacionFormularios::comprobarFloat($_REQUEST['T09_ImporteMatricula'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 0);

// Recorremos el array de errores
    foreach ($aErrores as $campo => $error) {
        if ($error != null) { // Comprobamos que el campo no esté vacio
            $entradaOK = false; // En caso de que haya algún error le asignamos a entradaOK el valor false para que vuelva a rellenar el formulario
            $_REQUEST[$campo] = ""; // Limpiamos los campos del formulario
        }
    }
} else {
    $entradaOK = false; // Si el usuario no ha enviado el formulario asignamos a entradaOK el valor false para que rellene el formulario
}
if ($entradaOK) { // Si el usuario ha rellenado el formulario correctamente rellenamos el array aFormulario con las respuestas introducidas por el usuario
    // Y usando el metodo 'modificaAlumno' de la clase 'AlumnoPDO' recuperamos el objeto completo
    AlumnoPDO::modificaAlumno($_SESSION['codAlumnoActual'],$_REQUEST['T09_NombreAlumno'],$_REQUEST['T09_ApellidosAlumno'],$_REQUEST['T09_FechaNacimiento'],$_REQUEST['T09_ImporteMatricula']);
    $_SESSION['paginaAnterior'] = 'editarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

require_once $aView[$_COOKIE['idioma']]['layout']; // Cargo la vista de 'consultarModificarAlumno'