<?php

/* AcmeActuBundle:Default:index.html.twig */
class __TwigTemplate_0f68941db115403b2d42daac817a48e7b95b98b03cc327b15be3056778ae54a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb9adf60b86c394ff4d0128b5046b56a8e7fb958ca26f48819545d1043df7541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9adf60b86c394ff4d0128b5046b56a8e7fb958ca26f48819545d1043df7541->enter($__internal_bb9adf60b86c394ff4d0128b5046b56a8e7fb958ca26f48819545d1043df7541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActuBundle:Default:index.html.twig"));

        $__internal_8f2ecb65432df91409916d58f759d2f0f7c8186003016ab52b45c6ad83344930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2ecb65432df91409916d58f759d2f0f7c8186003016ab52b45c6ad83344930->enter($__internal_8f2ecb65432df91409916d58f759d2f0f7c8186003016ab52b45c6ad83344930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActuBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "image", array()), 'row');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_bb9adf60b86c394ff4d0128b5046b56a8e7fb958ca26f48819545d1043df7541->leave($__internal_bb9adf60b86c394ff4d0128b5046b56a8e7fb958ca26f48819545d1043df7541_prof);

        
        $__internal_8f2ecb65432df91409916d58f759d2f0f7c8186003016ab52b45c6ad83344930->leave($__internal_8f2ecb65432df91409916d58f759d2f0f7c8186003016ab52b45c6ad83344930_prof);

    }

    public function getTemplateName()
    {
        return "AcmeActuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  32 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
{{ form_start(form) }}
    {# ... #}

    {{ form_row(form.image) }}
{{ form_end(form) }}", "AcmeActuBundle:Default:index.html.twig", "/var/www/monsite1/mecacorp/src/Acme/ActuBundle/Resources/views/Default/index.html.twig");
    }
}
