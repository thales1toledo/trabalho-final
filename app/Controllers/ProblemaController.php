<?php

namespace App\Controllers;

class ProblemaController extends BaseController
{
    public function index(): string
    {
        return view('registrar_problema');
    }

    public function inserir()
    {
        if ($this->request->getMethod() === 'post') {
            $model = new \App\Models\ProblemaModel();
            var_dump($model); die;
        }
    }
}
