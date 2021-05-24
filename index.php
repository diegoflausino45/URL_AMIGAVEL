<style>
a{
    margin-right: 10px;
}
</style>

<a href="inicio">Inicio</a>
<a href="meio">Meio</a>
<a href="fim">Fim</a>


<?php

$rota = explode("/", $_GET['url'] ?? 'inicio');

var_dump($rota);

if (file_exists("paginas/{$rota[0]}.html")){
    include "paginas/{$rota[0]}.html";
}