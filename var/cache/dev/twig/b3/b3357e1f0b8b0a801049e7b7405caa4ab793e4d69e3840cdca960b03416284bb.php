<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_d8cdd84a2fafedccf91e0b62b1c4424bc8e3cf7bca9cf31c12ab6bf7a8ed9709 extends Twig_Template
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
        $__internal_c7f96e914a0921ddeb9e2ac97a8bc2672557420e1eba4fe542b3c584d58098f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f96e914a0921ddeb9e2ac97a8bc2672557420e1eba4fe542b3c584d58098f9->enter($__internal_c7f96e914a0921ddeb9e2ac97a8bc2672557420e1eba4fe542b3c584d58098f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_afcec2a2db797ab91dcf966daa6f533a5743b0c6813329867f97548027f7b239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcec2a2db797ab91dcf966daa6f533a5743b0c6813329867f97548027f7b239->enter($__internal_afcec2a2db797ab91dcf966daa6f533a5743b0c6813329867f97548027f7b239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_c7f96e914a0921ddeb9e2ac97a8bc2672557420e1eba4fe542b3c584d58098f9->leave($__internal_c7f96e914a0921ddeb9e2ac97a8bc2672557420e1eba4fe542b3c584d58098f9_prof);

        
        $__internal_afcec2a2db797ab91dcf966daa6f533a5743b0c6813329867f97548027f7b239->leave($__internal_afcec2a2db797ab91dcf966daa6f533a5743b0c6813329867f97548027f7b239_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
