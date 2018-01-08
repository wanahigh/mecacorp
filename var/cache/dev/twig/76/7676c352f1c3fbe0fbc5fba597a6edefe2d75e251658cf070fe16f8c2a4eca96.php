<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_321c1d5eb97911bd22dd299f3f2d1c1555d950f05f0d3168ee54336c13f55b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ba7eb5bfea875df7f4cc2165f0ff73ac1243bad313101ad2535b5f9d186b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ba7eb5bfea875df7f4cc2165f0ff73ac1243bad313101ad2535b5f9d186b04->enter($__internal_d7ba7eb5bfea875df7f4cc2165f0ff73ac1243bad313101ad2535b5f9d186b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_974267ea155287a6d86adddf423f6f2479bfa84af0a2e0a5e4423e1431586eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974267ea155287a6d86adddf423f6f2479bfa84af0a2e0a5e4423e1431586eb5->enter($__internal_974267ea155287a6d86adddf423f6f2479bfa84af0a2e0a5e4423e1431586eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d7ba7eb5bfea875df7f4cc2165f0ff73ac1243bad313101ad2535b5f9d186b04->leave($__internal_d7ba7eb5bfea875df7f4cc2165f0ff73ac1243bad313101ad2535b5f9d186b04_prof);

        
        $__internal_974267ea155287a6d86adddf423f6f2479bfa84af0a2e0a5e4423e1431586eb5->leave($__internal_974267ea155287a6d86adddf423f6f2479bfa84af0a2e0a5e4423e1431586eb5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a50da071dd855770e1b10681cf532e298764184c4f7fcf019ad9c254dfd4b22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50da071dd855770e1b10681cf532e298764184c4f7fcf019ad9c254dfd4b22b->enter($__internal_a50da071dd855770e1b10681cf532e298764184c4f7fcf019ad9c254dfd4b22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d03fb706cfed855fcd1d144db0514f094c8c98164fca2d72807c4238171e01f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03fb706cfed855fcd1d144db0514f094c8c98164fca2d72807c4238171e01f7->enter($__internal_d03fb706cfed855fcd1d144db0514f094c8c98164fca2d72807c4238171e01f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d03fb706cfed855fcd1d144db0514f094c8c98164fca2d72807c4238171e01f7->leave($__internal_d03fb706cfed855fcd1d144db0514f094c8c98164fca2d72807c4238171e01f7_prof);

        
        $__internal_a50da071dd855770e1b10681cf532e298764184c4f7fcf019ad9c254dfd4b22b->leave($__internal_a50da071dd855770e1b10681cf532e298764184c4f7fcf019ad9c254dfd4b22b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
