@extends('layouts.app')

@section('content')
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <section class="box-personnel">
        <div class="title-personnel">คณะผู้บริหาร</div>
        {{-- <div class="personnel-box">
            <div class="personnel-box-p1">
                <div id="carouselpersonnel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel"
                    data-bs-interval="3500">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/personnel/นายกanimate/นายก-1.png" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/personnel/นายกanimate/นายก-2.png" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/personnel/นายกanimate/นายก-3.png" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
                <div class="personnel-box-detail-ny">
                    <div class="per-b-name">นางสมจิตร์ พันธุ์สุวรรณ</div>
                    <div class="per-b-position">นายกเทศมนตรีตำบลท่าข้าม</div>
                </div>
                <div class="per-b-tel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="p-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <a href="tel:038573411" class="no-underline">038573411</a>
                </div>
            </div>
            <div class="personnel-box-group">
                <div class="personnel-box-group-one">

                    <div class="personnel-box-p2">
                        <img src="/img/personnel/รองนายก1.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นายสมประสงค์ สายสิณะวัฒน์</div>
                            <div class="per-b-position-p2">รองนายกเทศมนตรีตำบลท่าข้าม </div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                    <div class="personnel-box-p2">
                        <img src="/img/personnel/รองนายก2.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นายสมศักดิ์ จรุญเลิศ</div>
                            <div class="per-b-position-p2">รองนายกเทศมนตรีตำบลท่าข้าม </div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                    <div class="personnel-box-p2">
                        <img src="/img/personnel/ที่ปรึกษา1.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นางพรภินันท์ ภู่ทวี</div>
                            <div class="per-b-position-p2">ที่ปรึกษานายกเทศมนตรีตำบลท่าข้าม</div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                    <div class="personnel-box-p2">
                        <img src="/img/personnel/ที่ปรึกษา2.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นายวสันต์ วรรณทอง</div>
                            <div class="per-b-position-p2">ที่ปรึกษานายกเทศมนตรีตำบลท่าข้าม</div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                </div>
                <div class="personnel-box-group-two">
                    <div class="personnel-box-p2">
                        <img src="/img/personnel/ที่ปรึกษาพิเศษ1.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นายพิชัย พันธุ์สุวรรณ</div>
                            <div class="per-b-position-p2">ที่ปรึกษาพิเศษ </div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                    <div class="personnel-box-p2">
                        <img src="/img/personnel/ที่ปรึกษาพิเศษ2.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นามานิตย์ ดีเอื้อ</div>
                            <div class="per-b-position-p2">ที่ปรึกษาพิเศษ</div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                    <div class="personnel-box-p2">
                        <img src="/img/personnel/ที่ปรึกษาพิเศษ3.png" class="img-personnel">
                        <div class="person-box-background"></div>
                        <div class="personnel-box-detail-p2">
                            <div class="per-b-name-p2">นางมณี จิตมาศฐาน</div>
                            <div class="per-b-position-p2">ที่ปรึกษาพิเศษ</div>
                        </div>
                        <div class="per-b-tel-p2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="p-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <a href="tel:038573411" class="no-underline">038573411</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="box-iii">
         <div class="box-personnel-iii bnp01">
             <img src="/img/personnel/0601001.png?1" alt="" class="bg-ons-button-bnp01">
             <div class="name-bnp01">นายรุ่งโรจน์ กิติพิศาลกุล</div>
             <div class="ii">นายกเทศมนตรีตำบลบ้านโพธิ์</div>
             <div class="tel-i"><a href="tel:0637952282">06-3795-2282</a></div>
        </div>
         <div class="box-personnel-iii bnp02">
             <img src="/img/personnel/0601002.png?2" alt="" class="bg-ons-button-bnp02">
             <div class="name-bnp02">นายจำเนียร จันทร์สร้อย</div>
             <div class="ii">รองนายกเทศมนตรีตำบลบ้านโพธิ์</div>
             <div class="tel-i"><a href="tel:0867335064">08-6733-5064</a></div>
        </div>
         <div class="box-personnel-iii bnp03">
             <img src="/img/personnel/0601003.png?3" alt="" class="bg-ons-button-bnp03">
             <div class="name-bnp03">นายไชยวัฒน์ ศรีวิไลสกุลวงศ์</div>
             <div class="ii">รองนายกเทศมนตรีตำบลบ้านโพธิ์</div>
             <div class="tel-i"><a href="tel:08-1910-0491">08-1910-0491</a></div>
        </div>
         <div class="box-personnel-iii bnp04">
             <img src="/img/personnel/0601004.png?4" alt="" class="bg-ons-button-bnp04">
             <div class="name-bnp04">นายณัฐพล วงศ์วัฒน์</div>
             <div class="ii">เลขานุการนายกเทศมนตรี</div>
             <div class="tel-i"><a href="tel:06-2625-0766">06-2625-0766</a></div>
        </div>
         <div class="box-personnel-iii bnp05">
             <img src="/img/personnel/0601005.png?5" alt="" class="bg-ons-button-bnp05">
             <div class="name-bnp05">นายประดิษฐ โรจนพร</div>
             <div class="ii">ที่ปรึกษานายกเทศมนตรี</div>
             <div class="tel-i"><a href="tel:08-1686-8366">08-1686-8366</a></div>
        </div>
        </div>
    </section>
    <div class="banner-new-2026">
        <div class="banner-new-2026-i">
            <a href="/directory/menu/50"><img src="/img/banner2026/1.png" class=""> </a>
        </div>
        <div class="banner-new-2026-i">
            <a href="/articles/menu/51"><img src="/img/banner2026/2.png" class=""> </a>
        </div>
        <div class="banner-new-2026-i">
            <a href="/complaint/menu/35"><img src="/img/banner2026/3.png" class=""> </a>
        </div>
        <div class="banner-new-2026-i">
            <a href="/corruption/menu/36"><img src="/img/banner2026/4.png" class=""> </a>
        </div>
        <div class="banner-new-2026-i">
            <a href="/directory/menu/57"><img src="/img/banner2026/5.png" class=""> </a>
        </div>
        <div class="banner-new-2026-i">
            <a href="/directory/menu/58"><img src="/img/banner2026/6.png" class=""> </a>
        </div>
    </div>
    {{-- <div class="banner-top-2">
        <div class="divider-line-2"></div>
        <div class="box-iio">
            <a href="/directory/menu/38/cate/95"><img src="/img/banner/0001.png" class="banner-top-img-2"> </a>
        </div>
        <div class="box-iio">
            <a href="https://eservices.thakam.go.th/FormeService/id/3" target="_blank"><img
                    src="/img/banner/0002.png" class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="https://welfare.dla.go.th/webview/" target="_blank"><img src="/img/banner/0003.png"
                    class="banner-top-img-2"></a>

        </div>
        <div class="box-iio">
            <a href="/satisfaction/menu/43"><img src="/img/banner/0004.png" class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="https://welfare.dla.go.th/webview/"><img src="/img/banner/0005.png" class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="/articles/menu/58"><img src="/img/banner/0006.png" class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="https://eservices.thakam.go.th/FormeService/id/1"><img src="/img/banner/0007.png"
                    class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="/webboard/menu/75"><img src="/img/banner/0008.png" class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="/directory/menu/38/cate/94"><img src="/img/banner/0009.png" class="banner-top-img-2"></a>
        </div>
        <div class="box-iio">
            <a href="/directory/menu/46"><img src="/img/banner/0010.png" class="banner-top-img-2"></a>
        </div>
    </div> --}}

    <section class="box-video">
        <div class="video-text">
            <div class="video-title">
                <span style="color: #008880;">วีดีทัศน์</span><span class="#003E4D">แนะนำ</span>
            </div>
            <div class="video-nameweb">
                <span style="color: #008880;">เทศบาลตำบล</span><span class="#003E4D">บ้านโพธิ์</span>
            </div>
        </div>

        <div class="video-view">
            <div class="">
                <div class="video-show">
                    @if (!empty($video) && $video->slide_link !== '#')
                        @if ($video->slide_type == 'L')
                            @php
                                $videoUrl = $video->slide_link;
                                $videoId = null;

                                if (strpos($videoUrl, 'youtube.com/watch') !== false) {
                                    $query = parse_url($videoUrl, PHP_URL_QUERY);
                                    parse_str($query, $params);
                                    $videoId = $params['v'];
                                } elseif (strpos($videoUrl, 'youtu.be/') !== false) {
                                    $videoId = basename(parse_url($videoUrl, PHP_URL_PATH));
                                }
                            @endphp

                            <iframe width="1200" height="680"
                                src="https://www.youtube.com/embed/{{ $videoId }}?si=2nJqA0yQzUPwTWvj&amp;start=206"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        @else
                            <video controls width="1200" height="680">
                                <source src="{{ asset('storage/' . $video->slide_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @else
                        <div class="">ไม่พบข้อมูล</div>
                    @endif
                </div>
                <div class="box-button">
                    <a href="#" class="no-underline b-video">English Version</a>
                    <a href="#" class="no-underline b-video">Thai Version</a>
                </div>
            </div>
            <div class="slide-in-video">

                <div id="carouselExampleSlides" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-interval="2500">
                    <!-- สไลด์ -->
                    <div class="carousel-inner">
                        @forelse($SlideMenu88 as $slide)
                            <a href="/slideDetail/menu/80/id/{{ $slide->slide_id }}">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $slide->slide_path) }}" class="d-block slide-88"
                                        alt="...">
                                </div>
                        </a @empty <div class="">ไม่พบข้อมูล
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
        </div>

    </section>

    <section class="banner-one-stop-service">
        <div class="box-one-stop-service">
            <a href="/categories/menu/38" target="_blank"> <img
                    src="/img/OneStopService/bn01.jpg" alt="" class="bg-ons-button-bn01"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="/directory/menu/39" target="_blank">
                <img src="/img/OneStopService/bn02.jpg" alt="" class="bg-ons-button-bn02"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="/satisfaction/menu/54" target="_blank">
                <img src="/img/OneStopService/bn03.jpg" alt="" class="bg-ons-button-bn03"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="https://welfare.dla.go.th/webview/" target="_blank">
                <img src="/img/OneStopService/bn04.jpg" alt="" class="bg-ons-button-bn04"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="https://welfare.dla.go.th/webview/" target="_blank">
                <img src="/img/OneStopService/bn05.jpg" alt="" class="bg-ons-button-bn05"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="/directory/menu/38/cate/95" target="_blank">
                <img src="/img/OneStopService/bn06.jpg" alt="" class="bg-ons-button-bn06"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="/categories/menu/38" target="_blank">
                <img src="/img/OneStopService/bn07.jpg" alt="" class="bg-ons-button-bn07"></a>
        </div>
        <div class="box-one-stop-service">
            <a href="/webboard/menu/56" target="_blank">
                <img src="/img/OneStopService/bn08.jpg" alt="" class="bg-ons-button-bn08"></a>
        </div>

        <img src="/img/OneStopService/001.jpg" alt="" class="bg-ons">

    </section>
    <section class="banner-box-one">
        <div class="banner-smartcity-body-one">
            <div class="smartcity-one">
                <a href="/listformeservice/menu/40" class="" target="_blank">
                    <img src="/img/SmartCity/Eservice.jpg" class="banner-smartcity no-underline">
                </a>

                <a href="http://www.damrongdhama.moi.go.th/home/" class=""
                    target="_blank">
                    <img src="/img/SmartCity/ศูนย์ดำรงธรรม.png" class="banner-smartcity no-underline">
                </a>
                <a href="https://anonymous.pacc.go.th/" class=""
                    target="_blank">
                    <img src="/img/SmartCity/SMT-7-2.jpg" class="banner-smartcity no-underline">
                </a>

            </div>
            <div class="smartcity-one">
                <a href="https://www.facebook.com/thesbal.tabl.banphothi.chacheingthera/reels/" class="" target="_blank">
                    <img src="/img/SmartCity/Facebook.png" class="banner-smartcity no-underline">
                </a>

                <a href="https://www.admincourt.go.th/" class=""
                    target="_blank">
                    <img src="/img/SmartCity/ศาลปกครอง.png" class="banner-smartcity no-underline">
                </a>
                <a href="https://infocenter.oic.go.th/%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B9%82%E0%B8%9E%E0%B8%98%E0%B8%B4%E0%B9%8C%20%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%89%E0%B8%B0%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%A3%E0%B8%B2" class="" target="_blank">
                    <img src="/img/SmartCity/OIC (2).png" class="banner-smartcity no-underline">
                </a>

                <a href="https://www.nacc.go.th/allcomplaint" class="" target="_blank">
                    <img src="/img/SmartCity/SMT-7-1.png" class="banner-smartcity no-underline">
                </a>
            </div>
        </div>
    </section>

    {{-- <section class="banner-one-stop-service">
        <div class="box-one-stop-service">

            <div class="ons-box-one">

                <div class="ons-box-button-one">
                    <a href="https://thakam.trash.sosmartsolution.com/user/waste_payment" target="_blank"> <img
                            src="/img/OneStopService/oss-1.png" alt="" class="bg-ons-button"></a>
                    <a href="https://thakam.trash.sosmartsolution.com/user/request/health_hazard_license" target="_blank">
                        <img src="/img/OneStopService/oss-2.png" alt="" class="bg-ons-button"></a>
                    <a href="https://thakam.trash.sosmartsolution.com/user/emergency/accident" target="_blank"> <img
                            src="/img/OneStopService/oss-3.png" alt="" class="bg-ons-button"></a>
                    <a href="https://eservices.thakam.go.th/Requestforms" target="_blank"> <img
                            src="/img/OneStopService/oss-4.png" alt="" class="bg-ons-button"></a>
                </div>

            </div>
            <div class="ons-box-button-two">
                <a href="https://thakam.trash.sosmartsolution.com/login" target="_blank"> <img src="/img/03/Member_0.png"
                        alt="" class="bg-ons-button-member" style="float: right;"></a>
                <a href="https://thakam.trash.sosmartsolution.com/register" target="_blank"> <img
                        src="/img/03/General Public_0.png" alt="" class="bg-ons-button-public"></a>
            </div>
        </div>
        <img src="/img/OneStopService/oss.jpg" alt="" class="bg-ons">

    </section> --}}


    <section class="box-activity-relations">
        <div class="box-activity">
            <div class="title-activity">
                <div class="text-activity">
                    <span class="title-activity-top">ข่าวกิจกรรม</span>
                    <span class="title-activity-button"><b>Activity</b> news</span>
                </div>
                {{-- <img src="/img/activity-loma.png" style="height: 182px;" class="activity-loma"> --}}
            </div>
            <div class="activity-directory">

                @forelse($activity as $list)
                    <div class="card-activity">
                        <a href="/directoryDetail/menu/52/id/{{ $list->main_id }}" class="no-underline">
                            <div class="card-activity-body">

                                <div class="activity-img">
                                    <div class="view-count">
                                        👁️ เข้าชม {{ $list->texteditor_view ?? 0 }} ครั้ง
                                    </div>

                                    @if ($list->texteditor_topic_picture)
                                        <img src="{{ asset('storage/' . $list->texteditor_topic_picture) }}"
                                            alt="topic picture" width="420" style="border-radius: 20px">
                                    @else
                                        <img src="{{ asset('img/representation.png?11') }}" alt="default logo"
                                            width="420" style="border-radius: 30px">
                                    @endif

                                </div>
                                @php
                                    $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                    $months = [
                                        1 => 'มกราคม',
                                        2 => 'กุมภาพันธ์',
                                        3 => 'มีนาคม',
                                        4 => 'เมษายน',
                                        5 => 'พฤษภาคม',
                                        6 => 'มิถุนายน',
                                        7 => 'กรกฎาคม',
                                        8 => 'สิงหาคม',
                                        9 => 'กันยายน',
                                        10 => 'ตุลาคม',
                                        11 => 'พฤศจิกายน',
                                        12 => 'ธันวาคม',
                                    ];
                                    $day = $date->day;
                                    $month = $months[$date->month];
                                    $year = $date->year + 543;
                                @endphp
                                <div class="activity-date">{{ $day }} {{ $month }} {{ $year }}
                                </div>
                                <div class="activity-title">
                                    {{ \Illuminate\Support\Str::limit($list->texteditor_title, 30) }}</div>
                                <div class="activity-detail">
                                    {!! \Illuminate\Support\Str::limit(trim(strip_tags($list->texteditor_detail)), 10) !!}


                                </div>

                            </div>
                        </a>
                        <a href="/directoryDetail/menu/52/id/{{ $list->texteditor_id }}"
                            class="no-underline button-activity">อ่านเพิ่มเติม</a>
                    </div>
                @empty
                    <div class="">ไม่พบข้อมูล</div>
                @endforelse

            </div>
            @if (!empty($activity))
                <div class="box-all-activity">
                    <a href="/directory/menu/52" class="no-underline button-activity-all">ดูข่าวกิจกรรมทั้งหมด</a>
                </div>
            @endif

        </div>
        <div class="box-slide-menu">

            <div id="carouselExampleSlides" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="2500">
                <!-- สไลด์ -->
                <div class="carousel-inner">
                    @forelse($SlideMenu70 as $slide)
                        <a href="/slideDetail/menu/49/id/{{ $slide->slide_id }}">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/' . $slide->slide_path) }}" class="d-block w-100 slide-8"
                                    alt="..." style="width: 1586px; height:625px">
                            </div>
                        </a>
                    @empty
                        <div class="">ไม่พบข้อมูล</div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="box-news">
            <div class="title-news">
                <div class="text-news">
                    <div class="box-bg-title">
                        <span class="title-news-top">ข่าวประชาสัมพันธ์</span>
                        <span class="title-news-button">เทศบาลตำบลบ้านโพธิ์</span>
                    </div>

                </div>
            </div>

            <div class="activity-directory">

                @forelse($listMenu52 as $list)
                    <div class="card-activity">
                        <a href="/directoryDetail/menu/53/id/{{ $list->main_id }}" class="no-underline">
                            <div class="card-new-body">

                                <div class="activity-img">
                                    @if ($list->texteditor_topic_picture)
                                        <img src="{{ asset('storage/' . $list->texteditor_topic_picture) }}"
                                            alt="topic picture" width="150" height="150"
                                            style="border-radius: 30px">
                                    @else
                                        <img src="{{ asset('img/representation.png?22') }}" alt="default logo"
                                            width="150" height="150" style="border-radius: 30px">
                                    @endif

                                </div>
                                @php
                                    $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                    $months = [
                                        1 => 'มกราคม',
                                        2 => 'กุมภาพันธ์',
                                        3 => 'มีนาคม',
                                        4 => 'เมษายน',
                                        5 => 'พฤษภาคม',
                                        6 => 'มิถุนายน',
                                        7 => 'กรกฎาคม',
                                        8 => 'สิงหาคม',
                                        9 => 'กันยายน',
                                        10 => 'ตุลาคม',
                                        11 => 'พฤศจิกายน',
                                        12 => 'ธันวาคม',
                                    ];
                                    $day = $date->day;
                                    $month = $months[$date->month];
                                    $year = $date->year + 543;
                                @endphp
                                <div class="box-activity-id">
                                    <div class="activity-title"><b>
                                        {!! \Illuminate\Support\Str::limit(trim(strip_tags($list->texteditor_title)), 30) !!}
                                        {{-- {{ $list->texteditor_title }} --}}
                                    </b></div>
                                    <div class="activity-detail">
                                        {!! \Illuminate\Support\Str::limit(trim(strip_tags($list->texteditor_detail)), 10) !!}
                                    </div>
                                    <div class="activity-date">{{ $day }} {{ $month }}
                                        {{ $year }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="">ไม่พบข้อมูล</div>
                @endforelse

            </div>
            @if (!empty($activity))
                <div class="box-all-news">
                    <a href="/directory/menu/53" class="no-underline button-news-all">ดูข่าวประชาสัมพันธ์ทั้งหมด</a>
                </div>
            @endif

        </div>

    </section>

    <section class="box-here">

        <div class="title-news">
            <div class="text-news">
                <div class="box-bg-title">
                    <span class="title-news-top">ที่นี่เทศบาลตำบลบ้านโพธิ์</span>
                </div>

            </div>
        </div>
        <div class="box-slide-hrer">
            <div class="slide-img">
                <div id="carouselExampleSlidesHere" class="carousel slide carousel-fade carousel-slide-here"
                    data-bs-ride="carousel" data-bs-interval="2500">
                    <!-- สไลด์ -->
                    <div class="carousel-inner">

                        @forelse($SlideMenu8 as $slide)
                            <a href="/directoryDetail/menu/8/id/{{ $list->texteditor_id }}">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $slide->texteditor_topic_picture) }}"
                                        class="d-block w-100 slide-here" alt="...">
                                    <div class="carousel-caption  position-static">
                                        <div class="slide-text">
                                            {{ $slide->texteditor_title }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="">ไม่พบข้อมูล</div>
                        @endforelse
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesHere"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesHere"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="box-all-here">
                <a href="/directory/menu/8" class="no-underline button-here-all">ดูสถานที่ทั้งหมด</a>
            </div>
        </div>
        <div class="banner-service-one">
            <a href="/directory/menu/65" style="text-align: center;"> <img src="/img/here/S-1.jpg" class="button-here"
                    alt="" style="width: 65%;"></a>
            <a href="" style="text-align: center;"> <img src="/img/here/S-2.jpg" class="button-here"
                    alt="" style="width: 65%;"></a>
            <a href="/directory/menu/65" style="text-align: center;"> <img src="/img/here/S-3.jpg" class="button-here"
                    alt="" style="width: 65%;"></a>
        </div>
        <div class="banner-service-two">
            <div class="card-here">
                <a href="/calendar/menu/69"> <img src="/img/here/BannerText/Banner-Down-1-text.png"
                        class="button-here-text" alt=""></a>
                <a href="/directory/menu/41"> <img src="/img/here/BannerText/Banner-Down-2-text.png"
                        class="button-here-text" alt=""></a>
                {{-- <a href="/directory/menu/56"> <img src="/img/here/BannerText/Banner-Down-3-text.png"
                        class="button-here-text" alt=""></a> --}}
                {{-- <a href="/categories/menu/61"> <img src="/img/here/BannerText/Banner-Down-4-text.png"
                        class="button-here-text" alt=""></a> --}}
                {{-- <a href="https://eservices.thakam.go.th/FormeService/id/1" target="_blank"> <img
                        src="/img/here/BannerText/Banner-Down-5-text.png" class="button-here-text" alt=""></a> --}}
                <a href="/directory/menu/59"> <img src="/img/here/BannerText/Banner-Down-6-text.png"
                        class="button-here-text" alt=""></a>
                <a href="/categories/menu/60"> <img src="/img/here/BannerText/Banner-Down-7-text.png"
                        class="button-here-text" alt=""></a>
            </div>

        </div>
    </section>

    <section class="box-announce">
        <div class="announce-box">
            <div class="announce-title">
                <div class="announce-title-one">ประกาศจัดซื้อจัดจ้าง</div>
                <div class="announce-title-two">เทศบาลตำบลบ้านโพธิ์</div>
            </div>
            <div class="announce-body">
                <div class="tab-buttons">
                    <button class="active" onclick="openTab('egp')">ประกาศ E-GP</button>
                    <button onclick="openTab('buy')">ประกาศจัดซื้อจัดจ้าง</button>
                    <button onclick="openTab('result')">ผลประกาศจัดซื้อจัดจ้าง</button>
                    <button onclick="openTab('report')">ประกาศราคากลาง</button>
                </div>

                <div id="egp" class="tab-content active">

                    <div class="content-announce">
                        @forelse($egp as $list)
                            <a href="{{ $list->link }}" class="no-underline">
                                <div class="item">
                                    <div class="box-one-announce">
                                        @php
                                            $date = \Carbon\Carbon::parse($list->pub_date);
                                            $months = [
                                                1 => 'ม.ค',
                                                2 => 'ก.พ',
                                                3 => 'มี.ค',
                                                4 => 'เม.ย',
                                                5 => 'พ.ค',
                                                6 => 'มิ.ย',
                                                7 => 'ก.ค',
                                                8 => 'ส.ค',
                                                9 => 'ก.ย',
                                                10 => 'ต.ค',
                                                11 => 'พ.ย',
                                                12 => 'ธ.ค',
                                            ];
                                            $day = $date->day;
                                            $month = $months[$date->month];
                                            $year = $date->year + 543;
                                        @endphp
                                        <div class="item-icon">📄</div>
                                        <div class="item-text">
                                            <div class="item-date">{{ $day }}
                                                {{ $month }}{{ $year }}</div>
                                            {{ \Illuminate\Support\Str::limit($list->title, 70) }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="">ไม่พบข้อมูล</div>
                        @endforelse
                    </div>
                    <div class="box-all-announce">
                        <a href="http://" class="no-underline button-announce-all">ดูทั้งหมด</a>
                    </div>
                </div>

                <div id="buy" class="tab-content">

                    <div class="content-announce">

                        @forelse($listMenu48 as $list)
                            <a href="/directoryDetail/menu/42/id/{{ $list->texteditor_id }}" class="no-underline">
                                <div class="item">
                                    <div class="box-one-announce">
                                        @php
                                            $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                            $months = [
                                                1 => 'ม.ค',
                                                2 => 'ก.พ',
                                                3 => 'มี.ค',
                                                4 => 'เม.ย',
                                                5 => 'พ.ค',
                                                6 => 'มิ.ย',
                                                7 => 'ก.ค',
                                                8 => 'ส.ค',
                                                9 => 'ก.ย',
                                                10 => 'ต.ค',
                                                11 => 'พ.ย',
                                                12 => 'ธ.ค',
                                            ];
                                            $day = $date->day;
                                            $month = $months[$date->month];
                                            $year = $date->year + 543;
                                        @endphp
                                        <div class="item-icon">📄</div>
                                        <div class="item-text">
                                            <div class="item-date">{{ $day }}
                                                {{ $month }}{{ $year }}</div>
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}
                                        </div>
                                    </div>

                                    <div class="tag-announce">
                                        ประกาศจัดซื้อจัดจ้าง
                                        <div class="view-count-tag">👁️ เข้าชม {{ $list->texteditor_view ?? 0 }} ครั้ง
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @empty
                            <div class="">ไม่พบข้อมูล</div>
                        @endforelse
                    </div>
                    <div class="box-all-announce">
                        <a href="/directory/menu/42" class="no-underline button-announce-all">ดูทั้งหมด</a>
                    </div>
                </div>

                <div id="result" class="tab-content">

                    <div class="content-announce">

                        @forelse($listMenu49 as $list)
                            <a href="/directoryDetail/menu/43/id/{{ $list->texteditor_id }}" class="no-underline">
                                <div class="item">
                                    <div class="box-one-announce">
                                        @php
                                            $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                            $months = [
                                                1 => 'ม.ค',
                                                2 => 'ก.พ',
                                                3 => 'มี.ค',
                                                4 => 'เม.ย',
                                                5 => 'พ.ค',
                                                6 => 'มิ.ย',
                                                7 => 'ก.ค',
                                                8 => 'ส.ค',
                                                9 => 'ก.ย',
                                                10 => 'ต.ค',
                                                11 => 'พ.ย',
                                                12 => 'ธ.ค',
                                            ];
                                            $day = $date->day;
                                            $month = $months[$date->month];
                                            $year = $date->year + 543;
                                        @endphp
                                        <div class="item-icon">📄</div>
                                        <div class="item-text">
                                            <div class="item-date">{{ $day }}
                                                {{ $month }}{{ $year }}</div>
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}
                                        </div>
                                    </div>
                                    <div class="tag-announce">ผลประกาศจัดซื้อจัดจ้าง</div>
                                </div>
                            </a>
                        @empty
                            <div class="">ไม่พบข้อมูล</div>
                        @endforelse
                    </div>
                    <div class="box-all-announce">
                        <a href="/directory/menu/43" class="no-underline button-announce-all">ดูทั้งหมด</a>
                    </div>
                </div>

                <div id="report" class="tab-content">

                    <div class="content-announce">

                        @forelse($listMenu50 as $list)
                            <a href="/directoryDetail/menu/44/id/{{ $list->texteditor_id }}" class="no-underline">
                                <div class="item">
                                    <div class="box-one-announce">
                                        @php
                                            $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                            $months = [
                                                1 => 'ม.ค',
                                                2 => 'ก.พ',
                                                3 => 'มี.ค',
                                                4 => 'เม.ย',
                                                5 => 'พ.ค',
                                                6 => 'มิ.ย',
                                                7 => 'ก.ค',
                                                8 => 'ส.ค',
                                                9 => 'ก.ย',
                                                10 => 'ต.ค',
                                                11 => 'พ.ย',
                                                12 => 'ธ.ค',
                                            ];
                                            $day = $date->day;
                                            $month = $months[$date->month];
                                            $year = $date->year + 543;
                                        @endphp
                                        <div class="item-icon">📄</div>
                                        <div class="item-text">
                                            <div class="item-date">{{ $day }}
                                                {{ $month }}{{ $year }}</div>
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}
                                        </div>
                                    </div>
                                    <div class="tag-announce">ประกาศราคากลาง</div>
                                </div>
                            </a>
                        @empty
                            <div class="">ไม่พบข้อมูล</div>
                        @endforelse
                    </div>
                    <div class="box-all-announce">
                        <a href="/directory/menu/44" class="no-underline button-announce-all">ดูทั้งหมด</a>
                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="box-elibrary">
            <div class="elibrary-one-box">
                <div class="elibrary-one">
                    <div class="elibrary-text-one">
                        <span class="elibrary-text-1" style="font-size: 60px;">ช่องทางการติดตาม</span>
                        <span class="elibrary-text-2"
                            style="font-weight: 900;font-size: 200px;margin-top: -120px;">ข่าวสาร</span>
                    </div>
                    <div class="elibrary-img-one" style="margin-top: -50px;">
                        <img src="/img/09elibrary/Line-001.png" alt="">
                    </div>
                </div>
                <div class="elibrary-two"><img src="/img/09elibrary/E-Library.png" alt="" style="width: 90%;">
                </div>
                <div class="elibrary-three">
                </div>
            </div>
            <div class="elibrary-two-box">

                <iframe class="fb-page"
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthakam.go.th&tabs=timeline&width=340&height=750&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=6174507855916076"
                    width="340" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

            </div>
        </div> --}}
        {{-- <div class="e-book">
            <div class="content-book">

                @forelse($elibrary as $slide)
                    <div class="book">
                        <a class="" href="/elibrary/menu/78/id/{{ $slide->elibrary_id }}">
                            @if ($slide->elibrary_path_page)
                                <div class="book-cover cover1"
                                    style="background: url('{{ asset('storage/' . $slide->elibrary_path_page) }}');">
                                @else
                                    <div class="book-cover cover1"
                                        style="background: url('{{ asset('img/representation.png') }}');">
                            @endif

                            <div class="effect"></div>
                            <div class="light"></div>
                    </div>
                    <div class="book-inside">
                    </div>
                    </a>
            </div>
        @empty
            <div class="">ไม่พบข้อมูล</div>
            @endforelse

        </div>
        <div class="f-book">
            <img src="/img/09elibrary/Plank.png" alt="">
        </div>
        <div class="box-all-book">
            <a href="/elibrary/menu/78" class="no-underline button-book-all">ดูทั้งหมด</a>
        </div>
        </div> --}}
    </section>

    <section class="box-vote">
        <div class="lav-480">
            <div class="lav-t-480-1">แบบสำรวจความคิดเห็น</div>
            <div class="lav-t-480-2">ท่านคิดว่า เทศบาลตำบลบ้านโพธิ์ ควรเน้นแก้ปัญหาในเรื่องใดเป็นอันดับแรก?</div>
        </div>
        <form id="voteForm">
            @csrf
            <div class="vote">
                <div class="text-vote">
                    @foreach ($Vote as $list)
                        <label><input type="radio" name="vote" value="{{ $list->id }}">
                            {{ $list->topic }}</label>
                    @endforeach
                </div>
                <div class="bb-vote">
                    <button type="submit" class="s-vote">โหวต</button>
                </div>
            </div>
        </form>
        {{-- <img src="/img/background/BG-vote.png" alt="" style="width: 100%;"> --}}
        <img src="/img/background/แสดงความคิดเห็น1.png" alt="" style="width: 100%;">
    </section>

    <section class="box-map">
        <div class="map-one">
            <img src="/img/logo.png" alt="" width="200">
            <div class="text-map-one">
                <span style="font-size: 45px;color: #0a4275;">แผนที่</span>
                <span class="tm-one"
                    style="font-size: 80px;margin-top: -30px;font-weight: 800;color: #0a4275;">เทศบาลตำบลบ้านโพธิ์</span>
            </div>
        </div>
        <div class="map-two">
            <img src="/img/11map/Map.jpg" alt="" style="width: 100%;">
            {{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.950947539581!2d101.07593607485305!3d13.599808186776418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d3c23b6e73297%3A0xdd50d3ae11f0ad1b!2z4LiX4Li14LmI4Lin4LmI4Liy4LiB4Liy4Lij4Lit4Liz4LmA4Lig4Lit4Lia4LmJ4Liy4LiZ4LmC4Lie4LiY4Li04LmM!5e0!3m2!1sth!2sth!4v1779636986326!5m2!1sth!2sth"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
        <div class="map-three">
            <div class="text-map-three">
                <div class="m-t-three">
                    <div class="t-m-one" style="text-align: center;">
                        <img src="/img/logo.png" alt="" width="200">
                    </div>
                    <div class="t-m-two">
                        <div class="text-m-two">
                            <span class="tmt-one" style="font-size: 100px;font-weight: 900;">หนังสือราชการ</span>
                            <span class="tmt-two"
                                style="font-size: 40px;margin-top: -45px;text-align: end;">เทศบาลตำบลบ้านโพธิ์</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="m-img-three">
                    <img src="/img/12/2.png" alt="" width="200">
                </div> --}}
            </div>
        </div>

        <div class="card-map-three">
            <div class="map-body">
                <div class="tab-buttons-map">
                    <button class="active" onclick="openTabmap(this,'mapone')">
                        จากกรมส่งเสริมการปกครองส่วนท้องถิ่น
                    </button>
                    <button onclick="openTabmap(this,'maptwo')">
                        หนังสือราชการจากท้องถิ่นจังหวัด
                    </button>
                </div>


                <div id="mapone" class="tab-content-map active">

                    <div class="content-map">
                        <a href="https://www.dla.go.th/land/officialDoc.do" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="box-one-announce">
                                    <div class="item-text">
                                        หนังสือราชการ สถ.
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="https://www.chacheongsaolocal.go.th/news/cate/2" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    ข่าวประชาสัมพันธ์ สถ.จ.
                                </div>
                            </div>
                        </a>

                        <a href="https://www.dla.go.th/index.do#information" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    {{-- กฎหมาย ระเบียบ และ มติ ก.กลาง --}}
                                    ระบบสารสนเทศ
                                </div>
                            </div>
                        </a>
                        <a href="https://www.chacheongsaolocal.go.th/order" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    หนังสือสั่งการจังหวัด
                                </div>
                            </div>
                        </a>

                        <a href="https://www.dla.go.th/land/articles.do" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    บทความน่าสนใจ
                                </div>
                            </div>
                        </a>
                        <a href="https://www.chacheongsaolocal.go.th/law" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    {{-- ภาพกิจกรรม สถ.จ. --}}
                                    กฎหมาย ระเบียบ และมติ กจจ./ก.ท.จ./ก.อบต.
                                </div>
                            </div>
                        </a>

                        <a href="https://www.dla.go.th/index.do#e-book" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    {{-- พรบ. และประกาศเกี่ยวกับเทคโนโลยีสารสนเทศ --}}
                                    หนังสืออิเล็กทรอนิกส์
                                </div>
                            </div>
                        </a>

                        <a href="https://www.chacheongsaolocal.go.th/contactus" class="no-underline" target="_blank">
                            <div class="item-map">
                                <div class="item-text">
                                    ติดต่อหน่วยงาน สถ.จ.
                                </div>
                            </div>
                        </a>
                    </div>

                </div>



            </div>
        </div>
        <div class="box-all-map">
            <a href="http://" class="no-underline button-map-all">ดูทั้งหมด</a>
        </div>

        <div class="banner-carousel" id="bannerCarousel">
            <button class="banner-arrow left" id="prevBtn"><img src="/img/13Footer/Next-Button.png"></button>
            <div class="banner-track" id="bannerTrack">
                <div class="banner-item"><a href="https://e-service.doe.go.th/" target="_blank"><img
                            src="/img/13Footer/Banner1.png"></a>
                </div>
                <div class="banner-item"><a href="https://www.admincourt.go.th/" target="_blank"><img
                            src="/img/13Footer/Banner2.png"></a></div>
                <div class="banner-item"><a href="https://ndwc.disaster.go.th/ndwc" target="_blank"><img
                            src="/img/13Footer/Banner3.png"></a></div>
                <div class="banner-item"><a href="https://www.dit.go.th/" target="_blank"><img
                            src="/img/13Footer/Banner4.png"></a></div>
                <div class="banner-item"><a href="https://www.baac.or.th/royal_page.php" target="_blank"><img
                            src="/img/13Footer/Banner5.png"></a></div>
                <div class="banner-item"><a href="https://www.gsb.or.th/" target="_blank"><img
                            src="/img/13Footer/Banner6.png"></a></div>
                <div class="banner-item"><a
                        href="https://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH"
                        target="_blank"><img src="/img/13Footer/Banner7.png"></a></div>
                <div class="banner-item"><a href="https://www.prd.go.th/th/page/item/index/id/1" target="_blank"><img
                            src="/img/13Footer/Banner8.png"></a></div>
                <div class="banner-item"><a href="https://www.dla.go.th/index.do" target="_blank"><img
                            src="/img/13Footer/Banner9.png"></a></div>
                <div class="banner-item"><a href="https://www.rd.go.th/272.html" target="_blank"><img
                            src="/img/13Footer/Banner10.png"></a></div>
                <div class="banner-item"><a href="https://www.moc.go.th/th/page/item/index/id/1" target="_blank"><img
                            src="/img/13Footer/Banner11.png"></a></div>
                <div class="banner-item"><a href="https://moi.go.th/moi/" target="_blank"><img
                            src="/img/13Footer/Banner12.png"></a>
                </div>
                <div class="banner-item"><a href="https://www.audit.go.th/home" target="_blank"><img
                            src="/img/13Footer/Banner13.png"></a></div>
                <div class="banner-item"><a href="https://www.pr.moi.go.th/" target="_blank"><img
                            src="/img/13Footer/Banner14.png"></a>
                </div>
                <div class="banner-item"><a href="https://nacc.go.th/?" target="_blank"><img
                            src="/img/13Footer/Banner15.png"></a></div>
                <div class="banner-item"><a href="https://www.bb.go.th/" target="_blank"><img
                            src="/img/13Footer/Banner16.png"></a></div>

            </div>
            <button class="banner-arrow right" id="nextBtn"><img src="/img/13Footer/Next-Button-2.png"></button>
        </div>
    </section>



    <script>
        function openTab(tabId) {
            // ซ่อน tab ทั้งหมด
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });

            document.querySelectorAll('.tab-buttons button').forEach(btn => {
                btn.classList.remove('active');
            });

            // แสดง tab ที่เลือก
            document.getElementById(tabId).classList.add('active');
            event.target.classList.add('active');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // ฟังก์ชัน set/get cookie
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var d = new Date();
                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + d.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // ตรวจว่าโหวตแล้วหรือยัง
        $(document).ready(function() {
            if (getCookie("voted") === "true") {
                $("#voteForm :input").prop("disabled", true);
                $("#voteForm button").prop("disabled", true).text("โหวตแล้ว");
            }

            $("#voteForm").on("submit", function(e) {
                e.preventDefault();

                let voteValue = $("input[name='vote']:checked").val();
                if (!voteValue) {
                    alert("กรุณาเลือกคะแนนก่อนโหวต");
                    return;
                }

                $.ajax({
                    url: "/vote/save", // endpoint หลังบ้าน
                    method: "POST",
                    data: {
                        _token: $('input[name="_token"]').val(), // ดึงค่า token
                        vote: voteValue
                    },
                    success: function(res) {
                        alert("โหวตสำเร็จ ขอบคุณครับ");
                        setCookie("voted", "true", 7); // กันโหวตซ้ำ 7 วัน
                        $("#voteForm :input").prop("disabled", true);
                        $("#voteForm button").prop("disabled", true).text("โหวตแล้ว");
                    },
                    error: function() {
                        alert("เกิดข้อผิดพลาด กรุณาลองใหม่");
                    }
                });
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const track = document.getElementById("bannerTrack");
            const items = Array.from(document.querySelectorAll(".banner-item"));
            const total = items.length;
            const visible = 6;
            const intervalTime = 3000;
            let index = 0;
            let autoSlide;

            // ทำซ้ำแบนเนอร์อีกชุด (เพื่อให้เลื่อนไม่ขาดช่วง)
            track.innerHTML += track.innerHTML;
            const allItems = document.querySelectorAll(".banner-item");

            function moveCarousel() {
                index++;
                updateTransform();

                // ถ้าเลื่อนไปถึงครึ่งหลังของ track ให้รีเซ็ตตำแหน่งแบบเนียน ๆ
                if (index >= total) {
                    setTimeout(() => {
                        track.style.transition = "none";
                        index = 0;
                        updateTransform();
                        // รอแป๊บก่อนเปิด transition กลับมา
                        setTimeout(() => {
                            track.style.transition = "transform 0.5s linear";
                        }, 50);
                    }, 500);
                }
            }

            function movePrev() {
                index--;
                if (index < 0) {
                    track.style.transition = "none";
                    index = total - 1;
                    updateTransform();
                    setTimeout(() => {
                        track.style.transition = "transform 0.5s linear";
                    }, 50);
                } else {
                    updateTransform();
                }
            }

            function updateTransform() {
                const offset = -(index * (100 / visible));
                track.style.transform = `translateX(${offset}%)`;
            }

            function startAutoSlide() {
                autoSlide = setInterval(moveCarousel, intervalTime);
            }

            function stopAutoSlide() {
                clearInterval(autoSlide);
            }

            // ปุ่มซ้ายขวา
            document.getElementById("nextBtn").addEventListener("click", () => {
                moveCarousel();
                stopAutoSlide();
                startAutoSlide();
            });

            document.getElementById("prevBtn").addEventListener("click", () => {
                movePrev();
                stopAutoSlide();
                startAutoSlide();
            });

            // หยุดเมื่อ hover
            const carousel = document.getElementById("bannerCarousel");
            carousel.addEventListener("mouseenter", stopAutoSlide);
            carousel.addEventListener("mouseleave", startAutoSlide);

            // เริ่มทำงาน
            startAutoSlide();
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#carouselExampleSlidesOnly');
            const bgImage = document.querySelector('.box-img-slide-top');
            const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: false, // ปิดการเลื่อนอัตโนมัติทั้งหมด
                pause: false,
                ride: false
            });

            function playVideoIfExists(item) {
                const video = item.querySelector('video');

                if (video) {
                    bgImage.style.display = 'none';
                    bsCarousel.pause(); // หยุดเลื่อน
                    video.currentTime = 0;
                    video.play();

                    // เมื่อวิดีโอจบ ค่อยเปลี่ยนสไลด์
                    video.onended = function() {
                        bsCarousel.next();
                    };
                } else {
                    bgImage.style.display = 'block';
                    // ถ้าไม่มีวิดีโอ ให้รอ 5 วิ ก่อนเลื่อนไป
                    setTimeout(() => {
                        bsCarousel.next();
                    }, 5000);
                }
            }

            // เล่นสไลด์แรกตอนโหลด
            const firstItem = carousel.querySelector('.carousel-item.active');
            playVideoIfExists(firstItem);

            // ทุกครั้งที่สไลด์เปลี่ยน (เลื่อนไปแล้ว)
            carousel.addEventListener('slid.bs.carousel', function(event) {
                const activeItem = carousel.querySelector('.carousel-item.active');
                playVideoIfExists(activeItem);
            });
        });
    </script>
@endsection
