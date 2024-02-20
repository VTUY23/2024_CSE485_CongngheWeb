<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
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
        }

        h3 {
            display: flex;
            align-items: center;
        }

        input[type="text"] {
            width: 100%;
            height: 30px;
            box-sizing: border-box;
        }

        select {
            height: 30px;
            width: 150px;
            border-radius: 5px;
        }

        textarea {
            width: 100%;
        }

        form>div:last-child {
            margin: 0px;
            display: flex;
            margin-left: 480px;
            gap: 10px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <?php
    $titItems = [
        "Employee ID", "Last Name", "First Name", "Gender", "Title", "Suffix",
        "BirthDate", "HireDate", "SSN # (if applicable)", "Reports To",
        "Email", "Address", "City", "Region", "Prostal Code", "Country",
        "US Home Phone", "Photo",
        "Notes", "Preferred Shift", "Active?", "Are you human?"
    ];
    $genItems = [
        "Male", "Female", "XXX", "ZZZ"
    ];
    $countries = array(
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin 
    Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );
    echo '<form action=""><h2>Basic Info</h2><div>';
    for ($i = 1; $i < 22; $i++) {
        if ($titItems[$i] == "Email") {
            echo "</div><h2>Contact Info</h2><div>";
        } else if ($titItems[$i] == "Notes") {
            echo "</div><h2>Optional Info</h2><div>";
        }
        echo "<h3>$titItems[$i]</h3><div>";
        if ($titItems[$i] == "Gender") {
            foreach ($genItems as $item) {
                echo '<input type="radio" id="$item" name="gender" value="$item">
                    <label for="$item">' . $item . '</label><br>';
            }
        } else if ($titItems[$i] == "Reports To") {
            echo '<select name="" id="">';
            foreach ($genItems as $item) {
                echo '<option value="$item">' . $item . '</option>';
            }
            echo '</select>';
        } else if ($titItems[$i] == "Country") {
            echo '<select name="" id="">';
            foreach ($countries as $item) {
                echo '<option value="$item">' . $item . '</option>';
            }
            echo '</select>';
        } else if ($titItems[$i] == "Preferred Shift") {
            echo '<input type="checkbox" id="" name="" value="Regular">
            <label for="Regular">Regular</label><br>
            <input type="checkbox" id="" name="" value="Gravy Yard">
            <label for="Gravy Yard">Gravy Yard</label><br>';
        } else if ($titItems[$i] == "Active?") {
            echo '<input type="checkbox" id="" name="" value="active">
            <label for="active"></label><br>';
        } else if ($titItems[$i] == "Notes") {
            echo '<textarea id="" name="" rows="10" cols="50"></textarea>';
        } else {
            echo "<input type=" . '"text"' . ">";
        }
        echo "</div>";
    }
    echo '</div><h2></h2><div><input type="submit" value="Submit">
    <input type="reset" value="Reset"></div></form>';
    ?>
</body>

</html>