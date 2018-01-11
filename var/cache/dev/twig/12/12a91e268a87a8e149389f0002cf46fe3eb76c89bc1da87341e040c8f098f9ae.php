<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343462fc151e9139a716ad79859bfc6f237426edf925d15cd6a46947de6e95f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343462fc151e9139a716ad79859bfc6f237426edf925d15cd6a46947de6e95f0->enter($__internal_343462fc151e9139a716ad79859bfc6f237426edf925d15cd6a46947de6e95f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_dd9bcc9d0cfc00149ba7345573316cda48945564d920da84c98ada29ac4e8763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9bcc9d0cfc00149ba7345573316cda48945564d920da84c98ada29ac4e8763->enter($__internal_dd9bcc9d0cfc00149ba7345573316cda48945564d920da84c98ada29ac4e8763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343462fc151e9139a716ad79859bfc6f237426edf925d15cd6a46947de6e95f0->leave($__internal_343462fc151e9139a716ad79859bfc6f237426edf925d15cd6a46947de6e95f0_prof);

        
        $__internal_dd9bcc9d0cfc00149ba7345573316cda48945564d920da84c98ada29ac4e8763->leave($__internal_dd9bcc9d0cfc00149ba7345573316cda48945564d920da84c98ada29ac4e8763_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c64cfc6bad38a06939055b923a8a77927e8996a223e17e3c2c4a2ecaf41f3d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64cfc6bad38a06939055b923a8a77927e8996a223e17e3c2c4a2ecaf41f3d6d->enter($__internal_c64cfc6bad38a06939055b923a8a77927e8996a223e17e3c2c4a2ecaf41f3d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f70bc042d9071d4eda470c5862697de4be58a0425dcf9bb8e3002a2b700547a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f70bc042d9071d4eda470c5862697de4be58a0425dcf9bb8e3002a2b700547a->enter($__internal_8f70bc042d9071d4eda470c5862697de4be58a0425dcf9bb8e3002a2b700547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_8f70bc042d9071d4eda470c5862697de4be58a0425dcf9bb8e3002a2b700547a->leave($__internal_8f70bc042d9071d4eda470c5862697de4be58a0425dcf9bb8e3002a2b700547a_prof);

        
        $__internal_c64cfc6bad38a06939055b923a8a77927e8996a223e17e3c2c4a2ecaf41f3d6d->leave($__internal_c64cfc6bad38a06939055b923a8a77927e8996a223e17e3c2c4a2ecaf41f3d6d_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f470f67926072c23ecb29dc75ab1100d14b0c9985c9625bbb89027c5bc91937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f470f67926072c23ecb29dc75ab1100d14b0c9985c9625bbb89027c5bc91937->enter($__internal_4f470f67926072c23ecb29dc75ab1100d14b0c9985c9625bbb89027c5bc91937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_12268d54bf515100ff88ca594ce0d7322aaa74e7d6ff43a408dc7bfb4eb4fb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12268d54bf515100ff88ca594ce0d7322aaa74e7d6ff43a408dc7bfb4eb4fb4c->enter($__internal_12268d54bf515100ff88ca594ce0d7322aaa74e7d6ff43a408dc7bfb4eb4fb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_12268d54bf515100ff88ca594ce0d7322aaa74e7d6ff43a408dc7bfb4eb4fb4c->leave($__internal_12268d54bf515100ff88ca594ce0d7322aaa74e7d6ff43a408dc7bfb4eb4fb4c_prof);

        
        $__internal_4f470f67926072c23ecb29dc75ab1100d14b0c9985c9625bbb89027c5bc91937->leave($__internal_4f470f67926072c23ecb29dc75ab1100d14b0c9985c9625bbb89027c5bc91937_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/home/sunshine/Documents/mecacorp/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
