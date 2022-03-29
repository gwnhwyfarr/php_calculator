<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<?php
$result = '';
if($_POST){
  $first_num = $_POST['first_num'];
  $second_num = $_POST['second_num'];
  $operator = $_POST['operator'];
  if (is_numeric($first_num) && is_numeric($second_num)) {
      switch ($operator) {
          case "Add":
             $result = $first_num + $second_num;
              break;
          case "Subtract":
             $result = $first_num - $second_num;
              break;
          case "Multiply":
              $result = $first_num * $second_num;
              break;
          case "Divide":
              $result = $first_num / $second_num;
      }
  }
}

?>

<body>
    <div id="page-wrap">
        <h1>Projetinho</h1>
	  <form action="" method="post" id="quiz-form">

            <b>Primeiro Valor</b>

            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" />
            </p>

            <b>Segundo Valor</b>

            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />
            </p>

            <b>Resultado</b>

            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>">
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>
