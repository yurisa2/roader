<?php


namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model
{
    protected $table      = 'vehicle';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['vehicleName',
                              	'registration',
                              	'make',
                              	'model',
                              	'kmInitial',
                              	'dateAdded' ];


    public function createVehicle($vehicleData) {

      $this->insert($vehicleData);

    }
}
?>
