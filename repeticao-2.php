<?php

    for ($contador = 1; $contador <= 15; $contador++) {
        if ($contador == 13) {
            /*
             * Deixa de executar qualquer código que esteja abaixo de "continue"
             * e faz o laço pular para a próxima iteração.
             */
            continue;

            /*
             * Força a saída do laço.
             */
            break;
        }

        echo "#$contador" . PHP_EOL;
    }
