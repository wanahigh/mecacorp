<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_d785e0a0544d3fcafa718df12d89902b26a80fe70e533b90e08fed08586de638 extends Twig_Template
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
        $__internal_097f93da6a171579a622a8899ff6e63f90a533245fdb924dbf287a7f7abe9be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097f93da6a171579a622a8899ff6e63f90a533245fdb924dbf287a7f7abe9be4->enter($__internal_097f93da6a171579a622a8899ff6e63f90a533245fdb924dbf287a7f7abe9be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_2cd711e910d4f8b01a8ac10135d579b5a756b8bb392bffb3bb98330e496abfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd711e910d4f8b01a8ac10135d579b5a756b8bb392bffb3bb98330e496abfa6->enter($__internal_2cd711e910d4f8b01a8ac10135d579b5a756b8bb392bffb3bb98330e496abfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_097f93da6a171579a622a8899ff6e63f90a533245fdb924dbf287a7f7abe9be4->leave($__internal_097f93da6a171579a622a8899ff6e63f90a533245fdb924dbf287a7f7abe9be4_prof);

        
        $__internal_2cd711e910d4f8b01a8ac10135d579b5a756b8bb392bffb3bb98330e496abfa6->leave($__internal_2cd711e910d4f8b01a8ac10135d579b5a756b8bb392bffb3bb98330e496abfa6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
