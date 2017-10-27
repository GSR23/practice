<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site; //Name space

class SitesController extends Controller
{
    public function ShowHomePage()
    {
        $d_all= Site::latest()->get();
        return view('site.homepage', compact('d_all'));
    }
    // public function ShowPost(Site $post_no) //Route Binding Model where $post_no is the variable and
    //  {{ post_no }} should be same as if in the route Route::get('Site/{post_no}', 'SitesController@ShowPost');
    // and compact post_no and use post_no in the view.
    public function ShowPost($id)
    {
        $d_one= Site::find($id); //Can be Commented while using Routhe Binding Model
        return view('site.post', compact('d_one'));
    }
    public function CreatePost()
    {
        return view('site.create');
    }
    public function StorePost(Request $request)
    {
        // dd(request(['title','data']));
        // Method One
        // $d= new \App\Site; Showing Some errors
        // $d= new Site; //Declare the namespace at the top.
        // $d->title = request('title');
        // $d->data = request('data');
        // $d->save();

        // Method Two
        // Site::create([
        //     'title'=>request('title'),
        //     'data'=>request('data')
        // ]);
        //Validation
        $this->validate($request, [
          'title' => 'required|max:255',
          'data' => 'required'
        ]);
        //Method Threee
        Site::create(request(['title','data']));

        return redirect('/Site');
    }
}
