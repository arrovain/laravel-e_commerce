
@extends("layouts.base");
@section("content")

<div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
    @foreach ($products as $product)                            
    <div>
        <div class="product-box">
            <div class="img-wrapper">
                <div class="front">
                    <a href="#">
                        <img src="assets/images/fashion/product/front/{{$product->image}}"
                            class="bg-img blur-up lazyload" alt="">
                    </a>
                </div>
                <div class="back">
                    <a href="#">
                        <img src="assets/images/fashion/product/back/{{$product->image}}"
                            class="bg-img blur-up lazyload" alt="">
                    </a>
                </div>
                <div class="cart-wrap">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" class="addtocart-btn">
                                <i data-feather="shopping-cart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i data-feather="eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="wishlist">
                                <i data-feather="heart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-details">
                <div class="rating-details">
                    <span class="font-light grid-content">{{$product->category->name}}</span>
                    <ul class="rating mt-0">
                        <li>
                            <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                            <i class="fas fa-star theme-color"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                    </ul>
                </div>
                <div class="main-price">
                    <a href="#" class="font-default">
                        <h5 class="ms-0">{{$product->name}}</h5>
                    </a>
                    <div class="listing-content">
                        <span class="font-light">{{$product->category->name}}</span>
                        <p class="font-light">{{$product->short_description}}</p>
                    </div>
                    <h3 class="theme-color">${{$product->regular_price}}</h3>
                    <button class="btn listing-content">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$products->links("pagination.default")}}


@endsection
