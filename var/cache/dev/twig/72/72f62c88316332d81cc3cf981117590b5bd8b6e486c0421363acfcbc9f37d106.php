<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e1ebc63062072db415a23df4e1bff8208584b367ceb6c17bbb4a2535c1a7cd31 extends Twig_Template
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
        $__internal_ad39b2b4fac3ecad5601a13739ed8dc29a22ce735cd66d1453fb870ecaa2bade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad39b2b4fac3ecad5601a13739ed8dc29a22ce735cd66d1453fb870ecaa2bade->enter($__internal_ad39b2b4fac3ecad5601a13739ed8dc29a22ce735cd66d1453fb870ecaa2bade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_31d907c3d3d72ef4fa9d678bb0d63dbe534806282e440bd25c1aafc8276e9b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d907c3d3d72ef4fa9d678bb0d63dbe534806282e440bd25c1aafc8276e9b2e->enter($__internal_31d907c3d3d72ef4fa9d678bb0d63dbe534806282e440bd25c1aafc8276e9b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ad39b2b4fac3ecad5601a13739ed8dc29a22ce735cd66d1453fb870ecaa2bade->leave($__internal_ad39b2b4fac3ecad5601a13739ed8dc29a22ce735cd66d1453fb870ecaa2bade_prof);

        
        $__internal_31d907c3d3d72ef4fa9d678bb0d63dbe534806282e440bd25c1aafc8276e9b2e->leave($__internal_31d907c3d3d72ef4fa9d678bb0d63dbe534806282e440bd25c1aafc8276e9b2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
