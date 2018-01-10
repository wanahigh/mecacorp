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
        $__internal_9dc3af7554d52af261935bdda0d8733db219a0876bdd8931d6a76134b244fb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc3af7554d52af261935bdda0d8733db219a0876bdd8931d6a76134b244fb9f->enter($__internal_9dc3af7554d52af261935bdda0d8733db219a0876bdd8931d6a76134b244fb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_0642327bc94124272d04bb4a36d5b7207ff610ca746caa8024831549e8b854c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0642327bc94124272d04bb4a36d5b7207ff610ca746caa8024831549e8b854c0->enter($__internal_0642327bc94124272d04bb4a36d5b7207ff610ca746caa8024831549e8b854c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9dc3af7554d52af261935bdda0d8733db219a0876bdd8931d6a76134b244fb9f->leave($__internal_9dc3af7554d52af261935bdda0d8733db219a0876bdd8931d6a76134b244fb9f_prof);

        
        $__internal_0642327bc94124272d04bb4a36d5b7207ff610ca746caa8024831549e8b854c0->leave($__internal_0642327bc94124272d04bb4a36d5b7207ff610ca746caa8024831549e8b854c0_prof);

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
