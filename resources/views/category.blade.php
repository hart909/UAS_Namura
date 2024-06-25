<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Categories</title>
  <style>
    .category-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 50px;
    }

    .category {
      width: 400px;
      height: 400px;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      color:white;
    }
    .category p{
        color: #e9edf6;
    }

    .category img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .category:hover img {
      transform: scale(1.1);
    }

    .category-info {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 10px;
      text-align: center;
      transition: transform 0.3s ease;
      color: white;
    }

    .category:hover .category-info {
      transform: translateY(0);
    }
  </style>
</head>
<body>
    <br>
    <br>
<div id="category" class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Namura Category</h6>
                        <h2>Here You Can Find Our Food Base the Category</h2>
                    </div>
                </div>
            </div>
  <div class="category-container">
  <a href="{{ url('/bestseller', 'Best Seller') }}"><div class="category">
      <img src="assets/images/best-seller.png" alt="Best Seller">
      <div class="category-info">
        <h3>Best Seller</h3>
        <p>Our most popular products</p>
      </div>
    </div></a>
    <a href="{{ url('/signature', 'Signature') }}">
    <div class="category">
      <img src="assets/images/signature.png" alt="Signature">
      <div class="category-info">
        <h3>Signature</h3>
        <p>Our unique, hand-crafted items</p>
      </div>
    </div></a>
    <a href="{{ url('/oriental', 'Oriental') }}">
    <div class="category">
      <img src="assets/images/oriental.png" alt="Oriental">
      <div class="category-info">
        <h3>Oriental</h3>
        <p>Inspired by the East</p>
      </div>
    </div>
  </div>
</body>
</html>