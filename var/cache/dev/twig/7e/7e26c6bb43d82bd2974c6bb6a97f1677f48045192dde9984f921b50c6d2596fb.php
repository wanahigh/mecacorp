<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_92b1853d6b9b902c69ac16ab275dee5c293844c62842ed46b278e5c7d8c776fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_426cd5bb8be0198b9430e3385da388a29ed8b570ac5646d174da2595bed920b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426cd5bb8be0198b9430e3385da388a29ed8b570ac5646d174da2595bed920b6->enter($__internal_426cd5bb8be0198b9430e3385da388a29ed8b570ac5646d174da2595bed920b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_5e34fe9e768da63b40113ebbd6349c3a426f982a5fb5c031611d07479af73c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e34fe9e768da63b40113ebbd6349c3a426f982a5fb5c031611d07479af73c7b->enter($__internal_5e34fe9e768da63b40113ebbd6349c3a426f982a5fb5c031611d07479af73c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_426cd5bb8be0198b9430e3385da388a29ed8b570ac5646d174da2595bed920b6->leave($__internal_426cd5bb8be0198b9430e3385da388a29ed8b570ac5646d174da2595bed920b6_prof);

        
        $__internal_5e34fe9e768da63b40113ebbd6349c3a426f982a5fb5c031611d07479af73c7b->leave($__internal_5e34fe9e768da63b40113ebbd6349c3a426f982a5fb5c031611d07479af73c7b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
