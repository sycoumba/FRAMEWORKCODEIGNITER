<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteCourantModel extends Model
{
    protected $table = 'compte_courant';
 
    protected $allowedFields = ['numero_compte', 'cle_rib', 'solde_compte', 'numero_agence', 
    'date_ouverture', 'agios'];
}
