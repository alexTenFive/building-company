<?php include ROOT . '/layouts/header.php'; ?>


    <!-- Header -->
    <header>
        <div class="container auth-form" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul class="list-group">
                            <?php foreach ($errors as $error): ?>
                                <li class = 'list-group-item-danger'> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <form class="form-horizontal" method="POST" action="/registration">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="cname">Имя:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="Введите имя" value="<?= $cname; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="login">Логин:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" value="<?= $login; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="password">Пароль:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" value="<?= $password; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="re_password">Повторите пароль:</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Введите пароль" value="<?= $re_password; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="phone">Телефон:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="+38(067)194-87-42" value="<?= $phone; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="address">Адрес:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Введите адрес" value="<?= $address; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="cicode">Введите ИНН:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="cicode" id="cicode" placeholder="Введите пароль" value="<?= $cicode; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-md-offset-2" for="password">Тип:</label>
                        <div class="col-md-5">
                            <select class="form-control selectpicker" name="ctype">
                                <option value="Юридическое лицо" selected>Юридическое лицо</option>
                                <option value="Физическое лицо">Физическое лицо</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-6 col-md-3">
                            <button type="submit" name="submit" class="btn btn-default btn-block">Зарегистрироваться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
<?php include ROOT . '/layouts/footer.php'; ?>