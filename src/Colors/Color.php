<?php

namespace Amazing\Colors;

use Amazing\Utility\Helper;

class Color
{

    public $color_name = null;

    public $pdo = null;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;

        // initializing variables
        // connecting to database
        // file open etc..

    }

    public function all()
    {

        $sql = "SELECT * FROM `colors`"; // step1: write the query
        $stmt = $this->pdo->query($sql); // step2: execute query
        $colors = $stmt->fetchAll(); // step3 : retrieve data

        return $colors;
    }

    public function store($data)
    {

        $sql = "INSERT INTO `colors` (`id`, `color_name`, `created_at`, `updated_at`) VALUES (NULL, :color_name, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        if ($result) {
            //  set appropriate messages
        } else {
            //  set appropriate messages
        }

        Helper::redirect('/');
    }

    public function show($id = null)
    {
        if (!$id) {
            return;
        }

        $sql = "SELECT * FROM `colors` WHERE id = $id"; // step1: write the query
        $stmt = $this->pdo->query($sql); // step2: execute query
        $data = $stmt->fetch(); // step3 : retrieve data

        return $data;
    }

    public function update($data)
    {
        /**
         * @TODO
         * 
         * check if the user has permission to update the record.
         */
        $sql = "UPDATE `colors` 
                SET 
                `color_name` = :color_name,
                `updated_at` = CURRENT_TIMESTAMP
                 WHERE `colors`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM colors WHERE `colors`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    private function _execute($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }
}
