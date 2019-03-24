@extends('fnlayouts.main')

@section('content')


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-color: #000;">
        <div class="container">
            <h1>Jobs By: Patrick Muriungi</h1>
        </div>
    </header>
    <!-- END Site header -->
    <!-- Main container -->
    <main>
        <!-- Recent jobs -->
        <section>
            <div class="container">
                <div class="row jobs-details">
                    <!-- Job item -->
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
                                        <a href="{{ url('author', $job->author->slug)}}">{{ $job->author->name }}</a></div>

                                    <div class="action-btn">
                                        <a class="btn btn-xs btn-info" href="{{ url('category', $job->category->slug) }}">{{ $job->category->title }}</a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <!-- END JOB DETAILS -->

                @endforeach

                <!-- END Job item -->

                </div>

                <br><br>

            </div>
        </section>
        <!-- END Recent jobs -->
        <!-- END Categories -->
    </main>
    <!-- END Main container -->

@endsection
