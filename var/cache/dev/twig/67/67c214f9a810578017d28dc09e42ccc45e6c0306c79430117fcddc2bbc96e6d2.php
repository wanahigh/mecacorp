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
        $__internal_9c161c7585368f9892fe0c91ab447b0c1b2980d710dc0c43c1d681beb6eca83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c161c7585368f9892fe0c91ab447b0c1b2980d710dc0c43c1d681beb6eca83d->enter($__internal_9c161c7585368f9892fe0c91ab447b0c1b2980d710dc0c43c1d681beb6eca83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_1dc264fc5c7a6a6a5ba2d038ded8d1032d8097727e0906109649fbb1bcddcfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc264fc5c7a6a6a5ba2d038ded8d1032d8097727e0906109649fbb1bcddcfec->enter($__internal_1dc264fc5c7a6a6a5ba2d038ded8d1032d8097727e0906109649fbb1bcddcfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9c161c7585368f9892fe0c91ab447b0c1b2980d710dc0c43c1d681beb6eca83d->leave($__internal_9c161c7585368f9892fe0c91ab447b0c1b2980d710dc0c43c1d681beb6eca83d_prof);

        
        $__internal_1dc264fc5c7a6a6a5ba2d038ded8d1032d8097727e0906109649fbb1bcddcfec->leave($__internal_1dc264fc5c7a6a6a5ba2d038ded8d1032d8097727e0906109649fbb1bcddcfec_prof);

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
", "EasyAdminBundle:default:field_object.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
