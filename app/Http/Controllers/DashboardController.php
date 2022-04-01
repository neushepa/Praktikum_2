<?php
namespace App\Http\Controllers;

use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'hitung_article'=>Article::count(),
        ];
        return view('admin.dashboard', $data);
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
