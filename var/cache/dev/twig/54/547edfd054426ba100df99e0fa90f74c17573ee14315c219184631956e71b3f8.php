<?php

/* EasyAdminBundle:default:field_json_array.html.twig */
class __TwigTemplate_450449c3636504af26e97ec8cdcf257c553741d4e0e0e446717d94a17c991666 extends Twig_Template
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
        $__internal_40c93bfca626ed4acd8243ada7ce97e45f8f3a3312d1ff70ab8efba191030494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c93bfca626ed4acd8243ada7ce97e45f8f3a3312d1ff70ab8efba191030494->enter($__internal_40c93bfca626ed4acd8243ada7ce97e45f8f3a3312d1ff70ab8efba191030494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json_array.html.twig"));

        $__internal_0bb2d81ac0a3e8b84ff071a13e5fc98f96f87eeb4fd6475ee1ead8c8666b08f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb2d81ac0a3e8b84ff071a13e5fc98f96f87eeb4fd6475ee1ead8c8666b08f5->enter($__internal_0bb2d81ac0a3e8b84ff071a13e5fc98f96f87eeb4fd6475ee1ead8c8666b08f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json_array.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "entity_config" does not exist.', 10, $this->getSourceContext()); })()), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 14, $this->getSourceContext()); })()), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_40c93bfca626ed4acd8243ada7ce97e45f8f3a3312d1ff70ab8efba191030494->leave($__internal_40c93bfca626ed4acd8243ada7ce97e45f8f3a3312d1ff70ab8efba191030494_prof);

        
        $__internal_0bb2d81ac0a3e8b84ff071a13e5fc98f96f87eeb4fd6475ee1ead8c8666b08f5->leave($__internal_0bb2d81ac0a3e8b84ff071a13e5fc98f96f87eeb4fd6475ee1ead8c8666b08f5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_json_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  50 => 9,  46 => 7,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {% if value|length > 0 %}
        <ul>
            {% for element in value %}
                <li>{{ element }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"empty collection-empty\">
            {{ include(entity_config.templates.label_empty) }}
        </div>
    {% endif %}
{% else %}
    {{ value|join(', ')|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_json_array.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_json_array.html.twig");
    }
}
