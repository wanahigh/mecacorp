<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c31c83071dbb272c701e9d158de6a891e4b979fca1f8e26e6a7faf7800220558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ae7dcda419b4a95677b614fc878e9e6427a0464de38b2957109ec7aec7f1e8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7dcda419b4a95677b614fc878e9e6427a0464de38b2957109ec7aec7f1e8ee->enter($__internal_ae7dcda419b4a95677b614fc878e9e6427a0464de38b2957109ec7aec7f1e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_e33ed5071611738e7748b88dc5ceef553080ee0803e4b13ff287631eb4a7b866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33ed5071611738e7748b88dc5ceef553080ee0803e4b13ff287631eb4a7b866->enter($__internal_e33ed5071611738e7748b88dc5ceef553080ee0803e4b13ff287631eb4a7b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7dcda419b4a95677b614fc878e9e6427a0464de38b2957109ec7aec7f1e8ee->leave($__internal_ae7dcda419b4a95677b614fc878e9e6427a0464de38b2957109ec7aec7f1e8ee_prof);

        
        $__internal_e33ed5071611738e7748b88dc5ceef553080ee0803e4b13ff287631eb4a7b866->leave($__internal_e33ed5071611738e7748b88dc5ceef553080ee0803e4b13ff287631eb4a7b866_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94434b35114ab87d051d42bdfccd133b08e25f0058c38c576783d422d0db9f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94434b35114ab87d051d42bdfccd133b08e25f0058c38c576783d422d0db9f82->enter($__internal_94434b35114ab87d051d42bdfccd133b08e25f0058c38c576783d422d0db9f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1bf8344fa25ae39a60da8c9321ab0dac0ade9f9d6ff4ad7bc6f864309703249d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf8344fa25ae39a60da8c9321ab0dac0ade9f9d6ff4ad7bc6f864309703249d->enter($__internal_1bf8344fa25ae39a60da8c9321ab0dac0ade9f9d6ff4ad7bc6f864309703249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1bf8344fa25ae39a60da8c9321ab0dac0ade9f9d6ff4ad7bc6f864309703249d->leave($__internal_1bf8344fa25ae39a60da8c9321ab0dac0ade9f9d6ff4ad7bc6f864309703249d_prof);

        
        $__internal_94434b35114ab87d051d42bdfccd133b08e25f0058c38c576783d422d0db9f82->leave($__internal_94434b35114ab87d051d42bdfccd133b08e25f0058c38c576783d422d0db9f82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
