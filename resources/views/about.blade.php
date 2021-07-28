@extends('common.master')

@section('title', $title)

@section('body')
    <aside id="about-aside" role="complementary" class="js-fullheight aside">
        <h2 id="avatar">
            <a href="/">
                <!--<span>Ray</span>-->
                <img src="/resources/image/avatar.jpg" alt="avatar"/>
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
                <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook-official"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="GitHub"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
    </aside>
    <div id="about-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <section>
                        <header class="major">
                            <h2>與我聯繫 Get In Touch</h2>
                        </header>
                        <div class="business-card text-center">
                            <div class="row">
                                <div class="qr-code">
                                    <img src="https://qr-official.line.me/sid/L/901lgsbe.png" alt="官方LINE機器人" height="50">
                                </div>
                                <div class="information">
                                    <ul class="labeled-icons text-left">
                                        <li>
                                            <a>Rui Xiuang</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a>0972-016-***</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:sui16783@gmail.com">sui16783@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6 d-none d-sm-none d-md-block">
                    <div class="about-img animate-box fadeInLeft animated" data-animate-effect="fadeInLeft" style="background-image:url(/resources/image/about-03.jpg)">
                        <div class="about-img-2 animate-box fadeInRight animated" data-animate-effect="fadeInRight" style="background-image:url(/resources/image/about-02.webp)">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <section>
                        <header class="major">
                            <h2><i class="fa fa-graduation-cap fa-sp"></i>學習經歷 Education</h2>
                        </header>
                        <h4><img style="max-width: 35px; height: auto;" src="https://upload.wikimedia.org/wikipedia/zh/5/58/Logo_of_ISU.png"> I-Shou University, 資訊工程學系</h4>
                        <p>2013.09 ~ 2017.06</p>
                        <br/>
                        <header class="major">
                            <h2><i class="fa fa-lightbulb-o fa-sp"></i>工作經歷 Experience</h2>
                        </header>
                        <h4>尚青雲端整合行銷股份有限公司 <br/> SHANG CHING CLOUD INTEGRATED MARKETING LTD, 資訊部主任</h4>
                        <p>2017.11 ~ 2021.09</p>
                        <ul>
                            <li>- 電子商務平台規劃與開發</li>
                            <li>- 平台資料庫管理</li>
                            <li>- 平台資料庫與消費者個資資安防護</li>
                            <li>- 針對行政、財務、行銷部門需求規劃及開發系統</li>
                            <li>- 平台廣告行銷工具開發與維護</li>
                            <li>- 平台金、物流與導購合作串接</li>
                        </ul>
                    </section>
                </div>
            </div>
            <hr class="d-none"/>
            <div class="row d-none">
                <div class="col-sm-12">
                    <section>
                        <header class="major">
                            <h2><i class="fa fa-thumbs-o-up fa-sp"></i>專業技能 Skills</h2>
                        </header>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>電子商務</h5>
                                <ul>
                                    <li>- 電子商務網站規劃開發</li>
                                    <li>- 結帳金、物流串接</li>
                                    <li>- 導購平台合作串接</li>
                                    <li>- 財務請款、裁罰、對帳、開立電子發票系統處理</li>
                                    <li>- 廠商出貨、退換貨、消費者留言系統處理</li>
                                    <li>- 廣告行銷EDM系統</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5>程式開發</h5>
                                <ul>
                                    <li>- 版本控制</li>
                                    <li>- 網站開發</li>
                                    <li>- 資料庫管理</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5>專案管理</h5>
                                <ul>
                                    <li>- Git版本控制</li>
                                    <li>- 工作流程規劃</li>
                                    <li>- 跨部門溝通、合作</li>
                                    <li>- 時程控管</li>
                                    <li>- 個資資安防護</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr class="d-none"/>
            <div class="row d-none">
                <div class="col-sm-12">
                    <section>
                        <header class="major">
                            <h2><i class="fa fa-rocket fa-sp"></i>常用工具 Develop</h2>
                        </header>
                        <div class="row">
                            @php ($key = 0)
                            @foreach($skills as $name => $skill)
                            @php ($key = $key >= 8 ? 0 : $key)
                            @php ($key++)
                            <div class="col-6 col-md-4">
                                <div class="progress-wrap">
                                    <h3>{{ $name }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-{{ $key }}" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill }}">
                                        <span>{{ $skill }}</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection