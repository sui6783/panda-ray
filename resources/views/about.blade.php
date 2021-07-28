@extends('common.master')

@section('title', $title)

@section('body')
    <aside id="about-aside" role="complementary" class="js-fullheight aside">
        <h2 id="avatar">
            <a href="/">
                <span>Ray</span>
            </a>
        </h2>
        <h1 id="profile">
            <strong>This is Ray</strong>, loves technology
                    and also enjoys life.
        </h1>
        <nav id="about-main-menu" role="navigation" class="d-none d-sm-none d-md-block">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/about">About</a></li>
            </ul>
        </nav>
        <div class="about-footer">
            <p class="d-none d-sm-none d-md-block">
                <small>
                    Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is <br/> made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://app1e.idv.tw">Ray</a><br/>
                    <span>Demo Images: <br/> <a href="http://nothingtochance.co/" target="_blank">nothingtochance.co</a></span>
                </small>
            </p>
            <ul>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" title="GitHub"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
    </aside>
    <div id="about-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 d-none d-sm-none d-md-block">
                    <div class="about-img animate-box fadeInLeft animated" data-animate-effect="fadeInLeft" style="background-image:url(/resources/image/about-03.jpg)">
                        <div class="about-img-2 animate-box fadeInRight animated" data-animate-effect="fadeInRight" style="background-image:url(/resources/image/about-02.webp)">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <section id="one">
                        <header class="major">
                            <h2>學習經歷 Education</h2>
                        </header>
                        <h4><img style="max-width: 35px; height: auto;" src="https://upload.wikimedia.org/wikipedia/zh/5/58/Logo_of_ISU.png"> I-Shou University</h4>
                        <p>2013.09 ~ 2017.06</p>
                        <br/>
                        <header class="major">
                            <h2>工作經歷 Experience</h2>
                        </header>
                        <h4>尚青雲端整合行銷股份有限公司 <br/> SHANG CHING CLOUD INTEGRATED MARKETING LTD, 資訊部主任</h4>
                        <p>2017.11 ~ 2021.09</p>
                        <ul>
                            <li>- 電子商務平台規劃與開發</li>
                            <li>- 平台資料庫管理</li>
                            <li>- 平台資料庫與消費者個資資安防護</li>
                            <li>- 針對公司行政、財務、行銷部門需求規劃及開發系統</li>
                            <li>- 平台廣告行銷工具開發與維護</li>
                            <li>- 平台金、物流與導購合作串接</li>
                        </ul>
                    </section>
                </div>
            </div>
            <div class="row d-none">
                <div class="col-sm-12">
                    <section id="two">
                        <header class="major">
                            <h2>專業技能 Skills</h2>
                        </header>
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection