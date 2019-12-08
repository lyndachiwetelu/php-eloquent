<?php
 
namespace App\Models;
 
use \Illuminate\Database\Eloquent\Model;
 
class Color extends Model 
{
	protected $primaryKey = 'id';
    protected $table = 'colors';
    protected $fillable = ['name', 'hexcode', 'family'];
    public $timestamps = false;
     
}
 
?>