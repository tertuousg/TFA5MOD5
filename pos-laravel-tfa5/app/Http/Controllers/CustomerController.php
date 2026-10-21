<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09170000001', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Jose Reyes', 'email' => 'jose@example.com', 'phone' => '09170000002', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Ana Cruz', 'email' => 'ana@example.com', 'phone' => '09170000003', 'status' => 'Inactive'],
            ['id' => 4, 'name' => 'Carlo Garcia', 'email' => 'carlo@example.com', 'phone' => '09170000004', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Lea Mendoza', 'email' => 'lea@example.com', 'phone' => '09170000005', 'status' => 'Active'],
        ];

        return view('customers', compact('customers'));
    }
}
