<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table='category';

    protected $filliable=[
    'categoryName','categorySlug'];

   //protected $hidden=['id'];

}