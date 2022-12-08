<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 задача Сельков</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="Введите имя">
        <input type="text" name="last_name" placeholder="Введите фамилию">
        <input type="submit">
    </form>
</body>
</html>
<?php
class Person{

    public $first_name, $last_name;

    function hello(){
        if($this->first_name!='' || $this->last_name!=''){
            echo '<br>hello ' . $this->first_name . ' ' .  $this->last_name;
        }
    }

}
$person = new Person();
$person->first_name = $_POST['first_name'];
$person->last_name = $_POST['last_name'];
$person->hello();
?>
