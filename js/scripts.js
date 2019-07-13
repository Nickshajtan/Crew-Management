function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        total: t,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds
      };
}

function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector(".days span");
      var hoursSpan = clock.querySelector(".hours span");
      var minutesSpan = clock.querySelector(".minutes span");
      var secondsSpan = clock.querySelector(".seconds span");

      function updateClock() {
        var t = getTimeRemaining(endtime);

        if (t.total <= 0) {
          document.getElementById("clockdiv").className = "hidden";
          document.getElementById("deadline-messadge").className = "visible";
          clearInterval(timeinterval);
          return true;
        }

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
}
//Validate tel
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
jQuery(document).ready(function($) {
    //Modals
                $('.form__show').on('click',function(e){
                    e.preventDefault();
                    $('.modal__thanks').hide();
                    $('.overlay').addClass('d-block');
                    $('.modal__form').fadeIn( 100 ).addClass('show');
                });
                $(document).mouseup(function (e){ 
                        var div = $('.modal__form.show .value');
                        if (!div.is(e.target)&& div.has(e.target).length === 0) {
                            $('.modal__thanks').hide();
                            $('.overlay').removeClass('d-block');
                            $('.modal__form').hide();
                            $('.modal__form').removeClass('show');
                        }
                });
});
//Ajax
jQuery(document).ready(function($) {

var url = wnm_custom.template_url;
var home_url = wnm_custom.url
var ajaxurl = home_url + '/wp-admin/admin-ajax.php';

$("form.submit").submit(function (e){
        e.preventDefault();
        var name = $(this).find('input#name').val();
        var phone =   $(this).find('input#tel').val();
        var email =   $(this).find('input#email').val();
        var spamFirst = $(this).find('textarea[name=comment]').val();
        var spamSecond = $(this).find('textarea[name=message]').val();
        $.ajax({
                type: "POST",
                url: ajaxurl,
                data: {
                    action: 'ajax_order',
                    name: name,
                    phone: phone,
                    email: email,
                    spamFirst: spamFirst,
                    spamSecond: spamSecond
                },
                error: (function() {
                    $('.modal__thanks .value p.__header').html('Пожалуйста, проверьте правильность заполнение полей');
                    //$('.modal__thanks .value').append('<span class="close">x</span>');
                }),
                beforeSend: (function (){
                    $('.modal__form').hide();
                    $('#loader').css({
                        display: 'block'
                    });
                    $('.overlay').addClass('d-block');
                }),
                complete: (function (){
                    $('#loader').css({
                        display: 'none'
                    });
                })
            }).done(function (data) {
                $('input#name').val('')
                $('input#tel').val('');
                $('input#email').val('');
                $('.overlay').addClass('d-block');
                $('.modal__thanks .value p.__header').html('Спасибо, Ваша заявка принята!');
                $('.modal__thanks .value p.desc').html('Мы обязательно свяжемся с Вами для уточнения всех деталей.');
               // $('.modal__thanks .value').append('<span class="close">x</span>');
                $('.modal__thanks').fadeIn( 100 ).addClass('show');
                $(document).mouseup(function (e){ 
                        var div = $('.modal__thanks.show .value');
                        if (!div.is(e.target)&& div.has(e.target).length === 0) {
                            $('.overlay').removeClass('d-block');
                            $('.modal__thanks').hide();
                            $('.modal__thanks').removeClass('show');
                        }
                });    
        });
        return false;
    });
});