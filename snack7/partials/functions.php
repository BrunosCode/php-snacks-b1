<?php 
function randMarks($marksLength) {
    $marks = [];
    for ($i = 0; $i < $marksLength; $i++){
        array_push($marks, rand(0, 10));
    }
    return $marks;
}

function randName($names) {
    return $names[rand(0, count($names) - 1)];
}

function randStudents($studentsLength, $names, $surnames, $marksLength ) {
    $students = [];
    for ($i = 0; $i < $studentsLength; $i++){
        array_push($students,
            [ 
                "name" => randName($names), 
                "surname" => randName($surnames),
                "marks" => randMarks($marksLength)
            ]
        );
    }
    return $students;
}

function average($marks) {
    $sum = 0;
    foreach($marks as $mark) {
        $sum += $mark;
    }
    $average = $sum / count($marks);
    return $average;
}
?>