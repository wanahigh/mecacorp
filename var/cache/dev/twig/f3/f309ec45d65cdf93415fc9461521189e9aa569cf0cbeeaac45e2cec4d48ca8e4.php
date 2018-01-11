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
        $__internal_92150446cd067e3c638bbe71676f5c826d98316ec4a398831f148ec9dbc94de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92150446cd067e3c638bbe71676f5c826d98316ec4a398831f148ec9dbc94de6->enter($__internal_92150446cd067e3c638bbe71676f5c826d98316ec4a398831f148ec9dbc94de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b1331cde2f228b66852b8146511b6a832e99dbe83dcee7db135a927ae6127202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1331cde2f228b66852b8146511b6a832e99dbe83dcee7db135a927ae6127202->enter($__internal_b1331cde2f228b66852b8146511b6a832e99dbe83dcee7db135a927ae6127202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92150446cd067e3c638bbe71676f5c826d98316ec4a398831f148ec9dbc94de6->leave($__internal_92150446cd067e3c638bbe71676f5c826d98316ec4a398831f148ec9dbc94de6_prof);

        
        $__internal_b1331cde2f228b66852b8146511b6a832e99dbe83dcee7db135a927ae6127202->leave($__internal_b1331cde2f228b66852b8146511b6a832e99dbe83dcee7db135a927ae6127202_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4c50fd68f13c906dedd3fa90ed501309e67a73bb48d49e114a6dc6133984707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c50fd68f13c906dedd3fa90ed501309e67a73bb48d49e114a6dc6133984707->enter($__internal_f4c50fd68f13c906dedd3fa90ed501309e67a73bb48d49e114a6dc6133984707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29b7442eb313b3594542f1723ad05c9c4479705e3be91f2f61d7c5f9f341a378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b7442eb313b3594542f1723ad05c9c4479705e3be91f2f61d7c5f9f341a378->enter($__internal_29b7442eb313b3594542f1723ad05c9c4479705e3be91f2f61d7c5f9f341a378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_29b7442eb313b3594542f1723ad05c9c4479705e3be91f2f61d7c5f9f341a378->leave($__internal_29b7442eb313b3594542f1723ad05c9c4479705e3be91f2f61d7c5f9f341a378_prof);

        
        $__internal_f4c50fd68f13c906dedd3fa90ed501309e67a73bb48d49e114a6dc6133984707->leave($__internal_f4c50fd68f13c906dedd3fa90ed501309e67a73bb48d49e114a6dc6133984707_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_59d66ac9d12285d0c581aed5068dad6204a842793fdc357c1d6b442cf951cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d66ac9d12285d0c581aed5068dad6204a842793fdc357c1d6b442cf951cd4e->enter($__internal_59d66ac9d12285d0c581aed5068dad6204a842793fdc357c1d6b442cf951cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_308642b44cccdb60d0f6712bdb17bc09812279ebb8d51e10923d21bf9a35848a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308642b44cccdb60d0f6712bdb17bc09812279ebb8d51e10923d21bf9a35848a->enter($__internal_308642b44cccdb60d0f6712bdb17bc09812279ebb8d51e10923d21bf9a35848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_308642b44cccdb60d0f6712bdb17bc09812279ebb8d51e10923d21bf9a35848a->leave($__internal_308642b44cccdb60d0f6712bdb17bc09812279ebb8d51e10923d21bf9a35848a_prof);

        
        $__internal_59d66ac9d12285d0c581aed5068dad6204a842793fdc357c1d6b442cf951cd4e->leave($__internal_59d66ac9d12285d0c581aed5068dad6204a842793fdc357c1d6b442cf951cd4e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_83823bf3305610676ee070fb58c73d5dc8b095a674d6ae813965d83091a7a3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83823bf3305610676ee070fb58c73d5dc8b095a674d6ae813965d83091a7a3b4->enter($__internal_83823bf3305610676ee070fb58c73d5dc8b095a674d6ae813965d83091a7a3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d565f36b52fb9a57c1148c2620cdcd187d2b20dd1c28e0603d3aef61c75b33e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d565f36b52fb9a57c1148c2620cdcd187d2b20dd1c28e0603d3aef61c75b33e3->enter($__internal_d565f36b52fb9a57c1148c2620cdcd187d2b20dd1c28e0603d3aef61c75b33e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d565f36b52fb9a57c1148c2620cdcd187d2b20dd1c28e0603d3aef61c75b33e3->leave($__internal_d565f36b52fb9a57c1148c2620cdcd187d2b20dd1c28e0603d3aef61c75b33e3_prof);

        
        $__internal_83823bf3305610676ee070fb58c73d5dc8b095a674d6ae813965d83091a7a3b4->leave($__internal_83823bf3305610676ee070fb58c73d5dc8b095a674d6ae813965d83091a7a3b4_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/sunshine/Documents/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
