<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhtsinhvien extends Model
{
    use HasFactory;
    protected $table = 'nhtsinhvien';
    protected $fillable = ['nhtmasv', 'nhthosv', 'nhttensv', 'nhtngaysinh','nhtphai', 'nhtnoisinh', 'nhtmakhoa', 'nhthocbong'];
    protected $primaryKey = 'nhtmasv';

}
