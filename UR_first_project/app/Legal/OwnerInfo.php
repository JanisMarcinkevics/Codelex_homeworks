<?php

namespace app\legal;

class OwnerInfo
{

    private string $owner;

    public function __construct(string $owner)
    {

        $this->owner = $owner;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}