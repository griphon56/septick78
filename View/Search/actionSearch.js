$(document).ready(function()
{
  $('#s_search').keyup(function(event)
  {
    if(event.keyCode===13)
    {
      var s_search = $.trim($(this).val());
      if(s_search.length)
        window.location.href='search&s_search='+s_search;
    }
  });

  $('#search-icon').click(function()
  {
    var s_search = $.trim($('#s_search').val());
    if(s_search.length)
      window.location.href='search&s_search='+s_search;
  });

  $('#m-search-open-icon').click(function()
  {
    $('.search-input').toggleClass('m-search-open-input');
    $('.header-logo').toggle();
  });
});
