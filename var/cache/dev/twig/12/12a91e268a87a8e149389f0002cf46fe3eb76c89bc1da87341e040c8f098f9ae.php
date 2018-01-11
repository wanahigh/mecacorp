<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 2);
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
        $__internal_bca8819cb30ea7ff8b37099e8269c4db2a50163ba73d4d22aa224d4291e3eeb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca8819cb30ea7ff8b37099e8269c4db2a50163ba73d4d22aa224d4291e3eeb6->enter($__internal_bca8819cb30ea7ff8b37099e8269c4db2a50163ba73d4d22aa224d4291e3eeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f1dc80be7a733f4bfea520a895c75289e1d700cac92f980bcdc4dc1662b7d497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dc80be7a733f4bfea520a895c75289e1d700cac92f980bcdc4dc1662b7d497->enter($__internal_f1dc80be7a733f4bfea520a895c75289e1d700cac92f980bcdc4dc1662b7d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bca8819cb30ea7ff8b37099e8269c4db2a50163ba73d4d22aa224d4291e3eeb6->leave($__internal_bca8819cb30ea7ff8b37099e8269c4db2a50163ba73d4d22aa224d4291e3eeb6_prof);

        
        $__internal_f1dc80be7a733f4bfea520a895c75289e1d700cac92f980bcdc4dc1662b7d497->leave($__internal_f1dc80be7a733f4bfea520a895c75289e1d700cac92f980bcdc4dc1662b7d497_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c306cb9a9a63a04929fa392713afb1f068e3e910900523a55b5beafd4aee530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c306cb9a9a63a04929fa392713afb1f068e3e910900523a55b5beafd4aee530->enter($__internal_1c306cb9a9a63a04929fa392713afb1f068e3e910900523a55b5beafd4aee530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d636842da9e20dba8bbf341b3533496183b93612842ccb82b6ef0e04edb23870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d636842da9e20dba8bbf341b3533496183b93612842ccb82b6ef0e04edb23870->enter($__internal_d636842da9e20dba8bbf341b3533496183b93612842ccb82b6ef0e04edb23870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d636842da9e20dba8bbf341b3533496183b93612842ccb82b6ef0e04edb23870->leave($__internal_d636842da9e20dba8bbf341b3533496183b93612842ccb82b6ef0e04edb23870_prof);

        
        $__internal_1c306cb9a9a63a04929fa392713afb1f068e3e910900523a55b5beafd4aee530->leave($__internal_1c306cb9a9a63a04929fa392713afb1f068e3e910900523a55b5beafd4aee530_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63755c5c60fafef258a9d8bcbfdfd125329874d8c00d1b8a476eae0984c08b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63755c5c60fafef258a9d8bcbfdfd125329874d8c00d1b8a476eae0984c08b98->enter($__internal_63755c5c60fafef258a9d8bcbfdfd125329874d8c00d1b8a476eae0984c08b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5f3c4336a1ff90577f7b54da7c0505a808d1cbcd383f12b3e8729fa761878ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f3c4336a1ff90577f7b54da7c0505a808d1cbcd383f12b3e8729fa761878ce->enter($__internal_b5f3c4336a1ff90577f7b54da7c0505a808d1cbcd383f12b3e8729fa761878ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_b5f3c4336a1ff90577f7b54da7c0505a808d1cbcd383f12b3e8729fa761878ce->leave($__internal_b5f3c4336a1ff90577f7b54da7c0505a808d1cbcd383f12b3e8729fa761878ce_prof);

        
        $__internal_63755c5c60fafef258a9d8bcbfdfd125329874d8c00d1b8a476eae0984c08b98->leave($__internal_63755c5c60fafef258a9d8bcbfdfd125329874d8c00d1b8a476eae0984c08b98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
{% endblock %}", "@FOSUser/layout.html.twig", "/home/fabien/mecacorp/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
