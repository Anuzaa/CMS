<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //Table name
    protected $table= 'clients';
    //primary key
    public $primaryKey= 'id';
    //Timestamps
    public $timestamps = true;

    // public function user(){
    //     return $this -> belongsTo('App\Client');
    // }
}
