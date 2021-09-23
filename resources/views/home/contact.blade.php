@extends('layouts.frontend.app',[
'title' => 'Contact',
])
@section('content')

    <section class="contact-area">

        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="contact--info mt-50">
                        <h4>Lokasi</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.3401303358862!2d119.49669168813924!3d-5.205906299762738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3e4e58d4ff7%3A0x2ce201222ca0c580!2sRomangpolong%2C%20Kec.%20Somba%20Opu%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan%2092113!5e0!3m2!1sid!2sid!4v1632198172937!5m2!1sid!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50">
                        <h4>Info Kontak</h4>
                        <ul class="contact-list">
                            <li>
                                <h6><i class="fa fa-facebook" aria-hidden="true"></i> facebook</h6>
                                <a href="https://www.facebook.com/hmjsi.uinam" target="_blank">
                                    <h6> hmjsi.uinam</h6>
                                </a>
                            </li>

                            <li>
                                <h6><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</h6>
                                <a href="https://instagram.com/hmjsi.uinam?utm_medium=copy_link" target="_blank">
                                    <h6> hmjsi.uinam</h6>
                                </a>
                            </li>

                            <li>
                                <h6><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</h6>
                                <a href=" https://twitter.com/hmjsi_uinam?s=21" target="_blank">
                                    <h6>
                                        hmjsi_uinam</h6>
                                </a>
                            </li>
                            <li>
                                <h6><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</h6>
                                <a href="https://youtube.com/channel/UCMTV4qMNUkepi6n5eTQeoYw" target="_blank">
                                    <h6>
                                        hmjsi.uinam</h6>
                                </a>
                            </li>

                            <li>
                                <h6><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Email</h6>
                                <h6>
                                    hmj.si@uin-alauddin.ac.id</h6>
                            </li>

                            <li>
                                <h6><i class="fa fa-map-pin fa-fw" aria-hidden="true"></i> Alamat</h6>
                                <h6>Gedung Sekretariat Fak. SainTek No. 3</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50 mb-50">
                        <h4>Tulis Pesan</h4>
                        <form action="mailto:maulidanimahmud@gmail.com" method="post" enctype="text/plain">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="text" placeholder="Nama">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="mail" id="email"
                                            placeholder="Email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="isi" id="comment" cols="30" rows="5"
                                            placeholder="Pesan"></textarea>
                                    
                                        @error('isi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                @csrf
                                <div class="col-12">
                                    <button class="btn clever-btn w-100" type="submit">Kirim</button>
                                </div>
                            </div>
                            <!-- </form> -->
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@stop
