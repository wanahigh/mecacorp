<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ce76c4ff3c9762b85122b59e7dadd2975a15006874fd7211de8e11e3323bbdb2 extends Twig_Template
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
        $__internal_120fc6712a607e59e308fcceba30d59dd955e1c95932b7fdcab3069b812ec35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120fc6712a607e59e308fcceba30d59dd955e1c95932b7fdcab3069b812ec35f->enter($__internal_120fc6712a607e59e308fcceba30d59dd955e1c95932b7fdcab3069b812ec35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_73ce8c9107fe9f7121010a45aba072932138007b8b852a74851ffef3c12e954b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ce8c9107fe9f7121010a45aba072932138007b8b852a74851ffef3c12e954b->enter($__internal_73ce8c9107fe9f7121010a45aba072932138007b8b852a74851ffef3c12e954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_120fc6712a607e59e308fcceba30d59dd955e1c95932b7fdcab3069b812ec35f->leave($__internal_120fc6712a607e59e308fcceba30d59dd955e1c95932b7fdcab3069b812ec35f_prof);

        
        $__internal_73ce8c9107fe9f7121010a45aba072932138007b8b852a74851ffef3c12e954b->leave($__internal_73ce8c9107fe9f7121010a45aba072932138007b8b852a74851ffef3c12e954b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
