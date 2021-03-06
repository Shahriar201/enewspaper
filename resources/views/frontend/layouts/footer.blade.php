<!--=======================footer-area start==========================-->
<footer class="footer-area">
    <div class="container">
        <div class="footer-menu">
            <ul>

                <li><a href="view-page/2/Our-Family.html">
                        আমাদের পরিবার
                    </a></li>


                <li><a href="view-page/5/Privacy-Policy.html">
                        প্রাইভেসী পলিসি
                    </a></li>


                <li><a href="view-page/6/About-us.html">
                        আমাদের কথা
                    </a></li>


                <li><a href="view-page/7/Advertising-Price.html">
                        বিজ্ঞাপন মূল্য
                    </a></li>

            </ul>
        </div>


        <div class="row">
            <div class="col-lg-5 col-md-5">
                <h3 class="footer-title">
                    যোগাযোগের ঠিাকানা :

                </h3>
                <div class="footer-content">
                    <ul>
                        <li> <i class="fas fa-map-marker-alt"></i> {{ $contact->contact_title_location_en }}
                        </li>
                        <li> <i class="fas fa-phone-alt"></i> খবর:{{ $contact->contact_phone_en }}, সার্কুলেশন:{{ $contact->contact_circulation_phone_en }},
                            বিজ্ঞাপন:{{ $contact->contact_advertising_phone_en }}
                        </li>
                        <li> <i class="fas fa-envelope"></i> {{ $contact->contact_email }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-7">

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 class="footer-title">
                            সম্পাদক ও প্রকাশক :

                        </h3>
                        <div class="footer-content">

                            <div align="left">সম্পাদক : {{ $contact->editor_name_en }}</div>
                            <div align="left">নির্বাহী সম্পাদক : {{ $contact->executive_editor_name_en }}<br></div>
                            <div align="left">বার্তা সম্পাদক :&nbsp; {{ $contact->message_editor_name_en }}</div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3 class="footer-title">

                            সম্পাদক ও প্রকাশক :

                        </h3>
                        <div class="footer-content">
                            <div align="left">অফিস : {{ $contact->editor_office_en }}</div>
                            <div align="left">মোবাইল : {{ $contact->editor_phone_en }}</div>
                            <div align="left">ইমেইল : {{ $contact->editor_email }}<br></div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="copy_right_section">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copy-right">
                        © সমস্ত অধিকার সংরক্ষিত © 2021 লেটেস্ট স্ক্রিপ্ট (লারাভেল)
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="design-developed">
                        Design & Developed BY <a href="http://themesbazar.com/" target="_blank" title="ThemesBazar.com">
                            ThemesBazar.com </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="scrollToTop"><i class="fas fa-long-arrow-alt-up"></i></a>

    </div>
</footer>

<!--=======================footer-area-End==========================-->

<div class="footer-scrool">
    <div class="footer-scrool-1">
        <span>
            নোটিশ :

        </span>
    </div>

    <div class="footer-scrool-2">
        <a href="#">
            <marquee direction="left" scrollamount="5px" onmouseover="this.stop()" onmouseout="this.start()">
                করোনায় আরও ৯৫ মৃত্যু, শনাক্ত ৪২৮০

            </marquee>
        </a>
    </div>
</div>