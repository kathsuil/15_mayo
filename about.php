<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Se busca establecer una vinculación entre el diseño gráfico y el diseño de servicios, con la perspectiva de crear experiencias en un plano tridimensional a partir de las herramientas que entrega la disciplina.<br>
La respuesta parece estar vinculada al diseño de interiores o interiorismo, ya que a través de este podemos generar ambientes propicios para la generación de un sistema complejo de servicio.
No entiendase esto como un mero decorativo de un servicio preexistente, si no que se propone que el diseñador debe participar en todas las etapas del proyecto, para generar ambientación que responda con elementos como: identidad de marca,
paleta de colores, iluminación, etc, que faciliten el servicio y colaboren con el proyecto.<br>
Esta teoria se sustenta en la interface propuesta por Bonsiepe en "del objeto a la interface".</p>

</section>
<?php include('pie.php');?>
