<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/User.php";
    require_once "src/Message.php";

    $server = 'mysql:host=localhost;dbname=songlab_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class MessageTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {

            Message::deleteAll();

        }

        function testGetId()
        {
            // Arrange
            $id = null;
            $message = "hi how are you";
            $test_message = new Message($id, $message);

            // Act
            $result = $test_message->getId();

            // Assert
            $this->assertEquals($id, $result);
        }

        function testGetMessage()
        {
            // Arrange
            $id = null;
            $message = "hi how are you";
            $test_message = new Message($id, $message);

            // Act
            $result = $test_message->getMessage();

            // Assert
            $this->assertEquals($message, $result);
        }

        function testSave()
        {
            // Arrange
            $id = null;
            $message = "hi how are you";
            $test_message = new Message($id, $message);

            // Act
            $test_message->save();
            $result = Message::getAll();

            // Assert
            $this->assertEquals($test_message, $result[0]);
        }

        function testGetAll()
        {
            // Arrange
            $id = null;
            $message = "hi how are you";
            $test_message = new Message($id, $message);

            $message2 = "Would like to add bass";
            $test_message2 = new Message($id, $message2);


            // Act
            $test_message->save();
            $test_message2->save();
            $result = Message::getAll();

            // Assert
            $this->assertEquals([$test_message, $test_message2], $result);
        }
    }
