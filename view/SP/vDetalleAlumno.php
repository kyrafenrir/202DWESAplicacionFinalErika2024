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
                                    <label for="codAlumnoAMostrar">Código de Alumno:</label>
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
                                    <label for="nombreAlumnoAMostrar">Nombre del alumno:</label>
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
                                    <label for="apellidoAlumnoAMostrar">Apellido del alumno:</label>
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
                                    <label for="fechaNacimientoAlumnoAMostrar">Fecha de nacimiento:</label>
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
                                    <label for="grupoAlumnoAMostrar">Grupo:</label>
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
                                    <label for="importeMatriculaAlumnoAMostrar">Importe de la matrícula:</label>
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
                                    <label for="fechaBajaAMostrar">Fecha de baja:</label>
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
                        <button class="botones" aria-disabled="true" type="submit" name="salirDetalle">Salir</button>
                    </div>
                </fieldset>
            </form> 
        </div>
    </div>
</div>