<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page</title>
    <link rel="stylesheet" href="/views/products/style.css">
</head>
<body>
            <form action="/create" method="post"  enctype="multipart/form-data">
                <div class="main">
                    <h2>Create Products</h2>
                    <label for="">Product Name</label>
                    <input  type="text" name="product_name"  placeholder="Add your products"  required >
                    <label for="">Price</label>
                    <input type="number" class="size step="500 name="price" placeholder="Your Price" required >
                    <label for="">Add Product Image</label>
                    <input type="file"  name="image" placeholder ="Product image" width="75px" height ="75px" required>
                    <label for="">Product SKU</label>
                    <input type="text" name="sku" placeholder="Product SKU" required >
                    <label for="brands">Choose your Brand </label>
                    <select name="brands" id="brands">
                        <option value="">select</option>
                        <option value="Apple">Apple</option>
                    <option value="Samsung">Samsung</option>
                    <option value="OnePlus">OnePlus</option>
                    </select>
                    <label for="">Manufacture Date</label>
                    <input type="date" name="manufactured" placeholder="product date" required >
                    <label for="">Available Stock</label>
                    <input type="number" name="stock" placeholder="Your Price" required >
                    
                    <input type="submit" name="create" value="Add your Products">
      

                </div>
            </form>
</body>
</html>