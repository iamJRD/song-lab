<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Project.php";

    $server = 'mysql:host=localhost;dbname=song_lab_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ProjectTest extends PHPUnit_Framework_TestCase
    {

    }
?>
