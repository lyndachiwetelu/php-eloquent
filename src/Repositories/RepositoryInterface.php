<?php

namespace App\Repositories;

interface RepositoryInterface
{
	public function getAll();

	public function update($id, $updateData);

	public function add($data);

	public function delete($id);

	public function getOne($id);
}