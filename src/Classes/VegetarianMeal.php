<?php
require_once __DIR__ . '/Meal.php';

class VegetarianMeal extends Meal
{
    private string $vegetarianType;

    public function __construct(string $name, string $provider, string $vegetarianType = "Vegetarian")
    {
        parent::__construct($name, $provider);
        $this->vegetarianType = $vegetarianType;
    }

    public function htmlCode(): string
    {
        return "<article class='meal vegetarian'>
                    <img src='https://picsum.photos/200/300' alt='Salat'>
                    <div class='meal-content'>
                        <h2>{$this->getName()} (Vegetarian)</h2>
                        <p>Provider: {$this->getProvider()}</p>
                        <p>Vegetarian Type: $this->vegetarianType</p>
                    </div>
                </article>";
    }
}
