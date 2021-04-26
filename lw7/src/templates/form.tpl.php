        <div class="form-block">
        <div class="write-me-head"><div class="gray-line"></div><div class="write-me-text">НАПИШИ МНЕ</div><div class="gray-line"></div></div>
        <?php if($args['success']){ ?><div class="success-message">Успешно отправлено!</div><?php } ?>
        <form method="POST" class="form">
            <p>
                <label for="name" class="form-text">Ваше имя<span class="required-field"> * <?php echo $args['err_name'] ? ' - Invalid data' : '' ?></span></label>
            </p>
            <input type="text" id="name" name="name" value="<?php echo $args['name'] ?? ''; ?>" required class="input-box"/>
            <p>
                <label for="email" class="form-text">Ваш email<span class="required-field"> * <?php echo $args['err_email'] ? ' - Invalid data' : '' ?></span></label>
            </p>

            <input type="email" id="email" name="email" value="<?php echo $args['email'] ?? ''; ?>" required class="input-box"/>
            <p>
                <label for="country" class="form-text">Откуда вы?</label>
            </p>
            <select name="country" id="country" class="select-box">
              <option value="none" class="input_text">Select...</option>
              <?php
              require __DIR__ . '/../utils/vars.php';
              foreach($countries as $tag => $name)
              echo("<option value=\"".$tag."\" ".($args['country'] == $tag ? 'selected': '')." class=\"input_text\">".$name."</option>");
              ?>
            </select>
            <p class="form-text">Ваш пол</p>
            <input type="radio" id="male" name="gender" value="male" checked>
            <label for="male" <?php $args['gender'] == 'male' ? 'checked' : '' ?> class="form-text">Мужской</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" <?php $args['gender'] == 'female' ? 'checked' : '' ?> class="form-text">Женский</label>
            <p>
                <label for="message" class="form-text">Ваше сообщение<span class="required-field"> * <?php echo $args['err_message'] ? ' - Invalid data' : '' ?></span></label>
            </p>
            <textarea name="message" required id="message" class="message-box"><?php echo $args['message'] ?? ''; ?></textarea>
            <p>
                <input type="submit" value="Отправить" class="submit">
            </p>
        </form>
    </div>