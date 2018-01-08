<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_31f9479b87d6a60c814c593b2d9cf3f4e8964ea94f642d53c584e3c14a962572 extends Twig_Template
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
        $__internal_98910de7a45b5246fce18501eee75f00904370bc1d6203f8a4df1bbd7763bc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98910de7a45b5246fce18501eee75f00904370bc1d6203f8a4df1bbd7763bc57->enter($__internal_98910de7a45b5246fce18501eee75f00904370bc1d6203f8a4df1bbd7763bc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_0b7725f27ab3fac01183f4bec8c6e35f3f6c8ad1cd8a438d389fe5d0d9fd91e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7725f27ab3fac01183f4bec8c6e35f3f6c8ad1cd8a438d389fe5d0d9fd91e6->enter($__internal_0b7725f27ab3fac01183f4bec8c6e35f3f6c8ad1cd8a438d389fe5d0d9fd91e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_98910de7a45b5246fce18501eee75f00904370bc1d6203f8a4df1bbd7763bc57->leave($__internal_98910de7a45b5246fce18501eee75f00904370bc1d6203f8a4df1bbd7763bc57_prof);

        
        $__internal_0b7725f27ab3fac01183f4bec8c6e35f3f6c8ad1cd8a438d389fe5d0d9fd91e6->leave($__internal_0b7725f27ab3fac01183f4bec8c6e35f3f6c8ad1cd8a438d389fe5d0d9fd91e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
