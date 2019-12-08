<?php

namespace App\Controllers;

use App\Models\Color;
use App\Services\Request;

class ColorController
{
	public static function getColors($vars = [])
	{
		$colors = Color::all();
		return $colors;
	}

	public static function getColor($vars = [])
	{
		$hexcode = $vars['hexcode'] ?? '';
		$color = Color::where('hexcode', $hexcode)->first();
		return $color;
	}

	public static function addColor($vars = [])
	{
		$hexcode   =  $_POST['hexcode'] ?? '';
		$family    =  $_POST['family'] ?? '';
		$colorName =  $_POST['name'] ?? '';
		if (empty($hexcode) || empty($family) || empty($colorName)) {
			return ['error' => 'Please supply hexcode, name and family to make a successful request'];
		}
		$color = Color::create([
			'hexcode' 	=>  $hexcode,
			'name' 		=>  $colorName, 
			'family'	=>	$family]);
		return $color;
	}

	public static function editColor($vars = [])
	{
		$hexcode = $vars['hexcode'] ?? '';
		$family = $_POST['family'] ?? '';
		$name = $_POST['name'] ?? '';

		$color = Color::where('hexcode', $hexcode)->first();
		if (!$color) {
			return ['error' => 'Color with hexcode does not exist'];
		}

		$color->family = $family;
		$color->name = $name;
		$color->save();
		return $color;
	}

	public static function removeColor($vars = [])
	{
		$hexcode = $vars['hexcode'] ?? '';
		$color = Color::where('hexcode', $hexcode)->first();
		if (!$color) {
			return ['error' => 'Could not delete color. Color Not Found'];
		}
		$color->delete();
		return ['data' => 'The color has been removed'];
	}

	public static function getColorFromApi($vars = [])
	{
		$hexcode = $vars['hexcode'] ?? '';
		$request = new Request(COLOR_API);
		$response = $request->get('id', ['hex' => $hexcode]);
		return $response;

	}
}