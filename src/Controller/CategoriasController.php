<?php

namespace App\Controller;

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Description of CategoriasController
 *
 * @author PCC-DOMINGO
 */
class CategoriasController extends AuthController {
     public $paginate = [
        'maxLimit' => 5
    ];
     
     public function initialize() {
        parent::initialize();
        $this->loadModel('Categorias'); // Importante cargar los demás Tables
        $this->loadComponent('Paginator');
    }
    
    public function index() {
        // Obtener información del modelo
        $categorias_sin_paginacion = $this->Categorias->find('all')->contain(['Categorias']);
        $categorias = $this->paginate($categorias_sin_paginacion);
        $this->set('productos', $categorias);
    }
}
