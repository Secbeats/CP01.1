<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class DonationRequests extends Model
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
        'purpose'  => 'required',
        'address'  => 'required',
        'amount' => 'required',
        'contact' => 'required',
    );
    protected $errors;

    protected $table = 'donation_requests';

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
