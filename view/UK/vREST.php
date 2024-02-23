<!DOCTYPE html>
<!--
        Descripción: Aplicación Final -- vREST.php (Castellano)
        Autor: Carlos García Cachón
        Fecha de creación/modificación: 22/01/2024
-->

<form name="apiREST" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <table>
            <thead>
                <tr>
                    <th class="rounded-top" colspan="3"><legend>Image of Nasa</legend></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- CodDepartamento Obligatorio -->
                    <td class="d-flex justify-content-start">
                        <label for="fechaImagen">Image Date:</label>
                    </td>
                    <td>
                        <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                             comprobamos que exista la variable y no sea 'null'. En el caso verdadero devolveremos el contenido del campo
                             que contiene '$_REQUEST' , en caso falso sobrescribirá el campo a '' .-->
                        <input class="obligatorio d-flex justify-content-start" type="date" name="fechaImagen"
                               value="<?php echo (isset($_REQUEST['fechaImagen']) ?? ''); ?>">
                    </td>
                    <td class="error">
                        <?php
                        if (!empty($aErrores['fechaImagen'])) {
                            echo $aErrores['fechaImagen'];
                        }
                        ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no está vacío, si es así, mostramos el error. -->
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <button class="botones" aria-disabled="true" type="submit" name="confirmarFechaREST">Request image</button>
        </div>
    </fieldset>
</form>
<form name="apiREST" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <table>
            <thead>
                <tr>
                    <th class="rounded-top" colspan="3"><legend>Joke of Chuck</legend></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- CodDepartamento Obligatorio -->
                    <td class="d-flex justify-content-start">
                        <label for="categoriaChiste">Joke's Chuck:</label>
                    </td>
                    <td>
                        <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                             comprobamos que exista la variable y no sea 'null'. En el caso verdadero devolveremos el contenido del campo
                             que contiene '$_REQUEST' , en caso falso sobrescribirá el campo a '' .-->
                        <select id="opciones" name="categoriaChiste">
                            <option value="" default>-Select category-</option>
                            <option value="animal">Animal</option>
                            <option value="career">Career</option>
                            <option value="celebrity">Celebrity</option>
                            <option value="dev">Developer</option>
                            <option value="explicit">Explicit</option>
                            <option value="fashion">Fashion</option>
                            <option value="food">Food</option>
                            <option value="history">History</option>
                            <option value="money">Money</option>
                            <option value="movie">Movie</option>
                            <option value="music">Music</option>
                            <option value="political">Political</option>
                            <option value="religion">Religion</option>
                            <option value="science">Science</option>
                            <option value="sport">Sport</option>
                            <option value="travel">Travel</option>
                        </select>
                    </td>
                    <td class="error">
                        <?php
                        if (!empty($aErrores['fechaImagen'])) {
                            echo $aErrores['fechaImagen'];
                        }
                        ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no está vacío, si es así, mostramos el error. -->
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <button class="botones" aria-disabled="true" type="submit" name="confirmarCategoriaREST">Request joke</button>
            <button class="botones" aria-disabled="true" type="submit" name="salirREST">Exit</button>
        </div>
    </fieldset>
</form>
<div class="row text-center">
    <?php
    if (isset($_SESSION['apiNasa']) && !is_null($_SESSION['apiNasa'])) {
        $respuestaAPI = <<<IMAGENTITULOAPI
            <div class="container">
                <div class="colum-img col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class='card-img-top' src='{$_SESSION['apiNasa']['url']}' alt='{$_SESSION['apiNasa']['titulo']}'>
                </div>
            </div>
        IMAGENTITULOAPI;
        echo $respuestaAPI;
    }
    if (isset($_SESSION['apiChuck']) && !is_null($_SESSION['apiChuck'])) {
        echo '<div>'.$_SESSION['apiChuck'].'</div>';
    }
    ?>
</div>