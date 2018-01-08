<?php

/* MaterializeBundle:Materialize:css.html.twig */
class __TwigTemplate_2fd7daa7bfdf748a36f96c11eff98d72580898ec5e5ee83ff407db6d665ceb72 extends Twig_Template
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
        $__internal_a53e0215379e701685a593073ca80c580a499a06767ea4d7313ddab1b3e9cc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53e0215379e701685a593073ca80c580a499a06767ea4d7313ddab1b3e9cc61->enter($__internal_a53e0215379e701685a593073ca80c580a499a06767ea4d7313ddab1b3e9cc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:css.html.twig"));

        $__internal_f305b30d8106cd897136a82b120df1cd78416d277ebdafe52670fb10a9a37228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f305b30d8106cd897136a82b120df1cd78416d277ebdafe52670fb10a9a37228->enter($__internal_f305b30d8106cd897136a82b120df1cd78416d277ebdafe52670fb10a9a37228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:css.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 1, $this->getSourceContext()); })()), "version", array()), "html", null, true);
        echo "/css/materialize.min.css\">";
        
        $__internal_a53e0215379e701685a593073ca80c580a499a06767ea4d7313ddab1b3e9cc61->leave($__internal_a53e0215379e701685a593073ca80c580a499a06767ea4d7313ddab1b3e9cc61_prof);

        
        $__internal_f305b30d8106cd897136a82b120df1cd78416d277ebdafe52670fb10a9a37228->leave($__internal_f305b30d8106cd897136a82b120df1cd78416d277ebdafe52670fb10a9a37228_prof);

    }

    public function getTemplateName()
    {
        return "MaterializeBundle:Materialize:css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/{{- materialize.version -}}/css/materialize.min.css\">", "MaterializeBundle:Materialize:css.html.twig", "/home/fabien/symfony-stg/vendor/evheniy/materialize-bundle/Evheniy/MaterializeBundle/Resources/views/Materialize/css.html.twig");
    }
}
