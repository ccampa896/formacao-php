<?php
abstract class Question {}
class Single extends Question {}
class Multiple extends Question {}

$input = 'multi';

$question = match ($input){
    'single' => new Single(),
    'multi' => new Multiple(),
    //default => throw new Exception( message: 'Invalid question type'),
};

/*
switch ($input){
    case 'single':
        $question = new Single();
        break;
    case 'multi':
        $question = new Multiple();
        break;
    default:
        throw new Exception( message: 'Invalid question type');
}
*/

var_dump($question);