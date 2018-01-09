<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4ad9e16d8ba3b81fb203fcd895c29bc344206fda20eb928563b5dfa63a9ab230 extends Twig_Template
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
        $__internal_9e874aedf9feeca75b126e7757a7919886ebdc7742e41713b0604e664169eafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e874aedf9feeca75b126e7757a7919886ebdc7742e41713b0604e664169eafd->enter($__internal_9e874aedf9feeca75b126e7757a7919886ebdc7742e41713b0604e664169eafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f04daa5880d1ba9050a7f7288c72b028f27cbdfd0d0c9705cd29dda2b785369b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04daa5880d1ba9050a7f7288c72b028f27cbdfd0d0c9705cd29dda2b785369b->enter($__internal_f04daa5880d1ba9050a7f7288c72b028f27cbdfd0d0c9705cd29dda2b785369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9e874aedf9feeca75b126e7757a7919886ebdc7742e41713b0604e664169eafd->leave($__internal_9e874aedf9feeca75b126e7757a7919886ebdc7742e41713b0604e664169eafd_prof);

        
        $__internal_f04daa5880d1ba9050a7f7288c72b028f27cbdfd0d0c9705cd29dda2b785369b->leave($__internal_f04daa5880d1ba9050a7f7288c72b028f27cbdfd0d0c9705cd29dda2b785369b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
