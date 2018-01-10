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
        $__internal_604e3215d01c9622e05f2047c0b6f48aa937cdaf40c5f01a70a3f3ed88bf1c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604e3215d01c9622e05f2047c0b6f48aa937cdaf40c5f01a70a3f3ed88bf1c65->enter($__internal_604e3215d01c9622e05f2047c0b6f48aa937cdaf40c5f01a70a3f3ed88bf1c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_5a11e47a4a88c6edf933e78d60bf0101c9f623e9c06a9f5cb07f0d37d86c560d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a11e47a4a88c6edf933e78d60bf0101c9f623e9c06a9f5cb07f0d37d86c560d->enter($__internal_5a11e47a4a88c6edf933e78d60bf0101c9f623e9c06a9f5cb07f0d37d86c560d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604e3215d01c9622e05f2047c0b6f48aa937cdaf40c5f01a70a3f3ed88bf1c65->leave($__internal_604e3215d01c9622e05f2047c0b6f48aa937cdaf40c5f01a70a3f3ed88bf1c65_prof);

        
        $__internal_5a11e47a4a88c6edf933e78d60bf0101c9f623e9c06a9f5cb07f0d37d86c560d->leave($__internal_5a11e47a4a88c6edf933e78d60bf0101c9f623e9c06a9f5cb07f0d37d86c560d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26042d4fed728e8f9dfdf7909c04eb2a7e9a0e33dca23314ce1231465a37c2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26042d4fed728e8f9dfdf7909c04eb2a7e9a0e33dca23314ce1231465a37c2e4->enter($__internal_26042d4fed728e8f9dfdf7909c04eb2a7e9a0e33dca23314ce1231465a37c2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_750e9ea29d76782023d6ec8bc4cbc0e90393999ab3b430eff9b05bd78a169eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750e9ea29d76782023d6ec8bc4cbc0e90393999ab3b430eff9b05bd78a169eb5->enter($__internal_750e9ea29d76782023d6ec8bc4cbc0e90393999ab3b430eff9b05bd78a169eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_750e9ea29d76782023d6ec8bc4cbc0e90393999ab3b430eff9b05bd78a169eb5->leave($__internal_750e9ea29d76782023d6ec8bc4cbc0e90393999ab3b430eff9b05bd78a169eb5_prof);

        
        $__internal_26042d4fed728e8f9dfdf7909c04eb2a7e9a0e33dca23314ce1231465a37c2e4->leave($__internal_26042d4fed728e8f9dfdf7909c04eb2a7e9a0e33dca23314ce1231465a37c2e4_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
