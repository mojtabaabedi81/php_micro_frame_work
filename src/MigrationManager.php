<?php

namespace App;

use PDO;
use App\Migrations\CreateUsersTable;
use PDOException;

class MigrationManager
{
    protected $pdo;
    public function __construct()
    {
        try {
            //make object from PDO to make the connnection beween database and server
            $this->pdo = new PDO('mysql:host=localhost;dbname=micro_frame_work', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "connection failed" . $e->getMessage();
            exit;
        }
    }

    //here is where the user run : migrate.php migrate in command line(in directory of project) run this public function
    public function migrate()
    {
        //here we make the migrations list 
        $migrations = [
            new CreateUsersTable($this->pdo),
            // add more migration if you want
        ];

        foreach ($migrations as $migration) {
            $migration->up();
        }
        echo " migration excuited successfully\n";
    }
    public function rollback()
    {
        $migrations = [
            new CreateUsersTable($this->pdo),
            //add more migration here.
        ];

        foreach ($migrations as $migration) {
            $migration->down();
        }

        echo "Migrations  rolled back successfully.\n";
    }
}
