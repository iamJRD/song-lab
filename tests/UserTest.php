<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/User.php";
    require_once "src/Project.php";
    require_once "src/Message.php";

    $server = 'mysql:host=localhost;dbname=songlab_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class UserTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            User::deleteAll();
            Project::deleteAll();
            Message::deleteAll();
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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

            //Act
            $result = $test_user->getPhoto();

            //Assert
            $this->assertEquals('/../web/img/test_photo.jpg', $result);
        }

        function testGetPassword()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);

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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $password1 = 'password';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1, $password1);
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
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $password1 = 'password';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1, $password1);
            $test_user1->save();

            //Act
            User::deleteAll();

            //Assert
            $result = User::getAll();
            $this->assertEquals([], $result);
        }

        function testdeleteUser()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $password1 = 'password';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1, $password1);
            $test_user1->save();

            //Act
            $test_user->delete();

            //Assert
            $result = User::getAll();
            $this->assertEquals([$test_user1], User::getAll());
        }

        function testUpdate()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $new_first_name = 'Michael';
            $new_last_name = 'Scott';
            $new_email = 'paperlover@hotmail.com';
            $new_username = 'dunderdude';
            $new_bio = 'I just want to jam with Jim and Stanley. They always hold band practice without me and keep changing the location so I cannot find them.';
            $new_photo = '/../web/img/test_photo.jpg';
            $new_password = 'istilllovejan';
            $test_user->update($new_first_name, $new_last_name, $new_email, $new_username, $new_bio, $new_photo, $new_password);

            //Act
            $result1 = $test_user->getFirstName();
            $result2 = $test_user->getLastName();
            $result3 = $test_user->getEmail();
            $result4 = $test_user->getUsername();
            $result5 = $test_user->getBio();
            $result6 = $test_user->getPhoto();
            $result7 = $test_user->getPassword();

            //Assert
            $this->assertEquals($new_first_name, $result1);
            $this->assertEquals($new_last_name, $result2);
            $this->assertEquals($new_email, $result3);
            $this->assertEquals($new_username, $result4);
            $this->assertEquals($new_bio, $result5);
            $this->assertEquals($new_photo, $result6);
            $this->assertEquals($new_password, $result7);
        }

        function testFind()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);            $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $password1 = 'password';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1, $password1);            $test_user1->save();

           //Act
           $result = User::find($test_user->getId());

           //Assert
           $this->assertEquals($test_user, $result);
        }

        function testFindUsername()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);              $test_user->save();

            $id1 = 2;
            $first_name1 = 'Gerald';
            $last_name1 = 'Ampson';
            $email1 = 'jammingerald@gmail.com';
            $username1 = 'jammingerald';
            $bio1 = 'Tennesse transplant looking for a band that loves to rock.';
            $photo1 = '/../web/img/test_photo2.jpg';
            $password1 = 'password';
            $test_user1 = new User($id1, $first_name1, $last_name1, $email1, $username1, $bio1, $photo1, $password1);
            $test_user1->save();

           //Act
           $result = User::findUsername($test_user->getUsername());

           //Assert
           $this->assertEquals($test_user, $result);
        }

        function testAddProject()
        {
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);             $test_user->save();

            $id1 = 3;
            $title = 'Herding Cats';
            $description = 'A song about the futility of herding cats and how this is a metaphor for my life';
            $genre = 'Mathcore';
            $resources = 'http://fakeembedcode.com';
            $lyrics = '';
            $type = 'Lyrics';
            $user_id = $test_user->getId();
            $test_project = new Project($id1, $title, $description, $genre, $resources, $lyrics, $type, $user_id);
            $test_project->save();

            //Act
            $test_user->AddProject($test_project);

            //Assert
            $this->assertEquals([$test_project], $test_user->getProjects());
        }

        function testGetProjects()
        {
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $id1 = 3;
            $title = 'Herding Cats';
            $description = 'A song about the futility of herding cats and how this is a metaphor for my life';
            $genre = 'Mathcore';
            $resources = 'http://fakeembedcode.com';
            $lyrics = '';
            $type = 'Lyrics';
            $user_id = $test_user->getId();
            $test_project = new Project($id1, $title, $description, $genre, $resources, $lyrics, $type, $user_id);
            $test_project->save();

            $id2 = 4;
            $title1 = 'Still Water';
            $description1 = 'A song about artisan cheese';
            $genre1 = 'Russian Bubblegum Pop';
            $resources1 = 'http://fakeembedcode.com';
            $lyrics1 = '';
            $type1 = 'Lyrics';
            $user_id1 = $test_user->getId();
            $test_project1 = new Project($id2, $title1, $description1, $genre1, $resources1, $lyrics1, $type1, $user_id1);
            $test_project1->save();

            //Act
            $test_user->addProject($test_project);
            $test_user->addProject($test_project1);

            //Assert
            $this->assertEquals([$test_project, $test_project1], $test_user->getProjects());
        }

        function testAddMessage()
        {
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $id = null;
            $message = "hi how are you";
            $sender = "torrence";
            $project_id = 2;
            $test_message = new Message($id, $message, $sender, $project_id);
            $test_message->save();

            //Act
            $test_user->addMessage($test_message);

            //Assert
            $this->assertEquals([$test_message], $test_user->getOwnerMessages());
        }

        function testGetOwnerMessages()
        {
            //Arrange
            $id = 1;
            $first_name = 'Sammy';
            $last_name = 'Singsalot';
            $email = 'sammysinger@gmail.com';
            $username = 'sammysinger';
            $bio = 'Portland native with a voice like an angel. Looking for other creative types to collaborate with!';
            $photo = '/../web/img/test_photo.jpg';
            $password = 'password';
            $test_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
            $test_user->save();

            $id = null;
            $message = "hi how are you";
            $sender = "molly";
            $project_id = 3;
            $test_message = new Message($id, $message, $sender, $project_id);
            $test_message->save();
            $test_user->addMessage($test_message);

            $message2 = "want to contribute synth part";
            $sender2 = "jared";
            $project_id2 = 3;
            $test_message2 = new Message($id, $message2, $sender2, $project_id2);
            $test_message2->save();
            $test_user->addMessage($test_message2);

            //Act
            $result = $test_user->getOwnerMessages();

            //Assert
            $this->assertEquals([$test_message, $test_message2], $result);
        }



    }
?>
