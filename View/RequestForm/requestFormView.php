<div class="container-fluid request-form contact-form">
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3 class="section-item">ОСТАВЬТЕ ЗАЯВКУ</h3>
        <form action="#" method="post" id="request-form" class="form-text-submit js-mail-form-request">
          <div class="row">
            <div class="col-6">
              <input type="text" placeholder="Имя"  name="s_name">
            </div>
            <div class="col-6">
              <input type="text" placeholder="Телефон" maxlength="15" name="s_phone">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="message-container">
                <textarea class="message" id="s_message"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="request-form-desc">
                <img src="<?=VIEW?>img/contactView/locked-padlock.png" alt="">
                <p>Мы гарантируем конфеденциальность ваших данных</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-5">
                <input type="submit" onclick="send_request(this); return false;" value="Отправить" class="btn">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 
</div> 