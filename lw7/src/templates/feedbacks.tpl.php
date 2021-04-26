<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Fbacks list</title>
  <link rel="stylesheet" href="css/feedbacks_style.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet" />
  <meta charset="UTF-8" />
</head>

<body>
  <div class="form-block">
    <form action="feedbacks.php" method="POST">
      <p>
          <label for="email" class="form-text">Введите email<span class="required-field"> * </span></label>
      </p>

      <input type="email" id="email" name="email" value="<?php echo $args['email'] ?? ''; ?>" required class="input-box"/>
      <input type="submit" value="Отправить" class="submit" />
    </form>
  <?php
  if (isset($args['success'])){
    if (isset($args['data'])){
      require __DIR__ . '/../utils/vars.php';
      ?>
      <table>
        <tr>
          <td>Email<td>
          <td><?php echo $args['data']['email'] ?? ''; ?></td>
        </tr>
        <tr>
          <td>Name<td>
          <td><?php echo $args['data']['name'] ?? ''; ?></td>
        </tr>
        <tr>
          <td>Country<td>
          <td><?php echo $countries[$args['data']['country'] ?? ''] ?? '-'; ?></td>
        </tr>
        <tr>
          <td>Gender<td>
          <td><?php echo $args['data']['gender'] ?? ''?></td>
        </tr>
        <tr>
          <td>Message<td>
          <td><?php echo $args['data']['message'] ?? ''; ?></td>
        </tr>
      </table>
      <?php
    }
    else
    {
      echo '<h4 class="failure-message">There wasn\'t such a user</h4>';
    }
  }?>
  </div>
</body>

</html>