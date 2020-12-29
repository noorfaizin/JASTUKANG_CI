<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
      .active{
        background-color: black;
      }
    </style>
  </head>
  <body>
    <?php foreach ($data['data'] as $row) : ?>
      <h1><?php echo $row['namapemesan']; ?></h1>
    <?php endforeach ?>

    <hr>

    <a href="?page=<?php echo $data['prev'] . '' . $data['search']?>"> << </a>

    <?php for ($i=1; $i <= $data['page']; $i++) { ?>
      <a class="<?php ($i == (int)$_GET['page'])? 'active': '' ?>" href="?page=<?php echo $i . '' . $data['search']?>"><?php echo $i ?></a>
    <?php } ?>

    <a href="?page=<?php echo $data['next'] . '' . $data['search']?>"> >> </a>
  </body>
</html>
