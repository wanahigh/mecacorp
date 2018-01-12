<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_034ad564ae71d047b3c732a088f20ee33e283674d2562e5d522c78a0ad10aa0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_71e11066c3e588b50a142e782462cb36ac8be27546962af55c4f8c153d636f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e11066c3e588b50a142e782462cb36ac8be27546962af55c4f8c153d636f98->enter($__internal_71e11066c3e588b50a142e782462cb36ac8be27546962af55c4f8c153d636f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6d5a4c6d70a0425a42d8995e7e13594c9bda519612f2dd9855f54e4bcb06464d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5a4c6d70a0425a42d8995e7e13594c9bda519612f2dd9855f54e4bcb06464d->enter($__internal_6d5a4c6d70a0425a42d8995e7e13594c9bda519612f2dd9855f54e4bcb06464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e11066c3e588b50a142e782462cb36ac8be27546962af55c4f8c153d636f98->leave($__internal_71e11066c3e588b50a142e782462cb36ac8be27546962af55c4f8c153d636f98_prof);

        
        $__internal_6d5a4c6d70a0425a42d8995e7e13594c9bda519612f2dd9855f54e4bcb06464d->leave($__internal_6d5a4c6d70a0425a42d8995e7e13594c9bda519612f2dd9855f54e4bcb06464d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c5681e455e968a452b1243e9139e56ff570a432ca6d2f7419cffcfd2db21352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5681e455e968a452b1243e9139e56ff570a432ca6d2f7419cffcfd2db21352->enter($__internal_6c5681e455e968a452b1243e9139e56ff570a432ca6d2f7419cffcfd2db21352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_38043db857f946e011c7af46296dad00e07bd0ea04e7b148b14a23402278446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38043db857f946e011c7af46296dad00e07bd0ea04e7b148b14a23402278446c->enter($__internal_38043db857f946e011c7af46296dad00e07bd0ea04e7b148b14a23402278446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38043db857f946e011c7af46296dad00e07bd0ea04e7b148b14a23402278446c->leave($__internal_38043db857f946e011c7af46296dad00e07bd0ea04e7b148b14a23402278446c_prof);

        
        $__internal_6c5681e455e968a452b1243e9139e56ff570a432ca6d2f7419cffcfd2db21352->leave($__internal_6c5681e455e968a452b1243e9139e56ff570a432ca6d2f7419cffcfd2db21352_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43a1c4bbc7a2b2f0835890f2b670954f4a0e6ea1205ac6f27799069b5349ccc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a1c4bbc7a2b2f0835890f2b670954f4a0e6ea1205ac6f27799069b5349ccc6->enter($__internal_43a1c4bbc7a2b2f0835890f2b670954f4a0e6ea1205ac6f27799069b5349ccc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1eb547621ab3344e00f56b1e3f50eb0a133b98997bc837cd92144849229da906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb547621ab3344e00f56b1e3f50eb0a133b98997bc837cd92144849229da906->enter($__internal_1eb547621ab3344e00f56b1e3f50eb0a133b98997bc837cd92144849229da906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1eb547621ab3344e00f56b1e3f50eb0a133b98997bc837cd92144849229da906->leave($__internal_1eb547621ab3344e00f56b1e3f50eb0a133b98997bc837cd92144849229da906_prof);

        
        $__internal_43a1c4bbc7a2b2f0835890f2b670954f4a0e6ea1205ac6f27799069b5349ccc6->leave($__internal_43a1c4bbc7a2b2f0835890f2b670954f4a0e6ea1205ac6f27799069b5349ccc6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70d259f7ae58cdce77ad2873d89ec4523096f956b1a59126e407232fd9dd486d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d259f7ae58cdce77ad2873d89ec4523096f956b1a59126e407232fd9dd486d->enter($__internal_70d259f7ae58cdce77ad2873d89ec4523096f956b1a59126e407232fd9dd486d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d16288e403f8db3e93f15941e68ff7764ec75fbeba233a568ffd459e33195d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16288e403f8db3e93f15941e68ff7764ec75fbeba233a568ffd459e33195d44->enter($__internal_d16288e403f8db3e93f15941e68ff7764ec75fbeba233a568ffd459e33195d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d16288e403f8db3e93f15941e68ff7764ec75fbeba233a568ffd459e33195d44->leave($__internal_d16288e403f8db3e93f15941e68ff7764ec75fbeba233a568ffd459e33195d44_prof);

        
        $__internal_70d259f7ae58cdce77ad2873d89ec4523096f956b1a59126e407232fd9dd486d->leave($__internal_70d259f7ae58cdce77ad2873d89ec4523096f956b1a59126e407232fd9dd486d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/sunshine/Documents/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
