<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-texnik
 */

get_header();
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
				
<section id="director" >

  <div class="conteiner">
   <h3 class="mt-5 ml-5 font-weight-bold text-left text-uppercase"><?php echo ot_get_option('direktor-who'); ?></h3>
 </div>
   <div class="conteiner">
   <div class="row">
     <div class="col-6 col-sm-3">
       <div class="overlay ml-5">
         <img src="<?php echo bloginfo('template_url'); ?>/img/direktor.jpg" class="img-thumbnail" width="300"height="440" class="img-fluid" alt="">
        </div>
     </div>
     <div class="col-6 col-sm-5">
       <h4><p><?php echo ot_get_option('direktor_text'); ?> </p></h4>
     <!--   <h4><p>Здравствуйте, уважаемые посетители сайта Шумерлинского политехнического техникума!</br> Спасибо Вам за внимание к нашему техникуму,</br>здесь Вы можете найти всю необходимую информацию.</p></h4> -->
     </div>
     <div class="col-6 col-sm-4 ">
       <div class="row">
         <div class="col-4 col-sm-4"></div>
          <div class="col-4 col-sm-8 ">
               <div class="overlay mr-5">
          <img src="<?php echo bloginfo('template_url'); ?>/img/vaznoe/p1.png" width="250" height="100" class="rounded float-right" alt="">
          <div class="mask flex-center"></div>
          </div>
             </div>
          </div>
          <div class="row">
         <div class="col-4 col-sm-4 "></div>
          <div class="col-8 col-sm-8 ">
               <div class="overlay mr-5">
          <img src="<?php echo bloginfo('template_url'); ?>/img/vaznoe/p2.png" width="250" class="rounded float-right" height="100" alt="">
          <div class="mask flex-center"></div>
          </div>
             </div>
       </div>
        <div class="row">
         <div class="col-4 col-sm-4"></div>
          <div class="col-8 col-sm-8 ">
               <div class="overlay mr-5">
          <img src="<?php echo bloginfo('template_url'); ?>/img/vaznoe/p3.png" width="250" class="rounded float-right" height="100" alt="">
          <div class="mask flex-center"></div>
          </div>
             </div>
       </div>
     </div>
 </div>
</div>
 <div class="row">
  <div class="col-3 col-sm-3 text-center">
    <button type="button" class="btn btn-light">ГТО-ГОТОВ К ТРУДУ И ОБОРОНЕ</button>
             </div>
             <div class="col-3 col-sm-3 text-center">
        <button type="button" class="btn btn-light">Молодые профессионалы WorldSkills</button>
             </div>
             <div class="col-3 col-sm-3 text-center">
        <button type="button" class="btn btn-light">Волонтёрское объединение "Добролюбы"</button>
             </div>
          </div>
          <div class="row">
  <div class="col-3 col-sm-3 text-center">
   <button type="button" class="btn btn-light">Студенческое самоуправление</button>
             </div>
             <div class="col-3 col-sm-3 text-center">
        <button type="button" class="btn btn-light">Молодежь за ЗОЖ</button>
             </div>
             <div class="col-3 col-sm-3 text-center">
        <button type="button" class="btn btn-light">День народного единства</button>
             </div>
          </div>
        </section>

</section>
</div>
 <hr class="my-5">


<!-- //Карусель// -->



<!-- Не трогать -->
<div class="container  text-center">
 <div class="row">
 <!--  ----------- -->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <div class="row">
  <div class="col">
    <h2 class="font-weight-bold mb-5">НОВОСТИ</h2>
  </div>
</div>


  <!--Indicators-->
<div class="row">
  <div class="col-12">
<ol class="carousel-indicators mt-5">
    <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
    <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  </div>
  </div>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
<div class="row">
      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/11.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Учебная тренировка</h4>
            <p class="card-text">В соответствии с графиком учебных тренировок по антитеррористической и пожарной безопасности в Шумерлинском политехническом техникуме...</p>
              <p class="card-text">29/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/22.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Антикоррупционное просвещение</h4>
            <p class="card-text">Одной из основных задач образовательной организации является профилактика...</p>
              <p class="card-text">28/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/33.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Встреча с представителем Центра занятости населения</h4>
            <p class="card-text">На базе Шумерлинского политехнического техникума Минобразования Чувашии...</p>
              <p class="card-text">22/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ</a>
          </div>
        </div>
      </div>

    </div>
    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">
<div class="row">
      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/44.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Профилактика экстремизма в молодёжной среде</h4>
            <p class="card-text">Под влиянием социальных, политических...</p>
              <p class="card-text">25/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ ДАЛЬШЕ</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/55.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Молодая инновационная Чувашия</h4>
            <p class="card-text">Студент техникума – победитель XVI Открытой научной конференции молодёжи и студентов...</p>
              <p class="card-text">22/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ ДАЛЬШЕ</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/66.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Призеры фестиваля «Студенческая весна»</h4>
            <p class="card-text">На базе Дворца культуры «Химик» г. Новочебоксарск состоялся республиканский...</p>
              <p class="card-text">20/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ ДАЛЬШЕ</a>
          </div>
        </div>
      </div>

    </div>
    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">
<div class="row">
      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/77.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Единый информационный день</h4>
            <p class="card-text">На базе Шумерлинского политехническлого техникума Минобразования Чувашии прошёл...</p>
              <p class="card-text">20/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ ДАЛЬШЕ</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/88.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Воссоединение Крыма с Россией</h4>
            <p class="card-text">В 2014 году в Российской Федерации произошло важное событие государственного масштаба...</p>
              <p class="card-text">19/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ ДАЛЬШЕ</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" width="360" height="240" src="<?php echo bloginfo('template_url'); ?>/img/carousel/99.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">«ЖИВИ И ДАЙ ЖИТЬ ДРУГИМ!»</h4>
            <p class="card-text">Студенты первого и второго курсов Шумерлинского политехнического техникума...</p>
              <p class="card-text">15/03/2019</p>
            <a class="btn btn-primary bord">ЧИТАТЬ</a>
          </div>
        </div>
      </div>


    </div>
    </div>
  </div>

    <!--/.Third slide-->
<!-- Control -->

       <div class="row">
        <div class="col-12">

  <div class="controls-top mt-5">
    <a class="btn-floating " href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-circle-right fa-3x"></i></a>
  </div>
</div>
  </div>
</div>
</div>
</div>
<!-- Control -->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
<!-- //Конец Карусель// -->


    <hr class="my-5">
    <section id="examples" class="text-center">
      <h2 class="mb-5 font-weight-bold blue-text">Специальности и программы обучения для Вас</h2>
      <h4 class="mb-5">Выбирайте подходящее!</h4>

      <div class="row">
        <div class="col-lg-4 col-md-6 md-4">
          <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/1.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold">Программирование в компьютерных системах</h4>
        </div>

        <div class="col-lg-4 col-md-6 md-4">
         <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/2.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold">Экономика и бухгалтерский учет</h4>
        </div>

        <div class="col-lg-4 col-md-6 md-4">
          <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/3.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
          </div>
          <h4 class="my-4 font-weight-bold">Обслуживание электрического оборудования</h4>
        </div>

         <div class="col-lg-4 col-md-6 md-4">
         <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/4.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold">Ремонт автомобильного транспорта</h4>
        </div>

        <div class="col-lg-4 col-md-6 md-4">
         <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/5.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold">Технология продукции общественного питания</h4>
        </div>

        <div class="col-lg-4 col-md-6 md-4">
         <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/6.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold">Технология машиностроения</h4>
        </div>

        <div class="col-lg-4 col-md-6 md-4 offset-lg-2">
         <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/7.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold ">Мастер общестроительных работ</h4>
        </div>
        <div class="col-lg-4 col-md-6 md-4">
         <div class="overlay zoom">
            <img src="<?php echo bloginfo('template_url'); ?>/img/professia/8.png" alt="" class="img-fluid">
            <div class="mask flex-center"></div>
         </div>
          <h4 class="my-4 font-weight-bold">Повар кондитер</h4>
        </div>

      </div>
    </section>


      <hr class="my-5">
  <div class="container"> 
    <section id="contact">
      <h2 class="mb-5 font-weight-bold text-center">Связаться с нами:</h2>
     
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <form class="p-5">
            <div class="md-form form-sm">
              <i class="fa fa-user prefix grey-text"></i>
              <input type="text" id="form3" class="form-control form-control-sm">
              <label for="form3">Ваше Имя</label>
            </div>
            <div class="md-form form-sm">
              <i class="fa fa-envelope prefix grey-text"></i>
              <input type="text" id="form2" class="form-control form-control-sm">
              <label for="form2">Ваш email</label>
            </div>
            <div class="md-form form-sm">
              <i class="fa fa-tag prefix grey-text"></i>
              <input type="text" id="form32" class="form-control form-control-sm">
              <label for="form32">Вопрос</label>
            </div>
            <div class="md-form form-sm">
              <i class="fa fa-pencil-alt prefix grey-text"></i>
              <textarea type="text" id="form3" class="md-textarea form-control form-control-sm" rows="3"></textarea>
              <label for="form8">Ваше сообщение</label>
            </div>
            <div class="text-center mt-4">
             <button class="btn btn-primary waves-effect waves-light">Отправить <i class="far fa-paper-plane ml-1"></i></button>
            </div>
          </form>
        </div>
        <div class="col-lg-7 col-md-12">  
        <div class="row text-center"> 
            <div class="col-lg-4 col-md-12 mb-1"> 
                <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Россия, Чувашская Республика, Шумерля, улица Некрасова, 62.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-1"> 
              <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Понедельник - Суббота</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-1"> 
              <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+7 (83536) 2-14-21</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-1"> 
              <p><i class="far fa-envelope fa-1x mr-2 grey-text"></i>gshum-politeh@cap.ru</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-1"> 
              <p><i class="far fa-clock fa-1x mr-2 grey-text"></i>С 8:00 до 16:30</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-1"> 
              <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+7 (83536) 2‑29-84</p>
            </div>
        </div>
      


        <!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2259.164355353536!2d46.38811776035602!3d55.51208563192439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415b20ea60ab9805%3A0x58443b41226f8019!2z0KjRg9C80LXRgNC70LjQvdGB0LrQuNC5INCf0L7Qu9C40YLQtdGF0L3QuNGH0LXRgdC60LjQuSDQotC10YXQvdC40LrRg9C8!5e0!3m2!1sru!2sru!4v1553979490399!5m2!1sru!2sru" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<!--Google Maps-->
      </div>
        </div>
      </div>
         </section>
    
     <hr class="my-5">


<?php
get_footer();
