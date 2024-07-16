<x-budget-layout>
    @section('content-budget')
        <!-- Home -->
        <section class="home image" id="home">
            <div>
                <div class="position-relative">
                    <h1>
                        <span>
                            <span class="animated-layer">Olá
                                <span>,</span>
                            </span>
                        </span>
                        <span class="position-relative">
                            <span class="animated-layer">Bem</span>
                            <span class="intro animated-layer">Visualize ao lado o orçamento que preparamos para você!</span>
                        </span>
                        <span>
                            <span class="animated-layer">vindo</span>
                        </span>
                    </h1>
                </div>
            </div>
            <span class="animated-layer animated-btn cta" id="cta">
                <span></span>
            </span>
        </section>

        <!-- Sobre -->
        <section class="about main-section flex-column-mobile" id="about">
            <div class="info flex-column-mobile">
                <div class="img-container animated-layer image-animation my-photo-container fadeInUp wow" data-wow-offset="200" id="my-photo">
                    <div>
                        <div>
                            <img class="my-photo" src="{{asset('assets/budget2/assets/about.jpg')}}" alt=""/>
                        </div>
                    </div>
                </div>
                <div>
                    <h2>
                        <span>
                            <span class="animated-layer fade-in-up-animation fadeInUp wow">Steven</span>
                        </span>
                        <span>
                            <span class="animated-layer fade-in-up-animation fadeInUp wow">Walker</span>
                        </span>
                    </h2>
                    <div class="infos">
                        <ul>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Age :</span><span>27 Years</span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Nationality :</span><span>German</span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Freelance :</span><span>Available</span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Langages :</span><span>English</span>
                                    </span>
                                </span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Address :</span><span>London</span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Phone :</span><span>21 184 010</span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Email :</span><span>contact@steven.net</span>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <span class="animated-layer fade-in-up-animation fadeInUp wow"><span>Skype :</span><span>steven.walker</span>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="skills flex-column-mobile">
                <div class="custom-title">
                    <h3>
                        <span>
                            <span class="animated-layer fade-in-left-animation fadeInUp wow">My Skills</span>
                        </span>
                    </h3>
                </div>
                <div class="skills-content">
                    <div>
                        <div class="animated-layer fade-in-down-animation fadeInLeft wow"><span>
                                <i class="devicon-wordpress-plain"></i></span><h4>WordPress</h4>
                        </div>
                        <div class="animated-layer fade-in-up-animation fadeInRight wow"><span>
                                <i class="devicon-jquery-plain"></i></span><h4>jQuery</h4>
                        </div>
                    </div>
                    <div>
                        <div class="animated-layer fade-in-down-animation fadeInLeft wow"><span>
                                <i class="devicon-angularjs-plain"></i></span><h4>Angular JS</h4>
                        </div>
                        <div class="animated-layer fade-in-up-animation fadeInRight wow"><span>
                                <i class="devicon-drupal-plain"></i></span><h4>Drupal</h4>
                        </div>
                    </div>
                    <div>
                        <div class="animated-layer fade-in-down-animation fadeInLeft wow"><span>
                                <i class="devicon-react-plain"></i></span><h4>React JS</h4>
                        </div>
                        <div class="animated-layer fade-in-up-animation fadeInRight wow"><span>
                                <i class="devicon-docker-plain"></i></span><h4>Docker</h4>
                        </div>
                    </div>
                    <div>
                        <div class="animated-layer fade-in-down-animation fadeInLeft wow"><span>
                                <i class="devicon-nodejs-plain"></i></span><h4>Node JS</h4>
                        </div>
                        <div class="animated-layer fade-in-up-animation fadeInRight wow"><span>
                                <i class="devicon-sass-plain"></i></span><h4>Sass</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resume flex-column-mobile">
                <div class="custom-title fadeInUp wow"><h3><span><span
                                class="animated-layer fade-in-left-animation">Orçamento</span></span></h3></div>
                <div class="timeline">
                    <ol class="animated-layer fade-in-animation">
                        @foreach($budget as $budget)
                            <li>
                                <div class="animated-layer fade-in-down-animation fadeInUp wow">
                                    <div class="education"><h4>Bachelor Degree</h4>
                                        <p><i class="fa-regular fa-clock"></i><span>1999</span></p>
                                        <p>
                                            <i class="fa-solid fa-building-columns"></i><span>Berlin High School</span>
                                        </p></div>
                                </div>
                            </li>
                        @endforeach
                        <li></li>
                    </ol>
                </div>
            </div>
            <img alt="" class="separator hide-mobile" src="./../../../assets/budget2/assets/separator.png"/>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1" src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Anos Experiência -->
        <section class="facts" id="facts">
            <div class="flex-column-mobile">
                <div class="animated-layer fade-in-right-animation fadeInLeft wow" data-wow-offset="200">
                    <div>
                        <div><h6>R$</h6><div style="
    display: flex;
    font-size: 26px;
    font-weight: 600;
"> <h3>1.300</h3><span>, 00</span></div>
                            <p>Valor total</p></div>
                    </div>
                </div>
                <div class="animated-layer fade-in-right-animation fadeInRight wow" data-wow-offset="200">
                    <div>
                        <div><h3>67</h3>
                            <p>completed<span>projects</span></p></div>
                    </div>
                </div>
                <div class="animated-layer fade-in-right-animation fadeInLeft wow" data-wow-offset="200">
                    <div>
                        <div><h3>56</h3>
                            <p>Happy<span>customers</span></p></div>
                    </div>
                </div>
                <div class="animated-layer fade-in-right-animation fadeInRight wow" data-wow-offset="200">
                    <div>
                        <div><h3>13</h3>
                            <p>awards<span>won</span></p></div>
                    </div>
                </div>
                <div class="animated-layer fade-in-right-animation fadeInLeft wow" data-wow-offset="200">
                    <div>
                        <div><h3>32</h3>
                            <p>learned<span>frameworks</span></p></div>
                    </div>
                </div>
            </div>
            <img alt="" class="z-1 hide-mobile opposite-separator" src="../../../assets/budget2/assets/separator-opposite.png"/>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1"  src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Portfólio -->
        <section class="portfolio main-section flex-column-mobile" id="portfolio">
            <div class="custom-title">
                <h3><span><span class="animated-layer fade-in-left-animation fadeInUp wow">Projetos</span></span></h3>
            </div>
            <div class="swiper swiper-portfolio animated-layer fade-in-right-animation fadeInUp wow" data-wow-offset="200">
                <div class="swiper-wrapper">

                    @foreach($portfolio as $project)
                        <div class="swiper-slide single-item">
                            <div class="main-content">
                                <img class="img-fluid" src="data:image/png;base64,{{ $project->image }}" alt="Imagem do projeto">
                            </div>
                            <div class="details">
                                <h4>{{$project->title}}</h4>
                                <div>
                                    <ul>
                                        <li><span><i class="fa-regular fa-file-lines"></i> Projeto : </span><span>{{$project->name}}</span></li>
                                        <li><span><i class="fa-regular fa-user"></i> Cliente : </span><span>{{$project->customer}}</span></li>
                                        <li><span><i class="fa-regular fa-hourglass"></i> Desenvolvido em : </span><span>{{"$project->duration dias"}}</span></li>
                                        <li><span><i class="fa-solid fa-code-branch"></i> Ferramentas : </span><span>{{$project->framework}}</span></li>
                                    </ul>
                                </div>
                                <a href="{{$project->access_link}}" target="_blank" class="custom-btn"><span>Veja online <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="nav-item next-item animated-btn">
                    <span>
                        <div class="swiper-button-next"></div>
                    </span>
                </div>
                <div class="nav-item prev-item animated-btn">
                    <span>
                        <div class="swiper-button-prev"></div>
                    </span>
                </div>
            </div>
            <img alt="" class="separator hide-mobile" src="{{asset('assets/budget2/assets/separator.png')}}"/>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1"  src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Testemunhas -->
        <section class="testimonials">
            <div class="testimonials-container flex-column-mobile">
                <div class="quote-container animated-layer fade-in-right-animation fadeInUp wow">
                    <div><p><span class="quote">&quot; I worked with Steven, he was very helpful and fast to respond to my inquiry to help with Wordpress website issues and all technical problems. &quot;</span><span
                                class="person">Jasmin Aniston</span><span class="job">Director - Adobe</span></p>
                        <img src="../../../assets/budget2/assets/testimonials/testimonial-1.jpg" alt=""/></div>
                </div>
                <div class="quote-container animated-layer fade-in-right-animation fadeInUp wow">
                    <div><p><span class="quote">&quot; Steven is a great help managing a very out of date website. Everything we ask him to do is done quickly and efficiently, we would be lost without him. &quot;</span><span
                                class="person">Mark Eliott</span><span class="job">Manager - Envato</span></p><img
                            src="../../../assets/budget2/assets/testimonials/testimonial-2.jpg" alt=""/></div>
                </div>
            </div>
            <img alt="" class="z-1 hide-mobile opposite-separator" src="../../../assets/budget2/assets/separator-opposite.png"/>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1"  src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Contato -->
        <section class="contact main-section flex-column-mobile" id="contact">
            <div class="custom-title">
                <h3>
                    <span>
                        <span class="animated-layer fade-in-left-animation fadeInUp wow">Fale conosco</span>
                    </span>
                </h3>
            </div>
            <div class="boxes">
                <div>
                    <div class="animated-layer fade-in-down-animation fadeInUp wow">
                        <i class="fa fa-phone"></i>
                        <p><span class="small-text">Whatsapp</span>11 95723-4497</p>
                    </div>
                    <div class="animated-layer fade-in-up-animation fadeInUp wow">
                        <i class="fa fa-location-dot"></i>
                        <p><span class="small-text">Website</span>https://sistapp.com.br</p>
                    </div>
                </div>
                <div>
                    <div class="animated-layer fade-in-down-animation fadeInUp wow">
                        <i class="fa fa-envelope"></i>
                        <p><span class="small-text">E-mail</span>contato@sistapp.com.br</p>
                    </div>
                    <div class="animated-layer fade-in-up-animation fadeInUp wow"><i
                            class="fa fa-share-nodes"></i><span class="small-text">Siga nós</span>
                        <ul class="social">
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <img alt="" class="separator hide-mobile" src="../../../assets/budget2/assets/separator.png"/>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1"  src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Clientes -->
        <section class="clients">
            <div class="clients-container animated-layer fade-in-right-animation fadeInUp wow">
                <h3>My Clients</h3>
                <div class="swiper swiper-clients fadeInUp wow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div><img src="../../../assets/budget2/assets/logos/themeforest-dark-background.png"
                                      alt="client"/></div>
                            <div><img src="../../../assets/budget2/assets/logos/photodune-dark-background.png"
                                      alt="client"/></div>
                        </div>
                        <div class="swiper-slide">
                            <div><img src="../../../assets/budget2/assets/logos/graphicriver-dark-background.png"
                                      alt="client"/></div>
                            <div><img src="../../../assets/budget2/assets/logos/codecanyon-dark-background.png"
                                      alt="client"/></div>
                        </div>
                        <div class="swiper-slide">
                            <div><img src="../../../assets/budget2/assets/logos/audiojungle-dark-background.png"
                                      alt="client"/></div>
                            <div><img src="../../../assets/budget2/assets/logos/activeden-dark-background.png"
                                      alt="client"/></div>
                        </div>
                        <div class="swiper-slide">
                            <div><img src="../../../assets/budget2/assets/logos/3docean-dark-background.png"
                                      alt="client"/></div>
                            <div><img src="../../../assets/budget2/assets/logos/themeforest-dark-background.png"
                                      alt="client"/></div>
                        </div>
                        <div class="swiper-slide">
                            <div><img src="../../../assets/budget2/assets/logos/activeden-dark-background.png"
                                      alt="client"/></div>
                            <div><img src="../../../assets/budget2/assets/logos/audiojungle-dark-background.png"
                                      alt="client"/></div>
                        </div>
                        <div class="swiper-slide">
                            <div><img src="../../../assets/budget2/assets/logos/graphicriver-dark-background.png"
                                      alt="client"/></div>
                            <div><img src="../../../assets/budget2/assets/logos/codecanyon-dark-background.png"
                                      alt="client"/></div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <img alt="" class="z-1 hide-mobile opposite-separator" src="../../../assets/budget2/assets/separator-opposite.png"/>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1" src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Posts -->
        <section class="blog main-section flex-column-mobile" id="blog">
            <div class="custom-title">
                <h3><span><span class="animated-layer fade-in-left-animation fadeInUp wow">Latest Posts</span></span></h3>
            </div>
            <div class="latestposts flex-column-mobile">
                <div class="animated-layer fade-in-right-animation fadeInUp wow"><a href="/blog-post"><span
                            class="img-holder"><img src="../../../assets/budget2/assets/blog/blog-post-1.jpg"
                                                    alt=""/></span>
                        <div class="content"><span class="category">design</span><span class="title">How To Publish Content That Ranks On Google</span>
                            <p>ncididunt ut labore et dolore magna aliqua. Ut enim aminim veniam...</p>
                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center"><i class="fa-regular fa-calendar"></i><span>9 Apr 2022</span>
                                </div>
                                <div class="d-flex align-items-center"><i class="fa-regular fa-comments"></i><span>17 comments</span>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="animated-layer fade-in-right-animation fadeInUp wow"><a href="/blog-post"><span
                            class="img-holder"><img src="../../../assets/budget2/assets/blog/blog-post-2.jpg"
                                                    alt=""/></span>
                        <div class="content"><span class="category">development</span><span class="title">How Efficient Site Structure Can Boost SEO</span>
                            <p>ncididunt ut labore et dolore magna aliqua. Ut enim aminim veniam...</p>
                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center"><i class="fa-regular fa-calendar"></i><span>21 Feb 2022</span>
                                </div>
                                <div class="d-flex align-items-center"><i class="fa-regular fa-comments"></i><span>34 comments</span>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="animated-layer fade-in-right-animation fadeInUp wow"><a href="/blog-post"><span
                            class="img-holder"><img src="../../../assets/budget2/assets/blog/blog-post-3.jpg"
                                                    alt=""/></span>
                        <div class="content"><span class="category">essentials</span><span class="title">Change Management for Customer Success</span>
                            <p>ncididunt ut labore et dolore magna aliqua. Ut enim aminim veniam...</p>
                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center"><i class="fa-regular fa-calendar"></i><span>1 Jan 2022</span>
                                </div>
                                <div class="d-flex align-items-center"><i class="fa-regular fa-comments"></i><span>10 comments</span>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </section>

        <!-- Divisor -->
        <img alt="" class="separator-mobile-up hide-desktop z-1" src="{{asset('assets/budget2/assets/separator-mobile-up.png')}}"/>

        <!-- Footer -->
        <section class="copyright">
            <img alt="" class="z-1 hide-mobile" src="{{asset('assets/budget2/assets/separator-copyright.png')}}"/>
            <div>
                <span>Todos os direitos © 2024</span>
                <span>Desenvolvido por <a target="_blank" href="https://sistapp.com.br">Sistapp Soluções e Sistemas</a></span>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                </ul>
            </div>
        </section>
    @endsection
</x-budget-layout>



