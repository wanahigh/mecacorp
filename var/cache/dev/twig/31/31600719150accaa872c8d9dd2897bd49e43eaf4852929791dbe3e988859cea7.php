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
        $__internal_79ea1da24ffa325f6bfbe3fb5d9649c255179254c248e3545389a983ab65a9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ea1da24ffa325f6bfbe3fb5d9649c255179254c248e3545389a983ab65a9e4->enter($__internal_79ea1da24ffa325f6bfbe3fb5d9649c255179254c248e3545389a983ab65a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_aeb44e3bcc94d884098c43e4013e2770a85befd1e8d91da0f27de0ebda2b8eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb44e3bcc94d884098c43e4013e2770a85befd1e8d91da0f27de0ebda2b8eba->enter($__internal_aeb44e3bcc94d884098c43e4013e2770a85befd1e8d91da0f27de0ebda2b8eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ea1da24ffa325f6bfbe3fb5d9649c255179254c248e3545389a983ab65a9e4->leave($__internal_79ea1da24ffa325f6bfbe3fb5d9649c255179254c248e3545389a983ab65a9e4_prof);

        
        $__internal_aeb44e3bcc94d884098c43e4013e2770a85befd1e8d91da0f27de0ebda2b8eba->leave($__internal_aeb44e3bcc94d884098c43e4013e2770a85befd1e8d91da0f27de0ebda2b8eba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62ca89a070bd2884bd60ed1a9aa3e6c8928bfb57972c68d31b51a5cb603ecce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ca89a070bd2884bd60ed1a9aa3e6c8928bfb57972c68d31b51a5cb603ecce8->enter($__internal_62ca89a070bd2884bd60ed1a9aa3e6c8928bfb57972c68d31b51a5cb603ecce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a85a4c5784e8903c8a51e037e41c3c1895d0ed538f718edf63d3cb4a054d3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a85a4c5784e8903c8a51e037e41c3c1895d0ed538f718edf63d3cb4a054d3fc->enter($__internal_8a85a4c5784e8903c8a51e037e41c3c1895d0ed538f718edf63d3cb4a054d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8a85a4c5784e8903c8a51e037e41c3c1895d0ed538f718edf63d3cb4a054d3fc->leave($__internal_8a85a4c5784e8903c8a51e037e41c3c1895d0ed538f718edf63d3cb4a054d3fc_prof);

        
        $__internal_62ca89a070bd2884bd60ed1a9aa3e6c8928bfb57972c68d31b51a5cb603ecce8->leave($__internal_62ca89a070bd2884bd60ed1a9aa3e6c8928bfb57972c68d31b51a5cb603ecce8_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
