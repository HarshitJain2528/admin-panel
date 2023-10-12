<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddPage;
use App\Models\Category;
use App\Models\Product;
class CrudController extends Controller
{
    public function insert_page(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|string',
            'content'=>'required|string',
        ]);
        $add=new AddPage;
        $id = $request->get('id');
        if ($id){
            $findrec = AddPage::find($id);
            if ($findrec) {
                if ($request->isMethod('post')) {
                    $findrec->name= $request->get('name');
                    $findrec->content = $request->get('content');
                    $findrec->status = $request->has('status') ? 1 : 0;
                    $findrec->save();
                }
            }
        }
        else{
            if($request->isMethod('post')){
                $add->name=$request->get('name');
                $add->content=$request->get('content');
                $add->status = $request->has('status') ? 1 : 0;
                $add->save();
            }
        }
        return redirect('page-summary');
    }
    public function delete_data_page($id){
        $ob=AddPage::find($id);
        $ob->delete();
        return redirect('/page-summary');
    }
    public function edit_display_page($id)
    {
        $findrec=AddPage::where('id',$id)->get();
        return view('pageadd',compact('findrec'));
    }
    public function search_page(Request $request){
        if($request->isMethod('post')){
            $search=$request->get('search');
            $data=AddPage::where('name','LIKE','%'.$search.'%')->paginate(6);
        }
        return view('pagesummary',compact('data'));
    }
    public function insert_category(Request $request){
        $validatedData = $request->validate([
            'catname'=> 'required|string',
        ]);
        $addcategory=new Category;
        $id = $request->get('id');
        if ($id){
            $findrec_category = Category::find($id);
            if ($findrec_category) {
                if ($request->isMethod('post')) {
                    $findrec_category->categoryname= $request->get('catname');
                    $findrec_category->save();
                }
            }
        }
        else{
            if($request->isMethod('post')){
                $addcategory->categoryname=$request->get('catname');
                $addcategory->save();
            }
        }
        return redirect('/category-summary');
    }
    public function delete_data_category($id){
        $category_delete=Category::find($id);
        $category_delete->delete();
        return redirect('/category-summary');
    }
    public function edit_display_category($id)
    {
        $findrec_category=Category::where('id',$id)->get();
        return view('categoryadd',compact('findrec_category'));
    }
    public function search_category(Request $request){
        if($request->isMethod('post')){
            $search_category=$request->get('search_category');
            $catdata=Category::where('categoryname','LIKE','%'.$search_category.'%')->paginate(6);
        }
        return view('categorysummary',compact('catdata'));
    }
    public function insert_product(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required|integer',
            'pname' => 'required|string',
            'pdesc' => 'required|string',
            'pprice' => 'required|integer',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $customName =  time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->move('product_images', $customName, 'public');
        }
        if($request->isMethod('post')){
            $product = new Product();
            $product->category_id = $request->input('category_id');
            $product->pname = $request->input('pname');
            $product->pdesc = $request->input('pdesc');
            $product->pprice = $request->input('pprice');
            $product->product_image = $imagePath;
            $product->save();
        }
        return redirect('add-product');
    }
}
