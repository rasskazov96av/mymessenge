<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отправление, пожалуйста подождите...</title>
	<meta http-equiv="refresh" content="3; url=http://mssg.gq"> <!-- Редирект на главную страницу -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="user-card.css">
  <link rel="stylesheet" href="form.css">
  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '226662998282054');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=226662998282054&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
  <script>
  fbq('track', 'Lead');
</script>
<div class="page-wrapper">

    <div class="card-wrapper">
      <!-- Intro -->
      <!-- Add class "img", if background image set, or gradients classes -->
          <div class="card-intro-bg img">
      <img src="img/2.jpg" alt="Background image">
    </div>
          <div class="card-wrapper-inner">
        <div class="card-intro">
          <div class="card-intro-content">
            <h2 class="slideDown">Заполните форму</h2>
            <p class="slideDown">Я свяжусь с Вами в ближайшее время!</p>
          </div>
        </div>
        <!-- Messengers card -->
        <div class="mssgme-card slideDown">
          <div class="mssgme-card-header clearfix">
            <div class="mssgme-card-header-photo">
              <img src="img/1.jpg" alt="Alexandr  Rasskazov">
            </div>
            <div class="mssgme-card-header-content">
              <div class="mssgme-card-header-content-container">
                <h1>Alexandr  Rasskazov</h1>
                <p>SMM instagram</p>
              </div>
            </div>
          </div>
          <!-- Count filled buttons in loop and add class to list (messengers-count-3 for example) -->
      Спасибо!<br>Я свяжусь с Вами в ближайшее время!
        
    </div>
  <script>
    try {
    function setBackgroundHeight() {
      var introHeight = document.querySelector('.card-intro').clientHeight;
      document.querySelector('.card-intro-bg').style.height = introHeight + 'px';
    }

    function fadeIntro() {
      var cardIntro = document.querySelector('.card-intro');
      
        if ( document.querySelector('.card-wrapper-inner').scrollTop > 0 &&  document.querySelector('.card-wrapper-inner').scrollTop < cardIntro.clientHeight ) {
            var opacity = document.querySelector('.card-wrapper-inner').scrollTop/cardIntro.clientHeight;

            if ( opacity <= 1 ) {
              cardIntro.style.opacity = 1 - opacity;
              cardIntro.style.transform = 'translateY(' + opacity*50 + 'px)';
            }
        } else if ( document.querySelector('.card-wrapper-inner').scrollTop <= 0 ) {
          cardIntro.style.opacity = 1;
          cardIntro.style.transform = 'translateY(0)';
        } else {
            cardIntro.style.opacity = 0;
        }
    }

    function toggleButtons(){
      var buttonsList = document.querySelector('.mssgme-links-list'),
        toggleBtn = document.querySelector('#expand_btns_btn'),
        moreText = toggleBtn.getAttribute('data-more-text'),
        lessText = toggleBtn.getAttribute('data-less-text');

      if ( buttonsList.classList.contains('more') ) {
        buttonsList.classList.remove('more');
        toggleBtn.textContent = moreText;
      } else {
        buttonsList.classList.add('more');
        toggleBtn.textContent = lessText;
      }
    }

    // No bounce background function
    function noBounceBg() {
      if ( window.outerWidth < 768 ) {
        document.querySelector('body').insertBefore( document.querySelector('.card-intro-bg'), document.querySelector('body').firstChild );
      } else {
        document.querySelector('.card-wrapper').insertBefore( document.querySelector('.card-intro-bg'), document.querySelector('.card-wrapper').firstChild );
      }
    }

    // Animate elements function
    function animateCardElements() {
      setTimeout(function(){
        document.querySelector('.card-intro-bg').classList.add('animated');
        [].map.call(document.querySelectorAll('.slideDown'), function(el) {
          el.classList.add('animated');
        });
      }, 100);
    }

    // On load
    document.addEventListener('DOMContentLoaded', function(){
      setBackgroundHeight();
      noBounceBg();
      animateCardElements();
    });

    // On resize
    window.addEventListener('resize', function(){
      setBackgroundHeight();
      noBounceBg();
    });

    // On scroll
    document.querySelector('.card-wrapper-inner').onscroll = function() {
      fadeIntro();
    };


                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-91479185-5', 'auto');
      ga('send', 'pageview');
                (function(w,d,s,u,m,t){
                w[t]=w[t]||[];w[m]=w[m]||function(){w[t].push(arguments)};
                var n=d.getElementsByTagName(s)[0];s=d.createElement('script');
                s.src=u;s.async=1;n.parentNode.insertBefore(s,n);
            })(window,document,'script','//a2.mssg.me/analytics.js','msa', 'msaTasks');

            msa('view', '192');

            var messengerList = document.querySelectorAll('.mssgme-card-messengers-list a');
            for (var i = 0; i < messengerList.length; i++) {
              messengerList[i].addEventListener('click', function(e) {
                var messenger = this.getAttribute('data-messenger');
                msa('click_messenger', '192', { category: messenger });
              });
            }

          var linkList = document.querySelectorAll('.mssgme-links-list a');
            for (var i = 0; i < linkList.length; i++) {
              linkList[i].addEventListener('click', function() {
                var linkUrl = this.getAttribute('data-url');
                msa('click_link', '192', { category: linkUrl });
              });
            }
    } catch (e) {
      if ('console' in window) console.error(e);
    }
  </script>
</body>
</html>

<?php
 	$name = $_POST['name']; // input name
 	$phone = $_POST['phone']; // input phone
  $text = $_POST['text']; // input text

	$message = "Новая заявка на бесплатное продвижение".PHP_EOL."Имя: ".$name.PHP_EOL."Телефон: ".$phone.PHP_EOL."instagram: ".$text;

	send(-92008175,$message); // id беседы с заказчиком

	function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => '20210a9446b28ffcae9f2fe44f6c840df9e4c9d75ecfaffd4103138457b376b667fc3576c2c949dc2764a',  
      'v' => '5.62',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
	}
?>
