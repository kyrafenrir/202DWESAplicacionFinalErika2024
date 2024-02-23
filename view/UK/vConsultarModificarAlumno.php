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
            <form name="editarAlumno" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <table>
                        <tbody>
                            <tr>
                        <input type="hidden" name="codAlumnoAEditar" value="<?php echo $codAlumnoAEditar; ?>">
                        <!-- Codigo Departamento Deshabilitado -->
                        <td class="d-flex justify-content-start">
                            <label for="codAlumnoAEditar">Department Code:</label>
                        </td>
                        <td>
                            <input class="bloqueado d-flex justify-content-start modDep" type="text" name="codAlumnoAEditar"
                                   value="<?php echo ($codAlumnoAEditar); ?>" disabled>
                        </td>
                        <td class="error">
                        </td>
                        </tr>
                        <tr>
                            <!-- Descripcion Departamento Obligatorio -->
                            <td class="d-flex justify-content-start">
                                <label for="T09_NombreAlumno">Student's name:</label>
                            </td>
                            <td>
                                                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                <input class="d-flex justify-content-start obligatorio modDep" type="text" name="T09_NombreAlumno" value="<?php echo (isset($_REQUEST['T09_NombreAlumno']) ? $_REQUEST['T09_NombreAlumno'] : $nombreAlumnoAEditar); ?>">
                            </td>
                            <td class="error">
                                <?php
                                if (!empty($aErrores['T09_NombreAlumno'])) {
                                    echo $aErrores['T09_NombreAlumno'];
                                }
                                ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                            </td>
                        </tr>
                        <tr>
                            <!-- Descripcion Departamento Obligatorio -->
                            <td class="d-flex justify-content-start">
                                <label for="T09_ApellidosAlumno">Student's last name:</label>
                            </td>
                            <td>
                                                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                <input class="d-flex justify-content-start obligatorio modDep" type="text" name="T09_ApellidosAlumno" value="<?php echo (isset($_REQUEST['T09_ApellidosAlumno']) ? $_REQUEST['T09_ApellidosAlumno'] : $apellidoAlumnoAEditar); ?>">
                            </td>
                            <td class="error">
                                <?php
                                if (!empty($aErrores['T09_ApellidosAlumno'])) {
                                    echo $aErrores['T09_ApellidosAlumno'];
                                }
                                ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                            </td>
                        </tr>
                        <tr>
                            <!-- Descripcion Departamento Obligatorio -->
                            <td class="d-flex justify-content-start">
                                <label for="T09_FechaNacimiento">Date of birth:</label>
                            </td>
                            <td>
                                                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                <input class="d-flex justify-content-start obligatorio modDep" type="text" name="T09_FechaNacimiento" value="<?php echo (isset($_REQUEST['T09_FechaNacimiento']) ? $_REQUEST['T09_FechaNacimiento'] : $fechaNacimientoAlumnoAEditar); ?>">
                            </td>
                            <td class="error">
                                <?php
                                if (!empty($aErrores['T09_FechaNacimiento'])) {
                                    echo $aErrores['T09_FechaNacimiento'];
                                }
                                ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                            </td>
                        </tr>
                        <tr>
                            <!-- Fecha Creación Departamento Deshabilitado -->
                            <td class="d-flex justify-content-start">
                                <label for="grupoAlumnoAEditar">Group:</label>
                            </td>
                            <td>
                                <input class="bloqueado d-flex justify-content-start modDep" type="text" name="grupoAlumnoAEditar"
                                       value="<?php echo ($grupoAlumnoAEditar); ?>" disabled>
                            </td>
                            <td class="error">
                            </td>
                        </tr>
                        <tr>
                            <!-- Volumen Negocio Departamento Opcional -->
                            <td class="d-flex justify-content-start">
                                <label for="T09_ImporteMatricula">Tuition fee:</label>
                            </td>
                            <td>
                                                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                <input class="d-flex justify-content-start modDep" type="text" name="T09_ImporteMatricula" value="<?php echo (isset($_REQUEST['T09_ImporteMatricula']) ? $_REQUEST['T09_ImporteMatricula'] : $importeMatriculaAlumnoAEditar); ?>">
                            </td>
                            <td class="error">
                                <?php
                                if (!empty($aErrores['T09_ImporteMatricula'])) {
                                    echo $aErrores['T09_ImporteMatricula'];
                                }
                                ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="botones" aria-disabled="true" type="submit" name="confirmarCambiosEditar">Confirm Changes</button>
                        <button class="botones" aria-disabled="true" type="submit" name="cancelarEditar">Cancel</button>
                    </div>
                </fieldset>
            </form> 
        </div>
    </div>
</div>