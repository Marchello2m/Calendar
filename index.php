<?php
require_once 'vendor/autoload.php';

use Spatie\CalendarLinks\Link;

if(isset($_POST['submit']))
{
    $from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
    $to = DateTime::createFromFormat('Y-m-d H:i', $_POST['to']);

    $link = Link::create($_POST['title'],$from,$to)
        ->description($_POST['description'])
    ->address($_POST['address']);

    echo "<a href='".$link->google()."' target='_blank' >CLICK HEAR GOOGLE </a>";
    echo "<br>";
   echo "<a href='".$link->yahoo()."' target='_blank' >CLICK HEAR FOR YAHOOO </a>";
    echo "<br>";
    echo "<a href='".$link->webOutlook()."' target='_blank' >CLICK HEAR FOR WEB_OUT_LOOK </a>";
    echo "<br>";
    echo "<a href='". $link->ics()."' target='_blank' >CLICK HEAR FOR ICS </a>";


    // 2021-09-22 18:00
}

?>
<style>
    .test_style {
        font-size:16px;
        color:#000000;
        font-weight:bold;
        margin-top:5px;
        text-align: center;
    }
</style>
<html lang="">
<body>
<form  class="test_style" method="Post">
   <p><label class="text-left"  for="title">Title:</label><br>
    <input class="text-center"  type="text" id="title" name="title" ><br></p>

    <label class="text-center" for="from">From:</label><br>
    <input class="text-center" type="text" id="from" name="from" ><br><br>

    <label class="text-center" for="to">To:</label><br>
    <input class="text-center" type="text" id="to" name="to" ><br><br>

    <label class="text-center" for="description">Desc:</label><br>

    <input class="text-center" type="text" id="description" name="description" ><br><br>

    <label class="text-center" for="address">Address:</label><br>
    <input class="text-center" type="text" id="address" name="address" ><br><br>

    <input class="text-center" type="submit" name="submit" value="Submit"  >
</form>

</body>
</html>
