<!DOCTYPE html>
<html>
   <head>
      <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>

         @media ( max-width: 768px ) {
            #product-detail {
             
            }
         }
         @media ( min-width: 768px ) {
            #product-detail {
               
            }
         }
         .detail-container {
            margin: auto;
            padding: 30px;
         }

      </style>
   </head>
   <body>
      <div class="hero_area">
         @include('home.header')

         <div class="col-sm-6 col-md-4 col-lg-4 detail-container">
            <div class="box" id="product-detail">
               <div class="img-box">
                  <img src="/product/{{ $product->image }}" alt="" class="rounded-lg">
               </div>
               <div class="detail-box">
                    <h5 class="mt-10">
                     {{ $product->title }}
                    </h5>

                    <h6 class="mt-2">
                     {{ $product->description }}
                    </h6>

                    @if ($product->discount_price != null)
                       
                       <h6 style="color: red" class="mt-2">
                          Discounted Price: $ {{ $product->discount_price}}
                       </h6>
                       <h6 style="color: blue;" class="mt-2">
                         Original Price: $ <span style="text-decoration: line-through;"> {{ $product->price}} </span>
                       </h6>

                    @else 

                       <h6 style="color: red" class="mt-2">
                          $ {{ $product->price}}
                       </h6>
                       
                    @endif

                    @if ( $product->quantity < 5)
                        <h6 class="mt-2">
                           Hurry up! Only {{ $product->quantity }} quantity left
                        </h6>
                    @else
                        <h6 class="mt-2">
                           Available in Stock
                        </h6>
                    @endif

                    <a href="" class="btn btn-primary btn-large btn-block mt-4"> Add to Cart</a>
               </div>
            </div>
         </div>

      </div>
     

      @include('home.footer')
      <!-- footer end -->
    
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>