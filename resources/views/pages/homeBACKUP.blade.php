@extends('layout')

@section('content')
<link rel="stylesheet" href="/css/faq.css">
<link rel="stylesheet" href="/css/introduction.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2.3.0/dist/flickity.css">
<div class="section">

    <div class="faq-component">
        <div class="faq-head">
            <h1 class="faq-caption">Webzow</h1>
        </div>
        <div class="faq-item">
            <div class="caption">
                <div class="caption-block">
                    <svg class="icon icon-faq">
                        <use xlink:href="/img/symbols.svg#icon-faq"></use>
                    </svg> Cassino Versão 2.0 em modo de Demonstração.
                </div>
            </div>
            <div class="faq-content">
			<div class="intro">
                  <div class="banners-medium gallery js-flickity pcbanner" data-flickity-options='{ "wrapAround": true, "autoPlay": 5500 }'>
                     <div class="gallery-cell"><img src="/img/banner-01slider.png" /></div>
                     <div class="gallery-cell"><img src="/img/banner-02slider.png" /></div>
                     <div class="gallery-cell"><img src="/img/banner-01slider.png" /></div>
                     <div class="gallery-cell"><img src="/img/banner-02slider.png" /></div>
                  </div>
                  <div class="banners-medium gallery js-flickity cellphone" data-flickity-options='{ "wrapAround": true, "autoPlay": 5500 }'>
                     <div class="gallery-cell"><img src="/img/banner-01slider.png" /></div>
                     <div class="gallery-cell"><img src="/img/banner-02slider.png" /></div>
                     <div class="gallery-cell"><img src="/img/banner-01slider.png" /></div>
                     <div class="gallery-cell"><img src="/img/banner-02slider.png" /></div>
                  </div>
            </div>
        </div>
		
		     <main>
               <div class="intro">                
                  <h1 style="margin-top: 20px">Novidades</h1>
				  <br>
                  <div class="banners-top">
                     <div class="banner-01"><img src="/img/banner-01.png" /></div>
                     <div class="banner-02"><img src="/img/banner-02.png" /></div>
                     <div class="banner-03"><img src="/img/banner-03.png" /></div>
                  </div>
                  <br>
                  <h1>Jogos Originais</h1>
				  <br>
                  <div class="banners-down">
                     <div class="banner-01"><a href="/crash"><img src="/img/Crash.png" /></a></div>
                     <div class="banner-02"><a href="/dice"><img src="/img/Dice.png" /></a></div>
                     <div class="banner-03"><a href="/wheel"><img src="/img/Double.png" /></a></div>
                     <div class="banner-04"><a href=""><img src="/img/X-Double.png" /></a></div>
                  </div>
				  <div class="banners-down">
                     <div class="banner-01"><a href="/crash"><img src="/img/Crash.png" /></a></div>
                     <div class="banner-02"><a href="/dice"><img src="/img/Dice.png" /></a></div>
                     <div class="banner-03"><a href="/wheel"><img src="/img/Double.png" /></a></div>
                     <div class="banner-04"><a href=""><img src="/img/X-Double.png" /></a></div>
                  </div>
               </div>
               <script src="https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.min.js"></script>
            </main>

@endsection
