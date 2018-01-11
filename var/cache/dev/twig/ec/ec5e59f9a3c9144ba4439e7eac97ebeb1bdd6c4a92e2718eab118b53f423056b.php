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
        $__internal_bcda899951050e56dced1b8b52d5940df8feaa043d58b9b5cb42add8b7e4cc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcda899951050e56dced1b8b52d5940df8feaa043d58b9b5cb42add8b7e4cc63->enter($__internal_bcda899951050e56dced1b8b52d5940df8feaa043d58b9b5cb42add8b7e4cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_64e2f3794a224c183c84d858a0d0b79b3e7d02e671c7faeddeb4c1b9f52f18da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e2f3794a224c183c84d858a0d0b79b3e7d02e671c7faeddeb4c1b9f52f18da->enter($__internal_64e2f3794a224c183c84d858a0d0b79b3e7d02e671c7faeddeb4c1b9f52f18da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bcda899951050e56dced1b8b52d5940df8feaa043d58b9b5cb42add8b7e4cc63->leave($__internal_bcda899951050e56dced1b8b52d5940df8feaa043d58b9b5cb42add8b7e4cc63_prof);

        
        $__internal_64e2f3794a224c183c84d858a0d0b79b3e7d02e671c7faeddeb4c1b9f52f18da->leave($__internal_64e2f3794a224c183c84d858a0d0b79b3e7d02e671c7faeddeb4c1b9f52f18da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe99c944615508b7d37490d8aac0b863ab7d085ba5a321bf4e96b1be0339cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe99c944615508b7d37490d8aac0b863ab7d085ba5a321bf4e96b1be0339cfa->enter($__internal_1fe99c944615508b7d37490d8aac0b863ab7d085ba5a321bf4e96b1be0339cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21462fcfe4264384e556b118a747207b1e8bc77bd00d54bf4098210cce62ee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21462fcfe4264384e556b118a747207b1e8bc77bd00d54bf4098210cce62ee82->enter($__internal_21462fcfe4264384e556b118a747207b1e8bc77bd00d54bf4098210cce62ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_21462fcfe4264384e556b118a747207b1e8bc77bd00d54bf4098210cce62ee82->leave($__internal_21462fcfe4264384e556b118a747207b1e8bc77bd00d54bf4098210cce62ee82_prof);

        
        $__internal_1fe99c944615508b7d37490d8aac0b863ab7d085ba5a321bf4e96b1be0339cfa->leave($__internal_1fe99c944615508b7d37490d8aac0b863ab7d085ba5a321bf4e96b1be0339cfa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3b4de88396a516990ab72d4b4ce35a4f1ff5d402fdfaa82f95380cad4812af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b4de88396a516990ab72d4b4ce35a4f1ff5d402fdfaa82f95380cad4812af7->enter($__internal_f3b4de88396a516990ab72d4b4ce35a4f1ff5d402fdfaa82f95380cad4812af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f8d90a99f2a416bbfc32960c9e32bf11a4e4497da8d3096753a396790146512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8d90a99f2a416bbfc32960c9e32bf11a4e4497da8d3096753a396790146512->enter($__internal_1f8d90a99f2a416bbfc32960c9e32bf11a4e4497da8d3096753a396790146512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1f8d90a99f2a416bbfc32960c9e32bf11a4e4497da8d3096753a396790146512->leave($__internal_1f8d90a99f2a416bbfc32960c9e32bf11a4e4497da8d3096753a396790146512_prof);

        
        $__internal_f3b4de88396a516990ab72d4b4ce35a4f1ff5d402fdfaa82f95380cad4812af7->leave($__internal_f3b4de88396a516990ab72d4b4ce35a4f1ff5d402fdfaa82f95380cad4812af7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_58616fceba161aa1c5fac406f9bb524247f776a79523389a0296b48b820bf046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58616fceba161aa1c5fac406f9bb524247f776a79523389a0296b48b820bf046->enter($__internal_58616fceba161aa1c5fac406f9bb524247f776a79523389a0296b48b820bf046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a4530a356bfb64a3ee5183422e048013af82e8f23a77aed1a416a183d56e5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4530a356bfb64a3ee5183422e048013af82e8f23a77aed1a416a183d56e5d0->enter($__internal_0a4530a356bfb64a3ee5183422e048013af82e8f23a77aed1a416a183d56e5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a4530a356bfb64a3ee5183422e048013af82e8f23a77aed1a416a183d56e5d0->leave($__internal_0a4530a356bfb64a3ee5183422e048013af82e8f23a77aed1a416a183d56e5d0_prof);

        
        $__internal_58616fceba161aa1c5fac406f9bb524247f776a79523389a0296b48b820bf046->leave($__internal_58616fceba161aa1c5fac406f9bb524247f776a79523389a0296b48b820bf046_prof);

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
", "@Twig/layout.html.twig", "/home/fabien/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
