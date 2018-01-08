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
        $__internal_b9d0cc6c45b98d71c18d35cff79e75ef95166a4d1db6785a8e3d655e0dd94a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d0cc6c45b98d71c18d35cff79e75ef95166a4d1db6785a8e3d655e0dd94a8e->enter($__internal_b9d0cc6c45b98d71c18d35cff79e75ef95166a4d1db6785a8e3d655e0dd94a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f56faec49249427aec1181581656337c7edf2cbffa3ee02b9509e0d24b1f4a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56faec49249427aec1181581656337c7edf2cbffa3ee02b9509e0d24b1f4a14->enter($__internal_f56faec49249427aec1181581656337c7edf2cbffa3ee02b9509e0d24b1f4a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b9d0cc6c45b98d71c18d35cff79e75ef95166a4d1db6785a8e3d655e0dd94a8e->leave($__internal_b9d0cc6c45b98d71c18d35cff79e75ef95166a4d1db6785a8e3d655e0dd94a8e_prof);

        
        $__internal_f56faec49249427aec1181581656337c7edf2cbffa3ee02b9509e0d24b1f4a14->leave($__internal_f56faec49249427aec1181581656337c7edf2cbffa3ee02b9509e0d24b1f4a14_prof);

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
", "@Framework/Form/collection_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
