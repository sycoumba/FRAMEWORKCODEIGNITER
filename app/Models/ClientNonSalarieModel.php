<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientNonSalarieModel extends Model
{
    protected $table = 'client_non_salarie';
 
    protected $allowedFields = ['nom', 'prenom', 'telephone', 'adresse', 'telephone', 'email', 
    'activite','numero_CNI'];
}
