<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;
    protected $appends = ["ended"];

    public function getEndedAttribute(){
        return is_past($this->webinar_date);
     }

}
