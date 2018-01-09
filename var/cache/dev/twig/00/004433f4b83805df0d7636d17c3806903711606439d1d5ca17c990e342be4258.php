<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_befbf580093d351959050b31f762ac331ea1e39b577ff2754d21ef2c8249bac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0b673ee821de3b393f33396f481e115b5f67ae18f9f9001bd12d956392c3b956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b673ee821de3b393f33396f481e115b5f67ae18f9f9001bd12d956392c3b956->enter($__internal_0b673ee821de3b393f33396f481e115b5f67ae18f9f9001bd12d956392c3b956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2d9b7e71baa3a4acabd7d66a07faa8f1a5cf1fc803d10cb4d9e7413a0a062c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9b7e71baa3a4acabd7d66a07faa8f1a5cf1fc803d10cb4d9e7413a0a062c69->enter($__internal_2d9b7e71baa3a4acabd7d66a07faa8f1a5cf1fc803d10cb4d9e7413a0a062c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b673ee821de3b393f33396f481e115b5f67ae18f9f9001bd12d956392c3b956->leave($__internal_0b673ee821de3b393f33396f481e115b5f67ae18f9f9001bd12d956392c3b956_prof);

        
        $__internal_2d9b7e71baa3a4acabd7d66a07faa8f1a5cf1fc803d10cb4d9e7413a0a062c69->leave($__internal_2d9b7e71baa3a4acabd7d66a07faa8f1a5cf1fc803d10cb4d9e7413a0a062c69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6f2fba67961db456d4d8bf5e32654e3ed1d8cdbbda5b1cd00ce289a370f9e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f2fba67961db456d4d8bf5e32654e3ed1d8cdbbda5b1cd00ce289a370f9e53->enter($__internal_f6f2fba67961db456d4d8bf5e32654e3ed1d8cdbbda5b1cd00ce289a370f9e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14da26715ea956816ed785d0cfa8f25378beafb02498fccd9de6c2bf87275ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14da26715ea956816ed785d0cfa8f25378beafb02498fccd9de6c2bf87275ad5->enter($__internal_14da26715ea956816ed785d0cfa8f25378beafb02498fccd9de6c2bf87275ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_14da26715ea956816ed785d0cfa8f25378beafb02498fccd9de6c2bf87275ad5->leave($__internal_14da26715ea956816ed785d0cfa8f25378beafb02498fccd9de6c2bf87275ad5_prof);

        
        $__internal_f6f2fba67961db456d4d8bf5e32654e3ed1d8cdbbda5b1cd00ce289a370f9e53->leave($__internal_f6f2fba67961db456d4d8bf5e32654e3ed1d8cdbbda5b1cd00ce289a370f9e53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
