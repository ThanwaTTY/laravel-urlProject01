<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UrlController extends Controller
{
    public function index()
    {
        $urls = Url::paginate(10);

        return view('url.index', compact('urls') );

    }

    public function create()
    {
        return view('url.create');
    }

    public function store(Request $request)
    {
        Url::create($request->all() );

        return redirect('url');
    }

    public function edit($id)
    {
        $url = Url::find($id);

        return view('url.edit', compact('url'));
    }

    public function update(Request $request, $id)
    {
        $url = Url::find($id);

        $url->update($request->all() );

        return redirect('url');
    }

    public function destroy($id)
    {
        $url = Url::find($id);
        $url->delete();

        return redirect('url');
    }

    public function status(Request $request, $id)
    {

              //$url = Url::find($id);
              //return "Switch:".$id.' title:'.$url->title;
              //$url = Url::find($id);
              $url = Url::find($id);
              if ($url->status==1) {
                  $url->update(['status' => 0]);
              } else if($url->status==0) {
                  $url->update(['status' => 1]);
              }

              //$url->update(['status' => 2]);
              return redirect('url');
    }

    public function show($id)
    {
        //$urls = Url::paginate(10);
        $url = Url::find($id);
        return view('url.index', compact('urlsshow') );
        //return 'TEST'.$id;
    }

}
