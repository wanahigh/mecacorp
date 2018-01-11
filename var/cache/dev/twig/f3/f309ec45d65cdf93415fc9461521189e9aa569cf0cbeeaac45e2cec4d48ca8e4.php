<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_afc427feb6f3126ef6657a6a4fe2942cda2a6fb73c1d8ff438677d307d5f86df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bfe0f23d89e06879d30ee6a83953189b75a03ac5205b967150331218e6eff613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe0f23d89e06879d30ee6a83953189b75a03ac5205b967150331218e6eff613->enter($__internal_bfe0f23d89e06879d30ee6a83953189b75a03ac5205b967150331218e6eff613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3ceec5c636dc347f82c68dfcc263980f1ea08721cf8c525d8bf137cd1c6337ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ceec5c636dc347f82c68dfcc263980f1ea08721cf8c525d8bf137cd1c6337ec->enter($__internal_3ceec5c636dc347f82c68dfcc263980f1ea08721cf8c525d8bf137cd1c6337ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe0f23d89e06879d30ee6a83953189b75a03ac5205b967150331218e6eff613->leave($__internal_bfe0f23d89e06879d30ee6a83953189b75a03ac5205b967150331218e6eff613_prof);

        
        $__internal_3ceec5c636dc347f82c68dfcc263980f1ea08721cf8c525d8bf137cd1c6337ec->leave($__internal_3ceec5c636dc347f82c68dfcc263980f1ea08721cf8c525d8bf137cd1c6337ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71d5ba294367fdf8a04f3d6c3ccea174ae1029358f00e36e190a6b44d8d11ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d5ba294367fdf8a04f3d6c3ccea174ae1029358f00e36e190a6b44d8d11ed9->enter($__internal_71d5ba294367fdf8a04f3d6c3ccea174ae1029358f00e36e190a6b44d8d11ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a3a5ccb1d16d266c3fab57fd56e699c3edc79e2b50e06abfec039a8a977137d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3a5ccb1d16d266c3fab57fd56e699c3edc79e2b50e06abfec039a8a977137d->enter($__internal_1a3a5ccb1d16d266c3fab57fd56e699c3edc79e2b50e06abfec039a8a977137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1a3a5ccb1d16d266c3fab57fd56e699c3edc79e2b50e06abfec039a8a977137d->leave($__internal_1a3a5ccb1d16d266c3fab57fd56e699c3edc79e2b50e06abfec039a8a977137d_prof);

        
        $__internal_71d5ba294367fdf8a04f3d6c3ccea174ae1029358f00e36e190a6b44d8d11ed9->leave($__internal_71d5ba294367fdf8a04f3d6c3ccea174ae1029358f00e36e190a6b44d8d11ed9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f44d29a7b6fc289c50a9d42b6438d2ac111ea284afc2c06d4eb2c19f203a8846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44d29a7b6fc289c50a9d42b6438d2ac111ea284afc2c06d4eb2c19f203a8846->enter($__internal_f44d29a7b6fc289c50a9d42b6438d2ac111ea284afc2c06d4eb2c19f203a8846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b36b7e014c78a4c2a02b519a0ff56d38a6e5356bc457b37c9fb5fa4f92d1bd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36b7e014c78a4c2a02b519a0ff56d38a6e5356bc457b37c9fb5fa4f92d1bd7c->enter($__internal_b36b7e014c78a4c2a02b519a0ff56d38a6e5356bc457b37c9fb5fa4f92d1bd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b36b7e014c78a4c2a02b519a0ff56d38a6e5356bc457b37c9fb5fa4f92d1bd7c->leave($__internal_b36b7e014c78a4c2a02b519a0ff56d38a6e5356bc457b37c9fb5fa4f92d1bd7c_prof);

        
        $__internal_f44d29a7b6fc289c50a9d42b6438d2ac111ea284afc2c06d4eb2c19f203a8846->leave($__internal_f44d29a7b6fc289c50a9d42b6438d2ac111ea284afc2c06d4eb2c19f203a8846_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e037c4f7da1ae1eaaa80a435c814e6a0ba1af66905246eb0bd5d8b19010529c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e037c4f7da1ae1eaaa80a435c814e6a0ba1af66905246eb0bd5d8b19010529c5->enter($__internal_e037c4f7da1ae1eaaa80a435c814e6a0ba1af66905246eb0bd5d8b19010529c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8534dcce4a0798b5f55887afb7346f18256f8f9b3ba7b8ddc01e7eafd9f3113c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8534dcce4a0798b5f55887afb7346f18256f8f9b3ba7b8ddc01e7eafd9f3113c->enter($__internal_8534dcce4a0798b5f55887afb7346f18256f8f9b3ba7b8ddc01e7eafd9f3113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8534dcce4a0798b5f55887afb7346f18256f8f9b3ba7b8ddc01e7eafd9f3113c->leave($__internal_8534dcce4a0798b5f55887afb7346f18256f8f9b3ba7b8ddc01e7eafd9f3113c_prof);

        
        $__internal_e037c4f7da1ae1eaaa80a435c814e6a0ba1af66905246eb0bd5d8b19010529c5->leave($__internal_e037c4f7da1ae1eaaa80a435c814e6a0ba1af66905246eb0bd5d8b19010529c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/fabien/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
