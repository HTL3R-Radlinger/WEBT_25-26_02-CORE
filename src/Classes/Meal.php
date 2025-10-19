<?php
require_once __DIR__ . '/../Interfaces/MealInterface.php';

abstract class Meal implements MealInterface
{
    public string $name;
    public string $provider;

    public function __construct(string $name, string $provider)
    {
        $this->name = $name;
        $this->provider = $provider;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    abstract public function htmlCode(): string;
}