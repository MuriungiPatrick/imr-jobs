@extends('fnlayouts.main')

@section('content')


<!-- Page header -->
<header class="site-header size-lg text-center single-page-header" style="background-color: #000;">
    <div class="container">

        <div class="single-page-header-inner">
            <div class="left-side">
                <div class="header-image"><a href="single-company-profile.html"><img src="{{asset('assets/img/Team-5-specs.png')}}" alt=""></a></div>
                <div class="header-details">
                    <h2>{{ $job->job->title }}</h2>
                    <ul>
                        <li>Posted By: &nbsp;<a class="text-white" href="{{ url('author->slug') }}">
                                <i class="fa fa-user"></i>{{ $job->author->name }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-side">
                <div class="salary-box">
                    <div class="salary-type">Hourly Rate</div>
                    <div class="salary-amount">$&nbsp;{{ $job->hourly_rate }}</div>
                </div>
            </div>
        </div>
</header>
<div class="container">
    <!-- END Page header -->
    <!-- Main container -->
    <main>

        <!-- Job detail -->
        <section>
            <div class="container">
                <div class="col-md-7 col-lg-8">

                    <article class="post">
                        <h2>Job Description</h2>
                        <div class="blog-content">
                            <p>Amet et qui adipisci aliquam totam. Et ipsam soluta fugit error enim porro reiciendis eius. Praesentium non et veniam dolorum beatae adipisci. Enim odio officiis iusto.

                                Cumque culpa mollitia placeat commodi est repellat. Aliquam temporibus nesciunt quidem consequatur. Consectetur optio cumque adipisci facilis nemo et rem quod. Quasi consequatur placeat illum et nisi culpa deleniti aut.

                                Aut facilis sed dolore consequatur voluptates qui. Fugit nobis tempore reiciendis eligendi. Magnam inventore aut sunt voluptatem facere. Dicta ab aliquam laudantium facere.

                                Ut aperiam vero eos quo hic dolores ipsam cum. Minima quia nostrum earum dolor nulla dolore. Iste eos repellat ipsum repellendus est eos ut. Omnis veniam maiores et qui molestiae voluptatibus necessitatibus.

                                Nesciunt aut qui tenetur occaecati. Distinctio vero id ratione beatae asperiores maiores. Ea quos sed aperiam fuga sunt distinctio. Aut ex et quibusdam. Commodi corporis corrupti veritatis temporibus placeat.

                                Molestias voluptas vel et rerum. Reprehenderit dolorem omnis ipsum tenetur voluptates. Quaerat qui consequuntur omnis aut eos. Harum et facere consequatur facilis voluptas maxime et.

                                Voluptatem omnis odio ut dicta. Harum deleniti sapiente iste quas est quaerat sit quis. Non sunt porro molestiae nemo occaecati tempore voluptas. Consequuntur adipisci omnis aperiam similique autem quasi.

                                Aliquam molestiae tenetur ea corporis nihil autem. Sequi sunt blanditiis aut voluptates quod quod optio praesentium. Nisi numquam delectus delectus fugiat quia recusandae.

                                Atque aut ut aliquam accusamus aut. Est harum non doloremque voluptatibus corrupti.

                                Ipsa ullam ad dolorem assumenda. Optio ab eos natus voluptatibus. Dolorum quam deserunt assumenda ratione.

                                Quaerat ut itaque ad deleniti tempora nesciunt impedit. Maiores eius consequatur adipisci eius. Doloremque blanditiis molestiae assumenda fugit est.

                                Veritatis reprehenderit qui est. Similique aut cumque cumque repellat labore vitae. Provident cum natus minus et tempora quibusdam animi. </p>

                            <br>
                            <h4>Minimum qualifications</h4>
                            <ul>
                                <li>BA/BS degree in a technical field or equivalent practical experience.  </li>
                                <li>2 years of relevant work experience in software development.</li>
                                <li>Programming experience in C, C++ or Java.</li>
                                <li>Experience with AJAX, HTML and CSS.</li>
                            </ul>

                            <br>
                            <h4>Preferred qualifications</h4>
                            <ul>
                                <li>Interest in user interface design.</li>
                                <li>Web application development experience.</li>
                                <li>Experience working on cross-browser platforms.</li>
                                <li>Development experience designing object-oriented JavaScript.</li>
                                <li>Experience with user interface frameworks such as XUL, Flex and XAML.</li>
                                <li>Knowledge of user interface design.</li>
                            </ul>
                        </div>
                </div>
                </article>
                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar-container">

                        <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim">Apply Now <i class="icon-material-outline-arrow-right-alt"></i></a>

                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget">
                            <div class="job-overview">
                                <div class="job-overview-headline">Job Summary</div>
                                <div class="job-overview-inner">
                                    <ul>

                                        <li><i class="fa fa-briefcase"></i>
                                            <span>Job Type</span>
                                            <h5>{{ $job->job_type }}</h5>
                                        </li>
                                        <li>
                                            <i class="fa fa-dollar"></i>
                                            <span>Hourly Rate</span>
                                            <h5>$ &nbsp;{{ $job->hourly_rate }}</h5>
                                        </li>
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            <span>Date Posted</span>
                                            <h5>{{ $job->created_at->diffForHumans() }}</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="button-group">
                                <ul class="social-icons">
                                    <h4 class="title">Share on</h4>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Widget -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END Job detail -->
    </main>
    <!-- END Main container -->
</div>

@endsection
