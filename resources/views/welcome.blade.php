@extends('layouts.app')

@section('content')
    <div class="container">
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.72.0">
            <title>Blog Template · Bootstrap</title>
        </head>

        <body>

            <div class="container">
                <div class="nav-scroller py-1 mb-2">
                    <nav class="nav d-flex justify-content-between">
                        <a class="p-2 link-secondary" href="#">World</a>
                        <a class="p-2 link-secondary" href="#">U.S.</a>
                        <a class="p-2 link-secondary" href="#">Technology</a>
                        <a class="p-2 link-secondary" href="#">Design</a>
                        <a class="p-2 link-secondary" href="#">Culture</a>
                        <a class="p-2 link-secondary" href="#">Business</a>
                        <a class="p-2 link-secondary" href="#">Politics</a>
                        <a class="p-2 link-secondary" href="#">Opinion</a>
                        <a class="p-2 link-secondary" href="#">Science</a>
                        <a class="p-2 link-secondary" href="#">Health</a>
                        <a class="p-2 link-secondary" href="#">Style</a>
                        <a class="p-2 link-secondary" href="#">Travel</a>
                    </nav>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">World</strong>
                                <h3 class="mb-0">Featured post</h3>
                                <div class="mb-1 text-muted">Nov 12</div>
                                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                    lead-in to additional content.</p>
                                <a href="#" class="stretched-link">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <svg class="bd-placeholder-img" width="200" height="250"
                                    xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="blog-footer">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                        href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>
        </body>

        </html>
    </div>
@endsection
