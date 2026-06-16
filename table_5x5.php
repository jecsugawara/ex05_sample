<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table sample</title>
    <style>
        table {
            table-layout: fixed;
            border-collapse: collapse;
        }
        td {
            width: 20px;
            height: 20px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>tableタグのサンプル</h1>
    5x5の表を作成します。<br>
    <table>
        <?php
        $n = 1;
        for ($i = 1; $i <= 5; $i++) {
            print "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$n</td>";
                $n++;
            }
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>
