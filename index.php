<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Старт в PHP</title>
</head>
<body>
    <div id="container">
        <form action = "<?php $_NAME ?>" method = "get">
            <input type="submit" name="true" value="Таблица истинности PHP" class="table_true">
            <input type="submit" name="flexible" value="Таблица гибкого сравнения" class="flexible">
            <input type="submit" name="hard" value="Таблица жесткого сравнения" class="hard">
            <input type="submit" name="history" value="История логотипа" class="history">
        </form>
    </div>
    <div id="tableclass">
        <?php
            function flexible($a, $b)
        {
            $c = $a == $b;
            if ($c === null) {
                return "null";
            } elseif ($c === true) {
                return "true";
            }
            elseif ($c === false) {
                return "false";
            }
        };
        function hard($a, $b)
        {
            $c = $a === $b;
            if ($c === null) {
                return "null";
            } elseif ($c === true) {
                return "true";
            }
            elseif ($c === false) {
                return "false";
            }
        };
            $tables0 = [
                " ", "true", "false", 1, 0, -1, '"1"', "null", '"php"',
            ];
            $tables1 = [
                "true", flexible(true, true), flexible(true, false), flexible(true, 1), flexible(true, 0), flexible(true, -1), flexible(true, "1"), flexible(true, null),flexible(true, "php"),
            ];
            $tables2 = [
                "false", flexible(false, true), flexible(false, false), flexible(false, 1), flexible(false, 0), flexible(false, -1), flexible(false, "1"), flexible(false, null),flexible(false, "php"),
            ];
            $tables3 = [
                "1", flexible(1, true), flexible(1, false), flexible(1, 1), flexible(1, 0), flexible(1, -1), flexible(1, "1"), flexible(1, null),flexible(1, "php"),
            ];
            $tables4 = [
                "0", flexible(0, true), flexible(0, false), flexible(0, 1), flexible(0, 0), flexible(0, -1), flexible(0, "1"), flexible(0, null),flexible(0, "php"),
            ];
            $tables5 = [
                "-1", flexible(-1, true), flexible(-1, false), flexible(-1, 1), flexible(-1, 0), flexible(-1, -1), flexible(-1, "1"), flexible(-1, null),flexible(-1, "php"),
            ];
            $tables6 = [
                '"1"', flexible("1", true), flexible("1", false), flexible("1", 1), flexible("1", 0), flexible("1", -1), flexible("1", "1"), flexible("1", null),flexible("1", "php"),
            ];
            $tables7 = [
                "null", flexible(null, true), flexible(null, false), flexible(null, 1), flexible(null, 0), flexible(null, -1), flexible(null, "1"), flexible(null, null),flexible(null, "php"),
            ];
            $tables8 = [
                '"php"', flexible("php", true), flexible("php", false), flexible("php", 1), flexible("php", 0), flexible("php", -1), flexible("php", "1"), flexible("php", null),flexible("php", "php"),
            ];
            $tables9 = [
                " ", "true", "false", 1, 0, -1, '"1"', "null", '"php"',
            ];
            $tables10 = [
                "true", hard(true, true), hard(true, false), hard(true, 1), hard(true, 0), hard(true, -1), hard(true, "1"), hard(true, null),hard(true, "php"),
            ];
            $tables11 = [
                "false", hard(false, true), hard(false, false), hard(false, 1), hard(false, 0), hard(false, -1), hard(false, "1"), hard(false, null),hard(false, "php"),
            ];
            $tables12 = [
                "1", hard(1, true), hard(1, false), hard(1, 1), hard(1, 0), hard(1, -1), hard(1, "1"), hard(1, null),hard(1, "php"),
            ];
            $tables13 = [
                "0", hard(0, true), hard(0, false), hard(0, 1), hard(0, 0), hard(0, -1), hard(0, "1"), hard(0, null),hard(0, "php"),
            ];
            $tables14 = [
                "-1", hard(-1, true), hard(-1, false), hard(-1, 1), hard(-1, 0), hard(-1, -1), hard(-1, "1"), hard(-1, null),hard(-1, "php"),
            ];
            $tables15 = [
                '"1"', hard("1", true), hard("1", false), hard("1", 1), hard("1", 0), hard("1", -1), hard("1", "1"), hard("1", null),hard("1", "php"),
            ];
            $tables16 = [
                "null", hard(null, true), hard(null, false), hard(null, 1), hard(null, 0), hard(null, -1), hard(null, "1"), hard(null, null),hard(null, "php"),
            ];
            $tables17 = [
                '"php"', hard("php", true), hard("php", false), hard("php", 1), hard("php", 0), hard("php", -1), hard("php", "1"), hard("php", null),hard("php", "php"),
            ];
            $tables18 = [
                '"A"','"B"','"!A"','"A || B"','"A && B"', '"A xor B"',
            ];
            $tables19 = [
                0, 0, !0, printf(0 || 0),  printf(0 && 0),  printf(0 xor 0),
            ];
            $tables20 = [
                0, 1, !0, 0 || 1,  printf(0 && 1), 0 xor 1,
            ];
            $tables21 = [
                1, 0,  printf(!1), 1 || 0,  printf(1 && 0), 1 xor 0,
            ];
            $tables22 = [
                1, 1,  printf(!1), 1 || 1, 1 && 1,  printf(1 xor 1),
            ];
            if ($_GET['hard']) {
                echo "<h2>Жёсткое сравнение в PHP</h2>";
                echo "<table class='table'>";
                for ($i=0; $i < 9 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < 9; $j++) {
                        if ($i === 0) {
                            echo "<th>{$tables9[$j]}</th>"; 
                        }
                        elseif ($i === 1) {
                            echo "<th>{$tables10[$j]}</th>"; 
                        }
                        elseif ($i === 2) {
                            echo "<th>{$tables11[$j]}</th>"; 
                        }
                        elseif ($i === 3) {
                            echo "<th>{$tables12[$j]}</th>"; 
                        }
                        elseif ($i === 4) {
                            echo "<th>{$tables13[$j]}</th>"; 
                        }
                        elseif ($i === 5) {
                            echo "<th>{$tables14[$j]}</th>"; 
                        }
                        elseif ($i === 6) {
                            echo "<th>{$tables15[$j]}</th>"; 
                        }
                        elseif ($i === 7) {
                            echo "<th>{$tables16[$j]}</th>"; 
                        }
                        else {
                            echo "<th>{$tables17[$j]}</th>"; 
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            };
            if ($_GET['flexible']) {
                echo "<h2>Гибкое сравнение в PHP</h2>";
                echo "<table class='table'>";
                for ($i=0; $i < 9 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < 9; $j++) {
                        if ($i === 0) {
                            echo "<th>{$tables0[$j]}</th>"; 
                        }
                        elseif ($i === 1) {
                            echo "<th>{$tables1[$j]}</th>"; 
                        }
                        elseif ($i === 2) {
                            echo "<th>{$tables2[$j]}</th>"; 
                        }
                        elseif ($i === 3) {
                            echo "<th>{$tables3[$j]}</th>"; 
                        }
                        elseif ($i === 4) {
                            echo "<th>{$tables4[$j]}</th>"; 
                        }
                        elseif ($i === 5) {
                            echo "<th>{$tables5[$j]}</th>"; 
                        }
                        elseif ($i === 6) {
                            echo "<th>{$tables6[$j]}</th>"; 
                        }
                        elseif ($i === 7) {
                            echo "<th>{$tables7[$j]}</th>"; 
                        }
                        else {
                            echo "<th>{$tables8[$j]}</th>"; 
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            };
            if ($_GET["true"]) {
                echo "<h2>Таблица истинности PHP</h2>";
                echo "<table class='table'>";
                for ($i=0; $i < 5 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < 6; $j++) {
                        if ($i === 0) {
                            echo "<th>{$tables18[$j]}</th>"; 
                        }
                        elseif ($i === 1) {
                            echo "<th>{$tables19[$j]}</th>"; 
                        }
                        elseif ($i === 2) {
                            echo "<th>{$tables20[$j]}</th>"; 
                        }
                        elseif ($i === 3) {
                            echo "<th>{$tables21[$j]}</th>"; 
                        }
                        else {
                            echo "<th>{$tables22[$j]}</th>"; 
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            };
            if ($_GET["history"]) {
                echo "<h2>История логотипа</h2>";
                echo "<p>В далеком 1998 году на заре становления всемирной паутины, большинство сайтов были статичными. Лишь немногие форумы и гостевые книги предлагали какое-то минимальное взаимодействие с пользователем. В это время один из создателей языка PHP, Франсуа Бюффьер, представил свое творение своему другу, французскому дизайнеру Винсенту Понтье. Франсуа Бюффьер попросил разработать логотип для нового языка программирования. Так появился первый логотип PHP с синим овалом и черной обводкой...</p>";
                $a = "<img class='img1' src='http://pngimg.com/uploads/php/php_PNG35.png'>";
                echo $a;
            };
        ?>
    </div>
</body>
</html>