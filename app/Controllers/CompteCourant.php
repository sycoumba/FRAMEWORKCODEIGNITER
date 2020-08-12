<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CompteCourantModel;

class CompteCourant extends Controller
{
    public function index()
    {
        $model = new CompteCourant();
        $data['CompteCourant'] = $model->orderBy('id, ASC')->findAll();
        return ('CompteCourant, $data');
    }
    public function create()
    {
        return view('create-comptecourant');
    }
    public function store()
    {
        helper(['form, url']);
        $model = new CompteCourantModel();
        $data =
            [
                'numero_compte' => $this->request->getVar('numero_compte'),
                'cle_rib'  => $this->request->getVar('cle_rib'),
                'solde_compte'  => $this->request->getVar('solde_compte'),
                'numero_agence'  => $this->request->getVar('numero_agence'),
                'date_ouverture'  => $this->request->getVar('date_ouverture'),
                'agios'  => $this->request->getVar('agios'),
            ];
        $save = $model->insert($data);
        return redirect()->to(base_url('public/index.php/CompteCourant/create'));
    }

    public function edit($id = null)
    {

        $model = new CompteCourantModel();

        $data['CompteCourant'] = $model->where('id', $id)->first();

        return view('public/index.php/edit-CompteCourant', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new CompteCourantModel();

        $id = $this->request->getVar('id');
        $data =
        [
            
            'numero_compte' => $this->request->getVar('numero_compte'),
            'cle_rib'  => $this->request->getVar('cle_rib'),
            'solde_compte'  => $this->request->getVar('solde_compte'),
            'numero_agence'  => $this->request->getVar('numero_agence'),
            'date_ouverture'  => $this->request->getVar('date_ouverture'),
            'agios'  => $this->request->getVar('agios'),
        ];

        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/CompteCourant') );
    }
 
    public function delete($id = null)
    {
 
     $model = new CompteCourantModel();
 
     $data['CompteCourant'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/CompteCourant') );
    }
}
  