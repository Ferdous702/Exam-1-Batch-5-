<?php 


function calculateResult($marks) {
    $totalMarks = 0;
    $subjectCount = count($marks);
    echo "Total subjects ".$subjectCount."\n";
    
   

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        }
        if ($mark < 33) {
            echo "Student failed in one or more subjects.";
            return;
        }
        $totalMarks += $mark;
    }
    

    $averageMarks = $totalMarks / $subjectCount;
    
    
    switch ($averageMarks) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }
    
  
    
    echo "Total Marks: " . $totalMarks . "\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: " . $grade . "\n";
}




$marks = [50, 60, 40, 80]; 

calculateResult($marks);





?>
