<?php

/**
 * @author Erika Martínez Pérez
 * @version 1.0
 * @since 17/01/2024
 * @copyright Todos los derechos reservados a Erika Martínez Pérez
 * 
 * @Annotation Aplicación Final - Parte de 'cEliminarAlumno' 
 * 
 */
// Estructura del botón cancelar, si el usuario pulsa el botón 'cancelar'
if (isset($_REQUEST['cancelarEliminar'])) {
    $_SESSION['paginaAnterior'] = 'eliminarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

/*
 * Recuperamos el código del alumno seleccionado anteriormente por medio de una variable de sesión
 * Y usando el metodo 'validarCodNoExiste' de la clase 'AlumnoPDO' recuperamos el objeto completo
 */
$oAlumnooAEliminar = AlumnoPDO::buscaAlumnoPorCod($_SESSION['codAlumnoActual']);

// Almaceno la información del alumno actual en las siguiente variables, para mostrarlas en el formulario
if ($oAlumnooAEliminar) {
    $codAlumnoAEliminar = $oAlumnooAEliminar->get_CodAlumno();
    $nombreAlumnoAEliminar = $oAlumnooAEliminar->get_NombreAlumno();
    $apellidoAlumnoEliminar = $oAlumnooAEliminar->get_ApellidosAlumno();
    $fechaNacimientoAlumnoAEliminar = $oAlumnooAEliminar->get_FechaNacimiento();
    $grupoAlumnoAEliminar = $oAlumnooAEliminar->get_Grupo();
    $importeMatriculaAlumnoAEliminar= $oAlumnooAEliminar->get_ImporteMatricula();
    $fechaBajAlumnoaAEliminar = $oAlumnooAEliminar->get_FechaBaja();
}

if (isset($_REQUEST['confirmarCambiosEliminar'])) { // Comprobamos que el usuario haya enviado el formulario para 'confirmar los cambios'
    // Y usando el metodo 'bajaFisicaAlumno' de la clase 'AlumnoPDO' recuperamos el objeto completo
    AlumnoPDO::bajaFisicaAlumno($_SESSION['codAlumnoActual']);
    $_SESSION['paginaAnterior'] = 'eliminarAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}


require_once $aView[$_COOKIE['idioma']]['layout']; // Cargo la vista de 'EliminarDepartamento'