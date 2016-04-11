<?php namespace App\Tutorialedge\Transformers;

abstract class Transformer {
    
    public function transformCollection(array $objects)
    {
        return array_map([$this, 'transform'], $objects);
    }
    
    public abstract function transform($item);
    
}