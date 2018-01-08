<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d6f9dfafaecda196cb169290856e9e7b85ee9737e1def44c50346eaad9fd3a1a extends Twig_Template
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
        $__internal_45bb7da147f9c560d7a702035ac0fb4711773fa2306d120ef542a9b29aadc71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bb7da147f9c560d7a702035ac0fb4711773fa2306d120ef542a9b29aadc71b->enter($__internal_45bb7da147f9c560d7a702035ac0fb4711773fa2306d120ef542a9b29aadc71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ccf3f3a6324631cd1d73861101d0409309de941274948490c8f9428324de86dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf3f3a6324631cd1d73861101d0409309de941274948490c8f9428324de86dd->enter($__internal_ccf3f3a6324631cd1d73861101d0409309de941274948490c8f9428324de86dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_45bb7da147f9c560d7a702035ac0fb4711773fa2306d120ef542a9b29aadc71b->leave($__internal_45bb7da147f9c560d7a702035ac0fb4711773fa2306d120ef542a9b29aadc71b_prof);

        
        $__internal_ccf3f3a6324631cd1d73861101d0409309de941274948490c8f9428324de86dd->leave($__internal_ccf3f3a6324631cd1d73861101d0409309de941274948490c8f9428324de86dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
