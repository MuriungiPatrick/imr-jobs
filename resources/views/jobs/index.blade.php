@extends('fnlayouts.main')

@section('content')



<!-- Site header -->
<header class="site-header size-lg text-center" style="background-color: #000;">
    <div class="container">
        <div class="col-xs-12">
            <h2>There are <mark>3,500 +</mark> job vacancies right now!</h2>
            <h5 class="font-alt">Search Jobs in one minute</h5>
            <br><br><br>
            <form class="job-search" action="term" value=""  role="search">
                <input type="hidden" name="_token" value="MTFYIbTK9Njr8Qb5LinYK4H8SaOjenQxhIqGgt2j">
                <div class="input-keyword">
                    <input type="text" class="form-control" placeholder="Job title, skills, or company" name="term">
                </div>
                <br><br>
                <div class="btn-search">
                    <button class="btn btn-lg btn-primary" type="submit">Click to Search jobs</button>
                </div>

            </form>
        </div>

    </div>
</header>
<!-- END Site header -->
<!-- Main container -->
<main>
    <!-- Recent jobs -->
    <section>
        <div class="container">
            <header class="section-header">
                <h2>Recent jobs</h2>
            </header>
            <div class="row jobs-details">

                @foreach($jobs as $job)

                <!-- START JOB DETAILS -->
                <div class="col-xs-12">
                    <div class="jobs-block">
                        <header>
                            <a href="author-jobs-details.html"><img class="resume-avatar" src="assets/img/avatar-1.jpg" alt=""></a>
                            <div class="hgroup">
                                <h4>
                                    <a href="jobs-details.html">{{ $job->job_title }}</a>
                                </h4>
                                <div class="spacer-front"></div>
                            </div>
                            <div class="jobs-meta">
                                <span class="label label-success">{{ $job->job_type }}</span>
                                <span class="label label-warning"><i class="fa fa-dollar"></i>{{ $job->hourly_rate }}</span>
                            </div>
                        </header>

                        <footer>
                            <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i>
                                </strong>{{ $job->created_at->diffForHumans() }} &nbsp; By:&nbsp;
                                <a href="author-jobs-details.html">James Mwirigi</a></div>

                            <div class="action-btn">
                                <a class="btn btn-xs btn-info" href="{{ url('category', $job->category->slug) }}">{{ $job->category->title }}</a>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- END JOB DETAILS -->

                @endforeach

            </div>

            <br><br>
            <p class="text-center">
                {{ $jobs->links() }}
            </p>
        </div>
    </section>
    <!-- END Recent jobs -->

@include('fnlayouts.categories')
    
</main>
<!-- END Main container -->

@endsection



