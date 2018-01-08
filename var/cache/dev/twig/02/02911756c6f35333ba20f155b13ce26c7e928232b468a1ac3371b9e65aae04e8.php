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
        $__internal_4d232c781ee9920502034d601976b22399f147431036ff4c06b7cc7d045117e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d232c781ee9920502034d601976b22399f147431036ff4c06b7cc7d045117e7->enter($__internal_4d232c781ee9920502034d601976b22399f147431036ff4c06b7cc7d045117e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_b97f5aaa6248147059288e5d429620ac8ab62dbf40a53b373b6e4c65294f8e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97f5aaa6248147059288e5d429620ac8ab62dbf40a53b373b6e4c65294f8e3f->enter($__internal_b97f5aaa6248147059288e5d429620ac8ab62dbf40a53b373b6e4c65294f8e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_4d232c781ee9920502034d601976b22399f147431036ff4c06b7cc7d045117e7->leave($__internal_4d232c781ee9920502034d601976b22399f147431036ff4c06b7cc7d045117e7_prof);

        
        $__internal_b97f5aaa6248147059288e5d429620ac8ab62dbf40a53b373b6e4c65294f8e3f->leave($__internal_b97f5aaa6248147059288e5d429620ac8ab62dbf40a53b373b6e4c65294f8e3f_prof);

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
", "EasyAdminBundle:default:label_empty.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
