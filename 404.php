<?php session_start();?>
<!DOCTYPE html>
<html lang="cs" id="zero">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="robots" content="index, follow">
        <meta name="author" content="inkluna.cz">
        <meta name="description" content="Pohost.cz je kvalitní produkt, který řeší online potřeby restaurací a kaváren. "/>
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <meta name="keywords" content="restaurace, kavárna, webdesign, web, pohostinství, web rychle,pohost,tvorba webu  ">
        <meta property="og:url"           content="http://www.pohost.cz" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Kvalitní a rychlé online řešení pro restaurace a kavárny" />
        <meta property="og:description"   content="pohost.cz je kvalitní produkt který řeší online potřeby restaurací a kaváren. " />
        <meta property="og:image"         content="http://nova.anahita.cz/img/facebook.jpg" />
        <title>
            Kvalitní a rychlé online řešení pro restaurace a kavárny
        </title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom CSS -->
        <link href="css/grayscale.css" rel="stylesheet"/>
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500italic,800italic,700,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
            </script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
            </script>
        <![endif]-->
<script>

/**
* Funkce, která měří kliknutí na odchozí odkaz vAnalytics
* Tato funkce bere platný řetězec adresy URL jako argument a tento řetězec použije.
* jako štítek události. Nastavení metody přenosu na hodnotu „beacon“ umožňuje odeslat požadavek na server
* pomocí funkce „navigator.sendBeacon“ prohlížeče, který ji podporuje.
*/
var trackOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>
    </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



        <div class=" navbar-custom navbar  navbar-fixed-top" role="navigation" id="navigation">

<span class="text-center  col-md-push-1 col-md-2 col-xs-12 ">
                        <a class="text-center  page-scroll logo" href="#zero">pohostinstvi.eu</a>
                    </span>

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse col-md-12  " id="menu">
  <div class="collapse navbar-collapse navbar-main-collapse">
<div class="col-md-12 col-sm-12 col-xs-12 ">
                <ul class="nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="#onas">
                           O nás
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nastroje">
                            Nástroje pro správu
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sluzby">
                            Služby
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cenik">
                    Ceník
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#objednat">
                    Objednat
                        </a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#kontakty">
                            Kontakt
                        </a>
                    </li>

                    <li class=" text-center">
                        <!-- Load Facebook SDK for JavaScript -->
                      <!--   <div id="fb-root">
                        </div >
                        <script>
                            (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.5&appId=347382178695685";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-share-button" data-href="http://nova.anahita.cz"  data-layout="button"></div> -->
                       <!--  <div class="fb-like" data-href="https://www.facebook.com/anahita.cz/?fref=ts" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="false">
                       </div> -->
                    </li>
                </ul>
            </div>
  </div>
</div>
</div>


            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>




        <!-- Intro Header -->
        <section class="main-slider">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
               <!--   <ol class="carousel-indicators overover">
                    <li data-target="#myCarousel" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#myCarousel" data-slide-to="1">
                    </li>
                </ol> -->
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <!-- Slide 1 : Active -->
                    <div class="item active">
                        <div  id="slide1">
                            <div class="col-md-10  col-md-push-1 col-sm-push-2 col-sm-8 col-xs-12 overover">

                            <div class="holder">
    <div class="garniz4 under"></div>
</div>



                                    <div class="content">


                                <span class="text-uppercase dark_red f_20">
                                                Řešení připravené ke spuštění!
                                            </span>
                                        <H1 class="intro-text">
                                            Web pro restaurace,  kavárny, čajovny
                                        </H1>
                                            <h2>

                                               Vše co potřebujete k nastartování Vašeho online bussinessu.
                                            </h2>


                                            <a href="#onas" class="btn-act btn-info page-scroll">
                                            Více informací
                                        </a>

                                    </div>
                     <div class="holder">
    <div class="garniz3 under"></div>
</div>
                            </div>





                            <div class="img">
                            <!-- <a href="#new" class="btn btn-circle page-scroll">
                                            <i class="fa fa-angle-double-down ">
                                            </i>
                                        </a> -->
                            <img class=" text-center"  src="img/main.png" alt="main" />
                            </div>
                        </div>

                    </div>
                    <!-- /Slide1 -->
                    <!-- Slide 2 -->
                   <!-- <div class="item ">
                        <div  id="slide2">
                            <div class="col-md-5  col-sm-6 col-xs-12 overover">

                                    <div class="content">
                                        <span class="brand-heading">
                                            anahita.cz
                                        </span>
                                        <H1 class="intro-text">
                                            Přijďte plavat na
                                            <br/>
                                            <span class="text-uppercase">
                                                Černý Most
                                            </span>
                                        </H1>
                                        <p class="open-text orange">
                                            Otevíráme nový bazén
                                        </p>
                                        <p class="date-text orange">
                                            11.4. 2016
                                        </p>
                                        <p class="tel-text">
                                            Tel. 281 963 176
                                        </p>
                                        <a href="#new" class="btn btn-circle page-scroll">
                                            <i class="fa fa-angle-double-down ">
                                            </i>
                                        </a>
                                    </div>

                            </div>




                        </div>

                    </div> -->




                </div>

            </section>
<!-- <div class="container-fluid">
 <div class=" no-gutter">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kavárna" data-caption="" data-image="img/n1.jpg" data-target="#image-gallery">

                            <img src="img/n1.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kavárna" data-caption="" data-image="img/n2.jpg" data-target="#image-gallery">
                            <img src="img/n2.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kavárna" data-caption="" data-image="img/n3.jpg" data-target="#image-gallery">
                            <img src="img/n3.jpg" alt="circles"  class="img-responsive"  width="100%"/>
                        </a>
                    </div>
                </div>
</div> -->

<div class="goback">
<a href="#zero" class="btn btn-circle page-scroll">
                                            <i class="fa fa-angle-double-up ">
                                            </i>
                                        </a>
</div>
<div class="holder">
    <div class="garniz4 over"></div>
</div>


     <!-- New -->
            <section  id="onas" class="container content-section odd">
                <!-- Navigation  navbar-fixed-top navbar -->
                <div class="row">
                 <div class="col-md-10 col-md-push-1 col-xs-12 col-sm-10 col-sm-push-1 text-center p60top">

                        <!-- <h2 >
                            Výhody
                        </h2>
                        <h3>
                            Proč si vybrat web phostinstvi.eu?
                        </h3> -->


                        <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
                            <img src="img/about.png" alt="O nás" class="img-responsive"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left">


                            <h2 class="big ">Nabroušené online nástroj pro zprávu Vaše podniku!</h2>
                            <!-- <h3>Nabídněte Vašim hostům plný online servis</h3> -->
                            <p>Našim cílem je poskytovat kvalitní internetové služby a zjednodušit správu webových stránek podnikům pracujících v pohostinství. Aktivní působení na internetu Vás a váš podnik může přiblížit vašim hostům a vytvořit lepší image podniku.
                            <p>Připravili jsme pro Vás webové řešení nabité užitečnými nástroji které vám ušetří čas a peníze.Vše je vytvořeno s váhou na výkon, použitelnost, současné trendy a hlavně Vaše hosty a uživatele.

                            Poskytneme Vám přehledný manuál, školení či , chceme být našim klientům, partneři na které je spolehnutí.</p>


                            </p>
                        </div>

<div class="col-md-12 col-sm-12 col-xs-12">
<a href="#nastroje" class="btn btn-circle page-scroll" title="funkce">
                                    <i class="fa fa-angle-double-down ">
                                    </i>
                                </a>
                    </div>
</div>
</div>



            </section>

            <div class="holder">
    <div class="garniz1 under"></div>
</div>



                       <section id="nastroje" class="container-fluid content-section even">

                 <div class="col-md-12  col-xs-12 text-center">
<div class="row">
                        <h2 >
                            Nástroje které usnadňují práci
                        </h2>
                        <h3>
                            Systém který zvládne vše.
                        </h3>


                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i1 icon"></i>
                            <h3>Administrace</h3>
                            <p>Tentokrát máte možnost změnit a upravit opravdu vše a to v přehledné a jednoduché administrací s možnosti úprav přímo na míru.</p>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i2 icon"></i>
                            <h3>Menu</h3>
                            <p>Přidat informace o jídle a přidat nové například sezónní menu by neměl být žádný problém, a s našim řešením také není. Vše zvládnete sami.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i3 icon"></i>
                            <h3>Rezervace</h3>
                            <p>Buďte napřed a ušetřete svůj čas zautomatizováním rezervačního proces. Nabídněte svým hostům možnost, aby si sami vybrali kdy a v kolik hodin k vám chtějí přijít.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i4 icon"></i>
                            <h3>Blog</h3>
                            <p>Dejte o sobě vědět, blogujte! Jedna z nejlepších cest jak vaš vaš podnik zviditelnit je psát kvalitní a relevantní články na zajímavá témata.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i5 icon"></i>
                            <h3>Události/Kalendář</h3>
                            <p>Buďte aktuální, spravujte a plánujte své akce z jedno místa! Co se u vás dnes v podniku děje a co příští týden můžete zobrazit v přehledném kalendáři!</p>
                        </div>
<div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i6 icon"></i>
                            <h3>Reference hostů</h3>
                            <p>Zobrazujte na webu názory a postřehy Vašich návštěvníků. Je dokázáno, že zkušenosti a vyjádření druhých je jeden z nejsilnějších důvodů v rozhodování pro návštěvu podniku.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i7 icon"></i>
                            <h3>Subscribe a Newsletter</h3>
                            <p>Vytvořte si seznam zákazníků a pravidelně je informujte pomocí newsletteru o všech novinkách a akcích, které u Vás probíhají. To vše z jednoho místa a jednoduše!</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i8 icon"></i>
                            <h3>Sociální sítě útočí</h3>
                            <p>Nové hosty máte na dosah jednoho kliknutí. Rozmíchejte vášnivou debatu na téma Váš podnik. Připojíme Vás na všechny sociální sítě. TripAdviser, facebook, twitter, instagram atd.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <i class="i9 icon"></i>
                            <h3>Jazyky</h3>
                            <p>Váš podnik se s námi může stát světovým. Naše řešení má možnost přidat celou řadu jazykových mutací.</p>
                        </div>


<div class="col-md-12 col-sm-12 col-xs-12">
<a href="#sluzby" class="btn btn-circle page-scroll" title="funkce">
                                    <i class="fa fa-angle-double-down ">
                                    </i>
                                </a>
                    </div>


                    </div>



                </div>
            </section>


            <div class="holder">
    <div class="garniz3 under"></div>
</div>


             <section id="sluzby" class="container-fluid content-section even text-center">

                <div class="col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-12">
                    <h2>
                       Služby které nabízíme
                    </h2>
                    <h3 >Ať jste velká či malá restaurace, kavárna nebo čajovna. Máme pro Vás online řešení.</h3>
                     <div class="row no-gutter">
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6 '">
                        Grafika na míru
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6">
                       Vytvoření nových nástrojů na míru či možnost úpravy stávajících podle konkrétní potřeby.
                    </div>
                </div>
                 <div class="row no-gutter">
                    Podpora při  administraci
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6">
                      SEO Optimalizace
                    </div>
                </div>
                 <div class="row no-gutter">
                 <!--    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6 '">
                       Sociální sítě
                    </div> -->
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6">
                     Propagační a emailové kampaně
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6">
                     Webová strategie, konzultace, analýza  a kampaně.
                    </div>
                </div>



                </div>


<div class="col-md-12 col-sm-12 col-xs-12">
<a href="#sablony" class="btn btn-circle page-scroll" title="funkce">
                                    <i class="fa fa-angle-double-down ">
                                    </i>
                                </a>
                    </div>
</section>



  <section id="sablony" class=" content-section odd no-gutter ">
            <div class=" text-center container-fluid">
                <h2>
                    Ukázka šablon
                </h2>
                <h3>
                    Weby které předčí vaše očekávání!
                </h3>
                <div class=" no-gutter">
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6 '">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Vstupní budova" data-caption="" data-image="img/n4.jpg" data-target="#image-gallery">
                            <img src="img/n4.jpg" alt="circles"  class="img-responsive" width="100%"/>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 thumb col-lg-6">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Vstupní budova" data-caption="" data-image="img/n5.jpg" data-target="#image-gallery">
                            <img src="img/n5.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                </div>
                <div class="row no-gutter">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kavárna" data-caption="" data-image="img/n1.jpg" data-target="#image-gallery">
                            <img src="img/n1.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kavárna" data-caption="" data-image="img/n2.jpg" data-target="#image-gallery">
                            <img src="img/n2.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kavárna" data-caption="" data-image="img/n3.jpg" data-target="#image-gallery">
                            <img src="img/n3.jpg" alt="circles"  class="img-responsive"  width="100%"/>


                        </a>
                    </div>
                </div>
                <div class="row no-gutter">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Plavecká část" data-caption="" data-image="img/n6.jpg" data-target="#image-gallery">
                            <img src="img/n6.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Plavecká část" data-caption="" data-image="img/n7.jpg" data-target="#image-gallery">
                            <img src="img/n7.jpg" alt="circles"  class="img-responsive" width="100%" />
                        </a>
                    </div>
                </div>
                <p>
                    <a href="#cenik" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down ">
                        </i>
                    </a>
                </p>
            </div>
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">
                                    ×
                                </span>
                                <span class="sr-only">
                                    Close
                                </span>
                            </button>
                            <h4 class="modal-title" id="image-gallery-title">
                            </h4>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive" alt="Přijďte plavat na Černý most" src=""/>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-2">
                                <button type="button" class="bluebtn btn btn-primary" id="show-previous-image">
                                    Předešlá
                                </button>
                            </div>
                            <div class="col-md-8 text-justify" id="image-gallery-caption">
                                This text will be overwritten by jQuery
                            </div>
                            <div class="col-md-2">
                                <button type="button" id="show-next-image" class="bluebtn btn btn-primary">
                                    Další
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


             <!-- <section id="reference" class="container-fluid content-section even text-center">

                <div class="col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-12">
                    <h2>
                        Reference
                    </h2>
                    <h3 >Jak jsme u našich klientů obstáli?</h3>
                    <div class="col-md-4 col-sm-4 col-xsd-4">
                        <ul>
                            <li class="text">

                                    Jsme nad míru spokojení, ovládání je velice jednoduchá přehledné a jsme schopni zvládnout vše.

                            </li>
                            <li class="profile">
                            <span class="circle"><img src="img/face.jpg" alt="" /></span>
                                <span>
                                   Peter Novák
                                </span>
                                <a href="http://www.lastrada.cz" title="la strada">
                                  www.lastrada.cz
                                </a>


                            </li>
                        </ul>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xsd-4">
                        <ul>
                            <li class="text">

                                    Jsme nad míru spokojení, ovládání je velice jednoduchá přehledné a jsme schopni zvládnout vše.

                            </li>
                            <li class="profile">
                            <span class="circle"><img src="img/face.jpg" alt="" /></span>
                                <span>
                                   Peter Novák
                                </span>
                                <a href="http://www.lastrada.cz" title="la strada">
                                  www.lastrada.cz
                                </a>


                            </li>
                        </ul>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xsd-4">
                        <ul>
                            <li class="text">

                                    Jsme nad míru spokojení, ovládání je velice jednoduchá přehledné a jsme schopni zvládnout vše.

                            </li>
                            <li class="profile">
                            <span class="circle"><img src="img/face.jpg" alt="" /></span>
                                <span>
                                   Peter Novák
                                </span>
                                <a href="http://www.lastrada.cz" title="la strada">
                                  www.lastrada.cz
                                </a>


                            </li>
                        </ul>
                    </div>

                </div>


<div class="col-md-12 col-sm-12 col-xs-12">
<a href="#cenik" class="btn btn-circle page-scroll" title="funkce">
                                    <i class="fa fa-angle-double-down ">
                                    </i>
                                </a>
                    </div>
</section> -->

<div class="holder">
    <div class="garniz4 under"></div>
</div>



<section id="cenik" class="container-fluid content-section even text-center">

                      <div class="col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-12">
                        <h2>
                        Ceník
                            </h2>
                        <h3>
                           Máte konkrétní požadavky? Rádi Vám poradíme
                        </h3>

                    <!--         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">


                    <div class="panel price panel-blue">
                        <div class="panel-heading arrow_box text-center">
                        <div class="special">Akční cena</div>
                        <h3  class="black">Easy</h3>
                        <i class="b1 icon"></i>
                        </div>

                        <div class="panel-body text-center">
                         <p>Nastavíme Vám web se všemi funkcemi a
                         Tato volba je pro zkušenější uživatele kteří si s redakčním systéme již vědí rady a pro ovládaní jim stačí  </p>

                        </div>
                        <ul class="list-group list-group-flush text-center">

                            <li class="list-group-item"><i class="fa-check fa text-info"></i>Výběr z templatů. Přidání loga a barev.</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i>4h grafické práce</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i> Manuál / 24h/7 FAQ</li>
                        </ul>

                        <div class="panel-footer">
                        <p class="lead" ><strong>od 13 000 Kč</strong></p>
                        <p class="lead" ><strong>od 11 000 Kč</strong></p>
                            <a class="btn-act btn-info" href="#">Vybrat</a>
                        </div>
                        </div>
                    </div>
                     /PRICE ITEM -->




   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <!-- PRICE ITEM -->
                <div class="panel price panel-blue">
                        <div class="panel-heading arrow_box text-center">
                        <div class="special">Akční cena</div>
                        <h3  class="black">Start</h3>
                        <i class="b2 icon"></i>
                        </div>

                        <ul class="list-group list-group-flush text-left">

<li class="list-group-item"><i class="fa-check fa text-info"></i>Vytvoříme grafiku webu na základně vašich představ a požadavků.</li>
<li class="list-group-item"><i class="fa-check fa text-info"></i>Nastavíme vám všechny nástroje podle Vaśi potřeby.</li>


                            <li class="list-group-item"><i class="fa-check fa text-info"></i>1 hodina konzultací</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i> Manuál</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i> 1 hod kurz jak v systému pracovat</li>


                        </ul>

                        <div class="panel-footer">
                        <p class="lead crossed" ><small><strong> 16 000 Kč</strong></small></p>
                        <p class="lead" ><strong> 13 000 Kč</strong></p>
                            <a class="btn-act btn-info page-scroll" href="#objednat">Vybrat</a>
                        </div>
                        </div>
                    <!-- /PRICE ITEM -->


                </div>

                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <!-- PRICE ITEM -->
                  <div class="panel price panel-blue">
                        <div class="panel-heading arrow_box text-center">
                        <div class="special">Akční cena</div>
                        <h3  class="black">Power</h3>
                        <i class="b3 icon"></i>
                        </div>


                        <ul class="list-group list-group-flush text-left">

<li class="list-group-item"><i class="fa-check fa text-info"></i>Vytvoříme grafiku webu na základně vašich představ a požadavků.</li>
<li class="list-group-item"><i class="fa-check fa text-info"></i>Nastavíme vám všechny nástroje podle Vaśi potřeby.</li>
<li class="list-group-item"><i class="fa-check fa text-info"></i>Připravíme pro Vás startovací newsletter</li>
<li class="list-group-item"><i class="fa-check fa text-info"></i>Možnost úpravy brendu a tváře podniku</li>

                            <li class="list-group-item"><i class="fa-check fa text-info"></i>Úprava nástrojů na míru</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i>3 hodin konzultací</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i> Manuál / 24h/7 FAQ</li>
                            <li class="list-group-item"><i class="fa-check fa text-info"></i> 2 hod kurz jak v systému pracovat</li>


                        </ul>

                        <div class="panel-footer">
                        <p class="lead crossed" ><small><strong>20 000 Kč</strong></small></p>
                        <p class="lead" ><strong>16 000 Kč</strong></p>
                            <a class="btn-act btn-info page-scroll" href="#objednat">Vybrat</a>
                        </div>
                        </div>


                </div>



</section>
<div class="col-md-12 col-sm-12 col-xs-12 text-center">
<a href="#objednat" class="btn btn-circle page-scroll" title="funkce">
                                    <i class="fa fa-angle-double-down ">
                                    </i>
                                </a>
                                <br><br>
                    </div>


                </div>

            </div>
        </section>

<div class="holder">
    <div class="garniz2 push-right under"></div>
</div>


       <section id="objednat" class="container-fluid content-section even text-center">
                <div class=" text-center">
                      <div class="col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-12 main">
                        <h2>
                        Objednat
                            </h2>
                        <h3>
                            Systém který si oblíbíte
                        </h3>


                        <?php

// LOAD FORMS FILES

include("PFBC/Myforms/orderproduct.php");
//include("PFBC/Myforms/working_start.php");


?>


                </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
<a href="#kontakty" class="btn btn-circle page-scroll" title="funkce">
                                    <i class="fa fa-angle-double-down ">
                                    </i>
                                </a>
                    </div>


            </div>
        </section>







    <!-- Conact -->
        <section id="kontakty" class=" content-section text-center">

                <div class="col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-12">
                    <h2>
                        Kontakt
                    </h2>
                    <h3 >Máte dotaz? Napište, jsme tu pro vás!</h3>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul>
                            <li>
                                <h3 class="black">tel. 722 221 855</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="fb-page" data-href="https://www.facebook.com/pohostcz-1773376759565733/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/pohostcz-1773376759565733/">
                                    <a href="https://www.facebook.com/pohostcz-1773376759565733/">

                                    </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h3 class="black">
                                <a href="mailto: info@pohost.cz">
                                    info@pohost.cz
                                </a>
                                </h3>
                    </div>
                    <br>
                    <div class="imgset"></div>
                </div>
                <div id="fb-root">
                        </div >
                        <script>
                            (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.5&appId=347382178695685";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <!-- <div class="fb-share-button" data-href="http://nova.anahita.cz"  data-layout="button"></div> -->


        </section>



      <!--   <section id="" class=" no-gutter text-center">

                <div class="col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-12">
                    <h2>
                        Naše pokrytí
                    </h2>
                    <h3 >Podniky které s námi spolupracují</h3>

                </div>

<div id="map" class="map"></div>



        </section> -->


        <!-- Footer -->
        <div class="col-md-12  col-xs-12">
         <footer class="row">


            <div class="container text-center">
            <div class="col-md-12  col-xs-12">
                <div class=" col-md-9 col-xs-12">
                    Copyright © 2016
                    <a href="http://www.pohost.cz/" title="pohost.cz" target="_blank">pohost.cz</a>
                        webová platforma pro phostinství restaurace
                </div>
                <div class="col-md-3 col-xs-12"><a title="Webdesign" target="_blank" href="http://www.inkluna.cz/sluzby/">Webdesign</a> - <a title="studio inkluna.cz" target="_blank" href="http://www.inkluna.cz/">inkluna.cz</a>
      </div>
            </div>
            </div>

        </footer>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.js">
        </script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js">
        </script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js">
        </script>

        <script type="text/javascript" src="js/TimelineLite.min.js">
        </script>
        <script type="text/javascript" src="js/TweenMax.min.js">
        </script>


         <script type="text/javascript" src="js/ScrollMagic.js">
        </script>
        <script type="text/javascript" src="js/animation.gsap.js">
        </script>



       <script  type="text/javascript" src="js/debug.addIndicators.js">
        </script>

        <script type="text/javascript" src="js/gmap3.js">
        </script>
        <script type="text/javascript" src="js/polymaps.js">
        </script>



        <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false">
        </script>
        <!-- Custom Theme JavaScript -->
        <script src="js/grayscale.js">
        </script>
       <script type="text/javascript" src="js/setmap.js">
        </script>
        <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59980684-3', 'auto');
  ga('send', 'pageview');

</script>





    </body>
</html>
