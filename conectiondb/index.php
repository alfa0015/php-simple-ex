<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php echo getenv('DB_SERVICE_NAME')?>
    </p>
    <p>
      <?php echo getenv('DB_CONNECTION')?>
    </p>
    <p>
      <?php echo getenv('DB_DATABASE')?>
    </p>
    <p>
      <?php echo getenv('DB_USERNAME')?>
    </p>
    <p>
      <?php echo getenv('DB_PASSWORD')?>
    </p>
  </body>
</html>
