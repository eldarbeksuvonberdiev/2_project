@extends('layouts.user_main')

@section('title', 'Posts')

@section('content')
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <h1 class="sitename">Posts</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" active>Posts</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Posts</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section id="blog-posts" class="blog-posts section">

            <div class="container">
                <div class="row gy-4">
                    @foreach ($posts as $post)
                        <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                    <img src="{{ $post->image }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="blog-details.html">{{ $post->title }}</a>
                                </h2>
                                <h4 class="title">
                                    <a href="blog-details.html">{{ $post->description }}</a>
                                </h4>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/blog-author.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Maria Doe</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jan 1, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div>
                    @endforeach
                    {{ $posts->links() }}
                </div>
            </div>

        </section>
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="copyright">
                <span>Copyright</span> <strong class="px-1 sitename">Selecao</strong> <span>All Rights
                    Reserved</span>
            </div>
        </div>
    </footer>
@endsection
