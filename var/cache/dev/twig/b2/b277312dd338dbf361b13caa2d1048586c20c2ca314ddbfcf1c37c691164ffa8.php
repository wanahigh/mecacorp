<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e0e06be7be91c3f0a856c023ad1433cefee2f364924c401215ac2b6b917bc160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57b26241eb3347dde615f7defb2a2328ac4f0cca691048c3e96b7db246fe2580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b26241eb3347dde615f7defb2a2328ac4f0cca691048c3e96b7db246fe2580->enter($__internal_57b26241eb3347dde615f7defb2a2328ac4f0cca691048c3e96b7db246fe2580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_eb916b74f688bc9e2fcfc997457d919748818902101064d5517589eb4108407f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb916b74f688bc9e2fcfc997457d919748818902101064d5517589eb4108407f->enter($__internal_eb916b74f688bc9e2fcfc997457d919748818902101064d5517589eb4108407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b26241eb3347dde615f7defb2a2328ac4f0cca691048c3e96b7db246fe2580->leave($__internal_57b26241eb3347dde615f7defb2a2328ac4f0cca691048c3e96b7db246fe2580_prof);

        
        $__internal_eb916b74f688bc9e2fcfc997457d919748818902101064d5517589eb4108407f->leave($__internal_eb916b74f688bc9e2fcfc997457d919748818902101064d5517589eb4108407f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e285fbf8f721c6c5afde4b7c96d51bbb44794cebc9bf08fdf3a268c15c4db1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e285fbf8f721c6c5afde4b7c96d51bbb44794cebc9bf08fdf3a268c15c4db1ff->enter($__internal_e285fbf8f721c6c5afde4b7c96d51bbb44794cebc9bf08fdf3a268c15c4db1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_424f7decc6aa75f1335a0622f118a947874fbfe53f30a69bc15886075ad58ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424f7decc6aa75f1335a0622f118a947874fbfe53f30a69bc15886075ad58ccb->enter($__internal_424f7decc6aa75f1335a0622f118a947874fbfe53f30a69bc15886075ad58ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_424f7decc6aa75f1335a0622f118a947874fbfe53f30a69bc15886075ad58ccb->leave($__internal_424f7decc6aa75f1335a0622f118a947874fbfe53f30a69bc15886075ad58ccb_prof);

        
        $__internal_e285fbf8f721c6c5afde4b7c96d51bbb44794cebc9bf08fdf3a268c15c4db1ff->leave($__internal_e285fbf8f721c6c5afde4b7c96d51bbb44794cebc9bf08fdf3a268c15c4db1ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d13580a6b2818d61ea8c06e5e33e19e663154f128fd41700fa586010d32a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d13580a6b2818d61ea8c06e5e33e19e663154f128fd41700fa586010d32a72->enter($__internal_00d13580a6b2818d61ea8c06e5e33e19e663154f128fd41700fa586010d32a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_469add3ffad128ffe5fbc7c4ebc06cf64ee075e32fb1e008c980611842ae3d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469add3ffad128ffe5fbc7c4ebc06cf64ee075e32fb1e008c980611842ae3d83->enter($__internal_469add3ffad128ffe5fbc7c4ebc06cf64ee075e32fb1e008c980611842ae3d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_469add3ffad128ffe5fbc7c4ebc06cf64ee075e32fb1e008c980611842ae3d83->leave($__internal_469add3ffad128ffe5fbc7c4ebc06cf64ee075e32fb1e008c980611842ae3d83_prof);

        
        $__internal_00d13580a6b2818d61ea8c06e5e33e19e663154f128fd41700fa586010d32a72->leave($__internal_00d13580a6b2818d61ea8c06e5e33e19e663154f128fd41700fa586010d32a72_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
