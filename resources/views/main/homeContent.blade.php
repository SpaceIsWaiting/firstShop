@extends('layouts.default')

@section('title')Главная@endsection
@section('content')
    <div class="product m-t-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Title -->
                    <div class="section-content section-content--border m-b-35">
                        <h5 class="section-content__title">Популярные товары</h5>
                        <ul class="tablist tablist--style-blue tablist--style-gap-20 nav">
{{--                            <li><a class="nav-link active" data-toggle="tab" href="#fruits">Fruites</a></li>--}}
{{--                            <li><a class="nav-link" data-toggle="tab" href="#milk">Milk</a></li>--}}
{{--                            <li><a class="nav-link" data-toggle="tab" href="#fish">Fish</a></li>--}}
                        </ul>
                    </div>  <!-- End Section Title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content tab-animate-zoom">
                        <!-- Start Single Tab Item -->
                        <div class="tab-pane show active" id="fruits">
                            <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                            </a>
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$25.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-10%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Countdown -->
                                            <div class="product__counter-box">
{{--                                                <div class="product__counter-item" data-countdown="2023/09/27"></div>--}}
                                            </div> <!-- End Product Countdown -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$21.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                            </a>
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$50.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-31%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Best red meat</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$55.00 <del>$80.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-35%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Countdown -->
{{--                                            <div class="product__counter-box">--}}
{{--                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>--}}
{{--                                            </div> <!-- End Product Countdown -->--}}
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$39.00 <del>$60.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-out">Soldout</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$55.00 <del>$75.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-out">Soldout</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$10.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                </div>
                            </div>
                        </div>  <!-- End Single Tab Item -->
                        <!-- Start Single Tab Item -->
                        <div class="tab-pane" id="milk">
                            <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-35%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Countdown -->
                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div> <!-- End Product Countdown -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$39.00 <del>$60.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-out">Soldout</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$55.00 <del>$75.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-out">Soldout</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$10.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                            </a>
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$25.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-10%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Countdown -->
                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                            </div> <!-- End Product Countdown -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$21.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                            </a>
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$50.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-31%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Best red meat</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$55.00 <del>$80.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                </div>
                            </div>
                        </div>  <!-- End Single Tab Item -->
                        <!-- Start Single Tab Item -->
                        <div class="tab-pane" id="fish">
                            <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-35%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Countdown -->
                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div> <!-- End Product Countdown -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$39.00 <del>$60.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-out">Soldout</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$55.00 <del>$75.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-out">Soldout</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$10.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-10%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Countdown -->
                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                            </div> <!-- End Product Countdown -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$21.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                            </a>
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$50.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                            </a>
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$25.00</span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-31%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Best red meat</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$55.00 <del>$80.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__default--single text-center">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative">
                                            <a href="product-single-default.html" class="product__img--link">
                                                <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                            </a>
                                            <!-- Start Procuct Label -->
                                            <span class="product__label product__label--sale-dis">-34%</span>
                                            <!-- End Procuct Label -->
                                            <!-- Start Product Action Link-->
{{--                                            <ul class="product__action--link pos-absolute">--}}
{{--                                                <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
{{--                                                <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                            </ul> <!-- End Product Action Link -->--}}
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
                                            <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">$19.00 <del>$29.00</del></span>
                                            </div>
                                        </div> <!-- End Product Content -->
                                    </div> <!-- End Single Default Product -->

                                </div>
                            </div>
                        </div>  <!-- End Single Tab Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
