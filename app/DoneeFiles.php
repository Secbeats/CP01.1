<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoneeFiles extends Model
{
    protected $fillable = [
        'user_id', 'file'
    ];

    protected $rules = array(
        'file'  => 'required',
    );
    protected $errors;

    protected $table = 'donee_files';

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
