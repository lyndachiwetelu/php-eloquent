<?php

namespace App\Repositories;

use App\Models\Color;

class ColorRepository implements RepositoryInterface
{
	public function getAll()
	{
		$colors = Color::all();
		return $colors;
	}

	public function update($hexcode, $updateData) : int
	{
		$updated = Color::where('hexcode', $hexcode)->update($updateData);
		return $updated;
	}

	public function add($data)
	{
		$color = Color::create($data);
		return $color;
	}

	public function delete($hexcode)
	{
		$color = Color::where('hexcode', $hexcode)->first();
		$color->delete(); 
	}

	public function getOne($hexcode)
	{
	    $color = Color::where('hexcode', $hexcode)->first();
		return $color;
	}


}