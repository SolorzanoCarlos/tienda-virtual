@extends('layouts.default')
@section('content')

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="{{ route('products.index') }}">Home</a>
                            </li>
                            <li class="is-marked">

                                <a href="{{ route('cart.index') }}">Cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                        <div class="table-responsive">
                            <table class="table-p">
                                <tbody>

                                    <!--====== Row ======-->
                                    @foreach ($cartProducts as $cartProduct)
                                        <tr>
                                            <td>
                                                <div class="table-p__box">
                                                    <div class="table-p__img-wrap">

                                                        <img class="u-img-fluid"
                                                            src="{{ $cartProduct['product']->images[0]->url }}" alt="">
                                                    </div>
                                                    <div class="table-p__info">

                                                        <span class="table-p__name">

                                                            <a
                                                                href="product-detail.html">{{ $cartProduct['product']->name }}</a></span>

                                                        <span class="table-p__category">

                                                            @foreach ($cartProduct['product']->categories as $cat)
                                                                <a href="#">{{ strtoupper($cat->name) }}</a>
                                                            @endforeach
                                                        </span>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                <span class="table-p__price">$
                                                    {{ $cartProduct['product']->price * $cartProduct['amount'] }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="table-p__input-counter-wrap">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style"
                                                            type="text" value="{{ $cartProduct['amount'] }}" data-min="1"
                                                            data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span>
                                                    </div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-p__del-wrap">

                                                    <a class="far fa-trash-alt table-p__delete-link" href="#"></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <!--====== End - Row ======-->

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="route-box">
                            <div class="route-box__g1">

                                <a class="route-box__link" href="{{ route('products.index') }}"><i
                                        class="fas fa-long-arrow-alt-left"></i>

                                    <span>CONTINUE SHOPPING</span></a>
                            </div>
                            <div class="route-box__g2">

                                <a class="route-box__link" href="cart.html"><i class="fas fa-trash"></i>

                                    <span>CLEAR CART</span></a>

                                <a class="route-box__link" href="{{ route('cart.index') }}"><i class="fas fa-sync"></i>

                                    <span>UPDATE CART</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->


    <!--====== Section 3 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                        
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->

@endsection