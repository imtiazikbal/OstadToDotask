<?php 

namespace App\Traits;

trait HasTagsTrait{


    protected $tags = [];
    
    public function addTag($tag){
        $this->tags[] = $tag;
    }
    public function getTags(){
        return $this->tags;
    }
    
}