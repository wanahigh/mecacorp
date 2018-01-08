<?php

/* :entity/advert:edit.html.twig */
class __TwigTemplate_912d6543b43f35a1ea45a9ef5fd9a5e2757095409774b53f88708b4b58e03c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8740078571013f82b4b589bf6b8ddba11e9bb77d1549a7694ada788bd66008c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8740078571013f82b4b589bf6b8ddba11e9bb77d1549a7694ada788bd66008c2->enter($__internal_8740078571013f82b4b589bf6b8ddba11e9bb77d1549a7694ada788bd66008c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:edit.html.twig"));

        $__internal_c667fb0f944e1ccb53881f6d06d16bd547c8524410b7ad49e7de6d911b44c0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c667fb0f944e1ccb53881f6d06d16bd547c8524410b7ad49e7de6d911b44c0dc->enter($__internal_c667fb0f944e1ccb53881f6d06d16bd547c8524410b7ad49e7de6d911b44c0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8740078571013f82b4b589bf6b8ddba11e9bb77d1549a7694ada788bd66008c2->leave($__internal_8740078571013f82b4b589bf6b8ddba11e9bb77d1549a7694ada788bd66008c2_prof);

        
        $__internal_c667fb0f944e1ccb53881f6d06d16bd547c8524410b7ad49e7de6d911b44c0dc->leave($__internal_c667fb0f944e1ccb53881f6d06d16bd547c8524410b7ad49e7de6d911b44c0dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08288fbd72098368e10149352bc7a84ef22aeea292ee31ecf946a627b88def1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08288fbd72098368e10149352bc7a84ef22aeea292ee31ecf946a627b88def1->enter($__internal_f08288fbd72098368e10149352bc7a84ef22aeea292ee31ecf946a627b88def1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6374528803e2e12192d63a3940f86d7ebdb30ba7940bcb62cab339908e841b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6374528803e2e12192d63a3940f86d7ebdb30ba7940bcb62cab339908e841b4c->enter($__internal_6374528803e2e12192d63a3940f86d7ebdb30ba7940bcb62cab339908e841b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Advert edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" height=\"100px\" width=\"250px\">
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6374528803e2e12192d63a3940f86d7ebdb30ba7940bcb62cab339908e841b4c->leave($__internal_6374528803e2e12192d63a3940f86d7ebdb30ba7940bcb62cab339908e841b4c_prof);

        
        $__internal_f08288fbd72098368e10149352bc7a84ef22aeea292ee31ecf946a627b88def1->leave($__internal_f08288fbd72098368e10149352bc7a84ef22aeea292ee31ecf946a627b88def1_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 17,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Advert edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('entity_advert_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"100px\" width=\"250px\">
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":entity/advert:edit.html.twig", "/home/fabien/symfony-stg/app/Resources/views/entity/advert/edit.html.twig");
    }
}
