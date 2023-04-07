<?php $__env->startSection('content'); ?>
<div class="kt-subheader kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title">CONFIGURAÇÕES DO SITE</h3>
	</div>
</div>

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="kt-portlet kt-portlet--tabs">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-toolbar">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#site" role="tab" aria-selected="true">
							Configurações Gerais
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#jackpot" role="tab" aria-selected="false">
							Jackpot
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#wheel" role="tab" aria-selected="false">
							Wheel
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#crash" role="tab" aria-selected="false">
							Crash
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#pvp" role="tab" aria-selected="false">
							PvP
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#battle" role="tab" aria-selected="false">
							Battle
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#dice" role="tab" aria-selected="false">
							Dice
						</a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#hilo" role="tab" aria-selected="false">
							HiLo
						</a>
					</li>-->
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tower" role="tab" aria-selected="false">
							Tower
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#fake" role="tab" aria-selected="false">
							Sistema de apostas dos Bots
						</a>
					</li>
				</ul>
			</div>
		</div>
		<form class="kt-form" method="post" action="/admin/setting/save">
			<div class="kt-portlet__body">
				<div class="tab-content">
					<div class="tab-pane active" id="site" role="tabpanel">
						<div class="kt-section">
							<h3 class="kt-section__title">
								Configurações:
							</h3>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Nome do Domínio:</label>
									<input type="text" class="form-control" placeholder="dominio.com" value="<?php echo e($settings->domain); ?>" name="domain">
								</div>
								<div class="col-lg-4">
									<label>Nome do site:</label>
									<input type="text" class="form-control" placeholder="nome_do_site.com" value="<?php echo e($settings->sitename); ?>" name="sitename">
								</div>
								<div class="col-lg-4">
									<label>Titulo do Cabeçalho:</label>
									<input type="text" class="form-control" placeholder="nome_do_site.com - Pequena descrição" value="<?php echo e($settings->title); ?>" name="title">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Descrição para sites de buscas (google, yahoo e etc.):</label>
									<input type="text" class="form-control" placeholder="Descrição para o site..." value="<?php echo e($settings->description); ?>" name="description">
								</div>
								<div class="col-lg-4">
									<label>Palavras chaves para sites de buscas:</label>
									<input type="text" class="form-control" placeholder="website, nome, domínio, etc...." value="<?php echo e($settings->keywords); ?>" name="keywords">
								</div>
								<div class="col-lg-4">
									<label>Substituir palavras proíbidas do chat por:</label>
									<input type="text" class="form-control" placeholder="i ❤ site" value="<?php echo e($settings->censore_replace); ?>" name="censore_replace">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Sistema de Bots</label>
									<select class="form-control" name="fakebets">
										<option value="0" <?php echo e(($settings->fakebets == 0) ? 'selected' : ''); ?>>Desligado</option>
										<option value="1" <?php echo e(($settings->fakebets == 1) ? 'selected' : ''); ?>>Ligado</option>
									</select>
								</div>
								<div class="col-lg-4">
									<label>Valor mínimo de bônus para trocar por saldo real:</label>
									<input type="text" class="form-control" placeholder="1000" value="<?php echo e($settings->exchange_min); ?>" name="exchange_min">
								</div>
								<div class="col-lg-4">
									<label>Taxa cambial do bônus convertendo para saldo real:</label>
									<input type="text" class="form-control" placeholder="2" value="<?php echo e($settings->exchange_curs); ?>" name="exchange_curs">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Quantidade de referências ativas para receber o bônus:</label>
									<input type="text" class="form-control" placeholder="8" value="<?php echo e($settings->max_active_ref); ?>" name="max_active_ref">
								</div>
								<div class="col-lg-4">
									<label>Quantidade de valor depositado nescessario para falar no chat (0 = desativado):</label>
									<input type="text" class="form-control" placeholder="0" value="<?php echo e($settings->chat_dep); ?>" name="chat_dep">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Quantidade mínima de deposito para para sacar os bônus (0 = desativado)</label>
									<input type="text" class="form-control" placeholder="0" value="<?php echo e($settings->dep_bonus_min); ?>" name="dep_bonus_min">
								</div>
								<div class="col-lg-4">
									<label>Valor que usuario recebe em % de bônus ao depositar saldo:</label>
									<input type="text" class="form-control" placeholder="0" value="<?php echo e($settings->dep_bonus_perc); ?>" name="dep_bonus_perc">
								</div>
								<div class="col-lg-4">
									<label>Porcentagem da quantidade de vitoria dos úsuarios</label>
									<input type="text" class="form-control" placeholder="0" value="<?php echo e($settings->requery_perc); ?>" name="requery_perc">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Porcentagem do valor/quantidade de aposta para o apostador</label>
									<input type="text" class="form-control" placeholder="0" value="<?php echo e($settings->requery_bet_perc); ?>" name="requery_bet_perc">
								</div>
								<div class="col-lg-4">
									<label>Trabalhos Automáticos</label>
									<select class="form-control" name="site_disable">
										<option value="0" <?php echo e(($settings->site_disable == 0) ? 'selected' : ''); ?>>Desligado</option>
										<option value="1" <?php echo e(($settings->site_disable == 1) ? 'selected' : ''); ?>>Ligado</option>
									</select>
								</div>
								<div class="col-lg-4">
									<label>ID para compartilhar</label>
									<input type="text" class="form-control" placeholder="1" value="<?php echo e($settings->repost_post_id); ?>" name="repost_post_id">
								</div>
							</div>
						</div>
						<div class="kt-section">
							<!--<div class="form-group row"> // COMENTADO PARA LIBERAR APOS ESTUDAR COMO FUNCIONA
								<div class="col-lg-4">
									<label>Qual a porcentagem de ganhos que o convidado recebe:</label>
									<input type="text" class="form-control" placeholder="Введите Porcentagem" value="<?php echo e($settings->ref_perc); ?>" name="ref_perc">
								</div>
								<div class="col-lg-4">
									<label>Qual o valor que o convidado recebe para a conta real</label>
									<input type="text" class="form-control" placeholder="Введите сумму" value="<?php echo e($settings->ref_sum); ?>" name="ref_sum">
								</div>
								<div class="col-lg-4">
									<label>Valor mínimo de retirada de da conta de referência:</label>
									<input type="text" class="form-control" placeholder="Введите сумму" value="<?php echo e($settings->min_ref_withdraw); ?>" name="min_ref_withdraw">
								</div>
							</div>-->
						</div>
						<div class="kt-section">
							<h3 class="kt-section__title">
								Outras configurações
							</h3>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Valor mínimo de depósito:</label>
									<input type="text" class="form-control" placeholder="Valor" value="<?php echo e($settings->min_dep); ?>" name="min_dep">
								</div>
								<div class="col-lg-4">
									<label>Quantidade de depósitos para realizar um saque:</label>
									<input type="text" class="form-control" placeholder="Valor" value="<?php echo e($settings->min_dep_withdraw); ?>" name="min_dep_withdraw">
								</div>
								<div class="col-lg-4">
									<label>Quanto fornecer do saldo depositado (Coeficiente DEPOSITO X SAQUE)::</label>
									<input type="text" class="form-control" placeholder="Valor" value="<?php echo e($settings->profit_koef); ?>" name="profit_koef">
								</div>
							</div>
						</div>
						<!--<div class="kt-section">
							<h3 class="kt-section__title">
								Настройки группы VK:
							</h3>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Ссылка на группу VK:</label>
									<input type="text" class="form-control" placeholder="https://vk.com/..." value="<?php echo e($settings->vk_url); ?>" name="vk_url">
								</div>
								<div class="col-lg-4">
									<label>Ссылка на сообщения группы VK:</label>
									<input type="text" class="form-control" placeholder="https://vk.com/im?media=&sel=..." value="<?php echo e($settings->vk_support_link); ?>" name="vk_support_link">
								</div>
								<div class="col-lg-4">
									<label>Сервисный ключ доступа приложения:</label>
									<input type="text" class="form-control" placeholder="1f27230c1f27230c1f27230c841..." value="<?php echo e($settings->vk_service_key); ?>" name="vk_service_key">
								</div>
							</div>
						</div>-->
						<!--<div class="kt-section">
							<h3 class="kt-section__title">
								Настройки платежной системы FreeKassa:
							</h3>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>ID Магазина FK:</label>
									<input type="text" class="form-control" placeholder="Fxxxxxx" value="<?php echo e($settings->fk_mrh_ID); ?>" name="fk_mrh_ID">
								</div>
								<div class="col-lg-4">
									<label>FK Secret 1:</label>
									<input type="text" class="form-control" placeholder="xxxxxxx" value="<?php echo e($settings->fk_secret1); ?>" name="fk_secret1">
								</div>
								<div class="col-lg-4">
									<label>FK Secret 2:</label>
									<input type="text" class="form-control" placeholder="xxxxxxx" value="<?php echo e($settings->fk_secret2); ?>" name="fk_secret2">
								</div>
							</div>-->
							<!--<div class="form-group row">
								<div class="col-lg-6">
									<label>FK Кошелек:</label>
									<input type="text" class="form-control" placeholder="Pxxxxxx" value="<?php echo e($settings->fk_wallet); ?>" name="fk_wallet">
								</div>
								<div class="col-lg-6">
									<label>FK API Key:</label>
									<input type="text" class="form-control" placeholder="xxxxxxx" value="<?php echo e($settings->fk_api); ?>" name="fk_api">
								</div>
							</div>
						</div>-->
						<!--<div class="kt-section">
							<h3 class="kt-section__title">
								Настройка комиссии Para retirada средств:
							</h3>
							<div class="form-group row">
								<div class="col-sm-1-5">
									<label>QIWI (+%)</label>
									<input type="text" class="form-control" name="qiwi_com_percent" value="<?php echo e($settings->qiwi_com_percent); ?>" placeholder="%">
									<label>QIWI (+руб)</label>
									<input type="text" class="form-control" name="qiwi_com_rub" value="<?php echo e($settings->qiwi_com_rub); ?>" placeholder="руб">
									<label>QIWI Мин. сумма</label>
									<input type="text" class="form-control" name="qiwi_min" value="<?php echo e($settings->qiwi_min); ?>" placeholder="Мин. сумма">
								</div>
								<div class="col-sm-1-5">
									<label>Yandex (+%)</label>
									<input type="text" class="form-control" name="yandex_com_percent" value="<?php echo e($settings->yandex_com_percent); ?>" placeholder="%">
									<label>Yandex (+руб)</label>
									<input type="text" class="form-control" name="yandex_com_rub" value="<?php echo e($settings->yandex_com_rub); ?>" placeholder="руб">
									<label>Yandex Мин. сумма</label>
									<input type="text" class="form-control" name="yandex_min" value="<?php echo e($settings->yandex_min); ?>" placeholder="Мин. сумма">
								</div>
								<div class="col-sm-1-5">
									<label>FkWallet (+%)</label>
									<input type="text" class="form-control" name="webmoney_com_percent" value="<?php echo e($settings->webmoney_com_percent); ?>" placeholder="%">
									<label>FkWallet (+руб)</label>
									<input type="text" class="form-control" name="webmoney_com_rub" value="<?php echo e($settings->webmoney_com_rub); ?>" placeholder="руб">
									<label>FkWallet Мин. сумма</label>
									<input type="text" class="form-control" name="webmoney_min" value="<?php echo e($settings->webmoney_min); ?>" placeholder="Мин. сумма">
								</div>
								<div class="col-sm-1-5">
									<label>Payeer (+%)</label>
									<input type="text" class="form-control" name="payeer_com_percent" value="<?php echo e($settings->payeer_com_percent); ?>" placeholder="%">
									<label>Payeer (+руб)</label>
									<input type="text" class="form-control" name="payeer_com_rub" value="<?php echo e($settings->payeer_com_rub); ?>" placeholder="руб">
									<label>Payeer Мин. сумма</label>
									<input type="text" class="form-control" name="payeer_min" value="<?php echo e($settings->payeer_min); ?>" placeholder="Мин. сумма">
							 	</div>
								<div class="col-sm-1-5">
									<label>VISA (+%)</label>
									<input type="text" class="form-control" name="visa_com_percent" value="<?php echo e($settings->visa_com_percent); ?>" placeholder="%">
									<label>VISA (+руб)</label>
									<input type="text" class="form-control" name="visa_com_rub" value="<?php echo e($settings->visa_com_rub); ?>" placeholder="руб">
									<label>VISA Мин. сумма</label>
									<input type="text" class="form-control" name="visa_min" value="<?php echo e($settings->visa_min); ?>" placeholder="Мин. сумма">
								</div>
							</div>
						</div>-->
					</div>
					<div class="tab-pane" id="jackpot" role="tabpanel">
						<div class="form-group">
							<label>Comissão do jogo em %:</label>
							<input type="text" class="form-control" placeholder="digite uma porcentagem" value="<?php echo e($settings->jackpot_commission); ?>" name="jackpot_commission">
						</div>
						<?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="kt-section">
							<h3 class="kt-section__title">
								Sala "<?php echo e($r->title); ?>":
							</h3>
							<div class="form-group row">
								<div class="col-lg-3">
									<label>Cronômetro:</label>
									<input type="text" class="form-control" name="time_<?php echo e($r->name); ?>" value="<?php echo e($r->time); ?>" placeholder="Tempo">
								</div>
								<div class="col-lg-3">
									<label>Valor minimo de aposta:</label>
									<input type="text" class="form-control" name="min_<?php echo e($r->name); ?>" value="<?php echo e($r->min); ?>" placeholder="valor minimo de aposta">
								</div>
								<div class="col-lg-3">
									<label>Valor máximo da aposta:</label>
									<input type="text" class="form-control" name="max_<?php echo e($r->name); ?>" value="<?php echo e($r->max); ?>" placeholder="Valor máximo da Aposta">
								</div>
								<div class="col-lg-3">
									<label>Quantidade de apostas máximas por jogador:</label>
									<input type="text" class="form-control" name="bets_<?php echo e($r->name); ?>" value="<?php echo e($r->bets); ?>" placeholder="Quantidade de apostas máximas por jogador">
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<div class="tab-pane" id="wheel" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-4">
								<label>Cronômetro:</label>
								<input type="text" class="form-control" placeholder="Таймер" value="<?php echo e($settings->wheel_timer); ?>" name="wheel_timer">
							</div>
							<div class="col-lg-4">
								<label>Valor minimo de aposta:</label>
								<input type="text" class="form-control" placeholder="valor" value="<?php echo e($settings->wheel_min_bet); ?>" name="wheel_min_bet">
							</div>
							<div class="col-lg-4">
								<label>Valor máximo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor" value="<?php echo e($settings->wheel_max_bet); ?>" name="wheel_max_bet">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="crash" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-4">
								<label>Cronômetro:</label>
								<input type="text" class="form-control" placeholder="Таймер" value="<?php echo e($settings->crash_timer); ?>" name="crash_timer">
							</div>
							<div class="col-lg-4">
								<label>Valor mínimo da aposta:</label>
								<input type="text" class="form-control" placeholder="Quantidade mínima" value="<?php echo e($settings->crash_min_bet); ?>" name="crash_min_bet">
							</div>
							<div class="col-lg-4">
								<label>Valor máximo da aposta:</label>
								<input type="text" class="form-control" placeholder="Valor da Aposta" value="<?php echo e($settings->crash_max_bet); ?>" name="crash_max_bet">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="pvp" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-4">
								<label>Comissão da casa em %:</label>
								<input type="text" class="form-control" placeholder="valor da comissão em %" value="<?php echo e($settings->flip_commission); ?>" name="flip_commission">
							</div>
							<div class="col-lg-4">
								<label>Valor mínimo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor da aposta" value="<?php echo e($settings->flip_min_bet); ?>" name="flip_min_bet">
							</div>
							<div class="col-lg-4">
								<label>Valor máximo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor da aposta" value="<?php echo e($settings->flip_max_bet); ?>" name="flip_max_bet">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="battle" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-3">
								<label>Cronômetro:</label>
								<input type="text" class="form-control" placeholder="tempo" value="<?php echo e($settings->battle_timer); ?>" name="battle_timer">
							</div>
							<div class="col-lg-3">
								<label>Valor mínimo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor mínimo" value="<?php echo e($settings->battle_min_bet); ?>" name="battle_min_bet">
							</div>
							<div class="col-lg-3">
								<label>Valor máximo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor máximo da aposta" value="<?php echo e($settings->battle_max_bet); ?>" name="battle_max_bet">
							</div>
							<div class="col-lg-3">
								<label>Comissão da casa em%:</label>
								<input type="text" class="form-control" placeholder="comissão em %" value="<?php echo e($settings->battle_commission); ?>" name="battle_commission">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="dice" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Valor mínimo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor da aposta" value="<?php echo e($settings->dice_min_bet); ?>" name="dice_min_bet">
							</div>
							<div class="col-lg-6">
								<label>valor máximo da Aposta:</label>
								<input type="text" class="form-control" placeholder="Valor da Aposta" value="<?php echo e($settings->dice_max_bet); ?>" name="dice_max_bet">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="hilo" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-3">
								<label>Cronômetro:</label>
								<input type="text" class="form-control" placeholder="Таймер" value="<?php echo e($settings->hilo_timer); ?>" name="hilo_timer">
							</div>
							<div class="col-lg-3">
								<label>Valor mínimo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor da aposta" value="<?php echo e($settings->hilo_min_bet); ?>" name="hilo_min_bet">
							</div>
							<div class="col-lg-3">
								<label>Valor máximo da Aposta:</label>
								<input type="text" class="form-control" placeholder="Valor da Aposta" value="<?php echo e($settings->hilo_max_bet); ?>" name="hilo_max_bet">
							</div>
							<div class="col-lg-3">
								<label>Número de apostas para 1 Jogadorа:</label>
								<input type="text" class="form-control" placeholder="valor" value="<?php echo e($settings->hilo_bets); ?>" name="hilo_bets">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tower" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-3">
								<label>Valor mínimo da aposta:</label>
								<input type="text" class="form-control" placeholder="valor da aposta" value="<?php echo e($settings->tower_min_bet); ?>" name="tower_min_bet">
							</div>
							<div class="col-lg-3">
								<label>Valor máximo da Aposta:</label>
								<input type="text" class="form-control" placeholder="Valor da Aposta" value="<?php echo e($settings->tower_max_bet); ?>" name="tower_max_bet">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="fake" role="tabpanel">
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Quantidade mínima
 para apostas bots:</label>
								<input type="text" class="form-control" placeholder="Quantidade mínima
 ставки для фейка" value="<?php echo e($settings->fake_min_bet); ?>" name="fake_min_bet">
							</div>
							<div class="col-lg-6">
								<label>Valor Máximo da Aposta para os bots é de R$:</label>
								<input type="text" class="form-control" placeholder="Valor Máximo da Aposta é de R$ для фейка" value="<?php echo e($settings->fake_max_bet); ?>" name="fake_max_bet">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<button type="submit" class="btn btn-primary">Salvar</button>
					<button type="reset" class="btn btn-secondary">REDEFINIR TUDO</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/resources/views/admin/settings.blade.php */ ?>