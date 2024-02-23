<!DOCTYPE html>
<!--
        Descripción: Aplicación Final - vConsultarModificarDepartamento.php (Castellano)
        Autor: Carlos García Cachón
        Fecha de creación/modificación: 16/01/2024
-->

<div class="container mt-3">
    <div class="row d-flex justify-content-start">
        <div class="col">
            <!-- Codigo del formulario -->
            <form name="editarDepartamento" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <table>
                        <tbody>
                                                    <tr>
                                <input type="hidden" name="codAlumnoAMostrar" value="<?php echo $codAlumnoAMostrar; ?>">
                                <!-- Codigo Alumno Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="codAlumnoAEliminar">Código de Alumno:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="codAlumnoAEliminar"
                                           value="<?php echo ($codAlumnoAEliminar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Nombre Alumno Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="nombreAlumnoAEliminar">Nombre del alumno:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="nombreAlumnoAEliminar"
                                           value="<?php echo ($nombreAlumnoAEliminar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Apellido Alumnoo Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="apellidoAlumnoEliminar">Apellido del alumno:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="apellidoAlumnoEliminar"
                                           value="<?php echo ($apellidoAlumnoEliminar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Creación Departamento Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="fechaNacimientoAlumnoAEliminar">Fecha de nacimiento:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="fechaNacimientoAlumnoAEliminar"
                                           value="<?php echo ($fechaNacimientoAlumnoAEliminar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Creación Departamento Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="grupoAlumnoAEliminar">Grupo:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="grupoAlumnoAEliminar"
                                           value="<?php echo ($grupoAlumnoAEliminar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                            <tr>
                                <!-- Fecha Creación Departamento Deshabilitado -->
                                <td class="d-flex justify-content-start">
                                    <label for="importeMatriculaAlumnoAEliminar">Importe de la matrícula:</label>
                                </td>
                                <td>
                                    <input class="bloqueado d-flex justify-content-start modDep" type="text" name="importeMatriculaAlumnoAEliminar"
                                           value="<?php echo ($importeMatriculaAlumnoAEliminar); ?>" disabled>
                                </td>
                                <td class="error">
                                </td>
                            </tr>
                        <?php
                        if (!is_null($fechaBajAlumnoaAEliminar)) {
                            echo ("<tr>
                                                    <!-- Fecha Baja Departamento Deshabilitado -->
                                                    <td class=\"d-flex justify-content-start modDep\">
                                                        <label for=\"fechaBajAlumnoaAEliminar\">Fecha de Baja:</label>
                                                    </td>
                                                    <td>
                                                        <input class=\"bloqueado d-flex justify-content-start\" type=\"text\" name=\"fechaBajAlumnoaAEliminar\"
                                                               value=\"$fechaBajAlumnoaAEliminar\" disabled>
                                                    </td>
                                                    <td class=\"error\">
                                                    </td>
                                                </tr>");
                        }
                        ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="botones" type="submit" name="confirmarCambiosEliminar">Eliminar</button>
                        <button class="botones" type="submit" name="cancelarEliminar">Cancelar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>