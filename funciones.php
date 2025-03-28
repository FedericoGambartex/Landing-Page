<?php
function mostrarTablaPosicionesPremierLeague()
{
    // URL de la API para obtener la tabla de posiciones de la Premier League
    $uri = 'http://api.football-data.org/v4/competitions/PL/standings';

    // Configuración de la solicitud con el token de autenticación
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: a4e7dde6a42c4b0c9779470631c103d2'; // Sustituye por tu token válido
    $stream_context = stream_context_create($reqPrefs);

    // Obtener la respuesta de la API
    $response = file_get_contents($uri, false, $stream_context);

    // Decodificar la respuesta JSON en un objeto PHP
    $standings = json_decode($response);

    // Verificar si hay datos de la clasificación
    if (!empty($standings->standings)) {
        // Recorrer cada tabla (algunas ligas tienen varias tablas como 'overall', 'home', 'away', etc.)
        foreach ($standings->standings as $table) {
           

            // Encabezado de la tabla de posiciones
            echo "<table border='1'>
                    <tr>
                        <th>PS</th>
                        <th>Escudo</th>
                        <th>Club</th>
                        <th>PJ</th>
                        <th>PG</th>
                        <th>PE</th>
                        <th>PP</th>
                        <th>+</th>
                        <th>-</th>
                        <th>+/-</th>
                        <th>PTS</th>
                    </tr>";

            // Recorrer cada equipo en la tabla de posiciones
            foreach ($table->table as $team) {
                echo "<tr>";
                echo "<td>" . $team->position . "</td>";

                // Mostrar el escudo del equipo
                echo "<td><img src='" . $team->team->crest . "' alt='Escudo de " . $team->team->name . "' width='50' height='50'></td>";

                echo "<td>" . $team->team->name . "</td>";
                echo "<td>" . $team->playedGames . "</td>";
                echo "<td>" . $team->won . "</td>";
                echo "<td>" . $team->draw . "</td>";
                echo "<td>" . $team->lost . "</td>";
                echo "<td>" . $team->goalsFor . "</td>";
                echo "<td>" . $team->goalsAgainst . "</td>";
                echo "<td>" . $team->goalDifference . "</td>";
                echo "<td>" . $team->points . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "No se encontraron datos de la clasificación.";
    }
}
function mostrarTablaPosicionesSerieA()
{
    // URL de la API para obtener la tabla de posiciones de la Premier League
    $uri = 'http://api.football-data.org/v4/competitions/SA/standings';

    // Configuración de la solicitud con el token de autenticación
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: a4e7dde6a42c4b0c9779470631c103d2'; // Sustituye por tu token válido
    $stream_context = stream_context_create($reqPrefs);

    // Obtener la respuesta de la API
    $response = file_get_contents($uri, false, $stream_context);

    // Decodificar la respuesta JSON en un objeto PHP
    $standings = json_decode($response);

    // Verificar si hay datos de la clasificación
    if (!empty($standings->standings)) {
        // Recorrer cada tabla (algunas ligas tienen varias tablas como 'overall', 'home', 'away', etc.)
        foreach ($standings->standings as $table) {
          

            // Encabezado de la tabla de posiciones
            echo "<table border='1'>
                    <tr>
                        <th>PS</th>
                        <th>Escudo</th>
                        <th>Club</th>
                        <th>PJ</th>
                        <th>PG</th>
                        <th>PE</th>
                        <th>PP</th>
                        <th>+</th>
                        <th>-</th>
                        <th>+/-</th>
                        <th>PTS</th>
                    </tr>";

            // Recorrer cada equipo en la tabla de posiciones
            foreach ($table->table as $team) {
                echo "<tr>";
                echo "<td>" . $team->position . "</td>";

                // Mostrar el escudo del equipo
                echo "<td><img src='" . $team->team->crest . "' alt='Escudo de " . $team->team->name . "' width='50' height='50'></td>";

                echo "<td>" . $team->team->name . "</td>";
                echo "<td>" . $team->playedGames . "</td>";
                echo "<td>" . $team->won . "</td>";
                echo "<td>" . $team->draw . "</td>";
                echo "<td>" . $team->lost . "</td>";
                echo "<td>" . $team->goalsFor . "</td>";
                echo "<td>" . $team->goalsAgainst . "</td>";
                echo "<td>" . $team->goalDifference . "</td>";
                echo "<td>" . $team->points . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "No se encontraron datos de la clasificación.";
    }
}
function mostrarTablaPosicionesEspana() {
    // URL de la API para obtener la tabla de posiciones de la Premier League
    $uri = 'http://api.football-data.org/v4/competitions/PD/standings';

    // Configuración de la solicitud con el token de autenticación
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: a4e7dde6a42c4b0c9779470631c103d2'; // Sustituye por tu token válido
    $stream_context = stream_context_create($reqPrefs);

    // Obtener la respuesta de la API
    $response = file_get_contents($uri, false, $stream_context);
    
    // Decodificar la respuesta JSON en un objeto PHP
    $standings = json_decode($response);

    // Verificar si hay datos de la clasificación
    if (!empty($standings->standings)) {
        // Recorrer cada tabla (algunas ligas tienen varias tablas como 'overall', 'home', 'away', etc.)
        foreach ($standings->standings as $table) {
          

            // Encabezado de la tabla de posiciones
            echo "<table border='1'>
                    <tr>
                        <th>PS</th>
                        <th>Escudo</th>
                        <th>Club</th>
                        <th>PJ</th>
                        <th>PG</th>
                        <th>PE</th>
                        <th>PP</th>
                        <th>+</th>
                        <th>-</th>
                        <th>+/-</th>
                        <th>PTS</th>
                    </tr>";

            // Recorrer cada equipo en la tabla de posiciones
            foreach ($table->table as $team) {
                echo "<tr>";
                echo "<td>" . $team->position . "</td>";
                
                // Mostrar el escudo del equipo
                echo "<td><img src='" . $team->team->crest . "' alt='Escudo de " . $team->team->name . "' width='50' height='50'></td>";

                echo "<td>" . $team->team->name . "</td>";
                echo "<td>" . $team->playedGames . "</td>";
                echo "<td>" . $team->won . "</td>";
                echo "<td>" . $team->draw . "</td>";
                echo "<td>" . $team->lost . "</td>";
                echo "<td>" . $team->goalsFor . "</td>";
                echo "<td>" . $team->goalsAgainst . "</td>";
                echo "<td>" . $team->goalDifference . "</td>";
                echo "<td>" . $team->points . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "No se encontraron datos de la clasificación.";
    }
}
?>