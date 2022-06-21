<?php

namespace Amazing\Vendors;

use Amazing\Utility\Helper;

class Vendor
{

    public $image = null;

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

        $sql = "SELECT * FROM `vendors`"; // step1: write the query
        $stmt = $this->pdo->query($sql); // step2: execute query
        $vendors = $stmt->fetchAll(); // step3 : retrieve data

        return $vendors;
    }

    public function store($data)
    {

        $sql = "INSERT INTO `vendors` (`id`, `image`, `created_at`, `updated_at`) VALUES (NULL, :image, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

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

        $sql = "SELECT * FROM `vendors` WHERE id = $id"; // step1: write the query
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
        $sql = "UPDATE `vendors` 
                SET 
                `image` = :image,
                `updated_at` = CURRENT_TIMESTAMP
                 WHERE `vendors`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM vendors WHERE `vendors`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    private function _execute($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }
}
