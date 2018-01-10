<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_09d5a794fc31c48479989de4a2b5f276e895d7893a9cc1f42f9c58db360f3fb1 extends Twig_Template
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
        $__internal_f6e7ad7b51e5b0b57a0c9c6964605ce711e3074ed2280d631adefaa6de0696a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e7ad7b51e5b0b57a0c9c6964605ce711e3074ed2280d631adefaa6de0696a5->enter($__internal_f6e7ad7b51e5b0b57a0c9c6964605ce711e3074ed2280d631adefaa6de0696a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0a31ae6014db4d64521d8c6b9ce61457bda0e71ef5490f59389739e4bded1b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a31ae6014db4d64521d8c6b9ce61457bda0e71ef5490f59389739e4bded1b9b->enter($__internal_0a31ae6014db4d64521d8c6b9ce61457bda0e71ef5490f59389739e4bded1b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f6e7ad7b51e5b0b57a0c9c6964605ce711e3074ed2280d631adefaa6de0696a5->leave($__internal_f6e7ad7b51e5b0b57a0c9c6964605ce711e3074ed2280d631adefaa6de0696a5_prof);

        
        $__internal_0a31ae6014db4d64521d8c6b9ce61457bda0e71ef5490f59389739e4bded1b9b->leave($__internal_0a31ae6014db4d64521d8c6b9ce61457bda0e71ef5490f59389739e4bded1b9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
