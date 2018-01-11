<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_7faf8cf0df26b7f1b730e39713fcf263b1eaafd382fc0f2468589a94098284ca extends Twig_Template
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
        $__internal_a943c50cd53cd71c789ce479e2a446a63acd4fa905d30c24cd49f1c4020ed339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a943c50cd53cd71c789ce479e2a446a63acd4fa905d30c24cd49f1c4020ed339->enter($__internal_a943c50cd53cd71c789ce479e2a446a63acd4fa905d30c24cd49f1c4020ed339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_1b2b5b93ef31071952e4800dd65f03256c89b0cc13a08522bea1ed547fac04ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2b5b93ef31071952e4800dd65f03256c89b0cc13a08522bea1ed547fac04ae->enter($__internal_1b2b5b93ef31071952e4800dd65f03256c89b0cc13a08522bea1ed547fac04ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input class=\"btn-large pink\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_a943c50cd53cd71c789ce479e2a446a63acd4fa905d30c24cd49f1c4020ed339->leave($__internal_a943c50cd53cd71c789ce479e2a446a63acd4fa905d30c24cd49f1c4020ed339_prof);

        
        $__internal_1b2b5b93ef31071952e4800dd65f03256c89b0cc13a08522bea1ed547fac04ae->leave($__internal_1b2b5b93ef31071952e4800dd65f03256c89b0cc13a08522bea1ed547fac04ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input class=\"btn-large pink\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/home/fabien/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
