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
        $__internal_9acfd04fdb7a1e411cfa0ca0a9d09738536df1356644d9164ebc15bbf358f10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acfd04fdb7a1e411cfa0ca0a9d09738536df1356644d9164ebc15bbf358f10a->enter($__internal_9acfd04fdb7a1e411cfa0ca0a9d09738536df1356644d9164ebc15bbf358f10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:css.html.twig"));

        $__internal_f716aca3baa9195e4a26b77846deeacb62d52f117cafc7973565521272e633be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f716aca3baa9195e4a26b77846deeacb62d52f117cafc7973565521272e633be->enter($__internal_f716aca3baa9195e4a26b77846deeacb62d52f117cafc7973565521272e633be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:css.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 1, $this->getSourceContext()); })()), "version", array()), "html", null, true);
        echo "/css/materialize.min.css\">";
        
        $__internal_9acfd04fdb7a1e411cfa0ca0a9d09738536df1356644d9164ebc15bbf358f10a->leave($__internal_9acfd04fdb7a1e411cfa0ca0a9d09738536df1356644d9164ebc15bbf358f10a_prof);

        
        $__internal_f716aca3baa9195e4a26b77846deeacb62d52f117cafc7973565521272e633be->leave($__internal_f716aca3baa9195e4a26b77846deeacb62d52f117cafc7973565521272e633be_prof);

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
        return new Twig_Source("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/{{- materialize.version -}}/css/materialize.min.css\">", "MaterializeBundle:Materialize:css.html.twig", "/var/www/monsite1/mecacorp/vendor/evheniy/materialize-bundle/Evheniy/MaterializeBundle/Resources/views/Materialize/css.html.twig");
    }
}
