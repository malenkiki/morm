<?php
namespace \Af83\Orm\Exception;

class NoPrimaryKeySqlException extends MormSqlException
{
    public function __construct($message = 'No primary Key', $table)
    {
        parent::__construct($message);
    }
}
