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
        $__internal_3589327a9a45362c53aafe9238fd0a8fbb16db53f3aeeee1d34a788f53aa97ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3589327a9a45362c53aafe9238fd0a8fbb16db53f3aeeee1d34a788f53aa97ea->enter($__internal_3589327a9a45362c53aafe9238fd0a8fbb16db53f3aeeee1d34a788f53aa97ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_40a06151d65c5e9af2d3b6adc8fca69ec363af7aa00d765cc4f5f355ae2841f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a06151d65c5e9af2d3b6adc8fca69ec363af7aa00d765cc4f5f355ae2841f2->enter($__internal_40a06151d65c5e9af2d3b6adc8fca69ec363af7aa00d765cc4f5f355ae2841f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_3589327a9a45362c53aafe9238fd0a8fbb16db53f3aeeee1d34a788f53aa97ea->leave($__internal_3589327a9a45362c53aafe9238fd0a8fbb16db53f3aeeee1d34a788f53aa97ea_prof);

        
        $__internal_40a06151d65c5e9af2d3b6adc8fca69ec363af7aa00d765cc4f5f355ae2841f2->leave($__internal_40a06151d65c5e9af2d3b6adc8fca69ec363af7aa00d765cc4f5f355ae2841f2_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8e78b9d145de6dc2bfd73a75cd835eb05125f6802fa3344bf28c125730ba70e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e78b9d145de6dc2bfd73a75cd835eb05125f6802fa3344bf28c125730ba70e3->enter($__internal_8e78b9d145de6dc2bfd73a75cd835eb05125f6802fa3344bf28c125730ba70e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fe91a836ec47e560c5b56d3bd1edcb3f7a03f1ac5ca75d33602548aa938807c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe91a836ec47e560c5b56d3bd1edcb3f7a03f1ac5ca75d33602548aa938807c3->enter($__internal_fe91a836ec47e560c5b56d3bd1edcb3f7a03f1ac5ca75d33602548aa938807c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_fe91a836ec47e560c5b56d3bd1edcb3f7a03f1ac5ca75d33602548aa938807c3->leave($__internal_fe91a836ec47e560c5b56d3bd1edcb3f7a03f1ac5ca75d33602548aa938807c3_prof);

        
        $__internal_8e78b9d145de6dc2bfd73a75cd835eb05125f6802fa3344bf28c125730ba70e3->leave($__internal_8e78b9d145de6dc2bfd73a75cd835eb05125f6802fa3344bf28c125730ba70e3_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b1be0927f5c129e6e0b79075b74e5712f83f852075d1702f5b252da232992aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1be0927f5c129e6e0b79075b74e5712f83f852075d1702f5b252da232992aed->enter($__internal_b1be0927f5c129e6e0b79075b74e5712f83f852075d1702f5b252da232992aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4b8a1c8bae1b1b17d8819b8a32cb8932ed663b7da69f3d0179b1b2e917eebfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8a1c8bae1b1b17d8819b8a32cb8932ed663b7da69f3d0179b1b2e917eebfd9->enter($__internal_4b8a1c8bae1b1b17d8819b8a32cb8932ed663b7da69f3d0179b1b2e917eebfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_4b8a1c8bae1b1b17d8819b8a32cb8932ed663b7da69f3d0179b1b2e917eebfd9->leave($__internal_4b8a1c8bae1b1b17d8819b8a32cb8932ed663b7da69f3d0179b1b2e917eebfd9_prof);

        
        $__internal_b1be0927f5c129e6e0b79075b74e5712f83f852075d1702f5b252da232992aed->leave($__internal_b1be0927f5c129e6e0b79075b74e5712f83f852075d1702f5b252da232992aed_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_326e479459f86c2feb08c8470e089a413a401d0c69815c5e9da33afbe0ad3ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e479459f86c2feb08c8470e089a413a401d0c69815c5e9da33afbe0ad3ae9->enter($__internal_326e479459f86c2feb08c8470e089a413a401d0c69815c5e9da33afbe0ad3ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_330922d110d910ab0d3c87bb2c8d94fd4af506ae36a6e6aa330940ddde1bd231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330922d110d910ab0d3c87bb2c8d94fd4af506ae36a6e6aa330940ddde1bd231->enter($__internal_330922d110d910ab0d3c87bb2c8d94fd4af506ae36a6e6aa330940ddde1bd231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_330922d110d910ab0d3c87bb2c8d94fd4af506ae36a6e6aa330940ddde1bd231->leave($__internal_330922d110d910ab0d3c87bb2c8d94fd4af506ae36a6e6aa330940ddde1bd231_prof);

        
        $__internal_326e479459f86c2feb08c8470e089a413a401d0c69815c5e9da33afbe0ad3ae9->leave($__internal_326e479459f86c2feb08c8470e089a413a401d0c69815c5e9da33afbe0ad3ae9_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_e5531057adc84bef091e66d582934405b66ce9ded4ced7fd0ba3397d36134667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5531057adc84bef091e66d582934405b66ce9ded4ced7fd0ba3397d36134667->enter($__internal_e5531057adc84bef091e66d582934405b66ce9ded4ced7fd0ba3397d36134667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_62dde0ff4c510043e332ebbe4a687f71e50de434aeb7c0bc61c57807e368c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dde0ff4c510043e332ebbe4a687f71e50de434aeb7c0bc61c57807e368c46c->enter($__internal_62dde0ff4c510043e332ebbe4a687f71e50de434aeb7c0bc61c57807e368c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_62dde0ff4c510043e332ebbe4a687f71e50de434aeb7c0bc61c57807e368c46c->leave($__internal_62dde0ff4c510043e332ebbe4a687f71e50de434aeb7c0bc61c57807e368c46c_prof);

        
        $__internal_e5531057adc84bef091e66d582934405b66ce9ded4ced7fd0ba3397d36134667->leave($__internal_e5531057adc84bef091e66d582934405b66ce9ded4ced7fd0ba3397d36134667_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_00c8e4d76212db719946fe739f74fecf394efaf0a5fb350de9c4cd446aa3dc87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c8e4d76212db719946fe739f74fecf394efaf0a5fb350de9c4cd446aa3dc87->enter($__internal_00c8e4d76212db719946fe739f74fecf394efaf0a5fb350de9c4cd446aa3dc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b6a0c8a55afc2f5ca87f17e4c8829a4b37b208a092aaf25ced079d5e0576be6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a0c8a55afc2f5ca87f17e4c8829a4b37b208a092aaf25ced079d5e0576be6e->enter($__internal_b6a0c8a55afc2f5ca87f17e4c8829a4b37b208a092aaf25ced079d5e0576be6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_b6a0c8a55afc2f5ca87f17e4c8829a4b37b208a092aaf25ced079d5e0576be6e->leave($__internal_b6a0c8a55afc2f5ca87f17e4c8829a4b37b208a092aaf25ced079d5e0576be6e_prof);

        
        $__internal_00c8e4d76212db719946fe739f74fecf394efaf0a5fb350de9c4cd446aa3dc87->leave($__internal_00c8e4d76212db719946fe739f74fecf394efaf0a5fb350de9c4cd446aa3dc87_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e6a4b7f68f7c6b81f8db46545d865339d0433f28187dfef967ae3b073197c052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a4b7f68f7c6b81f8db46545d865339d0433f28187dfef967ae3b073197c052->enter($__internal_e6a4b7f68f7c6b81f8db46545d865339d0433f28187dfef967ae3b073197c052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_bb4d9314c0df14b531183ff1bfda704506332b2f2d7ece6fc63bb40fdda1c3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4d9314c0df14b531183ff1bfda704506332b2f2d7ece6fc63bb40fdda1c3a1->enter($__internal_bb4d9314c0df14b531183ff1bfda704506332b2f2d7ece6fc63bb40fdda1c3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_bb4d9314c0df14b531183ff1bfda704506332b2f2d7ece6fc63bb40fdda1c3a1->leave($__internal_bb4d9314c0df14b531183ff1bfda704506332b2f2d7ece6fc63bb40fdda1c3a1_prof);

        
        $__internal_e6a4b7f68f7c6b81f8db46545d865339d0433f28187dfef967ae3b073197c052->leave($__internal_e6a4b7f68f7c6b81f8db46545d865339d0433f28187dfef967ae3b073197c052_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b341486cecd20020ca03dd53ae31fda5698d552d0b2ca51f596ce4956df6d685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b341486cecd20020ca03dd53ae31fda5698d552d0b2ca51f596ce4956df6d685->enter($__internal_b341486cecd20020ca03dd53ae31fda5698d552d0b2ca51f596ce4956df6d685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_03a1422b72cef28c40d023e15fd12858c0cc0a82d49809cf7eb97688bd719281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a1422b72cef28c40d023e15fd12858c0cc0a82d49809cf7eb97688bd719281->enter($__internal_03a1422b72cef28c40d023e15fd12858c0cc0a82d49809cf7eb97688bd719281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_03a1422b72cef28c40d023e15fd12858c0cc0a82d49809cf7eb97688bd719281->leave($__internal_03a1422b72cef28c40d023e15fd12858c0cc0a82d49809cf7eb97688bd719281_prof);

        
        $__internal_b341486cecd20020ca03dd53ae31fda5698d552d0b2ca51f596ce4956df6d685->leave($__internal_b341486cecd20020ca03dd53ae31fda5698d552d0b2ca51f596ce4956df6d685_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_abb09ad5b2a7306aa1cb00ea32f11a4078442bb285e85b0db382b5394020fc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb09ad5b2a7306aa1cb00ea32f11a4078442bb285e85b0db382b5394020fc3a->enter($__internal_abb09ad5b2a7306aa1cb00ea32f11a4078442bb285e85b0db382b5394020fc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e910bb5622fe22fb3b7fdb27f0f3a07ceaf5d0026eae7ecc5a54f520fa05d9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e910bb5622fe22fb3b7fdb27f0f3a07ceaf5d0026eae7ecc5a54f520fa05d9cf->enter($__internal_e910bb5622fe22fb3b7fdb27f0f3a07ceaf5d0026eae7ecc5a54f520fa05d9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_e910bb5622fe22fb3b7fdb27f0f3a07ceaf5d0026eae7ecc5a54f520fa05d9cf->leave($__internal_e910bb5622fe22fb3b7fdb27f0f3a07ceaf5d0026eae7ecc5a54f520fa05d9cf_prof);

        
        $__internal_abb09ad5b2a7306aa1cb00ea32f11a4078442bb285e85b0db382b5394020fc3a->leave($__internal_abb09ad5b2a7306aa1cb00ea32f11a4078442bb285e85b0db382b5394020fc3a_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
