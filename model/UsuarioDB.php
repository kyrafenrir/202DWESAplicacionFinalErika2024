<?php
/**
 * Class UsuarioDB
 *
 * Fichero con la clase UsuarioDB
 *
 * PHP version 8.1
 */

/**
 * 
 * Clase de UsuarioDB
 * 
 * Clase para la validación del codigo y el usuario en la base de datos
 * 
 * @author Carlos García Cachón
 * @since 1.0 11/01/2024 Creación del fichero
 * @copyright 2023-2024 DAW2
 * 
 * 
 */
interface UsuarioDB {
    /**
     * Valida las credenciales de un usuario.
     *
     * @param string $codUsuario El código de usuario a validar.
     * @param string $password La contraseña del usuario a validar.
     */
    public static function validarUsuario($codUsuario, $password);
}
