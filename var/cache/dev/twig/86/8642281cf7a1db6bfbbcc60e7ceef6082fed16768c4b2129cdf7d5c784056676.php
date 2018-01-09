<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_bfe3a95aef9115a6b01e39a46d5ee6673ea48d86aad79a2250547130ec39fc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_840dbad69fdebb11ce4179b5cd6355ee3e6b831aa0da4a840c04295c3b25af0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840dbad69fdebb11ce4179b5cd6355ee3e6b831aa0da4a840c04295c3b25af0c->enter($__internal_840dbad69fdebb11ce4179b5cd6355ee3e6b831aa0da4a840c04295c3b25af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_6e9e43d6b617c639243c9f5671f517c2966776d0d6de76b89bf9bac1cf8b7bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9e43d6b617c639243c9f5671f517c2966776d0d6de76b89bf9bac1cf8b7bc0->enter($__internal_6e9e43d6b617c639243c9f5671f517c2966776d0d6de76b89bf9bac1cf8b7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_840dbad69fdebb11ce4179b5cd6355ee3e6b831aa0da4a840c04295c3b25af0c->leave($__internal_840dbad69fdebb11ce4179b5cd6355ee3e6b831aa0da4a840c04295c3b25af0c_prof);

        
        $__internal_6e9e43d6b617c639243c9f5671f517c2966776d0d6de76b89bf9bac1cf8b7bc0->leave($__internal_6e9e43d6b617c639243c9f5671f517c2966776d0d6de76b89bf9bac1cf8b7bc0_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5ef8fbc410a7f5add24ba31b2092b14638742043bc1d2c0b6673ad23d71be649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef8fbc410a7f5add24ba31b2092b14638742043bc1d2c0b6673ad23d71be649->enter($__internal_5ef8fbc410a7f5add24ba31b2092b14638742043bc1d2c0b6673ad23d71be649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_3abaf98bead9171fe222e577e173423cfd4cd857964de855a4174f0398fc3333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abaf98bead9171fe222e577e173423cfd4cd857964de855a4174f0398fc3333->enter($__internal_3abaf98bead9171fe222e577e173423cfd4cd857964de855a4174f0398fc3333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_3abaf98bead9171fe222e577e173423cfd4cd857964de855a4174f0398fc3333->leave($__internal_3abaf98bead9171fe222e577e173423cfd4cd857964de855a4174f0398fc3333_prof);

        
        $__internal_5ef8fbc410a7f5add24ba31b2092b14638742043bc1d2c0b6673ad23d71be649->leave($__internal_5ef8fbc410a7f5add24ba31b2092b14638742043bc1d2c0b6673ad23d71be649_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_16fa2af54daa5e0ea7c1bb876ce404a990a5334cf7923a850abd5d11c7255e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fa2af54daa5e0ea7c1bb876ce404a990a5334cf7923a850abd5d11c7255e4a->enter($__internal_16fa2af54daa5e0ea7c1bb876ce404a990a5334cf7923a850abd5d11c7255e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4fd6b00098edfe5bc6e8e7013b83d30d0f3c727ad8d2f004e348a81727137384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd6b00098edfe5bc6e8e7013b83d30d0f3c727ad8d2f004e348a81727137384->enter($__internal_4fd6b00098edfe5bc6e8e7013b83d30d0f3c727ad8d2f004e348a81727137384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4fd6b00098edfe5bc6e8e7013b83d30d0f3c727ad8d2f004e348a81727137384->leave($__internal_4fd6b00098edfe5bc6e8e7013b83d30d0f3c727ad8d2f004e348a81727137384_prof);

        
        $__internal_16fa2af54daa5e0ea7c1bb876ce404a990a5334cf7923a850abd5d11c7255e4a->leave($__internal_16fa2af54daa5e0ea7c1bb876ce404a990a5334cf7923a850abd5d11c7255e4a_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_30932b853d6d24caa7b53d8c26b6aea86524aceefadb3660b566f35fd1d14d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30932b853d6d24caa7b53d8c26b6aea86524aceefadb3660b566f35fd1d14d77->enter($__internal_30932b853d6d24caa7b53d8c26b6aea86524aceefadb3660b566f35fd1d14d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7f284132bc32d90813086a80f80c6c5b835a049c1fa4de5746097594698e652a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f284132bc32d90813086a80f80c6c5b835a049c1fa4de5746097594698e652a->enter($__internal_7f284132bc32d90813086a80f80c6c5b835a049c1fa4de5746097594698e652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_7f284132bc32d90813086a80f80c6c5b835a049c1fa4de5746097594698e652a->leave($__internal_7f284132bc32d90813086a80f80c6c5b835a049c1fa4de5746097594698e652a_prof);

        
        $__internal_30932b853d6d24caa7b53d8c26b6aea86524aceefadb3660b566f35fd1d14d77->leave($__internal_30932b853d6d24caa7b53d8c26b6aea86524aceefadb3660b566f35fd1d14d77_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_183a4004ce5558633e0cbfbfbc085bf8760bfdc1c2071610894ae663059b3012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183a4004ce5558633e0cbfbfbc085bf8760bfdc1c2071610894ae663059b3012->enter($__internal_183a4004ce5558633e0cbfbfbc085bf8760bfdc1c2071610894ae663059b3012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_da4aa4948fbb7d169c6d5e0a7bc5f1b603859db13bf3bdb382bb22fc6031a8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4aa4948fbb7d169c6d5e0a7bc5f1b603859db13bf3bdb382bb22fc6031a8ff->enter($__internal_da4aa4948fbb7d169c6d5e0a7bc5f1b603859db13bf3bdb382bb22fc6031a8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 28, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 44
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_da4aa4948fbb7d169c6d5e0a7bc5f1b603859db13bf3bdb382bb22fc6031a8ff->leave($__internal_da4aa4948fbb7d169c6d5e0a7bc5f1b603859db13bf3bdb382bb22fc6031a8ff_prof);

        
        $__internal_183a4004ce5558633e0cbfbfbc085bf8760bfdc1c2071610894ae663059b3012->leave($__internal_183a4004ce5558633e0cbfbfbc085bf8760bfdc1c2071610894ae663059b3012_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_57708e70a9dc8f31658a8918e3b22df1a87533e062b4973584e5d362d87d2122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57708e70a9dc8f31658a8918e3b22df1a87533e062b4973584e5d362d87d2122->enter($__internal_57708e70a9dc8f31658a8918e3b22df1a87533e062b4973584e5d362d87d2122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7abe29e294e65da3c42b9217f31bbf409e16ca6641930395bdb1f8b742289dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abe29e294e65da3c42b9217f31bbf409e16ca6641930395bdb1f8b742289dbd->enter($__internal_7abe29e294e65da3c42b9217f31bbf409e16ca6641930395bdb1f8b742289dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7abe29e294e65da3c42b9217f31bbf409e16ca6641930395bdb1f8b742289dbd->leave($__internal_7abe29e294e65da3c42b9217f31bbf409e16ca6641930395bdb1f8b742289dbd_prof);

        
        $__internal_57708e70a9dc8f31658a8918e3b22df1a87533e062b4973584e5d362d87d2122->leave($__internal_57708e70a9dc8f31658a8918e3b22df1a87533e062b4973584e5d362d87d2122_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_85e95a0f56df2fb8e6407b499c91c031a8a6641ecda487f9cae7264b7529eae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e95a0f56df2fb8e6407b499c91c031a8a6641ecda487f9cae7264b7529eae3->enter($__internal_85e95a0f56df2fb8e6407b499c91c031a8a6641ecda487f9cae7264b7529eae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9189a7320970e9a9fdc9651171b1bbfbb0ab849436a44cfc6918b0ba221c4111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9189a7320970e9a9fdc9651171b1bbfbb0ab849436a44cfc6918b0ba221c4111->enter($__internal_9189a7320970e9a9fdc9651171b1bbfbb0ab849436a44cfc6918b0ba221c4111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9189a7320970e9a9fdc9651171b1bbfbb0ab849436a44cfc6918b0ba221c4111->leave($__internal_9189a7320970e9a9fdc9651171b1bbfbb0ab849436a44cfc6918b0ba221c4111_prof);

        
        $__internal_85e95a0f56df2fb8e6407b499c91c031a8a6641ecda487f9cae7264b7529eae3->leave($__internal_85e95a0f56df2fb8e6407b499c91c031a8a6641ecda487f9cae7264b7529eae3_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_1a56a73e7bd6e035dd705bd7d9d248e3db4c4c8c04ef71cd3307acf89170f21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a56a73e7bd6e035dd705bd7d9d248e3db4c4c8c04ef71cd3307acf89170f21a->enter($__internal_1a56a73e7bd6e035dd705bd7d9d248e3db4c4c8c04ef71cd3307acf89170f21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_441bb9ccf9bfd92478007ffc7ca5d0c01ab2b5330c11718fe2ecddc42a77918e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441bb9ccf9bfd92478007ffc7ca5d0c01ab2b5330c11718fe2ecddc42a77918e->enter($__internal_441bb9ccf9bfd92478007ffc7ca5d0c01ab2b5330c11718fe2ecddc42a77918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 62, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 62, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_441bb9ccf9bfd92478007ffc7ca5d0c01ab2b5330c11718fe2ecddc42a77918e->leave($__internal_441bb9ccf9bfd92478007ffc7ca5d0c01ab2b5330c11718fe2ecddc42a77918e_prof);

        
        $__internal_1a56a73e7bd6e035dd705bd7d9d248e3db4c4c8c04ef71cd3307acf89170f21a->leave($__internal_1a56a73e7bd6e035dd705bd7d9d248e3db4c4c8c04ef71cd3307acf89170f21a_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_41aadcde6a4f58d915c39367fb0e8f4c2e066e0971d6972e4b3fc05c758e75bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41aadcde6a4f58d915c39367fb0e8f4c2e066e0971d6972e4b3fc05c758e75bf->enter($__internal_41aadcde6a4f58d915c39367fb0e8f4c2e066e0971d6972e4b3fc05c758e75bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6901f6ac8034c7c12340f65c018047b9dd15d032493afec686fe376add808fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6901f6ac8034c7c12340f65c018047b9dd15d032493afec686fe376add808fd9->enter($__internal_6901f6ac8034c7c12340f65c018047b9dd15d032493afec686fe376add808fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 74, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6901f6ac8034c7c12340f65c018047b9dd15d032493afec686fe376add808fd9->leave($__internal_6901f6ac8034c7c12340f65c018047b9dd15d032493afec686fe376add808fd9_prof);

        
        $__internal_41aadcde6a4f58d915c39367fb0e8f4c2e066e0971d6972e4b3fc05c758e75bf->leave($__internal_41aadcde6a4f58d915c39367fb0e8f4c2e066e0971d6972e4b3fc05c758e75bf_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_52f9e5762b7ee48cf3811e204bdef52e0369736d6eb6ea71e1ea5ddb16da4549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f9e5762b7ee48cf3811e204bdef52e0369736d6eb6ea71e1ea5ddb16da4549->enter($__internal_52f9e5762b7ee48cf3811e204bdef52e0369736d6eb6ea71e1ea5ddb16da4549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7bf1ecc6bd6c1bc9aa8aad21eae01168f7759286bff9d035c36381edb84bfd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf1ecc6bd6c1bc9aa8aad21eae01168f7759286bff9d035c36381edb84bfd7f->enter($__internal_7bf1ecc6bd6c1bc9aa8aad21eae01168f7759286bff9d035c36381edb84bfd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7bf1ecc6bd6c1bc9aa8aad21eae01168f7759286bff9d035c36381edb84bfd7f->leave($__internal_7bf1ecc6bd6c1bc9aa8aad21eae01168f7759286bff9d035c36381edb84bfd7f_prof);

        
        $__internal_52f9e5762b7ee48cf3811e204bdef52e0369736d6eb6ea71e1ea5ddb16da4549->leave($__internal_52f9e5762b7ee48cf3811e204bdef52e0369736d6eb6ea71e1ea5ddb16da4549_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e809dc0d27c9990a1d0254050e06d58e9fb5870e6ef000cb890b1d0e1400cf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e809dc0d27c9990a1d0254050e06d58e9fb5870e6ef000cb890b1d0e1400cf3b->enter($__internal_e809dc0d27c9990a1d0254050e06d58e9fb5870e6ef000cb890b1d0e1400cf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2e4273a51d4e4b63978ce75f403597c8815f41bdcddf75b1af18894ff7a948e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4273a51d4e4b63978ce75f403597c8815f41bdcddf75b1af18894ff7a948e2->enter($__internal_2e4273a51d4e4b63978ce75f403597c8815f41bdcddf75b1af18894ff7a948e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_2e4273a51d4e4b63978ce75f403597c8815f41bdcddf75b1af18894ff7a948e2->leave($__internal_2e4273a51d4e4b63978ce75f403597c8815f41bdcddf75b1af18894ff7a948e2_prof);

        
        $__internal_e809dc0d27c9990a1d0254050e06d58e9fb5870e6ef000cb890b1d0e1400cf3b->leave($__internal_e809dc0d27c9990a1d0254050e06d58e9fb5870e6ef000cb890b1d0e1400cf3b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
