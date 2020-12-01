<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model; 

class Movies extends Model
{
	use SoftDeletes; 

	/**
	 * Table Name 
	 * 
	 * @var string
	 */
	protected $table = 'movies'; 

	/**
	 * Primary Key 
	 * 
	 * @var string
	 */
	protected $primaryKey = 'id'; 

	/**
	 * Fillable 
	 * 
	 * @var array
	 */
	public $fillable = ['title', 'description'];
}