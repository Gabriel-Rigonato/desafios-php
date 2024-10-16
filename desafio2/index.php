<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 2</title>
</head>

<body>
   <h2>Verificando a maior palavra na frase: </h2>

   <form action="" method="post">
      <label for="text">Digite uma frase:</label>
      <input type="text" id="text" name="text">
      <button type="submit">Enviar</button>
   </form>

   <div id="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         if (!empty($_POST['text'])) {

            $text = $_POST['text'];

            $biggestWord = "";

            $splitText = explode(' ', $text);

            for ($i = 0; $i < count($splitText); $i++) {
               $word = $splitText[$i];

               if (strlen($word) > strlen($biggestWord)) {
                  $biggestWord = $word;
               }
            }
      ?>
            <div class="resultInput">
               <p><?php echo "A maior palavra da sua frase é : " . $biggestWord; ?></p>
            </div>
         <?php } else {
         ?>

            <div class="error">
               <p>A palavra ou frase não pode ser vazia</p>
            </div>
      <?php
         }
      }
      ?>
   </div>

</body>

</html>