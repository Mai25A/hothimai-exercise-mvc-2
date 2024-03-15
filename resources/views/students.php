<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <h2>List of students:  </h2>
    <ul>
    <?php
    // for ($i = 1; $i <= count($students); $i++) {
    //     echo $students[$i]['name'] . " in class " . $students[$i]['class'] . " is " . $students[$i]['age'].'</br';
    // }
    foreach($students as $student){
        echo '<li>'.$student['name']." in class ".$student['class']." is ".$student['age'].'</li></br>';
    }
    ?>
    </ul>
</body>

</html>