@extends('layout')
<meta charset="utf-8">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/components.css" rel="stylesheet" type="text/css">
<link href="css/homes.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/introduction.css">

<link rel="stylesheet" href="https://unpkg.com/flickity@2.3.0/dist/flickity.css">

@section('content')

    <script>
        if (window.innerWidth > 600) {
            document.querySelector('.swiper-slide').style.width = 'calc(50%)';
        }
    </script>

    <script src="js/homes.js" type="text/javascript"></script>


    <div class="container">
        <div class="intro">
            <div class="intro-left">
                <div>
                    <img width="350px"src="/img/bemvindo.png" style="margin-bottom:10px;"/>
                    <br>
                    <h2 class="intro-subtitle">Divirta-se jogando e ganhando dinheiro online, Retiradas rápidas e
                        aprovadas 24/7. A Sua Nova Plataforma de Cassino online 100% Fairplay.</h2>
                    <div class="intro-login">

                        @if(Auth::user())
                            <a id="loginRegister">Depositar</a>
                        @else
                            <button type="button" id="loginRegister">Entrar ou Cadastrar
                            </button>
                        @endif

                        <div class="content-intro-login">
                            <span><small>Registre-se agora mesmo e começe a ganhar muito dinheiro online!<b></b></small></span>
                            <img width="44" height="44" src="/img/logofogo.png"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-right">
            </div>
        </div>

        <div class="index-features">
            <div class="col-features">
                <a href="/crash" class="free-to-play"
                   style="background-image: url('/img/bg-1_2x.dc8a421.png');">
                    <span>Jogue Agora o Crash e Lucre até 300x por partida!</span>
                </a>
                <a href="/affiliate"
                   style="background-image: url('/img/bg-2_1x.c124441.png');">
                    <span>Lucre com Indicações</span>
                </a>
                <a href="javascript:;"
                   style="background-image: url('/img/bg-3_1x.6150cf5.png');">
                    <span>Saques Imediatos</span>
                </a>
            </div>


            <div class="col-features">
                <a href="/wheel" class="#">
                    <span>Jogue na Roleta e Multiplique Sua Banca em até 50x</span>
                    <div class="parent-spin-preview">
                        <img width="101" height="77" src="/img/MOEDA_BETFYRE_02_0001.png"
                             class="coin coin-1">
                        <img width="79" height="76"
                             src="/img/MOEDA_BETFYRE_03_0001.png"
                             class="coin coin-2">
                        <img width="119" height="119" src="/img/MOEDA_BETFYRE_04_0001.png"
                             class="coin coin-3">
                        <img width="76" height="77"
                             src="/img/MOEDA_BETFYRE_05_0001.png"
                             alt="" class="coin coin-4">
                        <img width="152" height="162" src="/img/MOEDA_BETFYRE_05_0001.png"
                             class="coin coin-5">
                        <img width="124" height="126" src="/img/MOEDA_BETFYRE_03_0001.png"
                             class="coin coin-6">
                        <div class="spin-preview layer-0">
                            <img width="405" height="405"
                                 src="/templates/rushb3t/img/betnew/spin-preview-layer-0@1x.dd1753f.webp">
                        </div>
                        <div class="spin-preview layer-1">
                            <img width="276" height="276"
                                 src="/templates/rushb3t/img/betnew/spin-preview-layer-1@1x.b9d7398.webp">
                        </div>
                        <div class="spin-preview layer-2">
                            <img width="233" height="233"
                                 src="/templates/rushb3t/img/betnew/spin-preview-layer-2@1x.e4cd111.webp">
                        </div>
                        <div class="spin-preview layer-3">
                            <img width="233" height="233"
                                 src="/templates/rushb3t/img/betnew/spin-preview-layer-3@1x.3d0893e.webp">
                        </div>
                        <div class="spin-preview layer-4">
                            <img width="194" height="194"
                                 src="/img/roleta.png">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-features">
                <a href="javascript:;"
                   style="background-image: url(/img/bg-4_1x.56ae9bd.png);">
                    <span>Depósitos Imediatos</span>
                </a>
                <a href="/mines" class="free-to-play"
                   style="background-image: url(/img/bg-5_1x.0006b1c.png);">
                    <span>Lucre Muito no Mines</span>
                </a>
                <a href="javascript:;"
                   style="background-image: url(/img/bg-6_1x.8938de0.png);">
                    <span>Sistema 100% FairPlay</span>
                </a>
            </div>
        </div>

        <div class="index-features2">
            <div class="one-category">
                <div class="head-one-category">
                    <a href="/slots/" class="h-one-category">
                        <svg width="24" height="24" focusable="false" aria-hidden="true" class="">
                            <use xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-inhouse"
                                 class="svg-use"></use>
                        </svg>
                        JOGOS DA CASA
                    </a>
                </div>

                <div class="swiper game-swiper">
                    <div class="swiper-wrapper" style="height: 1rm;">

                        <div class="swiper-slide">
                            <div class="game-slide">
                                <div class="img-game-slide"
                                     style="background-image: url(/img/jogos_display04.png);">
                                    <div class="meta-game-slide hot">hot</div>
                                    <div class="meta-game-slide new">new</div>
                                </div>
                                <div class="hover-game-slide">
                                    <div class="h-game-slide">Crash</div>
                                    <a href="/crash" class="play-game-slide">
                                        <svg focusable="false" aria-hidden="true" class="">
                                            <use
                                                xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                                class="svg-use"></use>
                                        </svg>
                                    </a>
                                    <div class="provider-game-slide">
                                        <a href="#">
                                            Jogo da Casa
                                        </a>
                                    </div>
                                    <div class="provider-game-slide">
                                        Jogue agora!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="game-slide">
                                <div class="img-game-slide"
                                     style="background-image: url(/img/jogos_display06.png);">
                                    <div class="meta-game-slide hot">hot</div>
                                    <div class="meta-game-slide new">new</div>
                                </div>
                                <div class="hover-game-slide">
                                    <div class="h-game-slide">Roleta</div>
                                    <a href="/wheel" class="play-game-slide">
                                        <svg focusable="false" aria-hidden="true" class="">
                                            <use
                                                xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                                class="svg-use"></use>
                                        </svg>
                                    </a>
                                    <div class="provider-game-slide">
                                        <a href="#">
                                            Jogo da Casa
                                        </a>
                                    </div>
                                    <div class="provider-game-slide">
                                        Jogue agora!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="game-slide">
                                <div class="img-game-slide"
                                     style="background-image: url(/img/jogos_display05.png);">
                                    <div class="meta-game-slide hot">hot</div>
                                    <div class="meta-game-slide new">new</div>
                                </div>
                                <div class="hover-game-slide">
                                    <div class="h-game-slide">Mines</div>
                                    <a href="/mines" class="play-game-slide">
                                        <svg focusable="false" aria-hidden="true" class="">
                                            <use
                                                xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                                class="svg-use"></use>
                                        </svg>
                                    </a>
                                    <div class="provider-game-slide">
                                        <a href="#">
                                            Jogo da Casa
                                        </a>
                                    </div>
                                    <div class="provider-game-slide">
                                        Jogue agora!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="game-slide">
                                <div class="img-game-slide"
                                     style="background-image: url(/img/jogos_display02.png);">
                                    <div class="meta-game-slide hot">hot</div>
                                    <div class="meta-game-slide new">new</div>
                                </div>
                                <div class="hover-game-slide">
                                    <div class="h-game-slide">Tower</div>
                                    <a href="/tower" class="play-game-slide">
                                        <svg focusable="false" aria-hidden="true" class="">
                                            <use
                                                xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                                class="svg-use"></use>
                                        </svg>
                                    </a>
                                    <div class="provider-game-slide">
                                        <a href="#">
                                            Jogo da Casa
                                        </a>
                                    </div>
                                    <div class="provider-game-slide">
                                        Jogue agora!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="game-slide">
                                <div class="img-game-slide"
                                     style="background-image: url(/img/jogos_display01.png);">
                                    <div class="meta-game-slide hot">hot</div>
                                    <div class="meta-game-slide new">new</div>
                                </div>
                                <div class="hover-game-slide">
                                    <div class="h-game-slide">Batalha</div>
                                    <a href="/coinflip" class="play-game-slide">
                                        <svg focusable="false" aria-hidden="true" class="">
                                            <use
                                                xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                                class="svg-use"></use>
                                        </svg>
                                    </a>
                                    <div class="provider-game-slide">
                                        <a href="#">
                                            Jogo da Casa
                                        </a>
                                    </div>
                                    <div class="provider-game-slide">
                                        Jogue agora!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="game-slide">
                                <div class="img-game-slide"
                                     style="background-image: url(/img/jogos_display03.png);">
                                    <div class="meta-game-slide hot">hot</div>
                                    <div class="meta-game-slide new">new</div>
                                </div>
                                <div class="hover-game-slide">
                                    <div class="h-game-slide">Dice</div>
                                    <a href="/dice" class="play-game-slide">
                                        <svg focusable="false" aria-hidden="true" class="">
                                            <use
                                                xlink:href="/templates/rushb3t/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                                class="svg-use"></use>
                                        </svg>
                                    </a>
                                    <div class="provider-game-slide">
                                        <a href="#">
                                            Jogo da Casa
                                        </a>
                                    </div>
                                    <div class="provider-game-slide">
                                        Jogue agora!
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class=index-features>  
            <div data-delay="0" data-animation="slide" class="slider-slots-games w-slider" data-autoplay="true"
                 data-easing="linear" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                 data-nav-spacing="3" data-duration="5000" data-infinite="true">
                <div class="mask-slider-slots w-slider-mask" style="filter: grayscale(100%);">
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/fdf003ed00a77f12ab7e2a50ec2b4dcf786ddc862x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/33182334cd83b0e10e19629f4fa4ac71132f99432x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/9bbe1dec074937e5f32e807af3aae69048429da82x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/9aaf2b39cc39450a9c1fbcf9a34a14e22x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/de9512d69ce79a4d0f2057cff1e9a120d9d228c62x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/ee7a358afa08459780a49d57fa74a7972x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/a755941f59081d45aadaf6845f5b2c981433f6e22x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/30e25e9c13cc44e9acf124b45bbff59f2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/62f8cca1448246d39dee4eab0bc7a9dc2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/3a3a634b94aeb9decd9434a42bad2843c7c49fb22x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/deba1669e73d429402aa031918f9500e3aa92d7c2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/487824fd0de785408f4b9536a5e51cb937e705032x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/38a72c2ae9e44589a1b91401998bcfa42x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/bad98b300e37dc429548aeb7a3179c2efccbb1102x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/cbfa63a19da17b6192bcc5a8de4f0fd3db7a886f2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/650710e90ac77e0fd30676d05f8685bd9f9e41bd2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/6fe1d6a618ae8507b87840b431938154faa671f52x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/6f093db8745c488976981f7a520c586e89f1438e2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/dd7e2f3c937e43e189c3261c62fa82a46ab987ba2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/7c404e44d4d631aed5002302856c1faab3c081462x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/93adad6f64824ea3a2fee45cdd0873792x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                    <div class="slide-slots-games w-slide" data-ix="hover-slot-coming"><img
                            src="images/6e6c237fefec4a20a337f96f8ef4e7bc2x.jpeg" loading="eager" alt=""
                            class="slot-game">
                        <div class="coming-slot">
                            <div>Em Breve</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
