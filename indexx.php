<?php
//created an array of numbers 1 through 50
$numbers = range(1, 50);

//looping through numbers
$evenNumbersArray = [];
foreach ($numbers as $num) {
    if ($num % 2 === 0) {
        $evenNumbersArray[] = $num;
    }
}
$evenNumbers = implode(" - ", $evenNumbersArray);

//bootstrap heredoc
$form = <<<HTML
<form>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="name@example.com" />
  </div>
  <div class="mb-3">
    <label for="exampleTextarea" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
</form>
HTML;

//created table
function createTable(int $rows, int $columns): string {
    $table = '<table class="table table-bordered">';
    for ($r = 1; $r <= $rows; $r++) {
        $table .= '<tr>';
        for ($c = 1; $c <= $columns; $c++) {
            $table .= "<td>Row $r, Col $c</td>";
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>PHP Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container">
    <?php
        echo $evenNumbers;
        echo $form;
        echo createTable(8, 6);
    ?>
</body>
</html>
