@extends('layouts.master')
@section('content')
    @include('home.slider')

    <!-- ================================ ABOUT =============================== -->

    @include('home.about')

    <!-- ================================ WORK =============================== -->

  @include('home.projek')

    <!-- ============================================== SERVICE ===================================================== -->

    <div id="service">
        <div id="service-content">
            <div class="service-grid text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-center wow fadeIn" data-wow-delay=".2s">
                                <h3>Layanan Kami</h3>
                                <div class="underline"></div>
                            </div><!-- end service-title  -->
                        </div><!-- end col-md-12  -->
                    </div><!-- end row  -->
                    <div class="row service-row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".4s">
                                <i class="fa fa-pencil-square-o service-icon" aria-hidden="true"></i>
                                <h3>Fotografi</h3>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".6s">
                                <i class="fa fa-cogs service-icon" aria-hidden="true"></i>
                                <h3>Filmaker</h3>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".2s">
                                <i class="fa fa-file-image-o service-icon" aria-hidden="true"></i>
                                <h3>Desain</h3>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn">
                                <i class="fa fa-heart-o service-icon" aria-hidden="true"></i>
                                <h3>3D2D</h3>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".4s">
                                <i class="fa fa-hourglass service-icon" aria-hidden="true"></i>
                                <h3>Motion Graphic</h3>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service-details wow fadeIn" data-wow-delay=".6s">
                                <i class="fa fa-newspaper-o service-icon" aria-hidden="true"></i>
                                <h3>Portofolio</h3>
                            </div><!-- end service-details  -->
                        </div><!-- end col-md-4  -->
                    </div><!-- end row  -->
                </div><!-- end container  -->
            </div><!-- end service-grid  -->
        </div><!-- end service-content  -->
    </div><!-- end service  -->

    <!-- ============================================== TEAM ================= -->

    @include('home.team')

    <!-- ================================ CONTACT =============================== -->

    <div id="contact">
        <div class="contact-content">
            <div class="contact-grid">
                <div class="contact-form-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2  contact-col">
                                <div class="contact-title text-center ">
                                    <h3>Hubungi Kami!</h3>
                                    <div class="underline"></div>
                                </div><!-- end contact-title -->
                                <div class="contact-form wow fadeIn">
                                    <form id="contactForm" class="contact-form shake" data-toggle="validator">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" id="name" class="form-control" placeholder="Nama" required data-error="Data tidak boleh kosong">
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Data tidak boleh kosong">
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" id="msg_subject" class="form-control" placeholder="Subjek" required data-error="Data tidak boleh kosong">
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="message" rows="7" placeholder="Pesan" class="form-control" required data-error="Data tidak boleh kosong"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->
                                        <button type="submit" id="submit" class="btn btn-success">Kirim</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div><!-- end contact-form -->
                            </div><!-- end col-md-8 -->
                        </div><!-- end row -->
                        <div class="row contact-row text-center">
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-col-grid" data-wow-delay=".2s">
                                    <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
                                    <h3>Alamat</h3>
                                    <p>Kab. Bandung</p>
                                </div><!-- end contact-col  -->
                            </div><!-- end col-md-4  -->
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-col-grid" data-wow-delay=".4s">
                                    <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                                    <h3>Email</h3>
                                    <p>mahamedia2021@gmail.com</p>
                                </div><!-- end contact-col  -->
                            </div><!-- end col-md-4  -->
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-col-grid" data-wow-delay=".6s">
                                    <i class="fa fa-mobile contact-icon" aria-hidden="true"></i>
                                    <h3>Ponsel</h3>
                                    <p>+621234567890</p>
                                </div><!-- end contact-col  -->
                            </div><!-- end col-md-4  -->
                        </div><!-- end row  -->
                    </div><!-- end container -->
                </div><!-- end contact-form-details -->
                <!-- end copyright-details -->
            </div><!-- end contact-grid -->
        </div><!-- end contact-content -->
    </div><!-- end contact -->

@endsection
