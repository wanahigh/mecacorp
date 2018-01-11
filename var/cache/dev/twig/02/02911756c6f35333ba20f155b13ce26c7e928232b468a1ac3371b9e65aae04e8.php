<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_4a2f61cc8f3c573e430d61f0737eb3420243f300b7a891ce97151040f26d3ef4 extends Twig_Template
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
        $__internal_cd6110d63246645366610114d4e09972e62484d371f3b3894732b1b78bd3422c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6110d63246645366610114d4e09972e62484d371f3b3894732b1b78bd3422c->enter($__internal_cd6110d63246645366610114d4e09972e62484d371f3b3894732b1b78bd3422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        $__internal_50e037d89be7a56f200fc170226c790e19e5bd972b0045d2dd9166432eaff2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e037d89be7a56f200fc170226c790e19e5bd972b0045d2dd9166432eaff2f5->enter($__internal_50e037d89be7a56f200fc170226c790e19e5bd972b0045d2dd9166432eaff2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_cd6110d63246645366610114d4e09972e62484d371f3b3894732b1b78bd3422c->leave($__internal_cd6110d63246645366610114d4e09972e62484d371f3b3894732b1b78bd3422c_prof);

        
        $__internal_50e037d89be7a56f200fc170226c790e19e5bd972b0045d2dd9166432eaff2f5->leave($__internal_50e037d89be7a56f200fc170226c790e19e5bd972b0045d2dd9166432eaff2f5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_empty.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
