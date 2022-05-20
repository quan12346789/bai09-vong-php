<?php
$number = array(1, 2, 3, 4, 5);

foreach ($number as $value) {
    echo "Value is $value <br>";
}

$number[0] = "one";
$number[1] = "two";
$number[2] = "three";
$number[3] = "four";
$number[4] = "five";

foreach ($number as $value) {
    echo "Value is $value <br>";
}
?>

<?php
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500
);

echo "Salary of mohammad is " . $salaries['mohammad'] . "<br>";
?>
<?php
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);
echo "Marks for mohammad in physics : ";
echo $marks['mohammad']['physics'] . "<br>";
?>