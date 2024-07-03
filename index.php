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
$ilpadrino = new movie('Il Padrino', 175);
$Forrestgump = new movie('Forrest Gump', 142);
$inception = new movie('inception', 148);
$batman = new movie('Il Cavaliere Oscuro', 152);
$lalaland = new movie('la la land', 128);
$pulpfiction = new movie('Pulp Fiction', 128);
$parasite = new movie('parasite', 132);
$perfectblue =  new movie('PErfect Blue', 81);
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
        <span>

            <p>

                <?php echo movie::title();
                echo $ilpadrino->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $ilpadrino->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $Forrestgump->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $Forrestgump->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $inception->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $inception->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $batman->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $batman->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $lalaland->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $lalaland->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $pulpfiction->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $pulpfiction->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $parasite->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $parasite->durata;
                ?>
            </p>
        </span>
        <span>

            <p>

                <?php echo movie::title();
                echo $perfectblue->titolo;

                ?>

            </p>
            <p>
                <?php
                echo movie::length();
                echo $perfectblue->durata;
                ?>
            </p>
        </span>
    </main>
</body>

</html>