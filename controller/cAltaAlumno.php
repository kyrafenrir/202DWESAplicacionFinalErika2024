<?php

/**
 * @author Erika Martínez Pérez
 * @version 1.0
 * @since 16/01/2024
 * @copyright Todos los derechos reservados a Erika Martínez Pérez
 * 
 * @Annotation Aplicación Final - Parte de 'cAltaAlumno' 
 * 
 */
// Estructura del botón salir, si el usuario pulsa el botón 'salir'
if (isset($_REQUEST['salirAñadirAlumno'])) {
    $_SESSION['paginaAnterior'] = 'altaAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Estructura del botón añadir alumno, si el usuario pulsa el botón 'añadir alumno'
if (isset($_REQUEST['recargarAñadirAlumno'])) {
    $_SESSION['paginaEnCurso'] = 'altaAlumno'; // Asigno a la página en curso la pagina de altaAlumno
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Declaración de constantes por OBLIGATORIEDAD
define('OPCIONAL', 0);
define('OBLIGATORIO', 1);

// Declaración de los limites para el metodo comprobar FLOAT
define('TAM_MAX_FLOAT', PHP_FLOAT_MAX);
define('TAM_MIN_FLOAT', PHP_FLOAT_MIN);

$mensajeDeConfirmacion = ''; // Variable para almacenar un mensaje si a salido bien o mal la inserción de datos
// Declaración de variables de estructura para validar la ENTRADA de RESPUESTAS o ERRORES
// Valores por defecto
$entradaOK = true;

$aRespuestas = [
    'CodAlumno' => "",
    'NombreAlumno' => "",
    'ApellidoAlumno' => "",
    'FechaNacimiento' => "",
    'Grupo' => "",
    'ImporteMatricula' => "",
    'FechaBaja' => ""
];

$aErrores = [
    'CodAlumno' => "",
    'NombreAlumno' => "",
    'ApellidoAlumno' => "",
    'FechaNacimiento' => "",
    'Grupo' => "",
    'ImporteMatricula' => "",
    'FechaBaja' => ""
];


//En el siguiente if pregunto si el '$_REQUEST' recupero el valor 'enviar' que enviamos al pulsar el boton de enviar del formulario.
if (isset($_REQUEST['añadirAlumno'])) {
    /*
     * Ahora inicializo cada 'key' del ARRAY utilizando las funciónes de la clase de 'validacionFormularios' , la cuál 
     * comprueba el valor recibido (en este caso el que recibe la variable '$_REQUEST') y devuelve 'null' si el valor es correcto,
     * o un mensaje de error personalizado por cada función dependiendo de lo que validemos.
     */
    //Introducimos valores en el array $aErrores si ocurre un error
    $aErrores['CodAlumno'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['CodAlumno'], 3, 3, OBLIGATORIO);

    // Ahora validamos que el codigo introducido no exista en la BD, haciendo una consulta 
    if ($aErrores['CodAlumno'] == null) {
        /*
         * Por medio del metodo 'validarCodNoExiste' de la clase 'DepartamentoPDO' comprobamos que el código no este en uso
         */
        if (AlumnoPDO::validarCodNoExiste($_REQUEST['CodAlumno'])) {
            $aErrores['CodAlumno'] = "El código de departamento ya existe";
        }
    }
    $aErrores['NombreAlumno'] = validacionFormularios::comprobarAlfabetico($_REQUEST['NombreAlumno'], 255, 1, OBLIGATORIO);
    $aErrores['ApellidoAlumno'] = validacionFormularios::comprobarAlfabetico($_REQUEST['ApellidoAlumno'], 255, 1, OBLIGATORIO);
    $aErrores['FechaNacimiento'] = validacionFormularios::validarFechaHora($_REQUEST['FechaNacimiento'], '2010-01-01 00:00:00', '1980-01-01 00:00:00', OBLIGATORIO);
    $aErrores['Grupo'] = validacionFormularios::comprobarAlfabetico($_REQUEST['Grupo'], 255, 1, OBLIGATORIO);
    $aErrores['ImporteMatricula'] = validacionFormularios::comprobarFloat($_REQUEST['ImporteMatricula'], TAM_MAX_FLOAT, TAM_MIN_FLOAT, OBLIGATORIO);
    $aErrores['FechaBajaDepartamento'] = NULL;

    /*
     * En este foreach recorremos el array buscando que exista NULL (Los metodos anteriores si son correctos devuelven NULL)
     * y en caso negativo cambiara el valor de '$entradaOK' a false y borrara el contenido del campo.
     */
    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $_REQUEST[$campo] = "";
            $entradaOK = false;
        }
    }
} else {
    $entradaOK = false;
}
//En caso de que '$entradaOK' sea true, cargamos las respuestas en el array '$aRespuestas'
if ($entradaOK) {
    // Usando el metodo 'altaDepartamento' de la clase 'AlumnoPDO' añadimos el departamento
    AlumnoPDO::altaAlumno($_REQUEST['CodAlumno'], $_REQUEST['NombreAlumno'], $_REQUEST['ApellidoAlumno'], $_REQUEST['FechaNacimiento'], $_REQUEST['Grupo'],$_REQUEST['ImporteMatricula'], null);
    $_SESSION['paginaAnterior'] = 'añadirAlumno'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaEnCurso'] = 'consultarAlumno'; // Asigno a la página en curso la pagina de consultarDepartamento
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

require_once $aView[$_COOKIE['idioma']]['layout']; // Cargo la vista de 'AltaDepartamento'