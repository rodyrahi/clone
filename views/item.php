<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="http://dailyofferday.shop/img/small-logo.png">
  <title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books & More. Best Offers!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap');
  </style>
</head>


<style>
  .share-icon {
    display: block;
    background-color: #fff;
    border-radius: 18px;
    position: absolute;
    right: 0;
    border: 1px solid #eee;
    padding: 10px;
    border-radius: 50%;
    z-index: 1;
  }

  .d-flex {
    cursor: pointer;
  }

  .btn-check {
    display: none;
  }

  .btn {
    border: 2px solid #ccc;
    /* Default border color */
    max-width: 100px;
    color: rgb(51, 51, 51);
    transition: background-color 0.3s, color 0.3s;
    /* Add transition for smooth effect */
  }

  .btn:hover {
    background-color: transparent;
    color: #2874F0;
  }

  .btn-check:checked+label,
  .btn-check.active+label {
    border-color: #4184FB;
    /* Primary border color when checked or active */
    box-shadow: none;
    /* Remove box shadow */
    color: #2874F0;
    /* Text color for highlighted button */
  }
</style>

<?php
// Check if the "item" parameter is set in the query string
if (isset($_GET['item'])) {
    // Retrieve the value of the "item" parameter
    $selectedItem = $_GET['item'];

    // Output the selected item

} else {
    // Handle the case where "item" parameter is not set
    echo "No item selected.";
}
?>





<body style="font-family: 'Inter', sans-serif; font-weight: 400; background-color: #F1F2F4;">
  <nav class="navbar navbar-light " style="background-color: #2874F0;">
    <div class="container">
      <a class="navbar-brand" href="/">

        <div class="d-flex" style="align-items: center;">

          <svg width="19" height="16" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.556 7.847H1M7.45 1L1 7.877l6.45 6.817" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
          </svg>
          <img src="/public/brand.png" width="70px" class="ms-3" title="Flipkart">


        </div>
      </a>
      <div class="d-flex">

        <div class="ms-auto">
          <svg class="me-3" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <g fill="#FFF" fill-rule="evenodd">
              <path d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path>
              <path d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path>
            </g>
          </svg>
          <svg width="16" height="16" viewBox="0 0 15 15" xmlns="external452e452e452e452e.html?link=http://www.w3.org/2000/svg">
            <g fill="#fff" fill-rule="evenodd">
              <path d="m5.189 13.04c0 .996-.791 1.804-1.767 1.804-.976 0-1.767-.808-1.767-1.804 0-.996.791-1.804 1.767-1.804.976 0 1.767.808 1.767 1.804"></path>
              <path d="m14.912 2.259h-14.298l2.247 6.917c.042.129.16.216.293.216h8.06c-.064.69-.629 1.841-1.702 1.841h-6.04l1.072 1.991h5.611c1.881 0 2.938-2.278 3.657-4.719.888-3.01 1.219-6.245 1.106-6.245"></path>
              <path d="m.615 2.259l-.592-1.828c-.08-.207.069-.431.287-.431h1.482c.126 0 .24.079.287.198l.682 2.061c0 0-.63 1.642-1.942.066"></path>
              <path d="m2.262.756c0 0 .498 1.503 2.234 1.503l-1.736.749-1.104-.749.607-1.503"></path>
              <path d="m13.424 13.325c0 .837-.664 1.516-1.484 1.516-.82 0-1.484-.679-1.484-1.516 0-.837.664-1.516 1.484-1.516.82 0 1.484.679 1.484 1.516"></path>
            </g>
          </svg>
        </div>

      </div>





    </div>
  </nav>


  <div class="container-fluid">
    <?php
      // Read products from products.json
      $currentDirectory = getcwd();
      $jsonFileName = 'products.json';
      $jsonFilePath = $currentDirectory . '/' . $jsonFileName;

      $jsonData = file_get_contents($jsonFilePath);
      $products = json_decode($jsonData, true);

      // Check if the "item" parameter is set in the query string
      if (isset($_GET['item'])) {
          // Retrieve the value of the "item" parameter
          $selectedItem = $_GET['item'];

          // Find the selected item in the products array
          $selectedProduct = null;
          foreach ($products['items'] as $product) {
              if ($product['name'] === $selectedItem) {
                  $selectedProduct = $product;
                  break;
              }
          }

          // Display detailed information about the selected product
          if ($selectedProduct) {
              echo '<div class="row border p-1 bg-white">';
              echo '<div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel">';
              echo '<div class="carousel-inner" >';

              // Loop through the image URLs for the carousel
              
              foreach ($selectedProduct['colorImageUrls'] as $index => $imageUrl) {
                if ($index === 0 || $index > count($selectedProduct['colors']) ) {
                    echo '<div  class="carousel-item' . ($index === 0 ? ' active' : '') . '"  id="' . ($index === 0 ? 'first' : '') . '">';
                    echo '<img src="' . $imageUrl . '" class="d-block img-fluid" alt="Product Image" id="' . ($index === 0 ? 'active' : '') . '">';
                    echo '</div>';
                }
            }
            
              
              
              echo '</div>';
              echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">';
              echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
              echo '<span class="visually-hidden">Previous</span>';
              echo '</button>';
              echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">';
              echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
              echo '<span class="visually-hidden">Next</span>';
              echo '</button>';
              echo '</div>';
              echo '<div class="text-start mt-3 ">';
              echo '<h6 class="fw-bold">Select Color</h6>';
             
              // Assuming $selectedProduct is an array with 'colors' and 'imageUrls' keys
              
              $selectedProductColors = $selectedProduct['colors'];
              $selectedProductImageUrls = $selectedProduct['colorImageUrls'];
              
              // Check if the colors array is not empty
              if (!empty($selectedProductColors)) {
                  // Iterate over each color and generate HTML
                  echo '<div class="d-flex">';
                  foreach ($selectedProductColors as $index => $color) {
                      echo '<div class="p-3 text-center me-2" id="images" onclick="changecolor(this)" data-color="' . $selectedProduct['colors'][$index] . '" style="border: 1px solid; border-radius: 0.6rem; max-width: 100px; box-shadow: 1px 1px 2px #4185fbc9; ' . ($index === 0 ? 'border-color:#4185fbc9' : '') . ';">
                              <img class="img-fluid mb-2" style="max-width: 70px;" id="' . $selectedProduct['colors'][$index] . '" src="' . $selectedProductImageUrls[$index] . '" alt="">
                              <p class="mb-0">' . $color . '</p>
                          </div>';
                  }
                  echo '</div>';
              } else {
                  // Handle the case where no colors are available
                  echo '<p>No colors available for this product.</p>';
              }
              
              
              
              
              echo '</div>';
              echo '<div class="text-start mt-3 ">';
              echo '<h6 class="fw-bold">Select Size</h6>';
              echo '<div class="d-flex mb-3" type="button">';


          
              $sizes = ['S', 'M', 'L', 'XL', 'XXL'];
              
              foreach ($sizes as $size) {
                  echo '<input type="button" class="btn-check" id="size' . $size . '" autocomplete="off">';
                  echo '<label class="btn btn-outline-primary mx-2 fw-bold" for="size' . $size . '">' . $size . '</label>';
              }
              
              

              echo '</div>';
              echo '</div>';
              echo '</div>';

              echo'
              
              <div class="row p-2 my-2 bg-white">
                <p class=" " style="font-weight: 100;">' . $selectedProduct['name'] . '</p>
                <div class="d-flex">
                  <h5 class="me-2 fw-bold " style="">₹' . $selectedProduct['price'] . '</h5>
                  <h5 class="me-2 text-muted fw-bold text-decoration-line-through " style="">₹' . $selectedProduct['oldPrice'] . '</h5>

                  <h5 class="me-1 fw-bold " style="color:#008C00">' . $selectedProduct['discount'] . '% off</h5>


                </div>

              </div>

              ';


              echo'<div class="row bg-white d-flex p-3 mb-1 mt-2 border ">
                <img class="m-auto" src="http://dailyofferday.shop/assets/images/pay-latter.png" alt="pay-latter">
              </div>';

              echo'<div class="row py-2 bg-white border mt-1 ">
                
                    <div class="col-4  d-flex flex-column text-center" >
                      <img class="m-auto mb-2"  width="30px" src="http://dailyofferday.shop/assets/images/replacement.png">
                      
                      <p class="m-0" style="font-size: 0.6rem;">7 days Replacement</p>
                    </div>

                    <div class="col-4  d-flex flex-column text-center" >
                      <img class="m-auto mb-2"  width="30px" src="http://dailyofferday.shop/assets/images/non-cod.png">
                      
                      <p class="m-0" style="font-size: 0.6rem;">No Cash On Delivery</p>
                    </div>

                    <div class="col-4  d-flex flex-column text-center" >
                      <img class="m-auto" width="70px" src="http://dailyofferday.shop/assets/images/plue-fassured.png">
                      
                      <p class="m-0" style="font-size: 0.6rem;">Plus (F-Assured)</p>
                    </div>


                    

              </div>';

              echo '<div class="row  mt-2">';
              echo '<div class="col bg-white border p-3">';
              echo '<p class="fw-bold">Product Detail</p>';
              echo '<p>' . $selectedProduct['description'] . '</p>'; // Added concatenation and semicolon
              echo '</div>';
              echo '</div>';
              

          } else {
              // Handle the case where the selected item is not found
              echo '<p>Product not found.</p>';
          }
      } else {
          // Handle the case where "item" parameter is not set
          echo '<p>No item selected.</p>';
      }
      ?>


<script>
  var images = document.querySelectorAll('#images');
    
 
var selectedcolor=images[0].getAttribute('data-color');
<?php $selectedcolor = $_GET["selectedcolor"]?>   

var color=images[0].getAttribute('data-color');
</script>

<div class="fixed-bottom row  " style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.459);">
      <div class="col-6 p-3 d-flex bg-white " >
        <p class="m-auto" style="font-weight: 100;">Add to Cart</p>

        <?php
        echo'<a href="/cart?item=' . $selectedProduct['id'] . '&color=' . $selectedcolor . '" class="stretched-link"></a>';
        ?>

       
      </div>
      <div class="col-6 p-3 d-flex position-relative" style="background-color:#FFC200" >
        <p class="m-auto" style="font-weight: 100;" >Buy Now</p>
      


      <?php
      $currentDirectory = getcwd();
      $jsonFileName = 'payment.json';
      $jsonFilePath = $currentDirectory . '/' . $jsonFileName;
      
      // Read the content of the JSON file
      $jsonContent = file_get_contents($jsonFilePath);
      
      // Decode the JSON data
      $data = json_decode($jsonContent, true); // Set the second parameter to true to get an associative array
      
      // Check if decoding was successful
      if ($data !== null) {
          // Access the "url" value
          $url = $data['url'];
      
          // Use the $url variable as needed
          echo '<a href="' . $url . '" class="stretched-link"></a>';
      } else {
          echo "Error decoding JSON data";
      }
      ?>
      
    </div>
      

  </div>
    

  <div class="mb-5"></div>

  </div>


<script>





  function changecolor(element) {
    // Get the color from the data-color attribute
    color = element.getAttribute('data-color');
    document.getElementById('active').src = document.getElementById(color).src;


    var images = document.querySelectorAll('#images');
    for (var i = 0; i < images.length; i++) {
      images[i].style.borderColor = 'gray';

    }


    element.style.borderColor = '#4185fbc9';

    // Remove 'active' class from all elements with the class 'carousel-item'
    var carouselItems = document.getElementsByClassName('carousel-item');
    for (var i = 0; i < carouselItems.length; i++) {
        carouselItems[i].classList.remove('active');
        
    }

    // Add 'active' class to the first element with the class 'carousel-item'
    document.getElementById('first').classList.add('active');
    selectedcolor= color
    <?php $color = "<script>document.write(color)</script>"?>   

}

</script>



  <script>
    // Assuming you have Bootstrap's JavaScript included in your project

    // Get all buttons with the class "btn-check"
    var btns = document.querySelectorAll('.btn-check');

    // Loop through each button
    btns.forEach(function(btn) {
      // Add a click event listener to each button
      btn.addEventListener('click', function() {
        // Toggle the "active" class on each button
        btns.forEach(function(otherBtn) {
          otherBtn.classList.remove('active');
        });

        this.classList.toggle('active');
      });
    });
  </script>


</body>

</html>