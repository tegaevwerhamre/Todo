<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;

Route::model('tasks','Task');
Route::get('/','TasksController@home');
Route::get('/about','TasksController@about');
Route::get('/contact','TasksController@contact');
Route::get('/create','TasksController@create');
Route::get('/delete','TasksController@delete');
Route::post('/create', 'TasksController@saveCreate');
Route::get('/edit/{task}','TasksController@edit');
Route::post('/edit', 'TasksController@doEdit');
Route::get('/delete/{task}','TasksController@delete');
Route::post('/delete', 'TasksController@doDelete');
Route::get('task/{id}', 'TasksController@show')->where('id', '\d+');


Route::get('contact', function()
{
    return View::make('contact');
});

Route::post('contact', function()
{
$data = Input::all();
$rules = array(
    'subject' => 'required',
    'message' => 'required'
);
$validator = Validator::make($data, $rules);
if($validator->fails()) {
    return Redirect::to('contact')->withErrors($validator)->withInput();
}

$emailcontent = array (
    'subject' => $data['subject'],
    'emailmessage' => $data['message']
    );
    Mail::send('emails.contactemail', $emailcontent, function($message)
    {
    $message->to('5627df95a2-20fb69@inbox.mailtrap.io','Learning Laravel Support')
    ->subject('Contact via Our Contact Form');
    });
    return 'Your message has been sent';
});


