<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\MakesModel;
use App\Models\VehicleData;


class Makes extends BaseController
{
    public function index()
    {
      $dataModel = new MakesModel; // Carregando o Controller

      $data['tableData'] = $dataModel->findAll(); // Listando todos os registros
      // E colocando na Variavel (array) $tableData

      $data['title'] = "Make List";

      $data['html_menu'] = $this->html;


      echo view('makes/list', $data);
    }

    public function create() {
      $data['html_menu'] = $this->html;

      echo view('makes/create', $data);
      // Este método só carrega UMA VIEW E MAIS NADA.
      // QUe fique claro que não se pode carregar uma view diretamente
    }

    public function create_make() {

      $dataModel = new MakesModel; // Carregando o Controller

      $formData = $this->request->getPost();

      // var_dump($formData);

      $dataModel->save($formData);

    }


    public function getRandomMake() {

      $dataModel = new VehicleData; // Carregando o Controller

      $allData = $dataModel->findAll();

      $singleRandData = $allData[rand(0,count($allData)-1)];

      // echo '<pre>';
      // var_dump($singleRandData);

      return $singleRandData;
    }

    public function saveRandomMake() {
      $dataModel = new MakesModel; // Carregando o Controller

      //Essa parte LE O BANCO
      $start_read = microtime(true);
      $make = $this->getRandomMake();
      $finish_read = microtime(true);

      $data['make_name'] = $make['Make'] . microtime(true);


      $start_write = microtime(true);
      $dataModel->save($data); // Essa linha ESCREVE NO BANCO
      $finish_write = microtime(true);

      $crono_read = $finish_read - $start_read;
      $crono_write = $finish_write - $start_write;

      // echo '<pre>';
      // var_dump($crono_read);
      // var_dump($crono_write);

      return array('read' => $crono_read,
                    'write' => $crono_write);

    }

    public function writeMakeBatch($it = 1) {
      $array_crono_read = array();
      $array_crono_write = array();

      for ($i=0; $i < $it; $i++) {
        $crono = $this->saveRandomMake();

        $array_crono_read[] = $crono['read'];
        $array_crono_write[] = $crono['write'];

      }
      echo '<pre>';
      // var_dump($array_crono_read); //DEBUG
      // var_dump($array_crono_write);//DEBUG

      echo 'max read time: '. max($array_crono_read);
      echo '<br>';
      echo 'total read time: '. array_sum($array_crono_read);
      echo '<br>';
      echo 'avg read time: '. array_sum($array_crono_read)/$it;
      echo '<br>';

      echo 'max write time: '. max($array_crono_write);
      echo '<br>';
      echo 'total write time: '. array_sum($array_crono_write);
      echo '<br>';
      echo 'avg write time: '. array_sum($array_crono_write)/$it;
      echo '<br>';

    }

}
