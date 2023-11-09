<?php
//Code use for large codes

?>

<? //Code use for small codes
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //var
    $var = "Vitoria";
    $Var = "Carol";
    //echo    "$var & $Var";

    //array
    $list = array(10, 20, 22.20, 1.99, "Teste");
    //print_r($list);

    ?>
    <?php class People
    {
        public $name = "Vitoria";
        public $age = 25;
        //public $adress = "Rua teste - SP";
        public $gender = "F";

        //Method
        //function printPeople()
        //{
        // return "Name:{$this->name} <br>Age: {$this->age} <br>Adress: {$this->adress}";
        //}
        function makeBirthday($age)
        {
            $this->age + 1;
        }
    }

    class Student extends People
    {
        public $code = 1;
        public $course = "Full Stack";

        function cancelCode($code)
        {
            $this->code = null;
        }
    }

    //Instance class
    $people = new People();
    $student = new Student();

    print_r($people);
    ?>
</body>

</html>