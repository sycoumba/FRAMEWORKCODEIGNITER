<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteEpargneModel extends Model
{
    protected $table = 'compte_epargne';
 
    protected $allowedFields = ['numero_compte', 'cle_rib', 'solde_compte', 'numero_agence', 
    'date_ouverture', 'frais_ouverture', 'montant_remuneration'];
}
