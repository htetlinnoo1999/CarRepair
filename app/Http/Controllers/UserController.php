<?php

namespace App\Http\Controllers;

use App\DataTables\BookingDataTable;
use App\DataTables\UserDataTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    //
    public function showUsers(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.user.index');
    }

    public function showBookings(BookingDataTable $dataTable)
    {
        return $dataTable->render('admin.booking');
    }
}
