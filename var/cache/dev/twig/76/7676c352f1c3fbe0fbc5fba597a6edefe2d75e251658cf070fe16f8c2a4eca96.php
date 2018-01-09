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
        $__internal_341e82fd8f435fae04477458f042c1d7bebd02c33318452d755c9808bf141774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341e82fd8f435fae04477458f042c1d7bebd02c33318452d755c9808bf141774->enter($__internal_341e82fd8f435fae04477458f042c1d7bebd02c33318452d755c9808bf141774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dd609bb89614f1cc5bf97168d8f2292a3a595f701902d3d668c4bca4b112381d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd609bb89614f1cc5bf97168d8f2292a3a595f701902d3d668c4bca4b112381d->enter($__internal_dd609bb89614f1cc5bf97168d8f2292a3a595f701902d3d668c4bca4b112381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_341e82fd8f435fae04477458f042c1d7bebd02c33318452d755c9808bf141774->leave($__internal_341e82fd8f435fae04477458f042c1d7bebd02c33318452d755c9808bf141774_prof);

        
        $__internal_dd609bb89614f1cc5bf97168d8f2292a3a595f701902d3d668c4bca4b112381d->leave($__internal_dd609bb89614f1cc5bf97168d8f2292a3a595f701902d3d668c4bca4b112381d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0c8736b9ebf4e38cd287a7c2e18ae905637fc2adae1c16239bbe045953b24df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c8736b9ebf4e38cd287a7c2e18ae905637fc2adae1c16239bbe045953b24df->enter($__internal_a0c8736b9ebf4e38cd287a7c2e18ae905637fc2adae1c16239bbe045953b24df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8f56112763c89f6e0723666d50d02248021ef07b52664fb7624e6173c24969e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f56112763c89f6e0723666d50d02248021ef07b52664fb7624e6173c24969e->enter($__internal_f8f56112763c89f6e0723666d50d02248021ef07b52664fb7624e6173c24969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f8f56112763c89f6e0723666d50d02248021ef07b52664fb7624e6173c24969e->leave($__internal_f8f56112763c89f6e0723666d50d02248021ef07b52664fb7624e6173c24969e_prof);

        
        $__internal_a0c8736b9ebf4e38cd287a7c2e18ae905637fc2adae1c16239bbe045953b24df->leave($__internal_a0c8736b9ebf4e38cd287a7c2e18ae905637fc2adae1c16239bbe045953b24df_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
