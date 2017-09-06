<?php

class Season 
{
    private $seasonId;
    private $seasonName;

    public function setSeasonId($newSeasonId)
    {
        $this->$seasonId = $newSeasonId; 
    }
    
    public function setSeasonName($newSeasonName)
    {
        $this->$seasonName = $newSeasonName; 
    }
    
    public function getSeasonId()
    {
        return $this->$seasonId; 
    }
    
    public function getSeasonName()
    {
        return $this->$seasonName; 
    }
}

class Team
{
    private $teamId;
    private $teamName;
    
    public function setTeamId($newTeamId)
    {
        $this->$teamId = $newTeamId; 
    }
 
    public function setTeamName($newTeamName)
    {
        $this->$teamName = $newTeamName; 
    }
    
    public function getTeamId()
    {
        return $this->$teamId; 
    }
    
    public function getTeamName()
    {
        return $this->$teamName; 
    }
    
}

class Player
{
    private $playerName;
    private $playerPhoneNumber;
    private $playerEmail;
    private $playerGoals;
    private $playerAssists;
}

?>

