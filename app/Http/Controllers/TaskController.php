<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\YourRequest;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\Task;


class TasksController extends BaseController
{
    public function home()
    {
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }
    public function about()
    {
    return view('about');
    }
    public function contact()
    {
    return view('contact');
    }
    public function create()
    {
    return view('create');
    }
    public function edit(Task $task)
    {
    return view('edit', compact('task'));
    }
    public function delete(Task $task)
    {
    return view('delete', compact('task'));
    }


    public function saveCreate()
    {
    $data = Input::all();
    $rules = array(
    'title'=> 'required',
    'body'=> 'required'
    );
    $validator = Validator::make($data, $rules);
    if ($validator->passes()) {
    $task = new Task;
    $task->title = Input::get('title');
    $task->body = Input::get('body');
    $task->save();
    return \Redirect::action('TasksController@home');
    }
    return \Redirect::action('TasksController@create');
    }

    public function doEdit()
    {
    $task = Task::findOrFail(Input::get('id'));
    $task->title = Input::get('title');
    $task->body = Input::get('body');
    $task->done = Input::get('done');
    $task->save();
    return \Redirect::action('TasksController@home');
    }

    public function doDelete()
    {
    $task = Task::findOrFail(Input::get('id'));
    $task->delete();
    return \Redirect::action('TasksController@home');
    }

    public function show($id)
    {
    $task = Task::find($id);
    return view('task', compact('task'));
    }

}      

