<?php require_once "contact_process.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

<h2>Student Registration</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    !$nameErr && !$emailErr && !$phoneErr && !$departmentErr && !$projectErr && !$genderErr) {
    echo "<p class='success'>Registration Successful!</p>";
}
?>

<p><span class="required">* required field</span></p>

<form method="post" action="">
    <table class="form-table">

        <tr>
            <td>Name *</td>
            <td>
                <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
                <span class="error"><?= $nameErr ?></span>
            </td>
        </tr>

        <tr>
            <td>Email *</td>
            <td>
                <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
                <span class="error"><?= $emailErr ?></span>
            </td>
        </tr>

        <tr>
            <td>Phone *</td>
            <td>
                <input type="text" name="phone" value="<?= htmlspecialchars($phone) ?>">
                <span class="error"><?= $phoneErr ?></span>
            </td>
        </tr>

        <tr>
            <td>Department *</td>
            <td>
                <select name="department">
                    <option value="">Select Department</option>
                    <option value="CSE" <?= ($department=="CSE")?"selected":"" ?>>CSE</option>
                    <option value="EEE" <?= ($department=="EEE")?"selected":"" ?>>EEE</option>
                    <option value="BBA" <?= ($department=="BBA")?"selected":"" ?>>BBA</option>
                </select>
                <span class="error"><?= $departmentErr ?></span>
            </td>
        </tr>

        <tr>
            <td>Date of Birth</td>
            <td>
                <input type="date" name="dob" value="<?= htmlspecialchars($dob) ?>">
            </td>
        </tr>

        <tr>
            <td>Website</td>
            <td>
                <input type="text" name="website" value="<?= htmlspecialchars($website) ?>">
                <span class="error"><?= $websiteErr ?></span>
            </td>
        </tr>

        <tr>
            <td>Project *</td>
            <td>
                <input type="radio" name="project" value="Android App"
                <?= ($project=="Android App")?"checked":"" ?>> Android App

                <input type="radio" name="project" value="Web App"
                <?= ($project=="Web App")?"checked":"" ?>> Web App

                <input type="radio" name="project" value="AI Project"
                <?= ($project=="AI Project")?"checked":"" ?>> AI Project

                <br>
                <span class="error"><?= $projectErr ?></span>
            </td>
        </tr>

        <tr>
            <td>Skills</td>
            <td>
                <input type="checkbox" name="skills[]" value="Java"
                <?= (is_array($skills) && in_array("Java",$skills))?"checked":"" ?>> Java

                <input type="checkbox" name="skills[]" value="PHP"
                <?= (is_array($skills) && in_array("PHP",$skills))?"checked":"" ?>> PHP

                <input type="checkbox" name="skills[]" value="JavaScript"
                <?= (is_array($skills) && in_array("JavaScript",$skills))?"checked":"" ?>> JavaScript
            </td>
        </tr>

        <tr>
            <td>Comment</td>
            <td>
                <textarea name="comment"><?= htmlspecialchars($comment) ?></textarea>
            </td>
        </tr>

        <tr>
            <td>Gender *</td>
            <td>
                <input type="radio" name="gender" value="female"
                <?= ($gender=="female")?"checked":"" ?>> Female

                <input type="radio" name="gender" value="male"
                <?= ($gender=="male")?"checked":"" ?>> Male

                <input type="radio" name="gender" value="other"
                <?= ($gender=="other")?"checked":"" ?>> Other

                <span class="error"><?= $genderErr ?></span>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Register"></td>
        </tr>

    </table>
</form>

</body>
</html>