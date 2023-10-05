<?php 

namespace App\Classes;


use App\Traits\HasTagsTrait;
use App\Classes\DeadLineTask;
use App\Traits\HasAsigneeTrait;

class TaggedDeadLineTask extends DeadLineTask
{
    use HasTagsTrait,HasAsigneeTrait;
}