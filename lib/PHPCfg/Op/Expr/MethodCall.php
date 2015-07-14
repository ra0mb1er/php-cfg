<?php

/*
 * This file is part of PHP-CFG, a Control flow graph implementation for PHP
 *
 * @copyright 2015 Anthony Ferrara. All rights reserved
 * @license MIT See LICENSE at the root of the project for more info
 */

namespace PHPCfg\Op\Expr;

use PHPCfg\Op\Expr;
use PhpCfg\Operand;

class MethodCall extends Expr {

    public $var;
    public $name;
    public $args;

    public function __construct(Operand $var, Operand $name, array $args, array $attributes = []) {
        parent::__construct($attributes);
        $this->var = $var;
        $this->name = $name;
        $this->args = $args;
    }

    public function getVariableNames() {
        return ["var", "name", "args", "result"];
    }
}
