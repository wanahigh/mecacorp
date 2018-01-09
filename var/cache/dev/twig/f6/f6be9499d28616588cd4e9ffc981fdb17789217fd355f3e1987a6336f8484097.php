<?php

/* ::accueil.html.twig */
class __TwigTemplate_42188dbf254213a9257fde7985e784453c485c617592d5f616a007a57ad5a393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig ", "::accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_202e0db503ae11e7f6df94cc2cc171464c9062430d658a6ca6d16fcde211aa8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202e0db503ae11e7f6df94cc2cc171464c9062430d658a6ca6d16fcde211aa8b->enter($__internal_202e0db503ae11e7f6df94cc2cc171464c9062430d658a6ca6d16fcde211aa8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $__internal_de51625469877d8d76dde570d562d5c256a36d4ea4b98d0ac3d62e187e6c83b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de51625469877d8d76dde570d562d5c256a36d4ea4b98d0ac3d62e187e6c83b1->enter($__internal_de51625469877d8d76dde570d562d5c256a36d4ea4b98d0ac3d62e187e6c83b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202e0db503ae11e7f6df94cc2cc171464c9062430d658a6ca6d16fcde211aa8b->leave($__internal_202e0db503ae11e7f6df94cc2cc171464c9062430d658a6ca6d16fcde211aa8b_prof);

        
        $__internal_de51625469877d8d76dde570d562d5c256a36d4ea4b98d0ac3d62e187e6c83b1->leave($__internal_de51625469877d8d76dde570d562d5c256a36d4ea4b98d0ac3d62e187e6c83b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_08729f27e0c81c0bfa986a3248970fdeae0e536b34c68d33c5f6353fc3e7db16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08729f27e0c81c0bfa986a3248970fdeae0e536b34c68d33c5f6353fc3e7db16->enter($__internal_08729f27e0c81c0bfa986a3248970fdeae0e536b34c68d33c5f6353fc3e7db16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b18c23a7deabad723fd1cc566289ab8a7ab8431f14beaadfa474b1fd9b021c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18c23a7deabad723fd1cc566289ab8a7ab8431f14beaadfa474b1fd9b021c3a->enter($__internal_b18c23a7deabad723fd1cc566289ab8a7ab8431f14beaadfa474b1fd9b021c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"logo-filiere-spmeca-01.png\"></div>
</div>
<div class=\"section white\">
    <div class=\"row container\">
        <h2 class=\"header\">Parallax</h2>
        <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"images/parallax2.jpg\"></div>
</div>

";
        
        $__internal_b18c23a7deabad723fd1cc566289ab8a7ab8431f14beaadfa474b1fd9b021c3a->leave($__internal_b18c23a7deabad723fd1cc566289ab8a7ab8431f14beaadfa474b1fd9b021c3a_prof);

        
        $__internal_08729f27e0c81c0bfa986a3248970fdeae0e536b34c68d33c5f6353fc3e7db16->leave($__internal_08729f27e0c81c0bfa986a3248970fdeae0e536b34c68d33c5f6353fc3e7db16_prof);

    }

    public function getTemplateName()
    {
        return "::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig ' %}
{% block body %}
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"logo-filiere-spmeca-01.png\"></div>
</div>
<div class=\"section white\">
    <div class=\"row container\">
        <h2 class=\"header\">Parallax</h2>
        <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"images/parallax2.jpg\"></div>
</div>

{% endblock %}", "::accueil.html.twig", "/var/www/monsite1/mecacorp/app/Resources/views/accueil.html.twig");
    }
}
