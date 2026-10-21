<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin One', 'email' => 'admin1@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Paolo Rivera', 'email' => 'paolo@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Nina Flores', 'email' => 'nina@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Rico Ramos', 'email' => 'rico@example.com', 'role' => 'Manager', 'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Ella Torres', 'email' => 'ella@example.com', 'role' => 'Staff', 'status' => 'Active'],
        ];

        return view('users', compact('users'));
    }
}
