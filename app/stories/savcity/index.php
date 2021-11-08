<!doctype html>
<html ⚡>

<head>
  <meta charset="utf-8">
  <title>Code</title>
  <link rel="canonical" href="index.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }
  </style>
  <noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

  <style amp-custom>
    @keyframes pulse {
      from {
        transform: scale(1);
      }

      to {
        transform: scale(1.1);
      }
    }

    @font-face {
      font-family: 'TT-Norms';
      src: url('./assets/fonts/TTNorms-Light.ttf');
      font-style: normal;
      font-weight: 300;
    }

    @font-face {
      font-family: 'TT-Norms';
      src: url('./assets/fonts/TTNorms-Regular.ttf');
      font-style: normal;
      font-weight: 400;
    }

    @font-face {
      font-family: 'TT-Norms';
      src: url('./assets/fonts/TTNorms-Medium.ttf');
      font-style: normal;
      font-weight: 500;
    }

    @font-face {
      font-family: 'TT-Norms';
      src: url('./assets/fonts/TTNorms-Bold.ttf');
      font-style: normal;
      font-weight: 600;
    }

    /* button.i-amphtml-story-share-control.i-amphtml-story-button {
          display: none !important;
        } */

    body {
      font-family: 'TT-Norms', sans-serif;
      color: white;
    }

    h1 {
      font-size: 23px;
      font-weight: 300;
    }

    h2 {
      font-size: 20px;
      font-weight: 600;
    }

    .darken {
      background-color: black;
      opacity: .6;
    }

    .title-block {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      width: fit-content;
    }

    .title-block p {
      font-size: 10px;
      margin: 0;
    }

    .logo-block {
      display: flex;
      margin: 0 0 16px;
    }

    .logo-block__divider {
      height: 56px;
      width: 1px;
      background-color: #fff;
      margin: 0 16px;
    }

    .logo-block__moss {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 56px;
      width: 56px;
      border-radius: 50%;
      border: #fff 1px solid;
    }

    .subtitle-block {
      /* margin-bottom: 10px; */
    }

    .parameters-block {
      display: flex;
      flex-direction: column;
      width: fit-content;
      /* margin-bottom: 5px; */
    }

    .parameters-block span {
      align-self: flex-end;
      font-size: 8px;
    }

    .parameter-name {
      font-size: 9px;
      font-weight: 400;
      text-transform: uppercase;
    }

    .parameter-value {
      font-size: 22px;
      font-weight: 300;
      margin: 0;
    }

    .cta-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      z-index: 100;
    }

    .cta-container span {
      font-size: 12px;
      text-transform: uppercase;
    }

    .bottom-block {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      height: 97vh;
    }

    .cta-button {
      width: 50px;
      height: 50px;
      background: #FF5900 url('./assets/whatsapp-logo.svg') no-repeat center;
      background-size: 50%;
      border-radius: 50%;
      cursor: pointer;
      animation-name: pulse;
      animation-duration: 1s;
      animation-iteration-count: infinite;
      animation-direction: alternate;
    }

    .address {
      display: flex;
      font-size: 10px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .address div {
      display: flex;
      flex-direction: column;
      margin-right: 30px;
    }

    .extended-parameters-block {
      display: flex;
      height: 40vh;
    }

    .blueprint-block {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 40vh;
      width: 50%;
      background: rgba(0, 0, 0, .6);
      border-radius: 6px;
    }

    @media (min-height: 780px) and (orientation: portrait) {
      h1 {
        font-size: 28px;
      }

      h2 {
        font-size: 24px;
      }
    }
  </style>
</head>

<body>
  <amp-story standalone>


    <!-- PAGE 1 -->
    <amp-story-page id="page1" auto-advance-after="10s" class="amp-story-page">
      <amp-story-grid-layer template="fill">
        <amp-img src="./assets/1-slide-bg.jpg" width="1357" height="2234" layout="responsive" alt="">
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="fill">
        <div class="darken"></div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 40px 20px 0;">
        <div class="title-block" animate-in="fade-in" animate-in-duration="1.3s">
          <h1>CODE by MOSS СавСити</h1>
          <p>Больше, чем коворкинг</p>
        </div>
        <div class="logo-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.2s">
          <amp-img src="./assets/code-logo.svg" width="45" height="56" alt="CODE">
          </amp-img>
          <div class="logo-block__divider"></div>
          <div class="logo-block__moss">
            <amp-img src="./assets/moss.svg" width="35" height="18" alt="MOSS" style="position: relative; bottom: -2px;">
            </amp-img>
          </div>
        </div>
        <div class="subtitle-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.4s">
          <h2>ЖК “Савёловский Сити”</h2>
          <p class="parameter-value">1 160м<sup>2</sup></p>
        </div>
        <div class="parameters-block" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.5s">
          <p class="parameter-name">рабочих мест</p>
          <p class="parameter-value">от 4 до 200</p>
        </div>
        <div class="parameters-block" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.7s">
          <p class="parameter-name">стоимость за рабочее место</p>
          <p class="parameter-value">25 000 ₽/мес.</p>
          <span>без учета НДС</span>
        </div>
        <div class="parameters-block" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.9s">
          <p class="parameter-name">готовность</p>
          <p class="parameter-value">Август 2021</p>
        </div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 0 20px;">
        <div class="bottom-block">
          <div class="address" animate-in="fly-in-bottom" animate-in-duration="1s" animate-in-delay="1.1s">
            <div>
              <span>Москва</span>
              <span>Новодмитровская 2к7</span>
            </div>
            <div>
              <span>Дмитровская</span>
              <span>(5 мин.)</span>
            </div>
          </div>
          <div class="cta-container" animate-in="fly-in-bottom" animate-in-duration="1s" animate-in-delay="1.3s">
            <span>Получить презентацию</span>
            <amp-img src="./assets/right-arrow.svg" width="50" height="20" alt="">
            </amp-img>
            <a role="button" onclick="window.location='https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити'" class="cta-button"></a>
            <!-- <a href="https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити" class="cta-button"></a> -->
          </div>
        </div>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- PAGE 2 -->
    <amp-story-page id="page2" auto-advance-after="10s" class="amp-story-page">
      <amp-story-grid-layer template="fill">
        <amp-img src="./assets/2-slide-bg.jpg" width="1357" height="2234" layout="responsive" alt="">
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="fill">
        <div class="darken"></div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 30px 20px 0;">
        <div class="title-block" animate-in="fade-in" animate-in-duration="1.3s">
          <h1>CODE by MOSS СавСити</h1>
          <p>Больше, чем коворкинг</p>
        </div>
        <div class="logo-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.2s">
          <amp-img src="./assets/code-logo.svg" width="45" height="56" alt="CODE">
          </amp-img>
          <div class="logo-block__divider"></div>
          <div class="logo-block__moss">
            <amp-img src="./assets/moss.svg" width="35" height="18" alt="MOSS" style="position: relative; bottom: -2px;">
            </amp-img>
          </div>
        </div>
        <div class="subtitle-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.4s">
          <h2>Гостеприимство</h2>
          <p class="parameter-value">от MOSS Hospitality</p>
        </div>
        <p style="font-size: 14px; font-weight: 600; margin-bottom: 3vh;" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.6s">
          Коллаборация с MOSS Hospitality — залог
          особенных впечатлений для гостей CODE.
        </p>
        <p style="font-size: 11px;" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.8s">
          Уникальная атмосфера продумана до&nbsp;мельчайших деталей:</p>
        <ul style="margin-left: 6px; padding: 0; list-style: '- '; font-size: 11px;">
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.9s">интерьерные ароматы</li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1s">дизайнерская мебель</li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.1s">спешиалити-кофе</li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.2s">арт-объекты</li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.3s">тактильно приятные
            материалы
          </li>
        </ul>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 0 20px;">
        <div class="bottom-block" animate-in="fly-in-bottom" animate-in-duration="1s" animate-in-delay="1.5s">
          <div class="cta-container">
            <span>Получить презентацию</span>
            <amp-img src="./assets/right-arrow.svg" width="50" height="20" alt="">
            </amp-img>
            <a role="button" onclick="window.location='https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити'" class="cta-button"></a>
            <!-- <a href="https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити" class="cta-button"></a> -->
          </div>
        </div>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- PAGE 3 -->
    <amp-story-page id="page3" auto-advance-after="10s" class="amp-story-page">
      <amp-story-grid-layer template="fill">
        <amp-img src="./assets/3-slide-bg.jpg" width="1357" height="2234" layout="responsive" alt="">
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="fill">
        <div class="darken"></div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 30px 20px 0;">
        <div class="title-block" animate-in="fade-in" animate-in-duration="1.3s">
          <h1>CODE by MOSS СавСити</h1>
          <p>Больше, чем коворкинг</p>
        </div>
        <div class="logo-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.2s">
          <amp-img src="./assets/code-logo.svg" width="45" height="56" alt="CODE">
          </amp-img>
          <div class="logo-block__divider"></div>
          <div class="logo-block__moss">
            <amp-img src="./assets/moss.svg" width="35" height="18" alt="MOSS" style="position: relative; bottom: -2px;">
            </amp-img>
          </div>
        </div>
        <div class="subtitle-block" style="margin-bottom: 5vh;" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.4s">
          <h2>Консьерж-сервис</h2>
          <p class="parameter-value">уровня элитных отелей</p>
        </div>
        <ul style="margin-left: 6px; padding: 0; list-style: '- '; font-size: 11px; line-height: 1.56;">
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.6s">самые актуальные места в&nbsp;городе</li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.7s">интеграция в&nbsp;городские
            сообщества
          </li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.8s">транспортные и&nbsp;курьерские
            услуги
          </li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.9s">бронирование билетов,
            столиков
          </li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1s">организация праздников</li>
          <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.1s">помощь в&nbsp;решении
            разных вопросов
          </li>
        </ul>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 0 20px;">
        <div class="bottom-block" animate-in="fly-in-bottom" animate-in-duration="1s" animate-in-delay="1.3s">
          <div class="cta-container">
            <span>Получить презентацию</span>
            <amp-img src="./assets/right-arrow.svg" width="50" height="20" alt="">
            </amp-img>
            <a role="button" onclick="window.location='https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити'" class="cta-button"></a>
            <!-- <a href="https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити" class="cta-button"></a> -->
          </div>
        </div>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- PAGE 4 -->
    <amp-story-page id="page4" auto-advance-after="10s" class="amp-story-page">
      <amp-story-grid-layer template="fill">
        <amp-img src="./assets/4-slide-bg.jpg" width="1357" height="2234" layout="responsive" alt="">
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="fill">
        <div class="darken"></div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 0 20px;">
        <div class="bottom-block" animate-in="fly-in-bottom" animate-in-duration="1s" animate-in-delay="2.1s">
          <div class="cta-container">
            <span>Получить презентацию</span>
            <amp-img src="./assets/right-arrow.svg" width="50" height="20" alt="">
            </amp-img>
            <a role="button" onclick="window.location='https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити'" class="cta-button"></a>
            <!-- <a href="https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити" class="cta-button"></a> -->
          </div>
        </div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 30px 20px 0;">
        <div class="title-block" animate-in="fade-in" animate-in-duration="1.3s">
          <h1>CODE by MOSS СавСити</h1>
          <p>Больше, чем коворкинг</p>
        </div>
        <div class="logo-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.2s">
          <amp-img src="./assets/code-logo.svg" width="45" height="56" alt="CODE">
          </amp-img>
          <div class="logo-block__divider"></div>
          <div class="logo-block__moss">
            <amp-img src="./assets/moss.svg" width="35" height="18" alt="MOSS" style="position: relative; bottom: -2px;">
            </amp-img>
          </div>
        </div>
        <div class="subtitle-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.4s">
          <h2>Смарт-офис</h2>
          <p class="parameter-value">Всё включено</p>
        </div>
        <div class="extended-parameters-block">
          <div style="display: flex; flex-direction: column; justify-content: space-between; width: 50%;">
            <ul style="margin: 0 0 15px 0; padding: 0; list-style: none; font-size: 9px; font-weight: 600;">
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.6s">Отделка и мебель
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.7s">Эксплуатация</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.8s">Интернет</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.9s">Клининг</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1s">Переговорные</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.1s">Кофе-поинт</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.2s">NFC доступ 24/7
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.3s">Консьерж-сервис
              </li>
            </ul>
            <div>
              <div class="parameters-block" style="margin-bottom: 2vh;" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.5s">
                <p class="parameter-name" style="font-size: 8px;">площадь</p>
                <p class="parameter-value" style="font-size: 18px;">от 17,6 м<sup>2</sup></p>
              </div>
              <div class="parameters-block" style="margin-bottom: 2.5vh;" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.7s">
                <p class="parameter-name" style="font-size: 8px;">рабочих мест</p>
                <p class="parameter-value" style="font-size: 18px;">до 4</p>
              </div>
              <div class="parameters-block" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.9s">
                <p class="parameter-name" style="font-size: 8px;">стоимость в месяц</p>
                <p class="parameter-value" style="font-size: 18px;">100 т.р.</p>
                <span style="align-self: flex-start;">Без учета НДС</span>
              </div>
            </div>
          </div>
          <div class="blueprint-block" animate-in="fly-in-right" animate-in-duration="1s" animate-in-delay="0.6s" style="position: relative;">
            <a class="sidebar-control" animate-in="fade-in" animate-in-duration="1.2s" animate-in-delay="1s" role="button" style="display: flex; align-items: center; justify-content: center; position: absolute; top: calc(50% - 30px); left: calc(50% - 30px); width: 60px; height: 60px; background-color: white; color: black; font-size: 48px; border-radius: 50%; z-index: 10000">
              <amp-img src="./assets/zoom-icon.svg" width="24" height="28" alt="">
              </amp-img>
            </a>
            <amp-img class="image" src="./assets/blueprint-4.png" style="width: 60%;" width="191" height="431" layout="responsive" alt="">
            </amp-img>
          </div>
        </div>
      </amp-story-grid-layer>
      <amp-sidebar class="sidebar" style="background-color: rgba(0, 0, 0, .5);">
        <div class="sidebar-drawer">
          <a role="button" class="sidebar-close"></a>
          <iframe src="./slider.html" frameborder="0" style="width: 100%; height: 100%;"></iframe>
        </div>
      </amp-sidebar>
    </amp-story-page>

    <!-- PAGE 5 -->
    <amp-story-page id="page5" auto-advance-after="10s" class="amp-story-page">
      <amp-story-grid-layer template="fill">
        <amp-img src="./assets/5-slide-bg.jpg" width="1357" height="2234" layout="responsive" alt="">
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="fill">
        <div class="darken"></div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 0 20px;">
        <div class="bottom-block" animate-in="fly-in-bottom" animate-in-duration="1s" animate-in-delay="2.1s">
          <div class="cta-container">
            <span>Получить презентацию</span>
            <amp-img src="./assets/right-arrow.svg" width="50" height="20" alt="">
            </amp-img>
            <a role="button" onclick="window.location='https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити'" class="cta-button"></a>
            <!-- <a href="https://wa.me/+79250329522?text=Здравствуйте!%20Пришлите%20пожалуйста%20презентацию%20по%20проекту%20CODE%20by%20MOSS%20СавСити" class="cta-button"></a> -->
          </div>
        </div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" style="padding: 30px 20px 0;">
        <div class="title-block" animate-in="fade-in" animate-in-duration="1.3s">
          <h1>CODE by MOSS СавСити</h1>
          <p>Больше, чем коворкинг</p>
        </div>
        <div class="logo-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.2s">
          <amp-img src="./assets/code-logo.svg" width="45" height="56" alt="CODE">
          </amp-img>
          <div class="logo-block__divider"></div>
          <div class="logo-block__moss">
            <amp-img src="./assets/moss.svg" width="35" height="18" alt="MOSS" style="position: relative; bottom: -2px;">
            </amp-img>
          </div>
        </div>
        <div class="subtitle-block" animate-in="fade-in" animate-in-duration="1.3s" animate-in-delay="0.4s">
          <h2 style="font-size: 19px;">Корпоративный коворкинг</h2>
          <p class="parameter-value" style="font-size: 19px;">Всё включено</p>
        </div>
        <div class="extended-parameters-block">
          <div style="display: flex; flex-direction: column; justify-content: space-between; width: 50%;">
            <ul style="margin: 0 0 15px 0; padding: 0; list-style: none; font-size: 9px; font-weight: 600;">
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.6s">Индивидуальная
                планировка
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.7s">Отделка и мебель
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.8s">Эксплуатация инж.
                систем
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="0.9s">Интернет</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1s">Клининг</li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.1s">Расходники в общие
                зоны
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.2s">NFC доступ 24/7
              </li>
              <li animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.3s">Консьерж-сервис
              </li>
            </ul>
            <div>
              <div class="parameters-block" style="margin-bottom: 2vh;" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.5s">
                <p class="parameter-name" style="font-size: 8px;">площадь</p>
                <p class="parameter-value" style="font-size: 18px;">522 м<sup>2</sup></p>
              </div>
              <div class="parameters-block" style="margin-bottom: 2.5vh;" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.7s">
                <p class="parameter-name" style="font-size: 8px;">рабочих мест</p>
                <p class="parameter-value" style="display: flex;">
                  <span style="margin-right: 5px; font-size: 18px; line-height: 1;">до 100</span>
                  <span style="font-size: 8px; font-weight: 500; line-height: 1; position: relative; top: -2px">с возможностью<br>расширения</span>
                </p>
              </div>
              <div class="parameters-block" animate-in="fly-in-left" animate-in-duration="1s" animate-in-delay="1.9s">
                <p class="parameter-name" style="font-size: 8px;">стоимость в месяц</p>
                <p class="parameter-value" style="font-size: 18px;">2,4 млн р.</p>
                <span style="align-self: flex-start;">Без учета НДС</span>
              </div>
            </div>
          </div>
          <div class="blueprint-block" animate-in="fly-in-right" animate-in-duration="1s" animate-in-delay="0.6s" style="position: relative;">
            <a class="sidebar-control" animate-in="fade-in" animate-in-duration="1.2s" animate-in-delay="1s" role="button" style="display: flex; align-items: center; justify-content: center; position: absolute; top: calc(50% - 30px); left: calc(50% - 30px); width: 60px; height: 60px; background-color: white; color: black; font-size: 48px; border-radius: 50%; z-index: 10000">
              <amp-img src="./assets/zoom-icon.svg" width="24" height="28" alt="">
              </amp-img>
            </a>
            <amp-img class="image" src="./assets/blueprint-4.png" style="width: 60%;" width="191" height="431" layout="responsive" alt="">
            </amp-img>
          </div>
        </div>
      </amp-story-grid-layer>
      <amp-sidebar class="sidebar" style="background-color: rgba(0, 0, 0, .5);">
        <div class="sidebar-drawer">
          <a role="button" class="sidebar-close"></a>
          <iframe class="sidebar-iframe" src="./slider.html" frameborder="0"></iframe>
        </div>
      </amp-sidebar>
    </amp-story-page>
  </amp-story>

  <style>
    .sidebar {
      height: 100vh !important;
      width: 100vw !important;
      max-width: none !important;
      right: 50% !important;
      bottom: 0 !important;
      transform: translateX(50%);
      /* display: none !important; */
      visibility: hidden !important;
      opacity: 0 !important;
      transition: all .3s !important;
      z-index: -1 !important;
    }

    .sidebar.shown {
      display: flex !important;
      visibility: visible !important;
      opacity: 1 !important;
      z-index: 999999 !important;
    }

    .sidebar-close {
      display: block;
      width: 13px;
      height: 13px;
      background: url('./assets/sidebar-close.svg') no-repeat center;
      background-size: contain;
      cursor: pointer;
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .sidebar-drawer {
      width: 100%;
      height: 90vh;
      height: calc(var(--vh, 1vh) * 90);
      max-width: 400px;
      position: absolute;
      left: 50%;
      bottom: 0;
      background-color: #343434;
      box-sizing: border-box;
      border-radius: 18px 18px 0 0;
      transform: translateY(100%) translateX(-50%);
      transition: all .3s;
      z-index: 9999999;
      padding: 60px 0 40px;
    }

    .sidebar-drawer::-webkit-scrollbar {
      display: none;
    }

    .sidebar.shown .sidebar-drawer {
      transform: translateY(0) translateX(-50%);
    }

    .sidebar-control {
      cursor: pointer;
    }

    .sidebar-iframe {
      width: 100%;
      height: 100%;
      box-sizing: border-box;
    }

    .sidebar-iframe::-webkit-scrollbar {
      display: none;
    }

    @media (max-width: 375px) {
      .sidebar-drawer {
        bottom: 5vh;
      }
    }
  </style>
  <script>
    let playerControlEl, pauseControlEl;

    document.addEventListener('DOMContentLoaded', evt => {
      sidebarHandler.call(this, evt);
      searchAmpControls.call(this, evt);
    })

    function searchAmpControls() {
      const callback = function(mutationsList, observer) {
        for (const mutation of mutationsList) {
          if (mutation.previousSibling && mutation.previousSibling.className && mutation.previousSibling.className.includes('system')) {
            playerControlEl = mutation.previousSibling.shadowRoot
              .querySelector('aside')
              .querySelector('.i-amphtml-story-play-control');
            pauseControlEl = mutation.previousSibling.shadowRoot
              .querySelector('aside')
              .querySelector('.i-amphtml-story-pause-control');
            observer.disconnect();
          }
        }
      };
      const observer = new MutationObserver(callback);
      observer.observe(document.body.querySelector('amp-story'), {
        childList: true
      });
    }

    function sidebarHandler() {
      const sidebarEls = document.querySelectorAll('.sidebar');
      const controlElems = document.querySelectorAll('.sidebar-control');
      const closeElems = document.querySelectorAll('.sidebar-close');
      const sidebarDrawerElems = document.querySelectorAll('.sidebar-drawer');

      controlElems.forEach(elem => elem.onclick = (event) => {
        event.target.closest('.amp-story-page').querySelector('.sidebar').classList.add('shown');
        if (!!pauseControlEl) {
          pauseControlEl.dispatchEvent(new Event('click', {
            bubbles: true
          }));
        }
      });

      closeElems.forEach(elem => {
        elem.addEventListener('click', (event) => {
          event.target.closest('.sidebar').classList.remove('shown');
          if (!!playerControlEl) {
            playerControlEl.dispatchEvent(new Event('click', {
              bubbles: true
            }));
          }
        })
      })
    }

    function setCustomCSSProperty() {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    setCustomCSSProperty();
  </script>
</body>

</html>