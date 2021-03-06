@extends('layouts.default')
@section('content')

    <!--====== End - Main Header ======-->


    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <center>
                            <h1>YOUR PURCHASE</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->




        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="checkout-f">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                                <form class="checkout-f__delivery">
                                    <div class="u-s-m-b-30">
                                        <div class="u-s-m-b-15">

                                            <!--====== Check Box ======-->
                                            <div class="check-box">

                                                <input type="checkbox" id="get-address">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="get-address">Use default shipping
                                                        and billing address from account</label>
                                                </div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </div>

                                        <!--====== First Name, Last Name ======-->
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-fname">FIRST NAME *</label>

                                                <input class="input-text input-text--primary-style" type="text"
                                                    id="billing-fname" data-bill="">
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-lname">LAST NAME *</label>

                                                <input class="input-text input-text--primary-style" type="text"
                                                    id="billing-lname" data-bill="">
                                            </div>
                                        </div>
                                        <!--====== End - First Name, Last Name ======-->


                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-email" data-bill="">
                                        </div>
                                        <!--====== End - E-MAIL ======-->


                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-phone">PHONE *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-phone" data-bill="">
                                        </div>
                                        <!--====== End - PHONE ======-->


                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-street">STREET ADDRESS *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-street" placeholder="House name and street name" data-bill="">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <label for="billing-street-optional"></label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-street-optional"
                                                placeholder="Apartment, suite unit etc. (optional)" data-bill="">
                                        </div>
                                        <!--====== End - Street Address ======-->


                                        <!--====== Country ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-country">COUNTRY *</label><select
                                                class="select-box select-box--primary-style" id="billing-country"
                                                data-bill="">
                                                <option selected value="">Choose Country</option>
                                                <option value="uae">United Arab Emirate (UAE)</option>
                                                <option value="uk">United Kingdom (UK)</option>
                                                <option value="us">United States (US)</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - Country ======-->


                                        <!--====== Town / City ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-town-city">TOWN/CITY *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-town-city" data-bill="">
                                        </div>
                                        <!--====== End - Town / City ======-->


                                        <!--====== STATE/PROVINCE ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-state">STATE/PROVINCE *</label><select
                                                class="select-box select-box--primary-style" id="billing-state"
                                                data-bill="">
                                                <option selected value="">Choose State/Province</option>
                                                <option value="al">Alabama</option>
                                                <option value="al">Alaska</option>
                                                <option value="ny">New York</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - STATE/PROVINCE ======-->


                                        <!--====== ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-zip">ZIP/POSTAL CODE *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-zip"
                                                placeholder="Zip/Postal Code" data-bill="">
                                        </div>
                                        <!--====== End - ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-10">

                                            <!--====== Check Box ======-->
                                            <div class="check-box">

                                                <input type="checkbox" id="make-default-address" data-bill="">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="make-default-address">Make default
                                                        shipping and billing address</label>
                                                </div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </div>
                                        <div class="u-s-m-b-10">

                                            <a class="gl-link" href="#create-account" data-toggle="collapse">Want to create
                                                a new account?</a>
                                        </div>
                                        <div class="collapse u-s-m-b-15" id="create-account">

                                            <span class="gl-text u-s-m-b-15">Create an account by entering the information
                                                below. If you are a returning customer please login at the top of the
                                                page.</span>
                                            <div>

                                                <label class="gl-label" for="reg-password">Account Password *</label>

                                                <input class="input-text input-text--primary-style" type="text" data-bill
                                                    id="reg-password">
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-10">

                                            <label class="gl-label" for="order-note">ORDER NOTE</label><textarea
                                                class="text-area text-area--primary-style" id="order-note"></textarea>
                                        </div>
                                        <div>

                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            @foreach ($cartProducts as $cartProduct)
                                                <div class="o-card">


                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">

                                                            <img class="u-img-fluid"
                                                                src="{{ $cartProduct['product']->images[0]->url }}"
                                                                alt="">
                                                        </div>
                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">

                                                                <a
                                                                    href="product-detail.html">{{ $cartProduct['product']->name }}</a></span>

                                                            <span
                                                                class="o-card__quantity">{{ $cartProduct['amount'] }}</span>

                                                            <span
                                                                class="o-card__price">{{ $cartProduct['product']->price }}</span>
                                                        </div>
                                                    </div>


                                                    <a class="o-card__del far fa-trash-alt"></a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">SHIPPING & BILLING</h1>
                                            <div class="ship-b">

                                                <span class="ship-b__text">Ship to:</span>
                                                <div class="ship-b__box u-s-m-b-10">
                                                    <p class="ship-b__p">Colombia, Bogot?? </p>

                                                    <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                                        data-modal="modal" data-modal-id="#edit-ship-address">Edit</a>
                                                </div>
                                                <div class="ship-b__box">

                                                    <span class="ship-b__text">Escriba su direcci??n</span>

                                                    <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                                        data-modal="modal" data-modal-id="#edit-ship-address">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="o-summary__table">
                                                <tbody>
                                                    <tr>
                                                        <td>SHIPPING</td>
                                                        <td> Free</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>GRAND TOTAL</td>
                                                        <td>${{ $total }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                            <form class="checkout-f__payment" method='post'
                                                action="{{ route('order.store') }}">
                                                <div class="u-s-m-b-10">
                                                    @csrf
                                                    @auth

                                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                    @endauth
                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" value="crypto" id="pay-with-check"
                                                            name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-check">Pay With
                                                                Crypto</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">Please send a check to Store Name, Store
                                                        Street, Store Town, Store State / County, Store Postcode.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" checked value="cc" id="pay-with-card" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-card">Pay With
                                                                Credit / Debit Card</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">International Credit Cards must be
                                                        eligible for use within the United States.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" value="paypal" id="pay-pal" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-pal">Pay Pal</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll
                                                        take you to Paypal's site to set up your billing information.</span>
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <!--====== Check Box ======-->
                                                    <div class="check-box">

                                                        <input type="checkbox" id="term-and-condition">
                                                        <div class="check-box__state check-box__state--primary">

                                                            <label class="check-box__label" for="term-and-condition">I
                                                                consent to the</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Check Box ======-->

                                                    <a class="gl-link">Terms of Service.</a>
                                                </div>
                                                <div>

                                                    <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Order Summary ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
    </div>
    <!--====== End - App Content ======-->


    <!--====== Main Footer ======-->
    <footer>
        <div class="outer-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="outer-footer__content u-s-m-b-40">

                            <span class="outer-footer__content-title">Contact Us</span>
                            <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                <span>4247 Ashford Drive Virginia VA-20006 USA</span>
                            </div>
                            <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                <span>(+0) 900 901 904</span>
                            </div>
                            <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                <span>contact@domain.com</span>
                            </div>
                            <div class="outer-footer__social">
                                <ul>
                                    <li>

                                        <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">

                                    <span class="outer-footer__content-title">Information</span>
                                    <div class="outer-footer__list-wrap">
                                        <ul>
                                            <li>

                                                <a href="cart.html">Cart</a>
                                            </li>
                                            <li>

                                                <a href="dashboard.html">Account</a>
                                            </li>
                                            <li>

                                                <a href="shop-side-version-2.html">Manufacturer</a>
                                            </li>
                                            <li>

                                                <a href="dash-payment-option.html">Finance</a>
                                            </li>
                                            <li>

                                                <a href="shop-side-version-2.html">Shop</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">
                                    <div class="outer-footer__list-wrap">

                                        <span class="outer-footer__content-title">Our Company</span>
                                        <ul>
                                            <li>

                                                <a href="about.html">About us</a>
                                            </li>
                                            <li>

                                                <a href="contact.html">Contact Us</a>
                                            </li>
                                            <li>

                                                <a href="index.html">Sitemap</a>
                                            </li>
                                            <li>

                                                <a href="dash-my-order.html">Delivery</a>
                                            </li>
                                            <li>

                                                <a href="shop-side-version-2.html">Store</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="outer-footer__content">

                            <span class="outer-footer__content-title">Join our Newsletter</span>
                            <form class="newsletter">
                                <div class="u-s-m-b-15">
                                    <div class="radio-box newsletter__radio">

                                        <input type="radio" id="male" name="gender">
                                        <div class="radio-box__state radio-box__state--primary">

                                            <label class="radio-box__label" for="male">Male</label>
                                        </div>
                                    </div>
                                    <div class="radio-box newsletter__radio">

                                        <input type="radio" id="female" name="gender">
                                        <div class="radio-box__state radio-box__state--primary">

                                            <label class="radio-box__label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="newsletter__group">

                                    <label for="newsletter"></label>

                                    <input class="input-text input-text--only-white" type="text" id="newsletter"
                                        placeholder="Enter your Email">

                                    <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                                </div>

                                <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                    promotions, new arrivals, discount and coupons.</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="lower-footer__content">
                            <div class="lower-footer__copyright">

                                <span>Copyright ?? 2018</span>

                                <a href="index.html">Reshop</a>

                                <span>All Right Reserved</span>
                            </div>
                            <div class="lower-footer__payment">
                                <ul>
                                    <li><i class="fab fa-cc-stripe"></i></li>
                                    <li><i class="fab fa-cc-paypal"></i></li>
                                    <li><i class="fab fa-cc-mastercard"></i></li>
                                    <li><i class="fab fa-cc-visa"></i></li>
                                    <li><i class="fab fa-cc-discover"></i></li>
                                    <li><i class="fab fa-cc-amex"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== Modal Section ======-->


    <!--====== Shipping Address Add Modal ======-->
    <div class="modal fade" id="edit-ship-address">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="checkout-modal2">
                        <div class="u-s-m-b-30">
                            <div class="dash-l-r">
                                <h1 class="gl-modal-h1">Shipping Address</h1>
                                <div class="dash__link dash__link--brand">

                                    <a data-modal="modal" data-modal-id="#add-ship-address" data-dismiss="modal">Add new
                                        Address</a>
                                </div>
                            </div>
                        </div>
                        <form class="checkout-modal2__form">
                            <div class="dash__table-2-wrap u-s-m-b-30 gl-scroll">
                                <table class="dash__table-2">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Region</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="address-1" name="default-address" checked="">
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="address-1"></label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->
                                            </td>
                                            <td>John Doe</td>
                                            <td>4247 Ashford Drive Virginia VA-20006 USA</td>
                                            <td>Virginia VA-20006 USA</td>
                                            <td>(+0) 900901904</td>
                                            <td>
                                                <div class="gl-text">Default Shipping Address</div>
                                                <div class="gl-text">Default Billing Address</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">

                                                    <input type="radio" id="address-2" name="default-address">
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="address-2"></label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->
                                            </td>
                                            <td>Doe John</td>
                                            <td>1484 Abner Road</td>
                                            <td>Eau Claire WI - Wisconsin</td>
                                            <td>(+0) 7154419563</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="gl-modal-btn-group">

                                <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>

                                <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Shipping Address Add Modal ======-->


    <!--====== Shipping Address Add Modal ======-->
    <div class="modal fade" id="add-ship-address">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="checkout-modal1">
                        <form class="checkout-modal1__form">
                            <div class="u-s-m-b-30">
                                <h1 class="gl-modal-h1">Add new Shipping Address</h1>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="address-fname">FIRST NAME *</label>

                                    <input class="input-text input-text--primary-style" type="text" id="address-fname"
                                        placeholder="First Name">
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="address-lname">LAST NAME *</label>

                                    <input class="input-text input-text--primary-style" type="text" id="address-lname"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="address-phone">PHONE *</label>

                                    <input class="input-text input-text--primary-style" type="text" id="address-phone">
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="address-street">STREET ADDRESS *</label>

                                    <input class="input-text input-text--primary-style" type="text" id="address-street"
                                        placeholder="House Name and Street">
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">

                                    <!--====== Select Box ======-->

                                    <label class="gl-label" for="address-country">COUNTRY *</label><select
                                        class="select-box select-box--primary-style" id="address-country">
                                        <option selected value="">Choose Country</option>
                                        <option value="uae">United Arab Emirate (UAE)</option>
                                        <option value="uk">United Kingdom (UK)</option>
                                        <option value="us">United States (US)</option>
                                    </select>
                                    <!--====== End - Select Box ======-->
                                </div>
                                <div class="u-s-m-b-30">

                                    <!--====== Select Box ======-->

                                    <label class="gl-label" for="address-state">STATE/PROVINCE *</label><select
                                        class="select-box select-box--primary-style" id="address-state">
                                        <option selected value="">Choose State/Province</option>
                                        <option value="al">Alabama</option>
                                        <option value="al">Alaska</option>
                                        <option value="ny">New York</option>
                                    </select>
                                    <!--====== End - Select Box ======-->
                                </div>
                            </div>
                            <div class="gl-inline">
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="address-city">TOWN/CITY *</label>

                                    <input class="input-text input-text--primary-style" type="text" id="address-city">
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="address-street">ZIP/POSTAL CODE *</label>

                                    <input class="input-text input-text--primary-style" type="text" id="address-postal"
                                        placeholder="Zip/Postal Code">
                                </div>
                            </div>
                            <div class="gl-modal-btn-group">

                                <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>

                                <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection