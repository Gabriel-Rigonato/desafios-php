<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Desafio 4</title>
</head>

<body>
   <h2>Listando números e substituindo se divisível: </h2>



   <form action="" method="post">
      <label for="number">Digite um número:</label>
      <input type="number" id="number" name="number">
      <button type="submit">Enviar</button>
   </form>

   <div id="result">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         $output = "";

         if (!empty($_POST['number'])) {

            $number = $_POST['number'];

            $splitNumbers = str_split($number);

            $output = "";

            for ($i = 1; $i <= intval($number); $i++) {

               if ($i % 5 == 0 && $i % 3 == 0) {
                  $output .= ",Hello World";
               } else if ($i % 3 == 0) {
                  $output .= ",Hello";
               } else if ($i % 5 == 0) {
                  $output .= ",World";
               } else if ($i !== 1) {
                  $output .= "," . $i;
               } else {
                  $output .=  $i;
               }
            }

      ?>
            <div class="resultInput">
               <p><?php echo  $output; ?></p>
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