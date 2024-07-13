<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'https://m.media-amazon.com/images/I/81PFi-YatXL._AC_SL1500_.jpg',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://mobizil.com/wp-content/uploads/2020/08/infinix-Zero-8.jpg',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://i5.walmartimages.com/seo/Pre-Owned-Apple-iPhone-12-Pro-Max-128GB-256GB-512GB-All-Colors-Factory-Unlocked-Cell-Phone-Very-Good_56085d5e-e4d9-4b53-9739-cf8bcf7011df.8985be480ed01ba2a71a618e2517b753.jpeg',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://beon.store/images/detailed/44/Beon.ge_Itel_A48_L6006_Purple__1_.jpg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnolajYL9cPOM4zczwHdr52n_zLyO7UYl8-A&s',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
    ],
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://images.samsung.com/is/image/samsung/assets/za/galaxy-a52/buy/galaxy-a52/02_carousel/03_product_kv/a52/A52_AwesomeBlue_ProductKV_MO_img.jpg?$ORIGIN_JPG$',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .results-count {
            color: #ff6f61;
            font-weight: bold;
        }

        .sort-by {
            color: #333;
            font-size: 14px;
        }

        .product-list {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 16px;
            width: 30%;
            position: relative;
            margin-bottom: 20px;
            flex: 1 1 30%;
        }

        .badge-new, .badge-5g {
            position: absolute;
            top: 16px;
            left: 16px;
            background-color: #4CAF50;
            color: #fff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .badge-5g {
            left: auto;
            right: 16px;
            background-color: #ff9800;
        }

        h2 {
            font-size: 18px;
            margin: 16px 0 8px;
        }

        .product-details {
            color: #666;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .stars {
            color: #ff9800;
            margin-right: 8px;
        }

        .rating-count {
            color: #666;
            font-size: 14px;
        }

        .offer {
            background-color: #FFC107;
            color: #fff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-bottom: 8px;
            display: inline-block;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 16px;
        }

        .price {
            font-size: 16px;
            margin-bottom: 16px;
        }

        .original-price {
            text-decoration: line-through;
            color: #666;
            margin-right: 8px;
        }

        .discounted-price {
            color: #ff6f61;
            font-weight: bold;
        }

        .tax-info {
            color: #666;
            font-size: 12px;
        }

        .view-details {
            background-color: #ff6f61;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .view-details:hover {
            background-color: #e55b50;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br> <br>
    <div class="container">
      
        <div class="product-list">
            <?php foreach ($phones as $phone): ?>
            <div class="product-card">
                <?php if ($phone['is_out_of_stock'] ?? false): ?>
                <div class="badge-new">Out of Stock</div>
                <?php endif; ?>
                <img src="<?php echo $phone['img_url']; ?>" alt="<?php echo $phone['name']; ?>">
                <h2><?php echo $phone['name']; ?></h2>
                <p class="product-details"><?php echo $phone['brand']; ?></p>
                <div class="rating">
                    <span class="stars">
                        <?php for ($i = 0; $i < $phone['rate']; $i++): ?>
                        ★
                        <?php endfor; ?>
                        <?php for ($i = $phone['rate']; $i < 5; $i++): ?>
                        ☆
                        <?php endfor; ?>
                    </span>
                    <span class="rating-count">(<?php echo $phone['rate']; ?>)</span>
                </div>
                <div class="price">
                    <span class="discounted-price"><?php echo $phone['price']; ?></span>
                    <span class="tax-info">With Tax</span>
                </div>
                <button class="view-details">View Details</button>
            </div>
            <?php endforeach; ?>

        </div>
        
    </div>
</body>
</html>
