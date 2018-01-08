<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6de2fa242f8a1f8aac6c1384eb09f6ddffbc592b2a5d80cff232f2dbd8d0bdf6 extends Twig_Template
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
        $__internal_1462e0b9ae5b60215d87164da2db67f6f3f21a4886d55e0a49a8132a34e15dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1462e0b9ae5b60215d87164da2db67f6f3f21a4886d55e0a49a8132a34e15dd3->enter($__internal_1462e0b9ae5b60215d87164da2db67f6f3f21a4886d55e0a49a8132a34e15dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e1ba5b7df0582e394079a77dd4210b76bb504d51047a3c7cbb7c038ab2c4432d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ba5b7df0582e394079a77dd4210b76bb504d51047a3c7cbb7c038ab2c4432d->enter($__internal_e1ba5b7df0582e394079a77dd4210b76bb504d51047a3c7cbb7c038ab2c4432d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1462e0b9ae5b60215d87164da2db67f6f3f21a4886d55e0a49a8132a34e15dd3->leave($__internal_1462e0b9ae5b60215d87164da2db67f6f3f21a4886d55e0a49a8132a34e15dd3_prof);

        
        $__internal_e1ba5b7df0582e394079a77dd4210b76bb504d51047a3c7cbb7c038ab2c4432d->leave($__internal_e1ba5b7df0582e394079a77dd4210b76bb504d51047a3c7cbb7c038ab2c4432d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
