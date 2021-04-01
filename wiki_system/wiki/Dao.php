<?php

class Dao
{
    const USER = "";
    const PASSWORD = "";
    const DB_NAME = "";
    const TABLE_NAME = "";

    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;charset=utf8;dbname=" . self::DB_NAME;
        $this->pdo = new PDO($dsn, self::USER, self::PASSWORD);
    }

    public function queryRun($query)
    {
        return $this->pdo->query($query)->fetchAll();
    }

    public function queryRunPre($query, $param)
    {
        $pre = $this->pdo->prepare($query);
        if ($pre->execute($param))
            return $pre->fetchAll();
        else
            return false;
    }

    public function newData($title, $file, $date)
    {
        $insertQuery = "INSERT INTO " . self::TABLE_NAME . " (text_title,text_file,text_date) " .
            "VALUES(" . $this->pdo->quote($title) . "," . $this->pdo->quote($file) . "," . $this->pdo->quote($date) . ")";

        $this->queryRun($insertQuery);
    }
}
