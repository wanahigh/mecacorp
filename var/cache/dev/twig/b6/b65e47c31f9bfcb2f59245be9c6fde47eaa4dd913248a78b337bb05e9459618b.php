<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_69ff3139ed11f7c8136c57854d26afddf05ef50204a1fe2817efa98987751a01 extends Twig_Template
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
        $__internal_fa13c6353b7c101d063ce8584d0832a412277f3c255f01d43ab30aa863ab3490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa13c6353b7c101d063ce8584d0832a412277f3c255f01d43ab30aa863ab3490->enter($__internal_fa13c6353b7c101d063ce8584d0832a412277f3c255f01d43ab30aa863ab3490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fc02e013440186fe0d0670a41f3072e44f604502da9325f0a801c226c4fd677b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc02e013440186fe0d0670a41f3072e44f604502da9325f0a801c226c4fd677b->enter($__internal_fc02e013440186fe0d0670a41f3072e44f604502da9325f0a801c226c4fd677b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fa13c6353b7c101d063ce8584d0832a412277f3c255f01d43ab30aa863ab3490->leave($__internal_fa13c6353b7c101d063ce8584d0832a412277f3c255f01d43ab30aa863ab3490_prof);

        
        $__internal_fc02e013440186fe0d0670a41f3072e44f604502da9325f0a801c226c4fd677b->leave($__internal_fc02e013440186fe0d0670a41f3072e44f604502da9325f0a801c226c4fd677b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
