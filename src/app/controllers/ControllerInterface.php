<?php

namespace MyApp\App\app\controllers;


interface ControllerInterface
{
    public function create(array $data);
    public function store(array $data);
    public function readAll();
    public function readById(string $id);
    public function edit(string $id, array $data);
    public function update(string $id, array $data);
    public function delete(string $id);
}