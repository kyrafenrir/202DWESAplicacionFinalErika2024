<?php

/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 18/01/2024
 * 
 * las modificaciones necesarias han sido realizadas por @author Erika Martínez Pérez
 * @Annotation Aplicación Final - Clase DepartamentoPDO
 * 
 */
class AlumnoPDO {

    /**
     * Valida las credenciales de un usuario.
     *
     * @param string $NombreAlumno El nombre del Alumno a buscar
     * 
     * @return array[object] $aNombres Con todos los nombres de alumnos de la busqueda
     * @return boolean false En caso de que la consulta sea incorrecta
     */
    public static function buscaAlumnoPorNomb($NombreAlumno = '') {
        $aNombres = [];
        // Consulta de busqueda según el valor del parametro introducido
        $consulta = <<<CONSULTA
            SELECT * FROM T09_Alumno
            WHERE T09_NombreAlumno LIKE'%$NombreAlumno%';
        CONSULTA;

        $resultadoConsulta = DBPDO::ejecutaConsulta($consulta); // Ejecutamos la consulta

        if (!is_null($resultadoConsulta)) {
            while ($oAlumno = $resultadoConsulta->fetchObject()) { // Guardo en la variable el resultado de la consulta en forma de objeto y lo recorro
                $aNombres[$oAlumno->T09_CodAlumno] = new Alumno(
                        $oAlumno->T09_CodAlumno,
                        $oAlumno->T09_NombreAlumno,
                        $oAlumno->T09_ApellidosAlumno,
                        $oAlumno->T09_FechaNacimiento,
                        $oAlumno->T09_Grupo,
                        $oAlumno->T09_ImporteMatricula,
                        $oAlumno->T09_FechaBaja);
            }
            return $aNombres;
        } else {
            return false;
        }
    }

    /**
     * Metodo que nos permite buscar un alumno por el código 
     * 
     * @param string $codAlumno El código del Alumno
     * 
     * @return object Alumno 
     */
    public static function buscaAlumnoPorCod($codAlumno) {
        //CONSULTA SQL - SELECT
        $consulta = <<<CONSULTA
            SELECT * FROM T09_Alumno
            WHERE T09_CodAlumno = '$codAlumno';
        CONSULTA;

        $resultado = DBPDO::ejecutaConsulta($consulta); // Ejecuto la consulta

        if ($resultado->rowCount() > 0) { // Si la consulta tiene más de '0' valores
            $oAlumno = $resultado->fetchObject(); // Guardo en la variable el resultado de la consulta en forma de objeto

            if ($oAlumno) { // Instancio un nuevo objeto Alumno con todos sus datos
                return new Alumno(// Y lo devuelvo
                        $oAlumno->T09_CodAlumno,
                        $oAlumno->T09_NombreAlumno,
                        $oAlumno->T09_ApellidosAlumno,
                        $oAlumno->T09_FechaNacimiento,
                        $oAlumno->T09_Grupo,
                        $oAlumno->T09_ImporteMatricula,
                        $oAlumno->T09_FechaBaja);
            } else {
                return $oAlumno; // Si no devuelvo el valor por defecto 'NULL'
            }
        }
    }

    /**
     * Modifica los valores de un alumno
     *
     * @param string $codAlumno Codigo del Alumno a editar
     * @param string $NombreAlumno Nombre del Alumno a editar
     * @param string $ApellidosAlumno Apellido del Alumno a editar
     * @param float $ImporteMatricula Importe de la matricula del Alumno a editar
     * 
     * @return PDOStatment Devuelve el resultado de la coonsulta
     */
    public static function modificaAlumno($codAlumno, $NombreAlumno, $ApellidosAlumno, $FechaNacimiento, $ImporteMatricula) {
        // Consulta de busqueda según el valor del parametro introducido
        $consulta = <<<CONSULTA
            UPDATE T09_Alumno SET 
            T09_NombreAlumno = '$NombreAlumno',
            T09_ApellidosAlumno = '$ApellidosAlumno',
            T09_FechaNacimiento = '$FechaNacimiento',
            T09_ImporteMatricula = '$ImporteMatricula'
            WHERE T09_CodAlumno = '$codAlumno';
        CONSULTA;

        return DBPDO::ejecutaConsulta($consulta); // Ejecutamos y devolvemos la consulta
    }

    /**
     * Eliminar un Alumno (Baja Física)
     *
     * @param string $codAlumno Codigo del Alumno a eliminar
     * 
     * @return PDOStatment Devuelve el resultado de la consulta
     */
    public static function bajaFisicaAlumno($codAlumno) {
        // Consulta de busqueda según el valor del parametro introducido
        $consulta = <<<CONSULTA
            DELETE FROM T09_Alumno WHERE T09_CodAlumno = '$codAlumno';
        CONSULTA;

        return DBPDO::ejecutaConsulta($consulta); // Ejecutamos y devolvemos la consulta
    }

    /**
     * Metodo que nos permite validar si el código de un Alumno existe en la BD
     * 
     * @param string $codAlumno El código del alumno
     * 
     * @return Un objeto con el primer resultado de la consulta ejecutada
     */
    public static function validarCodNoExiste($codAlumno) {
        //CONSULTA SQL - SELECT
        $consulta = <<<CONSULTA
            SELECT T01_CodUsuario FROM T01_Usuario WHERE T01_CodUsuario='$codAlumno';
        CONSULTA;
        return DBPDO::ejecutaConsulta($consulta)->fetchObject();
    }

    /**
     * Metodo que permite dar de alta un nuevo alumno en la BD
     * 
     * @param string $codAlumno El codigo de alumno
     * @param string $NombreAlumno El nombre de alumno
     * @param string $ApellidosAlumno El apellido de alumno
     * @param DateTime $FechaNacimiento La fecha de nacimiento de alumno
     * @param string $Grupo El grupo de alumno
     * @param float $ImporteMatricula El importe de la matricula de alumno
     * 
     * @return boolean false | object Alumno Devuelve un objeto Alumno nuevo si se ha podido crear, de lo contrario devuelve un @boolean que sera 'false'
     */
    public static function altaAlumno($codAlumno, $NombreAlumno, $ApellidosAlumno, $FechaNacimiento, $Grupo, $ImporteMatricula) {
        //CONSULTA SQL - INSERT
        $consulta = <<<CONSULTA
            INSERT INTO T09_Alumno VALUES ('$codAlumno','$NombreAlumno', '$ApellidosAlumno', '$FechaNacimiento', '$Grupo', '$ImporteMatricula', null);
        CONSULTA;

        if (DBPDO::ejecutaConsulta($consulta)) { // Ejecuto la consulta
            return new Alumno($codAlumno, $NombreAlumno, $ApellidosAlumno, date('Y-m-d H:i:s'), $Grupo, $ImporteMatricula, null); // Creo el Alumno con los valores recogidos
        } else {
            return false; // Si la consulta falla devuelvo 'false'
        }
    }

    /**
     * Modifica el valor de la fecha de baja a un Alumno (Baja Lógica)
     *
     * @param string $codAlumno Codigo del Alumno a modificar
     * 
     * @return PDOStatment Devuelve el resultado de la consulta
     */
    public static function bajaLogicaAlumno($codAlumno) {
        // Consulta - UPDATE
        $consulta = <<<CONSULTA
            UPDATE T09_Alumno SET T09_FechaBaja = NOW() WHERE T09_CodAlumno = '$codAlumno';
        CONSULTA;

        return DBPDO::ejecutaConsulta($consulta); // Ejecutamos y devolvemos la consulta
    }

    /**
     * Modifica el valor de la fecha de baja a un Alumno (Alta Lógica)
     *
     * @param string $codAlumno Codigo del Alumno a modificar
     * 
     * @return PDOStatment Devuelve el resultado de la coonsulta
     */
    public static function rehabilitaAlumno($codAlumno) {
        // Consulta - UPDATE
        $consulta = <<<CONSULTA
            UPDATE T09_Alumno SET T09_FechaBaja = NULL WHERE T09_CodAlumno = '$codAlumno';
        CONSULTA;

        return DBPDO::ejecutaConsulta($consulta); // Ejecutamos y devolvemos la consulta
    }
}