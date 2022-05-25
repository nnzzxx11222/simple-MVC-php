<?php 
namespace SmallMvcSystem\DataBase\Grammars;

use App\Models\Model;

class MySQLGrammar{
    public static function buildInsertQuery($keys){
        $values='';
        for($i=0;$i<count($keys);$i++){

            $values.="?,";
        }

        $query = "INSERT INTO ".Model::getTableName() ." (`".implode("`, `",$keys)."`) VALUE(". rtrim($values,",").")";
        return $query;
    }
    public static function buildSelectQuery($columns,$filter){

        if(is_array($columns)){
            $columns=implode(',',$columns);
        }
        $query = "SELECT {$columns} FROM ".Model::getTableName();

        if($filter){
            $query .=" WHERE {$filter[0]} {$filter[1]} ?" ;
        }
        return $query;

    }

    public static function buildUpdateQuery($keys)
    {
        $query = 'UPDATE ' . Model::getTableName() . ' SET ';

        foreach ($keys as $key) {
            $query .= "{$key} = ?, ";
        }

        $query = rtrim($query, ', ') . ' WHERE ID = ?';

        return $query;
    }
    public static function buildDeleteQuery (){
        
        // if($filter){
        //     $query .=" WHERE {$filter[0]} {$filter[1]} ? " ;
        // }
        return "DELETE FROM ".Model::getTableName() ." WHERE id = ?";
    }

}