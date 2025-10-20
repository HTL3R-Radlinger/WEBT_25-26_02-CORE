<?php
require_once __DIR__ . '/../Interfaces/MealInterface.php';

abstract class Meal implements MealInterface
{
    protected string $imgSrc;
    protected string $imgAlt;
    public string $name;
    public string $provider;

    public function __construct(string $name, string $provider, string $imgSrc, string $imgAlt)
    {
        $this->name = $name;
        $this->provider = $provider;
        $this->imgSrc = $imgSrc;
        $this->imgAlt = $imgAlt;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function htmlCode(): string
    {
        return "<article class='meal'>
                    <img src='$this->imgSrc' alt='$this->imgAlt'>
                    <div class='meal-content'>
                        <h2>{$this->getName()} (Vegetarian)</h2>
                        <p>Provider: {$this->getProvider()}</p>
                    </div>
                </article>";
    }
}