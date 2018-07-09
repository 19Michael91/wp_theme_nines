<?php
/**
 * The template for displaying the header
 *
 */
$options = get_option('theme_settings');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'blogname' ); ?></title>
    <link rel="shortcut icon" href="<?php echo $options['favicon'];?>">
    <?php
        wp_head();
    ?>
  </head>
<body <?php body_class(); ?>>

<header>
  <div class="top-line-header">
    <div class="column-head-1">
      <a href="#"><img class="gif" src="<?php echo get_template_directory_uri();?>/assets/img/Animation.gif" alt=""><img class="statica" src="<?php echo get_template_directory_uri();?>/assets/img/ukr-n.png" alt="">обери місто</a>
    </div>
    <div class="column-head-2">
      <a class="v9ky" href="#">v9ky.in.ua | kyiv</a>
      <a class="btn-head"
      style="line-height: 1;" href="/nines/page_zayavka">заявити команду <br><span>найближчі турніри</span>
        <img id="turn" src="<?php echo get_template_directory_uri();?>/assets/img/arrovs.png" class="arrovs">
      </a>
    </div>
    <div class="column-head-3">
      <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/V9KY.png" alt=""></a>
    </div>
    <div class="column-head-5">
      <a class="btn-head" href="/nines/page_orenda">оренда поля
        <img src="<?php echo get_template_directory_uri();?>/assets/img/arrovs.png" class="arrovs">
      </a>
      <a class="btn-head" href="/nines/page_loyalnosti">програма лояльності
        <img src="<?php echo get_template_directory_uri();?>/assets/img/arrovs.png" class="arrovs">
      </a>
    </div>
    <div class="column-head-4">
      <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/VK.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/fb.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/yt.png" alt=""></a>
    </div>
  </div>

  <div class="slides-frame">
      <div class="slider-spons">
        <div class="slide">
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-3.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
        </div>
      <div class="slide">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-3.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
      </div>
      <div class="slide">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-3.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
      </div>
      <div class="slide">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-3.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-1.png" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/sponsor-2.png" alt=""></a>
      </div>
      </div>
  </div>
  <div class="menu-line">
    <div class="main-menu box-widht" id="menu">
      <ul>
        <li><a href="/nines">головна</a></li>
        <li><a href="/nines/page_teams">команди</a></li>
        <li><a href="/nines/page_calendar">календар</a></li>
        <li><a href="/nines/page_transfer">трансфери</a></li>
        <li><a href="#">кдк</a></li>
        <li><a href="/nines/page_reglament">регламент</a></li>
        <li><a href="#">партнерство</a></li>
        <li><a href="#">архів</a>
          <ul class="drop-arhiv">
            <li><a href="#"><p>Осінь 2016</p></a></li>
            <li><a href="#">Відбірковий етап</a></li>
            <li><a href="#">Суперліга</a></li>
            <li><a href="#">Перша ліга</a></li>
            <li><a href="#"><p>Осінь 2015</p></a></li>
            <li><a href="#">Відбірковий етап</a></li>
            <li><a href="#">Суперліга</a></li>
            <li><a href="#">Перша ліга</a></li>
          </ul>
        </li>
        <li><a href="/nines/page_contacts">контакти</a></li>
      </ul>
    </div>
  </div>
  <!-- ************************************************************** -->
  <div class="run-line">
    <marquee behavior="scroll" direction="left" style="display: block; width: 1255px; margin: 0 auto">
      <span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span><span>Миротворець 10:1  Bravo</span>
    </marquee>
  </div>
  <div class="tabs-header box-widht">
    <div class="tabs active-tab">
      <a href="#"><label for="tab-1">супер ліга</label></a>
      <span class="active-tabs"></span>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-2">вища ліга</label></a>
      <span></span>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-3">відбірковий етап</label></a>
      <span></span>
      <ul>
        <li><a href="#">Группа A</a></li>
        <li><a href="#">Группа B</a></li>
        <li><a href="#">Группа C</a></li>
        <li><a href="#">Группа D</a></li>
        <li><a href="#">Группа e</a></li>
        <li><a href="#">Группа f</a></li>
        <li><a href="#">Группа g</a></li>
        <li><a href="#">Группа h</a></li>
        <li><a href="#">Группа i</a></li>
        <li><a href="#">Группа j</a></li>
      </ul>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-4">перша ліга</label></a>
      <span></span>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-5">друга ліга</label></a>
      <span></span>
      <ul>
        <li><a href="#">Gold</a></li>
        <li><a href="#">Silver</a></li>
        <li><a href="#">Bronze</a></li>
      </ul>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-6">третя ліга</label></a>
      <span></span>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-7">ліга 30+</label></a>
      <span></span>
    </div>
    <div class="tabs">
      <a href="#"><label for="tab-8">жіноча ліга</label></a>
      <span></span>
    </div>
  </div>
  <div class="tabs-content-list box-widht">
    <div class="table">
      <div class="tabs-t-head">
        <p>Таблиця</p>
      </div>
      <table>
        <tr>
          <td style="display: none"></td>
          <td></td>
          <td></td>
          <td>і</td>
          <td>о</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Арсенал</td>
          <td>12</td>
          <td>9</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Манзана</td>
          <td>4</td>
          <td>9</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Лайф</td>
          <td>4</td>
          <td>10</td>
        </tr>
      </table>
      <a class="see-more-tabs" href="page_turnament_tabl">дивитись</a>
    </div>
    <div class="forvards">
      <div class="tabs-t-head">
        <p>бомбардири</p>
      </div>
      <table>
        <tr>
          <td style="display: none"></td>
          <td></td>
          <td></td>
          <td>і</td>
          <td>г</td>
          <td>%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Арсенал</td>
          <td>12</td>
          <td>9</td>
          <td>5,55</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Манзана</td>
          <td>4</td>
          <td>9</td>
          <td>2</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Лайф</td>
          <td>4</td>
          <td>10</td>
          <td>4,2</td>
        </tr>
      </table>
      <a class="see-more-tabs" href="page_forvards">дивитись</a>
    </div>
    <div class="assists">
      <div class="tabs-t-head">
        <p>Асистенти</p>
      </div>
      <table>
        <tr>
          <td style="display: none"></td>
          <td></td>
          <td></td>
          <td>і</td>
          <td>п</td>
          <td>%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Петя</td>
          <td>12</td>
          <td>9</td>
          <td>5,55</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Мамедов</td>
          <td>4</td>
          <td>9</td>
          <td>2</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Шакор</td>
          <td>4</td>
          <td>10</td>
          <td>4,2</td>
        </tr>
      </table>
      <a class="see-more-tabs" href="page_assistents">дивитись</a>
    </div>
    <div class="discvalific">
      <div class="tabs-t-head">
        <p>Дискваліфікація</p>
      </div>
      <table>
        <tr></tr>
        <tr>
          <td>1</td>
          <td>Петя</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png" alt="">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Мамедов</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_template_directory_uri();?>/assets/img/red-card.png" alt=""></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Коробенко</td>
          <td></td>
          <td></td>
          <td><img src="<?php echo get_template_directory_uri();?>/assets/img/discval.png" alt=""></td>
        </tr>
      </table>
      <a class="see-more-tabs" href="page_discvaliffication">дивитись</a>
    </div>
  </div>
  <div class="offers-line">
    <div class="offers box-widht">
      <ul>
        <li><a href="/nines/page_post_game"><img class="post" src="<?php echo get_template_directory_uri();?>/assets/img/post-game.png" alt="">після гри</a></li>
        <li><a href="/nines/page_sbornaya"><img class="tur" src="<?php echo get_template_directory_uri();?>/assets/img/zb-tur.png" alt="">збірна туру</a></li>
        <li><a href="/nines/page_goal_turu"><img class="ball" src="<?php echo get_template_directory_uri();?>/assets/img/ball.png" alt="">гол туру</a></li>
        <li><a href="/nines/page_translation"><img class="live" src="<?php echo get_template_directory_uri();?>/assets/img/live.png" alt="">трансляція</a></li>
      </ul>
    </div>
  </div>
  </div>
  <div class="mobile-menu">
  <div class="icon-close">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/close-btn.png">
  </div>
    <ul>
      <li><a href="/nines">головна</a></li>
      <li><a href="/nines/page_teams">команди</a></li>
      <li><a href="/nines/page_calendar">календар</a></li>
      <li><a href="/nines/page_transfer">трансфери</a></li>
      <li><a href="#">кдк</a></li>
      <li><a href="/nines/page_reglament">регламент</a></li>
      <li><a href="#">партнерство</a></li>
      <li><a href="#">архів</a></li>
      <li><a href="/nine/page_contacts">контакти</a></li>
    </ul>
  </div>
  <div class="icon-menu">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>

</header>
