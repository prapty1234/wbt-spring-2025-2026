<?php

// DEFAULT VALUES (prevents all warnings)
$name = $email = $website = $comment = $gender = "";
$phone = $department = $dob = $project = "";
$skills = [];

$nameErr = $emailErr = $websiteErr = $genderErr = "";
$phoneErr = $departmentErr = $projectErr = "";

// CLEAN FUNCTION
function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// FORM PROCESS
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // NAME
    if (empty($_POST["name"])) {
        $nameErr = "Name required";
    } else {
        $name = clean($_POST["name"]);
    }

    // EMAIL
    if (empty($_POST["email"])) {
        $emailErr = "Email required";
    } else {
        $email = clean($_POST["email"]);
    }

    // PHONE
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone required";
    } else {
        $phone = clean($_POST["phone"]);
    }

    // DEPARTMENT
    if (empty($_POST["department"])) {
        $departmentErr = "Select department";
    } else {
        $department = clean($_POST["department"]);
    }

    // DOB
    if (!empty($_POST["dob"])) {
        $dob = clean($_POST["dob"]);
    }

    // WEBSITE
    if (!empty($_POST["website"])) {
        $website = clean($_POST["website"]);
    }

    // PROJECT
    if (empty($_POST["project"])) {
        $projectErr = "Select project";
    } else {
        $project = clean($_POST["project"]);
    }

    // SKILLS
    if (!empty($_POST["skills"])) {
        $skills = $_POST["skills"];
    }

    // COMMENT
    if (!empty($_POST["comment"])) {
        $comment = clean($_POST["comment"]);
    }

    // GENDER
    if (empty($_POST["gender"])) {
        $genderErr = "Select gender";
    } else {
        $gender = clean($_POST["gender"]);
    }
}