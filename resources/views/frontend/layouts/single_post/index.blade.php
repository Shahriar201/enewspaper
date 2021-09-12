@extends('frontend.layouts.master')
@section('content')

    <div class="archive-page">
        <div class="container">
            <div class="archive-info-cats">
                <a href="https://themebazar.xyz/laraflash"><i class="fa fa-home"> </i> প্রচ্ছদ
                </a> <i class="fa fa-chevron-right"></i>

                জাতীয় সকল খবর
            </div>

            <div class="row">

            </div>
            <section class="single-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                        

                            <div class="single-cat-info">
                                <div class="single-home">
                                    <i class="fa fa-home" aria-hidden="true"> </i><a
                                        href="https://themebazar.xyz/laraflash"> Home
                                    </a>
                                </div>

                                <div class="single-cats">
                                    <i class=" fa fa-bars"></i> <a href="#"> Politics
                                    </a>
                                </div>
                                <div style="float: right; padding: 7px"><a href="../../print/3.html" target="_blank">
                                        <i class="fas fa-print"></i>
                                        Print
                                    </a>

                                    </a></div>

                            </div>

                            <div class="single-page-title">
                                {!! $post->title !!}
                            </div>

                            <div class="row g-2">

                                <div class="col-lg-12 col-md-12">
                                    <div class="reportar-title">
                                        Staff Reporter

                                    </div>
                                    <div class="viwe-count">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>
                                                Update Time : 29-04-2021
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--========== single image & content ==========-->

                            <div class="single-image">

                                <img src="{{ url('public/upload/post_images/' .$post->image) }}"
                                    alt=""
                                    title="{!! $post->title !!}">
                                <span>
                                    File Pic
                                </span>

                            </div>
                            <div class="single-add">
                                <p><img style="width: 100%;" src="../../../latestscript/public/ads/60842facc6920.gif"><br>
                                </p>
                            </div>

                            <p class="single-details">
                            <p><span class="VIiyi" lang="en"><span class="JLqJ4b"
                                        data-language-for-alternatives="en" data-language-to-translate-into="bn"
                                        data-phrase-index="0"><span>{!! $post->name_bn !!}</span></span></span></p>

                            </p>





                            <h3 class="single-social-title">
                                Share
                            </h3>

                            <div class="single-page-social">
                                <div class="sharethis-inline-share-buttons"
                                    data-href="%e2%80%98%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%be-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%9b%e0%a7%9c%e0%a6%be%e0%a6%a8%e0%a7%8b%e0%a7%9f%e2%80%99-%e0%a6%ac%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%aa%e0%a6%bf%e0%a6%95%e0%a7%87-%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%ae%e0%a6%be-%e0%a6%9a%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%b0-%e0%a6%86%e0%a6%b9%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%a8.html">
                                </div>

                            </div>



                            <!--============Realted content=============-->


                            <div class="themesBazar_cat">
                                <a href="#"> More News of This Category
                                </a>
                                <span class="themeBazar"></span>
                            </div>
                            <div class="related-content">



                                <div class="related-wrpp">
                                    <div class="related-image">
                                        <a
                                            href="../37/%e2%80%98%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af%e0%a6%b8%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%b8-%e0%a6%ae%e0%a7%8b%e0%a6%95%e0%a6%be%e0%a6%ac%e0%a6%bf%e0%a6%b2%e0%a6%be%e0%a7%9f-%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2-%e0%a6%86%e0%a6%87%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%95%e0%a6%b0%e0%a7%80-%e0%a6%ad%e0%a7%82%e0%a6%ae%e0%a6%bf%e0%a6%95%e0%a6%be-%e0%a6%9c%e0%a6%b0%e0%a7%81%e0%a6%b0%e0%a6%bf%e2%80%99.html">
                                            <img class="lazyload" src="../../public/templateimage/60e42594dd1aa.jpg"
                                                data-src="https://themebazar.xyz/laraflash/public/postimages/608a8f9898407.jpg"
                                                alt="‘তথ্যসন্ত্রাস মোকাবিলায় ডিজিটাল আইনের কার্যকরী ভূমিকা জরুরি’"
                                                title="‘তথ্যসন্ত্রাস মোকাবিলায় ডিজিটাল আইনের কার্যকরী ভূমিকা জরুরি’" />
                                        </a>


                                    </div>
                                    <h4 class="related-title">
                                        <a
                                            href="../37/%e2%80%98%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af%e0%a6%b8%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%b8-%e0%a6%ae%e0%a7%8b%e0%a6%95%e0%a6%be%e0%a6%ac%e0%a6%bf%e0%a6%b2%e0%a6%be%e0%a7%9f-%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2-%e0%a6%86%e0%a6%87%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%95%e0%a6%b0%e0%a7%80-%e0%a6%ad%e0%a7%82%e0%a6%ae%e0%a6%bf%e0%a6%95%e0%a6%be-%e0%a6%9c%e0%a6%b0%e0%a7%81%e0%a6%b0%e0%a6%bf%e2%80%99.html">
                                            Effective role of digital law is important in combating information
                                            terrorism&#039;
                                        </a>
                                    </h4>

                                    <div class="cat-meta">
                                        <a href="#"><i class="fa fa-tags"> </i>
                                            29-04-2021
                                        </a>
                                    </div>
                                </div>



                                <div class="related-wrpp">
                                    <div class="related-image">
                                        <a
                                            href="../35/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%80%e0%a6%b0-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a7%9f-%e0%a6%86.html">
                                            <img class="lazyload" src="../../public/templateimage/60e42594dd1aa.jpg"
                                                data-src="https://themebazar.xyz/laraflash/public/postimages/608a8ef9762d2.png"
                                                alt="রাজধানীবাসীর সেবায় আ.লীগের ২ মেডিকেল টিম"
                                                title="রাজধানীবাসীর সেবায় আ.লীগের ২ মেডিকেল টিম" />
                                        </a>

                                        <a href="../35/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%80%e0%a6%b0-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a7%9f-%e0%a6%86.html"
                                            class="related-icon"><i class="fa fa-play"></i></a>

                                    </div>
                                    <h4 class="related-title">
                                        <a
                                            href="../35/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%80%e0%a6%b0-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a7%9f-%e0%a6%86.html">
                                            2 medical teams of A-League in the service of the people of the capital
                                        </a>
                                    </h4>

                                    <div class="cat-meta">
                                        <a href="#"><i class="fa fa-tags"> </i>
                                            29-04-2021
                                        </a>
                                    </div>
                                </div>



                                <div class="related-wrpp">
                                    <div class="related-image">
                                        <a
                                            href="../29/%e0%a6%ae%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a7%81%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf%e0%a6%a4%e0%a7%87-%e0%a6%87%e0%a6%b0%e0%a6%ab%e0%a6%be%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%b2%e0%a6%bf%e0%a6%ae%e0%a7%87%e0%a6%b0-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html">
                                            <img class="lazyload" src="../../public/templateimage/60e42594dd1aa.jpg"
                                                data-src="https://themebazar.xyz/laraflash/public/postimages/608a8d61e1f4e.png"
                                                alt="মুক্তি পেয়ে বঙ্গবন্ধুর প্রতিকৃতিতে ইরফান সেলিমের শ্রদ্ধা"
                                                title="মুক্তি পেয়ে বঙ্গবন্ধুর প্রতিকৃতিতে ইরফান সেলিমের শ্রদ্ধা" />
                                        </a>

                                        <a href="../29/%e0%a6%ae%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a7%81%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf%e0%a6%a4%e0%a7%87-%e0%a6%87%e0%a6%b0%e0%a6%ab%e0%a6%be%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%b2%e0%a6%bf%e0%a6%ae%e0%a7%87%e0%a6%b0-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html"
                                            class="related-icon"><i class="fa fa-play"></i></a>

                                    </div>
                                    <h4 class="related-title">
                                        <a
                                            href="../29/%e0%a6%ae%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a7%81%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf%e0%a6%a4%e0%a7%87-%e0%a6%87%e0%a6%b0%e0%a6%ab%e0%a6%be%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%b2%e0%a6%bf%e0%a6%ae%e0%a7%87%e0%a6%b0-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html">
                                            Irfan Selim pays homage to the portrait of Bangabandhu after his release
                                        </a>
                                    </h4>

                                    <div class="cat-meta">
                                        <a href="#"><i class="fa fa-tags"> </i>
                                            29-04-2021
                                        </a>
                                    </div>
                                </div>



                                <div class="related-wrpp">
                                    <div class="related-image">
                                        <a
                                            href="%e2%80%98%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%be-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%9b%e0%a7%9c%e0%a6%be%e0%a6%a8%e0%a7%8b%e0%a7%9f%e2%80%99-%e0%a6%ac%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%aa%e0%a6%bf%e0%a6%95%e0%a7%87-%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%ae%e0%a6%be-%e0%a6%9a%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%b0-%e0%a6%86%e0%a6%b9%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%a8.html">
                                            <img class="lazyload" src="../../public/templateimage/60e42594dd1aa.jpg"
                                                data-src="https://themebazar.xyz/laraflash/public/postimages/608a8120293b2.png"
                                                alt="‘টিকা নিয়ে বিভ্রান্তি ছড়ানোয়’ বিএনপিকে ক্ষমা চাওয়ার আহ্বান"
                                                title="‘টিকা নিয়ে বিভ্রান্তি ছড়ানোয়’ বিএনপিকে ক্ষমা চাওয়ার আহ্বান" />
                                        </a>


                                    </div>
                                    <h4 class="related-title">
                                        <a
                                            href="%e2%80%98%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%be-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%9b%e0%a7%9c%e0%a6%be%e0%a6%a8%e0%a7%8b%e0%a7%9f%e2%80%99-%e0%a6%ac%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%aa%e0%a6%bf%e0%a6%95%e0%a7%87-%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%ae%e0%a6%be-%e0%a6%9a%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%b0-%e0%a6%86%e0%a6%b9%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%a8.html">
                                            &#039;Spreading confusion over vaccination&#039; calls on BNP to apologize
                                        </a>
                                    </h4>

                                    <div class="cat-meta">
                                        <a href="#"><i class="fa fa-tags"> </i>
                                            29-04-2021
                                        </a>
                                    </div>
                                </div>






                            </div>





                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="siteber-add">
                                <p><img style="width: 100%;" src="../../../latestscript/public/ads/609d0bb785be9.gif"><br>
                                </p>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">
                                        Latest News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">
                                        Popular News
                                    </a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="news-titletab">




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../154/%e0%a6%ad%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%89%e0%a6%a1%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%9c-%e0%a6%95%e0%a6%b0%e0%a7%87%e0%a6%a8-%e0%a6%a8%e0%a6%be-%e0%a6%b6%e0%a6%be%e0%a6%b9%e0%a6%b0%e0%a7%81%e0%a6%96-%e0%a6%96%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a6%be%e0%a6%95%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%a8%e0%a6%bf-%e0%a6%a8%e0%a6%be%e0%a7%9f%e0%a6%bf%e0%a6%95%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/60a399b07cc9d.jpg"
                                                    alt="ভয়ে বলিউডে কাজ করেন না শাহরুখ খানের পাকিস্তানি নায়িকা"
                                                    title="ভয়ে বলিউডে কাজ করেন না শাহরুখ খানের পাকিস্তানি নায়িকা" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../154/%e0%a6%ad%e0%a7%9f%e0%a7%87-%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%89%e0%a6%a1%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%9c-%e0%a6%95%e0%a6%b0%e0%a7%87%e0%a6%a8-%e0%a6%a8%e0%a6%be-%e0%a6%b6%e0%a6%be%e0%a6%b9%e0%a6%b0%e0%a7%81%e0%a6%96-%e0%a6%96%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a6%be%e0%a6%95%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%a8%e0%a6%bf-%e0%a6%a8%e0%a6%be%e0%a7%9f%e0%a6%bf%e0%a6%95%e0%a6%be.html">
                                                    Shah Rukh Khan&#039;s Pakistani heroine does not work in Bollywood for
                                                    fear

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../153/%e0%a6%9a%e0%a6%9f%e0%a7%8d%e0%a6%9f%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%ae%e0%a7%87%e0%a6%b0-%e0%a6%95%e0%a7%8b%e0%a6%a5%e0%a6%be%e0%a7%9f-%e0%a6%95%e0%a6%96%e0%a6%a8-%e0%a6%88%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a4.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3c5a6ebf5.png"
                                                    alt="চট্টগ্রামের কোথায় কখন ঈদের জামাত"
                                                    title="চট্টগ্রামের কোথায় কখন ঈদের জামাত" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../153/%e0%a6%9a%e0%a6%9f%e0%a7%8d%e0%a6%9f%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%ae%e0%a7%87%e0%a6%b0-%e0%a6%95%e0%a7%8b%e0%a6%a5%e0%a6%be%e0%a7%9f-%e0%a6%95%e0%a6%96%e0%a6%a8-%e0%a6%88%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a4.html">
                                                    Where and when Eid Jamaat in Chittagong

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../152/%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a6%be%e0%a6%ae%e0%a6%a4%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%87-%e0%a6%85%e0%a6%af%e0%a6%a4%e0%a7%8d%e0%a6%a8-%e0%a6%85%e0%a6%ac%e0%a6%b9%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a7%9f-%e2%80%98%e0%a6%ad%e0%a6%be%e0%a6%99%e0%a6%be-%e0%a6%ae%e0%a6%b8%e0%a6%9c%e0%a6%bf%e0%a6%a6%e2%80%99.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3bd9de732.png"
                                                    alt="নিয়ামতপুরে অযত্ন অবহেলায় ‘ভাঙা মসজিদ’"
                                                    title="নিয়ামতপুরে অযত্ন অবহেলায় ‘ভাঙা মসজিদ’" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../152/%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a6%be%e0%a6%ae%e0%a6%a4%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%87-%e0%a6%85%e0%a6%af%e0%a6%a4%e0%a7%8d%e0%a6%a8-%e0%a6%85%e0%a6%ac%e0%a6%b9%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a7%9f-%e2%80%98%e0%a6%ad%e0%a6%be%e0%a6%99%e0%a6%be-%e0%a6%ae%e0%a6%b8%e0%a6%9c%e0%a6%bf%e0%a6%a6%e2%80%99.html">
                                                    &#039;Broken mosque&#039; in Niamatpur due to negligence

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../151/%e0%a6%8f%e0%a6%b8%e0%a6%aa%e0%a6%bf%e0%a6%b0-%e0%a6%88%e0%a6%a6-%e0%a6%89%e0%a6%aa%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%81%e0%a6%a6%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3b7209a49.png"
                                                    alt="এসপির ঈদ উপহার-খাবার পেয়ে কাঁদলেন সেই বৃদ্ধা"
                                                    title="এসপির ঈদ উপহার-খাবার পেয়ে কাঁদলেন সেই বৃদ্ধা" /></a>

                                            <a href="../151/%e0%a6%8f%e0%a6%b8%e0%a6%aa%e0%a6%bf%e0%a6%b0-%e0%a6%88%e0%a6%a6-%e0%a6%89%e0%a6%aa%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%81%e0%a6%a6%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>
                                            <h4 class="tab_hadding"><a
                                                    href="../151/%e0%a6%8f%e0%a6%b8%e0%a6%aa%e0%a6%bf%e0%a6%b0-%e0%a6%88%e0%a6%a6-%e0%a6%89%e0%a6%aa%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%81%e0%a6%a6%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html">
                                                    The old woman cried after receiving SP&#039;s Eid gift-food

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../150/%e0%a6%ae%e0%a6%be%e0%a6%b6%e0%a6%b0%e0%a7%81%e0%a6%ae-%e0%a6%9a%e0%a6%be%e0%a6%b7%e0%a7%87-%e0%a6%ad%e0%a6%be%e0%a6%97%e0%a7%8d%e0%a6%af-%e0%a6%ab%e0%a6%bf%e0%a6%b0%e0%a7%87%e0%a6%9b%e0%a7%87-%e0%a6%b8%e0%a6%be%e0%a6%87%e0%a6%ab%e0%a7%81%e0%a6%b2%e0%a7%87%e0%a6%b0.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3b135e729.png"
                                                    alt="মাশরুম চাষে ভাগ্য ফিরেছে সাইফুলের"
                                                    title="মাশরুম চাষে ভাগ্য ফিরেছে সাইফুলের" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../150/%e0%a6%ae%e0%a6%be%e0%a6%b6%e0%a6%b0%e0%a7%81%e0%a6%ae-%e0%a6%9a%e0%a6%be%e0%a6%b7%e0%a7%87-%e0%a6%ad%e0%a6%be%e0%a6%97%e0%a7%8d%e0%a6%af-%e0%a6%ab%e0%a6%bf%e0%a6%b0%e0%a7%87%e0%a6%9b%e0%a7%87-%e0%a6%b8%e0%a6%be%e0%a6%87%e0%a6%ab%e0%a7%81%e0%a6%b2%e0%a7%87%e0%a6%b0.html">
                                                    Saiful&#039;s fortune has returned to mushroom cultivation

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../149/%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a7%9f-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a3-%e0%a6%97%e0%a7%87%e0%a6%b2-%e0%a6%ac%e0%a6%bf%e0%a6%8f%e0%a6%a1%e0%a6%bf%e0%a6%b8%e0%a6%bf-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%b0.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3abc3d132.png"
                                                    alt="করোনায় প্রাণ গেল বিএডিসি কর্মকর্তার"
                                                    title="করোনায় প্রাণ গেল বিএডিসি কর্মকর্তার" /></a>

                                            <a href="../149/%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a7%9f-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a3-%e0%a6%97%e0%a7%87%e0%a6%b2-%e0%a6%ac%e0%a6%bf%e0%a6%8f%e0%a6%a1%e0%a6%bf%e0%a6%b8%e0%a6%bf-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%b0.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>
                                            <h4 class="tab_hadding"><a
                                                    href="../149/%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a7%9f-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a3-%e0%a6%97%e0%a7%87%e0%a6%b2-%e0%a6%ac%e0%a6%bf%e0%a6%8f%e0%a6%a1%e0%a6%bf%e0%a6%b8%e0%a6%bf-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%b0.html">
                                                    The BADC officer died in Corona

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../148/%e0%a7%ab-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%ae%e0%a6%be%e0%a6%a8%e0%a7%81%e0%a6%b7%e0%a6%95%e0%a7%87-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a6%ae%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%b8%e0%a6%b9%e0%a6%be%e0%a7%9f%e0%a6%a4%e0%a6%be-%e0%a6%a6%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%ae%e0%a7%87%e0%a7%9f%e0%a6%b0-%e0%a6%9f%e0%a6%bf%e0%a6%9f%e0%a7%81.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3a539d294.png"
                                                    alt="৫ হাজার মানুষকে প্রধানমন্ত্রীর খাদ্য সহায়তা দিলেন মেয়র টিটু"
                                                    title="৫ হাজার মানুষকে প্রধানমন্ত্রীর খাদ্য সহায়তা দিলেন মেয়র টিটু" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../148/%e0%a7%ab-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%ae%e0%a6%be%e0%a6%a8%e0%a7%81%e0%a6%b7%e0%a6%95%e0%a7%87-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a6%ae%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%a6%e0%a7%8d%e0%a6%af-%e0%a6%b8%e0%a6%b9%e0%a6%be%e0%a7%9f%e0%a6%a4%e0%a6%be-%e0%a6%a6%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%ae%e0%a7%87%e0%a7%9f%e0%a6%b0-%e0%a6%9f%e0%a6%bf%e0%a6%9f%e0%a7%81.html">
                                                    Prime Minister Titu provided food aid to 5,000 people

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../147/%e0%a6%ae%e0%a7%8c%e0%a6%b2%e0%a6%ad%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0%e0%a7%87-%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a6%b0-%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4%e0%a7%80%e0%a7%9f-%e0%a6%ad%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b0%e0%a6%bf%e0%a7%9f%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%9f-%e0%a6%86%e0%a6%a4%e0%a6%99%e0%a7%8d%e0%a6%95.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d39dc6a0a1.png"
                                                    alt="মৌলভীবাজারে করোনার ভারতীয় ভ্যারিয়েন্ট আতঙ্ক"
                                                    title="মৌলভীবাজারে করোনার ভারতীয় ভ্যারিয়েন্ট আতঙ্ক" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../147/%e0%a6%ae%e0%a7%8c%e0%a6%b2%e0%a6%ad%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0%e0%a7%87-%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a6%b0-%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4%e0%a7%80%e0%a7%9f-%e0%a6%ad%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b0%e0%a6%bf%e0%a7%9f%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%9f-%e0%a6%86%e0%a6%a4%e0%a6%99%e0%a7%8d%e0%a6%95.html">
                                                    Indian variant of Corona panicked in Moulvibazar

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../146/%e0%a6%b8%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9f%e0%a7%87-%e0%a6%a6%e0%a7%81%e0%a6%a6%e0%a6%bf%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%ae%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a7%87-%e0%a6%b6%e0%a7%87%e0%a6%b7-%e0%a6%b9%e0%a6%9a%e0%a7%8d%e0%a6%9b%e0%a7%87-%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%be%e0%a6%b0-%e0%a6%ae%e0%a6%9c%e0%a7%81%e0%a6%a4.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d399003343.png"
                                                    alt="সিলেটে দুদিনের মধ্যে শেষ হচ্ছে টিকার মজুত"
                                                    title="সিলেটে দুদিনের মধ্যে শেষ হচ্ছে টিকার মজুত" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../146/%e0%a6%b8%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9f%e0%a7%87-%e0%a6%a6%e0%a7%81%e0%a6%a6%e0%a6%bf%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%ae%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a7%87-%e0%a6%b6%e0%a7%87%e0%a6%b7-%e0%a6%b9%e0%a6%9a%e0%a7%8d%e0%a6%9b%e0%a7%87-%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%be%e0%a6%b0-%e0%a6%ae%e0%a6%9c%e0%a7%81%e0%a6%a4.html">
                                                    Ticker stockpiling in Sylhet is coming to an end in two days

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../145/%e0%a6%b8%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9f%e0%a7%87-%e0%a6%a4%e0%a6%b0%e0%a7%81%e0%a6%a3%e0%a7%80%e0%a6%b0-%e0%a6%9d%e0%a7%81%e0%a6%b2%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%b2%e0%a6%be%e0%a6%b6-%e0%a6%89%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be%e0%a6%b0.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d38abacb5c.png"
                                                    alt="সিলেটে তরুণীর ঝুলন্ত লাশ উদ্ধার"
                                                    title="সিলেটে তরুণীর ঝুলন্ত লাশ উদ্ধার" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../145/%e0%a6%b8%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9f%e0%a7%87-%e0%a6%a4%e0%a6%b0%e0%a7%81%e0%a6%a3%e0%a7%80%e0%a6%b0-%e0%a6%9d%e0%a7%81%e0%a6%b2%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%b2%e0%a6%be%e0%a6%b6-%e0%a6%89%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be%e0%a6%b0.html">
                                                    The hanging body of a young woman was recovered in Sylhet

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../144/%e0%a6%ab%e0%a6%be%e0%a6%81%e0%a6%95%e0%a6%be-%e0%a6%a2%e0%a6%be%e0%a6%95%e0%a6%be-%e0%a6%9f%e0%a6%be%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%be%e0%a6%87%e0%a6%b2-%e0%a6%ac%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a7%81-%e0%a6%b8%e0%a7%87%e0%a6%a4%e0%a7%81-%e0%a6%ae%e0%a6%b9%e0%a6%be%e0%a6%b8%e0%a7%9c%e0%a6%95.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d38426ff36.png"
                                                    alt="ফাঁকা ঢাকা-টাঙ্গাইল-বঙ্গবন্ধু সেতু মহাসড়ক"
                                                    title="ফাঁকা ঢাকা-টাঙ্গাইল-বঙ্গবন্ধু সেতু মহাসড়ক" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../144/%e0%a6%ab%e0%a6%be%e0%a6%81%e0%a6%95%e0%a6%be-%e0%a6%a2%e0%a6%be%e0%a6%95%e0%a6%be-%e0%a6%9f%e0%a6%be%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%be%e0%a6%87%e0%a6%b2-%e0%a6%ac%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a6%ac%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a7%81-%e0%a6%b8%e0%a7%87%e0%a6%a4%e0%a7%81-%e0%a6%ae%e0%a6%b9%e0%a6%be%e0%a6%b8%e0%a7%9c%e0%a6%95.html">
                                                    Empty Dhaka-Tangail-Bangabandhu Bridge Highway

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../143/%e0%a6%86%e0%a6%b8%e0%a6%be%e0%a6%ae%e0%a6%bf-%e0%a6%a7%e0%a6%b0%e0%a6%a4%e0%a7%87-%e0%a6%97%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a7%aa-%e0%a6%aa%e0%a7%81%e0%a6%b2%e0%a6%bf%e0%a6%b6-%e0%a6%86%e0%a6%b9%e0%a6%a4.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d37f771b13.png"
                                                    alt="আসামি ধরতে গিয়ে ৪ পুলিশ আহত"
                                                    title="আসামি ধরতে গিয়ে ৪ পুলিশ আহত" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../143/%e0%a6%86%e0%a6%b8%e0%a6%be%e0%a6%ae%e0%a6%bf-%e0%a6%a7%e0%a6%b0%e0%a6%a4%e0%a7%87-%e0%a6%97%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a7%aa-%e0%a6%aa%e0%a7%81%e0%a6%b2%e0%a6%bf%e0%a6%b6-%e0%a6%86%e0%a6%b9%e0%a6%a4.html">
                                                    4 policemen were injured while trying to catch the accused

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../142/%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a4%e0%a6%be%e0%a6%b6%e0%a7%82%e0%a6%a8%e0%a7%8d%e0%a6%af-%e0%a6%b8%e0%a7%87%e0%a6%ae%e0%a6%be%e0%a6%87%e0%a7%9f%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3795a6643.png"
                                                    alt="ক্রেতাশূন্য সেমাইয়ের বাজার"
                                                    title="ক্রেতাশূন্য সেমাইয়ের বাজার" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../142/%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a4%e0%a6%be%e0%a6%b6%e0%a7%82%e0%a6%a8%e0%a7%8d%e0%a6%af-%e0%a6%b8%e0%a7%87%e0%a6%ae%e0%a6%be%e0%a6%87%e0%a7%9f%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0.html">
                                                    Semai market without buyers

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../141/%e0%a6%aa%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%be%e0%a6%b9%e0%a7%80-%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%87-%e0%a6%af%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%2c-%e0%a6%b8%e0%a6%be%e0%a6%a4-%e0%a6%ae%e0%a6%be%e0%a6%ae%e0%a6%b2%e0%a6%be%e0%a7%9f-%e0%a6%9c%e0%a6%b0%e0%a6%bf%e0%a6%ae%e0%a6%be%e0%a6%a8%e0%a6%be-%e0%a6%b8%e0%a6%be%e0%a7%9c%e0%a7%87-%e0%a6%aa%e0%a6%be%e0%a6%81%e0%a6%9a-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d36d5d6985.png"
                                                    alt="পণ্যবাহী ট্রাকে যাত্রী, সাত মামলায় জরিমানা সাড়ে পাঁচ হাজার"
                                                    title="পণ্যবাহী ট্রাকে যাত্রী, সাত মামলায় জরিমানা সাড়ে পাঁচ হাজার" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../141/%e0%a6%aa%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%be%e0%a6%b9%e0%a7%80-%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%87-%e0%a6%af%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%2c-%e0%a6%b8%e0%a6%be%e0%a6%a4-%e0%a6%ae%e0%a6%be%e0%a6%ae%e0%a6%b2%e0%a6%be%e0%a7%9f-%e0%a6%9c%e0%a6%b0%e0%a6%bf%e0%a6%ae%e0%a6%be%e0%a6%a8%e0%a6%be-%e0%a6%b8%e0%a6%be%e0%a7%9c%e0%a7%87-%e0%a6%aa%e0%a6%be%e0%a6%81%e0%a6%9a-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0.html">
                                                    Passengers in freight trucks, fined five and a half thousand in seven
                                                    cases

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../140/%e0%a6%85%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0-%e0%a6%a6%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%ad%e0%a6%be%e0%a6%87%e0%a6%95%e0%a7%87-%e0%a6%ab%e0%a6%be%e0%a6%81%e0%a6%b8%e0%a6%be%e0%a6%a4%e0%a7%87-%e0%a6%97%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%a8%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%87-%e0%a6%a7%e0%a6%b0%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3655bb2fc.png"
                                                    alt="অস্ত্র দিয়ে ভাইকে ফাঁসাতে গিয়ে নিজেই ধরা"
                                                    title="অস্ত্র দিয়ে ভাইকে ফাঁসাতে গিয়ে নিজেই ধরা" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../140/%e0%a6%85%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0-%e0%a6%a6%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%ad%e0%a6%be%e0%a6%87%e0%a6%95%e0%a7%87-%e0%a6%ab%e0%a6%be%e0%a6%81%e0%a6%b8%e0%a6%be%e0%a6%a4%e0%a7%87-%e0%a6%97%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%a8%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%87-%e0%a6%a7%e0%a6%b0%e0%a6%be.html">
                                                    He went to trap his brother with a weapon and caught himself

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../139/%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%a6%e0%a7%87%e0%a6%b6%e0%a6%a8%e0%a6%be-%e0%a6%89%e0%a6%aa%e0%a7%87%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be-%e0%a6%95%e0%a6%b0%e0%a7%87-%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a6%98%e0%a6%be%e0%a6%9f%e0%a7%87-%e0%a6%ac%e0%a7%87%e0%a6%b6%e0%a6%bf-%e0%a6%a6%e0%a6%be%e0%a6%ae%e0%a7%87-%e0%a6%ae%e0%a6%be%e0%a6%82%e0%a6%b8-%e0%a6%ac%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%bf.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d35e7c95ff.png"
                                                    alt="নির্দেশনা উপেক্ষা করে চারঘাটে বেশি দামে মাংস বিক্রি"
                                                    title="নির্দেশনা উপেক্ষা করে চারঘাটে বেশি দামে মাংস বিক্রি" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../139/%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%a6%e0%a7%87%e0%a6%b6%e0%a6%a8%e0%a6%be-%e0%a6%89%e0%a6%aa%e0%a7%87%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be-%e0%a6%95%e0%a6%b0%e0%a7%87-%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a6%98%e0%a6%be%e0%a6%9f%e0%a7%87-%e0%a6%ac%e0%a7%87%e0%a6%b6%e0%a6%bf-%e0%a6%a6%e0%a6%be%e0%a6%ae%e0%a7%87-%e0%a6%ae%e0%a6%be%e0%a6%82%e0%a6%b8-%e0%a6%ac%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%bf.html">
                                                    Ignoring the instructions, the meat was sold at a higher price at
                                                    Charghat

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../138/%e0%a6%ac%e0%a7%80%e0%a6%b0%e0%a6%97%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87-%e0%a6%ac%e0%a6%9c%e0%a7%8d%e0%a6%b0%e0%a6%aa%e0%a6%be%e0%a6%a4%e0%a7%87-%e0%a6%a8%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%ae%e0%a7%83%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a7%81.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3567172bf.png"
                                                    alt="বীরগঞ্জে বজ্রপাতে নারীর মৃত্যু"
                                                    title="বীরগঞ্জে বজ্রপাতে নারীর মৃত্যু" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../138/%e0%a6%ac%e0%a7%80%e0%a6%b0%e0%a6%97%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87-%e0%a6%ac%e0%a6%9c%e0%a7%8d%e0%a6%b0%e0%a6%aa%e0%a6%be%e0%a6%a4%e0%a7%87-%e0%a6%a8%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%ae%e0%a7%83%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a7%81.html">
                                                    Woman dies in lightning strike in Birganj

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../137/%e0%a6%ad%e0%a7%8b%e0%a6%b2%e0%a6%be%e0%a6%b0-%e0%a7%a7%e0%a7%a6-%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%ae%e0%a7%87-%e0%a6%88%e0%a6%a6%e0%a7%81%e0%a6%b2-%e0%a6%ab%e0%a6%bf%e0%a6%a4%e0%a6%b0-%e0%a6%89%e0%a6%a6%e0%a6%af%e0%a6%be%e0%a6%aa%e0%a6%a8.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d34d8b2cd4.png"
                                                    alt="ভোলার ১০ গ্রামে ঈদুল ফিতর উদযাপন"
                                                    title="ভোলার ১০ গ্রামে ঈদুল ফিতর উদযাপন" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../137/%e0%a6%ad%e0%a7%8b%e0%a6%b2%e0%a6%be%e0%a6%b0-%e0%a7%a7%e0%a7%a6-%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%ae%e0%a7%87-%e0%a6%88%e0%a6%a6%e0%a7%81%e0%a6%b2-%e0%a6%ab%e0%a6%bf%e0%a6%a4%e0%a6%b0-%e0%a6%89%e0%a6%a6%e0%a6%af%e0%a6%be%e0%a6%aa%e0%a6%a8.html">
                                                    Eid-ul-Fitr celebration in 10 villages of Bhola

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../136/%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8%e0%a6%bf%e0%a6%95-%e0%a6%b7%e0%a6%be%e0%a6%9f%e0%a6%97%e0%a7%81%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%9c-%e0%a6%ae%e0%a6%b8%e0%a6%9c%e0%a6%bf%e0%a6%a6%e0%a7%87-%e0%a6%b9%e0%a6%ac%e0%a7%87-%e0%a6%88%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8-%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a4.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d344fb6051.png"
                                                    alt="ঐতিহাসিক ষাটগুম্বজ মসজিদে হবে ঈদের প্রধান জামাত"
                                                    title="ঐতিহাসিক ষাটগুম্বজ মসজিদে হবে ঈদের প্রধান জামাত" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../136/%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8%e0%a6%bf%e0%a6%95-%e0%a6%b7%e0%a6%be%e0%a6%9f%e0%a6%97%e0%a7%81%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%9c-%e0%a6%ae%e0%a6%b8%e0%a6%9c%e0%a6%bf%e0%a6%a6%e0%a7%87-%e0%a6%b9%e0%a6%ac%e0%a7%87-%e0%a6%88%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8-%e0%a6%9c%e0%a6%be%e0%a6%ae%e0%a6%be%e0%a6%a4.html">
                                                    The main congregation of Eid will be in the historic Satgumbaj Mosque

                                                </a></h4>

                                        </div>




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../135/%e0%a6%b9%e0%a6%ac%e0%a6%bf%e0%a6%97%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87-%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4%e0%a6%ab%e0%a7%87%e0%a6%b0%e0%a6%a4-%e0%a7%ae-%e0%a6%9c%e0%a6%a8-%e0%a6%95%e0%a7%8b%e0%a7%9f%e0%a6%be%e0%a6%b0%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%87%e0%a6%a8%e0%a7%87.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d33de510da.png"
                                                    alt="হবিগঞ্জে ভারতফেরত ৮ জন কোয়ারেন্টাইনে"
                                                    title="হবিগঞ্জে ভারতফেরত ৮ জন কোয়ারেন্টাইনে" /></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../135/%e0%a6%b9%e0%a6%ac%e0%a6%bf%e0%a6%97%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87-%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a6%a4%e0%a6%ab%e0%a7%87%e0%a6%b0%e0%a6%a4-%e0%a7%ae-%e0%a6%9c%e0%a6%a8-%e0%a6%95%e0%a7%8b%e0%a7%9f%e0%a6%be%e0%a6%b0%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%87%e0%a6%a8%e0%a7%87.html">
                                                    7 quarantine returnees to India in Habiganj

                                                </a></h4>

                                        </div>




                                    </div>

                                </div>


                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="news-titletab">




                                        <div class="tab-image tab-border">
                                            <a
                                                href="../33/%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%ac%e0%a6%be%e0%a7%9c%e0%a6%b2%e0%a7%87-%e0%a6%95%e0%a6%ae%e0%a6%ac%e0%a7%87-%e0%a6%a8%e0%a6%be%e0%a6%b0%e0%a7%80-%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a4%e0%a6%a8.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a8e5f3e265.png"
                                                    alt="শাস্তি বাড়লে কমবে নারী নির্যাতন"
                                                    title="শাস্তি বাড়লে কমবে নারী নির্যাতন" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../33/%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%ac%e0%a6%be%e0%a7%9c%e0%a6%b2%e0%a7%87-%e0%a6%95%e0%a6%ae%e0%a6%ac%e0%a7%87-%e0%a6%a8%e0%a6%be%e0%a6%b0%e0%a7%80-%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a4%e0%a6%a8.html">
                                                    If the punishment increases, the torture of women will decrease

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a href="../16/%e0%a6%a8%e0%a7%81%e0%a6%b9-(%e0%a6%86.html"> <img
                                                    class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a8953716fb.png"
                                                    alt="নুহ (আ.) এর বিশেষ দোয়াসহ যেসব বিধান পড়া হবে আজ"
                                                    title="নুহ (আ.) এর বিশেষ দোয়াসহ যেসব বিধান পড়া হবে আজ" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../16/%e0%a6%a8%e0%a7%81%e0%a6%b9-(%e0%a6%86.html">
                                                    The provisions that will be read today, including the special prayers of
                                                    Noah (AS)

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../88/%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a7%81%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b0-%e0%a6%ae%e0%a7%87%e0%a6%a7%e0%a6%be-%e0%a6%93-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%af%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%b0-%e0%a6%ae%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%ae%e0%a7%87-%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2-%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6-%e0%a6%97%e0%a7%9c%e0%a6%a4%e0%a7%87-%e0%a6%b9%e0%a6%ac%e0%a7%87.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608aaf1e4464b.png"
                                                    alt="তারুণ্যের মেধা ও প্রযুক্তির মাধ্যমে ডিজিটাল বাংলাদেশ গড়তে হবে"
                                                    title="তারুণ্যের মেধা ও প্রযুক্তির মাধ্যমে ডিজিটাল বাংলাদেশ গড়তে হবে" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../88/%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a7%81%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b0-%e0%a6%ae%e0%a7%87%e0%a6%a7%e0%a6%be-%e0%a6%93-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%af%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%b0-%e0%a6%ae%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%ae%e0%a7%87-%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2-%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6-%e0%a6%97%e0%a7%9c%e0%a6%a4%e0%a7%87-%e0%a6%b9%e0%a6%ac%e0%a7%87.html">
                                                    Digital Bangladesh must be built through the talents and technology of
                                                    the youth

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../68/%e0%a6%9b%e0%a6%bf%e0%a6%a8%e0%a6%a4%e0%a6%be%e0%a6%87%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%95%e0%a6%ac%e0%a6%b2%e0%a7%87-%e0%a6%aa%e0%a7%9c%e0%a7%87%e0%a6%9b%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a6%be%e0%a6%82%e0%a6%ac%e0%a6%be%e0%a6%a6%e0%a6%bf%e0%a6%95-%e0%a6%b8%e0%a6%bf%e0%a7%9f%e0%a6%be%e0%a6%ae%2c-%e0%a6%b8%e0%a6%be%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a7%87-%e0%a6%89%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be%e0%a6%b0.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608aa2a20db9a.png"
                                                    alt="ছিনতাইকারীর কবলে পড়েছিলেন সাংবাদিক সিয়াম, সাভারে উদ্ধার"
                                                    title="ছিনতাইকারীর কবলে পড়েছিলেন সাংবাদিক সিয়াম, সাভারে উদ্ধার" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../68/%e0%a6%9b%e0%a6%bf%e0%a6%a8%e0%a6%a4%e0%a6%be%e0%a6%87%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%95%e0%a6%ac%e0%a6%b2%e0%a7%87-%e0%a6%aa%e0%a7%9c%e0%a7%87%e0%a6%9b%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a6%be%e0%a6%82%e0%a6%ac%e0%a6%be%e0%a6%a6%e0%a6%bf%e0%a6%95-%e0%a6%b8%e0%a6%bf%e0%a7%9f%e0%a6%be%e0%a6%ae%2c-%e0%a6%b8%e0%a6%be%e0%a6%ad%e0%a6%be%e0%a6%b0%e0%a7%87-%e0%a6%89%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be%e0%a6%b0.html">
                                                    Journalist Siam caught in snatching, rescued in Savar

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../82/%e0%a6%aa%e0%a7%81%e0%a6%a3%e0%a7%8d%e0%a6%af-%e0%a6%b6%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%ac%e0%a6%be-%e0%a6%97%e0%a7%81%e0%a6%a1-%e0%a6%ab%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%87%e0%a6%a1%e0%a7%87%e0%a6%b0-%e0%a6%ae%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%a5%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608aadc43ac49.png"
                                                    alt="পুণ্য শুক্রবার বা গুড ফ্রাইডের মর্মকথা"
                                                    title="পুণ্য শুক্রবার বা গুড ফ্রাইডের মর্মকথা" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../82/%e0%a6%aa%e0%a7%81%e0%a6%a3%e0%a7%8d%e0%a6%af-%e0%a6%b6%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%ac%e0%a6%be-%e0%a6%97%e0%a7%81%e0%a6%a1-%e0%a6%ab%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%87%e0%a6%a1%e0%a7%87%e0%a6%b0-%e0%a6%ae%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%a5%e0%a6%be.html">
                                                    The essence of Good Friday or Good Friday

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../112/%e0%a6%b6%e0%a6%96%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a6%b6%e0%a7%87-%e0%a6%b0%e0%a6%bf%e0%a6%9f-%e0%a6%95%e0%a6%b0%e0%a6%ac%e0%a7%87%e0%a6%a8-%e0%a6%a8%e0%a6%be%2c-%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a7%81%e0%a6%9b-%e0%a6%86%e0%a6%b2%e0%a7%80%e0%a6%95%e0%a7%87-%e0%a6%b9%e0%a6%be%e0%a6%87%e0%a6%95%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%9f.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608abf5b64a98.png"
                                                    alt="শখের বশে রিট করবেন না, ইউনুছ আলীকে হাইকোর্ট"
                                                    title="শখের বশে রিট করবেন না, ইউনুছ আলীকে হাইকোর্ট" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../112/%e0%a6%b6%e0%a6%96%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a6%b6%e0%a7%87-%e0%a6%b0%e0%a6%bf%e0%a6%9f-%e0%a6%95%e0%a6%b0%e0%a6%ac%e0%a7%87%e0%a6%a8-%e0%a6%a8%e0%a6%be%2c-%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a7%81%e0%a6%9b-%e0%a6%86%e0%a6%b2%e0%a7%80%e0%a6%95%e0%a7%87-%e0%a6%b9%e0%a6%be%e0%a6%87%e0%a6%95%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%9f.html">
                                                    Do not writ for hobby, High Court to Yunus Ali

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../105/%e0%a6%b0%e0%a7%8b%e0%a6%9c%e0%a6%be%e0%a7%9f-%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%93-%e0%a6%ad%e0%a7%81%e0%a6%b2-%e0%a6%a5%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%ac%e0%a6%be%e0%a6%81%e0%a6%9a%e0%a6%be%e0%a6%b0-%e0%a6%a6%e0%a7%8b%e0%a7%9f%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608abbf32bdb4.png"
                                                    alt="রোজায় বিভ্রান্তি ও ভুল থেকে বাঁচার দোয়া"
                                                    title="রোজায় বিভ্রান্তি ও ভুল থেকে বাঁচার দোয়া" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../105/%e0%a6%b0%e0%a7%8b%e0%a6%9c%e0%a6%be%e0%a7%9f-%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%93-%e0%a6%ad%e0%a7%81%e0%a6%b2-%e0%a6%a5%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%ac%e0%a6%be%e0%a6%81%e0%a6%9a%e0%a6%be%e0%a6%b0-%e0%a6%a6%e0%a7%8b%e0%a7%9f%e0%a6%be.html">
                                                    Blessings to avoid confusion and mistakes in fasting

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../93/%e0%a6%86%e0%a7%9f%e0%a6%be%e0%a6%b0%e0%a6%b2%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a7%87%e0%a6%b0-%e0%a6%b8%e0%a6%ac%e0%a6%9a%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%b8%e0%a7%81%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a6%b0-%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8-%e0%a6%a4%e0%a7%88%e0%a6%b0%e0%a6%bf-%e0%a6%95%e0%a6%b0%e0%a7%87%e0%a6%9b%e0%a6%bf%e0%a6%b2-%e0%a6%a6%e0%a7%88%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a6%b0%e0%a6%be%21.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608ab122adcf7.png"
                                                    alt="আয়ারল্যান্ডের সবচেয়ে সুন্দর স্থান তৈরি করেছিল দৈত্যরা!"
                                                    title="আয়ারল্যান্ডের সবচেয়ে সুন্দর স্থান তৈরি করেছিল দৈত্যরা!" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../93/%e0%a6%86%e0%a7%9f%e0%a6%be%e0%a6%b0%e0%a6%b2%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a7%87%e0%a6%b0-%e0%a6%b8%e0%a6%ac%e0%a6%9a%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%b8%e0%a7%81%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a6%b0-%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8-%e0%a6%a4%e0%a7%88%e0%a6%b0%e0%a6%bf-%e0%a6%95%e0%a6%b0%e0%a7%87%e0%a6%9b%e0%a6%bf%e0%a6%b2-%e0%a6%a6%e0%a7%88%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a6%b0%e0%a6%be%21.html">
                                                    The giants created the most beautiful place in Ireland!

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../18/%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a7%9f-%e0%a6%ae%e0%a7%83%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a7%81%e0%a6%b0-%e0%a6%ae%e0%a6%bf%e0%a6%9b%e0%a6%bf%e0%a6%b2%e0%a7%87-%e0%a6%86%e0%a6%b0%e0%a6%93-%e0%a7%ae%e0%a7%ae-%e0%a6%9c%e0%a6%a8.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a89f57a41a.png"
                                                    alt="করোনায় মৃত্যুর মিছিলে আরও ৮৮ জন"
                                                    title="করোনায় মৃত্যুর মিছিলে আরও ৮৮ জন" /></a>

                                            <a href="../18/%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a7%9f-%e0%a6%ae%e0%a7%83%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a7%81%e0%a6%b0-%e0%a6%ae%e0%a6%bf%e0%a6%9b%e0%a6%bf%e0%a6%b2%e0%a7%87-%e0%a6%86%e0%a6%b0%e0%a6%93-%e0%a7%ae%e0%a7%ae-%e0%a6%9c%e0%a6%a8.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../18/%e0%a6%95%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a6%be%e0%a7%9f-%e0%a6%ae%e0%a7%83%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a7%81%e0%a6%b0-%e0%a6%ae%e0%a6%bf%e0%a6%9b%e0%a6%bf%e0%a6%b2%e0%a7%87-%e0%a6%86%e0%a6%b0%e0%a6%93-%e0%a7%ae%e0%a7%ae-%e0%a6%9c%e0%a6%a8.html">
                                                    6 more people in the death procession in Corona

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../40/%e0%a6%af%e0%a6%ac%e0%a6%bf%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%bf-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be-%e0%a6%97%e0%a6%ac%e0%a7%87%e0%a6%b7%e0%a6%a3%e0%a6%be-%e0%a6%9b%e0%a6%be%e0%a7%9c%e0%a6%be%e0%a6%93-%e0%a6%af%e0%a7%87%e0%a6%96%e0%a6%be%e0%a6%a8%e0%a7%87-%e0%a6%85%e0%a6%a8%e0%a6%a8%e0%a7%8d%e0%a6%af.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a8ff545f02.png"
                                                    alt="যবিপ্রবি শিক্ষা-গবেষণা ছাড়াও যেখানে অনন্য"
                                                    title="যবিপ্রবি শিক্ষা-গবেষণা ছাড়াও যেখানে অনন্য" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../40/%e0%a6%af%e0%a6%ac%e0%a6%bf%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%bf-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be-%e0%a6%97%e0%a6%ac%e0%a7%87%e0%a6%b7%e0%a6%a3%e0%a6%be-%e0%a6%9b%e0%a6%be%e0%a7%9c%e0%a6%be%e0%a6%93-%e0%a6%af%e0%a7%87%e0%a6%96%e0%a6%be%e0%a6%a8%e0%a7%87-%e0%a6%85%e0%a6%a8%e0%a6%a8%e0%a7%8d%e0%a6%af.html">
                                                    Yabiprabi is unique in addition to education-research

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../151/%e0%a6%8f%e0%a6%b8%e0%a6%aa%e0%a6%bf%e0%a6%b0-%e0%a6%88%e0%a6%a6-%e0%a6%89%e0%a6%aa%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%81%e0%a6%a6%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/609d3b7209a49.png"
                                                    alt="এসপির ঈদ উপহার-খাবার পেয়ে কাঁদলেন সেই বৃদ্ধা"
                                                    title="এসপির ঈদ উপহার-খাবার পেয়ে কাঁদলেন সেই বৃদ্ধা" /></a>

                                            <a href="../151/%e0%a6%8f%e0%a6%b8%e0%a6%aa%e0%a6%bf%e0%a6%b0-%e0%a6%88%e0%a6%a6-%e0%a6%89%e0%a6%aa%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%81%e0%a6%a6%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../151/%e0%a6%8f%e0%a6%b8%e0%a6%aa%e0%a6%bf%e0%a6%b0-%e0%a6%88%e0%a6%a6-%e0%a6%89%e0%a6%aa%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%96%e0%a6%be%e0%a6%ac%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%87%e0%a7%9f%e0%a7%87-%e0%a6%95%e0%a6%be%e0%a6%81%e0%a6%a6%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be.html">
                                                    The old woman cried after receiving SP&#039;s Eid gift-food

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../60/%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95%e0%a6%a4%e0%a6%be-%e0%a6%a5%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%85%e0%a6%ac%e0%a6%b8%e0%a6%b0-%e0%a6%a8%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%9a%e0%a6%ac%e0%a6%bf%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a5%e0%a6%ae-%e0%a6%a8%e0%a6%be%e0%a6%b0%e0%a7%80-%e0%a6%89%e0%a6%aa%e0%a6%be%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a9f21a5605.png"
                                                    alt="শিক্ষকতা থেকে অবসর নিলেন চবির প্রথম নারী উপাচার্য"
                                                    title="শিক্ষকতা থেকে অবসর নিলেন চবির প্রথম নারী উপাচার্য" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../60/%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95%e0%a6%a4%e0%a6%be-%e0%a6%a5%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%85%e0%a6%ac%e0%a6%b8%e0%a6%b0-%e0%a6%a8%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%9a%e0%a6%ac%e0%a6%bf%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a5%e0%a6%ae-%e0%a6%a8%e0%a6%be%e0%a6%b0%e0%a7%80-%e0%a6%89%e0%a6%aa%e0%a6%be%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af.html">
                                                    Chabir&#039;s first female vice-chancellor retired from teaching

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../107/%e0%a6%ac%e0%a7%87%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%bf-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a7%8b%e0%a6%97%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%ac%e0%a7%87%e0%a6%a6%e0%a6%a8-%e0%a6%b6%e0%a7%87%e0%a6%b7-%e0%a6%b9%e0%a6%9a%e0%a7%8d%e0%a6%9b%e0%a7%87-%e0%a6%b6%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%be%e0%a6%b0%2c-%e0%a6%ae%e0%a7%87-%e0%a6%ae%e0%a6%be%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ab%e0%a6%b2.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608abd1cb7c92.png"
                                                    alt="বেসরকারি শিক্ষক নিয়োগের আবেদন শেষ হচ্ছে শুক্রবার, মে মাসেই ফল"
                                                    title="বেসরকারি শিক্ষক নিয়োগের আবেদন শেষ হচ্ছে শুক্রবার, মে মাসেই ফল" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../107/%e0%a6%ac%e0%a7%87%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%bf-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a7%8b%e0%a6%97%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%ac%e0%a7%87%e0%a6%a6%e0%a6%a8-%e0%a6%b6%e0%a7%87%e0%a6%b7-%e0%a6%b9%e0%a6%9a%e0%a7%8d%e0%a6%9b%e0%a7%87-%e0%a6%b6%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%be%e0%a6%b0%2c-%e0%a6%ae%e0%a7%87-%e0%a6%ae%e0%a6%be%e0%a6%b8%e0%a7%87%e0%a6%87-%e0%a6%ab%e0%a6%b2.html">
                                                    The application for the recruitment of private teachers is coming to an
                                                    end on Friday, May

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../45/%e0%a6%85%e0%a6%ac%e0%a6%b6%e0%a7%87%e0%a6%b7%e0%a7%87-%e0%a6%ad%e0%a7%9f%e0%a6%99%e0%a7%8d%e0%a6%95%e0%a6%b0-%e0%a6%b9%e0%a7%9f%e0%a7%87-%e0%a6%93%e0%a6%a0%e0%a6%be-%e0%a6%9c%e0%a7%81%e0%a6%9f%e0%a6%bf-%e0%a6%ad%e0%a6%be%e0%a6%99%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%85%e0%a6%ad%e0%a6%bf%e0%a6%b7%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%a4-%e0%a6%b6%e0%a6%b0%e0%a6%bf%e0%a6%ab%e0%a7%81%e0%a6%b2-%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a7%9c%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%ac%e0%a7%87%e0%a6%a6%e0%a6%95.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a929c178a1.png"
                                                    alt="অবশেষে ভয়ঙ্কর হয়ে ওঠা জুটি ভাঙলেন অভিষিক্ত শরিফুল      ক্রীড়া প্রতিবেদক"
                                                    title="অবশেষে ভয়ঙ্কর হয়ে ওঠা জুটি ভাঙলেন অভিষিক্ত শরিফুল      ক্রীড়া প্রতিবেদক" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../45/%e0%a6%85%e0%a6%ac%e0%a6%b6%e0%a7%87%e0%a6%b7%e0%a7%87-%e0%a6%ad%e0%a7%9f%e0%a6%99%e0%a7%8d%e0%a6%95%e0%a6%b0-%e0%a6%b9%e0%a7%9f%e0%a7%87-%e0%a6%93%e0%a6%a0%e0%a6%be-%e0%a6%9c%e0%a7%81%e0%a6%9f%e0%a6%bf-%e0%a6%ad%e0%a6%be%e0%a6%99%e0%a6%b2%e0%a7%87%e0%a6%a8-%e0%a6%85%e0%a6%ad%e0%a6%bf%e0%a6%b7%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%a4-%e0%a6%b6%e0%a6%b0%e0%a6%bf%e0%a6%ab%e0%a7%81%e0%a6%b2-%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a7%9c%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%ac%e0%a7%87%e0%a6%a6%e0%a6%95.html">
                                                    Finally, the anointed Shariful broke the terrible alliance Sports
                                                    Reporter

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../95/%e0%a7%a7%e0%a7%ae%e0%a7%a6%e0%a7%a6-%e0%a6%ac%e0%a6%9b%e0%a6%b0%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a7%8b-%e0%a6%ac%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a7%9f%e0%a6%95%e0%a6%b0-%e0%a6%8f%e0%a6%95-%e0%a6%a6%e0%a7%87%e0%a6%89%e0%a6%b2.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608ab2910eb62.png"
                                                    alt="১৮০০ বছরের পুরোনো বিস্ময়কর এক দেউল"
                                                    title="১৮০০ বছরের পুরোনো বিস্ময়কর এক দেউল" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../95/%e0%a7%a7%e0%a7%ae%e0%a7%a6%e0%a7%a6-%e0%a6%ac%e0%a6%9b%e0%a6%b0%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%8b%e0%a6%a8%e0%a7%8b-%e0%a6%ac%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a7%9f%e0%a6%95%e0%a6%b0-%e0%a6%8f%e0%a6%95-%e0%a6%a6%e0%a7%87%e0%a6%89%e0%a6%b2.html">
                                                    A wonderful 1800 year old bankrupt

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../50/%e0%a6%b0%e0%a7%8b%e0%a6%9c%e0%a6%be%e0%a7%9f-%e0%a6%9f%e0%a6%95%e0%a6%a6%e0%a6%87-%e0%a6%96%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be-%e0%a6%9c%e0%a6%b0%e0%a7%81%e0%a6%b0%e0%a6%bf-%e0%a6%af%e0%a7%87%e0%a6%b8%e0%a6%ac-%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%a3%e0%a7%87.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a951ed130b.png"
                                                    alt="রোজায় টকদই খাওয়া জরুরি যেসব কারণে"
                                                    title="রোজায় টকদই খাওয়া জরুরি যেসব কারণে" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../50/%e0%a6%b0%e0%a7%8b%e0%a6%9c%e0%a6%be%e0%a7%9f-%e0%a6%9f%e0%a6%95%e0%a6%a6%e0%a6%87-%e0%a6%96%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be-%e0%a6%9c%e0%a6%b0%e0%a7%81%e0%a6%b0%e0%a6%bf-%e0%a6%af%e0%a7%87%e0%a6%b8%e0%a6%ac-%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%a3%e0%a7%87.html">
                                                    Reasons why it is important to eat sour yogurt during fasting

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../131/%e0%a7%a7-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%97%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a6%bf-%e0%a6%ac%e0%a7%8b%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%87-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%a6%e0%a6%be%e0%a6%ae-%e0%a7%a9%e0%a7%a6%e0%a7%a6-%e0%a6%9f%e0%a6%be%e0%a6%95%e0%a6%be.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608ac7b0677b8.png"
                                                    alt="১ হাজার সুগন্ধি বোম্বাই মরিচের দাম ৩০০ টাকা"
                                                    title="১ হাজার সুগন্ধি বোম্বাই মরিচের দাম ৩০০ টাকা" /></a>

                                            <a href="../131/%e0%a7%a7-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%97%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a6%bf-%e0%a6%ac%e0%a7%8b%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%87-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%a6%e0%a6%be%e0%a6%ae-%e0%a7%a9%e0%a7%a6%e0%a7%a6-%e0%a6%9f%e0%a6%be%e0%a6%95%e0%a6%be.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../131/%e0%a7%a7-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%97%e0%a6%a8%e0%a7%8d%e0%a6%a7%e0%a6%bf-%e0%a6%ac%e0%a7%8b%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%87-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%a6%e0%a6%be%e0%a6%ae-%e0%a7%a9%e0%a7%a6%e0%a7%a6-%e0%a6%9f%e0%a6%be%e0%a6%95%e0%a6%be.html">
                                                    The price of 1 thousand fragrant Bombay chillies is 300 rupees

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../35/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%80%e0%a6%b0-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a7%9f-%e0%a6%86.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a8ef9762d2.png"
                                                    alt="রাজধানীবাসীর সেবায় আ.লীগের ২ মেডিকেল টিম"
                                                    title="রাজধানীবাসীর সেবায় আ.লীগের ২ মেডিকেল টিম" /></a>

                                            <a href="../35/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%80%e0%a6%b0-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a7%9f-%e0%a6%86.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../35/%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a7%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%80%e0%a6%b0-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a7%9f-%e0%a6%86.html">
                                                    2 medical teams of A-League in the service of the people of the capital

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../119/%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a6%ae%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%b0%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a7%9f-%e0%a6%87%e0%a6%aa%e0%a6%bf%e0%a6%8f%e0%a6%b8-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a7%80%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%a8%e0%a6%be%e0%a6%a6.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608ac255c0859.png"
                                                    alt="শ্রমবাজার সুরক্ষায় ইপিএস কর্মীদের আর্তনাদ"
                                                    title="শ্রমবাজার সুরক্ষায় ইপিএস কর্মীদের আর্তনাদ" /></a>

                                            <a href="../119/%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a6%ae%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%b0%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a7%9f-%e0%a6%87%e0%a6%aa%e0%a6%bf%e0%a6%8f%e0%a6%b8-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a7%80%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%a8%e0%a6%be%e0%a6%a6.html"
                                                class="tab-icon"><i class="fa fa-play"></i></a>

                                            <h4 class="tab_hadding"><a
                                                    href="../119/%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a6%ae%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%b0%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a7%9f-%e0%a6%87%e0%a6%aa%e0%a6%bf%e0%a6%8f%e0%a6%b8-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a7%80%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%a8%e0%a6%be%e0%a6%a6.html">
                                                    The cry of EPS workers for protection of labor market

                                                </a></h4>

                                        </div>



                                        <div class="tab-image tab-border">
                                            <a
                                                href="../61/%e0%a6%b8%e0%a7%8b%e0%a7%9f%e0%a6%be%e0%a6%a8-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%aa%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a6%bf%e0%a6%9c%e0%a7%87-%e0%a6%8f%e0%a6%95%e0%a6%be%e0%a6%a7%e0%a6%bf%e0%a6%95-%e0%a6%9a%e0%a6%be%e0%a6%95%e0%a6%b0%e0%a6%bf%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%af%e0%a7%8b%e0%a6%97.html">
                                                <img class="lazyload"
                                                    src="../../public/templateimage/60e42594dd1aa.jpg"
                                                    data-src="https://themebazar.xyz/laraflash/public/postimages/608a9fc2ba689.png"
                                                    alt="সোয়ান প্রোপার্টিজে একাধিক চাকরির সুযোগ"
                                                    title="সোয়ান প্রোপার্টিজে একাধিক চাকরির সুযোগ" /></a>


                                            <h4 class="tab_hadding"><a
                                                    href="../61/%e0%a6%b8%e0%a7%8b%e0%a7%9f%e0%a6%be%e0%a6%a8-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%aa%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a6%bf%e0%a6%9c%e0%a7%87-%e0%a6%8f%e0%a6%95%e0%a6%be%e0%a6%a7%e0%a6%bf%e0%a6%95-%e0%a6%9a%e0%a6%be%e0%a6%95%e0%a6%b0%e0%a6%bf%e0%a6%b0-%e0%a6%b8%e0%a7%81%e0%a6%af%e0%a7%8b%e0%a6%97.html">
                                                    Swan Properties Multiple job opportunities

                                                </a></h4>

                                        </div>



                                    </div>

                                </div>

                            </div>

                            <div class="siteber-add">
                                <p><img style="width: 100%;" src="../../../latestscript/public/ads/609d0bb785be9.gif"><br>
                                </p>
                            </div>



                        </div>



                    </div>
                </div>
            </section </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="dist_id"]').on('change', function() {
                    var dist_id = $(this).val();
                    if (dist_id) {
                        $.ajax({
                            url: "https://themebazar.xyz/laraflash/get/subdist/frontend/" + dist_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $("#subdist_id").empty();
                                $.each(data, function(key, value) {
                                    $("#subdist_id").append('<option value="' + value.id +
                                        '">' + value.subdistrict_bn + '</option>');
                                });

                            },

                        });
                    } else {
                        alert('danger');
                    }

                });
            });
        </script>
    @endsection
