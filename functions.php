<?php
    //Função para ver se o usuário está logado
    function isLoggedIn(){
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
            return false;
        }
        return true;
    }

    //Função para criptografar a senha
    function criptografa($str){
        return md5($str);
    }

?>