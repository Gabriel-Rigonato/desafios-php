<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 7</title>
</head>


<?php
function someNumbers($number1, $number2)
{

   $result = $number1;

   if ($number2 < $number1) {
      return 0;
   }

   if ($number2 === $number1) {
      return 1;
   }

   for ($i = $number1 + 1; $i <= $number2; $i++) {
      $result += $i;
   }

   return $result;
}
?>

<body>
   <h2>Somando números entre os valores digitados: </h2>


   <form action="" method="post">
      <label for="number">Digite o primeiro valor:</label>
      <input type="number" id="number1" name="number1">
      <label for="number">Digite o segundo valor:</label>
      <input type="number" id="number2" name="number2">
      <button type="submit">Enviar</button>
   </form>

   <div id="result">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         if (!empty($_POST['number1']) && !empty($_POST['number2'])) {

            $number1 = $_POST['number1'];

            $number2 = $_POST['number2'];

            $result = someNumbers(intval($number1), intval($number2));

      ?>
            <div class="resultInput">
               <p><?php echo "O resultado da soma entre os números é: " . $result; ?></p>
            </div>

         <?php
         } else { ?>

            <div class="error">
               <p>O numero 1 ou 2 não pode ser vazio</p>
            </div>

      <?php
         }
      }
      ?>
   </div>

</body>

</html>