<?php
require_once __DIR__ . '/Meal.php';

class VegetarianMeal extends Meal
{
    private string $vegetarianType;

    public function __construct(string $name, string $provider, string $imgSrc, string $imgAlt, string $vegetarianType = "Vegetarian")
    {
        parent::__construct($name, $provider, $imgSrc, $imgAlt);
        $this->vegetarianType = $vegetarianType;
    }

    public function htmlCode(): string
    {
        return "<article class='meal vegetarian'>
                    <img src='{$this->imgSrc}' alt='{$this->imgAlt}'>
                    <div class='meal-content'>
                        <h2>{$this->getName()} (Vegetarian)</h2>
                        <p>Provider: {$this->getProvider()}</p>
                        <p>Vegetarian Type: {$this->vegetarianType}</p>
                    </div>
                </article>";
    }
}
