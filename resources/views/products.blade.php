@extends('layouts.app')

@section('body')
    <!-- Courses section -->
    <section class="cl-courses-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="course-item">
                        <div class="ci-icon">
                            <i class="flaticon-002-yin-yang"></i>
                        </div>
                        <span>Begginer & Advanced</span>
                        <h4>Yoga</h4>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-item">
                        <div class="ci-icon">
                            <i class="flaticon-001-meditation"></i>
                        </div>
                        <span>Begginer & Advanced</span>
                        <h4>Hatha</h4>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-item">
                        <div class="ci-icon">
                            <i class="flaticon-021-yoga-mat"></i>
                        </div>
                        <span>Begginer & Advanced</span>
                        <h4>Pilates</h4>
                        <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses section end -->


    <!-- Feature tab section -->
    <section class="feature-tab-section spad">
        <div class="container">
            <img src="img/feature-icon.png" alt="" class="feature-icon">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="site-tab-nav stn-dark nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                                <h6>Yoga training</h6>
                                <span>Etiam pretium, nibh</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
                                <h6>Meditation</h6>
                                <span>Petium, nibh vitae</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
                                <h6>pilates</h6>
                                <span>Etiam pretium, nibh</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
                                <h6>healing</h6>
                                <span>Petium, nibh vitae</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="site-tab-content tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="st-content">
                                <div class="sp-title">
                                    <span>Begginer & Advanced</span>
                                    <h4>Meditation Sessions</h4>
                                </div>
                                <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod conse-quat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem.</p>
                                <ul>
                                    <li>Etiam pretium, nibh vitae varius ultricies</li>
                                    <li>Cras cursus pellentesque tortorut pellentesque</li>
                                    <li>Pellentesque non mattis nulla</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="st-content">
                                <div class="sp-title">
                                    <span>Begginer & Advanced</span>
                                    <h4>Meditation Sessions</h4>
                                </div>
                                <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod conse-quat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem.</p>
                                <ul>
                                    <li>Etiam pretium, nibh vitae varius ultricies</li>
                                    <li>Cras cursus pellentesque tortorut pellentesque</li>
                                    <li>Pellentesque non mattis nulla</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="st-content">
                                <div class="sp-title">
                                    <span>Begginer & Advanced</span>
                                    <h4>Meditation Sessions</h4>
                                </div>
                                <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod conse-quat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem.</p>
                                <ul>
                                    <li>Etiam pretium, nibh vitae varius ultricies</li>
                                    <li>Cras cursus pellentesque tortorut pellentesque</li>
                                    <li>Pellentesque non mattis nulla</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                            <div class="st-content">
                                <div class="sp-title">
                                    <span>Begginer & Advanced</span>
                                    <h4>Meditation Sessions</h4>
                                </div>
                                <p>Etiam pretium, nibh vitae varius ultricies, tellus diam gravida elit, vel rhoncus eros eros sit amet ipsum. Cras cursus pellentesque tortor. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod conse-quat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elementum dui. Curabitur et mattis ex, a ultrices lorem.</p>
                                <ul>
                                    <li>Etiam pretium, nibh vitae varius ultricies</li>
                                    <li>Cras cursus pellentesque tortorut pellentesque</li>
                                    <li>Pellentesque non mattis nulla</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature tab section -->


    <!-- Plans section -->
    <section class="plans-section">
        <div class="container">
            <div class="sp-title text-center">
                <span>Begginer & Advanced</span>
                <h4>Meditation Sessions</h4>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-plan">
                        <h2>$0</h2>
                        <h5>Free yoga class</h5>
                        <ul>
                            <li>1 Day Free Trial</li>
                            <li>1 Sauna Access</li>
                            <li>No Risks & No Obligations</li>
                        </ul>
                        <a href="#" class="site-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-plan spacial-plan">
                        <h2>$0</h2>
                        <h5>Basic Subscription</h5>
                        <ul>
                            <li>1 Day Free Trial</li>
                            <li>1 Sauna Access</li>
                            <li>No Risks & No Obligations</li>
                        </ul>
                        <a href="#" class="site-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-plan">
                        <h2>$0</h2>
                        <h5>Unlimited Subscription</h5>
                        <ul>
                            <li>1 Day Free Trial</li>
                            <li>1 Sauna Access</li>
                            <li>No Risks & No Obligations</li>
                        </ul>
                        <a href="#" class="site-btn">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="plan-icon text-center">
                <img src="img/plans-icon.png" alt="">
            </div>
        </div>
    </section>
    <!-- Plans section end -->
@endsection
