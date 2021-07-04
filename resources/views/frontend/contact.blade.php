@extends('frontend.layouts.master')

@section('title')
    Liên hệ
    @endsection

    @section('css')
    @endsection

    @section('script')
    @endsection

    @section('banner')
    @endsection

    @section('content')
        <nav class="breadcrumb-section theme1 bg-lighten2 pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title pb-4 text-dark text-capitalize">Liên hệ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- breadcrumb-section end -->
        <!-- map start -->

        <!-- map end -->
        <!-- contact-section satrt -->
        <section class="contact-section pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-30">
                        <!--  contact page side content  -->
                        <div class="contact-page-side-content">
                            <!--  single contact block  -->

                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                                <p>123 Main Street, Anytown, CA 12345 – USA</p>
                            </div>

                            <!--  End of single contact block -->

                            <!--  single contact block -->

                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Điện thoại</h4>
                                <p>
                                    <a href="tel:123456789">Mobile: (08) 123 456 789</a>
                                </p>
                                <p><a href="tel:1009678456">Hotline: 1009 678 456</a></p>
                            </div>

                            <!-- End of single contact block -->

                            <!--  single contact block -->

                            <div class="single-contact-block">
                                <h4><i class="fas fa-envelope"></i> Email</h4>
                                <p>
                                    <a href="mailto:yourmail@domain.com">yourmail@domain.com</a>
                                </p>
                                <p>
                                    <a href="mailto:support@hastech.company">support@hastech.company</a>
                                </p>
                            </div>

                            <!--=======  End of single contact block  =======-->
                        </div>

                        <!--=======  End of contact page side content  =======-->
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <!--  contact form content -->
                        <div class="contact-form-content">
                            <h4 class="text-bold" style="font-weight: bold; margin-bottom: 20px">Nội dung thư của bạn</h4>
                            <div class="contact-form">
                                <form id="contact-form" action="assets/php/contact.php" method="POST">
                                    <div class="form-group">
                                        <label>Họ Tên <span class="required">*</span></label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea name="contactMessage" class="pb-10" id="contactMessage"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" value="submit" id="submit" class="btn btn-dark btn--lg" name="submit">
                                            Gửi
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <p class="form-message mt-10"></p>
                        </div>
                        <!-- End of contact -->
                    </div>
                </div>
            </div>
        </section>
    @endsection
