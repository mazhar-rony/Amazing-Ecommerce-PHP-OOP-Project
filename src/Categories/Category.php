<?php

namespace Amazing\Categories;

use Amazing\Utility\Helper;

class Category
{

    public $category_name = null;

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

        $sql = "SELECT * FROM `categories`"; // step1: write the query
        $stmt = $this->pdo->query($sql); // step2: execute query
        $categories = $stmt->fetchAll(); // step3 : retrieve data

        return $categories;
    }

    public function store($data)
    {

        $sql = "INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES (NULL, :category_name, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

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

        $sql = "SELECT * FROM `categories` WHERE id = $id"; // step1: write the query
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
        $sql = "UPDATE `categories` 
                SET 
                `category_name` = :category_name,
                `updated_at` = CURRENT_TIMESTAMP
                 WHERE `categories`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM categories WHERE `categories`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    private function _execute($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }
}
