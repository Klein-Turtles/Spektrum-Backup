<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use App\Models\Category_Service;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        // Method 1: Menggunakan Left Join untuk mendapatkan data sekaligus
        $services = DB::table('services')
            ->leftJoin('categories', 'services.category_id', '=', 'categories.id')
            ->select('services.*', 'categories.nama as category_name')
            ->paginate(12);

        // Method 2: Get categories dengan manual count
        $categories = DB::table('categories')
            ->leftJoin('services', 'categories.id', '=', 'services.category_id')
            ->select('categories.*', DB::raw('COUNT(services.id) as services_count'))
            ->groupBy('categories.id', 'categories.nama', 'categories.created_at', 'categories.updated_at')
            ->get();

        return view('services.index', compact('services', 'categories'));
    }

    public function show($id)
    {
        // Method dengan Raw SQL untuk lebih kontrol
        $service = DB::table('services')
            ->leftJoin('categories', 'services.category_id', '=', 'categories.id')
            ->select('services.*', 'categories.nama as category_name')
            ->where('services.id', $id)
            ->first();

        if (!$service) {
            abort(404);
        }

        $relatedServices = DB::table('services')
            ->where('category_id', $service->category_id)
            ->where('id', '!=', $service->id)
            ->limit(4)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }
}