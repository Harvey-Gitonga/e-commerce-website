<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>E-COMMERCE-insert-products-admin-dashboard</title>
     <!--  bootsratp css link -->
     <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
       integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- css file -->
      <link rel="stylesheet" href="styles.css">
    </head>
    <body class="bg-light">
        <div class="container mt-3">
            <h1 class="text-center">Insert-Products</h1>
            <!-- form -->
             <form action="" method="post" enctype="multipart/form-data">
                <!-- title -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_title"class="form-label">product Title</label>
                    <input type="text" name="product_keywords" 
                    id="product_title" class="form-control"
                    placeholder="Enter product title" autocomplete="off"
                    required="required">
                </div>

                <!-- decription -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="decsription"class="form-label">product Descriprition</label>
                    <input type="text" name="description" 
                    id="product_description" class="form-control"
                    placeholder="Enter product description" autocomplete="off"
                    required="required">
                </div>

                <!-- Keywords-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_keywords"class="form-label">product Keywords</label>
                    <input type="text" name="description" 
                    id="product_keywords" class="form-control"
                    placeholder="Enter product keywords" autocomplete="off"
                    required="required">
                </div>

                <!-- categories -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_category" id="" class="form-select">
                        <option value="">Select category</option>
                        <option value="">Custom-Shirts</option>
                        <option value="">Dinning-decor</option>
                        <option value="">Wall-decor</option>
                        <option value="">Key-holder</option>
                        <option value="">Knitted-gloves</option>
                        <option value="">Lamp-shade</option>
                    </select>
                </div> 
                 <!-- Brands-->
                 <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_brands" id="" class="form-select">
                        <option value="">Select Brands</option>
                        <option value="">Brand1</option>
                        <option value="">Brand2</option>
                        <option value="">Brand3</option>
                        <option value="">Brand4</option>
                        <option value="">Brand5</option>
                        <option value="">Brand5</option>
                    </select>
                </div> 

                <!-- Image 1 -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image"class="form-label">Product image 1</label>
                    <input type="text" name="product_image" 
                    id="product_keywords" class="form-control"
                    placeholder="Enter product keywords" autocomplete="off"
                    required="required">
                </div>
             </form>
        </div>

    </body>
</html>