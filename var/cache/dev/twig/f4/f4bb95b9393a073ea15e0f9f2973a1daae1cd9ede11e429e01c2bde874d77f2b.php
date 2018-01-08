<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_8988ada96d50d704a2d5431f0872931e7c50e259a4c197792ef2255c09e7ed38 extends Twig_Template
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
        $__internal_3013d919e76049cb7c2def9fd9fc94ee8a9cdbc2374527173388905e49d9469b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3013d919e76049cb7c2def9fd9fc94ee8a9cdbc2374527173388905e49d9469b->enter($__internal_3013d919e76049cb7c2def9fd9fc94ee8a9cdbc2374527173388905e49d9469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_51754f6fd4e5f814d0ee3ed3a18eb0930ce2a520784ea53fe117c41910a87bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51754f6fd4e5f814d0ee3ed3a18eb0930ce2a520784ea53fe117c41910a87bba->enter($__internal_51754f6fd4e5f814d0ee3ed3a18eb0930ce2a520784ea53fe117c41910a87bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3013d919e76049cb7c2def9fd9fc94ee8a9cdbc2374527173388905e49d9469b->leave($__internal_3013d919e76049cb7c2def9fd9fc94ee8a9cdbc2374527173388905e49d9469b_prof);

        
        $__internal_51754f6fd4e5f814d0ee3ed3a18eb0930ce2a520784ea53fe117c41910a87bba->leave($__internal_51754f6fd4e5f814d0ee3ed3a18eb0930ce2a520784ea53fe117c41910a87bba_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
