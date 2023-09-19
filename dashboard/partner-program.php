<?php require "_header.php";?>
<main class="page">
	<?php require "_aside.php";?>
	<div class="container-fluid">
		<div class="page-header">
			<a href="#!" class="show-menu">
				<i class="icon-menu"></i>
			</a>
			<div class="page-title">Партнерская программа</div>
			<a href="./investments-new.php" class="btn btn-secondary">Инвестировать</a>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-xl-10 mx-auto">
					 <ul class="nav nav-pills flex-wrap" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true">Статус</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false">Приглашения</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-3" data-toggle="tab" href="#tab-item-3" role="tab" aria-controls="tab-item-3" aria-selected="false">Вознагрождения</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
          	<div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1">
          		<div class="alert mb-4">
          			Ваш статус <span class="status-badge">Агент</span> (5% от суммы инвестиций лично приглашенных инвесторов )
          		</div>
          		<div class="row align-items-center mb-5">
          			<div class="col-xl-4">
          				<img src="../assets/images/dashboard/partner-program.png" alt="" class="image-fluid">
          			</div>
          			<div class="col-xl-8">
          				<p class="text-size">
          					Мы поощряем инвесторов, которые помогают развивать наш фонд. Благодаря партнерской программе, каждый инвестор может получать дополнительный доход, рассказывая о нас своим друзьям и знакомым.
          				</p>
          				<p>
          					Достаточно указать ваш персональный код при регистрации или дать ссылку для регистрации с вашим кодом и вы начнете получать 5% от суммы каждой инвестиции ваших лично приглашенных знакомых.
          				</p>
          				<p>
          					Начать зарабатывать просто - напишите или расскажите своим друзьям о фонде, скопируйте ссылку <a href="#!" class="link--blue">https://finance.com/reg/262668162401</a> и пришлите им в любой мессенджер или соцсеть. Партнерские вознаграждения начислятся как только человек сделает инвестицию, заполнит профиль, пройдет верификацию, загрузит на сайт договор, подписанный с обеих сторон.     
          				</p>
          			</div>
          		</div>
          		<div class="">
          				<div class="row">
          			<div class="col-xl-6 mb-3 px-4">
          				<h3 class="mb-4">Ваш персональный код</h3>
          				<div class="input-group">
          					
          					<div class="d-flex">
          						<div class="form-control" id="copyInput1">262668162401</div>
          					 <div class="input-group-append">
									    <a id="copyAlert1" href="javascript:;" onclick="copyToClipboard('#copyInput1')"><i class="icon-copy"></i></a>
									  </div>
									  </div>
          					<label for="" class="copy-text-1 mb-0 mt-2 text-muted">Нажмите на кнопку <i class="icon-copy"></i> и код скопируется</label>
          					</div>
          			</div>
          			<div class="col-xl-6 mb-3 px-4">
          					<h3 class="mb-4">Регистрация инвесторов</h3>
          				<div class="input-group">
          					<div class="d-flex">
          					<div class="form-control" id="copyInput2">https://finance.com/reg/262668162401</div>
          					 <div class="input-group-append">
									    <a id="copyAlert2" href="javascript:;"onclick="copyToClipboard('#copyInput2')"><i class="icon-copy"></i></a>
									  </div>
									  </div>
          					<label for="" class="copy-text-2 mb-0 mt-2 text-muted">Нажмите на кнопку <i class="icon-copy"></i> и код скопируется</label>
          					</div>
          			</div>
          			<div class="col-xl-6 mb-3 px-4">
          					<h3 class="mb-4">Главная страница</h3>
          				<div class="input-group">
          					<div class="d-flex">
          					<div class="form-control" id="copyInput3">https://finance.com/index.html?r=262668162401</div>
          					 <div class="input-group-append">
									    <a id="copyAlert3" href="javascript:;" onclick="copyToClipboard('#copyInput3')"><i class="icon-copy"></i></a>
									  </div>
									  </div>
									  </div>
          					<label for="" class="copy-text-3 mb-0 mt-2 text-muted">Нажмите на кнопку <i class="icon-copy"></i> и код скопируется</label>
          			</div>
          			<div class="col-xl-6 mb-3 px-4">
          					<h3 class="mb-4">Вебинар</h3>
          				<div class="input-group">
          					<div class="d-flex">
          					<div class="form-control" id="copyInput4">https://finance.com/webinar?r=262668162401</div>
          					 <div class="input-group-append">
									    <a id="copyAlert4" href="javascript:;" onclick="copyToClipboard('#copyInput4')"><i class="icon-copy"></i></a>
									  </div>
									  </div>
          					<label for="" class="copy-text-4 mb-0 mt-2 text-muted">Нажмите на кнопку <i class="icon-copy"></i> и код скопируется</label>
          					</div>
          			</div>
          		</div>
          		</div>
          	</div>
          	<div class="tab-pane fade" id="tab-item-2" role="tabpanel" aria-labelledby="tab-item-2">
          			<table class="table">
										<thead>
											<tr>
												<th>Имя</th>
												<th>Город</th>
												<th>Телеграмм</th>
												<th>Верификация</th>
												<th>Договор</th>
												<th>Инвестиции</th>
												<th>Дата регистрации</th>
											</tr>
										</thead>
									</table>
          	</div>
          	<div class="tab-pane fade" id="tab-item-3" role="tabpanel" aria-labelledby="tab-item-3">
          		<table class="table">
										<thead>
											<tr>
												<th>Приглашенный</th>
												<th>Сумма</th>
												<th>Дата</th>
											</tr>
										</thead>
									</table>
          	</div>
          </div>
				</div>
			</div>
		</div>
		<div class="page-footer text-center">
			<div class="row align-items-center">
				<div class="col-xl-4">Общие и финансовые вопросы вы можете задавать нашим менеджерам в 
					<a href="tg://resolve?domain=" class="link--blue">@finance</a>
				</div>
				<div class="col-xl-4">Информация по 
					<a href="#/investments/return" class="link--blue d-block">возврату инвестиций</a>
				</div>
				<div class="col-xl-4">По техническим вопросам и верификации в 
					<a href="tg://resolve?domain=" class="link--blue">@finance_support</a>
				</div>
			</div>
		</div>
	</div>
</main>

          		<div class="alert alert-success" id="success-alert">
							  Скопировано в буфер обмена
							</div>
<?php require "_footer.php";?>
