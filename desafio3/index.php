<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 3</title>
</head>

<body>
   <h2>Somando os números digitados: </h2>


   <form action="" method="post">
      <label for="number">Digite um número:</label>
      <input type="number" id="number" name="number">
      <button type="submit">Enviar</button>
   </form>

   <div id="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         if (!empty($_POST['number'])) {

            $number = $_POST['number'];

            $counter = 0;

            $splitNumbers = str_split($number);

            for ($i = 0; $i < count($splitNumbers); $i++) {
               $number = $splitNumbers[$i];

               $counter = $counter + intval($number);
            }

      ?>
            <div class="resultInput">
               <p><?php echo "A soma dos números digitados é : " . $counter; ?></p>
            </div>

         <?php } else {
         ?>

            <div class="error">
               <p>É necessário digitar um número.</p>
            </div>

      <?php
         }
      }
      ?>
   </div>

</body>

</html>