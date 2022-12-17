<form action="" method="get" enctype="multipart/form-data">
    Имя: <input type="text" name="name" /><br />
    Email: <input type="text" name="email" /><br />
    <input type='file' name='file' /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>
<?php

// echo "<br>";
function world(){
    if($_GET['name'] === 'kirill'){
    $_GET['name'] .= '_yakov';}
    echo $_GET['name'];

}

if($_GET['name'] ) world();
echo "<br>";

// if ($_REQUEST) var_dump($_REQUEST);
// echo "<br>";
// if ($_FILES) var_dump($_FILES);
?>
<br>

<?php
// echo $_POST['name'];

?>