@extends('frontend.layouts.master')

    @section('title')
    Login
    @endsection

    @section('css')
    @endsection

    @section('slideImages')
    @endsection

    @section('imagesBanner')
    @endsection

    @section('script')
    @endsection

    @section('content')
        <section id="wrapper">

              <div class="container">

            <nav data-depth="1" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">


        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <span class="navigation-pipe">/</span>
          <a itemprop="item" href="https://apollotran.com/prestashop/leo_cosmetics/en/">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>


  </ol>
</nav>

          <div class="row">



  <div id="content-wrapper" class="col-lg-12 col-xs-12">



  <section id="main">



        <header class="page-header">
          <h1>
  Log in to your account
</h1>
        </header>




      <section id="content" class="page-content card card-block">



      <section class="login-form">





  <form id="login-form" action="https://apollotran.com/prestashop/leo_cosmetics/en/login?back=my-account" method="post">

    <section>




    <input type="hidden" name="back" value="my-account">






  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">



          <input class="form-control" name="email" type="email" value required>






    </div>

    <div class="col-md-3 form-control-comment">


    </div>
  </div>





  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Password
          </label>
    <div class="col-md-6">



          <div class="input-group js-parent-focus">
            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value pattern=".{5,}" required>
            <span class="input-group-btn">
              <button class="btn btn-outline" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                Show
              </button>
            </span>
          </div>






    </div>

    <div class="col-md-3 form-control-comment">


    </div>
  </div>




      <div class="forgot-password">
        <a href="https://apollotran.com/prestashop/leo_cosmetics/en/password-recovery" rel="nofollow">
          Forgot your password?
        </a>
      </div>
    </section>


      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit">
            Sign in
          </button>

      </footer>


  </form>


      </section>
      <hr>



      <div class="no-account">
        <a href="{{route('frontend.register')}}">
          No account? Create one here
        </a>
      </div>


      </section>



      <footer class="page-footer">

          <!-- Footer content -->

      </footer>


  </section>



  </div>



          </div>
                  </div>

      </section>
    @endsection
