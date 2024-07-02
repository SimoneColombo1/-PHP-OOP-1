<?php

class movie
{
    public $titolo;
    public $durata;
    public function __construct($titolo, $durata)
    {
        $this->titolo = $titolo;
        $this->durata = $durata;
    }

    public static function title()
    {
        return 'Il titolo del film è:';
    }
    public static function length()
    {
        return 'La durata del film è:';
    }
}

$onepiece = new movie('one piece', 120);
$vanhelsing = new movie('van helsing', 130);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>MOVIES</h1>
    </header>
    <main>
        <h2> film</h2>

        <span>
            <p>

                <?php echo movie::title();
                echo $onepiece->titolo;


                ?>
            </p>

            <p><?php echo movie::length();
                echo $onepiece->durata;

                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $vanhelsing->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $vanhelsing->durata;
                ?>
            </p>
        </span>
    </main>
</body>

</html>