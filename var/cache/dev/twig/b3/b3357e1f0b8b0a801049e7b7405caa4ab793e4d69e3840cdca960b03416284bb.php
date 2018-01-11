<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_d8cdd84a2fafedccf91e0b62b1c4424bc8e3cf7bca9cf31c12ab6bf7a8ed9709 extends Twig_Template
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
        $__internal_e941445207fbdbb85b104fdb49eb52a301a79711caacf5bdb24646e77d036ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e941445207fbdbb85b104fdb49eb52a301a79711caacf5bdb24646e77d036ed3->enter($__internal_e941445207fbdbb85b104fdb49eb52a301a79711caacf5bdb24646e77d036ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_a44fd6274f434dd6d231ca169fdaf45442040fc41c376fdb96e7dc9c4417d37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44fd6274f434dd6d231ca169fdaf45442040fc41c376fdb96e7dc9c4417d37b->enter($__internal_a44fd6274f434dd6d231ca169fdaf45442040fc41c376fdb96e7dc9c4417d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_e941445207fbdbb85b104fdb49eb52a301a79711caacf5bdb24646e77d036ed3->leave($__internal_e941445207fbdbb85b104fdb49eb52a301a79711caacf5bdb24646e77d036ed3_prof);

        
        $__internal_a44fd6274f434dd6d231ca169fdaf45442040fc41c376fdb96e7dc9c4417d37b->leave($__internal_a44fd6274f434dd6d231ca169fdaf45442040fc41c376fdb96e7dc9c4417d37b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
