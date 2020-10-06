<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\MakesModel;


class Makes extends Controller
{
    public function index()
    {
      $dataModel = new MakesModel; // Carregando o Controller

      $data['tableData'] = $dataModel->findAll(); // Listando todos os registros
      // E colocando na Variavel (array) $tableData

      $data['title'] = "Make List";

      echo view('makes/list', $data);
    }

    public function create() {

      echo view('makes/create');
      // Este método só carrega UMA VIEW E MAIS NADA.
      // QUe fique claro que não se pode carregar uma view diretamente
    }

    public function create_make() {

      $dataModel = new MakesModel; // Carregando o Controller

      $formData = $this->request->getPost();

      // var_dump($formData);

      $dataModel->save($formData);

    }

}
