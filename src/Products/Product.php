<?php

namespace Amazing\Products;

use Amazing\Utility\Helper;

class Product
{

    public $product_name = null;
    public $product_info = null;
    public $short_description = null;
    public $description = null;
    public $product_category = null;
    public $product_size = null;
    public $product_color = null;
    public $product_type = null;
    public $image = null;
    public $actual_price = null;
    public $discounted_price = null;
    public $review = null;

    public $pdo = null;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;

        // initializing variables
        // connecting to database
        // file open etc..

    }

    public function all($cat_id = null)
    {

        if ($cat_id !== null) {
            $sql = "SELECT * FROM `products` where product_category = $cat_id"; // step1: write the query
            $stmt = $this->pdo->query($sql); // step2: execute query
            $products = $stmt->fetchAll(); // step3 : retrieve data
        } else {
            $sql = "SELECT * FROM `products`"; // step1: write the query
            $stmt = $this->pdo->query($sql); // step2: execute query
            $products = $stmt->fetchAll(); // step3 : retrieve data
        }




        return $products;
    }

    public function store($data)
    {

        $sql = "INSERT INTO `products` (`id`, `product_name`, `product_info`, `short_description`, 
                            `description`, `product_category`, `product_size`, `product_color`, 
                            `product_type`, `image`, `actual_price`, `discounted_price`, `review`, 
                            `created_at`, `updated_at`) 
                    VALUES (NULL, :product_name, :product_info, :short_description, :description, 
                            :product_category, :product_size, :product_color, :product_type, :image, 
                            :actual_price, :discounted_price, null, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

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

        $sql = "SELECT * FROM `products` WHERE id = $id"; // step1: write the query
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
        $sql = "UPDATE `products` 
                SET 
                `product_name` = :product_name,
                `product_info` = :product_info,
                `short_description` = :short_description,
                `description` = :description,
                `product_category` = :product_category,
                `product_size` = :product_size,
                `product_color` = :product_color,
                `product_type` = :product_type,
                `image` = :image,
                `actual_price` = :actual_price,
                `discounted_price` = :discounted_price,
                `updated_at` = CURRENT_TIMESTAMP
                 WHERE `products`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM products WHERE `products`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    private function _execute($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }
}
