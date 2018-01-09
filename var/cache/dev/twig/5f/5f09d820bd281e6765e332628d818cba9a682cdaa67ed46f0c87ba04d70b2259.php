<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_eabd258c8df2f586787a61f96f111335f0b77284fe1d594fbba62f9bdbe1fa0b extends Twig_Template
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
        $__internal_2c2f95dfeed7d2b93ee4c704673153f4bd35bbade172186e62f73d9adb14294d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2f95dfeed7d2b93ee4c704673153f4bd35bbade172186e62f73d9adb14294d->enter($__internal_2c2f95dfeed7d2b93ee4c704673153f4bd35bbade172186e62f73d9adb14294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_feba300cc15cf2c3d603b07c121c9cef1a536d2fd2f893a539ddacb076d427ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feba300cc15cf2c3d603b07c121c9cef1a536d2fd2f893a539ddacb076d427ac->enter($__internal_feba300cc15cf2c3d603b07c121c9cef1a536d2fd2f893a539ddacb076d427ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new Twig_Error_Runtime('Variable "uuid" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new Twig_Error_Runtime('Variable "uuid" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_2c2f95dfeed7d2b93ee4c704673153f4bd35bbade172186e62f73d9adb14294d->leave($__internal_2c2f95dfeed7d2b93ee4c704673153f4bd35bbade172186e62f73d9adb14294d_prof);

        
        $__internal_feba300cc15cf2c3d603b07c121c9cef1a536d2fd2f893a539ddacb076d427ac->leave($__internal_feba300cc15cf2c3d603b07c121c9cef1a536d2fd2f893a539ddacb076d427ac_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
