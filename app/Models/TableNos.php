<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableNos extends Model
{
    use HasFactory;
    protected $fillable = ['table_no','customer_name','in_time','out_time','total','payment_type'];
}
