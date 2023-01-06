<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\File;
use App\Models\Keyword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DatasetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("depositDataset", ["mode" => "create"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "title" => "required",
            "description" => "required",
            "categories" => "required",
            "keywords" => "required",
            "files" => "required|mimes:csv,txt,xlsx,xls,pdf,json|max:10024",
        ]);

        $keywords = explode(",", $request->keywords);
        $keyword_array = [];

        foreach ($keywords as $key => $value) {
            $find_keyword = Keywords::where("keyword", $value)->first();
            if ($find_keyword == null) {
                $new_key = new Keywords();
                $new_key->keyword = $value;
                $new_key->save();
                array_push($keyword_array, $new_key->id);
            } else {
                array_push($keyword_array, $find_keyword->id);
            }
        }

        $files = $request->files;
        $file_data_array = [];

        $dataset = new Datasets();
        $dataset->title = $request->title;
        $dataset->description = $request->description;
        $dataset->uuid = Str::uuid();
        $dataset->user_id = Auth::id();
        $dataset->save();
        $dataset->keywords()->attach($keyword_array);
        $dataset->categories()->attach([$request->categories]);

        foreach ($request->file() as $file) {
            $path = $file->store("uploads");
            $new_file = new Files();
            $new_file->filepath = $path;
            $new_file->filetype = $file->getMimeType();
            $new_file->save();
            array_push($file_data_array, $new_file->id);
        }
        $dataset->files()->attach($file_data_array);
        $dataset->save();
        print $dataset->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function show(Dataset $datasetsModel, $slug)
    {
        //
        $dataset = $datasetsModel::find($slug);
        $user = $dataset->user;
        $files = $dataset->files;

        return view("datasetview", [
            "dataset" => $dataset,
            "user" => $user,
            "files" => $files,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataset $datasetsModel)
    {
        return view("depositDataset", [
            "mode" => "edit",
            "dataset" => $dataset,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataset $datasetsModel)
    {
        //
        $validated = $request->validate([
            "title" => "required",
            "description" => "required",
            "categories" => "required",
            "keywords" => "required",
            "files" => "required|mimes:csv,txt,xlsx,xls,pdf,json|max:10024",
        ]);

        $keywords = explode(",", $request->keywords);

        foreach ($keywords as $key => $value) {
            $find_keyword = Keywords::where("keyword", $value)->first();
            if ($find_keyword == null) {
                $new_key = new Keywords();
                $new_key->keyword = $value;
                $new_key->save();
                array_push($keyword_array, $new_key->id);
            } else {
                array_push($keyword_array, $find_keyword->id);
            }

            $dataset->title = $request->title;
            $dataset->description = $request->description;
            $dataset->keywords()->attach($keyword_array);
            $dataset->categories()->attach([$request->categories]);
            $dataset->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataset $datasetsModel)
    {
        //
    }
}
