<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c473987ef45f4d1f5ab263ca4f5ebf6a927a8942f8f80e6466100b32c95c07fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_906478a045467a0a00cd98057a0db0566eb0c4da1020d1c2c29c5e6ed0785be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906478a045467a0a00cd98057a0db0566eb0c4da1020d1c2c29c5e6ed0785be2->enter($__internal_906478a045467a0a00cd98057a0db0566eb0c4da1020d1c2c29c5e6ed0785be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b7958f9e1c63e7928e59c58f602b3f54a43aa7dacc01b1e5e0d304c09eabdc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7958f9e1c63e7928e59c58f602b3f54a43aa7dacc01b1e5e0d304c09eabdc13->enter($__internal_b7958f9e1c63e7928e59c58f602b3f54a43aa7dacc01b1e5e0d304c09eabdc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_906478a045467a0a00cd98057a0db0566eb0c4da1020d1c2c29c5e6ed0785be2->leave($__internal_906478a045467a0a00cd98057a0db0566eb0c4da1020d1c2c29c5e6ed0785be2_prof);

        
        $__internal_b7958f9e1c63e7928e59c58f602b3f54a43aa7dacc01b1e5e0d304c09eabdc13->leave($__internal_b7958f9e1c63e7928e59c58f602b3f54a43aa7dacc01b1e5e0d304c09eabdc13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c6540383c26625b1f63a81b10bcd55d370af0bd4523bb747dd4be5056f5eb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6540383c26625b1f63a81b10bcd55d370af0bd4523bb747dd4be5056f5eb30->enter($__internal_7c6540383c26625b1f63a81b10bcd55d370af0bd4523bb747dd4be5056f5eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81c54656127dba61b4ad2e62ac758c29ff1f46ca7c562f73c93206b76951612e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c54656127dba61b4ad2e62ac758c29ff1f46ca7c562f73c93206b76951612e->enter($__internal_81c54656127dba61b4ad2e62ac758c29ff1f46ca7c562f73c93206b76951612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_81c54656127dba61b4ad2e62ac758c29ff1f46ca7c562f73c93206b76951612e->leave($__internal_81c54656127dba61b4ad2e62ac758c29ff1f46ca7c562f73c93206b76951612e_prof);

        
        $__internal_7c6540383c26625b1f63a81b10bcd55d370af0bd4523bb747dd4be5056f5eb30->leave($__internal_7c6540383c26625b1f63a81b10bcd55d370af0bd4523bb747dd4be5056f5eb30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
