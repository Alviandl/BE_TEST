<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AuthorModel extends Model
{
    protected $table = 'authors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'bio','birth_date'];
}
