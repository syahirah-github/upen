<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['username','email','password','fullname','usertype','phone_num','no_ic'];
}