<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientSalarieModel;

class ClientSalarie extends Controller
{
    public function index()
    {
        $model = new ClientSalarie();
        $data['ClientSalarie'] = $model->orderBy('id, ASC')->findAll();
        return ('ClientSalarie, $data');
    }
    public function create()
    {
        return view('create-clientsalarie');
    }
    public function store()
    {
        helper(['form, url']);
        $model = new ClientSalarieModel();
        $data =
            [
                'nom' => $this->request->getVar('nom'),
                'prenom'  => $this->request->getVar('prenom'),
                'adresse'  => $this->request->getVar('adresse'),
                'telephone'  => $this->request->getVar('telephone'),
                'email'  => $this->request->getVar('email'),
                'profession'  => $this->request->getVar('profession'),
                'salaire_actuel'  => $this->request->getVar('salaire_actuel'),
                'nom_entreprise'  => $this->request->getVar('nom_entreprise'),
                'adresse_entreprise'  => $this->request->getVar('adresse_entreprise'),
                'identifiant_entreprise'  => $this->request->getVar('identifiant_entreprise'),
                'numero_CNI'  => $this->request->getVar('numero_CNI'),
            ];
        $save = $model->insert($data);
        return redirect()->to(base_url('public/index.php/ClientSalarie/create'));
    }

    public function edit($id = null)
    {

        $model = new ClientSalarieModel();

        $data['ClientSalarie'] = $model->where('id', $id)->first();

        return view('public/index.php/edit-ClientSalarie', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new ClientSalarieModel();

        $id = $this->request->getVar('id');
        $data =
        [
            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'adresse'  => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'profession'  => $this->request->getVar('profession'),
            'salaire_actuel'  => $this->request->getVar('salaire_actuel'),
            'nom_entreprise'  => $this->request->getVar('nom_entreprise'),
            'adresse_entreprise'  => $this->request->getVar('adresse_entreprise'),
            'identifiant_entreprise'  => $this->request->getVar('identifiant_entreprise'),
            'numero_CNI'  => $this->request->getVar('numero_CNI'),
        ];

        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/ClientSalarie') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ClientSalarieModel();
 
     $data['ClientSalarie'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/ClientSalarie') );
    }
}
  