@extends('layouts.app')


@section('body')

    <!-- Page Info section -->
    <section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.png">
        <div class="container">
            <h2>Blog</h2>
            <div class="site-breadcrumb">
                <a href="">Home</a> /
                <span>Blog</span>
            </div>
        </div>
    </section>
    <!-- Page Info end -->


    <!-- Blog section -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/1.jpg">
                            <div class="blog-date">Dec 04, 2018</div>
                        </div>
                        <h4 class="blog-title">tips on How to meditate</h4>
                        <div class="post-metas">
                            <div class="post-meta">By MAria Smith</div>
                            <div class="post-meta">Yoga, Meditation, pillate</div>
                        </div>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. </p>
                        <a href="" class="site-btn">Read More</a>
                    </div>
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/2.jpg">
                            <div class="blog-date">Dec 04, 2018</div>
                        </div>
                        <h4 class="blog-title">the best 5 yoga poses</h4>
                        <div class="post-metas">
                            <div class="post-meta">By MAria Smith</div>
                            <div class="post-meta">Yoga, Meditation, pillate</div>
                        </div>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. </p>
                        <a href="" class="site-btn">Read More</a>
                    </div>
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/3.jpg">
                            <div class="blog-date">Dec 04, 2018</div>
                        </div>
                        <h4 class="blog-title">tips on How to meditate</h4>
                        <div class="post-metas">
                            <div class="post-meta">By MAria Smith</div>
                            <div class="post-meta">Yoga, Meditation, pillate</div>
                        </div>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. </p>
                        <a href="" class="site-btn">Read More</a>
                    </div>
                    <div class="site-pagination">
                        <a href="" class="active">01.</a>
                        <a href="">02.</a>
                        <a href="">03</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 sidebar">
                    <div class="sb-widget">
                        <form class="search-widget">
                            <input type="text" placeholder="Search">
                            <button><img src="img/search-icon.png" alt=""></button>
                        </form>
                    </div>
                    <div class="sb-widget">
                        <h2 class="sbw-title">Categories</h2>
                        <ul>
                            <li><a href="#">Yoga Practice</a></li>
                            <li><a href="#">Yoga Secrets</a></li>
                            <li><a href="#">Meditation</a></li>
                            <li><a href="#">Pillates</a></li>
                        </ul>
                    </div>
                    <div class="sb-widget">
                        <h2 class="sbw-title">Archive</h2>
                        <ul>
                            <li><a href="#">August 2018</a></li>
                            <li><a href="#">September 2018</a></li>
                            <li><a href="#">Octomber 2018</a></li>
                            <li><a href="#">Novemeber 2018</a></li>
                            <li><a href="#">December 2018</a></li>
                        </ul>
                    </div>
                    <div class="sb-widget">
                        <h2 class="sbw-title">Latest Posts</h2>
                        <div class="letest-blog-widget">
                            <div class="lb-item">
                                <div class="lb-thumb">
                                    <img src="img/blog-widget/1.jpg" alt="">
                                </div>
                                <div class="lb-text">
                                    <span>Dec 04, 2018</span>
                                    <p>The best you practice</p>
                                </div>
                            </div>
                            <div class="lb-item">
                                <div class="lb-thumb">
                                    <img src="img/blog-widget/2.jpg" alt="">
                                </div>
                                <div class="lb-text">
                                    <span>Dec 04, 2018</span>
                                    <p>Yoga tips & triks</p>
                                </div>
                            </div>
                            <div class="lb-item">
                                <div class="lb-thumb">
                                    <img src="img/blog-widget/3.jpg" alt="">
                                </div>
                                <div class="lb-text">
                                    <span>Dec 04, 2018</span>
                                    <p>The best you practice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
@endsection
