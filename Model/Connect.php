<?php
//private ->  encapsulamento (tudo que declaro como private só posso utilizar na mesma classe)


// Declarando a classe
abstract class Connect {

    // atributo que armazena a conexão com o servidor
    private static $conn;

    // Existe uma regra na orientação a objeto que só pode usar atributos estáticos se o método for estático
    // método que estabele e pega a conexão com o servidor
    private static function getConn() : PDO {

        //verifica se o valor do atributo é null / self:: significa fazer referencia dentro da propria classe
        if(self::$conn == null) {
            try {
                //instancia o objeto PDO e armazena no atributo
                self::$conn =  new PDO("mysql:host=localhost;dbname=sgce;porta=3306","root","");
                
            } catch (PDOException $ex) {
                echo "Erro: ".$ex->getMessage();
            }
        }

        return self::$conn;

    }

    // Método que prepara a conexão a query SQL que será executada
    protected static function prepareSQL($query) {
        return self::getConn() -> prepare($query);
    }

}

