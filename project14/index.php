<!DOCTYPE html>
<html>
<head>
    <title>My Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <?php include 'source.php'; ?>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="border: 6px solid gray; padding: 10px;width:80%" class="container">
        <!-- Basic Information -->
        <h2>Basic Information</h2><hr>
        <div class="form-grid">
            <div>
                <?php
                foreach ($bilabels as $name => $label) {
                    echo "<label for='$name' " . ($name === 'gender' ? "class='gd'" : "") . ">$label:</label><br>";
                }
                ?>
            </div>
            <div>
                <input type="text" name="employee_id" id="employee_id" value="123" readonly class="inp"><br>
                <input type="text" name="last_name" id="last_name" value="Doe" readonly class="inp"><br>
                <input type="text" name="first_name" id="first_name" required class="inp"><br>
                <div>
                    <?php
                    foreach ($Gender as $gender => $value) {
                        echo '<input type="radio" name="gender" id="' . $gender . '" value="' . $gender . '">';
                        echo '<label style="margin:0" for="' . $gender . '">' . $value . '</label>';
                        echo '<br>';
                    }
                    ?>
                </div>
                <input type="text" name="title" id="title" class="inp"><br>
                <input type="text" name="suffix" id="suffix" class="inp"><br>
                <input type="datetime-local" name="birthdate" id="birthdate" value="1969-11-15T00:00:00" class="inp"><br>
                <input type="datetime-local" name="hiredate" id="hiredate" value="1969-11-15T00:00:00" class="inp"><br>
                <input type="text" name="ssn" id="ssn" class="inp"><br>
                <select name="reports_to" id="reports_to" class="inp">
                    <?php
                    foreach ($employees as $employee) {
                        echo "<option value='" . $employee . "'>" . $employee . "</option>";
                    }
                    ?>
                </select><br>
            </div>
        </div>

        <!-- Contact Information -->
        <h2>Contact Information</h2><hr>
        <div class="form-grid">
            <div>
                <?php
                foreach ($cilabels as $name => $label) {
                    echo "<label for='$name'>$label:</label><br>";
                }
                ?>
            </div>
            <div>
                <input type="email" name="email" id="email" required class="inp" placeholder="example@example.com"><br>
                <input type="tel" name="phone" id="phone" required class="inp"><br>
                <input type="text" name="address" id="address" class="inp"><br>
                <input type="text" name="city" id="city" class="inp"><br>
                <input type="text" name="region" id="region" class="inp"><br>
                <input type="text" name="postcode" id="postcode" class="inp"><br>
                <select name="country" id="country" class="inp" style="height:35px;margin-bottom:30px">
                    <?php
                    foreach ($countries as $country) {
                        echo "<option value='$country'>$country</option>";
                    }
                    ?>
                </select>
                </select><br>
                <input type="text" name="us_home_phone" id="us_home_phone" class="inp"><br>
                <input type="text" name="photo" id="photo" class="inp"><br>
            </div>
        </div>

        <!-- Optional Information -->
        <h2>Optional Information</h2><hr>
        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation" id="occupation">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
