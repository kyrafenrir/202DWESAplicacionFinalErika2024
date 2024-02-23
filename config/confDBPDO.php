<?php
/**
 * @author Erika Martínez Pérez
 * @version 1.2 
 * @since 28/01/2024
 */ 

if ($_SERVER['SERVER_NAME'] == 'daw202.isauces.local') {
    define('DSN', 'mysql:host=192.168.20.19;dbname=DB202DWESLoginLogoffTema5'); // Host 'IP' y nombre de la base de datos
    define('USERNAME','user202DWESLoginLogoffTema5'); // Nombre de usuario de la base de datos
    define('PASSWORD','paso'); // Contraseña de la base de datos
    // Archivo de configuración de la BD de Explotación
    } elseif ($_SERVER['SERVER_NAME'] == 'daw202.ieslossauces.es') {
        define('DSN', 'mysql:host=db5014806730.hosting-data.io;dbname=dbs12302406'); // Host y nombre de la base de datos
        define('USERNAME','dbu1907033'); // Nombre de usuario de la base de datos
        define('PASSWORD','daw2_Sauces'); // Contraseña de la base de datos
    }