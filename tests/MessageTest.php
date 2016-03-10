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
            $sender = "torrence";
            $project_id = null;
            $test_message = new Message($id, $message, $sender, $project_id);

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
            $sender = "torrence";
            $project_id = 2;
            $test_message = new Message($id, $message, $sender, $project_id);

            // Act
            $result = $test_message->getMessage();

            // Assert
            $this->assertEquals($message, $result);
        }

        function testProjectId()
        {
            // Arrange
            $id = null;
            $message = "hi how are you";
            $sender = "torrence";
            $project_id = 2;
            $test_message = new Message($id, $message, $sender, $project_id);

            // Act
            $result = $test_message->getProjectId();

            // Assert
            $this->assertEquals($project_id, $result);
        }

        function testSave()
        {
            // Arrange
            $id = null;
            $message = "hi how are you";
            $sender = "torrence";
            $project_id = 3;
            $test_message = new Message($id, $message, $sender, $project_id);

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
            $sender = "torrence";
            $project_id = 2;
            $test_message = new Message($id, $message, $sender, $project_id);

            $message2 = "Would like to add bass";
            $sender2 = "jared";
            $project_id2 = 3;
            $test_message2 = new Message($id, $message2, $sender2, $project_id2);


            // Act
            $test_message->save();
            $test_message2->save();
            $result = Message::getAll();

            // Assert
            $this->assertEquals([$test_message, $test_message2], $result);
        }
    }
