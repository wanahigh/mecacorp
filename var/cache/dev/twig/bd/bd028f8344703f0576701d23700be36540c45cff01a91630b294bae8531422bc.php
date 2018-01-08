<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_e8c2885127fafbc554ca7bd67d6b08b744a6afc38ee3b403bb62dc4cb8aba271 extends Twig_Template
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
        $__internal_d61afd29b82e729d207588bf5b29e34fe628fa45de20e2babae50dea111c25a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61afd29b82e729d207588bf5b29e34fe628fa45de20e2babae50dea111c25a7->enter($__internal_d61afd29b82e729d207588bf5b29e34fe628fa45de20e2babae50dea111c25a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_873e56321a4ee723515e9a26a432e5e09f5d891faa4f69ada773ac435984d6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873e56321a4ee723515e9a26a432e5e09f5d891faa4f69ada773ac435984d6e6->enter($__internal_873e56321a4ee723515e9a26a432e5e09f5d891faa4f69ada773ac435984d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_d61afd29b82e729d207588bf5b29e34fe628fa45de20e2babae50dea111c25a7->leave($__internal_d61afd29b82e729d207588bf5b29e34fe628fa45de20e2babae50dea111c25a7_prof);

        
        $__internal_873e56321a4ee723515e9a26a432e5e09f5d891faa4f69ada773ac435984d6e6->leave($__internal_873e56321a4ee723515e9a26a432e5e09f5d891faa4f69ada773ac435984d6e6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
