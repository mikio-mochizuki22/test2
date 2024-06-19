<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>何かお話ししてください</p>
  <form method="post">
    <input type="text" name="a">
    <input type="submit" value="送信">
  </form>

  <?php
    $moji = htmlspecialchars($_POST['a'], ENT_QUOTES);
    echo $moji;
  ?>
</body>
</html>