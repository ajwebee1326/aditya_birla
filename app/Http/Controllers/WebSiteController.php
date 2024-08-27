<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class WebSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       //?utm_source={{source}}&utm_medium={{medium}}&utm_campaign={{Camapign Name}}&utm_content={{content}}

        $utm_source = $request->query('utm_source') ?? 'organic';
        $utm_medium = $request->query('utm_medium') ?? 'none';
        $utm_campaign = $request->query('utm_campaign') ?? 'none';
        $utm_content = $request->query('utm_content') ?? 'none';
        $utm_link = URL::full();
        return view('frontend.index', compact('utm_source', 'utm_medium', 'utm_campaign', 'utm_link', 'utm_content'));
    }

    public function viewAboutUs()
    {
        return view('frontend.about');
    }

    public function viewInitiatives()
    {
        return view('frontend.initiatives');
    }

    public function viewGreenInitiatives()
    {
        return view('frontend.green-initatives');
    }

    public function viewContactUs()
    {
        return view('frontend.contact');
    }

  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
