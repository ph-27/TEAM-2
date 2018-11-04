<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
     use Notifiable;
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','tell','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    public function orders()
    {
        return $this->hasMany('smartMaket\orders','id','user_id');
    } 


}
