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
        $__internal_417b5e30ec5264bff7a9a13b0b5d073d3a4af8c323c1f3d2a5754a0dba01fd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417b5e30ec5264bff7a9a13b0b5d073d3a4af8c323c1f3d2a5754a0dba01fd27->enter($__internal_417b5e30ec5264bff7a9a13b0b5d073d3a4af8c323c1f3d2a5754a0dba01fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_4a2424c5b12f87a599916ea4f2274eab73898af82ac5de71d1cb814fe73bdfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2424c5b12f87a599916ea4f2274eab73898af82ac5de71d1cb814fe73bdfa6->enter($__internal_4a2424c5b12f87a599916ea4f2274eab73898af82ac5de71d1cb814fe73bdfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_417b5e30ec5264bff7a9a13b0b5d073d3a4af8c323c1f3d2a5754a0dba01fd27->leave($__internal_417b5e30ec5264bff7a9a13b0b5d073d3a4af8c323c1f3d2a5754a0dba01fd27_prof);

        
        $__internal_4a2424c5b12f87a599916ea4f2274eab73898af82ac5de71d1cb814fe73bdfa6->leave($__internal_4a2424c5b12f87a599916ea4f2274eab73898af82ac5de71d1cb814fe73bdfa6_prof);

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
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
