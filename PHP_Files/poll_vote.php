<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$choice01 = $array[0];
$choice02 = $array[1];
$choice03 = $array[2];

if ($vote == 0) {
    $choice01 = $choice01 + 1;
}
if ($vote == 1) {
    $choice02 = $choice02 + 1;
}
if ($vote == 2) {
    $choice03 = $choice03 + 1;
}

//insert votes to txt file
$insertvote = $choice01 . "||" . $choice02 . "||" . $choice03;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<p id="category"><strong>Result</strong></p>
<hr noshade>
<!--part containing the choices-->
<table>
    <tr>
        <td><small>Badminton:</small></td>
        <td>
            <!--to display the bar-->
            <img src="../IMAGES/poll.gif"
                 width='<?php echo(100 * round($choice01 / ($choice01 + $choice02 + $choice03), 2)); ?>'
                 height='15'>
            <!--to display the percentage of votes-->
            <?php echo(100 * round($choice01 / ($choice01 + $choice02 + $choice03), 2)); ?>%
            <br> <br>
        </td>
    </tr>
    <tr>
        <td><small>Swimming:</small></td>
        <td>
            <!--to display the bar-->
            <img src="../IMAGES/poll.gif"
                 width='<?php echo(100 * round($choice02 / ($choice01 + $choice02 + $choice03), 2)); ?>'
                 height='15'>
            <!--to display the percentage of votes-->
            <?php echo(100 * round($choice02 / ($choice01 + $choice02 + $choice03), 2)); ?>%
            <br> <br>
        </td>
    </tr>
    <tr>
        <td><small>Tennis:</small></td>
        <td>
            <!--to display the bar-->
            <img src="../IMAGES/poll.gif"
                 width='<?php echo(100 * round($choice03 / ($choice01 + $choice02 + $choice03), 2)); ?>'
                 height='15'>
            <!--to display the percentage of votes-->
            <?php echo(100 * round($choice03 / ($choice01 + $choice02 + $choice03), 2)); ?>%
            <br> <br>
        </td>
    </tr>
</table>