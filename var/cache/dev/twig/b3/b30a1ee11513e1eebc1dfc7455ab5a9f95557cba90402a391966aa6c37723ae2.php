<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_312315fc6979f97cb3364a3ea40cce1065485b8eac041e410d141540a8da39c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_04c3385198c8a2c607afa876d3d8ca44605dbffb75a30588bebdc546a94e0382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c3385198c8a2c607afa876d3d8ca44605dbffb75a30588bebdc546a94e0382->enter($__internal_04c3385198c8a2c607afa876d3d8ca44605dbffb75a30588bebdc546a94e0382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_05502266fe85725cb0114dce600065b1aff239bcf19b4652cfe864f7bdf24606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05502266fe85725cb0114dce600065b1aff239bcf19b4652cfe864f7bdf24606->enter($__internal_05502266fe85725cb0114dce600065b1aff239bcf19b4652cfe864f7bdf24606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c3385198c8a2c607afa876d3d8ca44605dbffb75a30588bebdc546a94e0382->leave($__internal_04c3385198c8a2c607afa876d3d8ca44605dbffb75a30588bebdc546a94e0382_prof);

        
        $__internal_05502266fe85725cb0114dce600065b1aff239bcf19b4652cfe864f7bdf24606->leave($__internal_05502266fe85725cb0114dce600065b1aff239bcf19b4652cfe864f7bdf24606_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ab0d93de21ed0cc3dc1e9fc6a5d0c83425a4bcfdb694241e2612943424fab92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab0d93de21ed0cc3dc1e9fc6a5d0c83425a4bcfdb694241e2612943424fab92->enter($__internal_8ab0d93de21ed0cc3dc1e9fc6a5d0c83425a4bcfdb694241e2612943424fab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21cecd565ca8045e10cb35a28562142b8cbeea15d5cacd5e20df3066c400f225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cecd565ca8045e10cb35a28562142b8cbeea15d5cacd5e20df3066c400f225->enter($__internal_21cecd565ca8045e10cb35a28562142b8cbeea15d5cacd5e20df3066c400f225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_21cecd565ca8045e10cb35a28562142b8cbeea15d5cacd5e20df3066c400f225->leave($__internal_21cecd565ca8045e10cb35a28562142b8cbeea15d5cacd5e20df3066c400f225_prof);

        
        $__internal_8ab0d93de21ed0cc3dc1e9fc6a5d0c83425a4bcfdb694241e2612943424fab92->leave($__internal_8ab0d93de21ed0cc3dc1e9fc6a5d0c83425a4bcfdb694241e2612943424fab92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
