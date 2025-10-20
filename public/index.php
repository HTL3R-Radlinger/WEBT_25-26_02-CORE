<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Plan</title>
    <style>
        main {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        article.meal {
            background-color: lightgray;
        }

        .meal img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .meal-content {
            padding: 10px;
        }

        .meal-content p {
            font-size: 0.9rem;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>
<?php
require_once __DIR__ . '/../src/Classes/VegetarianMeal.php';
require_once __DIR__ . '/../src/Classes/VeganMeal.php';

$meals = [
        new VegetarianMeal("Salat", "Spar", "https://picsum.photos/200/300", "Salat", "Lacto-Ovo-Vegetarian"),
        new VegetarianMeal("Salat", "Spar", "https://picsum.photos/210/300", "Salat", "Lacto-Ovo-Vegetarian"),
        new VegetarianMeal("Salat", "Spar", "https://picsum.photos/200/300", "Salat", "Lacto-Ovo-Vegetarian"),
        new VegetarianMeal("Salat", "Spar", "https://picsum.photos/200/300", "Salat", "Lacto-Ovo-Vegetarian"),
        new VegetarianMeal("Salat", "Spar", "https://picsum.photos/200/300", "Salat", "Lacto-Ovo-Vegetarian"),

        new VeganMeal("Salat", "Billa", "https://picsum.photos/200/300", "Salat", "AMA Gütesiegel"),
        new VeganMeal("Salat", "Billa", "https://picsum.photos/200/200", "Salat", "AMA Gütesiegel"),
        new VeganMeal("Salat", "Billa", "https://picsum.photos/200/300", "Salat", "AMA Gütesiegel"),
        new VeganMeal("Salat", "Billa", "https://picsum.photos/200/300", "Salat", "AMA Gütesiegel"),
        new VeganMeal("Salat", "Billa", "https://picsum.photos/200/300", "Salat", "AMA Gütesiegel"),
];

?>
<main>
    <?php
    foreach ($meals as $meal) {
        echo $meal->htmlCode();
    }
    ?>
</main>
<footer>
    &copy; 2025 Radbauer | Bachinger
</footer>
</body>
</html>
