<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

class RequestLogs extends Model
{
	/**
	 * Table Name 
	 * 
	 * @var string
	 */
	protected $table = 'request_logs'; 

	/**
	 * Primary Key 
	 * 
	 * @var string
	 */
	protected $primaryKey = 'id'; 

	/**
	 * get body_data
	 * 
	 * @return string 
	 */
	public function getBodyAttribute($value)
	{
		return $value; 
	}

	/**
	 * Fillable 
	 * 
	 * @var array
	 */
	public $fillable = ['router', 'method', 'body'];
}