<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Typkomponent;
use App\Models\Komponent;
use App\Models\Vyrobce;
use Config\PaginationConfig;

class Main extends BaseController
{
    var $typKomponent;
    var $komponent;
    var $vyrobce;
    var $config;

    public function __construct(){
        $this->typKomponent = new typkomponent();
        $this->komponent = new komponent();
        $this->vyrobce = new vyrobce();
        $this->config = new PaginationConfig();
    }

    public function getTypyKomponent(){
        $data['typy'] = $this->typKomponent->findAll();
        //var_dump($data['typy']);
        echo view('TypyKomponent', $data);
    }
    public function getKomponenty($typKomponent_url){
       $pagination = $this->config->pagination;

       $idtypykomponent = $this->typKomponent->where('url', $typKomponent_url)->findAll()[0]->idKomponent;

        $data['komponenty'] = $this->komponent->where('typKomponent_id',$idtypykomponent)->paginate($pagination);
        $data ['pager'] = $this->komponent->pager;
        //var_dump($data['komponenty']);
        echo view('VypisKomponent', $data);
    }
    public function getInfo($idkomponent){
        $data['info'] = $this->komponent->join('vyrobce','vyrobce.idVyrobce=komponent.vyrobce_id', 'inner')->find($idkomponent);
        //var_dump($data['info']);
        echo view('InfoKomponenty', $data);
    }

    public function addCategory(){
        return view('PridejKategorii');
    }
    public function createCategory(){
        $categoryName = $this->request->getPost('category_name');
    
        $data = [
            'idKomponent' => '',
            'typKomponent' => $categoryName,
            'url' => ''
        ];
        
        $this->Category->save($data);
        return redirect()->route('/');
    }
}
