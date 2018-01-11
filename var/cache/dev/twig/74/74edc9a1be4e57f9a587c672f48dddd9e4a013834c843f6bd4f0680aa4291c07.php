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
        $__internal_8d026a98f09e3e95c3d2a991d4792f70ba04b6ab63085ad1f6c83b7cf40a15d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d026a98f09e3e95c3d2a991d4792f70ba04b6ab63085ad1f6c83b7cf40a15d8->enter($__internal_8d026a98f09e3e95c3d2a991d4792f70ba04b6ab63085ad1f6c83b7cf40a15d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_84c4276254e6c71d4b8d0dd3897477324da3000809bb8dc373c125edf47f801e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c4276254e6c71d4b8d0dd3897477324da3000809bb8dc373c125edf47f801e->enter($__internal_84c4276254e6c71d4b8d0dd3897477324da3000809bb8dc373c125edf47f801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_8d026a98f09e3e95c3d2a991d4792f70ba04b6ab63085ad1f6c83b7cf40a15d8->leave($__internal_8d026a98f09e3e95c3d2a991d4792f70ba04b6ab63085ad1f6c83b7cf40a15d8_prof);

        
        $__internal_84c4276254e6c71d4b8d0dd3897477324da3000809bb8dc373c125edf47f801e->leave($__internal_84c4276254e6c71d4b8d0dd3897477324da3000809bb8dc373c125edf47f801e_prof);

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
", "@EasyAdmin/default/label_null.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
