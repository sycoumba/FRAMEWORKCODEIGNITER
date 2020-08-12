<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ClientMoralModel;
 
class ClientMoral extends Controller
{
 
    public function index()
    {    
        $model = new ClientMoral();
 
        $data['ClientMoral'] = $model->orderBy('id', 'ASC')->findAll();
        
        return view('create-clientmoral', $data);
    }    
 
    public function create()
    {       //echo 'yes';
           // die;
        return view('create-clientmoral');
    }
 
    public function store()
    {  //var_dump($_POST);
       // die;
       
       helper(['form', 'url']);
         
        $model = new ClientMoralModel();
 
        $data = [
 
            'nom_entreprise' => $this->request->getVar('nom_entreprise'),
            'adresse'  => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'type_entreprise'  => $this->request->getVar('type_entreprise'),
            'raison_social'  => $this->request->getVar('raison_social'),
            'identifiant_entreprise'  => $this->request->getVar('identifiant_entreprise'),
            'adresse_entreprise'  => $this->request->getVar('adresse_entreprise'),
            ];
         
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/ClientMoral/create') );
    }
 
    public function edit($id = null)
    {
      
     $model = new ClientMoralModel();
 
     $data['ClientMoral'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-ClientMoral', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientMoralModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
          
            'nom_entreprise' => $this->request->getVar('nom_entreprise'),
            'adresse'  => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'type_entreprise'  => $this->request->getVar('type_entreprise'),
            'raison_social'  => $this->request->getVar('raison_social'),
            'identifiant_entreprise'  => $this->request->getVar('identifiant_entreprise'),
            'adresse_entreprise'  => $this->request->getVar('adresse_entreprise'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/users') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ClientMoralModel();
 
     $data['ClientMoral'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/ClientMoral') );
    }
}