<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_afc427feb6f3126ef6657a6a4fe2942cda2a6fb73c1d8ff438677d307d5f86df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_08a2365a0e95ae8ae62005601fe8e8c123cbeb830d022dcdf7e43ca3aabf165a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a2365a0e95ae8ae62005601fe8e8c123cbeb830d022dcdf7e43ca3aabf165a->enter($__internal_08a2365a0e95ae8ae62005601fe8e8c123cbeb830d022dcdf7e43ca3aabf165a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_dd65e40fcf168d9a3ff838df056a1948da56e2ecdd7398d53658d0e8e2e6f863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd65e40fcf168d9a3ff838df056a1948da56e2ecdd7398d53658d0e8e2e6f863->enter($__internal_dd65e40fcf168d9a3ff838df056a1948da56e2ecdd7398d53658d0e8e2e6f863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a2365a0e95ae8ae62005601fe8e8c123cbeb830d022dcdf7e43ca3aabf165a->leave($__internal_08a2365a0e95ae8ae62005601fe8e8c123cbeb830d022dcdf7e43ca3aabf165a_prof);

        
        $__internal_dd65e40fcf168d9a3ff838df056a1948da56e2ecdd7398d53658d0e8e2e6f863->leave($__internal_dd65e40fcf168d9a3ff838df056a1948da56e2ecdd7398d53658d0e8e2e6f863_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_215b2555382104216af02a7778b1f97fcc6b2a5442670db6c76e0969d7181df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215b2555382104216af02a7778b1f97fcc6b2a5442670db6c76e0969d7181df4->enter($__internal_215b2555382104216af02a7778b1f97fcc6b2a5442670db6c76e0969d7181df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfbdf20640430dd77119ad81a2a856c91bb5ad38605fec4cd2e93f5dbf962639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbdf20640430dd77119ad81a2a856c91bb5ad38605fec4cd2e93f5dbf962639->enter($__internal_dfbdf20640430dd77119ad81a2a856c91bb5ad38605fec4cd2e93f5dbf962639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dfbdf20640430dd77119ad81a2a856c91bb5ad38605fec4cd2e93f5dbf962639->leave($__internal_dfbdf20640430dd77119ad81a2a856c91bb5ad38605fec4cd2e93f5dbf962639_prof);

        
        $__internal_215b2555382104216af02a7778b1f97fcc6b2a5442670db6c76e0969d7181df4->leave($__internal_215b2555382104216af02a7778b1f97fcc6b2a5442670db6c76e0969d7181df4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f50dee177388b471c817040b7580f87cfd83ef966b17878946ffb3d6fe61af7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50dee177388b471c817040b7580f87cfd83ef966b17878946ffb3d6fe61af7d->enter($__internal_f50dee177388b471c817040b7580f87cfd83ef966b17878946ffb3d6fe61af7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3736783194da670824502946e10876ed93c13fb882ee4d913f84737ce555b353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3736783194da670824502946e10876ed93c13fb882ee4d913f84737ce555b353->enter($__internal_3736783194da670824502946e10876ed93c13fb882ee4d913f84737ce555b353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3736783194da670824502946e10876ed93c13fb882ee4d913f84737ce555b353->leave($__internal_3736783194da670824502946e10876ed93c13fb882ee4d913f84737ce555b353_prof);

        
        $__internal_f50dee177388b471c817040b7580f87cfd83ef966b17878946ffb3d6fe61af7d->leave($__internal_f50dee177388b471c817040b7580f87cfd83ef966b17878946ffb3d6fe61af7d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_236e4f80acdab8a80bed8eca100fcf716c908dab8acb84f3c3ed4e8260ed01d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236e4f80acdab8a80bed8eca100fcf716c908dab8acb84f3c3ed4e8260ed01d6->enter($__internal_236e4f80acdab8a80bed8eca100fcf716c908dab8acb84f3c3ed4e8260ed01d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b3771bc9ec6a21565850f613d8eb8beb2becac923c57d60048fd001406ff4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3771bc9ec6a21565850f613d8eb8beb2becac923c57d60048fd001406ff4b5->enter($__internal_8b3771bc9ec6a21565850f613d8eb8beb2becac923c57d60048fd001406ff4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8b3771bc9ec6a21565850f613d8eb8beb2becac923c57d60048fd001406ff4b5->leave($__internal_8b3771bc9ec6a21565850f613d8eb8beb2becac923c57d60048fd001406ff4b5_prof);

        
        $__internal_236e4f80acdab8a80bed8eca100fcf716c908dab8acb84f3c3ed4e8260ed01d6->leave($__internal_236e4f80acdab8a80bed8eca100fcf716c908dab8acb84f3c3ed4e8260ed01d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
