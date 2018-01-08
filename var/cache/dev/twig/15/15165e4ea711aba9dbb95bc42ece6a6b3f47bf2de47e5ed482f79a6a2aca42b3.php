<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1a65d40cb00549c702dd12de21425611b0c180405a8f83bd3f30192eaefa8b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b2b199a3d8b55e6806f0787db2cade4bd357ae70f44f46355bfb35e516d05c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b199a3d8b55e6806f0787db2cade4bd357ae70f44f46355bfb35e516d05c35->enter($__internal_b2b199a3d8b55e6806f0787db2cade4bd357ae70f44f46355bfb35e516d05c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3733635395c0bba6ca0a672fb1a429b51a00ba99fbdcc4ec50ef2824f58a2506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3733635395c0bba6ca0a672fb1a429b51a00ba99fbdcc4ec50ef2824f58a2506->enter($__internal_3733635395c0bba6ca0a672fb1a429b51a00ba99fbdcc4ec50ef2824f58a2506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b199a3d8b55e6806f0787db2cade4bd357ae70f44f46355bfb35e516d05c35->leave($__internal_b2b199a3d8b55e6806f0787db2cade4bd357ae70f44f46355bfb35e516d05c35_prof);

        
        $__internal_3733635395c0bba6ca0a672fb1a429b51a00ba99fbdcc4ec50ef2824f58a2506->leave($__internal_3733635395c0bba6ca0a672fb1a429b51a00ba99fbdcc4ec50ef2824f58a2506_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c6df8514b200f0e285b8ba6a712a6d30997caaf757e65041bc34b01e3caa2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6df8514b200f0e285b8ba6a712a6d30997caaf757e65041bc34b01e3caa2a9->enter($__internal_9c6df8514b200f0e285b8ba6a712a6d30997caaf757e65041bc34b01e3caa2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8f672c41bbaa597cd9c7ad133561eafc2015fda05a58a44a5c80ec667f4ce132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f672c41bbaa597cd9c7ad133561eafc2015fda05a58a44a5c80ec667f4ce132->enter($__internal_8f672c41bbaa597cd9c7ad133561eafc2015fda05a58a44a5c80ec667f4ce132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8f672c41bbaa597cd9c7ad133561eafc2015fda05a58a44a5c80ec667f4ce132->leave($__internal_8f672c41bbaa597cd9c7ad133561eafc2015fda05a58a44a5c80ec667f4ce132_prof);

        
        $__internal_9c6df8514b200f0e285b8ba6a712a6d30997caaf757e65041bc34b01e3caa2a9->leave($__internal_9c6df8514b200f0e285b8ba6a712a6d30997caaf757e65041bc34b01e3caa2a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
