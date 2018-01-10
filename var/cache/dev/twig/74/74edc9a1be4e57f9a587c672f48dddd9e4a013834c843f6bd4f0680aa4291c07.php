<?php

/* EasyAdminBundle:default:label_null.html.twig */
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
        $__internal_83f2597d07432f044b232a0d58f4e91c4f6142f854a199c451f2a47f9950433d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f2597d07432f044b232a0d58f4e91c4f6142f854a199c451f2a47f9950433d->enter($__internal_83f2597d07432f044b232a0d58f4e91c4f6142f854a199c451f2a47f9950433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_6d22a34690b0de8609c3d697eb8b797fc24ea670211f2e2ce5874a0c5d43939e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d22a34690b0de8609c3d697eb8b797fc24ea670211f2e2ce5874a0c5d43939e->enter($__internal_6d22a34690b0de8609c3d697eb8b797fc24ea670211f2e2ce5874a0c5d43939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_83f2597d07432f044b232a0d58f4e91c4f6142f854a199c451f2a47f9950433d->leave($__internal_83f2597d07432f044b232a0d58f4e91c4f6142f854a199c451f2a47f9950433d_prof);

        
        $__internal_6d22a34690b0de8609c3d697eb8b797fc24ea670211f2e2ce5874a0c5d43939e->leave($__internal_6d22a34690b0de8609c3d697eb8b797fc24ea670211f2e2ce5874a0c5d43939e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
", "EasyAdminBundle:default:label_null.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
