<?php
require_once __DIR__ . '/Meal.php';

class VeganMeal extends Meal
{
    private string $foodLable;

    public function __construct(string $name, string $provider, string $foodLable)
    {
        parent::__construct($name, $provider);
        $this->foodLable = $foodLable;
    }

    public function htmlCode(): string
    {
        return "<article class='meal vegetarian'>
                    <img src='https://picsum.photos/200/300' alt='Salat'>
                    <div class='meal-content'>
                        <h2>{$this->getName()} (Vegan)</h2>
                        <p>Provider: {$this->getProvider()}</p>
                        <p>Food Lable: $this->foodLable</p>
                    </div>
                </article>";
    }
}
