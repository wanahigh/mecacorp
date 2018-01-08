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
        $__internal_818409c55e7c7235c5a781936f6e843bd65f72d97991aa9c202f447e0ff54c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818409c55e7c7235c5a781936f6e843bd65f72d97991aa9c202f447e0ff54c64->enter($__internal_818409c55e7c7235c5a781936f6e843bd65f72d97991aa9c202f447e0ff54c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_404a56f3613e7ff0bb50eb3cc449e3170be2ad28872052879ef96eff8b9925fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404a56f3613e7ff0bb50eb3cc449e3170be2ad28872052879ef96eff8b9925fd->enter($__internal_404a56f3613e7ff0bb50eb3cc449e3170be2ad28872052879ef96eff8b9925fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818409c55e7c7235c5a781936f6e843bd65f72d97991aa9c202f447e0ff54c64->leave($__internal_818409c55e7c7235c5a781936f6e843bd65f72d97991aa9c202f447e0ff54c64_prof);

        
        $__internal_404a56f3613e7ff0bb50eb3cc449e3170be2ad28872052879ef96eff8b9925fd->leave($__internal_404a56f3613e7ff0bb50eb3cc449e3170be2ad28872052879ef96eff8b9925fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a24d985bbb7f5fbe7565e2929319c0f9a62dadfa7138462b399bcd23063dd2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24d985bbb7f5fbe7565e2929319c0f9a62dadfa7138462b399bcd23063dd2d6->enter($__internal_a24d985bbb7f5fbe7565e2929319c0f9a62dadfa7138462b399bcd23063dd2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e093c1e7ef547e3ca10f02117a0808cb1d886ac7c0eafd18d65d4c813e48574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e093c1e7ef547e3ca10f02117a0808cb1d886ac7c0eafd18d65d4c813e48574->enter($__internal_1e093c1e7ef547e3ca10f02117a0808cb1d886ac7c0eafd18d65d4c813e48574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1e093c1e7ef547e3ca10f02117a0808cb1d886ac7c0eafd18d65d4c813e48574->leave($__internal_1e093c1e7ef547e3ca10f02117a0808cb1d886ac7c0eafd18d65d4c813e48574_prof);

        
        $__internal_a24d985bbb7f5fbe7565e2929319c0f9a62dadfa7138462b399bcd23063dd2d6->leave($__internal_a24d985bbb7f5fbe7565e2929319c0f9a62dadfa7138462b399bcd23063dd2d6_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
