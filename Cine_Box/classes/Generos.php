<?php
 
class Generos{
 
    public $conexaoBanco;
 
    public function __construct() {
       
        $dsn = 'mysql:dbname=db_cine_box;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $auxScript = '';
 
        $this->conexaoBanco = new PDO($dsn, $user, $password);
       
 
    }
 
    public function consultarlistaGeneros(){
       
      $script = 'SELECT * FROM tb_generos';
 
        return $this->conexaoBanco->query($script)->fetchAll();
    }
 
    public function consultarGeneroByIdfilme($id_filme){
 
 
        $script = "SELECT * FROM tb_generos INNER JOIN tb_filme_genero ON tb_filme_genero.genero_id = tb_generos.id WHERE tb_filme_genero.filme_id = {$id_filme}";
 
        return $this->conexaoBanco->query($script)->fetchAll();
 
    }
 
}