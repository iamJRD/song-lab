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
        private $password;

        function __construct($id = null, $first_name, $last_name, $email, $username, $bio, $photo, $password)
        {
            $this->id = $id;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->username = $username;
            $this->bio = $bio;
            $this->photo = $photo;
            $this->password = $password;
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

        function setPassword($new_password)
        {
            $this->password = $new_password;
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

        function getPassword()
        {
            return $this->password;
        }


        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO users (first_name, last_name, email, username, bio, photo, password) VALUES (
                '{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getEmail()}', '{$this->getUsername()}', '{$this->getBio()}', '{$this->getPhoto()}', '{$this->getPassword()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();

        }

        static function getAll()
        {
            $returned_users = $GLOBALS['DB']->query("SELECT * FROM users;");

            $users = array();
            foreach($returned_users as $user) {
                $id = $user['id'];
                $first_name = $user['first_name'];
                $last_name = $user['last_name'];
                $email= $user['email'];
                $username= $user['username'];
                $bio= $user['bio'];
                $photo= $user['photo'];
                $password = $user['password'];
                $new_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
                array_push($users, $new_user);
            }
            return $users;

        }

        function verifyLogin($username, $password)
        {
            $query = $GLOBALS['DB']->query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
            $login_match = $query->fetchAll(PDO::FETCH_ASSOC);
            $found_match = null;

            foreach($login_match as $match){
                $id = $match['id'];
                $first_name = $match['first_name'];
                $last_name = $match['last_name'];
                $email= $match['email'];
                $username= $match['username'];
                $bio= $match['bio'];
                $photo= $match['photo'];
                $password = $match['password'];
                $found_match = User::find($id);
            }
            return $found_match;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM users;");
        }





    }
?>
