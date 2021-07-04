@extends('frontend.layouts.master')

@section('title')
Tài khoản
@endsection

@section('css')
@endsection

@section('script')
@endsection

@section('banner')
@endsection

@section('content')
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">cart</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">cart</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">Product Image</th>
                <th class="text-center" scope="col">Product Name</th>
                <th class="text-center" scope="col">Stock Status</th>
                <th class="text-center" scope="col">Qty</th>
                <th class="text-center" scope="col">Price</th>
                <th class="text-center" scope="col">action</th>
                <th class="text-center" scope="col">Checkout</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center" scope="row">
                  <img src="images/2.png" alt="img">
                </th>
                <td class="text-center">
                  <span class="whish-title">Water and Wind Resistant cream</span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static">In Stock</span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="1">
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> $38.24 </span>
                </td>

                <td class="text-center">
                  <a href="#">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                </td>
                <td class="text-center">
                  <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">
                  <img src="images/4_1.png" alt="img">
                </th>
                <td class="text-center">
                  <span class="whish-title">Originals Kaval nail polish</span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static">In Stock</span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="1">
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> $38.24 </span>
                </td>

                <td class="text-center">
                  <a href="#">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                </td>
                <td class="text-center">
                  <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">
                  <img src="images/6_1.png" alt="img">
                </th>
                <td class="text-center">
                  <span class="whish-title">New Balance Arish makeup box</span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static">In Stock</span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="1">
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> $38.24 </span>
                </td>

                <td class="text-center">
                  <a href="#">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                </td>
                <td class="text-center">
                  <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product tab end -->
<div class="check-out-section pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="billing-info-wrap">
          <h3 class="title">calculate shipping</h3>
          <form class="personal-information" action="assets/php/contact.php">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="billing-select mb-20px">
                  <select id="inputState" class="form-select mb-3">
                    <option>Select country</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="billing-select mb-20px">
                  <select id="inputState2" class="form-select mb-3">
                    <option>Select State</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="billing-info mb-20px">
                  <input placeholder="Postcode / ZIP" type="text">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="billing-select mb-20px">
                  <a href="#" class="btn btn-primary check-out-btn">estimate</a>
                </div>
              </div>
              <div class="col-12">
                <h3 class="coupon-title">Discount coupon Code</h3>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="billing-info mb-20px">
                  <input placeholder="coupon Code" type="text">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <a href="#" class="btn btn-primary check-out-btn">apply code</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5 mt-4 mt-lg-0">
        <div class="your-order-area">
          <div class="your-order-wrap gray-bg-4">
            <div class="your-order-product-info">
              <div class="your-order-top">
                <ul>
                  <li>Product</li>
                  <li>Total</li>
                </ul>
              </div>

              <div class="your-order-bottom">
                <ul>
                  <li class="your-order-shipping">Shipping</li>
                  <li>Free shipping</li>
                </ul>
              </div>
              <div class="your-order-total mb-0">
                <ul>
                  <li class="order-total">Total</li>
                  <li>$329</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="Place-order mt-25">
            <a class="btn btn--lg btn-primary mr-3" href="#">update cart</a>
            <a class="btn btn--lg btn-primary my-2 my-sm-0" href="#">checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

