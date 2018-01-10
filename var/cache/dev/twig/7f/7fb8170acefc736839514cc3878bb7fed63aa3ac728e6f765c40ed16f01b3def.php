<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e571bf87b57a83c7ab53e77adf8b4ee571b011b69564ef871f0e6efa7f31f55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_6cbf45f146e856a35e4ad9623d545164cc75db8ffcdc42e226518ae08ec67f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbf45f146e856a35e4ad9623d545164cc75db8ffcdc42e226518ae08ec67f21->enter($__internal_6cbf45f146e856a35e4ad9623d545164cc75db8ffcdc42e226518ae08ec67f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_9625eb197dc81c645f8310a3ed47af8e649816adb3b644e178ad9bbd1a514d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9625eb197dc81c645f8310a3ed47af8e649816adb3b644e178ad9bbd1a514d20->enter($__internal_9625eb197dc81c645f8310a3ed47af8e649816adb3b644e178ad9bbd1a514d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cbf45f146e856a35e4ad9623d545164cc75db8ffcdc42e226518ae08ec67f21->leave($__internal_6cbf45f146e856a35e4ad9623d545164cc75db8ffcdc42e226518ae08ec67f21_prof);

        
        $__internal_9625eb197dc81c645f8310a3ed47af8e649816adb3b644e178ad9bbd1a514d20->leave($__internal_9625eb197dc81c645f8310a3ed47af8e649816adb3b644e178ad9bbd1a514d20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f2b323ac6815d5978c9bbe18003633049a43efdaf018515da99f20390150a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2b323ac6815d5978c9bbe18003633049a43efdaf018515da99f20390150a24->enter($__internal_9f2b323ac6815d5978c9bbe18003633049a43efdaf018515da99f20390150a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ef926ef7f342477b95a6cbdd04167e7bb5f60e1da2010c36e73426dc44e55c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef926ef7f342477b95a6cbdd04167e7bb5f60e1da2010c36e73426dc44e55c5->enter($__internal_3ef926ef7f342477b95a6cbdd04167e7bb5f60e1da2010c36e73426dc44e55c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3ef926ef7f342477b95a6cbdd04167e7bb5f60e1da2010c36e73426dc44e55c5->leave($__internal_3ef926ef7f342477b95a6cbdd04167e7bb5f60e1da2010c36e73426dc44e55c5_prof);

        
        $__internal_9f2b323ac6815d5978c9bbe18003633049a43efdaf018515da99f20390150a24->leave($__internal_9f2b323ac6815d5978c9bbe18003633049a43efdaf018515da99f20390150a24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
