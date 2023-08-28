<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController {
    public function index() {
        $users = UserModel::getAll();
        require_once('../app/views/user/index.php');
    }
}
