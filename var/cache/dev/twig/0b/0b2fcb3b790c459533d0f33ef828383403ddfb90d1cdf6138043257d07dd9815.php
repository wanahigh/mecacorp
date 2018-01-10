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
        $__internal_e5671d433b59e01d86f78add3053ac8c95e2e0f0fb40dbbc365d855d4f03a3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5671d433b59e01d86f78add3053ac8c95e2e0f0fb40dbbc365d855d4f03a3bf->enter($__internal_e5671d433b59e01d86f78add3053ac8c95e2e0f0fb40dbbc365d855d4f03a3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_18ce48e818a6d01ce970afea6a28aedb94d1485a0994f53d979f3c78df04cafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ce48e818a6d01ce970afea6a28aedb94d1485a0994f53d979f3c78df04cafa->enter($__internal_18ce48e818a6d01ce970afea6a28aedb94d1485a0994f53d979f3c78df04cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_e5671d433b59e01d86f78add3053ac8c95e2e0f0fb40dbbc365d855d4f03a3bf->leave($__internal_e5671d433b59e01d86f78add3053ac8c95e2e0f0fb40dbbc365d855d4f03a3bf_prof);

        
        $__internal_18ce48e818a6d01ce970afea6a28aedb94d1485a0994f53d979f3c78df04cafa->leave($__internal_18ce48e818a6d01ce970afea6a28aedb94d1485a0994f53d979f3c78df04cafa_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_aa8b74b4bf5f554dab90e3648c5662226fc1a0798121a18622d5069b35e16c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8b74b4bf5f554dab90e3648c5662226fc1a0798121a18622d5069b35e16c6d->enter($__internal_aa8b74b4bf5f554dab90e3648c5662226fc1a0798121a18622d5069b35e16c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3e4e19b096e08dc2eb3766fbb01296722f0888f5669fcb09df0348d34e2bcc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4e19b096e08dc2eb3766fbb01296722f0888f5669fcb09df0348d34e2bcc72->enter($__internal_3e4e19b096e08dc2eb3766fbb01296722f0888f5669fcb09df0348d34e2bcc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_3e4e19b096e08dc2eb3766fbb01296722f0888f5669fcb09df0348d34e2bcc72->leave($__internal_3e4e19b096e08dc2eb3766fbb01296722f0888f5669fcb09df0348d34e2bcc72_prof);

        
        $__internal_aa8b74b4bf5f554dab90e3648c5662226fc1a0798121a18622d5069b35e16c6d->leave($__internal_aa8b74b4bf5f554dab90e3648c5662226fc1a0798121a18622d5069b35e16c6d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9ce2fe5f96c6700ecb299e713e84e260c7d01e6b3fffa41ac92cd3e41fcb702f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce2fe5f96c6700ecb299e713e84e260c7d01e6b3fffa41ac92cd3e41fcb702f->enter($__internal_9ce2fe5f96c6700ecb299e713e84e260c7d01e6b3fffa41ac92cd3e41fcb702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a23f7b304f55fb886ffabf83f631a01c4d0f6fa38718b861ababeeec9b6dba4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23f7b304f55fb886ffabf83f631a01c4d0f6fa38718b861ababeeec9b6dba4e->enter($__internal_a23f7b304f55fb886ffabf83f631a01c4d0f6fa38718b861ababeeec9b6dba4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_a23f7b304f55fb886ffabf83f631a01c4d0f6fa38718b861ababeeec9b6dba4e->leave($__internal_a23f7b304f55fb886ffabf83f631a01c4d0f6fa38718b861ababeeec9b6dba4e_prof);

        
        $__internal_9ce2fe5f96c6700ecb299e713e84e260c7d01e6b3fffa41ac92cd3e41fcb702f->leave($__internal_9ce2fe5f96c6700ecb299e713e84e260c7d01e6b3fffa41ac92cd3e41fcb702f_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6fca06af00b288748b165ae7ccc67887157d42b6dc4dc1b643936ad5af5b4c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fca06af00b288748b165ae7ccc67887157d42b6dc4dc1b643936ad5af5b4c9f->enter($__internal_6fca06af00b288748b165ae7ccc67887157d42b6dc4dc1b643936ad5af5b4c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b57ac9272b4b9c674f9ba794682a12858d9e191fed7effbfbcf6eed0f7dd54fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57ac9272b4b9c674f9ba794682a12858d9e191fed7effbfbcf6eed0f7dd54fc->enter($__internal_b57ac9272b4b9c674f9ba794682a12858d9e191fed7effbfbcf6eed0f7dd54fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b57ac9272b4b9c674f9ba794682a12858d9e191fed7effbfbcf6eed0f7dd54fc->leave($__internal_b57ac9272b4b9c674f9ba794682a12858d9e191fed7effbfbcf6eed0f7dd54fc_prof);

        
        $__internal_6fca06af00b288748b165ae7ccc67887157d42b6dc4dc1b643936ad5af5b4c9f->leave($__internal_6fca06af00b288748b165ae7ccc67887157d42b6dc4dc1b643936ad5af5b4c9f_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_40f8a8874765ffc2aca69b5ec87250b9e72f4f54e5c6a5f7f5abe8711d13e52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f8a8874765ffc2aca69b5ec87250b9e72f4f54e5c6a5f7f5abe8711d13e52b->enter($__internal_40f8a8874765ffc2aca69b5ec87250b9e72f4f54e5c6a5f7f5abe8711d13e52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_7fb82d90d6b9a8c9b3c023a731b90b598f0a1389b197bd92093b23ee0b166487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb82d90d6b9a8c9b3c023a731b90b598f0a1389b197bd92093b23ee0b166487->enter($__internal_7fb82d90d6b9a8c9b3c023a731b90b598f0a1389b197bd92093b23ee0b166487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_7fb82d90d6b9a8c9b3c023a731b90b598f0a1389b197bd92093b23ee0b166487->leave($__internal_7fb82d90d6b9a8c9b3c023a731b90b598f0a1389b197bd92093b23ee0b166487_prof);

        
        $__internal_40f8a8874765ffc2aca69b5ec87250b9e72f4f54e5c6a5f7f5abe8711d13e52b->leave($__internal_40f8a8874765ffc2aca69b5ec87250b9e72f4f54e5c6a5f7f5abe8711d13e52b_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0e4b2669a269633be8b46855d7fc5def72f1c4021a5327e99858cc3cb08d47ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4b2669a269633be8b46855d7fc5def72f1c4021a5327e99858cc3cb08d47ab->enter($__internal_0e4b2669a269633be8b46855d7fc5def72f1c4021a5327e99858cc3cb08d47ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9eb1875d1749b71ffc503fe6d997a0d441db38a98997e8ce730a431f82aaad03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb1875d1749b71ffc503fe6d997a0d441db38a98997e8ce730a431f82aaad03->enter($__internal_9eb1875d1749b71ffc503fe6d997a0d441db38a98997e8ce730a431f82aaad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9eb1875d1749b71ffc503fe6d997a0d441db38a98997e8ce730a431f82aaad03->leave($__internal_9eb1875d1749b71ffc503fe6d997a0d441db38a98997e8ce730a431f82aaad03_prof);

        
        $__internal_0e4b2669a269633be8b46855d7fc5def72f1c4021a5327e99858cc3cb08d47ab->leave($__internal_0e4b2669a269633be8b46855d7fc5def72f1c4021a5327e99858cc3cb08d47ab_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0e3f5e8915d90d52ecaa1d2a1b25347b6011a55b66679a75636747ab52b45acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3f5e8915d90d52ecaa1d2a1b25347b6011a55b66679a75636747ab52b45acc->enter($__internal_0e3f5e8915d90d52ecaa1d2a1b25347b6011a55b66679a75636747ab52b45acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_533e859838ed9e968c1ff8af9b00d0c8a6a2be26f7d986b9ff0ddeec402b10cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533e859838ed9e968c1ff8af9b00d0c8a6a2be26f7d986b9ff0ddeec402b10cd->enter($__internal_533e859838ed9e968c1ff8af9b00d0c8a6a2be26f7d986b9ff0ddeec402b10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_533e859838ed9e968c1ff8af9b00d0c8a6a2be26f7d986b9ff0ddeec402b10cd->leave($__internal_533e859838ed9e968c1ff8af9b00d0c8a6a2be26f7d986b9ff0ddeec402b10cd_prof);

        
        $__internal_0e3f5e8915d90d52ecaa1d2a1b25347b6011a55b66679a75636747ab52b45acc->leave($__internal_0e3f5e8915d90d52ecaa1d2a1b25347b6011a55b66679a75636747ab52b45acc_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1a80b30c139a2e6f59a4d7dab98ca9a6a3da655702d9e6af8b7868ba74c53832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a80b30c139a2e6f59a4d7dab98ca9a6a3da655702d9e6af8b7868ba74c53832->enter($__internal_1a80b30c139a2e6f59a4d7dab98ca9a6a3da655702d9e6af8b7868ba74c53832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_32c93500fd37253e5b5a26f77c63df9d164e6471f06ceda737f1c9120b4312d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c93500fd37253e5b5a26f77c63df9d164e6471f06ceda737f1c9120b4312d5->enter($__internal_32c93500fd37253e5b5a26f77c63df9d164e6471f06ceda737f1c9120b4312d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_32c93500fd37253e5b5a26f77c63df9d164e6471f06ceda737f1c9120b4312d5->leave($__internal_32c93500fd37253e5b5a26f77c63df9d164e6471f06ceda737f1c9120b4312d5_prof);

        
        $__internal_1a80b30c139a2e6f59a4d7dab98ca9a6a3da655702d9e6af8b7868ba74c53832->leave($__internal_1a80b30c139a2e6f59a4d7dab98ca9a6a3da655702d9e6af8b7868ba74c53832_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b29cdfdf85c65e821188f6fc58482612994def201217b1db6c8180134dbc8e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29cdfdf85c65e821188f6fc58482612994def201217b1db6c8180134dbc8e0e->enter($__internal_b29cdfdf85c65e821188f6fc58482612994def201217b1db6c8180134dbc8e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4dc3654d21b4a66566eecde624d8bbf30f1cba99123486dbbed265d0d3932ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc3654d21b4a66566eecde624d8bbf30f1cba99123486dbbed265d0d3932ef4->enter($__internal_4dc3654d21b4a66566eecde624d8bbf30f1cba99123486dbbed265d0d3932ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4dc3654d21b4a66566eecde624d8bbf30f1cba99123486dbbed265d0d3932ef4->leave($__internal_4dc3654d21b4a66566eecde624d8bbf30f1cba99123486dbbed265d0d3932ef4_prof);

        
        $__internal_b29cdfdf85c65e821188f6fc58482612994def201217b1db6c8180134dbc8e0e->leave($__internal_b29cdfdf85c65e821188f6fc58482612994def201217b1db6c8180134dbc8e0e_prof);

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
