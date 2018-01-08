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
        $__internal_6d06b7f61f392f7a702692fbe72fb5d39476aa237a0a9f076b06c08f199df3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d06b7f61f392f7a702692fbe72fb5d39476aa237a0a9f076b06c08f199df3c9->enter($__internal_6d06b7f61f392f7a702692fbe72fb5d39476aa237a0a9f076b06c08f199df3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActuBundle:Default:index.html.twig"));

        $__internal_e007b57cbbfc3157d7e8b7b539385b8972fedd5ccb4df8e7ecb5aa4612c56341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e007b57cbbfc3157d7e8b7b539385b8972fedd5ccb4df8e7ecb5aa4612c56341->enter($__internal_e007b57cbbfc3157d7e8b7b539385b8972fedd5ccb4df8e7ecb5aa4612c56341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActuBundle:Default:index.html.twig"));

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
        
        $__internal_6d06b7f61f392f7a702692fbe72fb5d39476aa237a0a9f076b06c08f199df3c9->leave($__internal_6d06b7f61f392f7a702692fbe72fb5d39476aa237a0a9f076b06c08f199df3c9_prof);

        
        $__internal_e007b57cbbfc3157d7e8b7b539385b8972fedd5ccb4df8e7ecb5aa4612c56341->leave($__internal_e007b57cbbfc3157d7e8b7b539385b8972fedd5ccb4df8e7ecb5aa4612c56341_prof);

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
{{ form_end(form) }}", "AcmeActuBundle:Default:index.html.twig", "/home/fabien/symfony-stg/src/Acme/ActuBundle/Resources/views/Default/index.html.twig");
    }
}
