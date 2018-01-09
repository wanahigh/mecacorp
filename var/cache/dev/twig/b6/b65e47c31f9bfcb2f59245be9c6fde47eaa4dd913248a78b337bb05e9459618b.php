<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_69ff3139ed11f7c8136c57854d26afddf05ef50204a1fe2817efa98987751a01 extends Twig_Template
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
        $__internal_2140e065cc1d0e7a71842dc6932c35ae767e2aacaa317bd7dd6678145aad238f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2140e065cc1d0e7a71842dc6932c35ae767e2aacaa317bd7dd6678145aad238f->enter($__internal_2140e065cc1d0e7a71842dc6932c35ae767e2aacaa317bd7dd6678145aad238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_90a74c4ad11a352db80e6e29af85ae8186255fd39869a0b50f6c2c6bc00f3947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a74c4ad11a352db80e6e29af85ae8186255fd39869a0b50f6c2c6bc00f3947->enter($__internal_90a74c4ad11a352db80e6e29af85ae8186255fd39869a0b50f6c2c6bc00f3947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2140e065cc1d0e7a71842dc6932c35ae767e2aacaa317bd7dd6678145aad238f->leave($__internal_2140e065cc1d0e7a71842dc6932c35ae767e2aacaa317bd7dd6678145aad238f_prof);

        
        $__internal_90a74c4ad11a352db80e6e29af85ae8186255fd39869a0b50f6c2c6bc00f3947->leave($__internal_90a74c4ad11a352db80e6e29af85ae8186255fd39869a0b50f6c2c6bc00f3947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
