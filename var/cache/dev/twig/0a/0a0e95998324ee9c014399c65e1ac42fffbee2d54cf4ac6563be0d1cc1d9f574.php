<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e907c5edd7889796c5b271482871bd30ce66bb809f6a0ffaae595970757ff9fc extends Twig_Template
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
        $__internal_f555d1206be31c49a42798fa5493ff41a113e90eb1d75874c236426b1cfcd087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f555d1206be31c49a42798fa5493ff41a113e90eb1d75874c236426b1cfcd087->enter($__internal_f555d1206be31c49a42798fa5493ff41a113e90eb1d75874c236426b1cfcd087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0e3c9c70faca7eb9d86a1eb9f4b3402ea592d4228d094afaebbbd4e164bad1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3c9c70faca7eb9d86a1eb9f4b3402ea592d4228d094afaebbbd4e164bad1d9->enter($__internal_0e3c9c70faca7eb9d86a1eb9f4b3402ea592d4228d094afaebbbd4e164bad1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f555d1206be31c49a42798fa5493ff41a113e90eb1d75874c236426b1cfcd087->leave($__internal_f555d1206be31c49a42798fa5493ff41a113e90eb1d75874c236426b1cfcd087_prof);

        
        $__internal_0e3c9c70faca7eb9d86a1eb9f4b3402ea592d4228d094afaebbbd4e164bad1d9->leave($__internal_0e3c9c70faca7eb9d86a1eb9f4b3402ea592d4228d094afaebbbd4e164bad1d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
