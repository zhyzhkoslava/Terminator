<?php

// TODO
class Manager
{
    public $countGoodWork;
    public $teamLead;

    public function __construct($teamLead)
    {
        $this->teamLead = $teamLead;
    }

    public function getGoodWork($countGoodWork)
    {
        return $countGoodWork;
    }
}