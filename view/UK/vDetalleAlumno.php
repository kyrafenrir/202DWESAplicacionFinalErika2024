<!DOCTYPE html>
<!--
        Descripción: Aplicación Final - vDetalleAlumno.php (Castellano)
        Autor: Carlos García Cachón
        Fecha de creación/modificación: 16/01/2024
-->
<div class="container mt-3">
    <div class="row d-flex justify-content-start">
        <div class="col">
            <!-- Codigo del formulario -->
            <form name="detalleAlumno" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <table>
                        <tbody>
                            <tr>
                                <input type="hidden" name="codAlumnoAMostrar" value="<?php echo $codAlumnoAMostrar; ?>">
                                <!-- Codigo Alumno Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="codAlumnoAMostrar">Department Codeo:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="codAlumnoAMostrar"
                                           value="<?php echo ($codAlumnoAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Nombre Alumno Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="nombreAlumnoAMostrar">Student's name:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="nombreAlumnoAMostrar"
                                           value="<?php echo ($nombreAlumnoAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Apellido Alumnoo Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="apellidoAlumnoAMostrar">Student's last name:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="apellidoAlumnoAMostrar"
                                           value="<?php echo ($apellidoAlumnoAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Creación Departamento Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="fechaNacimientoAlumnoAMostrar">Date of birth:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="fechaNacimientoAlumnoAMostrar"
                                           value="<?php echo ($fechaNacimientoAlumnoAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Creación Departamento Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="grupoAlumnoAMostrar">Group:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="grupoAlumnoAMostrar"
                                           value="<?php echo ($grupoAlumnoAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Creación Departamento Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="importeMatriculaAlumnoAMostrar">Tuition fee:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="importeMatriculaAlumnoAMostrar"
                                           value="<?php echo ($importeMatriculaAlumnoAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Baja Alumno Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="fechaBajaAMostrar">Discharge date:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="fechaBajaAMostrar"
                                           value="<?php echo ($fechaBajaAMostrar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="botones" aria-disabled="true" type="submit" name="salirDetalle">Exit</button>
                    </div>
                </fieldset>
            </form> 
        </div>
    </div>
</div>