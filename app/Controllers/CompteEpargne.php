<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CompteEpargneModel;

class CompteEpargne extends Controller
{
    public function index()
    {
        $model = new CompteEpargne();
        $data['CompteEpargne'] = $model->orderBy('id, ASC')->findAll();
        return ('CompteEpargne, $data');
    }
    public function create()
    {
        return view('create-compteepargne');
    }
    public function store()
    {
        helper(['form, url']);
        $model = new CompteEpargneModel();
        $data =
            [
                'numero_compte' => $this->request->getVar('numero_compte'),
                'cle_rib'  => $this->request->getVar('cle_rib'),
                'solde_compte'  => $this->request->getVar('solde_compte'),
                'numero_agence'  => $this->request->getVar('numero_agence'),
                'date_ouverture'  => $this->request->getVar('date_ouverture'),
                'frais_ouverture'  => $this->request->getVar('frais_ouverture'),
                'montant_remuneration' => $this->request->getVar('montant_remuneration'),
            ];
        $save = $model->insert($data);
        return redirect()->to(base_url('public/index.php/CompteEpargne/create'));
    }

    public function edit($id = null)
    {

        $model = new CompteEpargneModel();

        $data['CompteEpargne'] = $model->where('id', $id)->first();

        return view('public/index.php/edit-CompteEpargne', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new CompteEpargneModel();

        $id = $this->request->getVar('id');
        $data =
        [
            
            'numero_compte' => $this->request->getVar('numero_compte'),
            'cle_rib'  => $this->request->getVar('cle_rib'),
            'solde_compte'  => $this->request->getVar('solde_compte'),
            'numero_agence'  => $this->request->getVar('numero_agence'),
            'date_ouverture'  => $this->request->getVar('date_ouverture'),
            'frais_ouverture'  => $this->request->getVar('frais_ouverture'),
            'montant_remuneration' => $this->request->getVar('montant_remuneration'),
        ];

        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/CompteEpargne') );
    }
 
    public function delete($id = null)
    {
 
     $model = new CompteEpargneModel();
 
     $data['CompteEpargne'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/CompteEpargne') );
    }
}
  