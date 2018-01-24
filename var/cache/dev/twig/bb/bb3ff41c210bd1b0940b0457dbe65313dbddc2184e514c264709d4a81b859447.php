<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_eb58e35063f9e25502b51990a39d22a8152d4243ed55c442de1aca26ccb65fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c371b2407d0797d71c1b1bbb9928f2f43702fe7bbfd2b1c19c9163098e9fe1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c371b2407d0797d71c1b1bbb9928f2f43702fe7bbfd2b1c19c9163098e9fe1ae->enter($__internal_c371b2407d0797d71c1b1bbb9928f2f43702fe7bbfd2b1c19c9163098e9fe1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a82cdde16523b03475689bd04b606531ff753b3e497f1f7ec1bd302054f0ced0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82cdde16523b03475689bd04b606531ff753b3e497f1f7ec1bd302054f0ced0->enter($__internal_a82cdde16523b03475689bd04b606531ff753b3e497f1f7ec1bd302054f0ced0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c371b2407d0797d71c1b1bbb9928f2f43702fe7bbfd2b1c19c9163098e9fe1ae->leave($__internal_c371b2407d0797d71c1b1bbb9928f2f43702fe7bbfd2b1c19c9163098e9fe1ae_prof);

        
        $__internal_a82cdde16523b03475689bd04b606531ff753b3e497f1f7ec1bd302054f0ced0->leave($__internal_a82cdde16523b03475689bd04b606531ff753b3e497f1f7ec1bd302054f0ced0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd0db1f4d6db91836d61c3fd63cd7d75407f2572eac83b935c5a2b7beb1f69e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0db1f4d6db91836d61c3fd63cd7d75407f2572eac83b935c5a2b7beb1f69e2->enter($__internal_dd0db1f4d6db91836d61c3fd63cd7d75407f2572eac83b935c5a2b7beb1f69e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3841676365b78ae8a8505b8bc0dd0d208f65aaa9bb5fc6a8665e964c87fd50ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3841676365b78ae8a8505b8bc0dd0d208f65aaa9bb5fc6a8665e964c87fd50ee->enter($__internal_3841676365b78ae8a8505b8bc0dd0d208f65aaa9bb5fc6a8665e964c87fd50ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3841676365b78ae8a8505b8bc0dd0d208f65aaa9bb5fc6a8665e964c87fd50ee->leave($__internal_3841676365b78ae8a8505b8bc0dd0d208f65aaa9bb5fc6a8665e964c87fd50ee_prof);

        
        $__internal_dd0db1f4d6db91836d61c3fd63cd7d75407f2572eac83b935c5a2b7beb1f69e2->leave($__internal_dd0db1f4d6db91836d61c3fd63cd7d75407f2572eac83b935c5a2b7beb1f69e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbfb25243fc220769ea44eb16eafac971a05a504b005c9bffb563996c667a77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfb25243fc220769ea44eb16eafac971a05a504b005c9bffb563996c667a77d->enter($__internal_fbfb25243fc220769ea44eb16eafac971a05a504b005c9bffb563996c667a77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d07ea15bc684dcb716e2b83c00ec6e1ef63523e427a92c367bada2284a8de97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07ea15bc684dcb716e2b83c00ec6e1ef63523e427a92c367bada2284a8de97b->enter($__internal_d07ea15bc684dcb716e2b83c00ec6e1ef63523e427a92c367bada2284a8de97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d07ea15bc684dcb716e2b83c00ec6e1ef63523e427a92c367bada2284a8de97b->leave($__internal_d07ea15bc684dcb716e2b83c00ec6e1ef63523e427a92c367bada2284a8de97b_prof);

        
        $__internal_fbfb25243fc220769ea44eb16eafac971a05a504b005c9bffb563996c667a77d->leave($__internal_fbfb25243fc220769ea44eb16eafac971a05a504b005c9bffb563996c667a77d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cab514b29ad1d2530a698dbd02069e8d4af082cc81608fa815e6f98bdab64384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab514b29ad1d2530a698dbd02069e8d4af082cc81608fa815e6f98bdab64384->enter($__internal_cab514b29ad1d2530a698dbd02069e8d4af082cc81608fa815e6f98bdab64384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37367be9269bbbb5c206ac521a242c583feb387e7a1cbe7a474a0d6d21d72852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37367be9269bbbb5c206ac521a242c583feb387e7a1cbe7a474a0d6d21d72852->enter($__internal_37367be9269bbbb5c206ac521a242c583feb387e7a1cbe7a474a0d6d21d72852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_37367be9269bbbb5c206ac521a242c583feb387e7a1cbe7a474a0d6d21d72852->leave($__internal_37367be9269bbbb5c206ac521a242c583feb387e7a1cbe7a474a0d6d21d72852_prof);

        
        $__internal_cab514b29ad1d2530a698dbd02069e8d4af082cc81608fa815e6f98bdab64384->leave($__internal_cab514b29ad1d2530a698dbd02069e8d4af082cc81608fa815e6f98bdab64384_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/fabien/Modèles/mecacorp maj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
