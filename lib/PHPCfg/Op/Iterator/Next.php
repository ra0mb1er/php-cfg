<?php

/*
 * This file is part of PHP-CFG, a Control flow graph implementation for PHP
 *
 * @copyright 2015 Anthony Ferrara. All rights reserved
 * @license MIT See LICENSE at the root of the project for more info
 */

namespace PHPCfg\Op\Iterator;

use PHPCfg\Op\Terminal;
use PhpCfg\Operand;

class Next extends Terminal {
    public $var;

    protected $writeVariables = ['var'];

    public function __construct(Operand $var, array $attributes = []) {
        parent::__construct($attributes);
        $this->var = $var;
    }

    public function getVariableNames() {
        return ["var"];
    }

    public function getSubBlocks() {
        return [];
    }
}
