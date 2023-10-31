<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AddPage;
use App\Models\Category;
use App\Models\Product;

class ViewController extends Controller
{
    /**
     * Display the index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display a summary of pages.
     *
     * @return \Illuminate\View\View
     */
    public function pageSummary()
    {
        if (Auth::check()) {
            $data = AddPage::paginate(2);
            return view('pagesummary', compact('data'));
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Display the add page form.
     *
     * @return \Illuminate\View\View
     */
    public function addPage()
    {
        if (Auth::check()) {
            return view('pageadd');
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Display a summary of categories.
     *
     * @return \Illuminate\View\View
     */
    public function categorySummary()
    {
        if (Auth::check()) {
            $catdata = Category::paginate(2);
            return view('categorysummary', compact('catdata'));
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Display the add category form.
     *
     * @return \Illuminate\View\View
     */
    public function addCategory()
    {
        if (Auth::check()) {
            return view('categoryadd');
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Display a summary of products.
     *
     * @return \Illuminate\View\View
     */
    public function productSummary()
    {
        if (Auth::check()) {
            $products = Product::with('category')->paginate(2);
            return view('productsummary', compact('products'));
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Display the add product form.
     *
     * @return \Illuminate\View\View
     */
    public function productAdd()
    {
        if (Auth::check()) {
            $categories = Category::all();
            return view('productadd', compact('categories'));
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Display the change password form.
     *
     * @return \Illuminate\View\View
     */
    public function changePassword()
    {
        if (Auth::check()) {
            return view('changepassword');
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }
}
