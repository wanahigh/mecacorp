<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a55b89d340f6a1d06fc14c86d11ae2a25bf6f980dd56ebeed3936cac161198f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55b89d340f6a1d06fc14c86d11ae2a25bf6f980dd56ebeed3936cac161198f4->enter($__internal_a55b89d340f6a1d06fc14c86d11ae2a25bf6f980dd56ebeed3936cac161198f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c0eb71c8692ecfa93a7baa49630a5cef9a33bef3ac2ddaccb34056d2a30d2708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0eb71c8692ecfa93a7baa49630a5cef9a33bef3ac2ddaccb34056d2a30d2708->enter($__internal_c0eb71c8692ecfa93a7baa49630a5cef9a33bef3ac2ddaccb34056d2a30d2708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55b89d340f6a1d06fc14c86d11ae2a25bf6f980dd56ebeed3936cac161198f4->leave($__internal_a55b89d340f6a1d06fc14c86d11ae2a25bf6f980dd56ebeed3936cac161198f4_prof);

        
        $__internal_c0eb71c8692ecfa93a7baa49630a5cef9a33bef3ac2ddaccb34056d2a30d2708->leave($__internal_c0eb71c8692ecfa93a7baa49630a5cef9a33bef3ac2ddaccb34056d2a30d2708_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_305cfe1e7ac7dccfa8b69dcefd217812735d6e759500e9d5fb996c53a3986023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305cfe1e7ac7dccfa8b69dcefd217812735d6e759500e9d5fb996c53a3986023->enter($__internal_305cfe1e7ac7dccfa8b69dcefd217812735d6e759500e9d5fb996c53a3986023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37f56a60fc822afaff16a9440c9e99a7078b97fa2045db4914e58cab663ac6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f56a60fc822afaff16a9440c9e99a7078b97fa2045db4914e58cab663ac6c5->enter($__internal_37f56a60fc822afaff16a9440c9e99a7078b97fa2045db4914e58cab663ac6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_37f56a60fc822afaff16a9440c9e99a7078b97fa2045db4914e58cab663ac6c5->leave($__internal_37f56a60fc822afaff16a9440c9e99a7078b97fa2045db4914e58cab663ac6c5_prof);

        
        $__internal_305cfe1e7ac7dccfa8b69dcefd217812735d6e759500e9d5fb996c53a3986023->leave($__internal_305cfe1e7ac7dccfa8b69dcefd217812735d6e759500e9d5fb996c53a3986023_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c349fca36f6f16cd3875b3834d8856a3efa31ddca6b33986cdc158949edbe956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c349fca36f6f16cd3875b3834d8856a3efa31ddca6b33986cdc158949edbe956->enter($__internal_c349fca36f6f16cd3875b3834d8856a3efa31ddca6b33986cdc158949edbe956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87ef03bdd2540633058cf3ad45d967b46656580db3944d228d7d41e1e77f5824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ef03bdd2540633058cf3ad45d967b46656580db3944d228d7d41e1e77f5824->enter($__internal_87ef03bdd2540633058cf3ad45d967b46656580db3944d228d7d41e1e77f5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_87ef03bdd2540633058cf3ad45d967b46656580db3944d228d7d41e1e77f5824->leave($__internal_87ef03bdd2540633058cf3ad45d967b46656580db3944d228d7d41e1e77f5824_prof);

        
        $__internal_c349fca36f6f16cd3875b3834d8856a3efa31ddca6b33986cdc158949edbe956->leave($__internal_c349fca36f6f16cd3875b3834d8856a3efa31ddca6b33986cdc158949edbe956_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/monsite1/mecacorp/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
