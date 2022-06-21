<?php

namespace Amazing\Sliders;

use Amazing\Utility\Helper;

class SliderHome
{

    public $image = null;
    public $caption_title = null;
    public $caption = null;

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

        $sql = "SELECT * FROM `slides`"; // step1: write the query
        $stmt = $this->pdo->query($sql); // step2: execute query
        $slides = $stmt->fetchAll(); // step3 : retrieve data

        return $slides;
    }

    public function store($data)
    {

        $sql = "INSERT INTO `slides` (`id`, `caption_title`, `caption`, `image`, `created_at`, `updated_at`) VALUES (NULL, :caption_title, :caption, :image, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

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

        $sql = "SELECT * FROM `slides` WHERE id = $id"; // step1: write the query
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
        $sql = "UPDATE `slides` 
                SET 
                `caption_title` = :caption_title, 
                `caption` = :caption,
                `image` = :image,
                `updated_at` = CURRENT_TIMESTAMP
                 WHERE `slides`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM slides WHERE `slides`.`id` = :id";
        return $this->_execute($sql, $data);
    }

    private function _execute($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }
}
