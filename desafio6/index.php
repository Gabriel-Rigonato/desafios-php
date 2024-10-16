<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 6</title>
</head>

<?php
function comparePalindrome($data)
{

   $dataFormatted = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $data));

   $dataReverted = strrev($dataFormatted);

   if ($dataReverted === $dataFormatted) {
      return true;
   } else {
      return false;
   }
}
?>

<body>

   <form action="" method="post">
      <label for="word">Digite uma frase ou palavra:</label>
      <input type="text" id="word" name="word">
      <button type="submit">Enviar</button>
   </form>

   <div id="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         if (!empty($_POST['word'])) {

            $data = $_POST['word'];

            $output = $data;

            $result = comparePalindrome($data);

            if ($result == true) {
               echo "$output é um palíndromo";
            } else {

               $data = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $data));
               // echo $data;
               if (substr_count($data, ' ') > 1) {
                  $arrayData = explode(" ", $data);
               } else {
                  $arrayData = str_split($data);
               }

               $couldBePalindrome =  false;

               for ($i = 0; $i < count($arrayData); $i++) {

                  $letterPosition = $arrayData[$i];

                  $dataFormatted = substr_replace($data, "", $i, 1);

                  $result = comparePalindrome($dataFormatted);

                  if ($result == true) {
                     $couldBePalindrome = true;
                  }
               }

               if ($couldBePalindrome == true) {
                  echo "Pode ser um Palindromo";
               } else {
                  echo "$output não é um palíndromo";
               }
            }
         } else { ?>

            <div>
               <h5>A frase ou palavra não pode ser vazia</h1>
            </div>

      <?php
         }
      }
      ?>
   </div>

</body>

</html>