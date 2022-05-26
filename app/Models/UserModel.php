<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $returnType = 'object';
  
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];
  
    protected $allowedFields = ['id', 'username', 'password', 'mail', 'account_created', 'last_login', 'online', 'pincode', 'last_online' ,'motto' ,'look' ,'gender' ,'rank', 'credits', 'points', 'auth_ticket', 'ip_register', 'ip_current', 'machine_id', 'secret_code', 'account_down'];
  
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
            unset($data['data']['password_confirmation']);
        } else {
            echo 'No password got submitted, \n I can not process the data.';
            $data = false;
            exit;
        }
        
        return $data;
    }

    public function getUserDataById(int $userId) {
        return $this->userModel()->select('id, username, look')->where('id', $userId)->first();
    }

}

