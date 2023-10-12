<?php

use App\Classes\DeadLineTask;
use App\Classes\TaggedDeadLineTask;

include 'autoload.php';


$task1 = new TaggedDeadLineTask('Tomorrow Our final Tournament', 'Test Description', '06-10-2023', '2020-01-02');
$task1->addTag('football');
$task1->addTag('finalMatch');
$task1->addAsignee("imtiaz");
$task1->addAsignee("ikbal");

$task2 = new DeadLineTask('Tomorrow Our final Tournament', 'Test Description', '06-10-2023', '2020-01-02');
$task2->addAsignee("Saddam");

$tasks= [$task1, $task2];


foreach($tasks as $task){
    echo "Title: " . $task->getTitle() . PHP_EOL;
    echo "Description: " . $task->getDescription() . PHP_EOL;
    echo "Due Date: " . $task->getDueDate() . PHP_EOL;
    echo "Start Date: " . $task->getStartDate() . PHP_EOL;

    if($task instanceof TaggedDeadLineTask){
        echo "Tags".implode(", ",$task->getTags()).PHP_EOL;
    }
    if($task instanceof DeadLineTask){
        echo "Asignee".implode(", ",$task->getAsignees()).PHP_EOL;
        echo "Priority: " . $task->getPriority() . PHP_EOL;
        echo "Complete: " . ($task->isComplete()?"Complted/Yes":"No") . PHP_EOL;
    }



    $task1->markAsComplete();
    echo "Task 1 Complted" . PHP_EOL;
    echo "Complete: " . ($task1->isComplete()?"Complted/Yes":"No") . PHP_EOL;
    
}


