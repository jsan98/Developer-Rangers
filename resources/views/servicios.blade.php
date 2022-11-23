<x-app-layout>



    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Servicios</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/slider.css">
        <!-- Custom styles for this template -->
        <link href="/css/blog.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
            rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;

            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>

    <body>
        <div class="container">
            <header class="blog-header py-3">
            </header>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 link-secondary" href="#">Veterinaria</a>
                    <a class="p-2 link-secondary" href="#">Nutricionista</a>
                    <a class="p-2 link-secondary" href="#">Agronegocios</a>
                    <a class="p-2 link-secondary" href="#">T.de Maquinaria Agricola</a>
                    <a class="p-2 link-secondary" href="#">Topografia</a>
                    <a class="p-2 link-secondary" href="#">G. Empresas Agropecuarias</a>
                    <a class="p-2 link-secondary" href="#">Agrosistemas</a>
                    <a class="p-2 link-secondary" href="#">Zootecnistas</a>
                </nav>
            </div>
        </div>

        <main class="container">
            <div class="contenedor1 rounded text-white">
                <div class="" style="justify-items: center;
   align-items: center;">
                    <h2 class="display-4 fst-italic">Contrata a los mejores expertos para tu Finca</h2>
                    <p class="lead my-3">En Cow_bem de ofrecemos servicios personalizados por parte de los mejores
                        expertos
                        del Pais, contamos con una amplia gama de Profesionales en el Area Agropecuario, dispuestos a
                        dar su
                        tiempo para el beneficio de tus intereses.</p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continua Leyendo...</a></p>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide1 slide_1"> <img src="{{ URL::asset('img/g1.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g2.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g3.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g4.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g5.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g6.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g7.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g8.jpg') }}"
                                alt="" class="imagen1"></div>
                        <div class="swiper-slide swiper-slide1 slide_1"><img src="{{ URL::asset('img/g9.jpg') }}"
                                alt="" class="imagen1"></div>
                    </div>
                    <div class="swiper-button-next swiper-button-next1"></div>
                    <div class="swiper-button-prev swiper-button-prev1"></div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
            </div>

            <div class="swiper slide-container">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/Elton.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Elton Cruz</h2>
                                <p class="description">Tecnico Agropecuario e Ingeniero en Sistemas, con mas de tres
                                    años de experiencia trabajando con el manejo de bovinos.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/mileydi.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mileydi Trujillo</h2>
                                <p class="description">Medico Veterinario con mas de tres años de experiencia, experta
                                    en el cuidado de bovinos, contactate con ella y obten la mejor antencion.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/yo.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Bielka Feliciano</h2>
                                <p class="description">Ingeniera en Sistemas y Licenciada en Derecho, con mas de tres
                                    años de experiencia, solucinando problemas.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/Elton.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Elton Cruz</h2>
                                <p class="description">Tecnico Agropecuario e Ingeniero en Sistemas, con mas de tres
                                    años de experiencia trabajando con el manejo de bovinos.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/mileydi.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mileydi Trujillo</h2>
                                <p class="description">Medico Veterinario con mas de tres años de experiencia, experta
                                    en el cuidado de bovinos, contactate con ella y obten la mejor antencion.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/yo.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Bielka Feliciano</h2>
                                <p class="description">Ingeniera en Sistemas y Licenciada en Derecho, con mas de tres
                                    años de experiencia, solucinando problemas.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/Elton.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Elton Cruz</h2>
                                <p class="description">Tecnico Agropecuario e Ingeniero en Sistemas, con mas de tres
                                    años de experiencia trabajando con el manejo de bovinos.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/mileydi.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mileydi Trujillo</h2>
                                <p class="description">Medico Veterinario con mas de tres años de experiencia, experta
                                    en el cuidado de bovinos, contactate con ella y obten la mejor antencion.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ URL::asset('img/yo.jpg') }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Bielka Feliciano</h2>
                                <p class="description">Ingeniera en Sistemas y Licenciada en Derecho, con mas de tres
                                    años de experiencia, solucinando problemas.</p>

                                <button class="button">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-button-next2 swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-button-prev2 swiper-navBtn"></div>
                <div class="swiper-pagination swiper-pagination2"></div>
            </div>
            <div class="row mb-2 pt-4">
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
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        From the Firehose
                    </h3>

                    <article class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                        <p>This blog post shows a few different types of content that’s supported and styled with
                            Bootstrap.
                            Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                        <hr>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <h2>Blockquotes</h2>
                        <p>This is an example blockquote in action:</p>
                        <blockquote class="blockquote">
                            <p>Quoted text goes here.</p>
                        </blockquote>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <h3>Example lists</h3>
                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout. This is an example unordered list:</p>
                        <ul>
                            <li>First list item</li>
                            <li>Second list item with a longer description</li>
                            <li>Third list item to close it out</li>
                        </ul>
                        <p>And this is an ordered list:</p>
                        <ol>
                            <li>First list item</li>
                            <li>Second list item with a longer description</li>
                            <li>Third list item to close it out</li>
                        </ol>
                        <p>And this is a definiton list:</p>
                        <dl>
                            <dt>HyperText Markup Language (HTML)</dt>
                            <dd>The language used to describe and define the content of a Web page</dd>
                            <dt>Cascading Style Sheets (CSS)</dt>
                            <dd>Used to describe the appearance of Web content</dd>
                            <dt>JavaScript (JS)</dt>
                            <dd>The programming language used to build advanced Web sites and applications</dd>
                        </dl>
                        <h2>Inline HTML elements</h2>
                        <p>HTML defines a long list of available inline tags, a complete list of which can be found on
                            the
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer
                                Network</a>.
                        </p>
                        <ul>
                            <li><strong>To bold text</strong>, use <code
                                    class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                            <li><em>To italicize text</em>, use <code
                                    class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                            <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code
                                    class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional
                                <code class="language-plaintext highlighter-rouge">title</code> attribute for the full
                                phrase.
                            </li>
                            <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                                    class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                            <li><del>Deleted</del> text should use <code
                                    class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and
                                <ins>inserted</ins>
                                text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.
                            </li>
                            <li>Superscript <sup>text</sup> uses <code
                                    class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
                                <sub>text</sub> uses <code
                                    class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
                            </li>
                        </ul>
                        <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                        <h2>Heading</h2>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <h3>Sub-heading</h3>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <pre><code>Example code block</code></pre>
                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout.</p>
                    </article>

                    <article class="blog-post">
                        <h2 class="blog-post-title">Another blog post</h2>
                        <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <blockquote>
                            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of
                                it.
                            </p>
                        </blockquote>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <h3>Example table</h3>
                        <p>And don't forget about tables in these posts:</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Upvotes</th>
                                    <th>Downvotes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alice</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Bob</td>
                                    <td>4</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Charlie</td>
                                    <td>7</td>
                                    <td>9</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Totals</td>
                                    <td>21</td>
                                    <td>23</td>
                                </tr>
                            </tfoot>
                        </table>

                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout.</p>
                    </article>

                    <article class="blog-post">
                        <h2 class="blog-post-title">New feature</h2>
                        <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available
                            space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                            often to keep the demonstration flowing, so be on the lookout for this exact same string of
                            text.</p>
                        <ul>
                            <li>First list item</li>
                            <li>Second list item with a longer description</li>
                            <li>Third list item to close it out</li>
                        </ul>
                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout.</p>
                    </article>

                    <nav class="blog-pagination" aria-label="Pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1"
                            aria-disabled="true">Newer</a>
                    </nav>

                </div>

                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">About</h4>
                            <p class="mb-0">Customize this section to tell your visitors a little bit about your
                                publication, writers, content, or something else entirely. Totally up to you.</p>
                        </div>

                        <div class="p-4">
                            <h4 class="fst-italic">Archives</h4>
                            <ol class="list-unstyled mb-0">
                                <li><a href="#">March 2021</a></li>
                                <li><a href="#">February 2021</a></li>
                                <li><a href="#">January 2021</a></li>
                                <li><a href="#">December 2020</a></li>
                                <li><a href="#">November 2020</a></li>
                                <li><a href="#">October 2020</a></li>
                                <li><a href="#">September 2020</a></li>
                                <li><a href="#">August 2020</a></li>
                                <li><a href="#">July 2020</a></li>
                                <li><a href="#">June 2020</a></li>
                                <li><a href="#">May 2020</a></li>
                                <li><a href="#">April 2020</a></li>
                            </ol>
                        </div>

                        <div class="p-4">
                            <h4 class="fst-italic">Elsewhere</h4>
                            <ol class="list-unstyled">
                                <li><a href="#">GitHub</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                    href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
            integristy="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>


        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var mySwiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination1",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next1",
                    prevEl: ".swiper-button-prev1",
                },
            });
        </script>
        <script>
            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide: 'true',
                fade: 'true',
                grabCursor: 'true',
                pagination: {
                    el: ".swiper-pagination2",
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next2",
                    prevEl: ".swiper-button-prev2",
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    },
                },
            });
        </script>


    </body>


    </html>
</x-app-layout>
