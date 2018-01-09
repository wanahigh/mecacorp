<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_5e32a2545d271cc027cf56544d3efe44903da851f518e76d73b3217218b11ea1 extends Twig_Template
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
        $__internal_678e994566ba82583018e8b8b07a7b541cb3adf1a01eae8bc642cd88ee040409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678e994566ba82583018e8b8b07a7b541cb3adf1a01eae8bc642cd88ee040409->enter($__internal_678e994566ba82583018e8b8b07a7b541cb3adf1a01eae8bc642cd88ee040409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_6b2d9593046a5106843a8a543408c40e24e6bdd678fe2ef7f87dc15fc1132e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2d9593046a5106843a8a543408c40e24e6bdd678fe2ef7f87dc15fc1132e63->enter($__internal_6b2d9593046a5106843a8a543408c40e24e6bdd678fe2ef7f87dc15fc1132e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_678e994566ba82583018e8b8b07a7b541cb3adf1a01eae8bc642cd88ee040409->leave($__internal_678e994566ba82583018e8b8b07a7b541cb3adf1a01eae8bc642cd88ee040409_prof);

        
        $__internal_6b2d9593046a5106843a8a543408c40e24e6bdd678fe2ef7f87dc15fc1132e63->leave($__internal_6b2d9593046a5106843a8a543408c40e24e6bdd678fe2ef7f87dc15fc1132e63_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
