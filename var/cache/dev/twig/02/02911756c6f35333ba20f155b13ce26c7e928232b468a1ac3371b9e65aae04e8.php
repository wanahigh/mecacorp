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
        $__internal_3ed6af91c5e7f3df55d08193149628429c6f7c46dc5a77fe8f433452201fe930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed6af91c5e7f3df55d08193149628429c6f7c46dc5a77fe8f433452201fe930->enter($__internal_3ed6af91c5e7f3df55d08193149628429c6f7c46dc5a77fe8f433452201fe930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_dbb1a33dff1cc55b66f96eba5ad6a2d27e6266a571c8b9c456e89ca669337141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb1a33dff1cc55b66f96eba5ad6a2d27e6266a571c8b9c456e89ca669337141->enter($__internal_dbb1a33dff1cc55b66f96eba5ad6a2d27e6266a571c8b9c456e89ca669337141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_3ed6af91c5e7f3df55d08193149628429c6f7c46dc5a77fe8f433452201fe930->leave($__internal_3ed6af91c5e7f3df55d08193149628429c6f7c46dc5a77fe8f433452201fe930_prof);

        
        $__internal_dbb1a33dff1cc55b66f96eba5ad6a2d27e6266a571c8b9c456e89ca669337141->leave($__internal_dbb1a33dff1cc55b66f96eba5ad6a2d27e6266a571c8b9c456e89ca669337141_prof);

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
