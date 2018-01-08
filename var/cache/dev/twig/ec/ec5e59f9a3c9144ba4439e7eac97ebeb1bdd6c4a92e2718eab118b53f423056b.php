<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_b53ba98f3da0960f96400ed42499bc8b5c6471fc7d654e000933435ea3feb66f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_717148cc437d906e3dbe3d6bb049544946cc89bae736fcdb62d245c26ec1edd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717148cc437d906e3dbe3d6bb049544946cc89bae736fcdb62d245c26ec1edd1->enter($__internal_717148cc437d906e3dbe3d6bb049544946cc89bae736fcdb62d245c26ec1edd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_3e8f131fa9a231acb2ab509d5c50d3e45011f3e7b9fe7deee8e1d75f96b2450b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8f131fa9a231acb2ab509d5c50d3e45011f3e7b9fe7deee8e1d75f96b2450b->enter($__internal_3e8f131fa9a231acb2ab509d5c50d3e45011f3e7b9fe7deee8e1d75f96b2450b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_717148cc437d906e3dbe3d6bb049544946cc89bae736fcdb62d245c26ec1edd1->leave($__internal_717148cc437d906e3dbe3d6bb049544946cc89bae736fcdb62d245c26ec1edd1_prof);

        
        $__internal_3e8f131fa9a231acb2ab509d5c50d3e45011f3e7b9fe7deee8e1d75f96b2450b->leave($__internal_3e8f131fa9a231acb2ab509d5c50d3e45011f3e7b9fe7deee8e1d75f96b2450b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84acc90812ba6a78b89c9d624754f239b114543bb9721a5f9b49c435263bd3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84acc90812ba6a78b89c9d624754f239b114543bb9721a5f9b49c435263bd3e1->enter($__internal_84acc90812ba6a78b89c9d624754f239b114543bb9721a5f9b49c435263bd3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e655a50d22f704cf98649f4394c39431158dcaab81ffd5745f2749c916b1637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e655a50d22f704cf98649f4394c39431158dcaab81ffd5745f2749c916b1637a->enter($__internal_e655a50d22f704cf98649f4394c39431158dcaab81ffd5745f2749c916b1637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e655a50d22f704cf98649f4394c39431158dcaab81ffd5745f2749c916b1637a->leave($__internal_e655a50d22f704cf98649f4394c39431158dcaab81ffd5745f2749c916b1637a_prof);

        
        $__internal_84acc90812ba6a78b89c9d624754f239b114543bb9721a5f9b49c435263bd3e1->leave($__internal_84acc90812ba6a78b89c9d624754f239b114543bb9721a5f9b49c435263bd3e1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_80ef5cd716214ee1afb997b172014e947b928cc9663d8744025cbe08ba5a74b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ef5cd716214ee1afb997b172014e947b928cc9663d8744025cbe08ba5a74b9->enter($__internal_80ef5cd716214ee1afb997b172014e947b928cc9663d8744025cbe08ba5a74b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e1f3b30ae9ba736f909eaae3695a6e6db5de89eb84c17e0b620a24b05a7bca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1f3b30ae9ba736f909eaae3695a6e6db5de89eb84c17e0b620a24b05a7bca7->enter($__internal_9e1f3b30ae9ba736f909eaae3695a6e6db5de89eb84c17e0b620a24b05a7bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9e1f3b30ae9ba736f909eaae3695a6e6db5de89eb84c17e0b620a24b05a7bca7->leave($__internal_9e1f3b30ae9ba736f909eaae3695a6e6db5de89eb84c17e0b620a24b05a7bca7_prof);

        
        $__internal_80ef5cd716214ee1afb997b172014e947b928cc9663d8744025cbe08ba5a74b9->leave($__internal_80ef5cd716214ee1afb997b172014e947b928cc9663d8744025cbe08ba5a74b9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2774d689d7faf463d5da5bcff396ed5a5943e170fe6f4f05a393d2db72e267b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2774d689d7faf463d5da5bcff396ed5a5943e170fe6f4f05a393d2db72e267b3->enter($__internal_2774d689d7faf463d5da5bcff396ed5a5943e170fe6f4f05a393d2db72e267b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c62a5f3515a0087fd040c0808038321b0d557ba20f020732d17656ffea1fd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c62a5f3515a0087fd040c0808038321b0d557ba20f020732d17656ffea1fd8a->enter($__internal_7c62a5f3515a0087fd040c0808038321b0d557ba20f020732d17656ffea1fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c62a5f3515a0087fd040c0808038321b0d557ba20f020732d17656ffea1fd8a->leave($__internal_7c62a5f3515a0087fd040c0808038321b0d557ba20f020732d17656ffea1fd8a_prof);

        
        $__internal_2774d689d7faf463d5da5bcff396ed5a5943e170fe6f4f05a393d2db72e267b3->leave($__internal_2774d689d7faf463d5da5bcff396ed5a5943e170fe6f4f05a393d2db72e267b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
