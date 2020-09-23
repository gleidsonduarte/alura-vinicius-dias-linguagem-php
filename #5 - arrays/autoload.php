<?php

spl_autoload_register(
    function (string $namespaceClasse): void
    {
        $caminho = '\src';
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        $diretorio_classe = getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";

        echo $diretorio_classe;

        @include_once $diretorio_classe;
    }
);
