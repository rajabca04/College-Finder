<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    //

    public function index(){
        $data = Category::all();
        return view("home",["data"=>$data]);
    }

    public function insertCategory(Request $req){
        $req->validate(['title'=>"required"]);

        $cat = new Category();
        $cat->title = $req->title;
        $cat->save();

        return redirect()->back();
    }

    public function insertCollege(Request $req){

        $req->validate([
            'c_title' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'descr' => 'required',
            'logo' => 'required',
            'category' => 'required',
        ]);
        $logo = $req->file('logo')->getClientOriginalName();
        $path = $req->file('logo')->storeAs("public/",$logo);

        $c = new College();
        $c->c_title = $req->c_title;
        $c->contact = $req->contact;
        $c->email = $req->email;
        $c->descr = $req->descr;
        $c->logo = $logo;
        $c->estd = $req->estd;
        $c->category_id = $req->category;
        $c->save();

        return redirect()->back();
    }

    public function deleteCategory($id){
            $c = Category::find($id);
            $c->delete();
            return redirect()->back();
    }
    public function deleteCollege($id){
            $c = College::find($id);
            $c->delete();
            return redirect()->back();
    }






}
