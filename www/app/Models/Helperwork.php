<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Helperwork extends Model
    {
       protected $table = 'helper_work';
       protected $primaryKey = 'hewo_srno';

       protected $allowedFields = ['funeral_recep_srno', 'part_code'];
    }
?>