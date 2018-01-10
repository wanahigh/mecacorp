<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_436173ee8ba73bf034216d9717b472352793ffc9cb0f4c8f8f9387b946d90b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09fb4261482546ce72ec4c30c7e8399d4db2e1c7787660ed1eb214abf1599fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fb4261482546ce72ec4c30c7e8399d4db2e1c7787660ed1eb214abf1599fc6->enter($__internal_09fb4261482546ce72ec4c30c7e8399d4db2e1c7787660ed1eb214abf1599fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b11cd2bcc27f85aa5cf776a9dd94f9ff239f284ff50852f79075124acd99cf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11cd2bcc27f85aa5cf776a9dd94f9ff239f284ff50852f79075124acd99cf2f->enter($__internal_b11cd2bcc27f85aa5cf776a9dd94f9ff239f284ff50852f79075124acd99cf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_09fb4261482546ce72ec4c30c7e8399d4db2e1c7787660ed1eb214abf1599fc6->leave($__internal_09fb4261482546ce72ec4c30c7e8399d4db2e1c7787660ed1eb214abf1599fc6_prof);

        
        $__internal_b11cd2bcc27f85aa5cf776a9dd94f9ff239f284ff50852f79075124acd99cf2f->leave($__internal_b11cd2bcc27f85aa5cf776a9dd94f9ff239f284ff50852f79075124acd99cf2f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a9c6acd6360488016a21c2071e6119d57ce6e4fbe67a0ba22c15472e40b02fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c6acd6360488016a21c2071e6119d57ce6e4fbe67a0ba22c15472e40b02fdb->enter($__internal_a9c6acd6360488016a21c2071e6119d57ce6e4fbe67a0ba22c15472e40b02fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f8974ab82b2fe932be923ecfe80439ff0f2b84ae744da423d2a39b738455b9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8974ab82b2fe932be923ecfe80439ff0f2b84ae744da423d2a39b738455b9db->enter($__internal_f8974ab82b2fe932be923ecfe80439ff0f2b84ae744da423d2a39b738455b9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f8974ab82b2fe932be923ecfe80439ff0f2b84ae744da423d2a39b738455b9db->leave($__internal_f8974ab82b2fe932be923ecfe80439ff0f2b84ae744da423d2a39b738455b9db_prof);

        
        $__internal_a9c6acd6360488016a21c2071e6119d57ce6e4fbe67a0ba22c15472e40b02fdb->leave($__internal_a9c6acd6360488016a21c2071e6119d57ce6e4fbe67a0ba22c15472e40b02fdb_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8a87c05255d74e965f4080b958d87b030bf0407f51819801cffef2b7ec9761f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a87c05255d74e965f4080b958d87b030bf0407f51819801cffef2b7ec9761f0->enter($__internal_8a87c05255d74e965f4080b958d87b030bf0407f51819801cffef2b7ec9761f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cb0542b5f92186bcaa0627e76444759936711a09596f0ab7625ff1c502109d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0542b5f92186bcaa0627e76444759936711a09596f0ab7625ff1c502109d9c->enter($__internal_cb0542b5f92186bcaa0627e76444759936711a09596f0ab7625ff1c502109d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_cb0542b5f92186bcaa0627e76444759936711a09596f0ab7625ff1c502109d9c->leave($__internal_cb0542b5f92186bcaa0627e76444759936711a09596f0ab7625ff1c502109d9c_prof);

        
        $__internal_8a87c05255d74e965f4080b958d87b030bf0407f51819801cffef2b7ec9761f0->leave($__internal_8a87c05255d74e965f4080b958d87b030bf0407f51819801cffef2b7ec9761f0_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b470dabfbb90ddcadb0dfafd8ffda459dbfc52937da32c1e3b5aa91a7ca8adf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b470dabfbb90ddcadb0dfafd8ffda459dbfc52937da32c1e3b5aa91a7ca8adf5->enter($__internal_b470dabfbb90ddcadb0dfafd8ffda459dbfc52937da32c1e3b5aa91a7ca8adf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_40dfde51ff752a669c7e521062e106c706496858947c92466821a05745bda043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dfde51ff752a669c7e521062e106c706496858947c92466821a05745bda043->enter($__internal_40dfde51ff752a669c7e521062e106c706496858947c92466821a05745bda043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_40dfde51ff752a669c7e521062e106c706496858947c92466821a05745bda043->leave($__internal_40dfde51ff752a669c7e521062e106c706496858947c92466821a05745bda043_prof);

        
        $__internal_b470dabfbb90ddcadb0dfafd8ffda459dbfc52937da32c1e3b5aa91a7ca8adf5->leave($__internal_b470dabfbb90ddcadb0dfafd8ffda459dbfc52937da32c1e3b5aa91a7ca8adf5_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_48178589c418ce1fdf67c09d80acf7583e86420379bcc5992ac9aa3fe38f803e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48178589c418ce1fdf67c09d80acf7583e86420379bcc5992ac9aa3fe38f803e->enter($__internal_48178589c418ce1fdf67c09d80acf7583e86420379bcc5992ac9aa3fe38f803e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2da38a197a0454bc541fc12dea17f45144e1bb8aede8a3e0defa8761d1ac862b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da38a197a0454bc541fc12dea17f45144e1bb8aede8a3e0defa8761d1ac862b->enter($__internal_2da38a197a0454bc541fc12dea17f45144e1bb8aede8a3e0defa8761d1ac862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_2da38a197a0454bc541fc12dea17f45144e1bb8aede8a3e0defa8761d1ac862b->leave($__internal_2da38a197a0454bc541fc12dea17f45144e1bb8aede8a3e0defa8761d1ac862b_prof);

        
        $__internal_48178589c418ce1fdf67c09d80acf7583e86420379bcc5992ac9aa3fe38f803e->leave($__internal_48178589c418ce1fdf67c09d80acf7583e86420379bcc5992ac9aa3fe38f803e_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_6124886db1edd591fcb3320a7c9a831dd4ef3e6fb37ab49fde8bc6c2a3414802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6124886db1edd591fcb3320a7c9a831dd4ef3e6fb37ab49fde8bc6c2a3414802->enter($__internal_6124886db1edd591fcb3320a7c9a831dd4ef3e6fb37ab49fde8bc6c2a3414802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4836ad79b82532a9660ee8f1a0b703f53bfc2c261cf9e78a627ca7ba6befad80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4836ad79b82532a9660ee8f1a0b703f53bfc2c261cf9e78a627ca7ba6befad80->enter($__internal_4836ad79b82532a9660ee8f1a0b703f53bfc2c261cf9e78a627ca7ba6befad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_4836ad79b82532a9660ee8f1a0b703f53bfc2c261cf9e78a627ca7ba6befad80->leave($__internal_4836ad79b82532a9660ee8f1a0b703f53bfc2c261cf9e78a627ca7ba6befad80_prof);

        
        $__internal_6124886db1edd591fcb3320a7c9a831dd4ef3e6fb37ab49fde8bc6c2a3414802->leave($__internal_6124886db1edd591fcb3320a7c9a831dd4ef3e6fb37ab49fde8bc6c2a3414802_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fcc863c102ea818a65c7f1fd5498076112406859be0e332aeef065a0e02bc54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc863c102ea818a65c7f1fd5498076112406859be0e332aeef065a0e02bc54f->enter($__internal_fcc863c102ea818a65c7f1fd5498076112406859be0e332aeef065a0e02bc54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_26953f0bc75824a9d297ac71eae57f411f6ecbe6f819e994ab9c0da46c162c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26953f0bc75824a9d297ac71eae57f411f6ecbe6f819e994ab9c0da46c162c27->enter($__internal_26953f0bc75824a9d297ac71eae57f411f6ecbe6f819e994ab9c0da46c162c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_26953f0bc75824a9d297ac71eae57f411f6ecbe6f819e994ab9c0da46c162c27->leave($__internal_26953f0bc75824a9d297ac71eae57f411f6ecbe6f819e994ab9c0da46c162c27_prof);

        
        $__internal_fcc863c102ea818a65c7f1fd5498076112406859be0e332aeef065a0e02bc54f->leave($__internal_fcc863c102ea818a65c7f1fd5498076112406859be0e332aeef065a0e02bc54f_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_89004cc0055d1e5f7e7f2ec57380bc8110680335d918b2f673396d0cd6adc573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89004cc0055d1e5f7e7f2ec57380bc8110680335d918b2f673396d0cd6adc573->enter($__internal_89004cc0055d1e5f7e7f2ec57380bc8110680335d918b2f673396d0cd6adc573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_119b5d9b6caaabe2b238532016ca5946739017dc4d975520367593f355be40a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119b5d9b6caaabe2b238532016ca5946739017dc4d975520367593f355be40a2->enter($__internal_119b5d9b6caaabe2b238532016ca5946739017dc4d975520367593f355be40a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_119b5d9b6caaabe2b238532016ca5946739017dc4d975520367593f355be40a2->leave($__internal_119b5d9b6caaabe2b238532016ca5946739017dc4d975520367593f355be40a2_prof);

        
        $__internal_89004cc0055d1e5f7e7f2ec57380bc8110680335d918b2f673396d0cd6adc573->leave($__internal_89004cc0055d1e5f7e7f2ec57380bc8110680335d918b2f673396d0cd6adc573_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f6901a8fc60a3f06944ccf65fa1aef58ca5f6dfc11ea6962d2d342061264aa16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6901a8fc60a3f06944ccf65fa1aef58ca5f6dfc11ea6962d2d342061264aa16->enter($__internal_f6901a8fc60a3f06944ccf65fa1aef58ca5f6dfc11ea6962d2d342061264aa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_adfa2776dd0ed9b2df196f2f71e5fe57adaaefbc5b340d7f161fa3b92be52209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfa2776dd0ed9b2df196f2f71e5fe57adaaefbc5b340d7f161fa3b92be52209->enter($__internal_adfa2776dd0ed9b2df196f2f71e5fe57adaaefbc5b340d7f161fa3b92be52209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_adfa2776dd0ed9b2df196f2f71e5fe57adaaefbc5b340d7f161fa3b92be52209->leave($__internal_adfa2776dd0ed9b2df196f2f71e5fe57adaaefbc5b340d7f161fa3b92be52209_prof);

        
        $__internal_f6901a8fc60a3f06944ccf65fa1aef58ca5f6dfc11ea6962d2d342061264aa16->leave($__internal_f6901a8fc60a3f06944ccf65fa1aef58ca5f6dfc11ea6962d2d342061264aa16_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
