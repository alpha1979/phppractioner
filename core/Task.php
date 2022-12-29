<?php 

class Task 
{

    public $description;
    public $completed = false;

    // public function __construct($description)    
    // {
    //     $this->description = $description;
    // }

    // public function showTask()
    // {
    //     return [
    //         $this->description,
    //         $this->completed
    //     ];
    // }

    public function isCompleted()
    {
        $this->completed = true;
    }
    // public function getDescription()
    // {
    //     return $this->description;
    // }

    // public function getCompleted()
    // {
    //     return $this->completed;
    // }
}


// var_dump($tasks);
// $task->isCompleted();

// var_dump($task->showTask());

// require 'index.view.php';