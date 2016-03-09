<?php
    class Message
    {
        private $id;
        private $message;

    function __construct($id = null, $message)
    {
        $this->id = $id;
        $this->message = $message;
    }

    function setMessage($new_message)
    {
        $this->message = $new_message;
    }

    function getId()
    {
        return $this->id;
    }

    function getMessage()
    {
        return $this->message;
    }

    function save()
    {
        $GLOBALS['DB']->exec("INSERT INTO messages (message) VALUES ('{$this->getMessage()}');");
        $this->id = $GLOBALS['DB']->lastInsertId();
    }

    static function getAll()
    {
        $returned_messages = $GLOBALS['DB']->query("SELECT * FROM messages");
        $messages = array();

        foreach($returned_messages as $message)
        {
            echo "hi";
            $id = $message['id'];
            $message = $message['message'];
            $new_message = new Message($id, $message);
            array_push($messages, $new_message);
        }
        return $messages;
    }

    static function deleteAll()
    {
        $GLOBALS['DB']->exec("DELETE FROM messages");
    }



    // function getMessages()
    // {
    //     $returned_users = $GLOBALS['DB']->query("SELECT users.* FROM users JOIN messages_users ON (messages_users.project_id = users.id) JOIN users ON (messages.id = messages_users.message_id) WHERE users.id = {$this->getId()};");
    //
    //     $users = array();
    //     foreach($returned_users as $user)
    //     {
    //         $id = $user['id'];
    //         $first_name = $user['first_name'];
    //         $last_name = $user['last_name'];
    //         $email = $user['email'];
    //         $username = $user['username'];
    //         $bio = $user['bio'];
    //         $photo = $user['photo'];
    //         $password = $user['password'];
    //         $new_user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
    //         array_push($users, $new_user);
    //     }
    //     return $users;
    // }

}
 ?>
