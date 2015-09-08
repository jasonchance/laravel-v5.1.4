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
use Log;
// use Illuminate\Support\Facades\Redis as Redis;
use RedisN;

use App\Role;
use App\Permission;

use Entrust;

use App\Traits\HelloTrait;

class UserController extends Controller
{
    use HelloTrait;
    
    public function __construct()
    {
        // $this->middleware('auth');

    }

    public function a()
    {
        return 'aaa';
    }

    public function foo()
    {
        //
        $pwd = crypt('123123', env('APP_KEY'));
        dd($pwd);
        // trait 继承顺序, self>trait>parent
        $a = $this->a();
        dd($a);
        // tese role permission
        // https://github.com/sunbiao0526/entrust
        // dd(Auth::user());
        // $role = Role::findOrFail(4);
        // $user = User::findOrFail(1);
        // $role->delete();
        // dd($role->users);
        // $role->users()->sync([]); // Delete relationship data
        // $role->perms()->sync([]); // Delete relationship data

        // dd($user->ability('admin,owner', 'create-post,edit-user', ['validate_all' => false, 'return_type' => 'both']));
        // dd($user->ability(array('admin', 'owner'), array('create-post', 'edit-user')));
        // dd(Auth::user()->hasRole(['owner', 'admin']));
        // dd(Entrust::hasRole('admin'));
        // dd($user->hasRole(['owner', 'admin'], true));
        // dd($user->can('create-post'));
        // $role = Role::findOrFail(1);
        // $permission = Permission::findOrFail(1);
        // $perms = Permission::select('id')->get();
        // $user->attachRole($role);
        // $user->roles()->attach($role->id);
        // $role->perms()->sync($perms);
        // add roles
        // $role = new Role();
        // $role->name = 'employee';
        // $role->display_name = 'Widget Co. Employee';
        // $role->save();
        // add permissions
        // $permission = new Permission();
        // $permission->name = 'mailing-list-subscribe';
        // $permission->display_name = 'Subscribe to mailing list';
        // $permission->save();
        // return response('ok', 200);
        // test
        return view('index');
    }

    public static function showProfile($id)
    {
        $key = 'user:'.$id;
        $user = Cache::get($key);
        if (!$user) {
            $user = User::find($id);
            // $user = DB::table('users')->find($id);
            Cache::put($key, $user, 2);
        }
        // Redis::set('user:'.$id, $user);
        // $user = RedisN::get('user:'.$id);
        return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request, $id = null)
    {
        //

        $users = User::orderBy(DB::raw('rand()'))->get();
        dd($users);
  
        echo $path = storage_path('app/file.txt');exit;
        echo $path = app_path('Http/Controllers/Controller.php');exit;
        $e = e('<html>foo</html>');
        echo $e;exit;
        echo $string = str_random(4);exit;
        echo $title = str_slug("Laravel 5 Framework", "-");exit;
        echo $value = studly_case('foo_bar');exit; // 首字母大写
        echo trans('passwords.password');exit;
        echo $value = trans_choice('validation.required', 11);exit;

        echo secure_asset('foo/bar.zip', $title = '111', $attributes = []);exit;

        $pwd = bcrypt(123123);
        dd($pwd);

        $debug = config('app.debug');
        dd($debug);

        // $user = factory('App\User')->make();
        // dd($user);

        return view('welcome');
        // return redirect('/');

        $value = value(function() { return 'bar'; });
        dd($value);

        $headers = [];
        // return response('Hello World', 200, $headers);
        return response()->json(['foo' => 'bar'], 200, $headers);

        $value = with(new User)->work();
        dd($value);

        // $monolog = Log::getMonolog();
        // dd($monolog);

        Log::info('Showing user profile for user: '.$id);
        $users = User::get();
        Log::info('User failed to login.', ['id' => $users[0]->id]);
        dd($users);

        echo $a = memory_get_usage(), PHP_EOL;
        // $users = User::get(); // usage 7744, return collection
        $users = DB::table('users')->get(); // usage 6568, return array
        echo $b = memory_get_usage(), PHP_EOL;
        echo $b - $a, PHP_EOL;
        dd($users);
        foreach ($users as $user) {
            dd($user);
        }
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
