<?php

/* EasyAdminBundle:default:label_empty.html.twig */
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
        $__internal_5080c3d50fa25cf9506b6d99a6d1d81331137e504b416033da29ae0f4d483004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5080c3d50fa25cf9506b6d99a6d1d81331137e504b416033da29ae0f4d483004->enter($__internal_5080c3d50fa25cf9506b6d99a6d1d81331137e504b416033da29ae0f4d483004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_54fb17238d53c490b36c114f77af96521a4f44f512f2ef80a4aa8e3337f34c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fb17238d53c490b36c114f77af96521a4f44f512f2ef80a4aa8e3337f34c60->enter($__internal_54fb17238d53c490b36c114f77af96521a4f44f512f2ef80a4aa8e3337f34c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_5080c3d50fa25cf9506b6d99a6d1d81331137e504b416033da29ae0f4d483004->leave($__internal_5080c3d50fa25cf9506b6d99a6d1d81331137e504b416033da29ae0f4d483004_prof);

        
        $__internal_54fb17238d53c490b36c114f77af96521a4f44f512f2ef80a4aa8e3337f34c60->leave($__internal_54fb17238d53c490b36c114f77af96521a4f44f512f2ef80a4aa8e3337f34c60_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
", "EasyAdminBundle:default:label_empty.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
