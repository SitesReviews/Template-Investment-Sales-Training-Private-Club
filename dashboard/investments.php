		<?php require "_header.php";?>
		<main class="page">
			<?php require "_aside.php";?>
			<div class="container-fluid">
				<div class="page-header">
					<a href="#!" class="show-menu">
						<i class="icon-menu"></i>
					</a>
					<div class="page-title">Инвестиции</div>
			<a href="./investments-new.php" class="btn btn-secondary">Инвестировать</a>
				</div>
				<div class="content">
					<div class="row">
						<div class="col-xl-10 mx-auto">
							<ul class="nav nav-pills" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true">
		                Активные
		              </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="tab-2" data-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false">
		                Запуск
		              </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="tab-3" data-toggle="tab" href="#tab-item-3" role="tab" aria-controls="tab-item-3" aria-selected="false">
		                Отчёт
		              </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="tab-4" data-toggle="tab" href="#tab-item-4" role="tab" aria-controls="tab-item-4" aria-selected="false">
		                Вопросы
		              </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="tab-5" data-toggle="tab" href="#tab-item-5" role="tab" aria-controls="tab-item-5" aria-selected="false">
		                Условия
		              </a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1">
									<div class="mt-5 text-center">
											<picture>
				               <source type="image/webp" srcset="../assets/images/dashboard/webp/invest-tab.webp">
				               <img loading="lazy" class="image-fluid" src="../assets/images/dashboard/invest-tab.png" alt="Посмотрите видео">
				              </picture>
										<h1 class="article-title mt-5">Больше инвестиций - больше доход!</h1>
										<a href="#!" class="btn btn-big btn-secondary">Инвестировать</a>
									</div>
									<div class="hero-parallax mouse-parallax">
										<span class="polygon polygon-1"></span>
										<span class="polygon polygon-2"></span>
										<span class="polygon polygon-3"></span>
										<span class="polygon polygon-4"></span>
										<span class="polygon polygon-5"></span>
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
								<div class="tab-pane fade" id="tab-item-3" role="tabpanel" aria-labelledby="tab-item-3">
									<table class="table">
										<thead>
											<tr>
												<th>Отчетная дата</th>
												<th>Сумма инвестиции</th>
												<th>Процент дохода</th>
												<th>Общая доходность фонда</th>
												<th>Распределение прибыли инвестору</th>
												<th>Прибыль инвестора</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="tab-pane fade" id="tab-item-4" role="tabpanel" aria-labelledby="tab-item-4">
									<div class="row accordion" id="accordionFaq">
										<div class="col-xl-6">
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-1" role="button" aria-expanded="false" aria-controls="faqItem-1">
		                      Как стать инвестором фонда?
		                    </a>
												<p class="faq-text collapse" id="faqItem-1" data-parent="#accordionFaq">
		                      Для того, чтобы стать инвестором, вам необходимо зарегистрировать личный кабинет на нашем сайте, подтвердить свою учетную запись (это нужно для заключения договора) и инвестировать не менее 100000р. Затем вам
		                      необходимо скачать и распечатать договор, ознакомиться с условиями и, в случае согласия, поставить подпись на каждом листе. Далее, подписанный документ вы загружаете в специальный раздел личного кабинета. Наши юристы
		                      проверят документ в течение 1-2 дней, после чего вам придет сообщение о принятии договора фондом. После запуска инвестиции в работу вы начнете получать прибыль.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-2" role="button" aria-expanded="false" aria-controls="faqItem-2">
		                      Почему инвестирование идет через криптовалюту?
		                    </a>
												<p class="faq-text collapse" id="faqItem-2" data-parent="#accordionFaq">
		                      Tether (USDT) - криптовалютный токен, выпущенный компанией Tether Limited и обеспеченный запасами долларов США. Это безопасный, ликвидный и неволатильный финансовый инструмент. Его перемещение по миру происходит
		                      моментально в любом количестве. 1 USDT эквивалентен 1 доллару США.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-3" role="button" aria-expanded="false" aria-controls="faqItem-3">
		                      Есть ли какие-либо комиссии для инвестора?
		                    </a>
												<p class="faq-text collapse" id="faqItem-3" data-parent="#accordionFaq">
		                      При инвестировании через криптовалюту USDT комиссия составляет 0%.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-4" role="button" aria-expanded="false" aria-controls="faqItem-4">
		                      Когда я получу первую прибыль?
		                    </a>
												<p class="faq-text collapse" id="faqItem-4" data-parent="#accordionFaq">
		                      Деньги начнут работать в течение 15 рабочих дней после инвестирования. Первую прибыль вы получите на второй месяц, а распределение прибыли произойдет в соотношении 25/75 в пользу фонда. С последующих месяцев
		                      распределение прибыли будет в соотношении 50/50%
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-5" role="button" aria-expanded="false" aria-controls="faqItem-5">
		                      Почему деньги запускаются в работу в течение 15 рабочих дней?
		                    </a>
												<p class="faq-text collapse" id="faqItem-5" data-parent="#accordionFaq">
		                      Процесс нашей работы прозрачен. Для запуска инвестиции в работу нам требуется время для обработки, доставки и размещения денежных средств.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-6" role="button" aria-expanded="false" aria-controls="faqItem-6">
		                      Почему в первый месяц распределение прибыли 25/75?
		                    </a>
												<p class="faq-text collapse" id="faqItem-6" data-parent="#accordionFaq">
		                      Также как и у любой другой организации, у фонда имеются определенные расходы. Одними из них являются выплаты вознаграждений партнерам и людям, которые рекомендуют наш фонд другим инвесторам. Такое простое правило
		                      позволяет восполнить затраты, не трогая тело инвестиции.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-7" role="button" aria-expanded="false" aria-controls="faqItem-7">
		                      На какой срок можно инвестировать?
		                    </a>
												<p class="faq-text collapse" id="faqItem-7" data-parent="#accordionFaq">
		                      Все ваши инвестиции бессрочны. Вы можете забрать деньги после 2-х месяцев работы.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-8" role="button" aria-expanded="false" aria-controls="faqItem-8">
		                      Минимальный и максимальный размер инвестиций
		                    </a>
												<p class="faq-text collapse" id="faqItem-8" data-parent="#accordionFaq">
		                      Минимальная сумма инвестирования составляет 100000р. Максимальная сумма не установлена.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-9" role="button" aria-expanded="false" aria-controls="faqItem-9">
		                      Как я буду получать свою прибыль?
		                    </a>
												<p class="faq-text collapse" id="faqItem-9" data-parent="#accordionFaq">
		                      По результатам каждого дня фонд определяет итоговую доходность и начисляет инвесторам прибыль. Для получения прибыли вам необходимо указать в личном кабинете реквизиты своей банковской карты, на которую вы желаете
		                      получать доход.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-21" role="button" aria-expanded="false" aria-controls="faqItem-21">
		                      Сколько я буду зарабатывать, если инвестирую 1 млн рублей?
		                    </a>
												<p class="faq-text collapse" id="faqItem-10" data-parent="#accordionFaq">
		                      При средней доходности в 35,8% в месяц общий доход с такой инвестиции составит 358 000 р за 1 месяц. Согласно условиям распределения прибыли, инвестор получит 50% от общей дохода , а это 179 000 рублей за 1 месяц. Для
		                      сравнения, если бы инвестор положил 1 млн рублей на депозитный счет в банке, то такая прибыль была бы получена лишь за 3 года.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-10" role="button" aria-expanded="false" aria-controls="faqItem-10">
		                      Должен ли я буду отчитаться перед налоговой?
		                    </a>
												<p class="faq-text collapse" id="faqItem-10" data-parent="#accordionFaq">
		                      Фонд не является налоговым агентом, поэтому подача декларации и уплата НДФЛ это ответственность и желание каждого инвестора.
		                    </p>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-11" role="button" aria-expanded="false" aria-controls="faqItem-11">
		                      Есть ли разница, где и через кого инвестировать?
		                    </a>
												<p class="faq-text collapse" id="faqItem-11" data-parent="#accordionFaq">
		                      Нет, наши условия абсолютно идентичны для всех.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-12" role="button" aria-expanded="false" aria-controls="faqItem-12">
		                      Почему фонд вправе отказать любому инвестору в инвестициях?
		                    </a>
												<p class="faq-text collapse" id="faqItem-12" data-parent="#accordionFaq">
		                      Фундаментом фонда являются наша философия и ценности. Мы работаем только с теми людьми, которые разделяют наши принципы.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-13" role="button" aria-expanded="false" aria-controls="faqItem-13">
		                      Как происходит распределение прибыли? Куда и как часто?
		                    </a>
												<p class="faq-text collapse" id="faqItem-13" data-parent="#accordionFaq">
		                      Вы можете ежедневно отслеживать результаты работы фонда в своем личном кабинете. На данный момент распределение прибыли осуществляется 1 раз в месяц на указанную вами карту. В ближайшее время мы реализуем ежедневное
		                      начисление прибыли.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-14" role="button" aria-expanded="false" aria-controls="faqItem-14">
		                      Где можно посмотреть доходность фонда за прошлые периоды?
		                    </a>
												<p class="faq-text collapse" id="faqItem-14" data-parent="#accordionFaq">
		                      Вы можете это сделать на странице "Инвестировать" в личном кабинете.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-15" role="button" aria-expanded="false" aria-controls="faqItem-15">
		                      Какой процент доходности? Гарантируете ли вы доходность?
		                    </a>
												<p class="faq-text collapse" id="faqItem-15" data-parent="#accordionFaq">
		                      Мы не даем никаких гарантий по доходности, но можем отталкиваться от результатов прошлых месяцев. Среднее значение за последние 6 месяцев составило 35,8% за каждый месяц.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-16" role="button" aria-expanded="false" aria-controls="faqItem-16">
		                      Можно ли увеличить свою текущую инвестицию?
		                    </a>
												<p class="faq-text collapse" id="faqItem-16" data-parent="#accordionFaq">
		                      Да, можно. Для этого вам необходимо создать новую инвестицию. После того как она запустится в фонде и отработает первый месяц, все ваши инвестиции объединятся в одну.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-17" role="button" aria-expanded="false" aria-controls="faqItem-17">
		                      Могу ли я вывести все деньги?
		                    </a>
												<p class="faq-text collapse" id="faqItem-17" data-parent="#accordionFaq">
		                      Да, конечно. Вы можете вывести инвестицию после того как она отработает 2 месяца.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-18" role="button" aria-expanded="false" aria-controls="faqItem-18">
		                      Могу ли я реинвестировать инвестицию?
		                    </a>
												<p class="faq-text collapse" id="faqItem-18" data-parent="#accordionFaq">
		                      Нет, так как фонд полностью распределяет прибыль инвесторов по указанным банковским реквизитам. Если вы желаете реинвестировать прибыль, то вам необходимо создать новую инвестицию от 100 000р.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-19" role="button" aria-expanded="false" aria-controls="faqItem-19">
		                      Какой процент за вывод инвестиций?
		                    </a>
												<p class="faq-text collapse" id="faqItem-19" data-parent="#accordionFaq">
		                      На данный момент при выводе денег на вашу карту взимается комиссия в 5%. Это комиссия оператора, который в автоматическом режиме обрабатывает все заявки и осуществляет переводы инвесторам.
		                    </p>
											</div>
											<div class="faq-item">
												<a class="faq-title" data-toggle="collapse" href="#faqItem-20" role="button" aria-expanded="false" aria-controls="faqItem-20">
		                      Сколько USDT мне нужно купить?
		                    </a>
												<p class="faq-text collapse" id="faqItem-20" data-parent="#accordionFaq">
		                      Когда вы откроете страницу "Инвестировать" в личном кабинете и введете сумму инвестиции, кабинет автоматически сделает расчёт необходимой суммы для покупки.
		                    </p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tab-item-5" role="tabpanel" aria-labelledby="tab-item-5">
									<div class="row align-items-center">
										<div class="col-xl-5 text-center">
											<picture>
				               <source type="image/webp" srcset="../assets/images/dashboard/webp/affiliate.webp">
				               <img loading="lazy" class="image-fluid" src="../assets/images/dashboard/affiliate.png" alt="Посмотрите видео">
				              </picture>
											</div>
											<div class="col-xl-7">
												<h2 class="article-title mb-3">
		                            Условия инвестирования
		                        </h2>
												<ul class="check-list">
													<li class="py-2 d-flex">
														<i class="icon-check mr-3 font-weight-bold text-size"></i>
														<span>Минимальная сумма инвестирования — 100000 рублей.</span>
													</li>
													<li class="py-2 d-flex">
														<i class="icon-check mr-3 font-weight-bold text-size"></i>
														<span>Инвестировать можно суммы, кратные 50000 рублей (начиная с минимальной суммы 100000)</span>
													</li>
													<li class="py-2 d-flex">
														<i class="icon-check mr-3 font-weight-bold text-size"></i>
														<span>Срок запуска инвестиций - до 15 рабочих дней с момента инвестирования.</span>
													</li>
													<li class="py-2 d-flex">
														<i class="icon-check mr-3 font-weight-bold text-size"></i>
														<span>Комиссия на ввод через криптовалюту USDT: 0%</span>
													</li>
													<li class="py-2 d-flex">
														<i class="icon-check mr-3 font-weight-bold text-size"></i>
														<span>Первый месяц после запуска инвестиции в работу распределение прибыли всегда независимо от суммы - 25% инвестору / 75% фонду.</span>
													</li>
													<li class="py-2 d-flex">
														<i class="icon-check mr-3 font-weight-bold text-size"></i>
														<span>Через месяц распределение прибыли для всех инвестиций независимо от суммы будет 50% инвестору / 50% фонду</span>
													</li>
												</ul>
											</div>
										</div>
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
		