<?php


class BadState extends AbstractState
{

    public function handle0signal(): void
    {
        echo 'signal 0 received'  . PHP_EOL;
        $this->context->setState(new FuckOffState());
    }

    public function handle1signal(): void
    {
        echo 'signal 1 received'  . PHP_EOL;
        $this->context->setState(new NormalState());
    }
}