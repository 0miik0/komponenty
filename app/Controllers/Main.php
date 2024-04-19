<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Typkomponent;
use App\Models\Komponent;
use App\Models\Vyrobce;

class Main extends BaseController
{
    var $typKomponent;
    var $komponent;
    var $vyrobce;

    public function __construct(){
        $this->typKomponent = new typkomponent();
        $this->komponent = new komponent();
        $this->vyrobce = new vyrobce();
    }

    public function getTypyKomponent(){
        $data['typy'] = $this->typKomponent->findAll();
        //var_dump($data['typy']);
        echo view('TypyKomponent', $data);
    }
    public function getKomponenty($idtypykomponent){
        $data['komponenty'] = $this->komponent->where('typKomponent_id',$idtypykomponent)->findAll();
        //var_dump($data['komponenty']);
        echo view('VypisKomponent', $data);
    }
    public function getInfo($idkomponent){
        $data['info'] = $this->komponent->where('id', $idkomponent)->findAll();
        //$data['vyrobce'] = $this->komponent->where('idVyrobce', $idvyrobce)->findAll();
        echo view('InfoKomponenty', $data);
    }
}