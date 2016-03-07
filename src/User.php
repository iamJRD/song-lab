<?php
    class User
    {
        private $id;
        private $first_name;
        private $last_name;
        private $email;
        private $username;
        private $bio;
        private $photo;

        function __construct($id = null, $first_name, $last_name, $email, $username, $bio, $photo)
        {
            $this->id = $id;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->username = $username;
            $this->bio = $bio;
            $this->photo = $photo;
        }

        // Setters

        function setFirstName($new_first_name)
        {
            $this->first_name = (string) $new_first_name;
        }

        function setLastName($new_last_name)
        {
            $this->last_name = (string) $new_last_name;
        }

        function setEmail($new_email)
        {
            $this->email = (string) $new_email;
        }

        function setUsername($new_username)
        {
            $this->username = (string) $new_username;
        }

        function setBio($new_bio)
        {
            $this->bio = (string) $new_bio;
        }

        function setPhoto($new_photo)
        {
            $this->photo = $new_photo;
        }

        // Getters

        function getId()
        {
            return $this->id;
        }

        function getFirstName()
        {
            return $this->first_name;
        }

        function getLastName()
        {
            return $this->last_name;
        }

        function getEmail()
        {
            return $this->email;
        }

        function getUsername()
        {
            return $this->username;
        }

        function getBio()
        {
            return $this->bio;
        }

        function getPhoto()
        {
            return $this->photo;
        }








        // function save()
        // {
        //     $GLOBALS['DB']->exec("INSERT INTO stores (name) VALUES ('{$this->getName()}');");
        //     $this->id = $GLOBALS['DB']->lastInsertId();
        // }



    }
?>
