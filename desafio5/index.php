<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 5</title>
</head>

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

            $word = $_POST['word'];

            $output = $word;

            $word = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $word));

            $wordReverted = strrev($word);

            if ($wordReverted === $word) {
               echo "$output é um palíndromo";
            } else {
               echo "$output não é um palíndromo";
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