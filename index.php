<?php
class Movie
{
    public $title;
    public $year;
    public $description;

    function __construct($title, $year)
    {
        $this->title = $title;
        $this->year = $year;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getYear()
    {
        return $this->year;
    }
}

$movie1 = new Movie('Pulp Fiction', 1994);
$movie1->setDescription('Una storia intricata di criminalità e cultura pop');

$movie2 = new Movie('Inception', 2010);
$movie2->setDescription('Un ladro inserisce idee nei sogni degli altri');


?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div>
        <h1 class=" text-center ">Movies</h1>

        <div class="row justify-content-center ">
            <div class="col-3 text-center ">
                <h3>Title:</h3>
                <?php
                echo "<p>" . $movie1->getTitle() . "</p>";
                ?>
                <h3>Description:</h3>
                <?php
                echo "<p>" . $movie1->getDescription() . "</p>";
                ?>
                <h3>Year:</h3>
                <?php
                echo "<p>" . $movie1->getYear() . "</p>";
                ?>

            </div>

            <div class="col-3 text-center ">
                <h3>Title:</h3>
                <?php
                echo "<p>" . $movie2->getTitle() . "</p>";
                ?>
                <h3>Description:</h3>
                <?php
                echo "<p>" . $movie2->getDescription() . "</p>";
                ?>
                <h3>Year:</h3>
                <?php
                echo "<p>" . $movie2->getYear() . "</p>";
                ?>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>