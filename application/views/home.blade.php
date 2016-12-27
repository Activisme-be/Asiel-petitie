
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activisme | Stop Theo Francken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:description" content="{{ $this->config->item('app_description') }}" />

    <link href="images/favicon.ico" rel="icon" type="image/png">

    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic%7CRoboto:400,300,500,700,900%7CCutive+Mono" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ base_url('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ base_url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ base_url('assets/css/patternbolt.css') }}" rel="stylesheet">
    <link href="{{ base_url('assets/css/jquery.fs.boxer.css') }}" rel="stylesheet">
    <link href="{{ base_url('assets/css/jquery.fs.wallpaper.css') }}" rel="stylesheet">
    <link href="{{ base_url('assets/css/style.css" rel="stylesheet') }}" media="screen">

    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "eff543fa-3d9c-49e1-a64e-cb4acbfb2ebe", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="60" class="one-page">
<header id="header" role="banner">
    <nav role="navigation" id="main-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <label class="toggle-nav-label visible-xs" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i></label>
                    <input type="checkbox" id="toggle-main-nav" class="toggle-nav-input">
                    <ul id="main-menu" class="menu nav">
                        <li class="menu-item active">
                            <a href="#home" class="smooth-scroll"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="menu-item">
                            <a href="#petition" class="smooth-scroll">Petitie</a>
                        </li>
                        <li class="menu-item">
                            <a href="#letter" class="smooth-scroll">Email</a>
                        </li>
                        <li class="menu-item">
                            <a href="#news" class="smooth-scroll">Updates</a>
                        </li>
                        <li class="menu-item">
                            <a href="#sign-it" class="smooth-scroll">Teken!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<article id="content">
    <section id="home" class="crossfade pb-pattern o-lines-light" data-crossfade-start="{{ base_url('assets/images/splash.jpg') }}" data-crossfade-end="{{ base_url('assets/images/splash.jpg') }}">
        <div id="splash" class="midway-horizontal midway-vertical midway animated">
            <h1>Meneer de Staatssecretaris, Excellentie. <small>Wij willen dat u de rechtstaat respecteert.</small></h1>
            <a href="#petition" class="btn btn-primary btn-lg smooth-scroll hidden-xs">Steun deze petitie!</a>
        </div>
        <div id="counter" class="midway-horizontal midway animated">
            <div>Met <strong class="counter" data-number="{{ $signatures }}">0</strong> Supporters</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">99% Compleet</span>
                </div>
            </div>
            <div class="text-right">Hebben nog <strong class="counter" data-number="{{ $remain }}">0</strong> Supporters nodig.</div>
        </div>
    </section>
    <section id="petition">
        <div class="container">
            <div class="row content-padding-lg">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">De petitie</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6 id="petition-to">De petitie gegevens:</h6>
                </div>
            </div>
        </div>
        <div id="petitioned">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Petitie gestart door:</strong>
                        Tom Manheaghe.
                    </div>
                    <div class="col-sm-3">
                        <strong>Mails worden verzonden naar:</strong>
                        Het kabinet van Theo Francken.
                    </div>
                    <div class="col-sm-3">
                        <strong>In naam van:</strong>
                        De burgers.
                    </div>
                    <div class="col-sm-3">
                        <strong>Petitie uitgever:</strong>
                        <a href="http://www.activisme.be">www.activisme.be</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="affix">
            <div class="row content-padding padding-bottom-none">
                <div class="col-sm-5 col-md-4 equal-height">
                    <div id="side">
                        <a href="{{ base_url('assets/images/photo-02.jpg') }}" class="link-image" rel="lightbox" title="Syrisch kindje in vluchtelingenkamp"><img src="{{ base_url('assets/images/photo-02.jpg') }}" alt=""/></a>
                        <ul class="block-grid-2">
                            <li>
                                <a href="{{ base_url('assets/images/photo-03.jpg') }}" class="link-image" rel="lightbox" title="Aleppo"><img src="{{ base_url('assets/images/photo-03.jpg') }}" alt=""/></a>
                            </li>
                            <li>
                                <a href="{{ base_url('assets/images/photo-04.jpg') }}" class="link-image" rel="lightbox" title="Sta op voor syrie"><img src="{{ base_url('assets/images/photo-04.jpg') }}" alt=""/></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7 col-md-offset-1 equal-height">
                    <h1>Meneer de Staatssecretaris, Excellentie.</h1>
                    <div id="author">
                        <img src="{{ base_url('assets/images/tom.jpg') }}" alt="Tom Manheaghe"/>
                        <!-- Petitie door, <br/> -->
                        <strong>Tom Manheaghe</strong><br/>
                        Ieper, Belgie
                    </div>

                    <p class="lead">Bij het aanvaarden van Uw ambt hebt U een eed gezworen. Daarin zweert U de Grondwet te respecteren. Door die eed ontving U de parlementaire onschendbaarheid waarvan U geniet, en hebt U het recht verworven om Uw ambt uit te oefenen. Die uitoefening van Uw ambt is echter voorwaardelijk. Ze is bepaald door de eed die U hebt afgelegd.</p>
                    <p>Uw recente uitspraken over de rechterlijke macht in dit land:</p>
                    <p>Hoe rechters de trias politica schenden door Uw beleid te vernietigen en U te dwingen de wet te volgen is op zichzelf zowat de grofste schending van de trias politica die men zich kan inbeelden.</p>
                    <p>Het is vanzelfsprekend daardoor een overtreding van Uw eed, want de scheiding der machten is één van de pijlers van onze democratische Grondwet.</p>
                    <p>Als onafhankelijke burgers van dit land aanvaarden wij dat niet. En wij verordenen U, uit hoofde van Uw ambtseed, de wet na te leven, zoals deze U door een onafhankelijke rechtbank is opgelegd.</p>
                    <p>Het zou U ook sieren indien U zich voor deze volstrekt antidemocratische uithaal naar de onafhankelijkheid van de rechterlijke macht publiek zou verontschuldigen. Dat laatste laten we aan Uw eigen goede manieren over.</p>


                    <h6>Ondersteun ons door deze petitie te delen:</h6>

                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v2.8";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>

                                <div class="fb-share-button" data-href="http://www.asiel.activisme.be" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.asiel.activisme.be%2F&amp;src=sdkpreparse">Delen</a></div>

                </div>
            </div>
        </div>
    </section>
    <section id="letter" class="animated">
        <div class="container">
            <div class="row content-padding-lg">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">De petitie mail.</h2>
                </div>
            </div>
        </div>
        <div id="letter-container">
            <div class="container">
                <div class="row content-padding-xs">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <p>Meneer de Staatssecretaris, Excellentie.</p>

                        <p>Bij het aanvaarden van Uw ambt hebt U een eed gezworen. Daarin zweert U de Grondwet te respecteren. Door die eed ontving U de parlementaire onschendbaarheid waarvan U geniet, en hebt U het recht verworven om Uw ambt uit te oefenen. Die uitoefening van Uw ambt is echter voorwaardelijk. Ze is bepaald door de eed die U hebt afgelegd.</p>
                        <p>Uw recente uitspraken over de rechterlijke macht in dit land:</p>
                        <p>Hoe rechters de trias politica schenden door Uw beleid te vernietigen en U te dwingen de wet te volgen is op zichzelf zowat de grofste schending van de trias politica die men zich kan inbeelden.</p>
                        <p>Het is vanzelfsprekend daardoor een overtreding van Uw eed, want de scheiding der machten is één van de pijlers van onze democratische Grondwet.</p>
                        <p>Als onafhankelijke burgers van dit land aanvaarden wij dat niet. En wij verordenen U, uit hoofde van Uw ambtseed, de wet na te leven, zoals deze U door een onafhankelijke rechtbank is opgelegd.</p>
                        <p>Het zou U ook sieren indien U zich voor deze volstrekt antidemocratische uithaal naar de onafhankelijkheid van de rechterlijke macht publiek zou verontschuldigen. Dat laatste laten we aan Uw eigen goede manieren over.</p>

                        <p>Hoogachtend, [uw naam] wonend te, [wonende te]</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="animated">
        <div class="container">
            <div class="row content-padding-lg animated">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">Nieuws &amp; Updates</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="timeline">
                        <div class="entry animated">
                            <time datetime="2014-11-14">14 December, 2016</time>
                            <div>
                                <h5>Nieuwe lay-out van de petitie.</h5>
                               <p>Via deze weg willen we Tim Joosten voor de nieuwe lay-out bedanken.</p>
                            </div>
                        </div>
                        <div class="entry animated">
                            <time datetime="2014-11-13">13 December, 2016</time>
                            <div>
                                <h5>Kabinet krijgt deurwaarder op bezoek.</h5>
                                <p>Een deurwaarder is dinsdag rond 16.30 uur langs geweest op het kabinet van staatssecretaris voor Asiel en Migratie Theo Francken. De deurwaarder had een bevel bij tot het betalen van 20.000 euro aan dwangsommen.</p>
                                <p> Bron: <a href="http://www.knack.be/nieuws/belgie/deurwaarder-gaat-langs-bij-francken-met-bevel-tot-betaling-dwangsommen/article-normal-789409.html">Knack.be</a> </p>
                            </div>
                        </div>
                        <div class="entry sticky animated">
                            <time datetime="2014-11-9">9 December, 2016</time>
                            <div>
                                <h5>Wij hebben de mijlpaal van 1.000 mails bereikt.</h5>
                            </div>
                        </div>
                        <div class="entry animated">
                            <time datetime="2016-11-7">7 December, 2016</time>
                            <div>
                                <h5>De petitie is gestart.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sign-it" class="content-padding-lg animated">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">Teken of deel deze Petitie!</h2>
                </div>
            </div>
        </div>
        <div class="container" id="sign-row">
            <div class="row">
                <div class="col-sm-5 col-md-3 col-md-offset-2 text-right">
                    <ul id="sign-list">
                        <li><a target="_blank" href="http://www.facebook.com/share.php?u={{ base_url() }}&title={{ $this->config->item('email_header')}}" class="btn btn-block btn-primary facebook"><i class="fa fa-facebook"></i> Deel op Facebook</a></li>
                        <li><a target="_blank" href="http://twitter.com/intent/tweet?status=Stop-Theo-Francken+{{ base_url() }}" class="btn btn-block btn-primary twitter"><i class="fa fa-twitter"></i> Deel op Twitter</a></li>
                        <li><a target="_blank" href="https://plus.google.com/share?url={{ base_url() }}" class="btn btn-block btn-primary google"><i class="fa fa-google-plus"></i> Deel op Google</a></li>
                        <li><a target="_blank" href="#" class="btn btn-block btn-primary linkedin"><i class="fa fa-linkedin"></i> Deel op LinkedIn</a></li>
                        <li><a target="_blank" href="#" class="btn btn-block btn-primary pinterest"><i class="fa fa-pinterest"></i>Deel op Pinterest</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 col-sm-offset-2 col-md-3 col-md-offset-2">
                    <form id="signature" method="post" action="{{ base_url('signature/insert') }}">
                        <div class="form-group">
                            <input type="text" class="form-control" v-model="signature.name" name="name" value="" placeholder="Voor en Achternaam"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" v-model="signature.email" value="" placeholder="E-mail Adres"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" v-model="signature.city" name="city" placeholder="Woonplaats. bv. 2300, Turnhout" rows="3"></textarea>
                        </div>

                        <div v-if="! submitted">
                            <button v-attr="disabled: errors" type="submit" class="btn btn-block btn-primary">Teken deze petitie!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>
<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row" id="absolute-footer">
            <div class="col-sm-4">
                <p>Petitie geplaatst onder: <a href="http://www.activisme.be">www.activisme.be</a></p>
            </div>
            <div class="col-sm-4 text-center"></div>
            <div class="col-sm-4 text-right">
                <p>Ontworpen door: <a href="mailto:info@activisme.be">Tim Joosten</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ base_url('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ base_url('assets/js/waypoints.min.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.velocity.min.js') }}"></script>
<script src="{{ base_url('assets/js/velocity.ui.js') }}"></script>
<script src="{{ base_url('assets/js/midway.min.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.crossfade.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.fs.boxer.min.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.fs.wallpaper.min.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.sticky-kit.min.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ base_url('assets/js/jquery.animateNumbers.js') }}"></script>

<script src="{{ base_url('assets/js/vue.js') }}"></script>
<script src="{{ base_url('assets/js/vue-resource.js') }}"></script>
<script src="{{ base_url('assets/js/vue-signature.js') }}"></script>

<script src="{{ base_url('assets/js/main.js') }}"></script>
</body>
</html>
