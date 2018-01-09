<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_c75cfcd3501212705a20a2f59e2de35eefc45e7e2631c6b40e39c359e93f7da9 extends Twig_Template
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
        $__internal_12bbc0733582b0e31fc3e4c6c3f0da50e05494ad68c35bbda601f58acef8d6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bbc0733582b0e31fc3e4c6c3f0da50e05494ad68c35bbda601f58acef8d6f5->enter($__internal_12bbc0733582b0e31fc3e4c6c3f0da50e05494ad68c35bbda601f58acef8d6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_98c86ad71541f5cc9069fc3391325550e4c54d8c4163d42587d5e08cdca7b71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c86ad71541f5cc9069fc3391325550e4c54d8c4163d42587d5e08cdca7b71f->enter($__internal_98c86ad71541f5cc9069fc3391325550e4c54d8c4163d42587d5e08cdca7b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_12bbc0733582b0e31fc3e4c6c3f0da50e05494ad68c35bbda601f58acef8d6f5->leave($__internal_12bbc0733582b0e31fc3e4c6c3f0da50e05494ad68c35bbda601f58acef8d6f5_prof);

        
        $__internal_98c86ad71541f5cc9069fc3391325550e4c54d8c4163d42587d5e08cdca7b71f->leave($__internal_98c86ad71541f5cc9069fc3391325550e4c54d8c4163d42587d5e08cdca7b71f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
