<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f35c07d9d230c1c773b01c9bc09b1038c47faf01ac43cae102eabb2b81334e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f35c07d9d230c1c773b01c9bc09b1038c47faf01ac43cae102eabb2b81334e8->enter($__internal_8f35c07d9d230c1c773b01c9bc09b1038c47faf01ac43cae102eabb2b81334e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_778dcccf0b4d28f0c674ba054e0bd811f2858339b2a07e160cce948c7115294d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778dcccf0b4d28f0c674ba054e0bd811f2858339b2a07e160cce948c7115294d->enter($__internal_778dcccf0b4d28f0c674ba054e0bd811f2858339b2a07e160cce948c7115294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f35c07d9d230c1c773b01c9bc09b1038c47faf01ac43cae102eabb2b81334e8->leave($__internal_8f35c07d9d230c1c773b01c9bc09b1038c47faf01ac43cae102eabb2b81334e8_prof);

        
        $__internal_778dcccf0b4d28f0c674ba054e0bd811f2858339b2a07e160cce948c7115294d->leave($__internal_778dcccf0b4d28f0c674ba054e0bd811f2858339b2a07e160cce948c7115294d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b2105499c481dafe4d4d46b0d7a1d7a347fad42f30bc738a140a6d2970a7f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2105499c481dafe4d4d46b0d7a1d7a347fad42f30bc738a140a6d2970a7f6d->enter($__internal_8b2105499c481dafe4d4d46b0d7a1d7a347fad42f30bc738a140a6d2970a7f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4ed9deb1924ef1177602f2d37d932dd0e9b125be315db3d18c4c25934a8024f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ed9deb1924ef1177602f2d37d932dd0e9b125be315db3d18c4c25934a8024f->enter($__internal_d4ed9deb1924ef1177602f2d37d932dd0e9b125be315db3d18c4c25934a8024f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_d4ed9deb1924ef1177602f2d37d932dd0e9b125be315db3d18c4c25934a8024f->leave($__internal_d4ed9deb1924ef1177602f2d37d932dd0e9b125be315db3d18c4c25934a8024f_prof);

        
        $__internal_8b2105499c481dafe4d4d46b0d7a1d7a347fad42f30bc738a140a6d2970a7f6d->leave($__internal_8b2105499c481dafe4d4d46b0d7a1d7a347fad42f30bc738a140a6d2970a7f6d_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9469746139107b93ebed9b7d8044c8796eaf514977eadd8a514c2a2a5ce627c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9469746139107b93ebed9b7d8044c8796eaf514977eadd8a514c2a2a5ce627c2->enter($__internal_9469746139107b93ebed9b7d8044c8796eaf514977eadd8a514c2a2a5ce627c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8d893a91fabc793c2010ddee0f4da6d26d668ccb8c301f9dbf1f653a77bd1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d893a91fabc793c2010ddee0f4da6d26d668ccb8c301f9dbf1f653a77bd1b3->enter($__internal_b8d893a91fabc793c2010ddee0f4da6d26d668ccb8c301f9dbf1f653a77bd1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_b8d893a91fabc793c2010ddee0f4da6d26d668ccb8c301f9dbf1f653a77bd1b3->leave($__internal_b8d893a91fabc793c2010ddee0f4da6d26d668ccb8c301f9dbf1f653a77bd1b3_prof);

        
        $__internal_9469746139107b93ebed9b7d8044c8796eaf514977eadd8a514c2a2a5ce627c2->leave($__internal_9469746139107b93ebed9b7d8044c8796eaf514977eadd8a514c2a2a5ce627c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/fabien/symfony-stg/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
