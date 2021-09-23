@extends('layouts.frontend.app',[
'title' => 'About',
])
@section('content')
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="page-content">

                        <h4>TENTANG HMJ-SI</h4>
                        <p> Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu wadah yang
                            menampung mahasiswa Sistem Informasi yang mengatur jalannya roda
                            organisasi yang dihimpun dalam anggaran dasar dan anggaran rumah tangga
                            untuk menciptakan suasanan kehidupan organisasi yang kondusif dan
                            dinamis</p>
                        <br>

                        <h4>VISI</h4>
                        <p>Mengembangkan kader yang beriman dan bertakwa kepada Allah SWT serta
                            memiliki pengetahuan yang inovatif, kemampuan terampil, rasa tanggung
                            jawab dan memberikan manfaat untuk keluarga besar sistem informasi yang
                            menjunjung tinggi nilai kekeluargaan dan kebersamaan.</p>
                        <br>
                        <h4>MISI</h4>
                        <ol>
                            <li>
                                <p>1. Mewujudkan kader HMJ – SI yang berorientasi kepada al-qur’an dan
                                    hadist.
                                </p>
                            </li>
                            <li>
                                <p>2. Mewujudkan HMJ – SI yang berorientasi akademik dengan pengembangan
                                    Teknologi informasi dan bisnis.
                                </p>
                            </li>
                            <li>
                                <p>3. Membangun HMJ – SI yang dilatar belakangi oleh proses kaderisasi yang
                                    berkesinambungan yang telah diatur dalam GDK
                                </p>
                            </li>
                            <li>
                                <p>4. Meningkatkan kualitas dibidang pendidikan, keilmuan teknologi dan
                                    keorganisasian.
                                </p>
                            </li>
                            <li>
                                <p>5. Menjalin hubungan yang baik dengan pihak internal maupun eksternal
                                    HMJ – SI.

                                </p>
                            </li>
                            <li>
                                <p>6. Mengadakan kegiatan-kegiatan yang dapat meningkatkan pengetahuan
                                    keilmuan dan pengalaman keluarga besar mahasiswa Jurusan Sistem
                                    Informasi.
                                </p>
                            </li>
                            <li>
                                <p>7. Mengadakan kegiatan-kegiatan sosial sebagai wujud pengabdian
                                    masyarakat.
                                </p>
                            </li>
                            <li>
                                <p>8. Menjadikan HMJ – SI sebagai wadah aspirasi keluarga besar Jurusan
                                    Sistem Informasi.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>


                <div class="col-md-4 mb-3" style="margin-top: 50px;">
                    <div class="card" style="text-align: center;">
                        <div class="card-header">
                            {{ 'Ketua umum' }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('img/photo') }}/adlyy.jpeg" width="100%"
                                style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! 'adly alqadrawy' !!}
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3" style="margin-top: 50px;">
                    <div class="card" style="text-align: center;">
                        <div class="card-header">
                            {{ 'Sekretaris' }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('img/photo') }}/ozann.jpeg" width="100%"
                                style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! 'Muhammad fauzan' !!}
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3" style="margin-top: 50px;">
                    <div class="card" style="text-align: center;">
                        <div class="card-header">
                            {{ 'Bendahara' }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('img/photo') }}/rindii.jpeg" width="100%"
                                style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! 'Rindi Antika' !!}
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
