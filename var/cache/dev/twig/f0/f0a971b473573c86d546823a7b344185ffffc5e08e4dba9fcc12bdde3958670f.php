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
        $__internal_ac91e0b8a964eb71df2bdc1074f08b8b702a3f64c87f0b785df87d4356c856dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac91e0b8a964eb71df2bdc1074f08b8b702a3f64c87f0b785df87d4356c856dc->enter($__internal_ac91e0b8a964eb71df2bdc1074f08b8b702a3f64c87f0b785df87d4356c856dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_528987be09310e23ecbb4847889f3a3705bcc1974e8b2ae3d1727c6fbe91e465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528987be09310e23ecbb4847889f3a3705bcc1974e8b2ae3d1727c6fbe91e465->enter($__internal_528987be09310e23ecbb4847889f3a3705bcc1974e8b2ae3d1727c6fbe91e465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ac91e0b8a964eb71df2bdc1074f08b8b702a3f64c87f0b785df87d4356c856dc->leave($__internal_ac91e0b8a964eb71df2bdc1074f08b8b702a3f64c87f0b785df87d4356c856dc_prof);

        
        $__internal_528987be09310e23ecbb4847889f3a3705bcc1974e8b2ae3d1727c6fbe91e465->leave($__internal_528987be09310e23ecbb4847889f3a3705bcc1974e8b2ae3d1727c6fbe91e465_prof);

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
