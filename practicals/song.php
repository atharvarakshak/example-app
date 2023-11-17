<?php

namespace Practicals;

class Song
{
    // Properties
    private $title;
    private $artist;
    private $duration;

    // Constructor
    public function __construct($title, $artist, $duration)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->duration = $duration;
    }

    // Getter methods
    public function getTitle()
    {
        return $this->title;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    // Setter methods
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    // Other methods (you can add more as needed)
    public function displayInfo()
    {
        echo "Title: {$this->getTitle()}, Artist: {$this->getArtist()}, Duration: {$this->getDuration()} minutes";
    }
}
