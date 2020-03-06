<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

    if(3 < 5) {
        echo "I love PHP" . "<br>";
    } elseif(3 > 5) {
        echo "false";
    } else {
        echo "default";
    }

    for($i = 0; $i <= 10; $i++) {

        echo $i . "<br>";
    }

    $number = 10;

    switch($number) {

        case 12:
            echo "lklsjdfjsd";
            break;
        case 10:
            echo "it is true" . "<br>";
            break;
        default:
            echo "default";
            break;
    }

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
