<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'articles';
	protected $fillable = ['title','body','codice_prodotto','disponibile','prezzo','taglia','colore','tipologia',"foto"];
	
}
