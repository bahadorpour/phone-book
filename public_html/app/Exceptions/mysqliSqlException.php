<?php
// Complete as soon as possible
// this app have not exception Handling!

namespace App\Exceptions;

use RuntimeException;

class mysqliSqlException extends mysqli_sql_exception
{
    public function __construct($message="invalid parameter", $code="1001")
    {
        return parent::__construct($message,$code);
    }
}