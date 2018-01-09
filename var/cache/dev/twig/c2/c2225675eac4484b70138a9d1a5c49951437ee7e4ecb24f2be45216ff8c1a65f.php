<?php

/* ::index.html.twig */
class __TwigTemplate_c0974a8906cb4b4596a96f2a18424dcb5ced98db508ea6e3df0ffeaff9f7851e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7215868c74a28f386b76e792cd2ba9a9387659be6cc4fce869238b40401b98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7215868c74a28f386b76e792cd2ba9a9387659be6cc4fce869238b40401b98f->enter($__internal_c7215868c74a28f386b76e792cd2ba9a9387659be6cc4fce869238b40401b98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $__internal_acbdd005e4b27e9d93c97a3458bbc489a31c710bec595b5b5adbe5f2a81e7947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbdd005e4b27e9d93c97a3458bbc489a31c710bec595b5b5adbe5f2a81e7947->enter($__internal_acbdd005e4b27e9d93c97a3458bbc489a31c710bec595b5b5adbe5f2a81e7947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7215868c74a28f386b76e792cd2ba9a9387659be6cc4fce869238b40401b98f->leave($__internal_c7215868c74a28f386b76e792cd2ba9a9387659be6cc4fce869238b40401b98f_prof);

        
        $__internal_acbdd005e4b27e9d93c97a3458bbc489a31c710bec595b5b5adbe5f2a81e7947->leave($__internal_acbdd005e4b27e9d93c97a3458bbc489a31c710bec595b5b5adbe5f2a81e7947_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f67e639e1bdfcc7e9e61c57f020fabc3acec710c6f1d1f1794a79ccd79a83213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67e639e1bdfcc7e9e61c57f020fabc3acec710c6f1d1f1794a79ccd79a83213->enter($__internal_f67e639e1bdfcc7e9e61c57f020fabc3acec710c6f1d1f1794a79ccd79a83213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac18e001ff66f15a9399a57a26a33ead8c06b6bf135dda440df04efa85890d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac18e001ff66f15a9399a57a26a33ead8c06b6bf135dda440df04efa85890d80->enter($__internal_ac18e001ff66f15a9399a57a26a33ead8c06b6bf135dda440df04efa85890d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"slider\">

        <ul class=\"slides\">
            <li>
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/Pole-Mecanique-vueaerienne-vueweb-1030x773.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/2\"> <!-- random image -->
                <div class=\"caption left-align\">
                    <h3>Left Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/3\"> <!-- random image -->
                <div class=\"caption right-align\">
                    <h3>Right Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/4\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>";
        // line 42
        echo "<div class=\"row z-depth-5 flow-text\">

        <div class=\"col s12\">  <blockquote class=\"z-depth-5 hover\"><h1 class=\"header \">La filière “Sports Mécaniques & Mobilité Durable”</h1> </blockquote></div>

        <div class=\"col s6\"><p class=\"flow-text\">Près de 100 entreprises dans la filière sur le territoire Alès Cévennes
            Face aux mutations économiques qu’a connu le bassin alésien, territoire
            fragilisé par le déclin de l’industrie minière à la fin des années 70, la fin des
            années 90 a marqué un tournant dans son évolution. Trois facteurs illustrent
            aujourd’hui la dynamique de redressement dans laquelle s’est engagé le
            territoire d’Alès Agglomération sous l’impulsion des acteurs publics et forces
            vives locales : une attractivité démographique retrouvée, une économie
            dynamique en mutation et un cadre de vie attractif.</p>
            <div class=\"row \"> <img class=\"responsive-img\" id=\"pole1\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/Pole-Mecanique-vueaerienne.jpg"), "html", null, true);
        echo "\"></div>
           </div>
        <div class=\"col s6\"><<p class=\"flow-text\">>Tissé avec les premières filatures de vers à soie puis forgé avec les
            premières technologies minières, l’esprit industriel pionnier du bassin
            alésien se renouvelle aujourd’hui grâce au développement de filières
            stratégiques telles que la mécanique sportive et durable, les
            éco-activités, la filière agroalimentaire et bois, la filière tourisme et les
            biotechnologies., attestant d’une forte culture d’adaptation au
            changement, d’ouverture et d’accueil.
            En investissant dès 1995 dans la création du Pôle Mécanique Alès
            Cévennes, importante infrastructure de 90 hectares et de 8000 m2 de
            bâtiments industriels, l’agglomération a fait le choix d’un marqueur
            identitaire fort, celui des savoir-faire dans les sports mécaniques.
            Six circuits, dont un de vitesse réversible (unique en Europe) doté d’une
            ligne d’accélération de 600 m, se prêtent à des essais industriels de
            roulage, des activités de loisirs et des compétitions sportives de haut
            niveau.
            Avec près de 100 entreprises dans la filière dont une trentaine
            implantée au Pôle Mécanique (et plus de 600 en intégrant les
            concessionnaires, garages et clubs), ces activités génèrent
            quelques 1100 emplois.
            Cet écosystème d’entreprises, doté de compétences complémentaires
            à forte valeur ajoutée, est animé par l’Agence de développement Alès
            Myriapolis qui a d’ailleurs initié, fin 2016, une démarche collective afin
            de fédérer ces acteurs et accroitre leur compétitivité.</p>
        </div>
        </p>
    </div>";
        // line 87
        echo "<div class=\"carousel carousel-slider\" data-indicators=\"true\">
        <div class=\"carousel-fixed-item center\">
            <a class=\"btn waves-effect white grey-text darken-text-2\">accueil</a>
        </div>
        <div class=\"carousel-item red white-text\" href=\"#one!\">
            <h2>First Panel</h2>
            <p class=\"white-text\">This is your first panel</p>
        </div>
        <div class=\"carousel-item amber white-text\" href=\"#two!\">
            <h2>Second Panel</h2>
            <p class=\"white-text\">This is your second panel</p>
        </div>
        <div class=\"carousel-item green white-text\" href=\"#three!\">
            <h2>Third Panel</h2>
            <p class=\"white-text\">This is your third panel</p>
        </div>
        <div class=\"carousel-item blue white-text\" href=\"#four!\">
            <h2>Fourth Panel</h2>
            <p class=\"white-text\">This is your fourth panel</p>
        </div>
    </div>";
        // line 112
        echo "<div class=\"card hover\">
        <img id=\"dStructure\" class=\" z-depth-5 responsive\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/demarche-structuration-01.png"), "html", null, true);
        echo "\">

    </div>

    ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ac18e001ff66f15a9399a57a26a33ead8c06b6bf135dda440df04efa85890d80->leave($__internal_ac18e001ff66f15a9399a57a26a33ead8c06b6bf135dda440df04efa85890d80_prof);

        
        $__internal_f67e639e1bdfcc7e9e61c57f020fabc3acec710c6f1d1f1794a79ccd79a83213->leave($__internal_f67e639e1bdfcc7e9e61c57f020fabc3acec710c6f1d1f1794a79ccd79a83213_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42c7587b8a021a528b743b0e1ee41b7fcfb002200ba97c22af5b0501f7736ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c7587b8a021a528b743b0e1ee41b7fcfb002200ba97c22af5b0501f7736ca4->enter($__internal_42c7587b8a021a528b743b0e1ee41b7fcfb002200ba97c22af5b0501f7736ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de1a9c56d29d2adecfa528afa1b155b6ad82167bc46a8115a223b5e36b43734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1a9c56d29d2adecfa528afa1b155b6ad82167bc46a8115a223b5e36b43734e->enter($__internal_de1a9c56d29d2adecfa528afa1b155b6ad82167bc46a8115a223b5e36b43734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "        <script>



            \$(document).ready(function(){
                \$('.carousel.carousel-slider').carousel({fullWidth: true})});
            \$('.carousel').carousel({
                padding: 200
            });
            autoplay();
            function autoplay() {
                \$('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            \$(document).ready(function(){
                \$('.parallax').parallax();
            });

            \$(document).ready(function(){
                \$('.slider').slider();
            });

        </script>




    ";
        
        $__internal_de1a9c56d29d2adecfa528afa1b155b6ad82167bc46a8115a223b5e36b43734e->leave($__internal_de1a9c56d29d2adecfa528afa1b155b6ad82167bc46a8115a223b5e36b43734e_prof);

        
        $__internal_42c7587b8a021a528b743b0e1ee41b7fcfb002200ba97c22af5b0501f7736ca4->leave($__internal_42c7587b8a021a528b743b0e1ee41b7fcfb002200ba97c22af5b0501f7736ca4_prof);

    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 118,  164 => 117,  157 => 113,  154 => 112,  132 => 87,  102 => 54,  88 => 42,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends '::base.html.twig' %}

{% block body %}

    <div class=\"slider\">

        <ul class=\"slides\">
            <li>
                <img src=\"{{ asset('../../../images/Pole-Mecanique-vueaerienne-vueweb-1030x773.jpg') }}\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/2\"> <!-- random image -->
                <div class=\"caption left-align\">
                    <h3>Left Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/3\"> <!-- random image -->
                <div class=\"caption right-align\">
                    <h3>Right Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/4\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>



    {#---------------------------------------------------------------------------------------------------------#}
    <div class=\"row z-depth-5 flow-text\">

        <div class=\"col s12\">  <blockquote class=\"z-depth-5 hover\"><h1 class=\"header \">La filière “Sports Mécaniques & Mobilité Durable”</h1> </blockquote></div>

        <div class=\"col s6\"><p class=\"flow-text\">Près de 100 entreprises dans la filière sur le territoire Alès Cévennes
            Face aux mutations économiques qu’a connu le bassin alésien, territoire
            fragilisé par le déclin de l’industrie minière à la fin des années 70, la fin des
            années 90 a marqué un tournant dans son évolution. Trois facteurs illustrent
            aujourd’hui la dynamique de redressement dans laquelle s’est engagé le
            territoire d’Alès Agglomération sous l’impulsion des acteurs publics et forces
            vives locales : une attractivité démographique retrouvée, une économie
            dynamique en mutation et un cadre de vie attractif.</p>
            <div class=\"row \"> <img class=\"responsive-img\" id=\"pole1\" src=\"{{ asset('../../../images/Pole-Mecanique-vueaerienne.jpg')}}\"></div>
           </div>
        <div class=\"col s6\"><<p class=\"flow-text\">>Tissé avec les premières filatures de vers à soie puis forgé avec les
            premières technologies minières, l’esprit industriel pionnier du bassin
            alésien se renouvelle aujourd’hui grâce au développement de filières
            stratégiques telles que la mécanique sportive et durable, les
            éco-activités, la filière agroalimentaire et bois, la filière tourisme et les
            biotechnologies., attestant d’une forte culture d’adaptation au
            changement, d’ouverture et d’accueil.
            En investissant dès 1995 dans la création du Pôle Mécanique Alès
            Cévennes, importante infrastructure de 90 hectares et de 8000 m2 de
            bâtiments industriels, l’agglomération a fait le choix d’un marqueur
            identitaire fort, celui des savoir-faire dans les sports mécaniques.
            Six circuits, dont un de vitesse réversible (unique en Europe) doté d’une
            ligne d’accélération de 600 m, se prêtent à des essais industriels de
            roulage, des activités de loisirs et des compétitions sportives de haut
            niveau.
            Avec près de 100 entreprises dans la filière dont une trentaine
            implantée au Pôle Mécanique (et plus de 600 en intégrant les
            concessionnaires, garages et clubs), ces activités génèrent
            quelques 1100 emplois.
            Cet écosystème d’entreprises, doté de compétences complémentaires
            à forte valeur ajoutée, est animé par l’Agence de développement Alès
            Myriapolis qui a d’ailleurs initié, fin 2016, une démarche collective afin
            de fédérer ces acteurs et accroitre leur compétitivité.</p>
        </div>
        </p>
    </div>



    {#---------------------------------------------------------------------------------------------------------#}

    <div class=\"carousel carousel-slider\" data-indicators=\"true\">
        <div class=\"carousel-fixed-item center\">
            <a class=\"btn waves-effect white grey-text darken-text-2\">accueil</a>
        </div>
        <div class=\"carousel-item red white-text\" href=\"#one!\">
            <h2>First Panel</h2>
            <p class=\"white-text\">This is your first panel</p>
        </div>
        <div class=\"carousel-item amber white-text\" href=\"#two!\">
            <h2>Second Panel</h2>
            <p class=\"white-text\">This is your second panel</p>
        </div>
        <div class=\"carousel-item green white-text\" href=\"#three!\">
            <h2>Third Panel</h2>
            <p class=\"white-text\">This is your third panel</p>
        </div>
        <div class=\"carousel-item blue white-text\" href=\"#four!\">
            <h2>Fourth Panel</h2>
            <p class=\"white-text\">This is your fourth panel</p>
        </div>
    </div>


{#---------------------------------------------------------------------------------------------------------#}

    <div class=\"card hover\">
        <img id=\"dStructure\" class=\" z-depth-5 responsive\" src=\"{{ asset('../../../images/demarche-structuration-01.png') }}\">

    </div>

    {% block javascripts %}
        <script>



            \$(document).ready(function(){
                \$('.carousel.carousel-slider').carousel({fullWidth: true})});
            \$('.carousel').carousel({
                padding: 200
            });
            autoplay();
            function autoplay() {
                \$('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            \$(document).ready(function(){
                \$('.parallax').parallax();
            });

            \$(document).ready(function(){
                \$('.slider').slider();
            });

        </script>




    {% endblock %}
{% endblock %}
", "::index.html.twig", "/var/www/monsite1/mecacorp/app/Resources/views/index.html.twig");
    }
}
