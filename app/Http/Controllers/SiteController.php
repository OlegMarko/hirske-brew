<?php

namespace App\Http\Controllers;

use App\Product;
use App\Settings;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Return index page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('site.index');
    }

    /**
     * Return gallery page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery()
    {
        return view('site.gallery');
    }

    /**
     * Return contacts page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        return view('site.contacts');
    }

    /**
     * Return about page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $description = Settings::where('key', 'main_description')->first();
        $descriptionTitle = Settings::where('key', 'description_title')->first();

        return view('site.about', [
            'description' => $description ? $description->value : 'Про нас',
            'descriptionTitle' => $descriptionTitle ? $descriptionTitle->value : 'Броварня',
        ]);
    }

    /**
     * Return store page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        $products = $this->product->get();

        return view('site.store', ['products' => $products]);
    }

    /**
     * Return car tour page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function carTour()
    {
        return view('site.car-tour');
    }
}
