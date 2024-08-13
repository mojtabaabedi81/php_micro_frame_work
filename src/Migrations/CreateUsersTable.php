<?php

namespace App\Migrations;


class CreateUsersTable
{
    //make protected varriable     
    protected $pdo;


    //first of all this function run and (get $pdo make the $this->pdo =$pdo) :)
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    //now we have the sql that excuted by pdo which migrate the table 
    public function up()
    {
        $sql = "Create Table users(
        id INT AUTO_INCREMENT PRIMARY KEY ,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL ,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
        $this->pdo->exec($sql);
    }

    //this function destroy the table made on the top
    public function down()
    {
        $sql = "DROP TABLE users";
        $this->pdo->exec($sql);
    }
}
