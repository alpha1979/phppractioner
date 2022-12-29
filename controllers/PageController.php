<?php 

class PageController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('task');
        return view('index', [
            'tasks' => $tasks
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}