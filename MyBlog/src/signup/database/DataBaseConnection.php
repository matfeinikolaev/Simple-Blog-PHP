<?php

class DataBaseConnection
{
    public static function make()
    {
        try {
            // Why do you don't use config.php here?
            return new PDO('mysql:host=127.0.0.1;dbname=my_blog', 'matfei', '12345678');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
