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
        $__internal_62369088a4b3741aa45ffdbf8f91926636ac679ae576f19c1b768cb45777438a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62369088a4b3741aa45ffdbf8f91926636ac679ae576f19c1b768cb45777438a->enter($__internal_62369088a4b3741aa45ffdbf8f91926636ac679ae576f19c1b768cb45777438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7c9bbec0e092eaa0b45616ed4becc1a223f480526682962d69a7abc97c481c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9bbec0e092eaa0b45616ed4becc1a223f480526682962d69a7abc97c481c69->enter($__internal_7c9bbec0e092eaa0b45616ed4becc1a223f480526682962d69a7abc97c481c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_62369088a4b3741aa45ffdbf8f91926636ac679ae576f19c1b768cb45777438a->leave($__internal_62369088a4b3741aa45ffdbf8f91926636ac679ae576f19c1b768cb45777438a_prof);

        
        $__internal_7c9bbec0e092eaa0b45616ed4becc1a223f480526682962d69a7abc97c481c69->leave($__internal_7c9bbec0e092eaa0b45616ed4becc1a223f480526682962d69a7abc97c481c69_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
