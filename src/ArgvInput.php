<?php

namespace Limestone;

use Symfony\Component\Console\Input\ArgvInput as Symfony_ArgvInput;

class ArgvInput extends Symfony_ArgvInput
{
    public function hasExclusiveOption(...$options)
    {
        $found_options = array_intersect(array_keys($this->options),
                                         $options);

        if (count($found_options) > 1)
        {
            throw new \Exception(
                'Multiple exclusive options found ('.implode($found_options, ', ').')');
        }

        if (count($found_options) == 1)
            return array_pop($found_options);
    }
}
