<?php 


namespace App\Classes;
use App\Classes\Task;
use App\Traits\HasAsigneeTrait;
use App\Interface\HasStartDateInterface;


class DeadLineTask extends Task implements HasStartDateInterface
{

    use HasAsigneeTrait;

    protected $startDate;
    protected $dueDate;

    public function __construct($title, $description, $startDate, $dueDate){
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
   
    }

    public function getDueDate(){
        return $this->dueDate;
    }


    public function getStartDate(){
        return $this->startDate;
    }
    public function getPriority(){
        return "Emtergency";

    }
     public function markAsComplete(){
        return $this->complete = true;

     }
}