<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/menu.php';
include 'telas/head.php';
include 'telas/acoes.php';

match ($url){
    '/' => home(),
    '/login' => cadastro(),
    '/cadastro' => cadastro(),
    '/admin' => admin(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => erro404(),
};

include 'telas/footer.php';