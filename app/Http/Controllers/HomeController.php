<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $description = Settings::where('key', 'main_description')->first();
        $descriptionTitle = Settings::where('key', 'description_title')->first();

        return view('home', [
            'description' => $description ? $description->value : null,
            'descriptionTitle' => $descriptionTitle ? $descriptionTitle->value : null,
        ]);
    }

    public function setDescription()
    {
        if ($description_title = request('description_title')) {
            Settings::updateOrCreate([
                'key' => 'description_title',
            ], [
                'value' => $description_title
            ]);
        }

        if ($description = request('description')) {
            Settings::updateOrCreate([
                'key' => 'main_description',
            ], [
                'value' => $description
            ]);
        }

        return back();
    }
}
