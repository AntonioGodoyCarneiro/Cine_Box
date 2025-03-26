<?php

$titulo = "";
include './includes/header.php';
require './classes/Filmes.php';

$filme = new Filmes();
$dadosFilmes = $filme->exibirListaFilmes();

include './includes/filme_lista.php';
include './includes/footer.php';