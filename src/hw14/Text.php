<?php

namespace hw14;

use AllowDynamicProperties;

#[AllowDynamicProperties] class Text extends ParentText
{

    public function print(): void
    {
        $this->text = strtoupper ($this->getText());
        echo $this->text . PHP_EOL;
    }
}