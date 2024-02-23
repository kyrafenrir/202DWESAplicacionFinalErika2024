<?php
/**
 * Class Alumno
 *
 * Fichero con la clase Alumno
 *
 * PHP version 8.1
 */

/**
 * 
 * Clase de UsuarioDB
 * 
 * 
 * @author Erika Martínez Pérez
 * @version 1.0
 * @since 17/02/2024 Creación del fichero
 * @copyright 2023-2024 DAW2
 * 
 * @Annotation Aplicación Final - Clase Alumno
 * 
 */
class Alumno {
    /**
     * Código de Alumno
     * @var string
     */
    private $codAlumno;
    /**
     * Nombre del alumno
     * @var string
     */
    private $NombreAlumno;
    /**
     * Apellido del alumno
     * @var string
     */
    private $ApellidosAlumno;
    /**
     * Fecha de nacimiento del alumno
     * @var DateTime
     */
    private $FechaNacimiento;
    /**
     * Grupo del alumno
     * @var string
     */
    private $Grupo;
    /**
     * Importe de la matricula
     * @var float
     */
    private $ImporteMatricula;
    /**
     * Fecha de Baja de Alumno
     * @var DateTime
     */
    private $fechaBaja;
    
    /**
     * Contructor de la clase Alumno
     * 
     * @param string $codAlumno
     * @param string $NombreAlumno
     * @param string $ApellidosAlumno
     * @param DateTime $FechaNacimiento
     * @param string $Grupo
     * @param float $ImporteMatricula
     * @param DateTime $fechaBaja
     */
    public function __construct($codAlumno, $NombreAlumno, $ApellidosAlumno, $FechaNacimiento, $Grupo, $ImporteMatricula, $fechaBaja = NULL) {
        $this->codAlumno = $codAlumno;
        $this->nombreAlumno = $NombreAlumno;
        $this->apellidoAlumno = $ApellidosAlumno;
        $this->fechaNacimiento = $FechaNacimiento;
        $this->grupo = $Grupo;
        $this->importeMatricula = $ImporteMatricula;
        $this->fechaBaja = $fechaBaja;
    }
    
    /**
     * Obtiene el código de Alumno.
     *
     * @return string El código de Alumno.
     */
    public function get_CodAlumno() {
        return $this->codAlumno;
    }

    /**
     * Establece el código de Alumno
     *
     * @param string $codAlumno El nuevo código del Alumno.
     */
    public function set_CodAlumno($codAlumno) {
        $this->codAlumno = $codAlumno;
    }

    /**
     * Obtiene el nombre de Alumno.
     *
     * @return string El nombre de Alumno.
     */
    public function get_NombreAlumno() {
        return $this->nombreAlumno;
    }
    
    /**
     * Establece el nombre de Alumno
     *
     * @param string $NombreAlumno El nuevo nombre del Alumno.
     */
    public function set_NombreAlumno($NombreAlumno) {
        $this->nombreAlumno = $NombreAlumno;
    }
    
    /**
     * Obtiene el apellido de Alumno.
     *
     * @return string El apellido de Alumno.
     */
    public function get_ApellidosAlumno() {
        return $this->apellidoAlumno;
    }

    /**
     * Establece el apellido de Alumno
     *
     * @param string $ApellidosAlumno El nuevo apellido del Alumno.
     */
    public function set_ApellidosAlumno($ApellidosAlumno) {
        $this->apellidoAlumno = $ApellidosAlumno;
    }
    
    /**
     * Obtiene la fecha de nacimiento de Alumno.
     *
     * @return DateTime La fecha de nacimiento de Alumno.
     */
    public function get_FechaNacimiento() {
        return $this->fechaNacimiento;
    }

    /**
     * Establece la fecha de nacimiento de Alumno
     *
     * @param DateTime $FechaNacimiento La nueva fecha de nacimiento del Alumno.
     */
    public function set_FechaNacimiento($FechaNacimiento) {
        $this->fechaNacimiento = $FechaNacimiento;
    }
    
    /**
     * Obtiene el grupo de Alumno.
     *
     * @return string El grupo de Alumno.
     */
    public function get_Grupo() {
        return $this->grupo;
    }

    /**
     * Establece el grupo de Alumno
     *
     * @param string $Grupo El nuevo grupo del Alumno.
     */
    public function set_Grupo($Grupo) {
        $this->grupo = $Grupo;
    }
    
    /**
     * Obtiene el importe de la matricula de Alumno.
     *
     * @return float El importe de la matricula de Alumno.
     */
    public function get_ImporteMatricula() {
        return $this->importeMatricula;
    }

    /**
     * Establece el importe de la matricula de Alumno
     *
     * @param float $ImporteMatricula El nuevo importe de la matricula del Alumno.
     */
    public function set_ImporteMatricula($ImporteMatricula) {
        $this->importeMatricula = $ImporteMatricula;
    }
    
    /**
     * Obtiene la fecha de baja de Alumno.
     *
     * @return DateTime La fecha de baja de Alumno.
     */
    public function get_FechaBaja() {
        return $this->fechaBaja;
    }

    /**
     * Establece la fecha de baja de Alumno
     *
     * @param DateTime $fechaBaja La nueva fecha de baja del Alumno.
     */
    public function set_FechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }
    
}
