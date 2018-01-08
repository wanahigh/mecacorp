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
        $__internal_bea1d414621fca22e1bb05ab45ac9d050de5edf34f9fba4a077027309058869d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea1d414621fca22e1bb05ab45ac9d050de5edf34f9fba4a077027309058869d->enter($__internal_bea1d414621fca22e1bb05ab45ac9d050de5edf34f9fba4a077027309058869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2bdbf224d0207271528eefcf8248f4b13b90672c0ca0268731d522b3941f1599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdbf224d0207271528eefcf8248f4b13b90672c0ca0268731d522b3941f1599->enter($__internal_2bdbf224d0207271528eefcf8248f4b13b90672c0ca0268731d522b3941f1599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bea1d414621fca22e1bb05ab45ac9d050de5edf34f9fba4a077027309058869d->leave($__internal_bea1d414621fca22e1bb05ab45ac9d050de5edf34f9fba4a077027309058869d_prof);

        
        $__internal_2bdbf224d0207271528eefcf8248f4b13b90672c0ca0268731d522b3941f1599->leave($__internal_2bdbf224d0207271528eefcf8248f4b13b90672c0ca0268731d522b3941f1599_prof);

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
", "@Framework/Form/submit_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
