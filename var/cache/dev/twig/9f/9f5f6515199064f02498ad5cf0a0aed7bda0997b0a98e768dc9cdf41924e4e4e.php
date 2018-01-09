<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_f2b7a90130fe62992f2d25ea29f21848ef07820b0139d9cf4d8026b88a0955ac extends Twig_Template
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
        $__internal_abf4ed5b6ca2e859cb0b901ffba7d0d3a2ac25539001fb1aad627e2de5a21100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf4ed5b6ca2e859cb0b901ffba7d0d3a2ac25539001fb1aad627e2de5a21100->enter($__internal_abf4ed5b6ca2e859cb0b901ffba7d0d3a2ac25539001fb1aad627e2de5a21100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_35650ad8dfeb4d96f4abc5ede1c3deede1dcd134909220c214ba028438ce7d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35650ad8dfeb4d96f4abc5ede1c3deede1dcd134909220c214ba028438ce7d57->enter($__internal_35650ad8dfeb4d96f4abc5ede1c3deede1dcd134909220c214ba028438ce7d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_abf4ed5b6ca2e859cb0b901ffba7d0d3a2ac25539001fb1aad627e2de5a21100->leave($__internal_abf4ed5b6ca2e859cb0b901ffba7d0d3a2ac25539001fb1aad627e2de5a21100_prof);

        
        $__internal_35650ad8dfeb4d96f4abc5ede1c3deede1dcd134909220c214ba028438ce7d57->leave($__internal_35650ad8dfeb4d96f4abc5ede1c3deede1dcd134909220c214ba028438ce7d57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
