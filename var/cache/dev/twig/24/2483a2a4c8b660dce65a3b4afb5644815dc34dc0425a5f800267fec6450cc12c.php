<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c31c83071dbb272c701e9d158de6a891e4b979fca1f8e26e6a7faf7800220558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e40979d2fa94b286aadf1ddc10af7879cf713b03667953edb9dcdf1f162da30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40979d2fa94b286aadf1ddc10af7879cf713b03667953edb9dcdf1f162da30f->enter($__internal_e40979d2fa94b286aadf1ddc10af7879cf713b03667953edb9dcdf1f162da30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8725a2e5dc93cc9b28dac10e70083e28db8e89c42eb020c680cc45d0f1ef2447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8725a2e5dc93cc9b28dac10e70083e28db8e89c42eb020c680cc45d0f1ef2447->enter($__internal_8725a2e5dc93cc9b28dac10e70083e28db8e89c42eb020c680cc45d0f1ef2447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40979d2fa94b286aadf1ddc10af7879cf713b03667953edb9dcdf1f162da30f->leave($__internal_e40979d2fa94b286aadf1ddc10af7879cf713b03667953edb9dcdf1f162da30f_prof);

        
        $__internal_8725a2e5dc93cc9b28dac10e70083e28db8e89c42eb020c680cc45d0f1ef2447->leave($__internal_8725a2e5dc93cc9b28dac10e70083e28db8e89c42eb020c680cc45d0f1ef2447_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6247c60c3f90310f7573b476f475d4404ddff1479b5f0585b078d3a292c3d4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6247c60c3f90310f7573b476f475d4404ddff1479b5f0585b078d3a292c3d4ab->enter($__internal_6247c60c3f90310f7573b476f475d4404ddff1479b5f0585b078d3a292c3d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fefb5f5e25cc5a4ab033f89f51da3025611a6900c1fba8813a31672c7d14773d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefb5f5e25cc5a4ab033f89f51da3025611a6900c1fba8813a31672c7d14773d->enter($__internal_fefb5f5e25cc5a4ab033f89f51da3025611a6900c1fba8813a31672c7d14773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fefb5f5e25cc5a4ab033f89f51da3025611a6900c1fba8813a31672c7d14773d->leave($__internal_fefb5f5e25cc5a4ab033f89f51da3025611a6900c1fba8813a31672c7d14773d_prof);

        
        $__internal_6247c60c3f90310f7573b476f475d4404ddff1479b5f0585b078d3a292c3d4ab->leave($__internal_6247c60c3f90310f7573b476f475d4404ddff1479b5f0585b078d3a292c3d4ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
