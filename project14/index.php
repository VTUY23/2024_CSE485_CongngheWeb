<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
    <style>
        body {
            background-color: whitesmoke;
            font-family: Calibri;
        }

        form {
            margin: 0px auto 150px;
            width: 600px;
            background-color: white;
            padding: 15px;
            box-sizing: border-box;
        }

        h2 {
            border-bottom: 1px solid;
            margin-bottom: 10px;
        }

        form>div {
            display: grid;
            margin: 0px 20px;
            grid-template-columns: 160px auto;
        }

        form>div>* {
            margin: 5px 0px;
            box-sizing: border-box;
        }

        h3 {
            display: flex;
            align-items: center;
        }

        input[type="text"] {
            height: 30px;
        }

        select {
            height: 30px;
            width: 150px;
            border-radius: 5px;
        }

        form>div:last-child {
            margin: 0px;
            display: flex;
            margin-left: 450px;
            gap: 10px;
        }
    </style>
</head>

<body>
    <?php
    $titItems = [
        "Employee ID", "Last Name", "First Name", "Gender", "Title", "Suffix",
        "BirthDate", "HireDate", "SSN # (if applicable)", "Reports To",
        "Email", "Address", "City", "Region", "Prostal Code", "Country", "US Home Phone", "Photo",
        "Notes", "Preferred Shift", "Active?", "Are you human?"
    ];
    $genItems = ["Male", "Female", "XXX", "ZZZ"];
    $countries = array(
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );
    echo '<form action=""><h2>Basic Info</h2><div>';
    for ($i = 1; $i < 22; $i++) {
        if ($titItems[$i] == "Email")
            echo "</div><h2>Contact Info</h2><div>";
        else if ($titItems[$i] == "Notes")
            echo "</div><h2>Optional Info</h2><div>";
        echo "<h3>$titItems[$i]</h3>";
        if ($titItems[$i] == "Gender") {
            echo "<div>";
            foreach ($genItems as $item)
                echo '<input type="radio" id="' . $item . '" name="' . $titItems[$i] . '" value="'
                    . $item . '"><label for="' . $item . '">' . $item . '</label><br>';
            echo "</div>";
        } else if ($titItems[$i] == "Reports To") {
            echo '<select name="' . $titItems[$i] . '" id="">';
            foreach ($genItems as $item)
                echo '<option value="' . $item . '">' . $item . '</option>';
            echo '</select>';
        } else if ($titItems[$i] == "Country") {
            echo '<select name="' . $titItems[$i] . '" id="">';
            foreach ($countries as $item)
                echo '<option value="' . $item . '">' . $item . '</option>';
            echo '</select>';
        } else if ($titItems[$i] == "Preferred Shift") {
            echo '<div><input type="checkbox" id="" name="' . $titItems[$i] . '" value="Regular">
            <label for="Regular">Regular</label><br>
            <input type="checkbox" id="" name="' . $titItems[$i] . '" value="Gravy Yard">
            <label for="Gravy Yard">Gravy Yard</label><br></div>';
        } else if ($titItems[$i] == "Active?")
            echo '<div><input type="checkbox" id="" name="' . $titItems[$i] . '" value="active">
            <label for="active"></label><br></div>';
        else if ($titItems[$i] == "Notes")
            echo '<textarea id="editor" name="' . $titItems[$i] . '" rows="10" cols=""></textarea>';
        else
            echo "<input type=" . '"text"' . " name='{$titItems[$i]}'>";
    }
    echo '</div><h2></h2><div><input type="submit" value="Submit"><input type="reset" value="Reset">
    </div></form><script>CKEDITOR.replace("editor", {height: "150px"});</script>';
    ?>
</body>

</html>