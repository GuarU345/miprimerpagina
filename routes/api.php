<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\personaController;

route::post('insertpersona',[personaController::class,'insertarPersona']);
route::post('/actuapersona/{id}',[personaController::class,'actualizarPersona']);
route::post('/deletepersona/{id}',[personaController::class,'eliminarPersona']);
route::get('consulta',[personaController::class,'tabla']);

use App\Http\Controllers\puestoController;
route::post('insertpuesto',[puestoController::class,'insertarPuesto']);
route::post('actuapuesto/{id}',[puestoController::class,'actualizarPuesto']);
route::post('/deletepuesto/{id}',[puestoController::class,'eliminarPuesto']);
route::get('consultapuesto',[puestoController::class,'consulta1']);

use App\Http\Controllers\departamentoController;
use Illuminate\Support\Facades\Http;

route::post('insertdeparta',[departamentoController::class,'insertarDepartamento']);
route::post('actuadeparta/{id}',[departamentoController::class,'actualizarDepartamento']);
route::post('/deletedeparta/{id}',[departamentoController::class,'eliminarDepartamento']);
route::get('consultadeparta',[departamentoController::class,'consulta2']);

route::get('/getData',function(){
    $response = Http::get('https://jsonplaceholder.typicode.com/posts');
   
    $posts=json_decode($response->body());
    foreach($posts as $post){
           echo $post->title;
           die();
           
    }
    
});
route::post('register', 'App\Http\Controllers\UserController@register');
route::post('login', 'App\Http\Controllers\UserController@authenticate');
route::group(['middleware' => ['jwt.verify']], function() {
route::get('consultadeparta',[departamentoController::class,'consulta2']);
route::post('user','App\Http\Controllers\UserController@getAuthenticatedUser');


    
   
});
