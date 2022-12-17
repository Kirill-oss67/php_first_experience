<!-- <form action="" method="get" enctype="multipart/form-data">
    Имя: <input type="text" name="name" /><br />
    Email: <input type="text" name="email" /><br />
    <input type='file' name='file' /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form> -->

<?php
// echo time();
if ($_COOKIE) {
    var_dump($_COOKIE);
    setcookie('name', '', 1, '/');
} else setcookie('name', 'Marina', time() + 10, '/')




?>