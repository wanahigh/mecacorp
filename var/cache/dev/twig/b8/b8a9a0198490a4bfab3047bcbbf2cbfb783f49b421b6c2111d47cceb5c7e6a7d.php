<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_5a9b7b729688448efecca690b6456d2079bc9bda1a7c136b50bde09593c91161 extends Twig_Template
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
        $__internal_83c6a30dbee5e6a51bc93e09e00824f1a9a3ec9a5bba0ae381ec9af1ad81cd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c6a30dbee5e6a51bc93e09e00824f1a9a3ec9a5bba0ae381ec9af1ad81cd6e->enter($__internal_83c6a30dbee5e6a51bc93e09e00824f1a9a3ec9a5bba0ae381ec9af1ad81cd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_e36bab3a05d9e1adca088de6cdcba8ce440f16b267e87d9ff614fb26b994ff0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36bab3a05d9e1adca088de6cdcba8ce440f16b267e87d9ff614fb26b994ff0a->enter($__internal_e36bab3a05d9e1adca088de6cdcba8ce440f16b267e87d9ff614fb26b994ff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        echo "
</a>
";
        
        $__internal_83c6a30dbee5e6a51bc93e09e00824f1a9a3ec9a5bba0ae381ec9af1ad81cd6e->leave($__internal_83c6a30dbee5e6a51bc93e09e00824f1a9a3ec9a5bba0ae381ec9af1ad81cd6e_prof);

        
        $__internal_e36bab3a05d9e1adca088de6cdcba8ce440f16b267e87d9ff614fb26b994ff0a->leave($__internal_e36bab3a05d9e1adca088de6cdcba8ce440f16b267e87d9ff614fb26b994ff0a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
