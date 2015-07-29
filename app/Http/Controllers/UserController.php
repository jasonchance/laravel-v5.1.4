<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Input;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request, $id = null)
    {
        //
        if ($request->is('user/*')) {
            $url = $request->url();
            $value = $request->cookie('name');
            $response = new Response('Hello World');
            $response->withCookie(cookie('name', 'value', 60));
            dd($value);
        }
        if (!$id) return view('errors.404');
        // $user = User::findOrFail($id);
        $user = User::find($id);
        $uri = $request->path();
        // dd($uri);
        return response()->json([$user, $uri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
