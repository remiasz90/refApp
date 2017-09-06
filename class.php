<?php

class Season 
{
    private $seasonId;
    private $seasonName;

    public function setSeasonId($newSeasonId)
    {
        $this->$seasonId = $newSeasonId; 
    }
    
    public function getSeasonId()
    {
        return $this->$seasonId; 
    }
}

class Team
{
    private $teamName;
    private $playersList;
}

class Players
{
    private $playerName;
    private $playerPhoneNumber;
    private $playerEmail;
}

?>

