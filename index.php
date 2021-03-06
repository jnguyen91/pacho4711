<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        #links the student.php
        include('Student.php');

        
        $students = array();

        #create new student named John Doe, email, and grade
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        #create a new student named Albert Einstein with Email and grades
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        #Creating third student named Jeffrey Nguyen, With emails and grade
        #it wil printout the average of the three grades
        #Jeffrey is a horrible student and barely passses his courses
        $third = new Student();
        $third->surname = "Nguyen";
        $third->first_name = "Jeffrey";
        $third->add_email('home','jeffnguyen91@hotmail.com');
        $third->add_email('work1','jnguyen52@my.bcit.ca');
        $third->add_email('work2','jeffrey.nguyen@chatnels.com');
        $third->add_grade(50);
        $third->add_grade(51);
        $third->add_grade(50);
        $students['v231'] = $third;

        #ksort sorts an associative array in ascending order, according to the 
        #key
        
        ksort($students);

        #Will printout the students surname, firstname, emails and average grade
        foreach($students as $student)
             echo $student->toString();
        ?>
    </body>
</html>
