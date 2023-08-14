<?php

namespace App\Controllers;
use App\Models\SiswaModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

    private $siswaModel;

    public function __construct(){
        $this->siswaModel = new SiswaModel(); 
    }
    
    public function index()
    {
        $siswa = $this->siswaModel->findAll();
        return $this->respond($siswa, 200);
    }
}
