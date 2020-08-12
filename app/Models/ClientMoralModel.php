<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientMoralModel extends Model
{
    protected $table = 'client_moral';
 
    protected $allowedFields = ['nom_entreprise', 'adresse', 'telephone', 'email', 
    'type_entreprise','raison_social', 'identifiant_entreprise', 'adresse_entreprise'];
}