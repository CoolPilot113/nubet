@if(!Auth::check() && $settings->site_disable || $settings->site_disable && Auth::check() && !$u->is_admin)
<!DOCTYPE html>
<html>
<head>
    <title>{{$settings->title}}</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/pre.css" rel="stylesheet">
	
	
	<script src = "../code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href = "../cdn.jsdelivr.net/npm/%40fancyapps/ui/dist/fancybox.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/swiper%408/swiper-bundle.min.css" />
	<script src="../cdn.jsdelivr.net/npm/swiper%408/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="templates/betfury/css/stylefaed.css?v=675056">
	<link rel="stylesheet" href="templates/betfury/css/style-cabinetfaed.css?v=675056">
    <link rel="stylesheet" href="templates/betfury/css/style-newfaed.css?v=675056">
</head>
<body>
	<div class="logo">
		<img src="/img/logo.png" alt="">
		<span class="title">Тех. работы!</span>
		<a href="{{$settings->vk_url}}" class="vk" target="_blank"><span>Перейти в группу </span><i class="fab fa-vk"></i></a>
	</div>
</body>
@else
@if(Auth::user() && $u->ban)
<!DOCTYPE html>
<html>
<head>
    <title>{{$settings->title}}</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/pre.css" rel="stylesheet">
</head>
<body>
	<div class="logo">
		<img src="/img/logo.png" alt="">
		<span class="title">Ваш аккаунт заблокирован!</span>
		@if($u->ban_reason)<span class="text">{{$u->ban_reason}}</span>@endif
		<a href="{{$settings->vk_url}}" class="vk" target="_blank"><span>Перейти в группу </span><i class="fab fa-vk"></i></a>
		<a href="/logout" class="vk" target="_blank"><span>Выйти</span></a>
	</div>
</body>
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="description" content="">
    <title>{{$settings->title}}</title>
    <link rel="stylesheet" href="/css/main.css?v=5">
    <link rel="stylesheet" href="/css/icon.css">
    <link rel="stylesheet" href="/css/notify.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/media.css?v=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    {!! NoCaptcha::renderJs() !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
    <script type="text/javascript" src="/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/js/wnoty.js"></script>
    @if(Auth::user() and $u->is_admin == 1 || $u->is_moder == 1)
    <script type="text/javascript" src="/js/moderatorOptions.js"></script>
    @endif
	<script>
		@auth
		const USER_ID = '{{ $u->unique_id }}';
		const youtuber = '{{ $u->is_youtuber }}';
		const admin = '{{ $u->is_admin }}';
		const moder = '{{ $u->is_moder }}';
		@else
		const USER_ID = null;
		const youtuber = null;
		const admin = null;
		const moder = null;
		@endauth
		const settings = {!! json_encode($gws) !!};
	</script>
</head>

<body>
    <div class="wrapper">
	 <div class="header">
                <div class="header-inner">
				
                        
                        @auth
                        <div class="top-nav-wrapper">
                            <button class="opener">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </button>
                            <ul class="top-nav">
							
							<a class="logo" href="/">
					   		<a href="/"> <img src="/img/home/logotop.png" width="190px">  </a>
                        </a>
                    <div class="header-block">

                                <li>
                                    <a class="{{ Request::is('affiliate') ? 'isActive' : '' }}" href="/affiliate">
                                        <svg class="icon icon-affiliate">
                                            <use xlink:href="/img/symbols.svg#icon-affiliate"></use>
                                        </svg>
                                        <span>Afiliados</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="modal" data-target="#promoModal">
                                        <svg class="icon icon-promo">
                                            <use xlink:href="/img/symbols.svg#icon-promo"></use>
                                        </svg>
                                        <span>Código Promocional</span>
                                    </a>
                                </li>
                                
                                <li>
                                            @if($settings->vk_support_link)
                                            <li>
                                                <a href="{{$settings->vk_support_link}}" target="_blank">
                                                    <svg class="icon icon-support">
                                                        <use xlink:href="/img/symbols.svg#icon-support"></use>
                                                    </svg>
                                                    Написать в поддержку
                                                </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>--->
                                </li>
                                @if(Auth::check() && $u->is_admin)
                                <li>
                                    <a href="/admin">
                                        <svg class="icon icon-fairness">
                                            <use xlink:href="/img/symbols.svg#icon-fairness"></use>
                                        </svg>
                                        <span>ADM</span>
                                    </a>
                                </li>
                                @endif
                                @if(Auth::check() && $u->is_lowadmin)
                                <li>
                                    <a href="/panel">
                                        <svg class="icon icon-fairness">
                                            <use xlink:href="/img/symbols.svg#icon-fairness"></use>
                                        </svg>
                                        <span>ADM</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        @endauth
                    </div>
                    @guest
                    <div class="auth-buttons">
                        <button type="button" class="btn" id="loginRegister">Entrar ou Cadastrar</button>
                  			Entrar ou Cadastrar
							<svg class="icon icon-vk">
								<use xlink:href="/img/symbols.svg#icon-vk"></use>
							</svg>
                   		</a>
                    </div>
                    @else
				<div class=mywallet>		
					<div class="deposit-wrap">
						<div class="bottom-start rounded dropdown">
							<button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary" data-toggle="dropdown">
								<div class="selected balance">
									<svg class="icon icon-coin balance">
										<use xlink:href="/img/symbols.svg#icon-coin"></use>
									</svg>
								</div>
								<div class="opener">

								</div>
							</button>
							<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start">
								<button type="button" data-id="balance" tabindex="0" role="menuitem" class="dropdown-item">
									<div class="balance-item balance">
										<svg class="icon icon-coin balance">
											<use xlink:href="/img/symbols.svg#icon-coin"></use>
										</svg><span>Saldo Real</span>
										<div class="value" id="balance_bal"><strong>{{$u->balance}}</strong></div>
									</div>
								</button>
								
							</div>
						</div>
						<div class="deposit-block">
							<div class="select-field"><span id="balance">0</span></div>
						</div>
					</div>
				</div>	
               		@endguest
                </div>
            </div>
        <div class="page">
           
            <div class="left-sidebar">
                <a class="logo" href="/">
                	<img src="https://i.im.ge/2023/01/18/smtpgW.b7-removebg-preview.png" alt="">
                </a>
                <ul class="side-nav">
				<li class="{{ Request::is('/') ? 'current' : '' }}">
                        <a class="" href="/">
                            <svg class="icon">
                                <use xlink:href="/img/symbols.svg#icon-dice"></use>
                            </svg>
                            <div class="side-nav-tooltip">Nvuti</div>
                        </a>
                    </li>
					<li class="{{ Request::is('mines') ? 'current' : '' }}">
                        <a class="" href="/mines">
                            <svg class="icon">
                                <use xlink:href="/img/symbols.svg#icon-mines"></use>
                            </svg>
                            <div class="side-nav-tooltip">Mines</div>
                        </a>
                    </li>
                    <li class="{{ Request::is('jackpot') ? 'current' : '' || Request::is('jackpot/history') ? 'current' : ''  || Request::is('jackpot/history/*') ? 'current' : '' }}">
                        <a class="" href="/jackpot">
                            <svg class="icon">
                                <use xlink:href="/img/symbols.svg#icon-jackpot"></use>
                            </svg>
                            <div class="side-nav-tooltip">Jackpot</div>
                        </a>
                    </li>
                   
                    <li class="{{ Request::is('crash') ? 'current' : '' }}">
                        <a class="" href="/crash">
                            <svg class="icon">
                                <use xlink:href="/img/symbols.svg#icon-crash"></use>
                            </svg>
                            <div class="side-nav-tooltip">Crash</div>
                        </a>
                    </li>
                   

                    <li class="{{ Request::is('hilo') ? 'current' : '' }}">
                        <a class="" href="/hilo">
                            <svg class="icon">
                                <use xlink:href="/img/symbols.svg#icon-hilo"></use>
                            </svg>
                            <div class="side-nav-tooltip">Hilo</div>
                        </a>
                    </li>



                    <li class="{{ Request::is('keno') ? 'current' : '' }}">
                        <a class="" href="/keno">
                            <svg class="icon">
                                <use xlink:href="/img/symbols.svg#icon-keno"></use>
                            </svg>
                            <div class="side-nav-tooltip">Keno</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main-content">
                <div class="main-content-top">
                    @yield('content')
                </div>
                <div class="main-content-footer">
                    <div class="footer-counters">
                        <div class="container">
                            <div class="row">
                                <div class="col col-3 col-md-6">
                                    <div class="counter-block">
                                        <div class="counter-num">{{$stats['countUsers']}}</div>
                                        <div class="counter-text">Total Jogadores</div>
                                    </div>
                                </div>
                                <div class="col col-3 col-md-6">
                                    <div class="counter-block">
                                        <div class="counter-num">{{$stats['countUsersToday']}}</div>
                                        <div class="counter-text">Até agora Jogadores</div>
                                    </div>
                                </div>
                                <div class="col col-3 col-md-6">
                                    <div class="counter-block">
                                        <div class="counter-num">{{$stats['totalGames']}}</div>
                                        <div class="counter-text">Partidas Efetivadas</div>
                                    </div>
                                </div>
                                <div class="col col-3 col-md-6">
                                    <div class="counter-block">
                                        <div class="counter-num white">
                                            <div class="bet-number"><span class="bet-wrap"><span>{{$stats['totalWithdraw']}}</span>
                                                <svg class="icon icon-coin balance">
                                                    <use xlink:href="/img/symbols.svg#icon-coin"></use>
                                                </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="counter-text">Retiradas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col col-7">
                                    <ul class="footer-nav">
                                        <li><a class="" data-toggle="modal" data-target="#tosModal">Termos de Uso</a></li>
                                        @if($settings->vk_url)
                                        <li>
                                            <a href="{{$settings->vk_url}}" target="_blank">
                                                <svg class="icon icon-vk">
                                                    <use xlink:href="/img/symbols.svg#icon-vk"></use>
                                                </svg>{{$settings->sitename}}
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col col-5">
                                    <div class="copyright">
                                        <div class="footer-logo"><img src="/img/logo.png" alt=""></div>
                                        <div class="text">© 2022 {{$settings->sitename}}
                                            <br> All rights reserved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar">
                <div class="sidebar-container">
                	@auth

					<div class="tabs-nav">
						<div class="item current">
							<svg class="icon icon-conversations"><use xlink:href="/img/symbols.svg#icon-conversations"></use></svg>
							<span>Chat</span>
						</div>
						<div class="item">
							<svg class="icon icon-person"><use xlink:href="/img/symbols.svg#icon-person"></use></svg>
							<span>Meu Perfil</span>
						</div>
					</div>
                   	@endauth
                    <div class="chat tab current">
                      	@auth
                       	<div class="give-block">
							<a data-toggle="modal" data-target="#giveawayModal" class="btn-give"><svg class="icon"><use xlink:href="/img/symbols.svg#icon-giveaway"></use></svg><span>Sorteios</span></a>
						</div>
                        @endauth
                        <div class="chat-params">
                            <div class="item">
                                <div class="chat-online">Online: <span>0</span></div>
                            </div>
                            <div class="item">
                                @if(Auth::user() and $u->is_admin)
                                <div class="toggle">
                                	<a class="toggle-btn" data-toggle="tooltip" data-placement="top" title="Modo Administrador">
										<svg class="icon">
											<use xlink:href="/img/symbols.svg#icon-sheriff"></use>
										</svg>
									</a>
                                </div>
                                @endif
                                @if(Auth::user() and $u->is_admin || $u->is_moder)
                                <div class="list">
                                	<button class="banned-btn" data-toggle="tooltip" data-placement="top" title="Listar Banidos">
										<svg class="icon">
											<use xlink:href="/img/symbols.svg#icon-ban"></use>
										</svg>
									</button>
                                </div>
                                <div class="clear">
                                	<button class="clear-btn clearChat" data-toggle="tooltip" data-placement="top" title="Limpar Mensagens">
										<svg class="icon">
											<use xlink:href="/img/symbols.svg#icon-clear"></use>
										</svg>
									</button>
                                </div>
                                @endif
                                @auth
                                <div class="share">
                                	<button class="share-btn shareToChat" data-toggle="tooltip" data-placement="top" title="Compartilhar seu Saldo">
										<svg class="icon">
											<use xlink:href="/img/symbols.svg#icon-coin"></use>
										</svg>
									</button>
                                </div>
                                @endauth
                                <button class="close-btn">
                                    <svg class="icon icon-close">
                                        <use xlink:href="/img/symbols.svg#icon-close"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="chat-conversation">
                            <div class="scrollbar-container chat-conversation-inner ps">
                                @if($messages != 0) @foreach($messages as $sms)
                                <div class="message-block user_{{$sms['unique_id']}}" id="chatm_{{$sms['time2']}}">
                                    <div class="message-avatar {{ $sms['admin'] ? 'isAdmin' : '' }}{{ $sms['moder'] ? 'isModerator' : '' }}"><img src="{{$sms['avatar']}}" alt=""></div>
                                    <div class="message-content">
                                        <div>
                                            <button class="user-link" type="button" data-id="{{$sms['unique_id']}}">
                                                <span class="sanitize-name">
                                                	<span class="sanitize-text">@if($sms['admin'])<span class="admin-badge isAdmin" data-toggle="tooltip" data-placement="top" title="Administrador"><span class=""><svg class="icon icon-a"><use xlink:href="/img/symbols.svg#icon-a"></use></svg></span></span> Administrador @elseif($sms['moder'])<span class="admin-badge isModerator" data-toggle="tooltip" data-placement="top" title="Модератор"><span class=""><svg class="icon icon-m"><use xlink:href="/img/symbols.svg#icon-m"></use></svg></span></span> {{$sms['username']}} @elseif($sms['youtuber'])<span class="admin-badge isYouTuber" data-toggle="tooltip" data-placement="top" title="YouTuber"><span class=""><svg class="icon icon-y"><use xlink:href="/img/symbols.svg#icon-y"></use></svg></span></span> {{$sms['username']}} @else {{$sms['username']}} @endif<span>&nbsp;</span></span>
                                                </span>
                                            </button>
                                            <div class="message-text">{!!$sms['messages']!!}</div>
                                        </div>
                                    </div>
                                    @if(Auth::user() and $u->is_admin || $u->is_moder)
									<div class="delete">
										<button type="button" class="btn btn-light" onclick="chatdelet({{$sms['time2']}})">
											<svg class="icon">
												<use xlink:href="/img/symbols.svg#icon-close"></use>
											</svg><span>APAGAR</span>
										</button>
										@if(!$sms['admin'])
										@if(!$sms['ban'])
										<button type="button" class="btn btn-light btnBan" data-name="{{$sms['username']}}" data-id="{{$sms['unique_id']}}">
											<svg class="icon">
												<use xlink:href="/img/symbols.svg#icon-ban"></use>
											</svg><span>BANIR</span>
										</button>
										@else
										<button type="button" class="btn btn-light btnUnBan" data-name="{{$sms['username']}}" data-id="{{$sms['unique_id']}}">
											<svg class="icon">
												<use xlink:href="/img/symbols.svg#icon-ban"></use>
											</svg><span>Разбанить</span>
										</button>
										@endif
										@endif
									</div>
                               		@endif
                                </div>
                                @endforeach @endif
                            </div>
                        </div>
                        @guest
                        <div class="chat-empty-block">Você deve estar logado para escrever no chat.</div>
                        @else
                        	<input type="hidden" id="optional" value="0">
							@if($u->banchat)
							<div class="chat-ban-block">
								<div class="title">Chat!</div>
								<button type="button" class="btn btn-light unbanMe">
									<span><svg class="icon icon-coin balance balance"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg> )</span>
								</button>
							</div>
							@else
							<div class="chat-message-input">
								<div class="chat-textarea">
									<div class="chat-editable" contenteditable="true"></div>
								</div>
								<div class="chat-controls">

									<button type="submit" class="item sendMessage">
										<svg class="icon icon-send">
											<use xlink:href="/img/symbols.svg#icon-send"></use>
										</svg>
									</button>
								</div>
							</div>
							@endif
                        @endguest
                    </div>

					<div class="user-profile tab">
						@auth
											<div class="user-block">
							<div class="user-avatar">
								<button class="close-btn">
									<svg class="icon icon-close">
										<use xlink:href="/img/symbols.svg#icon-close"></use>
									</svg>
								</button>
								<div class="avatar"><img src="{{$u->avatar}}" alt=""></div>
							</div>
							<div class="user-name">
								<div class="nickname">{{$u->username}}</div>
							</div>
						</div>
						<ul class="profile-nav">
						<div class="give-block">
							<a data-toggle="modal" data-target="#giveawayModal" class="btn-give"><svg class="icon"><use xlink:href="/img/symbols.svg#icon-giveaway"></use></svg><span>Sorteios</span></a>
						</div>
							<li>
								<a class="" href="/profile/history">
									<div class="item-icon">
										<svg class="icon icon-history">
											<use xlink:href="/img/symbols.svg#icon-history"></use>
										</svg>
									</div><span>Histórico</span>
								</a>
							</li>
						</ul>
						<a href="/logout" class="btn btn-logout">
							<div class="item-icon">
								<svg class="icon icon-logout">
									<use xlink:href="/img/symbols.svg#icon-logout"></use>
								</svg>
							</div><span>Sair</span>
						</a>
						@endauth
					</div>
                </div>
            </div>
			<div class="mobile-nav-component">
				@auth
				<div class="pull-out other">
					<button class="close-btn">
						<svg class="icon icon-close">
							<use xlink:href="/img/symbols.svg#icon-close"></use>
						</svg>
					</button>
					<ul class="pull-out-nav">
						<li>
							<a href="/affiliate">
								<svg class="icon icon-affiliate">
									<use xlink:href="/img/symbols.svg#icon-affiliate"></use>
								</svg>Afiliados
							</a>
						</li>
						<li>
							<a href="/affiliate">
								<svg class="icon icon-affiliate">
									<use xlink:href="/img/symbols.svg#icon-person"></use>
								</svg>Meu Perfil
							</a>
						</li>
						<li>
							<a href="/faq">
								<svg class="icon icon-faq">
									<use xlink:href="/img/symbols.svg#icon-faq"></use>
								</svg>FAQ
							</a>
						</li>
						<li>
							<a href="/free">
								<svg class="icon icon-faucet">
									<use xlink:href="/img/symbols.svg#icon-faucet"></use>
								</svg>Roleta Grátis
							</a>
						</li>

						<li>
							<a data-toggle="modal" data-target="#promoModal">
								<svg class="icon icon-promo">
									<use xlink:href="/img/symbols.svg#icon-promo"></use>
								</svg>Código Promocional
							</a>
						</li>
						@if(Auth::check() && $u->is_admin)
						<li>
							<a href="/admin">
								<svg class="icon icon-fairness">
									<use xlink:href="/img/symbols.svg#icon-fairness"></use>
								</svg>PAINEL ADM
							</a>
						</li>
						@endif
						@if(Auth::check() && $u->is_lowadmin)
						<li>
							<a href="/panel">
								<svg class="icon icon-fairness">
									<use xlink:href="/img/symbols.svg#icon-fairness"></use>
								</svg>PAINEL ADM
							</a>
						</li>
						@endif
					</ul>
				</div>
				@endauth
				<div class="pull-out game">
					<button class="close-btn">
						<svg class="icon icon-close">
							<use xlink:href="/img/symbols.svg#icon-close"></use>
						</svg>
					</button>
					<ul class="pull-out-nav">
						<li>
							<a href="/jackpot">
								<svg class="icon">
									<use xlink:href="/img/symbols.svg#icon-jackpot"></use>
								</svg>Jackpot
							</a>
						</li>

						<li>
							<a href="/crash">
								<svg class="icon">
									<use xlink:href="/img/symbols.svg#icon-crash"></use>
								</svg>Crash
							</a>
						</li>
						<li>
							
            <li>

            <li>
              <a href="/dice">
                <svg class="icon">
                  <use xlink:href="/img/symbols.svg#icon-dice"></use>
                </svg>Nvuti
              </a>
            </li>
            <li>
              <a href="/hilo">
                <svg class="icon">
                  <use xlink:href="/img/symbols.svg#icon-hilo"></use>
                </svg>Hilo
              </a>
            </li>

            <li>
              <a href="/mines">
                <svg class="icon">
                  <use xlink:href="/img/symbols.svg#icon-mines"></use>
                </svg>Mines
              </a>
            </li>


					</ul>
				</div>
				<div class="mobile-nav-menu-wrapper">
					<ul class="mobile-nav-menu">
						<li>
							<button id="gamesMenu">
								<svg class="icon icon-gamepad">
									<use xlink:href="/img/symbols.svg#icon-gamepad"></use>
								</svg>Игры
							</button>
						</li>
						<li>
							<button id="chatMenu">
								<svg class="icon icon-conversations">
									<use xlink:href="/img/symbols.svg#icon-conversations"></use>
								</svg>Chat
							</button>
						</li>
						@auth
						<li>
							<button id="profileMenu">
								<svg class="icon icon-person">
									<use xlink:href="/img/symbols.svg#icon-person"></use>
								</svg>Meu Perfil
							</button>
						</li>
						<li>
							<button id="otherMenu">
								<svg class="icon icon-more">
									<use xlink:href="/img/symbols.svg#icon-more"></use>
								</svg><span>Еще</span>
							</button>
						</li>
						@endauth
					</ul>
				</div>
			</div>
        </div>
    </div>
    <script type="text/javascript" src="/js/main.js?v=4"></script>
    @auth
	<div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel" aria-hidden="true">
		<div class="modal-dialog deposit-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="deposit-modal-component">
					<div class="wrap">
						<div class="tabs">
							<button type="button" class="btn btn-tab isActive"></button>
							<button type="button" class="btn btn-tab"></button>
						</div>
						<div class="deposit-section tab active" data-type="deposite">
							<form action="/pay" method="post" id="payment">
								@if($settings->dep_bonus_min > 0)
								<div class="form-row">
									<label>
									</label>
								</div>
								@endif
								<div class="form-row">
									<label>
										<div class="form-label"></div>
										<div class="form-field">
											<div class="input-valid">
												<input class="input-field input-with-icon" name="amount" value="{{$settings->min_dep}}" placeholder="Мин. сумма: {{$settings->min_dep}}р.">
												<div class="input-icon">
													<svg class="icon icon-coin balance">
														<use xlink:href="/img/symbols.svg#icon-coin"></use>
													</svg>
												</div>
												<div class="valid inline"></div>
											</div>
										</div>
									</label>
								</div>
								<div class="form-row">
									<div class="form-label">Способ оплаты</div>
									<div class="select-payment">
										<input type="hidden" name="type" value="" id="depositType">
										<div class="bottom-start dropdown">
											<button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Выберите способ
												<div class="opener">
													<svg class="icon icon-down"><use xlink:href="/img/symbols.svg#icon-down"></use></svg>
												</div>
											</button>
											<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" data-placement="bottom-start">
                                                <!---<button type="button" data-id="5" tabindex="0" role="menuitem" class="dropdown-item" data-system="xmpay">
                                                    <div class="image"><img src="https://xmpay.one/public/assets/images/logox.png" alt="freekassa"></div><span>XmPay</span>
                                                </button>--->
												<button type="button" data-id="5" tabindex="0" role="menuitem" class="dropdown-item" data-system="freekassa">
													<div class="image"><img src="/img/wallets/fk.png" alt="freekassa"></div><span>FKwallet</span>
												</button>
												<button type="button" data-id="4" tabindex="0" role="menuitem" class="dropdown-item" data-system="payeer">
													<div class="image"><img src="/img/wallets/payeer.png" alt="payeer"></div><span>Payeer</span>
												</button>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-green">Depositar</button>
							</form>
						</div>
						<div class="deposit-section tab" data-type="withdraw">
							<div class="form-row">
								<label>
									<div class="form-label">BRL <a data-toggle="modal" data-target="#whatisthisModal">Что это?</a></div>
									<div class="form-field">
										<div class="input-valid">
											<input class="input-field input-with-icon" value="{{$u->requery}}" readonly>
											<div class="input-icon">
												<svg class="icon icon-coin balance">
													<use xlink:href="/img/symbols.svg#icon-coin"></use>
												</svg>
											</div>
										</div>
									</div>
								</label>
							</div>
							<div class="form-row">
								<div class="form-label"> </div>
								<div class="select-payment">
									<input type="hidden" name="type" value="" id="withdrawType">
									<div class="bottom-start dropdown">
										<button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

											<div class="opener">
												<svg class="icon icon-down"><use xlink:href="/img/symbols.svg#icon-down"></use></svg>
											</div>
										</button>
										<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 46px, 0px);" data-placement="bottom-start">
										    <button type="button" data-id="6" tabindex="0" role="menuitem" class="dropdown-item" data-system="payeer">
												<div class="image"><img src="/img/wallets/payeer.png" alt="payeer"></div><span>Payeer</span>
											</button>
											<button type="button" data-id="6" tabindex="0" role="menuitem" class="dropdown-item" data-system="qiwi">
												<div class="image"><img src="/img/wallets/qiwi.png" alt="qiwi"></div><span>Qiwi</span>
											</button>
											<button type="button" data-id="3" tabindex="0" role="menuitem" class="dropdown-item" data-system="yandex">
												<div class="image"><img src="/img/wallets/yandex.png" alt="yandex"></div><span>Яндекс деньги</span>
											</button>
											<button type="button" data-id="2" tabindex="0" role="menuitem" class="dropdown-item" data-system="fkwallet">
												<div class="image"><img src="/img/wallets/fk.png" alt="fkwallet"></div><span>FkWallet</span>
											</button>
											<button type="button" data-id="2" tabindex="0" role="menuitem" class="dropdown-item" data-system="visa">
												<div class="image"><img src="/img/wallets/visa.png" alt="visa"></div><span>VISA / Mastercard</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<label>
									<div class="form-label"></div>
									<div class="form-field">
										<div class="input-valid">
											<input class="input-field" name="purse" placeholder="" value="" id="numwallet">
										</div>
									</div>
								</label>
							</div>
							<div class="form-row">
								<label>
									<div class="form-label"></div>
									<div class="form-field">
										<div class="input-valid">
											<input class="input-field input-with-icon" name="amount" value="" id="valwithdraw" placeholder="Введите сумму">
											<div class="input-icon">
												<svg class="icon icon-coin balance">
													<use xlink:href="/img/symbols.svg#icon-coin"></use>
												</svg>
											</div>
										</div>
									</div>
								</label>
							</div>
							<div class="form-row">
								<div class="com-row">
									<span>0%</span>
								</div>
							</div>
							<button type="submit" disabled="" class="btn btn-green" id="submitwithdraw">Retirar (<span id="totalwithdraw">0</span>р.)</button>
							<div class="checkbox-block">
								<label>
								<input name="agree" type="checkbox" id="withdraw-checkbox" value=""><span class="checkmark"></span></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exchangeModal" tabindex="-1" role="dialog" aria-labelledby="exchangeModalLabel" aria-hidden="true">
		<div class="modal-dialog faucet-demo-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="faucet-container">
					<h3 class="faucet-caption"><span></span></h3>
					<div class="caption-line"><span class="span"><svg class="icon icon-coin balance"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg></span></div>
					<div class="faucet-modal-form">
						<div class="faucet-reload"><span></span> <span>{{$settings->exchange_min}}</span> <svg class="icon icon-coin balance bonus"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg></div>
					</div>
					<div class="faucet-modal-form">
						<div class="faucet-reload"><span>Nós iremos</span> <span>{{$settings->exchange_curs}}</span> <svg class="icon icon-coin balance bonus"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg> = <span>1</span> <svg class="icon icon-coin balance balance"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg></div>
					</div>
					<div class="form-row">
						<label>
							<div class="form-label">Valor de troca</div>
							<div class="form-field">
								<div class="input-valid">
									<input class="input-field input-with-icon" name="amount" placeholder="Insira o valor" id="exSum">
									<div class="input-icon">
										<svg class="icon icon-coin balance">
											<use xlink:href="/img/symbols.svg#icon-coin"></use>
										</svg>
									</div>
									<div class="valid inline"></div>
								</div>
							</div>
						</label>
					</div>
					<div class="faucet-modal-form">
						<div class="faucet-amount">
							<div class="faucet-reload"><span>Você terá:</span> <span id="exTotal">0</span> <svg class="icon icon-coin balance balance"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg></div>
						</div>
						<button type="button" class="btn btn-green exchangeBonus"><span>Trocar</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="promoModal" tabindex="-1" role="dialog" aria-labelledby="promoModalLabel" aria-hidden="true">
		<div class="modal-dialog faucet-demo-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="faucet-container">
					<h3 class="faucet-caption"><span>Código Promocional</span></h3>
					<div class="caption-line"><span class="span"><svg class="icon icon-coin balance"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg></span></div>
					<div class="form-row">
						<label>
							<div class="form-field">
								<div class="input-valid">
									<input class="input-field input-with-icon" name="promo" placeholder="Digite um código" id="promoInput">
									<div class="input-icon">
										<svg class="icon icon-promo">
											<use xlink:href="/img/symbols.svg#icon-promo"></use>
										</svg>
									</div>
								</div>
							</div>
						</label>
					</div>
					<div class="faucet-modal-form">
						<button type="button" class="btn btn-green activatePromo"><span>RECEBER BÔNUS</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="giveawayModal" tabindex="-1" role="dialog" aria-labelledby="giveawayModalLabel" aria-hidden="true">
		<div class="modal-dialog faucet-demo-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="faucet-container">
					<h3 class="faucet-caption"><span>Sorteios</span></h3>
					<div class="caption-line"><span class="span"><svg class="icon icon-giveaway"><use xlink:href="/img/symbols.svg#icon-giveaway"></use></svg></span></div>
					<div class="gv-list">
						@forelse($gives as $gv)
						<div class="faucet-modal-give {{$gv->status == 1 ? 'doneGive' : ''}}" id="gv_{{$gv->id}}">
							<div class="give-btn-block">
								<div class="faucet-reload">
									<div class="faucet-cd">Sorteios #{{$gv->id}}</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="bank-text">Valor:</div>
									<div class="bank-amount">{{$gv->sum}} <svg class="icon icon-coin balance {{$gv->type}}"><use xlink:href="/img/symbols.svg#icon-coin"></use></svg></div>
								</div>
								<div class="col-6">
									<div class="date-text">Participantes:</div>
									<div class="date-of">{{$gv->status == 0 ? $gv->time_to : 'Participantes'}}</div>
								</div>
							</div>
							@if($gv->status == 0)
								@if($gv->group_sub != 0 || $gv->min_dep != 0)
								<div class="give-btn-block nowGive">
									<div class="faucet-reload">
										<div class="faucet-cd">Para participar você precisa:</div>
										<div class="text-left">
											@if($gv->group_sub != 0 && $settings->vk_url)<div class="faucet-sm-text">• Seja inscrito em nosso <a href="{{$settings->vk_url}}" target="_blank">Grupo</a>.</div>@endif
											@if($gv->min_dep != 0)<div class="faucet-sm-text">• Recarregue sua conta com o valor{{$gv->min_dep}}р. para o dia atual.</div>@endif
										</div>
									</div>
								</div>
								@endif
								<div class="give-btn-block nowGive">
									<button type="button" class="btn btn-green joinGiveaway" data-id="{{$gv->id}}"><span>Participar</span></button>
									<div class="faucet-sm-text">participantes: <span class="total_users">{{$gv->total}}</span></div>
								</div>
							@endif
							<div class="give-btn-block">
								<div class="faucet-reload">
									<div class="faucet-cd">Vencedor:</div>
									<div class="winnerGive">
										@if($gv->status > 0 && !is_null($gv->winner_id))
										<button type="button" class="btn btn-link" data-id="{{$gv->winner->unique_id}}">
											<span class="sanitize-user">
												<div class="sanitize-avatar"><img src="{{$gv->winner->avatar}}" alt=""></div>
												<span class="sanitize-name">{{$gv->winner->username}}</span>
											</span>
										</button>
										@else
										Não
										@endif
									</div>
								</div>
							</div>
						</div>
						@empty
						<div class="faucet-modal-give giveNone">
							<div class="give-btn-block">
								<div class="faucet-reload">
									<div class="faucet-cd">sem mãos</div>
								</div>
							</div>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="captchaModal" tabindex="-1" role="dialog" aria-labelledby="captchaModalLabel" aria-hidden="true">
		<div class="modal-dialog captcha-need-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="captcha-need-modal-container">
					<div class="caption">Confirme que você não é um robô!</div>
					<div class="form">
						<div class="label">Clique em "Não sou um robô" para continuar!</div>
						<div class="captcha">
							<div hl="ru">
								<div>
									<div style="width: 304px; height: 78px;">
										{!! NoCaptcha::display(['data-callback' => 'recaptchaCallback']) !!}
									</div>
								</div>
							</div>
						</div>
						<button type="button" disabled="" class="btn" id="submitBonus">Prosseguir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if($u->is_admin == 1 || $u->is_moder == 1)
	<div class="modal fade" id="bannedModal" tabindex="-1" role="dialog" aria-labelledby="bannedModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="faucet-container">
					<h3 class="faucet-caption"><span>Usuários bloqueados</span></h3>
					<h3 class="faucet-caption"><div id="unbanName"></div></h3>
					<div class="caption-line"><span class="span"><svg class="icon"><use xlink:href="/img/symbols.svg#icon-ban"></use></svg></span></div>
					<div class="form-row">
						<div class="table-heading">
							<div class="thead">
								<div class="tr">
									<div class="th">Usuário</div>
									<div class="th">Fim do bloqueio</div>
									<div class="th">Causa</div>
									<div class="th">Ações</div>
								</div>
							</div>
						</div>
						<div class="table-ban-wrap" style="max-height: 100%;">
							<div class="table-wrap" style="transform: translateY(0px);">
								<table class="table">
									<tbody id="bannedList">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="banModal" tabindex="-1" role="dialog" aria-labelledby="banModalLabel" aria-hidden="true">
		<div class="modal-dialog faucet-demo-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="faucet-container">
					<h3 class="faucet-caption"><span>Bloquear bate-papo para um usuário</span></h3>
					<h3 class="faucet-caption"><div id="banName"></div></h3>
					<div class="caption-line"><span class="span"><svg class="icon"><use xlink:href="/img/symbols.svg#icon-ban"></use></svg></span></div>
					<div class="form-row">
						<input type="hidden" name="user_ban_id">
						<label>
							<div class="form-label">Tempo de banimento em minutos</div>
							<div class="form-field">
								<div class="input-valid">
									<input class="input-field input-with-icon" name="time" placeholder="Tempo" id="banTime">
									<div class="input-icon">
										<svg class="icon">
											<use xlink:href="/img/symbols.svg#icon-time"></use>
										</svg>
									</div>
								</div>
							</div>
						</label>
					</div>
					<div class="form-row">
						<input type="hidden" name="user_ban_id">
						<label>
							<div class="form-label">Motivo da proibição</div>
							<div class="form-field">
								<div class="input-valid">
									<input class="input-field input-with-icon" name="reason" placeholder="Causa" id="banReason">
									<div class="input-icon">
										<svg class="icon">
											<use xlink:href="/img/symbols.svg#icon-edit"></use>
										</svg>
									</div>
								</div>
							</div>
						</label>
					</div>
					<div class="form-row">
						<button type="button" class="btn btn-green banThis"><span>BANIR</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="unbanModal" tabindex="-1" role="dialog" aria-labelledby="unbanModalLabel" aria-hidden="true">
		<div class="modal-dialog faucet-demo-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="faucet-container">
					<h3 class="faucet-caption"><span>Desbloqueando o Chat para um usuário</span></h3>
					<h3 class="faucet-caption"><div id="unbanName"></div></h3>
					<div class="caption-line"><span class="span"><svg class="icon"><use xlink:href="/img/symbols.svg#icon-ban"></use></svg></span></div>
					<div class="form-row">
						<input type="hidden" name="user_unban_id">
						<button type="button" class="btn btn-green unbanThis"><span>Desbanir</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	@endauth
	<div class="modal fade" id="tosModal" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel" aria-hidden="true">
		<div class="modal-dialog tos-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="tos-modal-container">
					<div class="scrollbar-container tos-modal-block ps">
						<h2>Общие положения</h2>
						<p>1.1. Este contrato (doravante denominado "Contrato") rege os termos e condições,
                                        pela
                                        prestação de serviços do site
                                        «{{$settings->domain}}», doravante referido como
                                        "Organizador", e é dirigido a um indivíduo que deseja receber os serviços do
                                        site
                                        especificado (doravante denominado "Participante").</p>
                                    <p>1.2. O organizador e o participante reconhecem o procedimento e a forma de
                                        celebração
                                        deste acordo
                                        equivalente em força legal a um acordo celebrado por escrito.</p>
                                    <p>1.3. Os termos deste acordo são aceites pelos participantes na íntegra e sem
                                        quaisquer reservas, mediante a adesão ao acordo na forma que consta no site
                                        «{{$settings->domain}}»</p>
                                    <h2>Termos e Definições</h2>
                                    <p>2.1. O objeto deste Contrato é a prestação pelo organizador ao participante de
                                        serviços para organizar lazer e recreação no jogo em «{{$settings->domain}}»
                                        conforme
                                        os termos deste Acordo. Esses serviços incluem, em particular,
                                        o seguinte: serviços de compra e venda de saldos des jogos em
                                        ({{$settings->domain}}
                                        ),
                                        manter registros de informações significativas: movimentos na conta do jogo,
                                        garantir medidas para
                                        identificação e segurança dos participantes, desenvolvimento de software,
                                        integrado ao playground e aplicativos externos, informativos e outros
                                        serviços necessários à organização do jogo e atendimento ao participante em seu
                                        processo de
                                        local do organizador.</p>
                                    <p>2.2. O jogo como um todo, bem como qualquer um de seus elementos ou qualquer jogo
                                        externo associado
                                        aplicativo criado exclusivamente para entretenimento. O participante reconhece
                                        que
                                        todos os tipos
                                        as atividades do jogo neste site são uma diversão para ele. Participante
                                        concorda que, dependendo das características de sua conta, o grau de sua
                                        participação no jogo estará disponível em vários graus.</p>
                                    <p>2.3. O participante concorda que é pessoalmente responsável por todas as ações,
                                        feito com os jogos de ({{$settings->domain}}): comprando e vendendo,
                                        entrada e saída, bem como para ações de jogos no playground: criação,
                                        compra e venda, operações com todos os elementos do jogo e outros atributos e
                                        objetos do jogo,
                                        usado para jogabilidade.</p>
                                    <p>2.4. O Membro reconhece que o grau e a capacidade de participar de entretenimento
                                        no
                                        servidor
                                        Os jogos são as principais qualidades do serviço prestado a ele.</p>
                                    <h2>Direitos e obrigações das partes</h2>
                                    <p>3.1 Direitos e obrigações do participante.</p>
                                    <p>3.1.1. Participe do jogo «{{$settings->domain}}» apenas pessoas que atingiram
                                        capacidade civil de acordo com as leis do país de sua residência. Tudo
                                        as consequências do incumprimento desta condição são atribuídas ao
                                        participante.</p>
                                    <p>3.1.2. O grau e o método de participação no jogo são determinados pelo próprio
                                        participante, mas não podem
                                        contradizer este Acordo e as regras do playground.</p>
                                    <p>3.1.2. O participante é obrigado:</p>
                                    <p>3.1.2.1. forneça informações verdadeiras sobre você durante o registro e mediante
                                        solicitação
                                        Organizador fornecer dados confiáveis sobre sua identidade, permitindo
                                        identificá-lo como o dono da conta no jogo;</p>
                                    <p>3.1.2.2. não use o jogo para realizar quaisquer ações contrárias
                                        direito internacional e a lei do país de residência;</p>
                                    <p>3.1.2.3. não use recursos não documentados (bugs) e erros de software
                                        garantir o jogo e notificar imediatamente o Organizador sobre eles, bem como
                                        sobre
                                        as pessoas
                                        usando esses erros;</p>
                                    <p>3.1.2.4. não utilize programas externos de nenhum tipo, para obter benefícios em
                                        jogos;</p>
                                    <p>3.1.2.5. não use seu link de afiliado para anunciar, bem como o recurso, sua
                                        contendo, mailing lists e outros tipos de mensagens para pessoas que não
                                        expressam
                                        consentimento
                                        receba-os (spam);</p>
                                    <p>3.1.2.6. não tem o direito de restringir o acesso de outros participantes ou
                                        outras
                                        pessoas ao Jogo,
                                        obriga-se a tratar com respeito e correção os participantes do jogo, bem como a
                                        À Organizadora, seus sócios e funcionários, não interferir no trabalho
                                        recente;</p>
                                    <p>3.1.2.7. não engane o Organizador e os participantes do jogo;</p>
                                    <p>3.1.2.8. não use palavrões e insultos de qualquer forma;</p>
                                    <p>3.1.2.9. não denegrir as ações de outros Jogadores e da Administração;</p>
                                    <p>3.1.2.10. não ameace violência ou dano físico a ninguém;</p>
                                    <p>3.1.2.11. não distribua materiais que promovam rejeição ou ódio por
                                        qualquer raça, religião, cultura, nação, povo, idioma, política, estado,
                                        ideologia ou movimento social;</p>
                                    <p>3.1.2.12. não anuncie pornografia, drogas e recursos que contenham tais
                                        informações;</p>
                                    <p>3.1.2.13. não usar ações, terminologia ou jargão para disfarçar uma violação das
                                        obrigações de um membro;</p>
                                    <p>3.1.2.14. cuidar de forma independente das medidas necessárias de computador e
                                        outros
                                        segurança, manter segredo e não transferir para outra pessoa ou outro
                                        participante
                                        seus dados de identificação: login, senha da conta, etc., não permitem
                                        acesso não autorizado à caixa de correio especificada no perfil da conta
                                        participante. Todo o risco de consequências adversas da divulgação desses dados
                                        é
                                        suportado por
                                        participante, desde que o participante concorda que o sistema de segurança da
                                        informação
                                        a plataforma de jogos exclui a transferência de login, senha e informações de
                                        identificação
                                        conta de membro para terceiros;</p>
                                    <p>3.1.2.15. assumir responsabilidade pessoal pela conduta de seus
                                        movimentações e movimentações financeiras, a Organizadora não se responsabiliza
                                        pelo
                                        transações financeiras entre Jogadores para a transferência de inventário de
                                        jogo e
                                        moeda do jogo,
                                        bem como outros atributos do jogo.</p>
                                    <p>3.1.2.16. ser o primeiro a notificar o organizador de suas reivindicações e
                                        reclamações por escrito
                                        formulário através da página de Suporte.</p>
                                    <p>3.1.2.17. regularmente se familiarizar com as notícias do jogo, bem como com
                                        mudanças neste Acordo e nas regras do jogo no playground.</p>
                                    <p>3.1.2.18. não crie contas adicionais (multi-contas). Tais ações
                                        resultará no bloqueio da conta ou na sua reinicialização.</p>
                                    <p>3.1.2.19. Venda/transferência de contas é proibida</p>
                                    <p>3.1.2.20. "Conluios" de grupos de pessoas com o objetivo de obter benefícios para
                                        participantes/não participantes de conluio</p>
                                    <p>3.1.2.21. "Conluios" - eles também são um cartel, uma conspiração criminosa, uma
                                        cooperativa. o
                                        o termo define um grupo de pessoas que, por meio da cooperação, buscam obter um
                                        benefício
                                        local. Se forem encontrados, todos os participantes serão banidos e redefinidos,
                                        também
                                        possivelmente uma punição definida pelos Administradores.</p>
                                    <h3>Direitos e obrigações do organizador</h3>
                                    <p>4.1.1. O organizador é obrigado:</p>
                                    <p>4.1.1.1. assegurar, gratuitamente, o acesso do participante ao parque infantil e
                                        participação no jogo. O participante paga de forma independente pelo acesso à
                                        rede
                                        às suas próprias custas
                                        Internet e suporta outros custos associados a esta ação.</p>
                                    <p>4.1.1.2. acompanhar o inventário do jogo ({{$settings->domain}}) na conta do jogo
                                        participante.</p>
                                    <p>4.1.1.3. melhorar regularmente o complexo de hardware e software, mas não
                                        garante que o software do Jogo está livre de erros e que o hardware
                                        não sairá dos parâmetros de trabalho e funcionará sem problemas.</p>
                                    <p>4.1.1.4. Observar o regime de confidencialidade dos dados pessoais do
                                        participante
                                        de acordo com a cláusula 6 deste contrato.</p>
                                    <p>4.1.1.5. O recebimento de pagamentos pelo usuário pode ser limitado pela
                                        administração a seu próprio critério.
                                        critério.</p>
                                    <p>4.1.1.6. Qualquer pessoa legalmente em posse de equipamento de jogo
                                        ({{$settings->domain}}),
                                        o pagamento é feito na quantia de dinheiro determinada pelo valor de mercado
                                        ({{$settings->domain}}), menos o custo desta operação.</p>
                                    <p>4.1.2. O organizador tem o direito:</p>
                                    <p>4.1.2.2. fornecer ao participante serviços pagos adicionais, cuja lista, bem como
                                        também o procedimento e as condições para o uso são determinados por este
                                        acordo,
                                        regras do playground e outros anúncios do organizador. Ao mesmo tempo, o
                                        organizador
                                        tem o direito de alterar o número e o escopo dos serviços pagos oferecidos a
                                        qualquer momento, seus
                                        custo, nome, tipo e efeito de uso.</p>
                                    <p>4.1.2.3. suspender este acordo e desconectar o participante de
                                        participação no jogo durante a investigação sobre a suspeita de um participante
                                        em
                                        violação
                                        deste Acordo e as regras do parque infantil.</p>
                                    <p>4.1.2.4. expulsar um participante do jogo se determinar que o participante violou
                                        este
                                        acordo ou regras estabelecidas na quadra de jogo, de acordo com o item 5.10
                                        deste
                                        acordos.</p>
                                    <p>4.1.2.5. interromper parcial ou totalmente a prestação de serviços sem aviso
                                        prévio
                                        participante nos trabalhos de reconstrução, reparação e manutenção em
                                        local.</p>
                                    <p>4.1.2.6. O organizador não se responsabiliza pelo mau funcionamento
                                        software de jogo. O participante usa o software
                                        princípio “COMO ESTÁ” (“COMO ESTÁ”). Se o organizador determinar que o jogo está
                                        com
                                        defeito
                                        (Erro) no trabalho do site, então os resultados que ocorreram durante o
                                        incorreto
                                        trabalho do software, pode ser cancelado ou ajustado de acordo com
                                        critério do organizador. O participante concorda em não apelar ao organizador
                                        sobre
                                        qualidade, quantidade, ordem e tempo das oportunidades de jogo fornecidas a ele
                                        e
                                        Serviços.</p>
                                    <p>Garantias e responsabilidade 5.1. O Organizador não garante a permanência e
                                        continuidade
                                        acesso ao parque infantil e aos seus serviços em caso de problemas técnicos
                                        e/ou imprevistos, incluindo: trabalho defeituoso ou não
                                        funcionamento de provedores de Internet, servidores de informação, Banco e meios
                                        de
                                        pagamento
                                        sistemas, bem como ações ilegais de terceiros. O organizador fará todos os
                                        esforços
                                        para evitar falhas, mas não é responsável por falhas técnicas temporárias e
                                        interrupções no funcionamento do Jogo, independentemente dos motivos de tais
                                        falhas.</p>
                                    <p>5.2. O participante concorda plenamente que o organizador não pode ser
                                        responsabilizado por
                                        perdas do participante decorrentes de ações ilegais de terceiros,
                                        visando violar o sistema de segurança de equipamentos eletrônicos e bases
                                        dados do jogo, ou devido a interrupções fora do controle do organizador,
                                        suspensão
                                        ou encerramento da operação dos canais e redes de comunicação utilizados para
                                        interagir com
                                        participante, bem como ações ilegais ou irracionais de sistemas de pagamento,
                                        bem
                                        como
                                        bem como de terceiros.</p>
                                    <p>5.3. O organizador não é responsável por perdas incorridas como resultado de
                                        uso ou não uso por um participante de informações sobre o Jogo, regras do jogo e
                                        o Jogo em si e não é responsável por perdas ou outros danos incorridos pelo
                                        participante
                                        devido a suas ações não qualificadas e ignorância das regras do jogo ou de sua
                                        Erroх nos cálculos;</p>
                                    <p>5.4. O participante concorda em usar o playground por sua própria vontade e
                                        por sua conta e risco. O organizador não dá ao participante qualquer garantia de
                                        que
                                        ele se beneficiará ou se beneficiará da participação no jogo. O grau de
                                        participação
                                        no Jogo é determinado
                                        pelo próprio participante.</p>
                                    <p>5.5. O organizador não é responsável perante o participante pelas ações de
                                        terceiros
                                        participantes.</p>
                                    <p>5.6. Em caso de disputas e desentendimentos no pátio de recreio, a decisão
                                        do organizador é final e o participante concorda plenamente com ela. Todas as
                                        disputas
                                        e disputas decorrentes ou relacionadas a este Contrato estarão sujeitas a
                                        resolução através de negociações. Se não for possível chegar a um acordo através
                                        negociações, disputas, desacordos e reivindicações decorrentes deste Contrato,
                                        estão sujeitos a resolução de acordo com a legislação atual do Brasil</p>
                                    <p>5.7. O Organizador não arca com o ônus tributário do Participante. O participante
                                        compromete-se
                                        incluir de forma independente possíveis rendimentos recebidos na declaração de
                                        imposto em
                                        de acordo com as leis de seu país de residência.</p>
                                    <p>5.8. O Organizador pode fazer alterações neste Acordo, nas regras do jogo
                                        sites e outros documentos unilateralmente. Em caso de alterações
                                        documentos O organizador coloca as versões mais recentes dos documentos no site
                                        do
                                        jogo
                                        sites. Todas as alterações entram em vigor a partir do momento da postagem. O
                                        participante tem o direito
                                        rescindir este Acordo dentro de 3 dias se ele não concordar com o feito
                                        mudanças. Neste caso, a rescisão do Contrato é feita de acordo com a cláusula
                                        5.9
                                        presente acordo. É da responsabilidade do Participante visitar regularmente
                                        o site oficial do Jogo para se familiarizar com os documentos oficiais e
                                        notícia.</p>
                                    <p>5.9. O Participante tem o direito de rescindir este Contrato unilateralmente
                                        sem salvar uma conta de jogo. Neste caso, todos os custos associados à
                                        participação
                                        no jogo,
                                        O participante não será compensado ou devolvido.</p>
                                    <p>5.10. O Organizador tem o direito de rescindir este Acordo unilateralmente
                                        ordem, bem como realizar outras ações que limitem as possibilidades no Jogo, em
                                        em relação a um participante ou grupo de participantes que são cúmplices de
                                        violações dos termos deste Acordo. Ao mesmo tempo, todos os atributos do jogo,
                                        inventário ({{$settings->domain}}) na conta e na conta do jogo
                                        participante ou grupo de participantes, bem como todas as despesas não
                                        reembolsáveis
                                        ​​e não reembolsáveis.
                                        compensado, a menos que o Organizador, a seu exclusivo critério, considere
                                        apropriado para compensar as despesas do participante ou grupo de
                                        participantes.</p>
                                    <p>5.11. O Organizador e o Participante estão isentos de responsabilidade em caso de
                                        circunstâncias de força maior (circunstâncias de força maior), incluindo
                                        incluem, mas não estão limitados a: desastres naturais, guerras, incêndios
                                        (incêndios),
                                        inundações, explosões, terrorismo, motins, distúrbios civis, atos do governo
                                        ou autoridade reguladora, ataques de hackers, ausências, não funcionamento ou
                                        falhas
                                        operação de fonte de alimentação, provedores de serviços de Internet, redes de
                                        comunicação ou outros sistemas,
                                        redes e serviços. A parte experimentando tais circunstâncias deve, dentro de
                                        limites
                                        razoáveis
                                        termos e de forma acessível para notificar a outra parte de tais
                                        circunstâncias.</p>
                                    <h2>Confidencialidade</h2>
                                    <p>6.1. A condição de confidencialidade se aplica às informações que o Organizador
                                        pode receber sobre o Participante durante sua estada no site do Jogo e que pode
                                        ser associado a este usuário específico. Organizador automaticamente
                                        recebe e grava no servidor registra informações técnicas do seu navegador: IP
                                        endereço, endereço da página solicitada, etc. O organizador pode gravar
                                        "cookies" em
                                        computador do usuário e posteriormente usá-los. O organizador garante que
                                        os dados fornecidos pelo participante ao se registrar no Jogo serão usados
                                        Organizador apenas dentro do Jogo.</p>
                                    <p>6.2. O Organizador tem o direito de transferir informações pessoais sobre o
                                        Participante para terceiros
                                        somente se:</p>
                                    <p>6.2.1. O participante expressou o desejo de divulgar esta informação;</p>
                                    <p>6.2.2. Sem isso, o Integrante não poderá utilizar o produto ou serviço desejado,
                                        em
                                        em particular - informações sobre nomes (apelidos), atributos do jogo - podem
                                        ser
                                        acessadas
                                        outros participantes;</p>
                                    <p>6.2.3. Isso é exigido pela lei e/ou autoridades internacionais, sujeito a
                                        procedimento legal;</p>
                                    <p>6.2.4. O Participante viola este Acordo e as regras do playground.</p>
                                    <h2>Outras provisões</h2>
                                    <p>7.1. A nulidade de uma parte ou parágrafo (alínea) deste contrato não implica
                                        nulidade de todas as outras partes e parágrafos (alíneas).</p>
                                    <p>7.2. O prazo deste Contrato é definido para todo o período de validade
                                        playground, ou seja, por tempo indeterminado, e não implica em data de término
                                        deste acordo.</p>
                                    <p>7.3. Ao inscrever-se e estar no parque infantil, o participante reconhece que
                                        leu, entendeu e aceita integralmente os termos deste Contrato, bem como as
                                        regras
                                        jogos e outros documentos oficiais.</p>
                                    <p>7.4. É proibido o uso de correspondência temporária (descartável), para uso de
                                        tais
                                        a conta será excluída e medidas serão tomadas. O correio único é definido
                                        administração do local. De acordo com esta definição, correspondência entregue a
                                        domínios adquiridos, os domínios adquiridos são determinados pela administração
                                        do
                                        site.</p>
                                    <p>7.4.1. É proibido cadastrar mais de uma conta através do site. Tais ações
                                        levar ao bloqueio de conta</p>
                                    <p>7.4.2. Equilíbrio artificial brincando com scripts da Ajuda - categoricamente
                                        proibido. O membro que será visto será bloqueado</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="fairModal" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel" aria-hidden="true">
		<div class="modal-dialog fair-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="fair-modal__container">
					<h1><span>Fairplay</span></h1><span>Nosso sistema de fair play garante que não podemos manipular o resultado de um jogo.<br><br>Assim como você corta o baralho em um cassino real. Esta implementação lhe dá total tranquilidade enquanto joga, sabendo que não podemos "ajustar" as apostas a nosso favor.
<br><br></span>
					<div class="collapse-component">
						<div class="form-field">
							<div class="input-valid">
								<input class="input-field input-with-icon" name="hash" id="gameHash" placeholder="Digite um Hash">
								<div class="input-icon">
									<svg class="icon icon-coin balance">
										<use xlink:href="/img/symbols.svg#icon-fairness"></use>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-rotate checkHash"><span>Verificar</span></button>
					<div class="fair-table" style="display: none;">
						<table class="table">
							<thead>
								<tr>
									<th><span># ID </span></th>
									<th><span>NÚMERO GERADO</span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="gameRound"></td>
									<td id="gameNumber"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="whatisthisModal" tabindex="-1" role="dialog" aria-labelledby="whatisthisModalLabel" aria-hidden="true">
		<div class="modal-dialog fair-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
			</div>
		</div>
	</div>
	<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
		<div class="modal-dialog user-modal modal-dialog-centered" role="document">
			<div class="modal-content">
				<button class="modal-close" data-dismiss="modal" aria-label="Close">
					<svg class="icon icon-close">
						<use xlink:href="/img/symbols.svg#icon-close"></use>
					</svg>
				</button>
				<div class="user-modal__container"></div>
			</div>
		</div>
	</div>
@if(session('error'))
	<script>
	$.notify({
		type: 'error',
		message: "{{ session('error') }}"
	});
	</script>
@elseif(session('success'))
	<script>
	$.notify({
		type: 'success',
		message: "{{ session('success') }}"
	});
	</script>
@endif
</body>
</html>

<style type="text/css">
    .chat {

    height: calc(100% - 100px);
}


</style>
@endif
@endif
