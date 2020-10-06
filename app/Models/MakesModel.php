<?php namespace App\Models;

use CodeIgniter\Model;

class MakesModel extends Model
{
    protected $table      = 'makes';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['make_name'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}


?>
