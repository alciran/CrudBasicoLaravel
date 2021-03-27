<?php
namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Database extends Eloquent
{

	protected $connection = 'mongodb';
	protected $collection = 'databases';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = [
        'nome', 'tipo', 'descricao'
    ];

}