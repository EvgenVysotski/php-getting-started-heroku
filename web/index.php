<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
  <p>text: <?php echo htmlspecialchars($_GET['text']); ?></p>
  <p>text: <?php echo htmlspecialchars($_GET['textarea']); ?></p>
  <p>text: <?php echo htmlspecialchars($_GET['sel']); ?></p>
  <p>text: <?php echo htmlspecialchars($_GET['check']); ?></p>
    <p>text: <?php echo htmlspecialchars($_GET['color']); ?></p>
  
    <p>Try again? <a href="/index.php">Yes!</a></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"><br>
    <label for="text">Текст однострочный:</label>
       <input id="text" name="text" type="text"><br>
     <label for="t1">Многострочный текст</label><textarea id="t1" name="textarea"></textarea><br>
      <p><label for="my_select">select</label><select id="my_select" name="sel"><option value="">---------</option><option value="1">первая</option><option value="2" selected>вторая</option> </select> </p><br>
      <p><label for="my_checkbox">checketbox:</label><input type="checkbox" name="check" id="my_checkbox" checked value="yes"> </p><br>
      <p><label for="my_color">color:</label><input type="color" id="my_color" name="color"></p>
    
    </p> 
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>
