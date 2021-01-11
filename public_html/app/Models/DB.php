<?php
/**
 * DB Model: manages the data, logic and rules of the application
 * Author: Mojdeh Bahadorpour
 */

namespace App\Models;

use App\Http\Config;

class DB
{
    private static $instance = null;
    private static $connstr = null;
    private static $table = null;
    private static $query = null;

    private function __construct()
    {
    }

    public static function table($table)
    {
        self::$instance = new Self;
        self::$connstr = mysqli_connect(Config::HOSTNAME, Config::USERNAME, Config::PASSWORD, Config::DBNAME);
        self::$table = $table;
        self::$query = "select * from " . self::$table;

        return self::$instance;
    }

    public function innerJoin($table, $fk, $fk_value)
    {
        self::$query .= " inner join {$table} on {$fk} = {$fk_value}";
        return $this;
    }

    public function where($field, $value)
    {
        self::$query .= " where {$field} = '{$value}'";
        return $this;
    }

    public function andWhere($field, $value)
    {
        self::$query .= " and {$field} = '{$value}'";
        return $this;
    }

    public function orWhere($field, $value)
    {
        self::$query .= " or {$field} = '{$value}'";
        return $this;
    }

    public function get()
    {
        mysqli_set_charset(self::$connstr, 'utf8');
        self::$query = mysqli_query(self::$connstr, self::$query);

        $result = [];
        while ($res = mysqli_fetch_assoc(self::$query)) {
            array_push($result, $res);
        }
        return $result;
    }

    public function add($fields = [], $vals = [])
    {
        $fields = implode($fields, ",");
        $vals = implode($vals, "','");
        $query = "insert into " . self::$table . " ({$fields}) values ('{$vals}')";

        mysqli_set_charset(self::$connstr, 'utf8');
        self::$query = mysqli_query(self::$connstr, $query);
    }

    public function delete($field, $val)
    {
        $query = "delete from " . self::$table . " where {$field} = {$val}";

        self::$query = mysqli_query(self::$connstr, $query);

    }

    public function update($field, $val, $cond, $condVal)
    {
        // UPDATE admin_app SET password='2000000' WHERE admin_id= '1'
        $query = "update " . self::$table . " set {$field} = '{$val}' where {$cond} = '{$condVal}'";
        self::$query = mysqli_query(self::$connstr, $query);

    }

    // UPDATE member SET mem_id='1', dep_id_fk='4' WHERE admin_id= '1'
    public function updates($data, $cond, $condVal)
    {

        $fieldDetails = NULL;

        foreach ($data as $key => $value) {
            $fieldDetails .= "$key='$value',";
        }

        $fieldDetails = rtrim($fieldDetails, ',');

        $query = "UPDATE " . self::$table . " SET $fieldDetails WHERE {$cond} = '{$condVal}'";
        mysqli_set_charset(self::$connstr, 'utf8');
        self::$query = mysqli_query(self::$connstr, $query);


    }
}