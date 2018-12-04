<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_role', 'medium', 'type','mobile_no','amount',
    ];

    protected $rules = array(
        'user_id'  => 'required',
        'user_role'  => 'required',
        'medium' => 'required',
        'type' => 'required',
        'mobile_no' => 'required',
        'amount' => 'required',
    );
    protected $errors;

    protected $table = 'transactions';

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
