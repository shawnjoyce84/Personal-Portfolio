<?php

namespace Portfolio\Model;

use Portfolio\Config\Database;

class ModelPortfolio extends Database {

    public function __construct() {
        $this->database = new Database();
    }

    public function Portfolio_Settings() {
        $sql = "SELECT *
                FROM settings
                WHERE id = 1";
        $result = $this->database->DB_Query($sql);
        foreach ($result as $results) {
            $settings['title'] = $results['title'];
            $settings['email'] = $results['email'];
            $settings['twitter'] = $results['twitter'];
            $settings['github'] = $results['github'];
            $settings['status'] = $results['status'];
        }

        return $settings;
    }
}


// EOF