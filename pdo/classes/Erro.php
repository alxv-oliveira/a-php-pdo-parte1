<?php

class Erro
{
    public static function trataErro(Exception $e)
    {
        if (DEBUG) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        } else {
            include 'erro.php';
        }
        exit;
    }
}