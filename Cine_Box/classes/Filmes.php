<!-- TODAS AS CLASSES DEVEM SER COM A PRIMEIRA LETRA MAIÚSCULA, POR BOA PRÁTICA. -->
<?php

class Filmes{

    public function exibirListaFilmes($limite = ""){

        var_dump($limite);

        $dsn = 'mysql:dbname=db_cine_box;host=127.0.0.1';
        $user = 'root'; 
        $password = '';
        $auxScript = '';
    
        $banco = new PDO($dsn, $user, $password);

        if (!empty($limite)){
            $auxScript= " ORDER BY RAND() LIMIT {$limite}";
        }

        $script = "SELECT * FROM tb_filmes". $auxScript;

        return $banco->query($script)->fetchAll();


    }
 
    
}
