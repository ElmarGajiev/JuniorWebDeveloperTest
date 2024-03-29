<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/JuniorWebDeveloper/src/addproduct.js"></script>
    <link rel="stylesheet" href="/JuniorWebDeveloper/src/addproduct.css">
    <title>Product Add</title>
</head>
<body>
<form id="product_form" action="/JuniorWebDeveloper/database/db_handler" method="POST">
<div class="header">
    <div class="pr_list">Product Add</div>
    <input type="button" value="Cancel">
    <input type="submit" value="Save">
</div>

<br><br>
<hr class="hr_line"></hr>
    <div class="inputs">
        <label for="sku">SKU</label>
        <input type="text" name="sku" id="sku" required>
        <span id="check_sku"></span>
    </div>
    <div class="inputs">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div class="inputs">
        <label for="price">Price($)</label>
        <input type="number" name="price" id="price" min="0" step="0.01" pattern="[0-9]*" required>
    </div>
    <div class="inputs">
        <label for="productType">TypeSwitcher</label>
        <select name="type" id="productType" required>
            <option value="" disabled selected>TypeSwitcher</option>
            <option value="DVD">DVD</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select>
    </div>
    <div class="inputs">
        <div id="DVD">
            <label for="size">Size</label>
            <input type="number" name="size" id="size" min="0" pattern="[0-9]*">
            <p>Please, provide size in MB</p>
        </div>
        <div id="Book">
            <label for="weight">Weight</label>
            <input type="number" name="weight" id="weight" min="0" step="0.1" pattern="[0-9]*">
            <p>Please, provide weight in KG</p>
        </div>
        <div id="Furniture">
            <div class="inputs">
                <label for="height">Height</label>
                <input type="number" name="height" id="height" min="0" pattern="[0-9]*">
            </div>
            <div class="inputs">
                <label for="width">Width</label>
                <input type="number" name="width" id="width" min="0" pattern="[0-9]*">
            </div>
            <div class="inputs">
                <label for="length">Length</label>
                <input type="number" name="length" id="length" min="0" pattern="[0-9]*">
            </div>
            <p>Please, provide dimensions in HxWxL format</p>
        </div>
    </div>
</form>
<div class="footer">Scandiweb Test assignment</div>

</body>
</html>