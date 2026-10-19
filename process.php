<?php
$error = "";
$showbill = false;

if (isset($_POST['calculate'])) {
    $firstinput = $_POST['first'];
    $secondinput = $_POST['second'];
    $thirdinput = $_POST['third'];
    $fourthinput = $_POST['fourth'];
    $fifthinput = $_POST['fifth'];

    if ($firstinput == "") 
        $firstinput = 0;
    if ($secondinput == "")
        $secondinput = 0;
    if ($thirdinput == "")
        $thirdinput = 0;
    if ($fourthinput == "")
        $fourthinput = 0;
    if ($fifthinput == "")
        $fifthinput = 0;

    if ($firstinput < 0 || $secondinput < 0 || $thirdinput < 0 || $fourthinput < 0 || $fifthinput < 0)
       $error = "Please enter a valid number";

    else if ($firstinput > 200 || $secondinput > 100 || $thirdinput > 300 || $fourthinput > 300)
        $error = "Please enter a valid number"; 

    else if(
        $firstinput + $secondinput + $thirdinput + $fourthinput + $fifthinput == 0
    )
        $error = "Please enter at least one input";

    else {
        $firstcharge = $firstinput * 0.128;
        $secondcharge = $secondinput * 0.344;
        $thirdcharge = $thirdinput * 0.516;
        $fourthcharge = $fourthinput * 0.546;
        $fifthcharge = $fifthinput * 0.571;
        $totalcharge = $firstcharge + $secondcharge + $thirdcharge + $fourthcharge + $fifthcharge;
        $totalinput = $firstinput + $secondinput + $thirdinput + $fourthinput + $fifthinput;

        if ($totalcharge < 3)
            $totalcharge = 3;

        if ($totalinput > 600) {
            $totalcharge = $totalcharge * 1.06;
        }
        $showbill = true;
    }

}
