<?php

namespace model\ManagerClass;
use model\InterfaceClass\ManagerInterface;
use model\MappingClass\ValuersMapping;

use PDO ;
use Exception;

class NavbarManager implements ManagerInterface{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    public function getOneById(int $id)
    {
        // TODO: Implement getOneById() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
}