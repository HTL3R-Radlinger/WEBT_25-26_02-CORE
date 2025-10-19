<?php

interface MealInterface
{
    public function getName(): string;

    public function getProvider(): string;

    public function htmlCode(): string;
}