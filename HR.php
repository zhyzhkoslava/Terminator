<?php

// TODO
class HR
{
    public $countBadWork;
    public $teamLead;

    public function __construct($teamLead)
    {
        $this->teamLead = $teamLead;
    }

    public function getBadWork($countBadWork)
    {
        return $countBadWork;
    }
}