<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\File;
use App\Models\Keyword;
use App\Models\Category;
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
        if (!Auth::check()) {
            return abort(403, "Please Login To Continue");
        }
        $categories = Category::get();
        $category_options = [];
        array_push($category_options, [
            "value" => 0,
            "valueText" => "Please select category",
        ]);
        foreach ($categories as $category) {
            array_push($category_options, [
                "value" => $category->id,
                "valueText" => $category->category,
            ]);
        }
        return view("depositDataset", [
            "mode" => "create",
            "categories" => $category_options,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return abort(403, "Forbidden");
        }
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
            $find_keyword = Keyword::where("keyword", $value)->first();
            if ($find_keyword == null) {
                $new_key = new Keyword();
                $new_key->keyword = trim($value);
                $new_key->save();
                array_push($keyword_array, $new_key->id);
            } else {
                array_push($keyword_array, $find_keyword->id);
            }
        }

        $files = $request->files;
        $file_data_array = [];

        $dataset = new Dataset();
        $dataset->title = $request->title;
        $dataset->description = $request->description;
        $dataset->uuid = Str::uuid();
        $dataset->user_id = Auth::id();
        $dataset->user_version = $request->version;
        $dataset->save();
        $dataset->keywords()->attach($keyword_array);
        $dataset->categories()->attach(explode(",", $request->categories));
        $dataset->save();

        foreach ($request->file() as $file) {
            $path = $file->store("uploads");
            $new_file = new File();
            $new_file->filepath = $path;
            $new_file->filetype = $file->getMimeType();
            $new_file->dataset_id = $dataset->id;
            $new_file->save();
            array_push($file_data_array, $new_file->id);
        }
        $dataset->files()->attach($file_data_array);
        $dataset->save();
        return redirect("/datasets/" . $dataset->uuid);
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
        $dataset = $datasetsModel::where("uuid", $slug)->first();

        if ($dataset == null) {
            return abort(404);
        }

        $user = $dataset->user;
        $files = $dataset->files;
        $categories = $dataset->categories;
        $keywords = $dataset->keywords;

        return view("datasetview", [
            "dataset" => $dataset,
            "user" => $user,
            "files" => $files,
            "categories" => $categories,
            "keywords" => $keywords,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataset $datasetsModel, $id)
    {
        if (!Auth::check()) {
            return abort(403, "Forbidden");
        }
        $dataset = Dataset::where("uuid", $id)
            ->latest()
            ->first();

        if ($dataset === null) {
            return abort(404);
        }

        $dataset_cagetoies = $dataset->categories;

        $categories = Category::get();
        $category_options = [];

        $keywords = $dataset->keywords;
        $files = $dataset->files;

        array_push($category_options, [
            "value" => 0,
            "valueText" => "Please select a category",
        ]);
        foreach ($categories as $category) {
            array_push($category_options, [
                "value" => $category->id,
                "valueText" => $category->category,
            ]);
        }

        $keyword_string = ",";
        foreach ($keywords as $keyword) {
            $keyword_string .= $keyword->keyword . ",";
        }

        $keyword_string = ltrim($keyword_string, ",");
        $keyword_string = rtrim($keyword_string, ",");
        $keyword_string = trim($keyword_string);

        return view("depositDataset", [
            "mode" => "patch",
            "categories" => $category_options,
            "dataset" => $dataset,
            "keywords" => $keyword_string,
            "files" => $files,
            "dataset_categories" => $dataset_cagetoies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataset $datasetsModel, $id)
    {
        //
        if (!Auth::check()) {
            return abort(403, "Please Login To Continue");
        }

        $dataset = $datasetsModel::find($id);

        $validated = $request->validate([
            "title" => "required",
            "description" => "required",
            "categories" => "required",
            "keywords" => "required",
            "files" => "required|mimes:csv,txt,xlsx,xls,pdf,json|max:10024",
        ]);

        $dataset_uuid = $dataset->uuid;
        $dataset_sysyem_version = $dataset->system_version;
        $dataset->delete();
        $keywords = explode(",", $request->keywords);
        $keyword_array = [];

        foreach ($keywords as $key => $value) {
            $find_keyword = Keyword::where("keyword", $value)->first();
            if ($find_keyword == null) {
                $new_key = new Keyword();
                $new_key->keyword = trim($value);
                $new_key->save();
                array_push($keyword_array, $new_key->id);
            } else {
                array_push($keyword_array, $find_keyword->id);
            }
        }

        $files = $request->files;
        $file_data_array = [];

        $dataset_new = new Dataset();
        $dataset_new->title = $request->title;
        $dataset_new->description = $request->description;
        $dataset_new->uuid = $dataset_uuid;
        $dataset_new->system_version = $dataset_sysyem_version + 1;
        $dataset_new->user_id = Auth::id();
        $dataset_new->user_version = $request->version;
        $dataset_new->save();
        $dataset_new->keywords()->attach($keyword_array);
        $dataset_new->categories()->attach(explode(",", $request->categories));
        $dataset_new->save();

        foreach ($request->file() as $file) {
            $path = $file->store("uploads");
            $new_file = new File();
            $new_file->filepath = $path;
            $new_file->filetype = $file->getMimeType();
            $new_file->dataset_id = $dataset->id;
            $new_file->save();
            array_push($file_data_array, $new_file->id);
        }

        $dataset_new->files()->attach($file_data_array);
        $dataset_new->save();
        return redirect("/datasets/" . $dataset_new->uuid);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataset  $datasetsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataset $datasetsModel, Request $request, $id)
    {
        // check if user is logged in
        if (!Auth::check()) {
            return abort(403, "Forbidden");
        }
        // Delete dataset from the system
        $dataset = $datasetsModel
            ->where("uuid", $id)
            ->latest()
            ->first();
        $dataset->delete();
        return redirect("/dashboard");
    }
}
