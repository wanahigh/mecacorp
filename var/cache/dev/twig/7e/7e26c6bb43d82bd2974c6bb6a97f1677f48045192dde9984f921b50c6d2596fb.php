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
        $__internal_1abc7aaf145ee8b6c11bb7c478f29004323a1bd1c906b0dfb796d3c84294bc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abc7aaf145ee8b6c11bb7c478f29004323a1bd1c906b0dfb796d3c84294bc3c->enter($__internal_1abc7aaf145ee8b6c11bb7c478f29004323a1bd1c906b0dfb796d3c84294bc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ab4873342603e2216d1bb59cc3086d26efd0cd7fde8192b16536241ab0dfe9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4873342603e2216d1bb59cc3086d26efd0cd7fde8192b16536241ab0dfe9d5->enter($__internal_ab4873342603e2216d1bb59cc3086d26efd0cd7fde8192b16536241ab0dfe9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_1abc7aaf145ee8b6c11bb7c478f29004323a1bd1c906b0dfb796d3c84294bc3c->leave($__internal_1abc7aaf145ee8b6c11bb7c478f29004323a1bd1c906b0dfb796d3c84294bc3c_prof);

        
        $__internal_ab4873342603e2216d1bb59cc3086d26efd0cd7fde8192b16536241ab0dfe9d5->leave($__internal_ab4873342603e2216d1bb59cc3086d26efd0cd7fde8192b16536241ab0dfe9d5_prof);

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
", "WebProfilerBundle:Profiler:header.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
