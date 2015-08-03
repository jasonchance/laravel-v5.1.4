<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Input;
use Illuminate\Http\Response;
use Carbon\Carbon;

use DB;
use Auth;
use Cache;

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

        // $user = User::find(1)->value('name');
        $users = User::select('email', 'name')->get();
        foreach ($users as $user) {
            var_dump($user->name);
            echo PHP_EOL;
        }
        dd($users);

        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
        $chunks = $collection->chunk(4);
        $chunks->toArray();
        dd($chunks);
        $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
            return strtoupper($name);
        })
        ->reject(function ($name) {
            return empty($name);
        });
        dd($collection);

        if (Auth::check()) {
            // $predis = new \Predis\Client();
            // dd($predis);
            $id = Auth::user()->id;
            $key = 'user:'.$id;
            $is = Cache::add($key, '1111', 2);
            // Cache::pull('bar');
            // $value = Cache::store('file')->get('bar');

            // Cache::store('file')->put('bar', 'baz', 10);
            dd($key, $is);
            // $value = Cache::store('file')->get($key);
            // dd($value);
            $user = Cache::get('user:'.$id);
            // dd($user);
            if (!$user) {
                $user = User::find($id);
                Cache::put('user:'.$id, $user, 2);
            }
            dd($user);
        }


        // $user = User::find(2);
        // dd($user);
        // Auth::login($user);
        $uid = Auth::user()->id;
        Auth::loginUsingId($uid);

        dd(111);

        // $pdo = DB::connection('laravel5')->getPdo();
        // dd($pdo);

        $user = User::all()->lists('name');
        dd( (string)$user );
        $users = User::all();
        dd($users->toJson());
        // $disabled_at = $user->disabled_at->getTimeStamp();
        // if ($user->status) {
        //     dd($disabled_at);       
        // }
        // dd($disabled_at);

        $user->disabled_at = Carbon::now();
        $rs = $user->save();
        dd($rs);

        // $users = User::where('id', '>', 0)->get();
        
        // $users = $users->count();
        $names = [];
        User::chunk(2, function($users) {
            foreach ($users as $key => $user) {
                $names[] = $user->name;
            }
            dd($names);
        });
        dd($users);

        $names = $users->reject(function($user) {
            return $user->status === 1;
        })
        ->map(function($user) {
            return $user->name;
        });
        dd($names);

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
