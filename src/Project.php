<?php
    class Project
    {
        private $id;
        private $title;
        private $description;
        private $genre;
        private $resources;
        private $lyrics;
        private $type;

        function __construct($id = null, $title, $description, $genre, $resources, $lyrics, $type)
        {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->genre = $genre;
            $this->resources = $resources;
            $this->lyrics = $lyrics;
            $this->type = $type;
        }
// SETTERS
        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function setDescription($new_description)
        {
            $this->description = $new_description;
        }

        function setGenre($new_genre)
        {
            $this->genre = $new_genre;
        }

        function setResources($new_resources)
        {
            $this->resources = $new_resources;
        }

        function setLyrics($new_lyrics)
        {
            $this->lyrics = $new_lyrics;
        }

        function setType($new_type)
        {
            $this->type = $new_type;
        }
// GETTERS
        function getId()
        {
            return $this->id;
        }

        function getTitle()
        {
            return $this->title;
        }

        function getDescription()
        {
            return $this->description;
        }

        function getGenre()
        {
            return $this->genre;
        }

        function getResources()
        {
            return $this->resources;
        }

        function getLyrics()
        {
            return $this->lyrics;
        }

        function getType()
        {
            return $this->type;
        }
    }
?>
