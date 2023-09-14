<html>
<body>
    <form action="form-results.php?id=987&do=update" method="post"> // ## line of interest ##
        <p>
            What is your name?<br/>
            <input type="text" name="name" />
        </p>
        <p>
            What is your gender?<br/>
            <input type="radio" name="gender" value="x" checked /> No Answer<br/>
            <input type="radio" name="gender" value="m" /> Male<br/>
            <input type="radio" name="gender" value="f" /> Female<br/>
            <input type="radio" name="gender" value="o" /> Other
        </p>
        <p>
            What is your favorite shape?<br/>
            <select name="shape">
                <option value="">-- Select --</option>
                <option value="d1">Sphere</option>
                <option value="d4">Pyramid</option>
                <option value="d6">Cube</option>
                <option value="d20">Icosahedron</option>
            </select>
        </p>
        <p>
            What are your favorite colors? (Hold ctrl to pick multiple)<br/>
            <select name="color[]" size="6" multiple>
                <option value="r">Red</option>
                <option value="o">Orange</option>
                <option value="y">Yellow</option>
                <option value="g">Green</option>
                <option value="b">Blue</option>
                <option value="p">Purple</option>
            </select>
        </p>
        <p>
            Tell us a little bit about yourself.<br/>
            <textarea name="about" rows="5" cols="60"></textarea>
        </p>
        <p>
            Tell us your secret.<br/>
            <input type="password" name="mysecret" />
        </p>
        <p>
            What toppings do you want on your pizza?<br/>
            <input type="checkbox" name="topping[]" value="cheese" checked /> Cheese<br/>
            <input type="checkbox" name="topping[]" value="pepperoni" /> Pepperoni<br/>
            <input type="checkbox" name="topping[]" value="sausage" /> Sausage<br/>
            <input type="checkbox" name="topping[]" value="fungus" /> Mushrooms
        </p>
        <input type="submit" value="Submit Results"/>
    </form>
</body>
</html>