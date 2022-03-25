<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="" method="post">
        <label for="autorLabel">Autor</label>
        <input type="text" name="autorForm" id="autorForm" placeholder="Escriba el autor o varios actores">

        <label for="tituloLabel">Titulo del libro</label>
        <input type="text" name="tituloForm" id="tituloForm" placeholder="Sin comillas">

        <label for="NunEdicionLabel">Numero de la edición</label>
        <input type="number" name="numEdicionForm" id="numEdicionForm">

        <label for="lugar">Lugar de la publicación</label>
        <input type="text" name="lugarForm" id="lugarForm">

        <label for="editorialLabel">Editorial de publicación</label>
        <input type="text" name="editorialForm" id="editorialForm">

        <label for="anioEdicionLabel">Año de la Edicion</label>
        <input type="text" name="anioEdicionForm" id="anioEdicionForm" placeholder="año que ha sido publicado por la editorial">

        <label for="numPaginasLabel">Numero de paginas del libro</label>
        <input type="number" name="numPaginasForm" id="numPaginasForm">

        <label for="notasLabel">Notas adicionales</label>
        <input type="text" name="notasForm" id="notasForm">

        <label for="isbnLabel">ISBN</label>
        <input type="text" name="isbnForm" id="isbnForm" maxlength="13">

        <label for="numIngresos">ingrese el numero del libro a añadir</label>
        <input type="number" name="numIngresos" id="numIngresos" min="1" placeholder="el # de libro que se guardara, 1, 2, 3, etc">

        <input type="submit" value="Guardar">

    </form>
</body>
</html>


<?php
    class libro{
        private $autor;
        private $titulo;
        private $numEdicion;
        private $lugar;
        private $editorial;
        private $anioEdicion;
        private $numPaginas;
        private $notas;
        private $isbn;

        public function __construct($Rautor, $Rtitulo, $RnumEdicion, $Rlugar, $Reditorial, $RanioEdicion,$RnumPaginas, $Rnotas, $Risbn){
            $this -> autor = $Rautor;
            $this -> titulo = $Rtitulo;
            $this -> numEdicion = $RnumEdicion;
            $this -> lugar = $Rlugar;
            $this -> editorial = $Reditorial;
            $this -> anioEdicion = $RanioEdicion;
            $this -> numPaginas =$RnumPaginas;
            $this -> notas = $Rnotas;
            $this -> isbn = $Risbn;
        }

        public function Dautor(){echo $this -> autor;}
        public function Dtitulo(){echo $this -> titulo;}
        public function DnumEdicion(){echo $this -> numEdicion;}
        public function Dlugar(){echo $this -> lugar;}
        public function Deditorial(){echo $this -> editorial;}
        public function DanioEdicion(){echo $this -> anioEdicion;}
        public function DnumPaginas(){echo $this -> numPaginas;}
        public function Dnotas(){echo $this -> notas;}
        public function Disbn(){echo $this -> isbn;}

    }
    #Recibimiento de los valores del formulario

    if(!$_POST){}
    else {
        $_autor = $_POST["autorForm"];
        $_titulo = $_POST["tituloForm"];
        $_numEdicion = $_POST["numEdicionForm"];
        $_lugar = $_POST["lugarForm"];
        $_editorial = $_POST["editorialForm"];
        $_anioEdicion = $_POST["anioEdicionForm"];
        $_numPaginas = $_POST["numPaginasForm"];
        $_notas = $_POST["notasForm"];
        $_isbn = $_POST["isbnForm"];
        $i = strval($_POST["numIngresos"]);

        
        $Lista_autor = array();
        $Lista_titulo = array();
        $Lista_numEdicion = array();
        $Lista_lugar = array();
        $Lista_editorial = array();
        $Lista_anioEdicion = array();
        $Lista_numPaginas = array();
        $Lista_notas = array();
        $Lista_isbn = array();

        $Lista_Num_libros = array();

        #$i = new libro($_autor, $_titulo, $_numEdicion, $_lugar, $_editorial, $_anioEdicion, $_numPaginas, $_notas, $_isbn);
        $libro = new libro($_autor, $_titulo, $_numEdicion, $_lugar, $_editorial, $_anioEdicion, $_numPaginas, $_notas, $_isbn);
        
        #array_push($Lista_Num_libros, $libro);

        


    }
?>