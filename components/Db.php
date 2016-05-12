<?php

/**
 * Класс Db
 * Компонент для роботи з базою даних
 */
class Db
{

    /**
     * Встановлює з'єднання з базою даних
     * @return \ PHP <p> Об'єкт класу PHP для роботи з БД </ p>
     */
    public static function getConnection()
    {
        // Отримати установки для з'єднання з файлу
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        // встановлюємо з'єднання
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        // задаємо кодування
        $db->exec("set names utf8");

        return $db;
    }

}
