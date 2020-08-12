<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientSalarieModel extends Model
{
    protected $table = 'client_salarie';
 
    protected $allowedFields = ['nom', 'prenom', 'adresse', 'telephone', 'email', 'profession', 
    'salaire_actuel', 'nom_entreprise', 'adresse_entreprise', 'identifiant_entreprise', 
    'numero_CNI'];
}
