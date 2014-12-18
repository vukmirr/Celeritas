<?php
require("autoloader.php");

use Hakaton\Controller\DefaultController;
use Hakaton\Database\Entity\Answer;
use Hakaton\Database\Entity\Question;
use Hakaton\Database\Entity\Subject;

$subject = new Subject();
$subject->setId(3)
        ->setName("Milionaire")
        ->setDescription("Do you want to become a millionaire ?");

$c = new DefaultController();
$QA = $c->buildQA($subject);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2><?php echo $subject->getName(); ?></h2>
    <p>Select the correct answers accordingly.</p>

    <div class="container">
        <form role="form" action="Collector.php" method="post">
            <?php
            $_POST['array'] = 'Marko';
            for($i = 0; $i < 10; $i++)
            {
                $q = $QA[$i]['question'];
                /* @var $q Question */
                $num = $i +1;
                ?>
                <div class="form-group">
                    <h3> <?php echo $num." ".$q->getDescription(); ?></h3>

                    <?php
                    for($j=0; $j<4; $j++)
                    {
                        $a = $QA[$i]['answers'][$j];
                        /* @var $a Answer */
                        ?><input type="radio" name="<?php echo $q->getId();?>" value="<?php echo $a->getCorrect();?>" >
                        <?php
                        echo $a->getDescription();
                    }
                    ?>
                </div>
                <br/><hr>
            <?php
            }
            ?>
            <br/><br/><button type="submit" class="btn btn-default">Submit</button><br><br><br>

        </form>
    </div>





</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
