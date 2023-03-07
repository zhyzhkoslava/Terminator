<?php


abstract class AbstractState
{
    protected $context;

    public function setContext(TeamLead $context)
    {
        $this->context = $context;
    }

    abstract public function handle0signal(): void;
    abstract public function handle1signal(): void;
}