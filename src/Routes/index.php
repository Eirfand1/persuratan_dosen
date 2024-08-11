<?php

use App\Controllers\HomeController;
// use App\Controllers\MahasiswaController;
use App\Controllers\MatkulController;
use App\Controllers\NilaiController;
use App\Controllers\LoginController;
use App\Controller\AdminController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/admin', HomeController::class,'AdminIndex');
$router->get('/admin/mtklh', MatkulController::class,'index');
$router->get('/admin/editmatkul/{id}', MatkulController::class,'edit');
$router->get('/admin/deletematkul/{id}', MatkulController::class,'delete');
$router->get('/admin/addmatkul', MatkulController::class,'addView');
$router->post('/admin/addmatkul', MatkulController::class,'add');
$router->get('/dosen', HomeController::class,'DosenIndex');
$router->get('/dosen/nilai',NilaiController::class,'index');
$router->get('/dosen/tambahnilai', NilaiController::class,'addView');
$router->post('/dosen/tambahnilai', NilaiController::class,'add');
$router->get('/login', LoginController::class,'index');
$router->post('/login', LoginController::class,'act');

$router->dispatch();