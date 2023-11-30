<?php

namespace App\Controllers;

use App\Core\Controller;

class Kos extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Kos();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('kos/index', $data);
     }

     public function input()
     {
          $this->dashboard('kos/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/kos');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('kos/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/kos');
     }
}
