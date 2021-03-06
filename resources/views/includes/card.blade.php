
    @php
        $image = '';
        if($product->image){
            $image = $product->image;
        }else{
            $image = 'no_img.jpg';
        }
    @endphp
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
        <!-- Start Single Default Product -->
        <div class="product__box product__default--single text-center">
            <!-- Start Product Image -->
            <div class="product__img-box  pos-relative" >
                <a href="{{route('showProduct',[$product->category_id,$product->id])}}" class="product__img--link">
                    <img class="product__img img-fluid" src="/images/products-grid/{{$image}}" alt="{{$product->name}}" >
                </a>
                <!-- Start Procuct Label -->
                @if($product->new_price!=null)
                    <span class="product__label product__label--sale-dis">{{$product->discount($product->price,$product->new_price)}}</span>
            @else
            @endif
            <!-- End Procuct Label -->
                <!-- Start Product Action Link-->
{{--                <ul class="product__action--link pos-absolute">--}}
{{--                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                </ul> <!-- End Product Action Link -->--}}
            </div> <!-- End Product Image -->
            <!-- Start Product Content -->
            <div class="product__content m-t-20">
                <ul class="product__review">
                    <li class="product__review--fill"><i class="icon-star"></i></li>
                    <li class="product__review--fill"><i class="icon-star"></i></li>
                    <li class="product__review--fill"><i class="icon-star"></i></li>
                    <li class="product__review--fill"><i class="icon-star"></i></li>
                    <li class="product__review--blank"><i class="icon-star"></i></li>
                </ul>
                <a href="{{route('showProduct',[$product->category_id,$product->id])}}" class="product__link">{{$product->name}}</a>
                <div class="product__price m-t-5 ">
                    @if($product->new_price!=null)
                        <span class="product__price">{{$product->new_price}}?? <del>{{$product->price}}??</del></span>
                    @else
                        <span class="product__price">{{$product->price}}??</span>
                    @endif
                </div>
                <div class="from-box__buttons m-t-15">
                    <form action="{{route('basketAdd',$product)}}" method="POST">
                    <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">?? ??????????????</button>
                        @csrf
                    </form>
                </div>
            </div> <!-- End Product Content -->
        </div> <!-- End Single Default Product -->
    </div>

