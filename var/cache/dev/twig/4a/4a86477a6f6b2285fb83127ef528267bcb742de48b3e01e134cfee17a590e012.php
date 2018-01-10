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
        $__internal_5e9ced26e57db06b0573d8635fd1d1b34439dfb20a1aff5c4289b67b413595f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9ced26e57db06b0573d8635fd1d1b34439dfb20a1aff5c4289b67b413595f7->enter($__internal_5e9ced26e57db06b0573d8635fd1d1b34439dfb20a1aff5c4289b67b413595f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cfd27d765381c4f29f06536a5968265ac5372bcc13b8f19d8451baf833547b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd27d765381c4f29f06536a5968265ac5372bcc13b8f19d8451baf833547b9b->enter($__internal_cfd27d765381c4f29f06536a5968265ac5372bcc13b8f19d8451baf833547b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <a href=\"/\" class=\"brand-logo\" style=\"display:block;float:left;\"><img src=\"";
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
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse show-on-small\"><i class=\"material-icons\">menu</i></a>
                    <a class=\"fadeInLogo brand-logo animated slideInUp\">

                        <!-- <img src=\"https://materializecss.com/res/materialize.svg\" alt=\"\" style=\"margin-top:12px;\" height=\"40px\"/> -->
                        <i style=\"color:red;\" class=\"large material-icons\">important_devices</i>
                    </a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                        <li><a href=\"/Filial\">La Filière</a></li>
                        <li><a href=\"/entity_advert\">L'actu</a></li>
                        <li><a href=\"/actors\">Les Acteurs</a></li>
                        <li><a href=\"/contact\">Contact</a></li>
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

                            <li><a href=\"/actors\"><i class=\"material-icons\">directions_car</i>Les Acteurs</a></li>
                            <li><a href=\"/entity_advert\"><i class=\"material-icons\">event_note</i>L'actu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </nav>
</div>



<div id=\"tab1\" class=\"col s12\">";
        // line 148
        $this->displayBlock('body', $context, $blocks);
        // line 149
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
        // line 253
        echo "    ";
        // line 254
        echo "        ";
        // line 255
        echo "        ";
        // line 256
        echo "        ";
        // line 257
        echo "            ";
        // line 258
        echo "            ";
        // line 259
        echo "            ";
        // line 260
        echo "            ";
        // line 261
        echo "            ";
        // line 262
        echo "            ";
        // line 263
        echo "                ";
        // line 264
        echo "                ";
        // line 265
        echo "
                ";
        // line 267
        echo "                ";
        // line 268
        echo "                ";
        // line 269
        echo "                ";
        // line 270
        echo "            ";
        // line 271
        echo "        ";
        // line 272
        echo "    ";
        // line 273
        echo "
";
        // line 276
        echo "



";
        // line 281
        echo "    ";
        // line 282
        echo "        ";
        // line 283
        echo "            ";
        // line 284
        echo "        ";
        // line 285
        echo "    ";
        // line 288
        echo "
";
        // line 290
        echo "    ";
        // line 291
        echo "        ";
        // line 292
        echo "            ";
        // line 293
        echo "                ";
        // line 294
        echo "                ";
        // line 295
        echo "            ";
        // line 296
        echo "            ";
        // line 297
        echo "                ";
        // line 298
        echo "                ";
        // line 299
        echo "                    ";
        // line 300
        echo "                    ";
        // line 301
        echo "                    ";
        // line 302
        echo "                    ";
        // line 303
        echo "                ";
        // line 304
        echo "            ";
        // line 305
        echo "        ";
        // line 306
        echo "    ";
        // line 307
        echo "    ";
        // line 308
        echo "        ";
        // line 309
        echo "            ";
        // line 310
        echo "
            ";
        // line 312
        echo "        ";
        // line 313
        echo "    ";
        // line 319
        echo "<!-- Preloader and it's background. -->
    <div class=\"preloader-background\">
        <div class=\"preloader-wrapper big active\">
            <div class=\"spinner-layer spinner-blue\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-yellow\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-green\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p class=\"blinking\">Loading</p>
    </div>


<script>document.addEventListener(\"DOMContentLoaded\", function(){
        \$('.preloader-background').delay(1000).fadeOut('slow');

        \$('.preloader-wrapper')
            .delay(1500)
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
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );
    });
    </script>
";
        // line 441
        $this->displayBlock('javascripts', $context, $blocks);
        // line 444
        echo "



</body>
</html>";
        
        $__internal_5e9ced26e57db06b0573d8635fd1d1b34439dfb20a1aff5c4289b67b413595f7->leave($__internal_5e9ced26e57db06b0573d8635fd1d1b34439dfb20a1aff5c4289b67b413595f7_prof);

        
        $__internal_cfd27d765381c4f29f06536a5968265ac5372bcc13b8f19d8451baf833547b9b->leave($__internal_cfd27d765381c4f29f06536a5968265ac5372bcc13b8f19d8451baf833547b9b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_160c4dc1acfc41ae3881aae36162d48ef1608e4c1b763614d93bf422b9d4bee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160c4dc1acfc41ae3881aae36162d48ef1608e4c1b763614d93bf422b9d4bee3->enter($__internal_160c4dc1acfc41ae3881aae36162d48ef1608e4c1b763614d93bf422b9d4bee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f1eb384fdfb91400ed8aa1e530632d96791daf9aa8e253c6a048d850112aa29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eb384fdfb91400ed8aa1e530632d96791daf9aa8e253c6a048d850112aa29a->enter($__internal_f1eb384fdfb91400ed8aa1e530632d96791daf9aa8e253c6a048d850112aa29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f1eb384fdfb91400ed8aa1e530632d96791daf9aa8e253c6a048d850112aa29a->leave($__internal_f1eb384fdfb91400ed8aa1e530632d96791daf9aa8e253c6a048d850112aa29a_prof);

        
        $__internal_160c4dc1acfc41ae3881aae36162d48ef1608e4c1b763614d93bf422b9d4bee3->leave($__internal_160c4dc1acfc41ae3881aae36162d48ef1608e4c1b763614d93bf422b9d4bee3_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e998d607e160245436dd5758c84eba303a0584af102d00b8e95465d7d6bdb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e998d607e160245436dd5758c84eba303a0584af102d00b8e95465d7d6bdb39->enter($__internal_0e998d607e160245436dd5758c84eba303a0584af102d00b8e95465d7d6bdb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_576b4904e8005bb70bf23ec582bee59e4254b16d5ed88e15731a5ce358d2c5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576b4904e8005bb70bf23ec582bee59e4254b16d5ed88e15731a5ce358d2c5f0->enter($__internal_576b4904e8005bb70bf23ec582bee59e4254b16d5ed88e15731a5ce358d2c5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    ";
        
        $__internal_576b4904e8005bb70bf23ec582bee59e4254b16d5ed88e15731a5ce358d2c5f0->leave($__internal_576b4904e8005bb70bf23ec582bee59e4254b16d5ed88e15731a5ce358d2c5f0_prof);

        
        $__internal_0e998d607e160245436dd5758c84eba303a0584af102d00b8e95465d7d6bdb39->leave($__internal_0e998d607e160245436dd5758c84eba303a0584af102d00b8e95465d7d6bdb39_prof);

    }

    // line 441
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a198f33bde3399e2fbfcfd32b3f9993d24b40f82aacd36c167417c7b2e372ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a198f33bde3399e2fbfcfd32b3f9993d24b40f82aacd36c167417c7b2e372ec->enter($__internal_4a198f33bde3399e2fbfcfd32b3f9993d24b40f82aacd36c167417c7b2e372ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf5e7ae8530d23bae2ce4bcaf40d4e920c706890cccee6f746288da2145a7a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5e7ae8530d23bae2ce4bcaf40d4e920c706890cccee6f746288da2145a7a00->enter($__internal_bf5e7ae8530d23bae2ce4bcaf40d4e920c706890cccee6f746288da2145a7a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 442
        echo "
";
        
        $__internal_bf5e7ae8530d23bae2ce4bcaf40d4e920c706890cccee6f746288da2145a7a00->leave($__internal_bf5e7ae8530d23bae2ce4bcaf40d4e920c706890cccee6f746288da2145a7a00_prof);

        
        $__internal_4a198f33bde3399e2fbfcfd32b3f9993d24b40f82aacd36c167417c7b2e372ec->leave($__internal_4a198f33bde3399e2fbfcfd32b3f9993d24b40f82aacd36c167417c7b2e372ec_prof);

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
        return array (  612 => 442,  603 => 441,  593 => 149,  584 => 148,  572 => 13,  568 => 12,  564 => 11,  559 => 9,  554 => 8,  545 => 7,  530 => 444,  528 => 441,  404 => 319,  402 => 313,  400 => 312,  397 => 310,  395 => 309,  393 => 308,  391 => 307,  389 => 306,  387 => 305,  385 => 304,  383 => 303,  381 => 302,  379 => 301,  377 => 300,  375 => 299,  373 => 298,  371 => 297,  369 => 296,  367 => 295,  365 => 294,  363 => 293,  361 => 292,  359 => 291,  357 => 290,  354 => 288,  352 => 285,  350 => 284,  348 => 283,  346 => 282,  344 => 281,  338 => 276,  335 => 273,  333 => 272,  331 => 271,  329 => 270,  327 => 269,  325 => 268,  323 => 267,  320 => 265,  318 => 264,  316 => 263,  314 => 262,  312 => 261,  310 => 260,  308 => 259,  306 => 258,  304 => 257,  302 => 256,  300 => 255,  298 => 254,  296 => 253,  192 => 149,  190 => 148,  120 => 80,  114 => 79,  109 => 77,  106 => 76,  104 => 75,  102 => 74,  51 => 26,  38 => 15,  36 => 7,  28 => 1,);
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
                    <a href=\"/\" class=\"brand-logo\" style=\"display:block;float:left;\"><img src=\"{{ asset('../../../images/logo-filiere-spmeca-01.png') }}\"></a>
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
                    <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse show-on-small\"><i class=\"material-icons\">menu</i></a>
                    <a class=\"fadeInLogo brand-logo animated slideInUp\">

                        <!-- <img src=\"https://materializecss.com/res/materialize.svg\" alt=\"\" style=\"margin-top:12px;\" height=\"40px\"/> -->
                        <i style=\"color:red;\" class=\"large material-icons\">important_devices</i>
                    </a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                        <li><a href=\"/Filial\">La Filière</a></li>
                        <li><a href=\"/entity_advert\">L'actu</a></li>
                        <li><a href=\"/actors\">Les Acteurs</a></li>
                        <li><a href=\"/contact\">Contact</a></li>
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

                            <li><a href=\"/actors\"><i class=\"material-icons\">directions_car</i>Les Acteurs</a></li>
                            <li><a href=\"/entity_advert\"><i class=\"material-icons\">event_note</i>L'actu</a></li>
                        </ul>
                    </div>
                </div>
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



    <!-- Preloader and it's background. -->
    <div class=\"preloader-background\">
        <div class=\"preloader-wrapper big active\">
            <div class=\"spinner-layer spinner-blue\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-yellow\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-green\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div><div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div><div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p class=\"blinking\">Loading</p>
    </div>


<script>document.addEventListener(\"DOMContentLoaded\", function(){
        \$('.preloader-background').delay(1000).fadeOut('slow');

        \$('.preloader-wrapper')
            .delay(1500)
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
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
        );
    });
    </script>
{% block javascripts %}

{% endblock %}




</body>
</html>", "base.html.twig", "/home/fabien/Téléchargements/mecacorp/app/Resources/views/base.html.twig");
    }
}
