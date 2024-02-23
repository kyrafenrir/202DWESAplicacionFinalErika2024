<?php

/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 22/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Aplicación Final - REST 
 * 
 */
class REST {

    /**
     * Obtenemos la imagen de la API de la NASA.
     *
     * @param string $fecha La fecha para buscar la imagen (AAAA-MM-DD)
     * 
     * @return array|null En caso de éxito, devuelve toda la información. En caso de error, devuelve null.
     */
    public static function apiNasa($fecha) {
        // Clave de API de la NASA
        $apiKey = '3DW0yzmkIJBPYFc0b6hlENdUnzpUUjDupG5Eagd6';

        // Solicitud a la API
        $solicitudApi = file_get_contents("https://api.nasa.gov/planetary/apod?api_key={$apiKey}&date={$fecha}");

        // Verificamos si la solicitud fue exitosa
        if ($solicitudApi === false) {
            return null; // Si no devolvemos 'NULL'
        }

        // Decodificamos la respuesta JSON
        $aImagenJSON = json_decode($solicitudApi, true);

        // Verificamos si la decodificación fue exitosa y si la clave 'url' está presente
        if ($aImagenJSON && isset($aImagenJSON['url'])) {
            // Y almacenamos los datos en el siguiente array
            $aResultadoApiNasa['url'] = $aImagenJSON['url'];
            $aResultadoApiNasa['titulo'] = $aImagenJSON['title'];
            $aResultadoApiNasa['explicacion'] = $aImagenJSON['explanation'];

            return $aResultadoApiNasa; // Devolvemos un array con los datos devueltos por la API
        } else {
            return null; // Caso de fallar la decodificación o datos faltantes
        }
    }
    
    public static function apiChuck($categoria) {
        // Categorias: "animal","career","celebrity","dev","explicit","fashion","food","history","money","movie","music","political","religion","science","sport","travel"
        
        // Solicitud a la API
        $solicitudApi = file_get_contents("https://api.chucknorris.io/jokes/random?category={$categoria}", true);
        
        // Verificamos si la solicitud fue exitosa
        if ($solicitudApi === false) {
            return null; // Si no devolvemos 'NULL'
        }
        
        // Decodificamos la respuesta JSON
        $aImagenJSON = json_decode($solicitudApi, true);

        // Verificamos si la decodificación fue exitosa y si la clave 'url' está presente
            // Y almacenamos los datos en el siguiente array
            $aResultadoApiChuck['icon_url'] = $aImagenJSON['icon_url'];
            $aResultadoApiChuck['id'] = $aImagenJSON['id'];
            $aResultadoApiChuck['url'] = $aImagenJSON['url'];
            $aResultadoApiChuck['value'] = $aImagenJSON['value'];

            return $aResultadoApiChuck['value']; // Devolvemos un array con los datos devueltos por la API
        
    }
}
