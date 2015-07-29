(function(window, $, undefined){
  var headerService = {
    attachEvent: function() {
    },
    loadPage: function() {
      var url = window.location;
      var element = $('#main-menu ul li a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
      });
      $('#main-menu').find('ul li').removeClass('active');
      element.parent('li').addClass('active');
    },
    init: function init() {
      this.attachEvent();
      this.loadPage();
    }
  };
  headerService.init();
  setlocale=function(locale){
    $.ajax({
      type:'post',
      url:'/setlocale',
      cache:false,
      data:{locale:locale},
      headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
      },
      success:function(data){
        console.log(data);
        window.location.reload();
      },
      error:function(xhr,type){
        console.log('error');
      }
    });
  };
}(window || this, jQuery, undefined));

