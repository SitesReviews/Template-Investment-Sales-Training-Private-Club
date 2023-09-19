<?php require "_header.php";?>
<main class="page">
	<?php require "_aside.php";?>
	<div class="container-fluid">
		<div class="page-header">
			<a href="#!" class="show-menu">
				<i class="icon-menu"></i>
			</a>
			<div class="page-title">Финансы</div>
			<a href="./investments-new.php" class="btn btn-secondary">Инвестировать</a>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-xl-10 mx-auto">
					 <ul class="nav nav-pills flex-wrap" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true">Реквизиты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false">История</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
          	<div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1">
          		<div class="mb-5">
          			<h2 class="article-title">Уважаемые инвесторы</h2>
								<p class="text-size mb-0">
									Просим вас ввести платежные реквизиты для распределения прибыли.
								</p>
          		</div>
								<div class="row">
									<div class="col-lg-6">
										<form action="">
									<div class="input-group">
										<label for="">Карта</label>
										<select class="form-control" id="select">
											<option>Выберите банк</option>
											<option>ВТБ</option>
												<option>Тинькоф</option>
													<option>Другой банк</option>
										</select>
								</div>
								<div class="input-group">
										<label for="">Номер карты (цифры, без пробелов)</label>
										<input type="text" class="form-control" placeholder="0000000000000000">
								</div>
								</form>
									</div>
								</div>
          	</div>
          	<div class="tab-pane fade" id="tab-item-2" role="tabpanel" aria-labelledby="tab-item-2">
          			<table class="table">
										<thead>
											<tr>
												<th>Сумма</th>
												<th>Дата запуска</th>
												<th>Статус</th>
												<th>Дата заявки</th>
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
<?php require "_footer.php";?>
