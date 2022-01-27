<div class="col-xl-3 col-lg-4 col-md-4 col-12">
    <div class="single-product">
        <div class="product-img">
            <a href="{{ route("ganga.show", $ganga) }}">
                <img class="default-img" src="img/{{ $ganga->id }}-ganga-severa.jpg" alt="#">
                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
            </a>
            <div class="button-head">
                <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick View</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                </div>
                <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="product-content">
            <h3><a href="{{ route("ganga.show", $ganga) }}">{{ $ganga->title }}</a></h3>
            <div class="product-price">
                @if($ganga->discount_price != 0)
                <span class="old">{{ $ganga->price }}</span>
                @endif
                <span>{{ $ganga->discount_price }}</span>
            </div>
        </div>
    </div>
</div>
