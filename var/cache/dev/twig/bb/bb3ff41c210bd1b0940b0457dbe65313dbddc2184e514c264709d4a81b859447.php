<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_eb58e35063f9e25502b51990a39d22a8152d4243ed55c442de1aca26ccb65fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_9fbfb8cc2c0dae14e7cb74acbb9dffa5d8aa95b0062e648702615d0c74dce171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbfb8cc2c0dae14e7cb74acbb9dffa5d8aa95b0062e648702615d0c74dce171->enter($__internal_9fbfb8cc2c0dae14e7cb74acbb9dffa5d8aa95b0062e648702615d0c74dce171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_4141dae7b3818ea89672939beb084a017304d85b6a364001a4a63f261feeef88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4141dae7b3818ea89672939beb084a017304d85b6a364001a4a63f261feeef88->enter($__internal_4141dae7b3818ea89672939beb084a017304d85b6a364001a4a63f261feeef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fbfb8cc2c0dae14e7cb74acbb9dffa5d8aa95b0062e648702615d0c74dce171->leave($__internal_9fbfb8cc2c0dae14e7cb74acbb9dffa5d8aa95b0062e648702615d0c74dce171_prof);

        
        $__internal_4141dae7b3818ea89672939beb084a017304d85b6a364001a4a63f261feeef88->leave($__internal_4141dae7b3818ea89672939beb084a017304d85b6a364001a4a63f261feeef88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1c2d129f194b3c0a490bdee430112ffcbc61a0e83c0219d58bef5b35371476d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c2d129f194b3c0a490bdee430112ffcbc61a0e83c0219d58bef5b35371476d->enter($__internal_a1c2d129f194b3c0a490bdee430112ffcbc61a0e83c0219d58bef5b35371476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e02f723a4f9afc09516fa8028905904a76f58cee353126f8d69d7a8bf2e1a9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02f723a4f9afc09516fa8028905904a76f58cee353126f8d69d7a8bf2e1a9a0->enter($__internal_e02f723a4f9afc09516fa8028905904a76f58cee353126f8d69d7a8bf2e1a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e02f723a4f9afc09516fa8028905904a76f58cee353126f8d69d7a8bf2e1a9a0->leave($__internal_e02f723a4f9afc09516fa8028905904a76f58cee353126f8d69d7a8bf2e1a9a0_prof);

        
        $__internal_a1c2d129f194b3c0a490bdee430112ffcbc61a0e83c0219d58bef5b35371476d->leave($__internal_a1c2d129f194b3c0a490bdee430112ffcbc61a0e83c0219d58bef5b35371476d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea4bee9b2e7bffd7fce371b38c14af5b113dffe8c16dba07744005d569f4d0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4bee9b2e7bffd7fce371b38c14af5b113dffe8c16dba07744005d569f4d0fe->enter($__internal_ea4bee9b2e7bffd7fce371b38c14af5b113dffe8c16dba07744005d569f4d0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a03c0fb3ab71ee3a4b22c90ce61b6f109c64e024f13ae499306a2c8d402277f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a03c0fb3ab71ee3a4b22c90ce61b6f109c64e024f13ae499306a2c8d402277f->enter($__internal_8a03c0fb3ab71ee3a4b22c90ce61b6f109c64e024f13ae499306a2c8d402277f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8a03c0fb3ab71ee3a4b22c90ce61b6f109c64e024f13ae499306a2c8d402277f->leave($__internal_8a03c0fb3ab71ee3a4b22c90ce61b6f109c64e024f13ae499306a2c8d402277f_prof);

        
        $__internal_ea4bee9b2e7bffd7fce371b38c14af5b113dffe8c16dba07744005d569f4d0fe->leave($__internal_ea4bee9b2e7bffd7fce371b38c14af5b113dffe8c16dba07744005d569f4d0fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc15a0babd3c8500413de886b312f23c0799222b259efd43d62d23b74adf0f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc15a0babd3c8500413de886b312f23c0799222b259efd43d62d23b74adf0f6f->enter($__internal_fc15a0babd3c8500413de886b312f23c0799222b259efd43d62d23b74adf0f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4523ea7aaf376e2463921a396f48d56488126ed572e22ac2870972e3cee80fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4523ea7aaf376e2463921a396f48d56488126ed572e22ac2870972e3cee80fa->enter($__internal_e4523ea7aaf376e2463921a396f48d56488126ed572e22ac2870972e3cee80fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e4523ea7aaf376e2463921a396f48d56488126ed572e22ac2870972e3cee80fa->leave($__internal_e4523ea7aaf376e2463921a396f48d56488126ed572e22ac2870972e3cee80fa_prof);

        
        $__internal_fc15a0babd3c8500413de886b312f23c0799222b259efd43d62d23b74adf0f6f->leave($__internal_fc15a0babd3c8500413de886b312f23c0799222b259efd43d62d23b74adf0f6f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
