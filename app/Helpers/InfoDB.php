<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class InfoDB extends DB
{

    private static $list_hide_tables = [
        "migrations",
        "password_resets",
        "users",
    ];

    /**
     * getRelationshipsTable
     *
     * @param strint $table
     *
     * @return array
     */
    public static function getRelationshipsTable($table)
    {
        $rows = DB::select("SHOW COLUMNS FROM $table");
        $rows = array_map(function ($value) {
            if (substr($value->Field, -3, 3) === "_id") {
                return $value->Field;
            }

        }, $rows);
        $rows = array_filter($rows, function ($v) {
            if ($v) {
                return true;
            }

        });

        return $rows;
    }

    /**
     * getRelationshipsColumnName
     *
     * @return array
     */
    public static function getRelationshipsColumnName($table)
    {

        $list = [
            "author" => "last_name",
        ];
        return $list[$table];
    }

    /**
     * getTableModel
     *
     * @param string $table
     *
     * @return class
     */
    public static function getTableModel($table)
    {

        $table = ucfirst(strtolower($table));
        $model = "";

        switch ($table) {
            case "Conception_article":
                $model = new \App\ConceptionArticle;
                break;
            case "Articles":
                $model = new \App\Article;
                break;
        };

        return $model;
    }

    public static function getColumnName($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);
    }

    public static function getRelationshipsValue($table)
    {

        $listRelationships = self::getRelationshipsTable($table);
        $relationships = [];

        foreach ($listRelationships as $value) {
            $relationshipsTable = substr($value, 0, -3);
            $relationshipsTableModel = InfoDB::getTableModel($relationshipsTable);
            $columnName = InfoDB::getRelationshipsColumnName($relationshipsTable);
            $res = $relationshipsTableModel->get(["id", $columnName])->toArray();
            $relationships[$value] = $res;
        }

        return $relationships;
    }

    public static function getTables()
    {

        $tables = [];
        $listTables = DB::select('SHOW TABLES');

        foreach ($listTables as $table) {
            foreach ($table as $name) {

                if (in_array($name, self::$list_hide_tables)) {
                    continue;
                }

                $tables[] = $name;
            }
        }

        return $tables;
    }

}
