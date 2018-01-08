<?php

/* AcmeWorkBundle:Default:index.html.twig */
class __TwigTemplate_d283fe70ec489f9c25b142e6a035c2825a8e7030089c0c85db450f0ac5b4c3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeWorkBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6329ef3d9c3997b3d9da4e47b83793e768c9419c663d05160af445c84cf9dce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6329ef3d9c3997b3d9da4e47b83793e768c9419c663d05160af445c84cf9dce9->enter($__internal_6329ef3d9c3997b3d9da4e47b83793e768c9419c663d05160af445c84cf9dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeWorkBundle:Default:index.html.twig"));

        $__internal_eb2b05a3b5ac0532408b462bd6329a8fd2358a141a331faa4ac559522c54ff3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2b05a3b5ac0532408b462bd6329a8fd2358a141a331faa4ac559522c54ff3f->enter($__internal_eb2b05a3b5ac0532408b462bd6329a8fd2358a141a331faa4ac559522c54ff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeWorkBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6329ef3d9c3997b3d9da4e47b83793e768c9419c663d05160af445c84cf9dce9->leave($__internal_6329ef3d9c3997b3d9da4e47b83793e768c9419c663d05160af445c84cf9dce9_prof);

        
        $__internal_eb2b05a3b5ac0532408b462bd6329a8fd2358a141a331faa4ac559522c54ff3f->leave($__internal_eb2b05a3b5ac0532408b462bd6329a8fd2358a141a331faa4ac559522c54ff3f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3356b2823016d1cc933cba91b4ce11e4a7402b0b47ee1874a520fff1830e70b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3356b2823016d1cc933cba91b4ce11e4a7402b0b47ee1874a520fff1830e70b8->enter($__internal_3356b2823016d1cc933cba91b4ce11e4a7402b0b47ee1874a520fff1830e70b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcf90075d380641023e9cdfcd20dce4c774e865ea932f0b97edd2892ff2ddb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf90075d380641023e9cdfcd20dce4c774e865ea932f0b97edd2892ff2ddb30->enter($__internal_fcf90075d380641023e9cdfcd20dce4c774e865ea932f0b97edd2892ff2ddb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>hello world</h1>

";
        
        $__internal_fcf90075d380641023e9cdfcd20dce4c774e865ea932f0b97edd2892ff2ddb30->leave($__internal_fcf90075d380641023e9cdfcd20dce4c774e865ea932f0b97edd2892ff2ddb30_prof);

        
        $__internal_3356b2823016d1cc933cba91b4ce11e4a7402b0b47ee1874a520fff1830e70b8->leave($__internal_3356b2823016d1cc933cba91b4ce11e4a7402b0b47ee1874a520fff1830e70b8_prof);

    }

    public function getTemplateName()
    {
        return "AcmeWorkBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  40 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}




{% block body %}
<h1>hello world</h1>

{% endblock %}









", "AcmeWorkBundle:Default:index.html.twig", "/home/fabien/symfony-stg/src/Acme/WorkBundle/Resources/views/Default/index.html.twig");
    }
}
