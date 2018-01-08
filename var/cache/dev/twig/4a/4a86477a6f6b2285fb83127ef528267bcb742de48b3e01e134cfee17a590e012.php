<?php

/* base.html.twig */
class __TwigTemplate_40eb2140d373275ffa5f9e049db9c0f869bbeac7a97236008044a0fc9c3e4a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fd9d55b10cae1b81d558f895587acf7a6d07c1e9c2564cdac585c258fa31dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd9d55b10cae1b81d558f895587acf7a6d07c1e9c2564cdac585c258fa31dbc->enter($__internal_8fd9d55b10cae1b81d558f895587acf7a6d07c1e9c2564cdac585c258fa31dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b072b8e209b4626b2b19c18bbd4419d69f6abc6badb1affce318202bcd1b4647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b072b8e209b4626b2b19c18bbd4419d69f6abc6badb1affce318202bcd1b4647->enter($__internal_b072b8e209b4626b2b19c18bbd4419d69f6abc6badb1affce318202bcd1b4647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "


</head>
<body>

<div class=\"navbar-upper \">
    <nav class=\"z-depth-0 \">
        <div class=\"nav-wrapper white\">
            <div class=\"row\">
                <div class=\"col s12\">
                    <a href=\"#modal1\" class=\"brand-logo\" style=\"display:block;float:left;\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/logo-filiere-spmeca-01.png"), "html", null, true);
        echo "\"></a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">

                        <li>

                            <form style=\"height:64px;\">
                                <div class=\"input-field \">
                                    <input id=\"search\" type=\"search\" required placeholder=\"Search\">
                                    <label class=\"label-icon\" for=\"search\"><i class=\"this material-icons\">search</i></label>
                                    <!--                   <i class=\"material-icons\" style=\"\">close</i> -->
                                </div>
                            </form>

                        </li>
                        <!-- <li><a href=\"#modal1\"><i class=\"material-icons\">search</i></a></li> -->
                        <!-- <li><a href=\"#modal1\"><i class=\"material-icons\">view_module</i></a></li> -->
                        <!-- <li><a href=\"#modal1\"><i class=\"material-icons\">refresh</i></a></li> -->
                        <li><a class=\"waves-effect waves-light btn btn-large green animated tada\" href=\"/contact\"><i class=\"material-icons left\">place</i>contact!</a></li>
                        <li><a href=\"#sheet1\"><i class=\"material-icons\">more_vert</i></a></li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
</div>




<div class=\"navbar-lower\">
    <nav class=\"z-depth-10 nav-extended white\">
        <div class=\"nav-wrapper\">
            <div class=\"row\">
                <div class=\"col s12 white\">
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse show-on-large\"><i class=\"material-icons\">menu</i></a>
                    <a class=\"fadeInLogo brand-logo animated slideInUp\">

                        <!-- <img src=\"https://materializecss.com/res/materialize.svg\" alt=\"\" style=\"margin-top:12px;\" height=\"40px\"/> -->
                        <i style=\"color:red;\" class=\"large material-icons\">important_devices</i>
                    </a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                        <li><a class=\"hover\" href=\"/Filiale\">La Filière</a></li>
                        <li><a href=\"/Work\">Les Travaux</a></li>
                        <li><a href=\"/actors\">Les Acteurs</a></li>
                        <li><a href=\"/entity_advert\">L'actu</a></li>
                        <li><a>
                        ";
        // line 74
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 75
            echo "                        ";
            // line 76
            echo "
                        <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                        ";
        } else {
            // line 79
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 80
        echo "</a>
                        </ul>

                </div>
                <div class=\"nav-content \">

                        <ul class=\"side-nav\" id=\"mobile-demo\">


                            <li class=\"sidenav-header blue\">
                                <div class=\"row\">
                                    <div class=\"col s8\">
                                        <a class=\"btn-flat dropdown-button waves-effect waves-light white-text\" href=\"#\" data-activates=\"profile-dropdown\">Mecacorps<i class=\"mdi-navigation-arrow-drop-down right\"></i></a>
                                        <ul id=\"profile-dropdown\" class=\"dropdown-content\">
                                            <li><a href=\"#\"><i class=\"material-icons\">person</i>Profile</a></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">settings</i>Setting</a></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">help</i>Help</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">lock</i>Lock</a></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>




                            <li class=\"white\">
                                <ul class=\"collapsible collapsible-accordion\">
                                    <li>
                                        <a class=\"collapsible-header waves-effect waves-blue\"><i class=\"material-icons\">folder_special</i>Backoffice <i class=\"material-icons right\" style=\"margin-right:0;\">arrow_drop_down</i></a>
                                        <div class=\"collapsible-body\">
                                            <ul>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/admin\"><i class=\"material-icons\">account_balance</i>AdminPanel<span class=\"new badge right yellow grey lighten-1\" data-badge-caption=\"updated\"></span></a></li>
                                                <li><div class=\"divider\"></div></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"white\">
                                <ul class=\"collapsible collapsible-accordion\">
                                    <li>
                                        <a class=\"collapsible-header waves-effect waves-blue\"><i class=\"material-icons\">account_circle</i>Membre <i class=\"material-icons right\" style=\"margin-right:0;\">arrow_drop_down</i></a>
                                        <div class=\"collapsible-body\">
                                            <ul>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/profile\"><i class=\"material-icons\">wifi</i>Mon profil</a></li>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/register\"><i class=\"material-icons\">wifi</i>S'enregistrer</a></li>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/login\"><i class=\"material-icons\">wifi</i>Se connecter</a></li>
                                                <li><div class=\"divider\"></div></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"/Work\"><i class=\"material-icons\">build</i>Les Travaux</a></li>
                            <li><a href=\"/actors\"><i class=\"material-icons\">directions_car</i>Les Acteurs</a></li>
                            <li><a href=\"/entity_advert\"><i class=\"material-icons\">event_note</i>L'actu</a></li>


                            ";
        // line 142
        echo "                                ";
        // line 143
        echo "                                    ";
        // line 144
        echo "                                        ";
        // line 145
        echo "                                            ";
        // line 146
        echo "                                        ";
        // line 147
        echo "                                        ";
        // line 148
        echo "                                            ";
        // line 149
        echo "                                        ";
        // line 150
        echo "                                        ";
        // line 151
        echo "                                            ";
        // line 152
        echo "                                        ";
        // line 153
        echo "                                        ";
        // line 154
        echo "                                            ";
        // line 155
        echo "                                        ";
        // line 156
        echo "                                        ";
        // line 157
        echo "                                            ";
        // line 158
        echo "                                        ";
        // line 159
        echo "                                        ";
        // line 160
        echo "                                            ";
        // line 161
        echo "                                        ";
        // line 162
        echo "                                    ";
        // line 163
        echo "                                ";
        // line 164
        echo "                            ";
        // line 165
        echo "                        </ul>
                    </div>
                </div>
            </div>

            <a class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal hide-on-med-and-down scale-transition scale-out pulse\" href=\"#modal1\">
                <i class=\"material-icons\">call</i>
            </a>

        </div>
    </nav>
</div>



<div id=\"tab1\" class=\"col s12\">";
        // line 180
        $this->displayBlock('body', $context, $blocks);
        // line 181
        echo " </div>




<div id=\"tab2\" class=\"col s12\">


<!-- MOBILE ONLY FLOATING ACTION BUTTON -->
<div class=\"fixed-action-btn hide-on-large-only\">
    <a class=\"btn-floating btn-large teal\">
        <i class=\"large material-icons\">menu</i>
    </a>
    <ul>
        <li><a href=\"#modal1\" class=\"btn-floating teal lighten-3 tooltipped\" data-tooltip=\"Share\" data-position=\"left\"><i class=\"material-icons\">share</i></a></li>
        <li><a href=\"#modal1\" class=\"btn-floating teal lighten-2 tooltipped\" data-tooltip=\"Start chat\" data-position=\"left\"><i class=\"material-icons\">chat</i></a></li>
        <li><a href=\"#modal1\" class=\"btn-floating teal lighten-1 tooltipped\" data-tooltip=\"Save contact\" data-position=\"left\"><i class=\"material-icons\">file_download</i></a></li>
        <li><a href=\"#modal1\" class=\"btn-floating teal tooltipped\" data-tooltip=\"Call\" data-position=\"left\"><i class=\"material-icons\">call</i></a></li>
    </ul>
</div>













<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col m6 l6 s12\">
                <h5 class=\"white-text\">Footer Content</h5>
                <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class=\"col m6 l4 offset-l2 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Copyright Text
            <span class=\"right\">
      <a class=\"grey-text text-lighten-4\" href=\"#!\">Privacy Policy</a>
      &nbsp;|&nbsp;
      <a class=\"grey-text text-lighten-4\" href=\"#!\">Terms & Conditions</a>
    </span>
        </div>
    </div>
</footer>






<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style=\"position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 99999999;\">
    <span class=\"hide-on-med-only hide-on-large-only\">Small</span>
    <span class=\"hide-on-small-only hide-on-large-only\">Tablet</span>
    <span class=\"hide-on-small-only hide-on-med-only\">Desktop</span>
</div>




<!-- TRANSIFEX MOCKUP LANGUAGE CHOOSER -->
<div id=\"tx-live-lang-container\" class=\"txlive-langselector txlive-langselector-bottomright\"><ul id=\"tx-live-lang-picker\" class=\"txlive-langselector-list notranslate\"><li data-value=\"en\">English</li><li data-value=\"ar\">العربية</li><li data-value=\"zh\">中文</li><li data-value=\"cs\">Čeština</li><li data-value=\"nl\">Nederlands</li><li data-value=\"fr\">Français</li><li data-value=\"de\">Deutsch</li><li data-value=\"ko\">한국어</li><li data-value=\"pt\">Português</li><li data-value=\"ru\">Русский</li><li data-value=\"es\">Español</li><li data-value=\"sv\">Svenska</li><li data-value=\"th\">ภาษาไทย</li><li data-value=\"tr\">Türkçe</li></ul><div class=\"txlive-langselector-toggle notranslate\" id=\"tx-live-lang-toggle\"><span class=\"txlive-langselector-current\" id=\"tx-live-lang-current\">English</span><span class=\"txlive-langselector-marker\"></span></div></div>






















";
        // line 285
        echo "    ";
        // line 286
        echo "        ";
        // line 287
        echo "        ";
        // line 288
        echo "        ";
        // line 289
        echo "            ";
        // line 290
        echo "            ";
        // line 291
        echo "            ";
        // line 292
        echo "            ";
        // line 293
        echo "            ";
        // line 294
        echo "            ";
        // line 295
        echo "                ";
        // line 296
        echo "                ";
        // line 297
        echo "
                ";
        // line 299
        echo "                ";
        // line 300
        echo "                ";
        // line 301
        echo "                ";
        // line 302
        echo "            ";
        // line 303
        echo "        ";
        // line 304
        echo "    ";
        // line 305
        echo "
";
        // line 308
        echo "



";
        // line 313
        echo "    ";
        // line 314
        echo "        ";
        // line 315
        echo "            ";
        // line 316
        echo "        ";
        // line 317
        echo "    ";
        // line 320
        echo "
";
        // line 322
        echo "    ";
        // line 323
        echo "        ";
        // line 324
        echo "            ";
        // line 325
        echo "                ";
        // line 326
        echo "                ";
        // line 327
        echo "            ";
        // line 328
        echo "            ";
        // line 329
        echo "                ";
        // line 330
        echo "                ";
        // line 331
        echo "                    ";
        // line 332
        echo "                    ";
        // line 333
        echo "                    ";
        // line 334
        echo "                    ";
        // line 335
        echo "                ";
        // line 336
        echo "            ";
        // line 337
        echo "        ";
        // line 338
        echo "    ";
        // line 339
        echo "    ";
        // line 340
        echo "        ";
        // line 341
        echo "            ";
        // line 342
        echo "
            ";
        // line 344
        echo "        ";
        // line 345
        echo "    ";
        // line 352
        echo "<div class=\"preloader-background\">
    <div class=\"preloader-wrapper big active\">
        <div class=\"spinner-layer spinner-blue-only\">
            <div class=\"circle-clipper left\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"gap-patch\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"circle-clipper right\">
                <div class=\"circle\"></div>
            </div>
        </div>
    </div>
</div>


<script>document.addEventListener(\"DOMContentLoaded\", function(){
        \$('.preloader-background').delay(1700).fadeOut('fast');

        \$('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
    });

    // Initialize collapse button
    \$(\".button-collapse\").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //\$('.collapsible').collapsible();
    // AFFIX LOWER NAVBAR ON SCROLL
    \$(window).scroll(function() {
        var scroll = \$(window).scrollTop();
        if (scroll >= 64) {
            \$(\".navbar-lower\").addClass(\"navbar-fixed\");
        }
        else {
            \$(\".navbar-lower\").removeClass(\"navbar-fixed\");
        }
    });


    // FADE IN SMALL LOGO AND FAB ON SCROLL
    \$(window).scroll(function() {
        var scrollPosition = \$(this).scrollTop();
        var \$fadeInLogo = \$('.fadeInLogo');
        var \$growInFab = \$('.halfway-fab');
        if (scrollPosition > 128) {
            // Fade in logo & bring in FAB
            \$fadeInLogo.fadeIn(200);
            \$growInFab.removeClass(\"scale-out\");
        } else {
            // Fade out logo & remove FAB
            \$fadeInLogo.fadeOut(200);
            \$growInFab.addClass(\"scale-out\");
        }
    });


    // MODAL
    \$(document).ready(function(){
        \$('.modal').modal();
    });

    // DROPDOWNS
    \$(document).ready(function(){
        \$(\".dropdown-button\").dropdown(
            {
                belowOrigin: true
            }
        );
    });

    //TABS
    \$(document).ready(function(){
        \$('ul.tabs').tabs();
    });

    //SCROLLSPY
    \$(document).ready(function(){
        \$('.scrollspy').scrollSpy();
    });

    // SIDEBAR
    \$(document).ready(function(){
        \$('.button-collapse').sideNav({
                menuWidth: 300, // Default is 300
                edge: 'left', // Choose the horizontal origin
                closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );
    });
    </script>
";
        // line 445
        $this->displayBlock('javascripts', $context, $blocks);
        // line 448
        echo "



</body>
</html>";
        
        $__internal_8fd9d55b10cae1b81d558f895587acf7a6d07c1e9c2564cdac585c258fa31dbc->leave($__internal_8fd9d55b10cae1b81d558f895587acf7a6d07c1e9c2564cdac585c258fa31dbc_prof);

        
        $__internal_b072b8e209b4626b2b19c18bbd4419d69f6abc6badb1affce318202bcd1b4647->leave($__internal_b072b8e209b4626b2b19c18bbd4419d69f6abc6badb1affce318202bcd1b4647_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52515b5b5040975b478587523f67c3c1c1b228fcd6299ce4093e236505e02ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52515b5b5040975b478587523f67c3c1c1b228fcd6299ce4093e236505e02ecb->enter($__internal_52515b5b5040975b478587523f67c3c1c1b228fcd6299ce4093e236505e02ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a661cbdb6689b456130f04f94895ad7de6da517684ef0786f435833c2fa2ad1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a661cbdb6689b456130f04f94895ad7de6da517684ef0786f435833c2fa2ad1b->enter($__internal_a661cbdb6689b456130f04f94895ad7de6da517684ef0786f435833c2fa2ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-3.2.1.js"), "html", null, true);
        echo " integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"), "html", null, true);
        echo "></script>
         <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../js/index.js"), "html", null, true);
        echo "\">
";
        
        $__internal_a661cbdb6689b456130f04f94895ad7de6da517684ef0786f435833c2fa2ad1b->leave($__internal_a661cbdb6689b456130f04f94895ad7de6da517684ef0786f435833c2fa2ad1b_prof);

        
        $__internal_52515b5b5040975b478587523f67c3c1c1b228fcd6299ce4093e236505e02ecb->leave($__internal_52515b5b5040975b478587523f67c3c1c1b228fcd6299ce4093e236505e02ecb_prof);

    }

    // line 180
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b54f134d95f55970c8f83c384144c24dcf45a157c0e6dbc61555a637b1c39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b54f134d95f55970c8f83c384144c24dcf45a157c0e6dbc61555a637b1c39b->enter($__internal_a0b54f134d95f55970c8f83c384144c24dcf45a157c0e6dbc61555a637b1c39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7550d244193ebd0548aa4edc9ba2cd94739bdef9df204d17d6c137bdf424f1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7550d244193ebd0548aa4edc9ba2cd94739bdef9df204d17d6c137bdf424f1b4->enter($__internal_7550d244193ebd0548aa4edc9ba2cd94739bdef9df204d17d6c137bdf424f1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 181
        echo "    ";
        
        $__internal_7550d244193ebd0548aa4edc9ba2cd94739bdef9df204d17d6c137bdf424f1b4->leave($__internal_7550d244193ebd0548aa4edc9ba2cd94739bdef9df204d17d6c137bdf424f1b4_prof);

        
        $__internal_a0b54f134d95f55970c8f83c384144c24dcf45a157c0e6dbc61555a637b1c39b->leave($__internal_a0b54f134d95f55970c8f83c384144c24dcf45a157c0e6dbc61555a637b1c39b_prof);

    }

    // line 445
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6ddcb017cd6aa679f3ced1186bac091ec846748edca7a37409c0648f36b997a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ddcb017cd6aa679f3ced1186bac091ec846748edca7a37409c0648f36b997a->enter($__internal_a6ddcb017cd6aa679f3ced1186bac091ec846748edca7a37409c0648f36b997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0eb8406089671a2beec29c4fab06215749905d6002762fff5cb00b3c4e4807fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb8406089671a2beec29c4fab06215749905d6002762fff5cb00b3c4e4807fb->enter($__internal_0eb8406089671a2beec29c4fab06215749905d6002762fff5cb00b3c4e4807fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 446
        echo "
";
        
        $__internal_0eb8406089671a2beec29c4fab06215749905d6002762fff5cb00b3c4e4807fb->leave($__internal_0eb8406089671a2beec29c4fab06215749905d6002762fff5cb00b3c4e4807fb_prof);

        
        $__internal_a6ddcb017cd6aa679f3ced1186bac091ec846748edca7a37409c0648f36b997a->leave($__internal_a6ddcb017cd6aa679f3ced1186bac091ec846748edca7a37409c0648f36b997a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 446,  630 => 445,  620 => 181,  611 => 180,  599 => 13,  595 => 12,  591 => 11,  586 => 9,  581 => 8,  572 => 7,  557 => 448,  555 => 445,  460 => 352,  458 => 345,  456 => 344,  453 => 342,  451 => 341,  449 => 340,  447 => 339,  445 => 338,  443 => 337,  441 => 336,  439 => 335,  437 => 334,  435 => 333,  433 => 332,  431 => 331,  429 => 330,  427 => 329,  425 => 328,  423 => 327,  421 => 326,  419 => 325,  417 => 324,  415 => 323,  413 => 322,  410 => 320,  408 => 317,  406 => 316,  404 => 315,  402 => 314,  400 => 313,  394 => 308,  391 => 305,  389 => 304,  387 => 303,  385 => 302,  383 => 301,  381 => 300,  379 => 299,  376 => 297,  374 => 296,  372 => 295,  370 => 294,  368 => 293,  366 => 292,  364 => 291,  362 => 290,  360 => 289,  358 => 288,  356 => 287,  354 => 286,  352 => 285,  248 => 181,  246 => 180,  229 => 165,  227 => 164,  225 => 163,  223 => 162,  221 => 161,  219 => 160,  217 => 159,  215 => 158,  213 => 157,  211 => 156,  209 => 155,  207 => 154,  205 => 153,  203 => 152,  201 => 151,  199 => 150,  197 => 149,  195 => 148,  193 => 147,  191 => 146,  189 => 145,  187 => 144,  185 => 143,  183 => 142,  120 => 80,  114 => 79,  109 => 77,  106 => 76,  104 => 75,  102 => 74,  51 => 26,  38 => 15,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    {% block stylesheets %}
        <script src={{ asset('https://code.jquery.com/jquery-3.2.1.js') }} integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src={{ asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js') }}></script>
         <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href={{ asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css') }}>
        <link rel=\"stylesheet\" href=\"{{ asset('../../../css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('../../../js/index.js') }}\">
{% endblock %}



</head>
<body>

<div class=\"navbar-upper \">
    <nav class=\"z-depth-0 \">
        <div class=\"nav-wrapper white\">
            <div class=\"row\">
                <div class=\"col s12\">
                    <a href=\"#modal1\" class=\"brand-logo\" style=\"display:block;float:left;\"><img src=\"{{ asset('../../../images/logo-filiere-spmeca-01.png') }}\"></a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">

                        <li>

                            <form style=\"height:64px;\">
                                <div class=\"input-field \">
                                    <input id=\"search\" type=\"search\" required placeholder=\"Search\">
                                    <label class=\"label-icon\" for=\"search\"><i class=\"this material-icons\">search</i></label>
                                    <!--                   <i class=\"material-icons\" style=\"\">close</i> -->
                                </div>
                            </form>

                        </li>
                        <!-- <li><a href=\"#modal1\"><i class=\"material-icons\">search</i></a></li> -->
                        <!-- <li><a href=\"#modal1\"><i class=\"material-icons\">view_module</i></a></li> -->
                        <!-- <li><a href=\"#modal1\"><i class=\"material-icons\">refresh</i></a></li> -->
                        <li><a class=\"waves-effect waves-light btn btn-large green animated tada\" href=\"/contact\"><i class=\"material-icons left\">place</i>contact!</a></li>
                        <li><a href=\"#sheet1\"><i class=\"material-icons\">more_vert</i></a></li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
</div>




<div class=\"navbar-lower\">
    <nav class=\"z-depth-10 nav-extended white\">
        <div class=\"nav-wrapper\">
            <div class=\"row\">
                <div class=\"col s12 white\">
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse show-on-large\"><i class=\"material-icons\">menu</i></a>
                    <a class=\"fadeInLogo brand-logo animated slideInUp\">

                        <!-- <img src=\"https://materializecss.com/res/materialize.svg\" alt=\"\" style=\"margin-top:12px;\" height=\"40px\"/> -->
                        <i style=\"color:red;\" class=\"large material-icons\">important_devices</i>
                    </a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                        <li><a class=\"hover\" href=\"/Filiale\">La Filière</a></li>
                        <li><a href=\"/Work\">Les Travaux</a></li>
                        <li><a href=\"/actors\">Les Acteurs</a></li>
                        <li><a href=\"/entity_advert\">L'actu</a></li>
                        <li><a>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {#{{ app.user.username }}#}

                        <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                        {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                        {% endif %}</a>
                        </ul>

                </div>
                <div class=\"nav-content \">

                        <ul class=\"side-nav\" id=\"mobile-demo\">


                            <li class=\"sidenav-header blue\">
                                <div class=\"row\">
                                    <div class=\"col s8\">
                                        <a class=\"btn-flat dropdown-button waves-effect waves-light white-text\" href=\"#\" data-activates=\"profile-dropdown\">Mecacorps<i class=\"mdi-navigation-arrow-drop-down right\"></i></a>
                                        <ul id=\"profile-dropdown\" class=\"dropdown-content\">
                                            <li><a href=\"#\"><i class=\"material-icons\">person</i>Profile</a></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">settings</i>Setting</a></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">help</i>Help</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">lock</i>Lock</a></li>
                                            <li><a href=\"#\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>




                            <li class=\"white\">
                                <ul class=\"collapsible collapsible-accordion\">
                                    <li>
                                        <a class=\"collapsible-header waves-effect waves-blue\"><i class=\"material-icons\">folder_special</i>Backoffice <i class=\"material-icons right\" style=\"margin-right:0;\">arrow_drop_down</i></a>
                                        <div class=\"collapsible-body\">
                                            <ul>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/admin\"><i class=\"material-icons\">account_balance</i>AdminPanel<span class=\"new badge right yellow grey lighten-1\" data-badge-caption=\"updated\"></span></a></li>
                                                <li><div class=\"divider\"></div></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"white\">
                                <ul class=\"collapsible collapsible-accordion\">
                                    <li>
                                        <a class=\"collapsible-header waves-effect waves-blue\"><i class=\"material-icons\">account_circle</i>Membre <i class=\"material-icons right\" style=\"margin-right:0;\">arrow_drop_down</i></a>
                                        <div class=\"collapsible-body\">
                                            <ul>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/profile\"><i class=\"material-icons\">wifi</i>Mon profil</a></li>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/register\"><i class=\"material-icons\">wifi</i>S'enregistrer</a></li>
                                                <li><a class=\"waves-effect waves-blue\" href=\"/login\"><i class=\"material-icons\">wifi</i>Se connecter</a></li>
                                                <li><div class=\"divider\"></div></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"/Work\"><i class=\"material-icons\">build</i>Les Travaux</a></li>
                            <li><a href=\"/actors\"><i class=\"material-icons\">directions_car</i>Les Acteurs</a></li>
                            <li><a href=\"/entity_advert\"><i class=\"material-icons\">event_note</i>L'actu</a></li>


                            {#<li class=\"sidenav-footer\">#}
                                {#<div class=\"row\">#}
                                    {#<div class=\"social-icons\">#}
                                        {#<div class=\"col s2\">#}
                                            {#<a href=\"#\"><i class=\"fa fa-lg fa-linkedin-square\"></i></a>#}
                                        {#</div>#}
                                        {#<div class=\"col s2\">#}
                                            {#<a href=\"#\"><i class=\"fa fa-lg fa-facebook-official\"></i></a>#}
                                        {#</div>#}
                                        {#<div class=\"col s2\">#}
                                            {#<a href=\"#\"><i class=\"fa fa-lg fa-twitter\"></i></a>#}
                                        {#</div>#}
                                        {#<div class=\"col s2\">#}
                                            {#<a href=\"#\"><i class=\"fa fa-lg fa-google-plus\"></i></a>#}
                                        {#</div>#}
                                        {#<div class=\"col s2\">#}
                                            {#<a href=\"#\"><i class=\"fa fa-lg fa-pinterest\"></i></a>#}
                                        {#</div>#}
                                        {#<div class=\"col s2\">#}
                                            {#<a href=\"#\"><i class=\"fa fa-lg fa-youtube\"></i></a>#}
                                        {#</div>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</li>#}
                        </ul>
                    </div>
                </div>
            </div>

            <a class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal hide-on-med-and-down scale-transition scale-out pulse\" href=\"#modal1\">
                <i class=\"material-icons\">call</i>
            </a>

        </div>
    </nav>
</div>



<div id=\"tab1\" class=\"col s12\">{% block body %}
    {% endblock %} </div>




<div id=\"tab2\" class=\"col s12\">


<!-- MOBILE ONLY FLOATING ACTION BUTTON -->
<div class=\"fixed-action-btn hide-on-large-only\">
    <a class=\"btn-floating btn-large teal\">
        <i class=\"large material-icons\">menu</i>
    </a>
    <ul>
        <li><a href=\"#modal1\" class=\"btn-floating teal lighten-3 tooltipped\" data-tooltip=\"Share\" data-position=\"left\"><i class=\"material-icons\">share</i></a></li>
        <li><a href=\"#modal1\" class=\"btn-floating teal lighten-2 tooltipped\" data-tooltip=\"Start chat\" data-position=\"left\"><i class=\"material-icons\">chat</i></a></li>
        <li><a href=\"#modal1\" class=\"btn-floating teal lighten-1 tooltipped\" data-tooltip=\"Save contact\" data-position=\"left\"><i class=\"material-icons\">file_download</i></a></li>
        <li><a href=\"#modal1\" class=\"btn-floating teal tooltipped\" data-tooltip=\"Call\" data-position=\"left\"><i class=\"material-icons\">call</i></a></li>
    </ul>
</div>













<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col m6 l6 s12\">
                <h5 class=\"white-text\">Footer Content</h5>
                <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class=\"col m6 l4 offset-l2 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Copyright Text
            <span class=\"right\">
      <a class=\"grey-text text-lighten-4\" href=\"#!\">Privacy Policy</a>
      &nbsp;|&nbsp;
      <a class=\"grey-text text-lighten-4\" href=\"#!\">Terms & Conditions</a>
    </span>
        </div>
    </div>
</footer>






<!-- Visual Breakpoint Helper for Materialize - http://materializecss.com/ -->
<div style=\"position:fixed;bottom:0;left:0;background-color:rgba(0,0,0,0.5);padding:10px;color:#fff;z-index: 99999999;\">
    <span class=\"hide-on-med-only hide-on-large-only\">Small</span>
    <span class=\"hide-on-small-only hide-on-large-only\">Tablet</span>
    <span class=\"hide-on-small-only hide-on-med-only\">Desktop</span>
</div>




<!-- TRANSIFEX MOCKUP LANGUAGE CHOOSER -->
<div id=\"tx-live-lang-container\" class=\"txlive-langselector txlive-langselector-bottomright\"><ul id=\"tx-live-lang-picker\" class=\"txlive-langselector-list notranslate\"><li data-value=\"en\">English</li><li data-value=\"ar\">العربية</li><li data-value=\"zh\">中文</li><li data-value=\"cs\">Čeština</li><li data-value=\"nl\">Nederlands</li><li data-value=\"fr\">Français</li><li data-value=\"de\">Deutsch</li><li data-value=\"ko\">한국어</li><li data-value=\"pt\">Português</li><li data-value=\"ru\">Русский</li><li data-value=\"es\">Español</li><li data-value=\"sv\">Svenska</li><li data-value=\"th\">ภาษาไทย</li><li data-value=\"tr\">Türkçe</li></ul><div class=\"txlive-langselector-toggle notranslate\" id=\"tx-live-lang-toggle\"><span class=\"txlive-langselector-current\" id=\"tx-live-lang-current\">English</span><span class=\"txlive-langselector-marker\"></span></div></div>






















{#<div class=\"navbar-fixed\">#}
{#<nav class=\"nav-extended white\">#}
    {#<div class=\"nav-wrapper\">#}
        {#<a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>#}
        {#<a href=\"/\" class=\"brand-logo\"><img src=\"{{ asset('../../../images/logo-filiere-spmeca-01.png') }}\"  /></a>#}
        {#<ul class=\"right hide-on-med-and-down\">#}
            {#<li><a class=\"hover\" href=\"/Filiale\">La Filière</a></li>#}
            {#<li><a href=\"/Work\">Les Travaux</a></li>#}
            {#<li><a href=\"/entity_actor\">Les Actors</a></li>#}
            {#<li><a href=\"/entity_advert\">L'actu</a></li>#}
            {#<li><a href=\"/contact\">Contacts</a></li>#}
            {#<div class=\"chip\">#}
                {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                {#{{ app.user.username }}#}

                {#<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>#}
                {#{% else %}#}
                {#<a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>#}
                {#{% endif %}</li>#}
            {#</div>#}
        {#</ul>#}
    {#</div>#}

{#</nav>#}
{#</div>#}




{#{% for type, messages in app.session.flashBag.all %}#}
    {#{% for message in messages %}#}
        {#<div class=\"{{ type }}\">#}
            {#{{ message|trans({}, 'FOSUserBundle') }}#}
        {#</div>#}
    {#{% endfor %}#}
{#{% endfor %}#}
{#{% block body %}{% endblock %}#}

{#<footer class=\"page-footer #84bd00\">#}
    {#<div class=\"container\">#}
        {#<div class=\"row\">#}
            {#<div class=\"col l6 s12\">#}
                {#<h5 class=\"white-text\">Footer Content</h5>#}
                {#<p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>#}
            {#</div>#}
            {#<div class=\"col l4 offset-l2 s12\">#}
                {#<h5 class=\"white-text\">Links</h5>#}
                {#<ul>#}
                    {#<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>#}
                    {#<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>#}
                    {#<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>#}
                    {#<li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>#}
                {#</ul>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
    {#<div class=\"footer-copyright\">#}
        {#<div class=\"container\">#}
            {#© 2017 Copyright Text#}

            {#<a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>#}
        {#</div>#}
    {#</div>#}
{#</footer>#}
{#-------------------------------------------------------------------#}




<div class=\"preloader-background\">
    <div class=\"preloader-wrapper big active\">
        <div class=\"spinner-layer spinner-blue-only\">
            <div class=\"circle-clipper left\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"gap-patch\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"circle-clipper right\">
                <div class=\"circle\"></div>
            </div>
        </div>
    </div>
</div>


<script>document.addEventListener(\"DOMContentLoaded\", function(){
        \$('.preloader-background').delay(1700).fadeOut('fast');

        \$('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
    });

    // Initialize collapse button
    \$(\".button-collapse\").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //\$('.collapsible').collapsible();
    // AFFIX LOWER NAVBAR ON SCROLL
    \$(window).scroll(function() {
        var scroll = \$(window).scrollTop();
        if (scroll >= 64) {
            \$(\".navbar-lower\").addClass(\"navbar-fixed\");
        }
        else {
            \$(\".navbar-lower\").removeClass(\"navbar-fixed\");
        }
    });


    // FADE IN SMALL LOGO AND FAB ON SCROLL
    \$(window).scroll(function() {
        var scrollPosition = \$(this).scrollTop();
        var \$fadeInLogo = \$('.fadeInLogo');
        var \$growInFab = \$('.halfway-fab');
        if (scrollPosition > 128) {
            // Fade in logo & bring in FAB
            \$fadeInLogo.fadeIn(200);
            \$growInFab.removeClass(\"scale-out\");
        } else {
            // Fade out logo & remove FAB
            \$fadeInLogo.fadeOut(200);
            \$growInFab.addClass(\"scale-out\");
        }
    });


    // MODAL
    \$(document).ready(function(){
        \$('.modal').modal();
    });

    // DROPDOWNS
    \$(document).ready(function(){
        \$(\".dropdown-button\").dropdown(
            {
                belowOrigin: true
            }
        );
    });

    //TABS
    \$(document).ready(function(){
        \$('ul.tabs').tabs();
    });

    //SCROLLSPY
    \$(document).ready(function(){
        \$('.scrollspy').scrollSpy();
    });

    // SIDEBAR
    \$(document).ready(function(){
        \$('.button-collapse').sideNav({
                menuWidth: 300, // Default is 300
                edge: 'left', // Choose the horizontal origin
                closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );
    });
    </script>
{% block javascripts %}

{% endblock %}




</body>
</html>", "base.html.twig", "/home/fabien/symfony-stg/app/Resources/views/base.html.twig");
    }
}
