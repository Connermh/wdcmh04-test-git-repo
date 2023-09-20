<html>
    <p>
        Below are text inputs. By default, they are 20 characters long at max.
        <form method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
        </form>

        <br>Below are some radio buttons.<br><br>

        Choose your favorite web language:
        <form method="post">
            <input type="radio" id="html" name="favlanguage" value="html">
            <label for="html">HTML</label><br>
            <input type="radio" id="css" name="favlanguage" value="css">
            <label for="css">CSS</label><br>
            <input type="radio" id="javascript" name="favlanguage" value="javascript">
            <label for="javascript">Javascript</label><br>
        </form>

        <br>Below are some checkboxes<br>
        <form action="playground-results.php" method="post">
            <input type="checkbox" id="vehicle[]" name="vehicle[]" value="bike"> <!-- Input type checkbox for array named vehicle, element name vehicle, value of bike -->
            <label for="vehicle[]">I have a bike</label><br> <!-- Label for the previous input. Tied together with the "for" with the actual text on the label -->
            <input type="checkbox" id="vehicle[]" name="vehicle[]" value="car">
            <label for="vehicle[]">I have a car</label><br>
            <input type="checkbox" id="vehicle[]" name="vehicle[]" value="boat">
            <label for="vehicle[]">I have a boat</label>
            <br><br>
            <label>This is a submit button</label>
            <input type="submit" value="Submit"> <!-- Input type submit. Must be of value type "Submit" in order to post values -->

        </form>

        <br>Below is a dropdown box<br>
        <form>
            <label for="cars">Choose a car:</label>
            <select id="cars" name="cars" size="3">
                <option value=""></option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>
        </form>

        <form>
            <button type="button" onclick="alert('Hello World!')">Click Me!</button> <!-- alert() creates a popup at the top of the page -->
        </form>

    </p>
</html>