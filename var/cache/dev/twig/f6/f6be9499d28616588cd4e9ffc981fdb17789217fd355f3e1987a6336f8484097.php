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
        $__internal_1664d0d50a3930f58b60fe73db983d56fd8e7e8c347476bd9fb6a71ddd2bfd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1664d0d50a3930f58b60fe73db983d56fd8e7e8c347476bd9fb6a71ddd2bfd74->enter($__internal_1664d0d50a3930f58b60fe73db983d56fd8e7e8c347476bd9fb6a71ddd2bfd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $__internal_4db832bfb35253e3b3e50572bed84bd022b75c09921ab82eb126683b6bc5e4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db832bfb35253e3b3e50572bed84bd022b75c09921ab82eb126683b6bc5e4e2->enter($__internal_4db832bfb35253e3b3e50572bed84bd022b75c09921ab82eb126683b6bc5e4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1664d0d50a3930f58b60fe73db983d56fd8e7e8c347476bd9fb6a71ddd2bfd74->leave($__internal_1664d0d50a3930f58b60fe73db983d56fd8e7e8c347476bd9fb6a71ddd2bfd74_prof);

        
        $__internal_4db832bfb35253e3b3e50572bed84bd022b75c09921ab82eb126683b6bc5e4e2->leave($__internal_4db832bfb35253e3b3e50572bed84bd022b75c09921ab82eb126683b6bc5e4e2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e432ff386c96479a7172a688b1a47015809bd41a7782581ad4603ee2b221312d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e432ff386c96479a7172a688b1a47015809bd41a7782581ad4603ee2b221312d->enter($__internal_e432ff386c96479a7172a688b1a47015809bd41a7782581ad4603ee2b221312d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9efa8f82554c3ed802a97a9f01b5f912a7e85865c45cf32b9bbad67d86ac196a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efa8f82554c3ed802a97a9f01b5f912a7e85865c45cf32b9bbad67d86ac196a->enter($__internal_9efa8f82554c3ed802a97a9f01b5f912a7e85865c45cf32b9bbad67d86ac196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9efa8f82554c3ed802a97a9f01b5f912a7e85865c45cf32b9bbad67d86ac196a->leave($__internal_9efa8f82554c3ed802a97a9f01b5f912a7e85865c45cf32b9bbad67d86ac196a_prof);

        
        $__internal_e432ff386c96479a7172a688b1a47015809bd41a7782581ad4603ee2b221312d->leave($__internal_e432ff386c96479a7172a688b1a47015809bd41a7782581ad4603ee2b221312d_prof);

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

{% endblock %}", "::accueil.html.twig", "/home/fabien/symfony-stg/app/Resources/views/accueil.html.twig");
    }
}
