<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b998e6d0b8c56e0a41e3fa18eff411386e5e24c763caba70467b56d12b6defd1 extends Twig_Template
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
        $__internal_a8d769b5d420ddc7bd3320baac6a41b4464330d147618de477302b67e78b5e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d769b5d420ddc7bd3320baac6a41b4464330d147618de477302b67e78b5e47->enter($__internal_a8d769b5d420ddc7bd3320baac6a41b4464330d147618de477302b67e78b5e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_20fc9739329374bb7f49365eca5fe19a83194e356a6e9ecc7bee6958202fa799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc9739329374bb7f49365eca5fe19a83194e356a6e9ecc7bee6958202fa799->enter($__internal_20fc9739329374bb7f49365eca5fe19a83194e356a6e9ecc7bee6958202fa799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a8d769b5d420ddc7bd3320baac6a41b4464330d147618de477302b67e78b5e47->leave($__internal_a8d769b5d420ddc7bd3320baac6a41b4464330d147618de477302b67e78b5e47_prof);

        
        $__internal_20fc9739329374bb7f49365eca5fe19a83194e356a6e9ecc7bee6958202fa799->leave($__internal_20fc9739329374bb7f49365eca5fe19a83194e356a6e9ecc7bee6958202fa799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
