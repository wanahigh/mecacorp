<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_4f93f6477760cdfb530e1970a89f417572e8b6a1fc8563fd555f51ff3c6e3982 extends Twig_Template
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
        $__internal_1a3b81ab241cd34fe0b41d92f0c8d34ba994c0a4a422eeb2eec086efe96514be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3b81ab241cd34fe0b41d92f0c8d34ba994c0a4a422eeb2eec086efe96514be->enter($__internal_1a3b81ab241cd34fe0b41d92f0c8d34ba994c0a4a422eeb2eec086efe96514be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_f50fa368f3510c4302855646d42ca2ea4c37a88f4b078d1b236e5dd7f5dfb59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50fa368f3510c4302855646d42ca2ea4c37a88f4b078d1b236e5dd7f5dfb59f->enter($__internal_f50fa368f3510c4302855646d42ca2ea4c37a88f4b078d1b236e5dd7f5dfb59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_1a3b81ab241cd34fe0b41d92f0c8d34ba994c0a4a422eeb2eec086efe96514be->leave($__internal_1a3b81ab241cd34fe0b41d92f0c8d34ba994c0a4a422eeb2eec086efe96514be_prof);

        
        $__internal_f50fa368f3510c4302855646d42ca2ea4c37a88f4b078d1b236e5dd7f5dfb59f->leave($__internal_f50fa368f3510c4302855646d42ca2ea4c37a88f4b078d1b236e5dd7f5dfb59f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
