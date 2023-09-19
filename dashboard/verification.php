<?php require "_header.php";?>
<main class="page">
  <?php require "_aside.php";?>
  <div class="container-fluid">
    <div class="page-header">
      <a href="#!" class="show-menu"><i class="icon-menu"></i></a>
      <div class="page-title">Верификация</div>
			<a href="./investments-new.php" class="btn btn-secondary">Инвестировать</a>
    </div>
    <div class="content">
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <ul class="nav nav-pills flex-wrap" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true">Шаги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false">Договор</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-3" data-toggle="tab" href="#tab-item-3" role="tab" aria-controls="tab-item-3" aria-selected="false">Вопросы</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1">
              <ul class="steps">
                <li>
                  <div>
                    <h3><a href="./profile.php">Заполнить паспортные данные в профиле</a></h3>
                    <p class="mb-0">
                      Вам необходимо заполнить паспортные данные в профиле точно так, как написано в паспорте. Мы будем сверять фамилию, имя, отчество, серию и номер паспорта, кем выдано и дату выдачи, адрес регистрации (прописки), страну,
                      город. Эти данные нам необходимы для корректного заполнения договора. Как только вы заполните полностью профиль, автоматически перейдем ко 2 шагу.
                    </p>
                  </div>
                </li>
                <li class="step--check">Подключить телеграм-бота</li>
                <li class="step--off">Фотография основного разворота своего паспорта на фоне своего лица (селфи)</li>
                <li class="step--off">Фотография страницы паспорта с указанием места вашей регистрации на фоне своего лица (селфи)</li>
                <li class="step--off">Верификация ваших данных</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="tab-item-2" role="tabpanel" aria-labelledby="tab-item-2">
              <div class="row">
                <div class="col-xl-6">
                  <h2 class="article-title mb-3">Вы можете ознакомиться с договорами</h2>
                  <p class="text-size mb-5">Эти договоры не для подписи, а для ознакомления. Их не надо распечатывать. Нужно дождаться, когда мы их сами подпишем и подготовим для печати.</p>
                  <div class="box-border mb-4">
                    <a href="#!" class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Договор на русском языке</h4>
                        <p class="mb-0 small">Скачать в формате PDF</p>
                      </div>
                      <i class="icon-download"></i>
                    </a>
                  </div>
                  <div class="box-border mb-4">
                    <a href="#!" class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Договор на английском языке</h4>
                        <p class="mb-0 small">Скачать в формате PDF</p>
                      </div>
                      <i class="icon-download"></i>
                    </a>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="text-size alert mb-4">
                    <h3>Внимание!</h3>
                    <p class="mb-0">
                      Пока вы не отправите нам подписанный с вашей стороны договор, у вас не будет возможности получать свою прибыль.
                    </p>
                  </div>
                  <div class="px-3">
                    <p>
                      После того, как вы станете инвестором и пройдёте верификацию, мы в течение нескольких дней сформируем договор, о чем вас уведомит наш помощник Телеграм-бот.
                    </p>
                    <p>
                      Как только это случится, ниже появятся кнопки, где вы сможете скачать договор, заполненный вашими персональными данными из профиля, с нашими печатями и подписью, в виде PDF-файла.
                    </p>
                    <p>
                      Мы постарались сделать процесс максимально удобным и быстрым, вам будет доступен уже заполненный и готовый к печати файл. Следующим шагом вам необходимо будет распечатать его на принтере, подписать, отсканировать его и
                      загрузить скан-копии каждой страницы обратно на сайт.
                    </p>
                  </div>
                </div>
                <div class="col-xl-12 mt-5">
                  <div class="alert">
                    <h3 class="mb-0">Договор еще не сформировали</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-item-3" role="tabpanel" aria-labelledby="tab-item-3">
              <div class="row accordion" id="accordionFaq">
                <div class="col-xl-6">
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-1" role="button" aria-expanded="false" aria-controls="faqItem-1">
                      Что такое верификация?
                    </a>
                    <p class="faq-text collapse" id="faqItem-1" data-parent="#accordionFaq">
                      Верификация - это подтверждение вашей личности. Верификация нужна для заключения договора инвестирования и распределения прибыли.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-2" role="button" aria-expanded="false" aria-controls="faqItem-2">
                      Как я могу быть уверен в конфиденциальности предоставленной мною личной информации?
                    </a>
                    <p class="faq-text collapse" id="faqItem-2" data-parent="#accordionFaq">
                      Вся предоставленная вами информация конфедициальна и хранится у нас в зашифрованом виде. Мы не передаём ее третьем лицам.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-3" role="button" aria-expanded="false" aria-controls="faqItem-3">
                      В чем заключается процесс верификации?
                    </a>
                    <p class="faq-text collapse" id="faqItem-3" data-parent="#accordionFaq">
                      Вам необходимо заполнить паспортные данные в профиле, подключить телеграм-бота и приложить фотографии паспорта в личном кабинете.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-4" role="button" aria-expanded="false" aria-controls="faqItem-4">
                      Как понять, что документы успешно загружены и верификация пройдена?
                    </a>
                    <p class="faq-text collapse" id="faqItem-4" data-parent="#accordionFaq">
                      У вас появится статус "верифицирован" в личном кабинете.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-5" role="button" aria-expanded="false" aria-controls="faqItem-5">
                      Если документы не загружаются?
                    </a>
                    <p class="faq-text collapse" id="faqItem-5" data-parent="#accordionFaq">
                      Проверьте качество интернет-соединения или попробуйте загрузить документы через другой браузер.
                    </p>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-6" role="button" aria-expanded="false" aria-controls="faqItem-6">
                      Сколько времени занимает процесс верификации?
                    </a>
                    <p class="faq-text collapse" id="faqItem-6" data-parent="#accordionFaq">
                      Обычно верификация занимает не более двух дней.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-7" role="button" aria-expanded="false" aria-controls="faqItem-6">
                      Что будет, если я не пройду верификацию?
                    </a>
                    <p class="faq-text collapse" id="faqItem-7" data-parent="#accordionFaq">
                      Если вы не пройдете верификацию, то не сможете скачать договор, подписанный с нашей стороны, а также вывести полученную прибыль.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-8" role="button" aria-expanded="false" aria-controls="faqItem-6">
                      Как мне подписать договор?
                    </a>
                    <p class="faq-text collapse" id="faqItem-8" data-parent="#accordionFaq">
                      Для подписания договора вам необходимо совершить инвестицию и пройти верификацию. После этого необходимо скачать подписанный с нашей стороны договор, распечатать его и поставить подпись на каждой странице. Далее,
                      подписанный уже обеими сторонами договор необходимо загрузить в разделе "Верификация"--> "Договор". Нужно отдельно загрузить скан-копию или фото каждой страницы договора.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-9" role="button" aria-expanded="false" aria-controls="faqItem-6">
                      Когда я смогу подписать договор?
                    </a>
                    <p class="faq-text collapse" id="faqItem-9" data-parent="#accordionFaq">
                      Вы сможете подписать договор после прохождения верификации и инвестирования.
                    </p>
                  </div>
                  <div class="faq-item">
                    <a class="faq-title" data-toggle="collapse" href="#faqItem-10" role="button" aria-expanded="false" aria-controls="faqItem-6">
                      Почему я подписываю договор после инвестирования?
                    </a>
                    <p class="faq-text collapse" id="faqItem-10" data-parent="#accordionFaq">
                      Это сделано для оптимизации процесса инвестирования и уменьшения срока идентификации договоров. Вы можете ознакомиться с шаблоном договора до отправки денежных средств.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-footer text-center">
      <div class="row align-items-center">
        <div class="col-xl-4">Общие и финансовые вопросы вы можете задавать нашим менеджерам в <a href="tg://resolve?domain=" class="link--blue">@finance</a></div>
        <div class="col-xl-4">Информация по <a href="#/investments/return" class="link--blue d-block">возврату инвестиций</a></div>
        <div class="col-xl-4">По техническим вопросам и верификации в <a href="tg://resolve?domain=" class="link--blue">@finance_support</a></div>
      </div>
    </div>
  </div>
</main>
<?php require "_footer.php";?>
