<footer class="bg-light theme1 position-relative">
  <!-- footer bottom start -->
  <div class="footer-bottom pt-80 pb-30">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4 mb-30">
          <div class="footer-widget mx-w-400">
            <div class="footer-logo mb-25">
              <a href="index.html">
                <img src="/frontend/images/logo.png" alt="footer logo">
              </a>
            </div>
            <p class="text mb-30">
                Đến với Chúng tôi các bạn có quyền
                được yên tâm khi mua sắm cũng như được đáp ứng mọi nhu cầu về làm đẹp. Với phương châm luôn
                nỗ lực vì khách hàng thân yêu, Chúng tôi không ngừng cố gắng để xứng đáng là địa điểm mua sắm
                tin cậy trong lòng các bạn trẻ.
            </p>

            <div class="social-network">
              <ul class="d-flex">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=100041834506020" target="_blank"><span class="icon-social-facebook"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Menu</h2>
              </div>
            </div>
            <!-- footer-menu start -->
            <ul class="footer-menu">
              <li><a href="{{route('frontend.home')}}">Trang chủ</a></li>
                <li><a href="{{route('frontend.product.index')}}">Cửa hàng</a></li>
              <li><a>Thương hiệu</a></li>
              <li><a>Dạnh mục</a></li>
{{--              <li><a href="{{route('frontend.home.contact')}}">Liên hệ</a></li>--}}
            </ul>
            <!-- footer-menu end -->
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Tài khoản</h2>
              </div>
            </div>
            <!-- footer-menu start -->
            <ul class="footer-menu">
{{--              <li><a href="#">Mới</a></li>--}}
{{--              <li><a href="#">Phổ biến</a></li>--}}
              <li><a href="{{route('user.login.form')}}">Đăng nhập</a></li>
              <li><a href="{{route('register.form')}}">Đăng ký</a></li>
            </ul>
            <!-- footer-menu end -->
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Liên hệ với chúng tôi</h2>
              </div>
            </div>
              <ul class="footer-menu">
                  <li><a href="#">Điện thoại: (+123)4567890</a></li>
                  <li><a href="#">Email: htdao00@gmail.com</a></li>
                  <li><a href="">Facebook: https://www.facebook.com/profile.php?id=100041834506020</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer bottom end -->
  <!-- coppy-right start -->
  <div class="coppy-right bg-dark py-15">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4 order-last order-md-first">
          <div class="text-md-left text-center mt-3 mt-md-0">
            <p>
              Copyright &copy; <a href="https://hasthemes.com/">Daoht</a>
              2021
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- coppy-right end -->
</footer>
