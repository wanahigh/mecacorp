<?php

/* EasyAdminBundle:default:field_id.html.twig */
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
        $__internal_50526ef1fd45ee8878f83dc5f5787c73a41f8578834b69dc5f9a6854a10ffa8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50526ef1fd45ee8878f83dc5f5787c73a41f8578834b69dc5f9a6854a10ffa8f->enter($__internal_50526ef1fd45ee8878f83dc5f5787c73a41f8578834b69dc5f9a6854a10ffa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_f1574324a6641c52e1f29e829b9b3098203fed759ed35ba1e15022de0edfa4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1574324a6641c52e1f29e829b9b3098203fed759ed35ba1e15022de0edfa4b5->enter($__internal_f1574324a6641c52e1f29e829b9b3098203fed759ed35ba1e15022de0edfa4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_50526ef1fd45ee8878f83dc5f5787c73a41f8578834b69dc5f9a6854a10ffa8f->leave($__internal_50526ef1fd45ee8878f83dc5f5787c73a41f8578834b69dc5f9a6854a10ffa8f_prof);

        
        $__internal_f1574324a6641c52e1f29e829b9b3098203fed759ed35ba1e15022de0edfa4b5->leave($__internal_f1574324a6641c52e1f29e829b9b3098203fed759ed35ba1e15022de0edfa4b5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
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
", "EasyAdminBundle:default:field_id.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
