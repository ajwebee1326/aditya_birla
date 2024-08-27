<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Contact extends Model
{
    use HasFactory;

    protected function createdAt(): Attribute{
        return Attribute::make(
            get:fn(string $value) => Carbon::parse($value)->format('d-M-y')
        );
    }
}
