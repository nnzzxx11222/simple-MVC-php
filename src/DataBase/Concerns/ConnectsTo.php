<?php 
namespace SmallMvcSystem\DataBase\Concerns;

use SmallMvcSystem\DataBase\Mangers\Contracts\DatabaseManager;

trait ConnectsTo {

    public static function connect (DatabaseManager $manager){

        return $manager->connect();
    }
}
