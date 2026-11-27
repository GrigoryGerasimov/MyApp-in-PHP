<?php

namespace MyApp\App\app\controllers;


abstract class AbstractController implements ControllerInterface
{
    abstract public function create(array $data);
    abstract public function store(array $data);
    abstract public function readAll();
    abstract public function readById(string $id);
    abstract public function edit(string $id, array $data);
    abstract public function update(string $id, array $data);
    abstract public function destroy(string $id);
}