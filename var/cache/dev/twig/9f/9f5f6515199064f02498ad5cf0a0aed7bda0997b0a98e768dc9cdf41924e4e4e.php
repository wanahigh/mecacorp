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
        $__internal_50bafe9520796b0b35f5bc9fc970d8467c8d9414e3c6e0afba988ab382563248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bafe9520796b0b35f5bc9fc970d8467c8d9414e3c6e0afba988ab382563248->enter($__internal_50bafe9520796b0b35f5bc9fc970d8467c8d9414e3c6e0afba988ab382563248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_b37b90ee626bfbd430fd649e430352ee3a1a6e78f349e457200ae7e5b8587d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37b90ee626bfbd430fd649e430352ee3a1a6e78f349e457200ae7e5b8587d92->enter($__internal_b37b90ee626bfbd430fd649e430352ee3a1a6e78f349e457200ae7e5b8587d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_50bafe9520796b0b35f5bc9fc970d8467c8d9414e3c6e0afba988ab382563248->leave($__internal_50bafe9520796b0b35f5bc9fc970d8467c8d9414e3c6e0afba988ab382563248_prof);

        
        $__internal_b37b90ee626bfbd430fd649e430352ee3a1a6e78f349e457200ae7e5b8587d92->leave($__internal_b37b90ee626bfbd430fd649e430352ee3a1a6e78f349e457200ae7e5b8587d92_prof);

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
", "@Framework/Form/time_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
