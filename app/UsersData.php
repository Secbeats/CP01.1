<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class UsersData extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country', 'address', 'gender', 'contact',
    ];

    protected $rules = array(
        'country'  => 'required',
        'address'  => 'required',
        'gender' => 'required',
        'contact' => 'required',
    );
    protected $errors;

    protected $table = 'users_data';

    public function validate($data)
    {
        $valid = Validator::make($data, $this->rules);
        if ($valid->fails())
        {
            $this->errors = $valid->errors();
            return false;
        }
        return true;
    }

    public function errors()
    {
        return $this->errors;
    }
}
