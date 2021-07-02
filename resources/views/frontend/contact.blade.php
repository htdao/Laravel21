@extends('frontend.layouts.master')

@section('title')
Contact
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

    <nav data-depth="2" class="breadcrumb hidden-sm-down">
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">


        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <span class="navigation-pipe">/</span>
          <a itemprop="item" href="https://apollotran.com/prestashop/leo_cosmetics/en/">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>


        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <span class="navigation-pipe">/</span>
          <a itemprop="item" href="https://apollotran.com/prestashop/leo_cosmetics/en/contact-us">
            <span itemprop="name">Contact us</span>
          </a>
          <meta itemprop="position" content="2">
        </li>


      </ol>
    </nav>

    <div class="row">

      <div id="left-column" class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
        <div class="contact-rich">
          <h4>Store information</h4>
          <div class="block">
            <div class="icon"><i class="material-icons">&#xE55F;</i></div>
            <div class="data">Leo Cosmetics<br>United States</div>
          </div>
          <hr>
          <div class="block">
            <div class="icon"><i class="material-icons">&#xE158;</i></div>
            <div class="data email">
              Email us:<br>
              <a href="mailto:leotheme@gmail.com">leotheme@gmail.com</a>
            </div>
          </div>
        </div>

      </div>



      <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-8 col-lg-9">



        <section id="main">




          <section id="content" class="page-content card card-block">


            <section class="contact-form">
              <form action="https://apollotran.com/prestashop/leo_cosmetics/en/contact-us" method="post" enctype="multipart/form-data">


                <section class="form-fields">

                  <div class="form-group row">
                    <div class="col-md-12">
                      <h3>Contact us</h3>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Subject</label>
                    <div class="col-md-6">
                      <select name="id_contact" class="form-control form-control-select">
                        <option value="2">Customer service</option>
                        <option value="1">Webmaster</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Email address</label>
                    <div class="col-md-6">
                      <input class="form-control" name="from" type="email" value placeholder="your@email.com">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Attachment</label>
                    <div class="col-md-6">
                      <input type="file" name="fileUpload" class="filestyle" data-buttonText="Choose file">
                    </div>
                    <span class="col-md-3 form-control-comment">
                      optional
                    </span>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Message</label>
                    <div class="col-md-9">
                      <textarea class="form-control" name="message" placeholder="How can we help?" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="offset-md-3">

                    </div>
                  </div>

                </section>

                <footer class="form-footer text-sm-right">
                  <style>
                  input[name=url] {
                    display: none !important;
                  }
                </style>
                <input type="text" name="url" value>
                <input type="hidden" name="token" value="46662e3f1788a6afa5539f90507b0497">
                <input class="btn btn-primary" type="submit" name="submitMessage" value="Send">
              </footer>

            </form>
          </section>


        </section>



        <footer class="page-footer">

          <!-- Footer content -->

        </footer>


      </section>
@endsection
