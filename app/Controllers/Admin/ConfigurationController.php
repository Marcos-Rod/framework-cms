<?php

namespace App\Controllers\Admin;

use App\Controllers\AuthController;
use App\Controllers\Controller;
use App\Models\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
        $metas = [
            'title' => 'Admin',
            'description' => 'Administrador',
            'slug' => 'configuration',
            'file' => 'configuration/index',
        ];
        

        return $this->view('admin.assets.template', compact('metas'));
        
    }

    public function store(){
        $data = $_POST;
        
        $configuration = Configuration::first();
        $configuration->update($data);
        
        return $this->redirect("/" . FOLDER_ADMIN . "configuration");
    }

    
}
