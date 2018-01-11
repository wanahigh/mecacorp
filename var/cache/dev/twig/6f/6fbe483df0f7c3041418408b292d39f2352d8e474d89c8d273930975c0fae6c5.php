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
        $__internal_6b8691dc35f31bb11aaca3b1f8087f267c8591c45ae59ddfbab6afaf670a1551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8691dc35f31bb11aaca3b1f8087f267c8591c45ae59ddfbab6afaf670a1551->enter($__internal_6b8691dc35f31bb11aaca3b1f8087f267c8591c45ae59ddfbab6afaf670a1551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_1b470ad864fd9e82212fce7a352bf756b765862b1df00f8ca2eb343dc99f65e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b470ad864fd9e82212fce7a352bf756b765862b1df00f8ca2eb343dc99f65e3->enter($__internal_1b470ad864fd9e82212fce7a352bf756b765862b1df00f8ca2eb343dc99f65e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_6b8691dc35f31bb11aaca3b1f8087f267c8591c45ae59ddfbab6afaf670a1551->leave($__internal_6b8691dc35f31bb11aaca3b1f8087f267c8591c45ae59ddfbab6afaf670a1551_prof);

        
        $__internal_1b470ad864fd9e82212fce7a352bf756b765862b1df00f8ca2eb343dc99f65e3->leave($__internal_1b470ad864fd9e82212fce7a352bf756b765862b1df00f8ca2eb343dc99f65e3_prof);

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
", "@EasyAdmin/default/field_id.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
