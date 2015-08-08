<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    use EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    protected $dates = ['created_at', 'updated_at', 'disabled_at'];

    protected $dateformat = 'U';

    // 不懂，casts
    protected $casts = [
        'is_admin' => 1,
    ];

    protected $appends = ['is_admin'];

    public function getIsAdminAttribute()
    {
        if (isset($this->attributes['status'])) {
            return $this->attributes['status'] == 1;
        }
        return false;
    }

    /**
     * scope
     */
    public function scopePopular($query, $id)
    {
        return $query->where('id', '=', $id)->select(['name']);
    }

    public function work()
    {
        return 1;
    }

}
