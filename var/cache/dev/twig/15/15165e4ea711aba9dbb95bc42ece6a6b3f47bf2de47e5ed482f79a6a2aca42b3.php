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
        $__internal_94a9ed6315425b7d6b6545f832ef7471b0db2a47231845a2809405815c2d8d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a9ed6315425b7d6b6545f832ef7471b0db2a47231845a2809405815c2d8d4f->enter($__internal_94a9ed6315425b7d6b6545f832ef7471b0db2a47231845a2809405815c2d8d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_661582f698169a28f6ed32a9cf336e8059f60e46e40dec73d973c6a96f2a5516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661582f698169a28f6ed32a9cf336e8059f60e46e40dec73d973c6a96f2a5516->enter($__internal_661582f698169a28f6ed32a9cf336e8059f60e46e40dec73d973c6a96f2a5516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a9ed6315425b7d6b6545f832ef7471b0db2a47231845a2809405815c2d8d4f->leave($__internal_94a9ed6315425b7d6b6545f832ef7471b0db2a47231845a2809405815c2d8d4f_prof);

        
        $__internal_661582f698169a28f6ed32a9cf336e8059f60e46e40dec73d973c6a96f2a5516->leave($__internal_661582f698169a28f6ed32a9cf336e8059f60e46e40dec73d973c6a96f2a5516_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e8fea14b25a5b826bf8f5680147c081ce2caf4e51c46d62ea147b589edbada6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8fea14b25a5b826bf8f5680147c081ce2caf4e51c46d62ea147b589edbada6->enter($__internal_2e8fea14b25a5b826bf8f5680147c081ce2caf4e51c46d62ea147b589edbada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30b1b62e0b31bdfaae706058155cf0cfdca2232aa9126f710d6203ab84dc67ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b1b62e0b31bdfaae706058155cf0cfdca2232aa9126f710d6203ab84dc67ea->enter($__internal_30b1b62e0b31bdfaae706058155cf0cfdca2232aa9126f710d6203ab84dc67ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_30b1b62e0b31bdfaae706058155cf0cfdca2232aa9126f710d6203ab84dc67ea->leave($__internal_30b1b62e0b31bdfaae706058155cf0cfdca2232aa9126f710d6203ab84dc67ea_prof);

        
        $__internal_2e8fea14b25a5b826bf8f5680147c081ce2caf4e51c46d62ea147b589edbada6->leave($__internal_2e8fea14b25a5b826bf8f5680147c081ce2caf4e51c46d62ea147b589edbada6_prof);

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
", "FOSUserBundle:Group:list.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
