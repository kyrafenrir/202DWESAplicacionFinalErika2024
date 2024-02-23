<!DOCTYPE html>
<!--
        Descripción: Aplicación Final -- vAltaDepartamento.php (Castellano)
        Autor: Carlos García Cachón
        Fecha de creación/modificación: 04/01/2024
-->

<div class="container mt-3">
    <div class="row text-center">
        <div class="col">
            <!-- Codigo del formulario -->
            <form name="insercionValoresTablaAlumno" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <table>
                        <tbody>
                            <tr>
                                <!-- CodDepartamento Obligatorio -->
                                <td class="d-flex justify-content-start">
                                    <label for="CodAlumno">Codigo del alumno:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="obligatorio d-flex justify-content-start" type="text" placeholder="AAD" name="CodAlumno" value="<?php echo (isset($_REQUEST['CodAlumno']) ? $_REQUEST['CodAlumno'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['CodAlumno'])) {
                                    echo $aErrores['CodAlumno'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                            <tr>
                                <!-- DescDepartamento Obligatorio -->
                                <td class="d-flex justify-content-start">
                                    <label for="NombreAlumno">Nombre del alumno:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="obligatorio d-flex justify-content-start" type="text" name="NombreAlumno" placeholder="Nombre del alumno" value="<?php echo (isset($_REQUEST['NombreAlumno']) ? $_REQUEST['NombreAlumno'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['NombreAlumno'])) {
                                    echo $aErrores['NombreAlumno'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                            <tr>
                                <!-- DescDepartamento Obligatorio -->
                                <td class="d-flex justify-content-start">
                                    <label for="ApellidoAlumno">Apellido del alumno:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="obligatorio d-flex justify-content-start" type="text" name="ApellidoAlumno" placeholder="Apellido del alumno" value="<?php echo (isset($_REQUEST['ApellidoAlumno']) ? $_REQUEST['ApellidoAlumno'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['ApellidoAlumno'])) {
                                    echo $aErrores['ApellidoAlumno'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                            <tr>
                                <!-- FechaCreacionDepartamento Opcional -->
                                <td class="d-flex justify-content-start">
                                    <label for="FechaNacimiento">Fecha de nacimiento:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="obligatorio d-flex justify-content-start" type="text" name="FechaNacimiento" placeholder="YYYY/mm/dd HH:ii:ss" value="<?php echo (isset($_REQUEST['FechaNacimiento']) ? $_REQUEST['FechaNacimiento'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['FechaNacimiento'])) {
                                    echo $aErrores['FechaNacimiento'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                            <tr>
                                <!-- VolumenNegocio Obligatorio -->
                                <td class="d-flex justify-content-start">
                                    <label for="Grupo">Grupo:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="obligatorio d-flex justify-content-start" type="text" name="Grupo" placeholder="DAW-DAM-ASIR" value="<?php echo (isset($_REQUEST['Grupo']) ? $_REQUEST['Grupo'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['Grupo'])) {
                                    echo $aErrores['Grupo'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                            <tr>
                                <!-- VolumenNegocio Obligatorio -->
                                <td class="d-flex justify-content-start">
                                    <label for="ImporteMatricula">Importe de matricula:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="obligatorio d-flex justify-content-start" type="text" name="ImporteMatricula" placeholder="1234.5" value="<?php echo (isset($_REQUEST['ImporteMatricula']) ? $_REQUEST['ImporteMatricula'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['ImporteMatricula'])) {
                                    echo $aErrores['ImporteMatricula'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                            <tr>
                                <!-- FechaBaja Opcional -->
                                <td class="d-flex justify-content-start">
                                    <label for="FechaBaja">Fecha de Baja:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input disabled class="d-flex justify-content-start bloqueado" type="text" name="FechaBaja" placeholder="YYYY/mm/dd HH:ii:ss" value="<?php echo (isset($_REQUEST['FechaBaja']) ? $_REQUEST['FechaBaja'] : ''); ?>">
                                </td>
                                <td class="error">
                                    <?php
                                    if (!empty($aErrores['FechaBaja'])) {
                                    echo $aErrores['FechaBaja'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="botones" role="button" aria-disabled="true" type="submit" name="añadirAlumno">Añadir Alumno</button>
                    <button class="botones" role="button" aria-disabled="true" type="submit" name="salirAñadirAlumno">Salir</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>