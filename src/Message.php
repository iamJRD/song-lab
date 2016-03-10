<?php
    class Message
    {
        private $id;
        private $message;
        private $sender;

    function __construct($id = null, $message, $sender)
    {
        $this->id = $id;
        $this->message = $message;
        $this->sender = $sender;
    }

    function setMessage($new_message)
    {
        $this->message = $new_message;
    }

    function setSender($new_sender)
    {
        $this->sender = $new_sender;
    }

    function getId()
    {
        return $this->id;
    }

    function getMessage()
    {
        return $this->message;
    }

    function getSender()
    {
        return $this->sender;
    }


    function save()
    {
        $GLOBALS['DB']->exec("INSERT INTO messages (message, sender) VALUES ('{$this->getMessage()}', '{$this->getSender()}');");
        $this->id = $GLOBALS['DB']->lastInsertId();
    }

    static function getAll()
    {
        $returned_messages = $GLOBALS['DB']->query("SELECT * FROM messages");
        $messages = array();

        foreach($returned_messages as $message)
        {
            $id = $message['id'];
            $user_message = $message['message'];
            $sender = $message['sender'];
            $new_message = new Message($id, $user_message, $sender);
            array_push($messages, $new_message);
        }
        return $messages;
    }

    static function deleteAll()
    {
        $GLOBALS['DB']->exec("DELETE FROM messages");
    }

    static function find($search_id)
    {
        $found_message = null;
        $returned_messages = Message::getAll();

        foreach($returned_messages as $message){
            $message_id = $message->getId();
            if ($message_id == $search_id)
            {
                $found_message = $message;
            }
        }
        return $found_message;
    }

    function delete()
    {
        $GLOBALS['DB']->exec("DELETE FROM messages WHERE id = {$this->getId()}");
    }


    function getMessageUser() {
        $returned_users= $GLOBALS['DB']->query("SELECT users.* FROM messages
            JOIN messages_user ON (messages_user.message_id = messages.id)
            JOIN users ON (users.id = messages_user.user_id)
            WHERE messages.id = {$this->getId()};");

        foreach($returned_users as $user)
        {
            $id = $user['id'];
            // $first_name = $user['first_name'];
            // $last_name = $user['last_name'];
            // $email= $user['email'];
            // $username= $user['username'];
            // $bio= $user['bio'];
            // $photo= $user['photo'];
            // $password = $user['password'];
            $found_user = User::find($id);

        }
        return $found_user;
    }

}
 ?>
