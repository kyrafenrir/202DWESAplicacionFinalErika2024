<!DOCTYPE html>
<!--
        Descripción: Aplicación Final - vMtoDepartamento.php (Castellano)
        Autor: Carlos García Cachón
        Fecha de creación/modificación: 16/01/2024
-->
<style>
    
</style>
<div class="container mt-3">
    <div class="row mb-2">
        <div class="col text-center">
            <form name="buscarAlumnos" id="buscarAlumnos" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <table>
                        <thead></thead>
                        <tbody>
                            <tr>
                                <!-- CodDepartamento Obligatorio -->
                                <td class="d-flex justify-content-start" colspan='2'>
                                    <label for="NombreAlumno">Name:</label>
                                </td>
                                <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                    comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                    que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                    <input class="d-flex justify-content-start" type="text" name="NombreAlumno" value="<?php echo $_SESSION['criterioBusquedaAlumnos']['nombreBuscado'] ?? ''; ?>">
                                </td>
                                <td><button class="botones" role="button" aria-disabled="true" type="submit" name="buscaAlumnoPorNomb">Search</button></td>
                            </tr>
                            <tr>
                                <td class="error" colspan="3">
                                    <?php
                                    if (!empty($aErrores['NombreAlumno'])) {
                                        echo $aErrores['NombreAlumno'];
                                    }
                                    ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </fieldset>
            </form>
            <?php
            if ($aAlumnosVista != null) {
                echo ("<table>
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Date of birth</th>
                            <th>Group</th>
                            <th>Tuition fee</th>
                            <th>Discharge date</th>
                            <th colspan='4'><-T-></th>
                        </tr>
                        </thead>");
                echo ("<div class='list-group text-center tablaMuestra'>");
                echo ("<tbody>");
            }
            ?>
            <?php
            if ($aAlumnosVista) {

                foreach ($aAlumnosVista as $aAlumno) {//Recorro el objeto del resultado que contiene un array


                    /* Aqui recorremos todos los valores de la tabla, columna por columna, usando el parametro 'PDO::FETCH_ASSOC' , 
                     * el cual nos indica que los resultados deben ser devueltos como un array asociativo, donde los nombres de las columnas de 
                     * la tabla se utilizan como claves (keys) en el array.
                     */


                    echo ("<tr>");
                    
                    echo ("<td>" . $aAlumno['codAlumno'] . "</td>");
                    echo ("<td>" . $aAlumno['nombreAlumno'] . "</td>");
                    echo ("<td>" . $aAlumno['apellidoAlumno'] . "</td>");
                    echo ("<td>" . $aAlumno['fechaNacimiento'] . "</td>");
                    echo ("<td>" . $aAlumno['grupo'] . "</td>");
                    echo ("<td>" . $aAlumno['importeMatricula'] . "</td>");
                    echo ("<td>" . $aAlumno['fechaBaja'] . "</td>");
                    
                    // Formulario para editar
                    echo ("<td>");
                    if (empty($aAlumno['fechaBajaDep'])) {
                        echo ("<form method='post'>");
                        echo ("<input type='hidden' name='cConsultarModificarAlumno' value='" . $aAlumno['codAlumno'] . "'>");
                        echo ("<button type='submit'><img src='webroot/media/images/consultarModificarDepartamento.png' alt='EDIT'></button>");
                        echo ("</form>");
                    }
                    echo ("</td>");
                    
                    // Formulario para mostrar datos
                    echo ("<td>");
                    echo ("<form method='post'>");
                    echo ("<input type='hidden' name='cDetalleAlumno' value='" . $aAlumno['codAlumno'] . "'>");
                    echo ("<button type='submit'><img src='webroot/media/images/consultaDetalleAlumno.png' alt='VIEW'></button>");
                    echo ("</form>");
                    echo ("</td>");
                    
                    // Formulario para eliminar
                    echo ("<td>");
                    echo ("<form method='post'>");
                    echo ("<input type='hidden' name='cEliminarAlumno' value='" . $aAlumno['codAlumno'] . "'>");
                    echo ("<button type='submit'><img src='webroot/media/images/eliminarDepartamento.png' alt='DELETE'></button>");
                    echo ("</form>");
                    echo ("</td>");
                    
                    echo ("</tr>");
                }
            }
            if ($aAlumnosVista != null) {
                echo ("</tbody>");
                /* Ahora usamos la función 'rowCount()' que nos devuelve el número de filas afectadas por la consulta y 
                 * almacenamos el valor en la variable '$numeroDeRegistros'
                 */
                // Y mostramos el número de registros
                echo ("<tfoot ><tr style='background-color: black; color:white;'><td colspan='10'>Number of records in the students table: " . $numeroDeRegistrosConsulta . '</td></tr></tfoot>');
                echo ("</table>");
                echo ("</div>");
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col grupoDeBotones">
            <form name="indexMtoAlumnos" method="post">
                <button class="botones" role="button" aria-disabled="true" type="submit" name="salirAlumnos">Exit</button>
            </form>
        </div>
    </div>
</div>