<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        return view('admin/dashboard', [
            'title' => 'Admin Dashboard | Riverview College',
            'active' => 'dashboard',
        ]);
    }
}
