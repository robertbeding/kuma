@extends('layouts.main')
@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
            </ol>
            <h2>{{ $title }}</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">

        <div class="container" data-aos="fade-up">

            <div class="row">

                {{-- <div class="col-lg-8 entries">
                    @if ($posts->count())
                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time datetime="2020-01-01">{{ $posts[0]->created_at->diffForHumans()}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>{{ $posts[0]->excerpt }}</p>

                                <a href="/posts/{{ $posts[0]->slug }}">Read More...</a>

                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-tags"></i>
                                <ul class="cats">
                                    <li><a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </article><!-- End blog entry -->
                    @else
                    <p class="text-center fs-4"> No Post Found</p>
                    @endif
                </div> --}}


                <div class="col-lg-8 entries">
                    @foreach ($posts as $post)
                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ asset('img/blog/blog-3.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time datetime="time">{{ $posts[0]->created_at->diffForHumans()}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}">Read More...</a>
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-tags"></i>
                                <ul class="cats">
                                    <li><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </article><!-- End blog entry -->
                    @endforeach
                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="/blog">
                                <input type="text" placeholder="Search" name="search" value="{{ request('search') }}">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $category)
                                    <li ><a class="{{ Request::is('categories/'.$category->slug) == $category->slug ?'active':'' }}"
                                            href="/categories/{{ $category->slug }}">{{ $category->name }}<span>({{ $category->posts_count }})</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End sidebar categories-->


                        <h3 class="sidebar-title">Recent Posts</h3>

                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="img/blog/blog-recent-1.jpg" alt="">
                                <h4><a href="">judul judul</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

        </div>
    </section><!-- End Blog Single Section -->
@endsection
