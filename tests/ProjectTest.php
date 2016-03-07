<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Project.php";

    $server = 'mysql:host=localhost;dbname=songlab_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ProjectTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Project::deleteAll();
        // }

        function testGetId()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getId();

            // Assert
            $this->assertEquals($id, $result);
        }

        function testGetTitle()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getTitle();

            // Assert
            $this->assertEquals($title, $result);
        }

        function testGetDescription()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getDescription();

            // Assert
            $this->assertEquals($description, $result);
        }

        function testGetGenre()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getGenre();

            // Assert
            $this->assertEquals($genre, $result);
        }

        function testGetResources()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getResources();

            // Assert
            $this->assertEquals($resources, $result);
        }

        function testGetLyrics()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getLyrics();

            // Assert
            $this->assertEquals($lyrics, $result);
        }

        function testGetType()
        {
            // Arrange
            $id = null;
            $title = "Dream Song";
            $description = "Song about dreams";
            $genre = "Drone";
            $resources = "http://fakeembedcode.com";
            $lyrics = "";
            $type = "Lyrics";
            $test_project = new Project($id, $title, $description, $genre, $resources, $lyrics, $type);

            // Act
            $result = $test_project->getType();

            // Assert
            $this->assertEquals($type, $result);
        }
    }
?>
