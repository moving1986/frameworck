<div class="second-header">
    <div class="container">
        <h1>Регистрация на сайте</h1>
    </div>
</div>
<div class="container">

    <form class="row g-3 mt-40" method="post">

        <div class="col-md-6 offset-md-3">
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?= get_filed_valie('email') ?>" required>
                <label class="required" for="email">E-mail адрес</label>
            </div>
        </div>

        <div class="col-md-6 offset-md-3">
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                <label class="required"  for="password">Пароль</label>
            </div>
        </div>

        <div class="col-md-6 offset-md-3">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?= get_filed_valie('name') ?>" required>
                <label class="required" for="name">Ваше имя</label>
            </div>
        </div>



        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn moreBottomWorckers">Регистрация</button>
        </div>
    </form>
    <?php

    if (isset($_SESSION['form_data'])) {
        unset($_SESSION['form_data']);
    }
    ?>


</div>