<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_34e99009582291607115d5764258520022d6b9db4f8973514c50e8eea510fcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_333dae8a4c652138c57f848d475ea678185cd07d2e7100b5ed170962951979c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333dae8a4c652138c57f848d475ea678185cd07d2e7100b5ed170962951979c0->enter($__internal_333dae8a4c652138c57f848d475ea678185cd07d2e7100b5ed170962951979c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0204309f84e74837fe154c342eedd390709c47a18fa7ea5733baf709185399d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0204309f84e74837fe154c342eedd390709c47a18fa7ea5733baf709185399d8->enter($__internal_0204309f84e74837fe154c342eedd390709c47a18fa7ea5733baf709185399d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_333dae8a4c652138c57f848d475ea678185cd07d2e7100b5ed170962951979c0->leave($__internal_333dae8a4c652138c57f848d475ea678185cd07d2e7100b5ed170962951979c0_prof);

        
        $__internal_0204309f84e74837fe154c342eedd390709c47a18fa7ea5733baf709185399d8->leave($__internal_0204309f84e74837fe154c342eedd390709c47a18fa7ea5733baf709185399d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4107e233a41c0c4a8724cd4f0ce1bde56f14ba52583bc5e555ea8a9eed4c57ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4107e233a41c0c4a8724cd4f0ce1bde56f14ba52583bc5e555ea8a9eed4c57ab->enter($__internal_4107e233a41c0c4a8724cd4f0ce1bde56f14ba52583bc5e555ea8a9eed4c57ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d81f068be1e411f04e875d413d63ed4b6315c2448964b8ac0ac5265f3d6dfbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81f068be1e411f04e875d413d63ed4b6315c2448964b8ac0ac5265f3d6dfbd6->enter($__internal_d81f068be1e411f04e875d413d63ed4b6315c2448964b8ac0ac5265f3d6dfbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d81f068be1e411f04e875d413d63ed4b6315c2448964b8ac0ac5265f3d6dfbd6->leave($__internal_d81f068be1e411f04e875d413d63ed4b6315c2448964b8ac0ac5265f3d6dfbd6_prof);

        
        $__internal_4107e233a41c0c4a8724cd4f0ce1bde56f14ba52583bc5e555ea8a9eed4c57ab->leave($__internal_4107e233a41c0c4a8724cd4f0ce1bde56f14ba52583bc5e555ea8a9eed4c57ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
