<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cupcakes class work 04-04-04</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>
<form action="process.php" method="post">
   <label for="fname">your name:</label>
    <input type="text" id="fname" name="name" placeholder="pleae input your name.">

    <label for="flavor">Cupcake Flavors</label>
    <input id="flavor" type="checkbox" name="flavors[]" value="Grasshopper">The Grasshopper
    <input id="flavor" type="checkbox" name="flavors[]" value="Whiskey Maple Bacon">Whiskey Maple Bacon
    <input id="flavor" type="checkbox" name="flavors[]" value="Carrot Walnut">Carrot Walnut
    <input id="flavor" type="checkbox" name="flavors[]" value="Salted Caramel Cupcake">Salted Caramel Cupcake
    <input id="flavor" type="checkbox" name="flavors[]" value="Red Velvet">Red Velvet
    <input id="flavor" type="checkbox" name="flavors[]" value="Lemon Drop">Lemon Drop
    <input id="flavor" type="checkbox" name="flavors[]" value ="Tiramisu">Tiramisu

    <button type="submit">Order</button>
</form>
</body>
</html>