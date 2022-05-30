<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Лабораторные работы</title>
    <link rel = "stylesheet" href = "/styles/style.css">
    <script type = "text/javascript" src = "/scripts/lab3script.js"></script>
</head>
<body>
<h1>Лабораторная работа №4</h1>
<form method="post">
    <textarea style = "width: 220px; height: 123px;" id="matrix" name = "matrix" placeholder="1 0 1
0 0 0
0 1 0"><?=$_POST['matrix']?></textarea><br>
    Начальная позиция <input style = "width: 80px;" type = "text" name = "start" placeholder="0" value = '<?= $_POST[start]?>'><br>
    Конечная позиция <input style = "width: 80px; margin-left: 8px" type = "text" name = "finish" placeholder="1" value = '<?= $_POST[finish]?>'><br>
    <input type="submit" value="Рассчитать">
</form>


<?php
global $start, $finish, $matrix;


function get_matrix()
{
    $matrix = explode("\r\n", trim($_POST[matrix], " "));
    for ($i = 0; $i < count($matrix); $i++) {
        $matrix[$i] = explode(" ", $matrix[$i]);
        if (count($matrix) != count($matrix[$i])) {
            exit('Матрица не квадаратная!');
        }
    }
    return $matrix;
}


function search()
{
    global $start, $matrix, $finish;

    for ($i = 0; $i < count($matrix); $i++) {
        $used[$i] = PHP_INT_MAX;
    }

    $currentpos = $start;
    $index[0] = $start;
    $used[$currentpos] = 0;


    while (!$end) {

    	if($start == $finish){
    		$result = "Указана петля с весом = ". $matrix[$start][$finish];
    		break;
    	}

        for ($i = 0; $i < count($matrix); $i++) {
            if((array_count_values($matrix[$start]))[0] == count($matrix)){
                exit('Из данной точки никуда не дойти!');
            }
            elseif ($matrix[$currentpos][$i] != '0') {
                $temp = $used[$currentpos] + $matrix[$currentpos][$i];
                if ($used[$i] > $temp) {
                    $used[$i] = $temp;
                }
            }
        }

        $currentpos = 0;
        $end = true;
        $shortpath = PHP_INT_MAX;
        for ($i = 0; $i < count($matrix); $i++) {
            $isDone = false;
            for ($j = 0; $j < count($index); $j++) {
                if ($i == $index[$j]) {
                    $isDone = true;
                }
            }
            if (!$isDone) {
                if ($shortpath > $used[$i]) {
                    $shortpath = $used[$i];
                    $currentpos = $i;
                    array_push($index, $currentpos);
                    $end = false;
                }
            }
        }
    }
    if (empty($result) && !isset($result)) {
        $result = $used[$_POST[finish]];
        if ($result == PHP_INT_MAX) {
            $result = "Граф ориентированый. Путь в эту сторону отсутствует!";
        }
    }
    return $result;
}


$start = $_POST[start];
$finish = $_POST[finish];
$matrix = get_matrix();
print_r('<br> Кратчайший путь: ' . search());

?>

</body>
</html>