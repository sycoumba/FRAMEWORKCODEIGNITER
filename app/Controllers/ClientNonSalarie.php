<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ClientNonSalarieModel;
 
class ClientNonSalarie extends Controller
{
 
    public function index()
    {    
        $model = new ClientNonSalarie();
 
        $data['ClientNonSalarie'] = $model->orderBy('id', 'ASC')->findAll();
        
        return view('ClientNonSalarie', $data);
    }    
 
    public function create()
    {       //echo 'yes';
           // die;
        return view('create-clientnonsalarie');
    }
 
    public function store()
    {  //var_dump($_POST);
       // die;
       
       helper(['form', 'url']);
         
        $model = new ClientNonSalarieModel();
 
        $data = [
 
            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'adresse'  => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'activite'  => $this->request->getVar('activite'),
            'numero_CNI'  => $this->request->getVar('numero_CNI'),
            ];
         
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/ClientNonSalarie/create') );
    }
 
    public function edit($id = null)
    {
      
     $model = new ClientNonSalarieModel();
 
     $data['ClientNonSalarie'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-ClientNonSalarie', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientNonSalarieModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'adresse'  => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'activite'  => $this->request->getVar('activite'),
            'numero_CNI'  => $this->request->getVar('numero_CNI'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/ClientNonSalarie') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ClientNonSalarieModel();
 
     $data['ClientNonSalarie'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/ClientNonSalarie') );
    }
}