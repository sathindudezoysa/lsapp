<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Connect to the database
//created by 'php artisan make:model Post -m'
//-m to migrate 
class Post extends Model
{
    //In case you need to change the table name
    protected $table = 'posts';

    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    use HasFactory;
}
