<?php

namespace Amazing\ProductTypes;

use Amazing\Utility\Helper;

class ProductType
{

    public $product_type = null;

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

        $sql = "SELECT * FROM `product_types`"; // step1: write the query
        $stmt = $this->pdo->query($sql); // step2: execute query
        $productTypes = $stmt->fetchAll(); // step3 : retrieve data

        return $productTypes;
    }

    public function store($data)
    {

        $sql = "INSERT INTO `product_types` (`id`, `product_type`, `created_at`, `updated_at`) VALUES (NULL, :product_type, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

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

        $sql = "SELECT * FROM `product_types` WHERE id = $id"; // step1: write the query
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
        $sql = "UPDATE `product_types` 
                SET 
                `product_type` = :product_type,
                `updated_at` = CURRENT_TIMESTAMP
                 WHERE `product_types`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM product_types WHERE `product_types`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    private function _execute($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }
}
