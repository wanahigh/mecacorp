<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_9bd842756d955582e0824e52da6580491c33a0ed1d08b342b704a77fb4954c02 extends Twig_Template
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
        $__internal_b5ad41d15173aaac65fcab3b71c3d4bb0bc02d5628426dcc19a41d406ed5cc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ad41d15173aaac65fcab3b71c3d4bb0bc02d5628426dcc19a41d406ed5cc05->enter($__internal_b5ad41d15173aaac65fcab3b71c3d4bb0bc02d5628426dcc19a41d406ed5cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_35664d91075635023c75e38c78569a8ec4966e4d66754d3a31e1b93d9f3319fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35664d91075635023c75e38c78569a8ec4966e4d66754d3a31e1b93d9f3319fe->enter($__internal_35664d91075635023c75e38c78569a8ec4966e4d66754d3a31e1b93d9f3319fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_b5ad41d15173aaac65fcab3b71c3d4bb0bc02d5628426dcc19a41d406ed5cc05->leave($__internal_b5ad41d15173aaac65fcab3b71c3d4bb0bc02d5628426dcc19a41d406ed5cc05_prof);

        
        $__internal_35664d91075635023c75e38c78569a8ec4966e4d66754d3a31e1b93d9f3319fe->leave($__internal_35664d91075635023c75e38c78569a8ec4966e4d66754d3a31e1b93d9f3319fe_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/monsite1/mecacorp/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
