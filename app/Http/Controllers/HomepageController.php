<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataset;
use App\Models\Category;
use App\Models\Download;
class HomepageController extends Controller
{
    //
    public function index()
    {
        $dataset_count = Dataset::count();
        $category_count = Category::count();
        $download_count = Download::count();
        return view("welcome", [
            "dataset_count" => $dataset_count,
            "category_count" => $category_count,
            "download_count" => $download_count,
        ]);
    }
}
