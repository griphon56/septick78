/**
 * Метод закрытия формы заказа.
 */
function close_order_form()
{
  $.ajax({
    type: 'POST',
    url: '/View/Cart/actionCartProduct.php',
    data: {
      action_cart: 'clear'
    },
    success: function(data)
    {
      // $('body').removeClass('fixed-wrapper');
      $('.js-cart-order-clearance').css('display','none');
    }
  });
}

/**
 * Метод сохранения заказа.
 *
 * @param o_sender
 */
function save_order(o_sender)
{
  $this = $(o_sender);

  var jq_container = $('.cart-order-clearance');
  var jq_email = jq_container.find('input[name="s_email"]');

  var s_name = jq_container.find('input[name="s_name"]').val();
  var s_phone = jq_container.find('input[name="s_phone"]').val();
  var s_email = jq_email.val();
  var s_address = jq_container.find('input[name="s_address"]').val();
  var is_agree = 0;
  if(jq_container.find('input[name="is_agree"]').is(':checked'))
    is_agree = 1;
  var k_delivery = jq_container.find('input[name="delivery"]:checked').val();

  if (validateEmail(s_email))
    jq_email.css('border-color','#cccbcb');
  else
  {
    jq_email.css('border-color','palevioletred');
    return;
  }

  if (s_name&&s_phone&&s_email&&s_address)
  {
    $.ajax({
      type: 'POST',
      url: '/View/Cart/actionCartProduct.php',
      data: {
        action_cart: 'save_order',
        is_agree: is_agree,
        k_delivery: k_delivery,
        s_address: s_address,
        s_email: s_email,
        s_name: s_name,
        s_phone: s_phone
      },
      success: function(data)
      {
        // $('body').removeClass('fixed-wrapper');
        $('.js-cart-order-clearance').css('display','none');
        // Уведомление об отправки сообщения.
        $('.notif').fadeIn().fadeOut(1500);
      }
    });
  }
  else
  {
    alert('Не все данные заполнены.');
  }
}