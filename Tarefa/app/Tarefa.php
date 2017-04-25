<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
	//objeto tarefa
    protected $fillable = array('nome', 'descricao', 'status');
}
