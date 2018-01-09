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
        $__internal_3df8c7430d1516422d74db33890496a60b51dc0a1372c6f3abddf8a4f9e37346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df8c7430d1516422d74db33890496a60b51dc0a1372c6f3abddf8a4f9e37346->enter($__internal_3df8c7430d1516422d74db33890496a60b51dc0a1372c6f3abddf8a4f9e37346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cdc27bbed7fc7cbebeb206cffa78b0226efb3863e2641b59f1bc505c6bd2758f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc27bbed7fc7cbebeb206cffa78b0226efb3863e2641b59f1bc505c6bd2758f->enter($__internal_cdc27bbed7fc7cbebeb206cffa78b0226efb3863e2641b59f1bc505c6bd2758f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3df8c7430d1516422d74db33890496a60b51dc0a1372c6f3abddf8a4f9e37346->leave($__internal_3df8c7430d1516422d74db33890496a60b51dc0a1372c6f3abddf8a4f9e37346_prof);

        
        $__internal_cdc27bbed7fc7cbebeb206cffa78b0226efb3863e2641b59f1bc505c6bd2758f->leave($__internal_cdc27bbed7fc7cbebeb206cffa78b0226efb3863e2641b59f1bc505c6bd2758f_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
