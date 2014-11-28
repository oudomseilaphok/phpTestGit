<!DOCTYPE html>
<html>
<head>
    <title> Chicken Man Example </title>
    <?php

    $YourName = $_POST['YourName'];
    $FavouriteWord = $_POST['FavouriteWord'];
    $WordToDisplay = null;
    ?>
</head>
<body bgcolor="#FFFFFF" text="#000000">

<p>
Hi <?php print ($YourName);?>

<p>
You like the word <b>

        <?php print $FavouriteWord;

        if($FavouriteWord=="bello"){
            $WordToDisplay = "oh Hello Sir";
        }
        else{
            $WordToDisplay = "You oughta be ashamed of yourself!";
        }
        print("<br>");
        echo($WordToDisplay);
        echo("<br>");
        include 'extraInfo.php';
        include 'saveToText.php';
      //  include 'upload.php';

         ?>




       <!-- <br><button  name="Save" style="height: 30px; width: 50px" title="Save" >Save</button> -->
</body>
</html>