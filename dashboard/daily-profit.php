<?php require "_header.php";?>

<main class="page">
  <?php require "_aside.php";?>

  <div class="container-fluid">
    <div class="page-header">
      <a href="#!" class="show-menu"><i class="icon-menu"></i></a>
      <div class="page-title">Наши ставки</div>
      <a href="#!" class="btn btn-secondary">Инвестировать</a>
    </div>
    <div class="content">
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <table class="table">
            <thead>
              <tr>
                <th>Дата</th>
                <th>Процент доходности</th>
                <th>Доходность</th>
              </tr>
            </thead>
          </table>
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

<?php require "_footer.";?>
