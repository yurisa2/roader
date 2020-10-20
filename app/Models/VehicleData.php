<?php namespace App\Models;

use CodeIgniter\Model;

class VehicleData extends Model
{
    protected $table      = 'vehicleData';
    // protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    // protected $allowedFields = ['make_name'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

}


?>
