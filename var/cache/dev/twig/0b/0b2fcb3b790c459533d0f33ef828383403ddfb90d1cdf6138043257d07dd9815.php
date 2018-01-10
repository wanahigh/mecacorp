<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_80426cbc711955738c8439c81332443fb4141726327bfca928ee64b1a6a599a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52b584b3bc512a9ca6baae2a60a8d80efa7cbd41adf960cb5f914f460de1c6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b584b3bc512a9ca6baae2a60a8d80efa7cbd41adf960cb5f914f460de1c6ab->enter($__internal_52b584b3bc512a9ca6baae2a60a8d80efa7cbd41adf960cb5f914f460de1c6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_b653a4e2a05055db7edd57d80dd1a35d763149fd8c6ff97ecb23ea7f07908598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b653a4e2a05055db7edd57d80dd1a35d763149fd8c6ff97ecb23ea7f07908598->enter($__internal_b653a4e2a05055db7edd57d80dd1a35d763149fd8c6ff97ecb23ea7f07908598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_52b584b3bc512a9ca6baae2a60a8d80efa7cbd41adf960cb5f914f460de1c6ab->leave($__internal_52b584b3bc512a9ca6baae2a60a8d80efa7cbd41adf960cb5f914f460de1c6ab_prof);

        
        $__internal_b653a4e2a05055db7edd57d80dd1a35d763149fd8c6ff97ecb23ea7f07908598->leave($__internal_b653a4e2a05055db7edd57d80dd1a35d763149fd8c6ff97ecb23ea7f07908598_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_436cd986b81ca5b16a68ccfe205adee1327178bbfa1cb2d667fe867534367f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436cd986b81ca5b16a68ccfe205adee1327178bbfa1cb2d667fe867534367f44->enter($__internal_436cd986b81ca5b16a68ccfe205adee1327178bbfa1cb2d667fe867534367f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8cf231fc9d7748014d73545dc190f7b350102f90da4f5a354173887d7fed6116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf231fc9d7748014d73545dc190f7b350102f90da4f5a354173887d7fed6116->enter($__internal_8cf231fc9d7748014d73545dc190f7b350102f90da4f5a354173887d7fed6116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_8cf231fc9d7748014d73545dc190f7b350102f90da4f5a354173887d7fed6116->leave($__internal_8cf231fc9d7748014d73545dc190f7b350102f90da4f5a354173887d7fed6116_prof);

        
        $__internal_436cd986b81ca5b16a68ccfe205adee1327178bbfa1cb2d667fe867534367f44->leave($__internal_436cd986b81ca5b16a68ccfe205adee1327178bbfa1cb2d667fe867534367f44_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d52f46730bbdd1d7270e70b75c3ab42469ba3d5583f8f1d9432a4698d5d915f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52f46730bbdd1d7270e70b75c3ab42469ba3d5583f8f1d9432a4698d5d915f0->enter($__internal_d52f46730bbdd1d7270e70b75c3ab42469ba3d5583f8f1d9432a4698d5d915f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ea6a680541ff4825d8a73435bda6341e563675e38e83acb7cf11d5c7bad80b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6a680541ff4825d8a73435bda6341e563675e38e83acb7cf11d5c7bad80b23->enter($__internal_ea6a680541ff4825d8a73435bda6341e563675e38e83acb7cf11d5c7bad80b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_ea6a680541ff4825d8a73435bda6341e563675e38e83acb7cf11d5c7bad80b23->leave($__internal_ea6a680541ff4825d8a73435bda6341e563675e38e83acb7cf11d5c7bad80b23_prof);

        
        $__internal_d52f46730bbdd1d7270e70b75c3ab42469ba3d5583f8f1d9432a4698d5d915f0->leave($__internal_d52f46730bbdd1d7270e70b75c3ab42469ba3d5583f8f1d9432a4698d5d915f0_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_78cf7479f163875d311ab1e06220f4bb09fdaf05c8d2b131c1103c00382cfdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cf7479f163875d311ab1e06220f4bb09fdaf05c8d2b131c1103c00382cfdf2->enter($__internal_78cf7479f163875d311ab1e06220f4bb09fdaf05c8d2b131c1103c00382cfdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_37c4d620b500e884aacb29b288dcc0313dcff6c5ae4f3dcdbf87a8b844187870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c4d620b500e884aacb29b288dcc0313dcff6c5ae4f3dcdbf87a8b844187870->enter($__internal_37c4d620b500e884aacb29b288dcc0313dcff6c5ae4f3dcdbf87a8b844187870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_37c4d620b500e884aacb29b288dcc0313dcff6c5ae4f3dcdbf87a8b844187870->leave($__internal_37c4d620b500e884aacb29b288dcc0313dcff6c5ae4f3dcdbf87a8b844187870_prof);

        
        $__internal_78cf7479f163875d311ab1e06220f4bb09fdaf05c8d2b131c1103c00382cfdf2->leave($__internal_78cf7479f163875d311ab1e06220f4bb09fdaf05c8d2b131c1103c00382cfdf2_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_19c1d8237a63ccc1be3f2cecf77056281ae7031ffcd1a55896086517500a8901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c1d8237a63ccc1be3f2cecf77056281ae7031ffcd1a55896086517500a8901->enter($__internal_19c1d8237a63ccc1be3f2cecf77056281ae7031ffcd1a55896086517500a8901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_88038ddc50f599a8e6a83d043623b2a6008115dc320af5951968ccbaa29c5e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88038ddc50f599a8e6a83d043623b2a6008115dc320af5951968ccbaa29c5e8c->enter($__internal_88038ddc50f599a8e6a83d043623b2a6008115dc320af5951968ccbaa29c5e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_88038ddc50f599a8e6a83d043623b2a6008115dc320af5951968ccbaa29c5e8c->leave($__internal_88038ddc50f599a8e6a83d043623b2a6008115dc320af5951968ccbaa29c5e8c_prof);

        
        $__internal_19c1d8237a63ccc1be3f2cecf77056281ae7031ffcd1a55896086517500a8901->leave($__internal_19c1d8237a63ccc1be3f2cecf77056281ae7031ffcd1a55896086517500a8901_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a79a38a608e672486af489898c5d914cad237236bebb413262fc35cfaa60ed87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79a38a608e672486af489898c5d914cad237236bebb413262fc35cfaa60ed87->enter($__internal_a79a38a608e672486af489898c5d914cad237236bebb413262fc35cfaa60ed87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_00df25c6bbc1cd2f2a8659ccafd9f8964e3ecf43490d3a46b57e3e0fc138b27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00df25c6bbc1cd2f2a8659ccafd9f8964e3ecf43490d3a46b57e3e0fc138b27f->enter($__internal_00df25c6bbc1cd2f2a8659ccafd9f8964e3ecf43490d3a46b57e3e0fc138b27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_00df25c6bbc1cd2f2a8659ccafd9f8964e3ecf43490d3a46b57e3e0fc138b27f->leave($__internal_00df25c6bbc1cd2f2a8659ccafd9f8964e3ecf43490d3a46b57e3e0fc138b27f_prof);

        
        $__internal_a79a38a608e672486af489898c5d914cad237236bebb413262fc35cfaa60ed87->leave($__internal_a79a38a608e672486af489898c5d914cad237236bebb413262fc35cfaa60ed87_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6620a1b839071d6406fdd4def1c07fccb486da9ce9dfcdcc7e673ce9609e3340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6620a1b839071d6406fdd4def1c07fccb486da9ce9dfcdcc7e673ce9609e3340->enter($__internal_6620a1b839071d6406fdd4def1c07fccb486da9ce9dfcdcc7e673ce9609e3340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fdc9216429956122d644e52652d06fb42068ea1a6d89b6cc90d516329dc6a24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc9216429956122d644e52652d06fb42068ea1a6d89b6cc90d516329dc6a24f->enter($__internal_fdc9216429956122d644e52652d06fb42068ea1a6d89b6cc90d516329dc6a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_fdc9216429956122d644e52652d06fb42068ea1a6d89b6cc90d516329dc6a24f->leave($__internal_fdc9216429956122d644e52652d06fb42068ea1a6d89b6cc90d516329dc6a24f_prof);

        
        $__internal_6620a1b839071d6406fdd4def1c07fccb486da9ce9dfcdcc7e673ce9609e3340->leave($__internal_6620a1b839071d6406fdd4def1c07fccb486da9ce9dfcdcc7e673ce9609e3340_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3f90d17470024da7d370e1e77574dfc7ad09bc508431310af8e2bcfc2fb74c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f90d17470024da7d370e1e77574dfc7ad09bc508431310af8e2bcfc2fb74c0b->enter($__internal_3f90d17470024da7d370e1e77574dfc7ad09bc508431310af8e2bcfc2fb74c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8d0feba92e5fdb3981811d7ab813c099f771ae098b44442ac006be2d8763e27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0feba92e5fdb3981811d7ab813c099f771ae098b44442ac006be2d8763e27d->enter($__internal_8d0feba92e5fdb3981811d7ab813c099f771ae098b44442ac006be2d8763e27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_8d0feba92e5fdb3981811d7ab813c099f771ae098b44442ac006be2d8763e27d->leave($__internal_8d0feba92e5fdb3981811d7ab813c099f771ae098b44442ac006be2d8763e27d_prof);

        
        $__internal_3f90d17470024da7d370e1e77574dfc7ad09bc508431310af8e2bcfc2fb74c0b->leave($__internal_3f90d17470024da7d370e1e77574dfc7ad09bc508431310af8e2bcfc2fb74c0b_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b13220e5ec601a3b1c3d730e25ac8d9aa4dbf63626be6a4370d52b3ddfe08fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13220e5ec601a3b1c3d730e25ac8d9aa4dbf63626be6a4370d52b3ddfe08fb4->enter($__internal_b13220e5ec601a3b1c3d730e25ac8d9aa4dbf63626be6a4370d52b3ddfe08fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_66c25e8c36d75d0961e8ebed0bdee902cbc4563e454116b96f7278a27807105f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c25e8c36d75d0961e8ebed0bdee902cbc4563e454116b96f7278a27807105f->enter($__internal_66c25e8c36d75d0961e8ebed0bdee902cbc4563e454116b96f7278a27807105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_66c25e8c36d75d0961e8ebed0bdee902cbc4563e454116b96f7278a27807105f->leave($__internal_66c25e8c36d75d0961e8ebed0bdee902cbc4563e454116b96f7278a27807105f_prof);

        
        $__internal_b13220e5ec601a3b1c3d730e25ac8d9aa4dbf63626be6a4370d52b3ddfe08fb4->leave($__internal_b13220e5ec601a3b1c3d730e25ac8d9aa4dbf63626be6a4370d52b3ddfe08fb4_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
