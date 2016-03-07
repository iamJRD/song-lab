<?php
    class Project
    {
        private $id;
        private $title;
        private $description;
        private $genre;
        private $resources;
        private $lyrics
        private $type;

        function __construct($id = null, $title, $description, $genre, $resources, $lyrics, $type)
        {
            $this->id = $id;
            $this->title = $title;
            $this->decription = $description;
            $this->genre = $genre;
            $this->resources = $resources;
            $this->lyrics = $lyrics;
            $this->type = $type;
        }
    }
?>
