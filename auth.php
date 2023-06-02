<h1>Авторизация</h1>
<form method="POST" action="?login">
    <div class="row">
        <lable for="email">Email:</lable>
        <input name="email" id="email" autocomplete="off">
    </div>
    <div class="row">
        <label for="pass">Пароль</label>
        <input type="password" name="pass" id="pass">
    </div>
    <div class="row">
        <a href="?recovery">Восстановить пароль</a>
        <a href="?signup">Регистрация</a>
    </div>
    <div class="row">
        <input type="submit">
    </div>
    </form>