<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
</body>
</html>



<?php
    $idiomas = array(
        "niveles" => array(
            "avanzado" => array(
                "ingles" => 25,
                "france" => 10,
                "mandarin" => 8,
                "ruso" => 12,
                "portugues" => 30,
                "japones" => 90
            ),
            "intermedio" => array(
                "ingles" => 15,
                "france" => 5,
                "mandarin" => 4,
                "ruso" => 8,
                "portugues" => 15,
                "japones" => 25
            ),
            "basico" => array(
                "ingles" => 10,
                "france" => 2,
                "mandarin" => 1,
                "ruso" => 4,
                "portugues" => 10,
                "japones" => 67
            )
        )
    );
    function imprimir($array1, $array2, $nivel, $materia){
        return $array1[$array2][$nivel][$materia];
    };


    echo "
<table class=\"table table-hover\">
<thead>
    <tr>
      <th scope=\"col\">Nivel</th>
      <th scope=\"col\">Ingles</th>
      <th scope=\"col\">frances</th>
      <th scope=\"col\">Mandarin</th>
      <th scope=\"col\">Ruso</th>
      <th scope=\"col\">Portugues</th>
      <th scope=\"col\">Japones</th>
    </tr>
</thead>

<tbody>
    <tr class=\"table-success\">
      <td>Basico</td>
      <td>".imprimir($idiomas,"niveles", "basico", "ingles")."</td>
      <td>".imprimir($idiomas,"niveles", "basico", "france")."</td>
      <td>".imprimir($idiomas,"niveles", "basico", "mandarin")."</td>
      <td>".imprimir($idiomas,"niveles", "basico", "ruso")."</td>
      <td>".imprimir($idiomas,"niveles", "basico", "portugues")."</td>
      <td>".imprimir($idiomas,"niveles", "basico", "japones")."</td>
      </tr>
      
      <tr class=\"table-warning\">
      <td>Intermedio</td>
      <td>".imprimir($idiomas,"niveles", "intermedio", "ingles")."</td>
      <td>".imprimir($idiomas,"niveles", "intermedio", "france")."</td>
      <td>".imprimir($idiomas,"niveles", "intermedio", "mandarin")."</td>
      <td>".imprimir($idiomas,"niveles", "intermedio", "ruso")."</td>
      <td>".imprimir($idiomas,"niveles", "intermedio", "portugues")."</td>
      <td>".imprimir($idiomas,"niveles", "intermedio", "japones")."</td>
      </tr>
      
      
      <tr class=\"table-danger\">
      <td>Avanzado</td>
      <td>".$idiomas["niveles"]["avanzado"]["ingles"]."</td>
      <td>".$idiomas["niveles"]["avanzado"]["ingles"]."</td>
      <td>".$idiomas["niveles"]["avanzado"]["ingles"]."</td>
      <td>".$idiomas["niveles"]["avanzado"]["ingles"]."</td>
      <td>".$idiomas["niveles"]["avanzado"]["ingles"]."</td>
      <td>".$idiomas["niveles"]["avanzado"]["ingles"]."</td>
    </tr>

</tbody>


</table>
";

?>