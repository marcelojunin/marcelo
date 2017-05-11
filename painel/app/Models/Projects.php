<?php

namespace Painel\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Projects extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    			'category',
    			'name',
    			'link',
    			'description'
    			];

    public function uploads()
    {
    	return $this->hasMany(Uploads::class);
    }

}