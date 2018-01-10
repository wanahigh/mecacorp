<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
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
        $__internal_b2dfb828600408b8b641c3b9787ab99c2b97d1bcf884eb1aae8644aa8b9a0f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dfb828600408b8b641c3b9787ab99c2b97d1bcf884eb1aae8644aa8b9a0f42->enter($__internal_b2dfb828600408b8b641c3b9787ab99c2b97d1bcf884eb1aae8644aa8b9a0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_7a8ea2f372191e8aa83c7b623e4786c50c8f90c229cf47b6c12cddda5ace7a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8ea2f372191e8aa83c7b623e4786c50c8f90c229cf47b6c12cddda5ace7a4f->enter($__internal_7a8ea2f372191e8aa83c7b623e4786c50c8f90c229cf47b6c12cddda5ace7a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2dfb828600408b8b641c3b9787ab99c2b97d1bcf884eb1aae8644aa8b9a0f42->leave($__internal_b2dfb828600408b8b641c3b9787ab99c2b97d1bcf884eb1aae8644aa8b9a0f42_prof);

        
        $__internal_7a8ea2f372191e8aa83c7b623e4786c50c8f90c229cf47b6c12cddda5ace7a4f->leave($__internal_7a8ea2f372191e8aa83c7b623e4786c50c8f90c229cf47b6c12cddda5ace7a4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5e1a637564fe310bb6828166651ef08bad748cf68a614bfc858b7c0da55c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5e1a637564fe310bb6828166651ef08bad748cf68a614bfc858b7c0da55c49->enter($__internal_7a5e1a637564fe310bb6828166651ef08bad748cf68a614bfc858b7c0da55c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dace571405ff644500473be102de71a8981586aad6616d826eb7723880c2643b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dace571405ff644500473be102de71a8981586aad6616d826eb7723880c2643b->enter($__internal_dace571405ff644500473be102de71a8981586aad6616d826eb7723880c2643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dace571405ff644500473be102de71a8981586aad6616d826eb7723880c2643b->leave($__internal_dace571405ff644500473be102de71a8981586aad6616d826eb7723880c2643b_prof);

        
        $__internal_7a5e1a637564fe310bb6828166651ef08bad748cf68a614bfc858b7c0da55c49->leave($__internal_7a5e1a637564fe310bb6828166651ef08bad748cf68a614bfc858b7c0da55c49_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98e3c731aa6cce0de160f97e112f9a80aed16aee6428331f0f99998eca92d660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e3c731aa6cce0de160f97e112f9a80aed16aee6428331f0f99998eca92d660->enter($__internal_98e3c731aa6cce0de160f97e112f9a80aed16aee6428331f0f99998eca92d660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d65a2d803ab3147fbb9fefa0c60b624a0b50195d4ae28a3cec5aa59a6b94d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d65a2d803ab3147fbb9fefa0c60b624a0b50195d4ae28a3cec5aa59a6b94d40->enter($__internal_5d65a2d803ab3147fbb9fefa0c60b624a0b50195d4ae28a3cec5aa59a6b94d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_5d65a2d803ab3147fbb9fefa0c60b624a0b50195d4ae28a3cec5aa59a6b94d40->leave($__internal_5d65a2d803ab3147fbb9fefa0c60b624a0b50195d4ae28a3cec5aa59a6b94d40_prof);

        
        $__internal_98e3c731aa6cce0de160f97e112f9a80aed16aee6428331f0f99998eca92d660->leave($__internal_98e3c731aa6cce0de160f97e112f9a80aed16aee6428331f0f99998eca92d660_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/fabien/Téléchargements/mecacorp/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
