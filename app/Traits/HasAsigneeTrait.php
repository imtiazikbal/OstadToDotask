<?php 
namespace App\Traits;
trait HasAsigneeTrait {
        protected $assignees = [];
        public function addAsignee($asignee){
            $this->assignees[] = $asignee;
        }

        public function getAsignees(){
            return $this->assignees;
        }
}