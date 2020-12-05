<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showUsers(UserDataTable $datTable)
    {
        return $datTable->render('admin.user.index');
    }
}
