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
        $__internal_121a6a01afeb9b565b5d880f1eeeaace71178c9d3280cc7139a732972c122a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121a6a01afeb9b565b5d880f1eeeaace71178c9d3280cc7139a732972c122a1b->enter($__internal_121a6a01afeb9b565b5d880f1eeeaace71178c9d3280cc7139a732972c122a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2271f3ee890107610e5693e1783023b0082533af845e6f7767c8865e5014a279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2271f3ee890107610e5693e1783023b0082533af845e6f7767c8865e5014a279->enter($__internal_2271f3ee890107610e5693e1783023b0082533af845e6f7767c8865e5014a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121a6a01afeb9b565b5d880f1eeeaace71178c9d3280cc7139a732972c122a1b->leave($__internal_121a6a01afeb9b565b5d880f1eeeaace71178c9d3280cc7139a732972c122a1b_prof);

        
        $__internal_2271f3ee890107610e5693e1783023b0082533af845e6f7767c8865e5014a279->leave($__internal_2271f3ee890107610e5693e1783023b0082533af845e6f7767c8865e5014a279_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd8b52038c5cef6ea4480fac20ea366a31c3a7e973715dc171d748a5bd567d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8b52038c5cef6ea4480fac20ea366a31c3a7e973715dc171d748a5bd567d91->enter($__internal_dd8b52038c5cef6ea4480fac20ea366a31c3a7e973715dc171d748a5bd567d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0aa445ec9f654f68d3c6f79bedd429c16b5c1105361a938770875aac16f02a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aa445ec9f654f68d3c6f79bedd429c16b5c1105361a938770875aac16f02a7->enter($__internal_f0aa445ec9f654f68d3c6f79bedd429c16b5c1105361a938770875aac16f02a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f0aa445ec9f654f68d3c6f79bedd429c16b5c1105361a938770875aac16f02a7->leave($__internal_f0aa445ec9f654f68d3c6f79bedd429c16b5c1105361a938770875aac16f02a7_prof);

        
        $__internal_dd8b52038c5cef6ea4480fac20ea366a31c3a7e973715dc171d748a5bd567d91->leave($__internal_dd8b52038c5cef6ea4480fac20ea366a31c3a7e973715dc171d748a5bd567d91_prof);

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
", "FOSUserBundle:Group:show.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
