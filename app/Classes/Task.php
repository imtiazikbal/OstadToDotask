<?php 

namespace App\Classes;

abstract class Task
{

    protected $title;
    protected $description;
    protected $complete;

    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
        $this->complete = false;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function isComplete(){
        return $this->complete ;
        
    }


    abstract public function getPriority();
    abstract public function markAsComplete();


}
