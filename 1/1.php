<?php

$name ="Muhammad Khayxin";
$address="Tarakan, Kalimantan Utara";
$hobbies =array("Make something", "Programming", "Create some motion");
$is_married=false;

$school = ["highSchool" => "SMK Telkom Purwokerto", "University" => "-"];

$skills =["Web" => ["CSS", "HTML", "JavaScript", "Php"],"Mobile Development" => ["Android Studio"]];

function datadiri($name, $address, $hobbies, $is_married, $school, $skills){
    return json_encode(
        array(
            "name" => $name,
            "address" => $address,
            "hobbies"=> $hobbies,
            "is_married"=>$is_married,
            "school" => $school,
            "skills" => $skills
    ),JSON_PRETTY_PRINT);
}


echo datadiri($name, $address, $hobbies, $is_married, $school, $skills);