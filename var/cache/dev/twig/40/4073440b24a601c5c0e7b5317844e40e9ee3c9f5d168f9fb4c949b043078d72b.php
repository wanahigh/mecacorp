<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1c3d19ca63e10c882bb89a7b4e3a5a4c48e2ee996f5d3fc23b19e6d5a1577000 extends Twig_Template
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
        $__internal_308daa31c3a0b257e7edcec3928258c66f575fe13a8de934746c312e37c59754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308daa31c3a0b257e7edcec3928258c66f575fe13a8de934746c312e37c59754->enter($__internal_308daa31c3a0b257e7edcec3928258c66f575fe13a8de934746c312e37c59754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ff97c53fd1e71c0431248f9b1344b5c1f96031f8d71946621f6c7f5bcc5b513c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff97c53fd1e71c0431248f9b1344b5c1f96031f8d71946621f6c7f5bcc5b513c->enter($__internal_ff97c53fd1e71c0431248f9b1344b5c1f96031f8d71946621f6c7f5bcc5b513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_308daa31c3a0b257e7edcec3928258c66f575fe13a8de934746c312e37c59754->leave($__internal_308daa31c3a0b257e7edcec3928258c66f575fe13a8de934746c312e37c59754_prof);

        
        $__internal_ff97c53fd1e71c0431248f9b1344b5c1f96031f8d71946621f6c7f5bcc5b513c->leave($__internal_ff97c53fd1e71c0431248f9b1344b5c1f96031f8d71946621f6c7f5bcc5b513c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
