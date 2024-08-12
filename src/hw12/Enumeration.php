<?php

namespace hw12;

enum Enumeration: string

{
    case DONE = "Done";
    case UNDONE = "Undone";

    public  function values(): string
    {
        $cases = self;
        foreach ($cases as $case) {
            $values = $case->value;
        }

        return $values;
    }
}