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
        $__internal_9910fea89c834195e55555d292c9b36f001e0dcd63dd7be418feed2424f50027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9910fea89c834195e55555d292c9b36f001e0dcd63dd7be418feed2424f50027->enter($__internal_9910fea89c834195e55555d292c9b36f001e0dcd63dd7be418feed2424f50027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_55a594ca967a7479cce6105c9c9409a0c59886abab7d358b8ffda17f8a1976ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a594ca967a7479cce6105c9c9409a0c59886abab7d358b8ffda17f8a1976ff->enter($__internal_55a594ca967a7479cce6105c9c9409a0c59886abab7d358b8ffda17f8a1976ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9910fea89c834195e55555d292c9b36f001e0dcd63dd7be418feed2424f50027->leave($__internal_9910fea89c834195e55555d292c9b36f001e0dcd63dd7be418feed2424f50027_prof);

        
        $__internal_55a594ca967a7479cce6105c9c9409a0c59886abab7d358b8ffda17f8a1976ff->leave($__internal_55a594ca967a7479cce6105c9c9409a0c59886abab7d358b8ffda17f8a1976ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39348da661eea1bfe6ee1c1ca099d7f1c4afc33782f59cc43ac87836dc85b802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39348da661eea1bfe6ee1c1ca099d7f1c4afc33782f59cc43ac87836dc85b802->enter($__internal_39348da661eea1bfe6ee1c1ca099d7f1c4afc33782f59cc43ac87836dc85b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67b0c341c17525ecaadd5903a7212bbda3f8dbd5ee74a5231e1a964c60fc7516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b0c341c17525ecaadd5903a7212bbda3f8dbd5ee74a5231e1a964c60fc7516->enter($__internal_67b0c341c17525ecaadd5903a7212bbda3f8dbd5ee74a5231e1a964c60fc7516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67b0c341c17525ecaadd5903a7212bbda3f8dbd5ee74a5231e1a964c60fc7516->leave($__internal_67b0c341c17525ecaadd5903a7212bbda3f8dbd5ee74a5231e1a964c60fc7516_prof);

        
        $__internal_39348da661eea1bfe6ee1c1ca099d7f1c4afc33782f59cc43ac87836dc85b802->leave($__internal_39348da661eea1bfe6ee1c1ca099d7f1c4afc33782f59cc43ac87836dc85b802_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_415c3adce6506db3bd0b350056ab399efac7a3e9224e3dacef240698660b200a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415c3adce6506db3bd0b350056ab399efac7a3e9224e3dacef240698660b200a->enter($__internal_415c3adce6506db3bd0b350056ab399efac7a3e9224e3dacef240698660b200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9d4fe6ee9a42e5aadb9508fb2adf02ade32df1483077bb3895b81d23140724d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d4fe6ee9a42e5aadb9508fb2adf02ade32df1483077bb3895b81d23140724d->enter($__internal_a9d4fe6ee9a42e5aadb9508fb2adf02ade32df1483077bb3895b81d23140724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a9d4fe6ee9a42e5aadb9508fb2adf02ade32df1483077bb3895b81d23140724d->leave($__internal_a9d4fe6ee9a42e5aadb9508fb2adf02ade32df1483077bb3895b81d23140724d_prof);

        
        $__internal_415c3adce6506db3bd0b350056ab399efac7a3e9224e3dacef240698660b200a->leave($__internal_415c3adce6506db3bd0b350056ab399efac7a3e9224e3dacef240698660b200a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d0d9f9f6c84421c28bba6ee474132de6e2746b362d353e1eea5394aa1eb85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d0d9f9f6c84421c28bba6ee474132de6e2746b362d353e1eea5394aa1eb85b->enter($__internal_23d0d9f9f6c84421c28bba6ee474132de6e2746b362d353e1eea5394aa1eb85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71ee7628fe7a2bcddd57a86faab09fbd0509d2822d1511aab54feca302aca373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ee7628fe7a2bcddd57a86faab09fbd0509d2822d1511aab54feca302aca373->enter($__internal_71ee7628fe7a2bcddd57a86faab09fbd0509d2822d1511aab54feca302aca373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71ee7628fe7a2bcddd57a86faab09fbd0509d2822d1511aab54feca302aca373->leave($__internal_71ee7628fe7a2bcddd57a86faab09fbd0509d2822d1511aab54feca302aca373_prof);

        
        $__internal_23d0d9f9f6c84421c28bba6ee474132de6e2746b362d353e1eea5394aa1eb85b->leave($__internal_23d0d9f9f6c84421c28bba6ee474132de6e2746b362d353e1eea5394aa1eb85b_prof);

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
", "@Twig/layout.html.twig", "/home/sunshine/Documents/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
