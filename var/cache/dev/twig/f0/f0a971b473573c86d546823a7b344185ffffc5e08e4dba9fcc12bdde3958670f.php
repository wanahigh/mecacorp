<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_892e173bbbfbda4148cbdaeecaea488bb1a2c793025def1951fdf98d937dbf14 extends Twig_Template
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
        $__internal_9f847ec6790ba348e82d852d179032f29cd84ef22a6b31f88abfffba5b937548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f847ec6790ba348e82d852d179032f29cd84ef22a6b31f88abfffba5b937548->enter($__internal_9f847ec6790ba348e82d852d179032f29cd84ef22a6b31f88abfffba5b937548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_844793231c8281af5980bfa99893dca3690e54a211252bc44a964abe0c6cfd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844793231c8281af5980bfa99893dca3690e54a211252bc44a964abe0c6cfd0b->enter($__internal_844793231c8281af5980bfa99893dca3690e54a211252bc44a964abe0c6cfd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9f847ec6790ba348e82d852d179032f29cd84ef22a6b31f88abfffba5b937548->leave($__internal_9f847ec6790ba348e82d852d179032f29cd84ef22a6b31f88abfffba5b937548_prof);

        
        $__internal_844793231c8281af5980bfa99893dca3690e54a211252bc44a964abe0c6cfd0b->leave($__internal_844793231c8281af5980bfa99893dca3690e54a211252bc44a964abe0c6cfd0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
