<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Page about me</title>
  <link rel="stylesheet" href="css/feedbacks_style.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet" />
  <meta charset="UTF-8" />
</head>

<body>
  <div class="form">
    <form action="feedbacks.php" method="POST">
      <label class="paragraph">
        Введите email пользователя
      </label>
      <input type="email" name="email" class="text_input" value="<?php echo $args['enterEmail'] ?? ''; ?>" required /> <br />
      <input type="submit" value="Отправить" class="green_button submit_button" />
    </form>
  </div>
  <?php
  if (isset($args['success'])):
    if ($args['success']):
      echo '<pre class="data_list">';
        echo $args['data'];
      echo '</pre>';
    endif ;
    if (!($args['success'])):
      echo '<h4 class="error_search">Такого пользователя не существует</h4>';
    endif;
  endif ;?>
</body>

</html>