<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
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
        return view("organizationView", ["mode" => "create"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "orgName" => "required",
            "address" => "required",
            "email" => "required",
            "phoneNumber" => "required",
        ]);

        $organization = new Organization();
        $organization->name = $request->orgName;
        $organization->address = $request->address;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->zip = $request->zip;
        $organization->email = $request->email;
        $organization->phoneNumber = $request->phoneNumber;
        $organization->save();
        print $organization->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        echo $organization->id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
        return view("organizationView", [
            "organization" => $organization,
            "mode" => "edit",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organizations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        //
        $validated = $request->validate([
            "orgName" => "required",
            "address" => "required",
            "email" => "required",
            "phoneNumber" => "required",
        ]);

        $organization->name = $request->orgName;
        $organization->address = $request->address;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->zip = $request->zip;
        $organization->email = $request->email;
        $organization->phoneNumber = $request->phoneNumber;
        $organization->save();
        print $organization->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizations  $organizations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizations $organizations)
    {
        //
    }
}
