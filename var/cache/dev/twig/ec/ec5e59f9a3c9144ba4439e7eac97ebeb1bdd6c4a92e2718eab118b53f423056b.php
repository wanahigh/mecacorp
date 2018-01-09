<?php

/* @Twig/layout.html.twig */
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
        $__internal_3ee00a0669f27359b0da321ff4ff16eec511550098c5ee4ba2c4ac8f25ecf90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee00a0669f27359b0da321ff4ff16eec511550098c5ee4ba2c4ac8f25ecf90b->enter($__internal_3ee00a0669f27359b0da321ff4ff16eec511550098c5ee4ba2c4ac8f25ecf90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7e00aff8fadf18c7c5679c7d6a4b9dd8115746ebd9975d4570ea0911b6e91e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e00aff8fadf18c7c5679c7d6a4b9dd8115746ebd9975d4570ea0911b6e91e4b->enter($__internal_7e00aff8fadf18c7c5679c7d6a4b9dd8115746ebd9975d4570ea0911b6e91e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3ee00a0669f27359b0da321ff4ff16eec511550098c5ee4ba2c4ac8f25ecf90b->leave($__internal_3ee00a0669f27359b0da321ff4ff16eec511550098c5ee4ba2c4ac8f25ecf90b_prof);

        
        $__internal_7e00aff8fadf18c7c5679c7d6a4b9dd8115746ebd9975d4570ea0911b6e91e4b->leave($__internal_7e00aff8fadf18c7c5679c7d6a4b9dd8115746ebd9975d4570ea0911b6e91e4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b6da4119ffb90eee623283548247b0bce77308a229076ed69d66fba1fe5e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b6da4119ffb90eee623283548247b0bce77308a229076ed69d66fba1fe5e33->enter($__internal_16b6da4119ffb90eee623283548247b0bce77308a229076ed69d66fba1fe5e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d92630e825d0ae7338e7f5d0b41177f7d14c693df35f47e1dcc0a494767e84fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92630e825d0ae7338e7f5d0b41177f7d14c693df35f47e1dcc0a494767e84fa->enter($__internal_d92630e825d0ae7338e7f5d0b41177f7d14c693df35f47e1dcc0a494767e84fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d92630e825d0ae7338e7f5d0b41177f7d14c693df35f47e1dcc0a494767e84fa->leave($__internal_d92630e825d0ae7338e7f5d0b41177f7d14c693df35f47e1dcc0a494767e84fa_prof);

        
        $__internal_16b6da4119ffb90eee623283548247b0bce77308a229076ed69d66fba1fe5e33->leave($__internal_16b6da4119ffb90eee623283548247b0bce77308a229076ed69d66fba1fe5e33_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fa9502fc0fef170830777cd5f1d663be2b8d9665ca7579a6f71473a2d9d7bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa9502fc0fef170830777cd5f1d663be2b8d9665ca7579a6f71473a2d9d7bf2->enter($__internal_7fa9502fc0fef170830777cd5f1d663be2b8d9665ca7579a6f71473a2d9d7bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfb758a44a5e800bb6b07228d9613182e5de2e1aa7365bd4e9f68660e540ab27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb758a44a5e800bb6b07228d9613182e5de2e1aa7365bd4e9f68660e540ab27->enter($__internal_cfb758a44a5e800bb6b07228d9613182e5de2e1aa7365bd4e9f68660e540ab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cfb758a44a5e800bb6b07228d9613182e5de2e1aa7365bd4e9f68660e540ab27->leave($__internal_cfb758a44a5e800bb6b07228d9613182e5de2e1aa7365bd4e9f68660e540ab27_prof);

        
        $__internal_7fa9502fc0fef170830777cd5f1d663be2b8d9665ca7579a6f71473a2d9d7bf2->leave($__internal_7fa9502fc0fef170830777cd5f1d663be2b8d9665ca7579a6f71473a2d9d7bf2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_926bdb7096ccd0a8f8fa2a2330ea6914540a380b28f24f7a621464871f64eb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926bdb7096ccd0a8f8fa2a2330ea6914540a380b28f24f7a621464871f64eb8c->enter($__internal_926bdb7096ccd0a8f8fa2a2330ea6914540a380b28f24f7a621464871f64eb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_344e4429d249b4371122236f9015a9ba4706374bd9737178ad7a02b730b93b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344e4429d249b4371122236f9015a9ba4706374bd9737178ad7a02b730b93b4e->enter($__internal_344e4429d249b4371122236f9015a9ba4706374bd9737178ad7a02b730b93b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_344e4429d249b4371122236f9015a9ba4706374bd9737178ad7a02b730b93b4e->leave($__internal_344e4429d249b4371122236f9015a9ba4706374bd9737178ad7a02b730b93b4e_prof);

        
        $__internal_926bdb7096ccd0a8f8fa2a2330ea6914540a380b28f24f7a621464871f64eb8c->leave($__internal_926bdb7096ccd0a8f8fa2a2330ea6914540a380b28f24f7a621464871f64eb8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
