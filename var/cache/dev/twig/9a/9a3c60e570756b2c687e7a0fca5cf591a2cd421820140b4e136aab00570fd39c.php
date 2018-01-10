<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_66fd3758596e1f614e4632510fe942ea41df8b6f48c3ed9b6c49439ff5e24a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5c4a134f7f37ead884ff98056587d62a5cc83d4b9436c3b2340a36abbbaebdfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4a134f7f37ead884ff98056587d62a5cc83d4b9436c3b2340a36abbbaebdfc->enter($__internal_5c4a134f7f37ead884ff98056587d62a5cc83d4b9436c3b2340a36abbbaebdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_87f930349a7fa1ff895f64724931c8bd73cacff94154b26fada47347cb7658a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f930349a7fa1ff895f64724931c8bd73cacff94154b26fada47347cb7658a9->enter($__internal_87f930349a7fa1ff895f64724931c8bd73cacff94154b26fada47347cb7658a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4a134f7f37ead884ff98056587d62a5cc83d4b9436c3b2340a36abbbaebdfc->leave($__internal_5c4a134f7f37ead884ff98056587d62a5cc83d4b9436c3b2340a36abbbaebdfc_prof);

        
        $__internal_87f930349a7fa1ff895f64724931c8bd73cacff94154b26fada47347cb7658a9->leave($__internal_87f930349a7fa1ff895f64724931c8bd73cacff94154b26fada47347cb7658a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc38c8c331b6cfbb4ff6b3ec96d4d37d9251147956ca3177a20903c1091b3dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc38c8c331b6cfbb4ff6b3ec96d4d37d9251147956ca3177a20903c1091b3dfc->enter($__internal_fc38c8c331b6cfbb4ff6b3ec96d4d37d9251147956ca3177a20903c1091b3dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3cb2734952f2611a38857a87f95059dd4a43e921530f6282b9dec4bf962f97d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb2734952f2611a38857a87f95059dd4a43e921530f6282b9dec4bf962f97d8->enter($__internal_3cb2734952f2611a38857a87f95059dd4a43e921530f6282b9dec4bf962f97d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3cb2734952f2611a38857a87f95059dd4a43e921530f6282b9dec4bf962f97d8->leave($__internal_3cb2734952f2611a38857a87f95059dd4a43e921530f6282b9dec4bf962f97d8_prof);

        
        $__internal_fc38c8c331b6cfbb4ff6b3ec96d4d37d9251147956ca3177a20903c1091b3dfc->leave($__internal_fc38c8c331b6cfbb4ff6b3ec96d4d37d9251147956ca3177a20903c1091b3dfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
