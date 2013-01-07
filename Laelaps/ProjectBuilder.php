<?php

namespace Laelaps;

use BadMethodCallException;

/**
 * @author Mateusz Charytoniuk <mateusz.charytoniuk@gmail.com>
 */
class ProjectBuilder
{
    /**
     * @param string $name
     * @param array $arguments
     * @return void
     * @throws BadMethodCallException
     */
    public static function __callStatic($name, array $arguments)
    {
        throw new BadMethodCallException(sprintf('Method %s does not exist in %s', $name, __CLASS__));
    }
}
