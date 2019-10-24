<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Coin Flipper</title>
    </head>
    <body>
        <h1>Coin Flip Simulator</h1>
        <form method="post">
            <ul>
                <li>How many times would you like to flip the coin?</li>
                <li><input type="text" name="cointoss" /></li>
                <li><input type="submit" name="submit" value="Start tossing"/></li>
            </ul>
        </form>
    
<?php
$times = $_POST['cointoss'];
echo 'Running simulation for ' . $times . ' coin flips:';
$toss = 0;
$result = true;
$results = ['Heads' => 0, 'Tails' => 0];
?>
        <table>
            <tr>
                <th>Simulation</th>
                <th>Report</th>
            </tr>
            <tr>
                <td>
                <div class="leftpane">
                    <table>
                        <tr>        
<?php
for ($i = 1; $i < $times+1; $i++)
{
    $toss = rand(0,1);
    if ($toss == 0)
    {
        $result = true;
        $results['Heads'] += 1;
    } else {
        $result = false;
        $results['Tails'] += 1;
    }
    echo "Toss " . $i . ": ";
    echo $result ? 'Heads' : 'Tails';
    if ($i < $times)
    {
        echo "<br>";
    }
}

?>
                        </tr>
                    </table>
                </div>
                </td>
                <td>
                <div class="rightpane">
<?php
echo 'Total of heads: ' . $results['Heads'] . " (" . $results['Heads']*100/$times . "%)";
echo "<br>";
echo 'Total of tails: ' . $results['Tails'] . " (" . $results['Tails']*100/$times . "%)";
?>
                </div>
                </td>
            </tr>
        </table>
    </body>
</html>
