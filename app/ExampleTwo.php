<?php

namespace App;

class ExampleTwo
{
    protected $collaborator;

    protected $foo;

    public function __construct(Collaborator $collaborator, $foo)
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }


}
