<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">

         @foreach ($product as $item)
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{ url('product_details', $item->id) }}" class="option1">
                      View Details
                      </a>
                      <a href="" class="option2">
                      Add to Cart
                      </a>
                   </div>
                </div>
                <div class="img-box">
                   <img src="/product/{{ $item->image }}" alt="" class="rounded-lg">
                </div>
                <div class="detail-box">
                     <h5>
                      {{ $item->title }}
                     </h5>

                     @if ($item->discount_price != null)
                        
                        <h6 style="color: red">
                           $ {{ $item->discount_price}}
                        </h6>
                        <h6 style="text-decoration: line-through; color: blue;">
                           $ {{ $item->price}}
                        </h6>

                     @else 

                        <h6 style="color: red">
                           $ {{ $item->price}}
                        </h6>
                        
                     @endif
                </div>
             </div>
          </div>
          @endforeach
          
    </div>

    <!-- this section creates "more product navigation", (prev and next) -->
    <div class="mt-4 ml-4 mr-4">
    
      {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

    </div>
 </section>