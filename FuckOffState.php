<?php


class FuckOffState extends AbstractState
{

    public function handle0signal(): void
    {
        echo 'signal 0 received' . PHP_EOL;

    }

    public function handle1signal(): void
    {
        echo 'signal 1 received'  . PHP_EOL;
        $this->context->transitionTo(new BadState());
    }
}