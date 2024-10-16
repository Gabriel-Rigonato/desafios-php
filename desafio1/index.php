<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 1</title>
</head>

<body>
   <h2>Removendo vogais das palavras: </h2>

   <form action="" method="post">
      <label for="word">Digite uma palavra:</label>
      <input type="text" id="word" name="word">
      <button type="submit">Enviar</button>
   </form>

   <div id="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         if (!empty($_POST['word'])) {

            $word = $_POST['word'];

            $newWord = "";

            $splitWord = str_split($word);
            for ($i = 0; $i < count($splitWord); $i++) {

               $letter = $splitWord[$i];

               switch ($letter) {

                  case $letter == 'a' || $letter == 'A':

                     break;
                  case $letter == 'e' || $letter == 'E':

                     break;
                  case $letter ==  'i' || $letter == 'I':
                     break;

                  case $letter == 'o' || $letter == 'O':
                     break;

                  case $letter == 'u' || $letter == 'U':
                     break;

                  default:
                     $newWord .= $letter;
                     break;
               }
            }

      ?>
            <div class="resultInput">
               <p><?php echo "Você digitou: " . $newWord ?></p>
            </div>
         <?php } else { ?>

            <div class="error">
               <p>A palavra não pode ser vazia</p>
            </div>

      <?php
         }
      }
      ?>
   </div>

</body>

</html>