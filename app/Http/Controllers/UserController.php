<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = [
           'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3'
            
        ];
        UserModel::create($data);
        // coba akses model UserModel
    $user = UserModel::all(); //ambil semua data dari tabel m_user
    return view('user', ['data' => $user]);
    }
}