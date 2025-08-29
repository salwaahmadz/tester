<?php

class solution
{
    function isValid($s)
    {
        $stack = [];
        $map = [
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];
        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];
            if (in_array($c, $map)) {
                if (empty($stack) || array_pop($stack) != $map[$c]) {
                    return false;
                }
            } else {
                array_push($stack, $c);
            }
        }
        return empty($stack);
    }
}

$solution = new solution();
var_dump($solution->isValid("()"));
var_dump($solution->isValid("()[]{}"));
var_dump($solution->isValid("(]"));
var_dump($solution->isValid("([])"));
var_dump($solution->isValid("([)]"));
var_dump($solution->isValid("{[]}"));
var_dump($solution->isValid(""));

var_dump($solution->isValid("((("));
var_dump($solution->isValid(")))"));
var_dump($solution->isValid("([{}])"));
