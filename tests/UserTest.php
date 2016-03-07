<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/User.php";

    $server = 'mysql:host=localhost;dbname=songlab_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class UserTest extends PHPUnit_Framework_TestCase
    {
        function testGetId()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getId();

            //Assert
            $this->assertEquals(1, $result);
        }

        function testGetFirstName()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getFirstName();

            //Assert
            $this->assertEquals('Sammy', $result);
        }

        function testGetLastName()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getLastName();

            //Assert
            $this->assertEquals('Singsalot', $result);
        }

        function testGetEmail()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getEmail();

            //Assert
            $this->assertEquals('sammysinger@gmail.com', $result);
        }
        function testGetUsername()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getUsername();

            //Assert
            $this->assertEquals('sammysinger', $result);
        }

        function testGetBio()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getBio();

            //Assert
            $this->assertEquals('Portland native with a voice like an angel. Looking for other creative types to collaborate with!', $result);
        }

        function testGetPhoto()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo);

            //Act
            $result = $test_user->getPhoto();

            //Assert
            $this->assertEquals('/../web/img/test_photo.jpg', $result);
        }
    }
?>
