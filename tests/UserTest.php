<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/User.php";
    // require_once "src/Project.php";

    $server = 'mysql:host=localhost;dbname=songlab_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class UserTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            User::deleteAll();
            // Project::deleteAll();
        }

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

        function testsave()
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
            $test_user->save();

            //Act
            $result = User::getAll();

            //Assert
            $this->assertEquals($test_user, $result[0]);
        }

        function testgetAll()
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
            $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1);
            $test_user1->save();

            //Act
            $result = User::getAll();

            //Assert
            $this->assertEquals([$test_user, $test_user1], $result);
        }

        function testdeleteAll()
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
            $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1);
            $test_user1->save();

            //Act
            User::deleteAll();

            //Assert
            $result = User::getAll();
            $this->assertEquals([], $result);

        }


    }
?>
