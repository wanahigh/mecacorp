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
        $__internal_dfa9386938a8c028dbf1b6c71dfb87fd575930612473563adad8ffefc7a122d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa9386938a8c028dbf1b6c71dfb87fd575930612473563adad8ffefc7a122d8->enter($__internal_dfa9386938a8c028dbf1b6c71dfb87fd575930612473563adad8ffefc7a122d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4e1604afadd60cbf2293cc8d5508ef6fe258cb78568e46abd762c3d64bde7fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1604afadd60cbf2293cc8d5508ef6fe258cb78568e46abd762c3d64bde7fbf->enter($__internal_4e1604afadd60cbf2293cc8d5508ef6fe258cb78568e46abd762c3d64bde7fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "


</head>
<body>

<div class=\"navbar-upper  \">
    <nav class=\"z-depth-0 \">
        <div class=\"nav-wrapper white\">
            <div class=\"row\">
                <div class=\"col s12\">
                    <a href=\"/\" class=\"brand-logo\" style=\"display:block;float:left;\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/logo-filiere-spmeca-01.png"), "html", null, true);
        echo "\"></a>
                    <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">

                        <li>

                            <form style=\"height:64px;\">
                                <div class=\"input-field \">
                                    <input id=\"search\" type=\"search\" required placeholder=\"Search\">
                                    <label class=\"label-icon\" for=\"algolia.client\"><i class=\"this material-icons\">search</i></label>
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




<div class=\"navbar-lower green z-depth-5\">
    <nav class=\"z-depth-10 nav-extended white z-depth-5\">
        <div class=\"nav-wrapper\">
            <div class=\"row\">
                <div class=\"col s12 \">
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
                        <li><a >
                        ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 76
            echo "                        ";
            // line 77
            echo "
                        <a class=\"chip\" href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                        ";
        } else {
            // line 80
            echo "                        <a id=\"ULnone\" class=\"chip\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 81
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
                <h5 class=\"white-text\">Liens Utiles</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"/admin\">BackOffice</a></li>
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
        
        $__internal_dfa9386938a8c028dbf1b6c71dfb87fd575930612473563adad8ffefc7a122d8->leave($__internal_dfa9386938a8c028dbf1b6c71dfb87fd575930612473563adad8ffefc7a122d8_prof);

        
        $__internal_4e1604afadd60cbf2293cc8d5508ef6fe258cb78568e46abd762c3d64bde7fbf->leave($__internal_4e1604afadd60cbf2293cc8d5508ef6fe258cb78568e46abd762c3d64bde7fbf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_024a5890326d2e0955c2c622c5bc20f013eb7bb0de209fa1a96b47e6b7f49c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024a5890326d2e0955c2c622c5bc20f013eb7bb0de209fa1a96b47e6b7f49c70->enter($__internal_024a5890326d2e0955c2c622c5bc20f013eb7bb0de209fa1a96b47e6b7f49c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7910f992ff1846cc2c6cc2279a0f6ae67cfb95f830185e0306e63f2ed5ae30d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7910f992ff1846cc2c6cc2279a0f6ae67cfb95f830185e0306e63f2ed5ae30d9->enter($__internal_7910f992ff1846cc2c6cc2279a0f6ae67cfb95f830185e0306e63f2ed5ae30d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/instantsearch.js@2.3/dist/instantsearch.min.css\">
";
        
        $__internal_7910f992ff1846cc2c6cc2279a0f6ae67cfb95f830185e0306e63f2ed5ae30d9->leave($__internal_7910f992ff1846cc2c6cc2279a0f6ae67cfb95f830185e0306e63f2ed5ae30d9_prof);

        
        $__internal_024a5890326d2e0955c2c622c5bc20f013eb7bb0de209fa1a96b47e6b7f49c70->leave($__internal_024a5890326d2e0955c2c622c5bc20f013eb7bb0de209fa1a96b47e6b7f49c70_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_c00050b6a54ed490b178a58008522ded1a73a0ffac14617154d010146057da17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00050b6a54ed490b178a58008522ded1a73a0ffac14617154d010146057da17->enter($__internal_c00050b6a54ed490b178a58008522ded1a73a0ffac14617154d010146057da17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de28dc6105b643fb59cd998c3c5b14bbe3581f7d8e688c56e3689b81c355b9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de28dc6105b643fb59cd998c3c5b14bbe3581f7d8e688c56e3689b81c355b9b2->enter($__internal_de28dc6105b643fb59cd998c3c5b14bbe3581f7d8e688c56e3689b81c355b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    ";
        
        $__internal_de28dc6105b643fb59cd998c3c5b14bbe3581f7d8e688c56e3689b81c355b9b2->leave($__internal_de28dc6105b643fb59cd998c3c5b14bbe3581f7d8e688c56e3689b81c355b9b2_prof);

        
        $__internal_c00050b6a54ed490b178a58008522ded1a73a0ffac14617154d010146057da17->leave($__internal_c00050b6a54ed490b178a58008522ded1a73a0ffac14617154d010146057da17_prof);

    }

    // line 441
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0051a8fd552e835c448d8582db92d5214a030a3e1ed9a99466caacc0d13914f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0051a8fd552e835c448d8582db92d5214a030a3e1ed9a99466caacc0d13914f2->enter($__internal_0051a8fd552e835c448d8582db92d5214a030a3e1ed9a99466caacc0d13914f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7db5e232d7b20113973592080cbc336c4958892f547592a08efbd605318533d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db5e232d7b20113973592080cbc336c4958892f547592a08efbd605318533d1->enter($__internal_7db5e232d7b20113973592080cbc336c4958892f547592a08efbd605318533d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 442
        echo "
";
        
        $__internal_7db5e232d7b20113973592080cbc336c4958892f547592a08efbd605318533d1->leave($__internal_7db5e232d7b20113973592080cbc336c4958892f547592a08efbd605318533d1_prof);

        
        $__internal_0051a8fd552e835c448d8582db92d5214a030a3e1ed9a99466caacc0d13914f2->leave($__internal_0051a8fd552e835c448d8582db92d5214a030a3e1ed9a99466caacc0d13914f2_prof);

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
        return array (  612 => 442,  603 => 441,  593 => 149,  584 => 148,  571 => 13,  567 => 12,  563 => 11,  558 => 9,  553 => 8,  544 => 7,  529 => 444,  527 => 441,  403 => 319,  401 => 313,  399 => 312,  396 => 310,  394 => 309,  392 => 308,  390 => 307,  388 => 306,  386 => 305,  384 => 304,  382 => 303,  380 => 302,  378 => 301,  376 => 300,  374 => 299,  372 => 298,  370 => 297,  368 => 296,  366 => 295,  364 => 294,  362 => 293,  360 => 292,  358 => 291,  356 => 290,  353 => 288,  351 => 285,  349 => 284,  347 => 283,  345 => 282,  343 => 281,  337 => 276,  334 => 273,  332 => 272,  330 => 271,  328 => 270,  326 => 269,  324 => 268,  322 => 267,  319 => 265,  317 => 264,  315 => 263,  313 => 262,  311 => 261,  309 => 260,  307 => 259,  305 => 258,  303 => 257,  301 => 256,  299 => 255,  297 => 254,  295 => 253,  191 => 149,  189 => 148,  120 => 81,  114 => 80,  109 => 78,  106 => 77,  104 => 76,  102 => 75,  51 => 27,  38 => 16,  36 => 7,  28 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/instantsearch.js@2.3/dist/instantsearch.min.css\">
{% endblock %}



</head>
<body>

<div class=\"navbar-upper  \">
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
                                    <label class=\"label-icon\" for=\"algolia.client\"><i class=\"this material-icons\">search</i></label>
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




<div class=\"navbar-lower green z-depth-5\">
    <nav class=\"z-depth-10 nav-extended white z-depth-5\">
        <div class=\"nav-wrapper\">
            <div class=\"row\">
                <div class=\"col s12 \">
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
                        <li><a >
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {#{{ app.user.username }}#}

                        <a class=\"chip\" href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                        {% else %}
                        <a id=\"ULnone\" class=\"chip\"  href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
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
                <h5 class=\"white-text\">Liens Utiles</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"/admin\">BackOffice</a></li>
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
</html>", "base.html.twig", "/home/fabien/Modèles/mecacorp maj/app/Resources/views/base.html.twig");
    }
}
