<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddPage;
class CrudController extends Controller
{
    public function insert_page(Request $request){
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
    public function delete_data($id){
        $ob=AddPage::find($id);
        $ob->delete();
        return redirect('/page-summary');
    }
    public function edit_display($id)
    {
        $findrec=AddPage::where('id',$id)->get();
        return view('pageadd',compact('findrec'));
    }
}
