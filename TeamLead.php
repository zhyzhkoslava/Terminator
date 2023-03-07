<?php


class TeamLead
{
    private $state;
    public  $junior;

    public function __construct(AbstractState $state)
    {
        $this->setState($state);
    }

    public function setState(AbstractState $state)
    {
        echo 'Current Team Lead State is ' . get_class($state) . PHP_EOL;
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function input0signal(): void
    {
        $this->state->handle0signal();
    }

    public function input1signal(): void
    {
        $this->state->handle1signal();
    }

    public function getJuniorWork()
    {
        return $this->junior->signal;
    }

    public function getTeamLeadState()
    {
        return $this->state;
    }

    public function checkJuniorWork()
    {
        $this->getJuniorWork() === 1 ? $this->input1signal() : $this->input0signal();
    }
}