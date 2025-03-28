
<?php
include("cabecera.php");
include("funciones.php");

?>
<div class="container">
  <div class="escudo">
    <a href="escudos/club.php?id=3"><img src="img/san lorenzo.png" alt="C.A San Lorenzo de Almagro"></a>
  </div>
  <div class="escudo">
    <a href="escudos/club.php?id=5"><img src="img/independiente.png" alt="C.A Independiente"></a>
  </div>
  <div class="escudo">
    <a href="escudos/club.php?id=1"><img src="img/boca.png" alt="C.A Boca Juniors"></a>
  </div>
  <div class="escudo">
    <a href="escudos/club.php?id=4"><img src="img/racing.png" alt="Racing Club"></a>
  </div>
  <div class="escudo">
    <a href="escudos/club.php?id=2"><img src="img/river.png" alt="C.A River Plate"></a>
  </div>
</div>
<div class="malla">
  <div id="mainvideo">
    <?php
    include "conexion.php";
    $sql = "SELECT id FROM videos getLastRecord ORDER BY id DESC LIMIT 1";
    $resultado_random = mysqli_fetch_assoc($conn->query($sql));
    $idrandom = rand(1, $resultado_random['id']);
    $consulta = "SELECT video FROM videos WHERE id='" . $idrandom . "'";
    $resultado = mysqli_fetch_assoc($conn->query($consulta));
    echo $resultado['video'];
    ?>
  </div>
  
 

  <section>
    <div class="slider-container">
      <div class="slider">
        <div class="slide"><img src="img/merentiel.png" alt="La bestia"></div>
        <div class="slide"><img src="img/borja.png" alt="Colibrí"></div>
        <div class="slide"><img src="img/martinez.png" alt="Maravilla"></div>
        <div class="slide"><img src="img/avalos.png" alt="Avalos"></div>
        <div class="slide"><img src="img/perritobarrios.png" alt="Perrito"></div>
        <div class="slide"><img src="img/cavani.png" alt="El matador"></div>
        <div class="slide"><img src="img/armani.png" alt="Pulpo"></div>
        <div class="slide"><img src="img/pillud.png" alt="El fundador"></div>
        <div class="slide"><img src="img/rey.png" alt="Rey"></div>
        <div class="slide"><img src="img/iker.png" alt="Iker"></div>
        <div class="slide"><img src="img/lomonaco.png" alt="a"></div>  
        <div class="slide"><img src="img/martiracing_ofc.jpg" alt="b"></div>
        <div class="slide"><img src="img/breyboca_ofc.jpg" alt="c"></div>
        <div class="slide"><img src="img/acuñariver_ofc.jpg" alt="d"></div>
        <div class="slide"><img src="img/romañasanlo_ofc.png" alt="e"></div>
      </div>
      <div class="indicators"></div>
    </div>
  </section>
</div>
<div class="texto">
  <h2>Jugadores destacados</h2>
</div>
<div id="acordion">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          Liga Profesional Argentina de Fútbol
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>
            <table class="liga">
              <thead>
                <tr>
                  <th>PS</th>
                  <th>Escudo</th>
                  <th>Club</th>
                  <th>PJ</th>
                  <th>PG</th>
                  <th>PE</th>
                  <th>PP</th>
                  <th>+/-</th>
                  <th>PTS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><a href="liga/Velez 2.png"><img id="velez" src="liga/Velez 2.png"></a></td>
                  <td>Vélez Sársfield</td>
                  <td>13</td>
                  <td>8</td>
                  <td>2</td>
                  <td>3</td>
                  <td>27</td>
                  <td>+18</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="liga/tucuman.png"><img src="liga/tucuman.png"></a></td>
                  <td>Atlético Tucumán</td>
                  <td>13</td>
                  <td>8</td>
                  <td>2</td>
                  <td>3</td>
                  <td>25</td>
                  <td>+6</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="liga/instituto.png"><img src="liga/instituto.png"></a></td>
                  <td>Instituto</td>
                  <td>13</td>
                  <td>7</td>
                  <td>3</td>
                  <td>3</td>
                  <td>24</td>
                  <td>+9</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="liga/huracan.png"><img src="liga/huracan.png"></a></td>
                  <td>Huracán</td>
                  <td>13</td>
                  <td>6</td>
                  <td>6</td>
                  <td>1</td>
                  <td>24</td>
                  <td>+6</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="liga/talleres.png"><img src="liga/talleres.png"></a></td>
                  <td>Talleres</td>
                  <td>13</td>
                  <td>6</td>
                  <td>5</td>
                  <td>2</td>
                  <td>23</td>
                  <td>+4</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="liga/union.png"><img src="liga/union.png"></a></td>
                  <td>Unión</td>
                  <td>13</td>
                  <td>6</td>
                  <td>5</td>
                  <td>2</td>
                  <td>23</td>
                  <td>+4</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><a href="escudos/racing.php"><img src="liga/racing.png"></a></td>
                  <td>Racing club</td>
                  <td>13</td>
                  <td>6</td>
                  <td>3</td>
                  <td>4</td>
                  <td>21</td>
                  <td>+8</td>
                </tr>
                <td>8</td>
                <td><a href="escudos/boca.php"><img src="liga/boca.png"></a></td>
                <td>Boca Juniors</td>
                <td>13</td>
                <td>5</td>
                <td>6</td>
                <td>2</td>
                <td>21</td>
                <td>+6</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><a href="liga/gimnasia.png"><img src="liga/gimnasia.png"></a></td>
                  <td>Gimnasia LP</td>
                  <td>13</td>
                  <td>6</td>
                  <td>2</td>
                  <td>5</td>
                  <td>20</td>
                  <td>+2</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><a href="liga/riestra.png"><img src="liga/riestra.png"></a></td>
                  <td>Deportivo Riestra</td>
                  <td>13</td>
                  <td>6</td>
                  <td>1</td>
                  <td>6</td>
                  <td>19</td>
                  <td>-1</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td><a href="escudos/river.php"><img src="liga/river.png"></a></td>
                  <td>River Plate</td>
                  <td>13</td>
                  <td>4</td>
                  <td>6</td>
                  <td>3</td>
                  <td>18</td>
                  <td>+5</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td><a href="liga/rosario.png"><img id="rosario" src="liga/rosario.png"></a></td>
                  <td>Rosario Central</td>
                  <td>13</td>
                  <td>5</td>
                  <td>3</td>
                  <td>5</td>
                  <td>18</td>
                  <td>+2</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td><a href="liga/lanus.png"><img id="lanus" src="liga/lanus.png"></a></td>
                  <td>Lanús</td>
                  <td>13</td>
                  <td>4</td>
                  <td>6</td>
                  <td>3</td>
                  <td>18</td>
                  <td>-1</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td><a href="liga/godoycruz.png"><img id="godoycruz" src="liga/godoycruz.png"></a></td>
                  <td>Godoy Cruz</td>
                  <td>12</td>
                  <td>4</td>
                  <td>5</td>
                  <td>3</td>
                  <td>17</td>
                  <td>+2</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td><a href="liga/belgrano.png"><img src="liga/belgrano.png"></a></td>
                  <td>Belgrano</td>
                  <td>13</td>
                  <td>4</td>
                  <td>5</td>
                  <td>4</td>
                  <td>17</td>
                  <td>-2</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td><a href="liga/estudiantes.png"><img id="estudianteslp" src="liga/estudiantes.png"></a></td>
                  <td>Estudiantes LP</td>
                  <td>13</td>
                  <td>4</td>
                  <td>4</td>
                  <td>5</td>
                  <td>16</td>
                  <td>+1</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td><a href="liga/tigre.png"><img id="tigre" src="liga/tigre.png"></a></td>
                  <td>Tigre</td>
                  <td>13</td>
                  <td>4</td>
                  <td>4</td>
                  <td>5</td>
                  <td>16</td>
                  <td>-1</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td><a href="escudos/independiente.php"><img src="liga/independiente.png"></a></td>
                  <td>Independiente</td>
                  <td>13</td>
                  <td>3</td>
                  <td>7</td>
                  <td>3</td>
                  <td>16</td>
                  <td>-1</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td><a href="liga/platense.png"><img id="platense" src="liga/platense.png"></a></td>
                  <td>Platense</td>
                  <td>13</td>
                  <td>4</td>
                  <td>3</td>
                  <td>6</td>
                  <td>15</td>
                  <td>-2</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td><a href="liga/rivadavia.png"><img src="liga/rivadavia.png"></a></td>
                  <td>Independiente Rivadavia</td>
                  <td>13</td>
                  <td>4</td>
                  <td>3</td>
                  <td>6</td>
                  <td>15</td>
                  <td>-5</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td><a href="liga/sarmiento.png"><img src="liga/sarmiento.png"></a></td>
                  <td>Sarmiento de Junín</td>
                  <td>13</td>
                  <td>3</td>
                  <td>5</td>
                  <td>5</td>
                  <td>14</td>
                  <td>-2</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td><a href="liga/argentinosjrs.png"><img id="argentinosjrs" src="liga/argentinosjrs.png"></a></td>
                  <td>Argentinos Jrs</td>
                  <td>13</td>
                  <td>4</td>
                  <td>2</td>
                  <td>7</td>
                  <td>14</td>
                  <td>-8</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td><a href="escudos/sanlorenzo.php"><img src="liga/san lorenzo.png"></a></td>
                  <td>San Lorenzo</td>
                  <td>12</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>13</td>
                  <td>-1</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td><a href="liga/newells.png"><img id="newells" src="liga/newells.png"></a></td>
                  <td>Newell's</td>
                  <td>13</td>
                  <td>3</td>
                  <td>4</td>
                  <td>6</td>
                  <td>13</td>
                  <td>-6</td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><a href="liga/banfield 2.png"><img id="banfield" src="liga/banfield 2.png"></a></td>
                  <td>Banfield</td>
                  <td>13</td>
                  <td>2</td>
                  <td>5</td>
                  <td>6</td>
                  <td>11</td>
                  <td>-7</td>
                </tr>
                <tr>
                  <td>26</td>
                  <td><a href="liga/defensajusticia.png"><img src="liga/defensajusticia.png"></a></td>
                  <td>Defensa y Justicia</td>
                  <td>13</td>
                  <td>2</td>
                  <td>5</td>
                  <td>6</td>
                  <td>11</td>
                  <td>-11</td>
                </tr>
                <tr>
                  <td>27</td>
                  <td><a href="liga/barracas.png"><img id="barracas" src="liga/barracas.png"></a></td>
                  <td>Barracas Central</td>
                  <td>13</td>
                  <td>1</td>
                  <td>5</td>
                  <td>7</td>
                  <td>8</td>
                  <td>-13</td>
                </tr>
                <tr>
                  <td>28</td>
                  <td><a href="liga/centralcordoba.png"><img src="liga/centralcordoba.png"></a></td>
                  <td>Central Córdoba</td>
                  <td>13</td>
                  <td>1</td>
                  <td>4</td>
                  <td>8</td>
                  <td>7</td>
                  <td>-12</td>
                </tr>

              </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
          aria-expanded="false" aria-controls="collapseTwo">
          Premier League
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong><?php mostrarTablaPosicionesPremierLeague(); ?>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          LaLiga
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong> <?php mostrarTablaPosicionesEspana(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="acordion" class="accordion-item">
  <h2 class="accordion-header" id="headingFour">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
      aria-expanded="false" aria-controls="collapseThree">
      Serie A
    </button>
  </h2>
  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <strong> <?php mostrarTablaPosicionesSerieA(); ?>
    </div>
  </div>
</div>
</div>
<div id="tablas">
</div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
