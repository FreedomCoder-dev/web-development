<div class="container">
  <h2 class="form_head">Напиши мне</h2>
  <div class="form">
    <form action="index.php" method="POST">
      <label for="input_name" class="paragraph">
        Ваше имя<span class="star">*</span>
        <span class="error_message">
          <?php if (isset($args['name_error_msg'])):
            echo $args['name_error_msg'];
          endif; ?>
        </span></br>
      </label>
      <input type="text" name="name" id='input_name' value="<?php echo $args['name'] ?? ''; ?>" class="text_input"/><br />
      <label for="input_email" class="paragraph">
        Ваш email<span class="star">*</span>
        <span class="error_message">
          <?php if (isset($args['email_error_msg'])):
            echo $args['email_error_msg'];
          endif; ?>
        </span></br>
      </label>
      <input type="email" name="email" id="input_email" value="<?php echo $args['email'] ?? ''; ?>" class="text_input"/><br />
      <label class="paragraph" for="input_place">Откуда вы?<br /></label>
      <select class="text_input place" name="place" id="input_place">
        <option>...</option>
        <option <?php if ($args['place'] == 'Россия'): echo 'selected'; endif; ?>>Россия</option>
        <option <?php if ($args['place'] == 'Украина'): echo 'selected'; endif; ?>>Украина</option>
        <option <?php if ($args['place'] == 'США'): echo 'selected'; endif; ?>>США</option>
        <option <?php if ($args['place'] == 'Германия'): echo 'selected'; endif; ?>>Германия</option>
      </select><br />
      <label class="paragraph">Ваш пол<br /></label>
      <input type="radio" name="gender" id="men" class="radio" value="men" <?php if ($args['gender'] == 'Мужской'): echo 'checked'; endif; ?>/>
      <label class="text_input gender" for="men">Мужской</label>
      <input type="radio" name="gender" id="women" class="radio" value="women" <?php if ($args['gender'] == 'Женский'): echo 'checked'; endif; ?>/>
      <label class="text_input gender" for="women">Женский</label><br />
      <label class="paragraph your_message" for="input_message" required>
        Ваше сообщение<span class="star">*</span>
        <span class="error_message">
          <?php if (isset($args['message_error_msg'])):
            echo $args['message_error_msg'];
          endif; ?>
        </span></br>
      </label>
      <textarea class="text_input message" name="message" id="input_message"><?php echo $args['message'] ?? ''; ?></textarea><br />
      <input type="submit" value="Отправить" class="green_button submit_button"/>
    </form>
    <?php
    if (isset($args['success'])):
      if ($args['success']):
        echo "<h3 class='message_success'>Сообщение успешно отправлено</h3>";
      endif ;
      if ((!$args['success'])):
        echo "<h3 class='message_error'>Введены некорректные данные</h3>";
      endif;
    endif; ?>
  </div>
</div>