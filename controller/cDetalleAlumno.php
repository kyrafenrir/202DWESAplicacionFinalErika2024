<?php

/**
 * @author Erika Martínez Pérez
 * @version 1.0
 * @since 11/01/2024
 *
 * @Annotation Aplicación Final - Parte de 'editarDepartamento' 
 * 
 */
// Estructura del botón salir, si el usuario pulsa el botón 'salir'
if (isset($_REQUEST['salirDetalle'])) {
    $_SESSION['paginaAnterior'] = 'detalleAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarAnimales
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

/*
 * Recuperamos el código del Animal seleccionado anteriormente por medio de una variable de sesión
 * Y usando el metodo 'buscarAnimalPorCod' de la clase 'AnimalPDO' recuperamos el objeto completo
 */
$oAlumnoAMostrar = AlumnoPDO::buscaAlumnoPorCod($_SESSION['codAlumnoActual']);

// Almaceno la información del Animal actual en las siguiente variables, para mostrarlas en el formulario
if ($oAlumnoAMostrar) {
    $codAlumnoAMostrar = $oAlumnoAMostrar->get_CodAlumno();
    $nombreAlumnoAMostrar = $oAlumnoAMostrar->get_NombreAlumno();
    $apellidoAlumnoAMostrar = $oAlumnoAMostrar->get_ApellidosAlumno();
    $fechaNacimientoAlumnoAMostrar = $oAlumnoAMostrar->get_FechaNacimiento();
    $grupoAlumnoAMostrar = $oAlumnoAMostrar->get_Grupo();
    $importeMatriculaAlumnoAMostrar = $oAlumnoAMostrar->get_ImporteMatricula();
    $fechaBajaAMostrar = $oAlumnoAMostrar->get_FechaBaja();
}


require_once $aView[$_COOKIE['idioma']]['layout']; // Cargo la vista de 'EliminarDepartamento'
