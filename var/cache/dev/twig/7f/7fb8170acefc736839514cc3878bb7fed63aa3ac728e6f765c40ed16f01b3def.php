<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e571bf87b57a83c7ab53e77adf8b4ee571b011b69564ef871f0e6efa7f31f55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_dca973d534a7bbdf8c378165daa1b96a381ddf8f2f4e2bf08700bd7b3407a17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca973d534a7bbdf8c378165daa1b96a381ddf8f2f4e2bf08700bd7b3407a17a->enter($__internal_dca973d534a7bbdf8c378165daa1b96a381ddf8f2f4e2bf08700bd7b3407a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_e4aee4c89e1fe9864c30673c771a8501068af16d6d38c62398a8cc9888617c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4aee4c89e1fe9864c30673c771a8501068af16d6d38c62398a8cc9888617c68->enter($__internal_e4aee4c89e1fe9864c30673c771a8501068af16d6d38c62398a8cc9888617c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca973d534a7bbdf8c378165daa1b96a381ddf8f2f4e2bf08700bd7b3407a17a->leave($__internal_dca973d534a7bbdf8c378165daa1b96a381ddf8f2f4e2bf08700bd7b3407a17a_prof);

        
        $__internal_e4aee4c89e1fe9864c30673c771a8501068af16d6d38c62398a8cc9888617c68->leave($__internal_e4aee4c89e1fe9864c30673c771a8501068af16d6d38c62398a8cc9888617c68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ea984d7198bb4fdc45dec31a77614b979674f7b92544e19006e09c16302d820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea984d7198bb4fdc45dec31a77614b979674f7b92544e19006e09c16302d820->enter($__internal_3ea984d7198bb4fdc45dec31a77614b979674f7b92544e19006e09c16302d820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4e0ad88512d1e51b84c4581dbdef8952aaafdac925d8997ef3b8560d93302da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e0ad88512d1e51b84c4581dbdef8952aaafdac925d8997ef3b8560d93302da->enter($__internal_a4e0ad88512d1e51b84c4581dbdef8952aaafdac925d8997ef3b8560d93302da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a4e0ad88512d1e51b84c4581dbdef8952aaafdac925d8997ef3b8560d93302da->leave($__internal_a4e0ad88512d1e51b84c4581dbdef8952aaafdac925d8997ef3b8560d93302da_prof);

        
        $__internal_3ea984d7198bb4fdc45dec31a77614b979674f7b92544e19006e09c16302d820->leave($__internal_3ea984d7198bb4fdc45dec31a77614b979674f7b92544e19006e09c16302d820_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
