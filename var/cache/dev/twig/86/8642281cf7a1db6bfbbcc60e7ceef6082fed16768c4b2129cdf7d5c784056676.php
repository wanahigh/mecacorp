<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_bfe3a95aef9115a6b01e39a46d5ee6673ea48d86aad79a2250547130ec39fc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
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
        $__internal_72d317bfee47ad732bd26959ae846cc3a2ffff96d92e553a06612dc958592dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d317bfee47ad732bd26959ae846cc3a2ffff96d92e553a06612dc958592dc8->enter($__internal_72d317bfee47ad732bd26959ae846cc3a2ffff96d92e553a06612dc958592dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0e0b56f4de6d17299f5b47a4e5fc19ab2cacd0fb7cb2c23f0e11ef35150fa9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0b56f4de6d17299f5b47a4e5fc19ab2cacd0fb7cb2c23f0e11ef35150fa9bd->enter($__internal_0e0b56f4de6d17299f5b47a4e5fc19ab2cacd0fb7cb2c23f0e11ef35150fa9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_72d317bfee47ad732bd26959ae846cc3a2ffff96d92e553a06612dc958592dc8->leave($__internal_72d317bfee47ad732bd26959ae846cc3a2ffff96d92e553a06612dc958592dc8_prof);

        
        $__internal_0e0b56f4de6d17299f5b47a4e5fc19ab2cacd0fb7cb2c23f0e11ef35150fa9bd->leave($__internal_0e0b56f4de6d17299f5b47a4e5fc19ab2cacd0fb7cb2c23f0e11ef35150fa9bd_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3b2158bdb2f769da696b1c62671e857ed8b4f25eff5dce912271b367bad359e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2158bdb2f769da696b1c62671e857ed8b4f25eff5dce912271b367bad359e9->enter($__internal_3b2158bdb2f769da696b1c62671e857ed8b4f25eff5dce912271b367bad359e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_399489086e36fe998dcfd814831cbf95220476c1b3e944f014afae31adcd5997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399489086e36fe998dcfd814831cbf95220476c1b3e944f014afae31adcd5997->enter($__internal_399489086e36fe998dcfd814831cbf95220476c1b3e944f014afae31adcd5997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_399489086e36fe998dcfd814831cbf95220476c1b3e944f014afae31adcd5997->leave($__internal_399489086e36fe998dcfd814831cbf95220476c1b3e944f014afae31adcd5997_prof);

        
        $__internal_3b2158bdb2f769da696b1c62671e857ed8b4f25eff5dce912271b367bad359e9->leave($__internal_3b2158bdb2f769da696b1c62671e857ed8b4f25eff5dce912271b367bad359e9_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_415da44ba1938e6819a24609d40bc1ab74a6dc3b7888f7feac1654a130d56e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415da44ba1938e6819a24609d40bc1ab74a6dc3b7888f7feac1654a130d56e13->enter($__internal_415da44ba1938e6819a24609d40bc1ab74a6dc3b7888f7feac1654a130d56e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9d18f668edee29c847370b6c30a31e20480d8d6172992d29d91b20ff42cb0690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d18f668edee29c847370b6c30a31e20480d8d6172992d29d91b20ff42cb0690->enter($__internal_9d18f668edee29c847370b6c30a31e20480d8d6172992d29d91b20ff42cb0690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9d18f668edee29c847370b6c30a31e20480d8d6172992d29d91b20ff42cb0690->leave($__internal_9d18f668edee29c847370b6c30a31e20480d8d6172992d29d91b20ff42cb0690_prof);

        
        $__internal_415da44ba1938e6819a24609d40bc1ab74a6dc3b7888f7feac1654a130d56e13->leave($__internal_415da44ba1938e6819a24609d40bc1ab74a6dc3b7888f7feac1654a130d56e13_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a1489b89b36043c547c599587dd814d5ae0dacf504e65908549c33d171a6992a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1489b89b36043c547c599587dd814d5ae0dacf504e65908549c33d171a6992a->enter($__internal_a1489b89b36043c547c599587dd814d5ae0dacf504e65908549c33d171a6992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d20fd8e457f44e0ab2b1c7f6074b7f50ea84a1f66c182fd180933fc721ed5e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20fd8e457f44e0ab2b1c7f6074b7f50ea84a1f66c182fd180933fc721ed5e26->enter($__internal_d20fd8e457f44e0ab2b1c7f6074b7f50ea84a1f66c182fd180933fc721ed5e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_d20fd8e457f44e0ab2b1c7f6074b7f50ea84a1f66c182fd180933fc721ed5e26->leave($__internal_d20fd8e457f44e0ab2b1c7f6074b7f50ea84a1f66c182fd180933fc721ed5e26_prof);

        
        $__internal_a1489b89b36043c547c599587dd814d5ae0dacf504e65908549c33d171a6992a->leave($__internal_a1489b89b36043c547c599587dd814d5ae0dacf504e65908549c33d171a6992a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4c91054aaeb5aba8e1e9346f7889a5cb24de9d1058caa84d0d69f8488071fbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c91054aaeb5aba8e1e9346f7889a5cb24de9d1058caa84d0d69f8488071fbbc->enter($__internal_4c91054aaeb5aba8e1e9346f7889a5cb24de9d1058caa84d0d69f8488071fbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_13ef19f3ba492662121e22adb7ddaac17b88f49b27dc951ac5af671897f1d30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ef19f3ba492662121e22adb7ddaac17b88f49b27dc951ac5af671897f1d30d->enter($__internal_13ef19f3ba492662121e22adb7ddaac17b88f49b27dc951ac5af671897f1d30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_13ef19f3ba492662121e22adb7ddaac17b88f49b27dc951ac5af671897f1d30d->leave($__internal_13ef19f3ba492662121e22adb7ddaac17b88f49b27dc951ac5af671897f1d30d_prof);

        
        $__internal_4c91054aaeb5aba8e1e9346f7889a5cb24de9d1058caa84d0d69f8488071fbbc->leave($__internal_4c91054aaeb5aba8e1e9346f7889a5cb24de9d1058caa84d0d69f8488071fbbc_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ee8367b30d0644cb95698f13772dae1ff57d9e43fee8c28577dd9240907499c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8367b30d0644cb95698f13772dae1ff57d9e43fee8c28577dd9240907499c0->enter($__internal_ee8367b30d0644cb95698f13772dae1ff57d9e43fee8c28577dd9240907499c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c1ad002715eff6a7905d30270a48c20b81c3e7a301a5d1a6429550fc25151ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ad002715eff6a7905d30270a48c20b81c3e7a301a5d1a6429550fc25151ee0->enter($__internal_c1ad002715eff6a7905d30270a48c20b81c3e7a301a5d1a6429550fc25151ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c1ad002715eff6a7905d30270a48c20b81c3e7a301a5d1a6429550fc25151ee0->leave($__internal_c1ad002715eff6a7905d30270a48c20b81c3e7a301a5d1a6429550fc25151ee0_prof);

        
        $__internal_ee8367b30d0644cb95698f13772dae1ff57d9e43fee8c28577dd9240907499c0->leave($__internal_ee8367b30d0644cb95698f13772dae1ff57d9e43fee8c28577dd9240907499c0_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_678f986414a1deb5fe05d9992b63d2cff0bb895b0df823e63eba50ca26bb9b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678f986414a1deb5fe05d9992b63d2cff0bb895b0df823e63eba50ca26bb9b3f->enter($__internal_678f986414a1deb5fe05d9992b63d2cff0bb895b0df823e63eba50ca26bb9b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_500352ce2ef9bb52afa551be362d80ecf04ff2fadc6ece3c7b690316da5ecf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500352ce2ef9bb52afa551be362d80ecf04ff2fadc6ece3c7b690316da5ecf15->enter($__internal_500352ce2ef9bb52afa551be362d80ecf04ff2fadc6ece3c7b690316da5ecf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_500352ce2ef9bb52afa551be362d80ecf04ff2fadc6ece3c7b690316da5ecf15->leave($__internal_500352ce2ef9bb52afa551be362d80ecf04ff2fadc6ece3c7b690316da5ecf15_prof);

        
        $__internal_678f986414a1deb5fe05d9992b63d2cff0bb895b0df823e63eba50ca26bb9b3f->leave($__internal_678f986414a1deb5fe05d9992b63d2cff0bb895b0df823e63eba50ca26bb9b3f_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a8a648114bcb5a9ef193d58e66ed0e43d308fc5419da6d23c3973e43ce4e52ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a648114bcb5a9ef193d58e66ed0e43d308fc5419da6d23c3973e43ce4e52ac->enter($__internal_a8a648114bcb5a9ef193d58e66ed0e43d308fc5419da6d23c3973e43ce4e52ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_26610ffac08c039db6f490a3c6b8058ec5bc5495a25c7b88d89fefaeed945ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26610ffac08c039db6f490a3c6b8058ec5bc5495a25c7b88d89fefaeed945ae7->enter($__internal_26610ffac08c039db6f490a3c6b8058ec5bc5495a25c7b88d89fefaeed945ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_26610ffac08c039db6f490a3c6b8058ec5bc5495a25c7b88d89fefaeed945ae7->leave($__internal_26610ffac08c039db6f490a3c6b8058ec5bc5495a25c7b88d89fefaeed945ae7_prof);

        
        $__internal_a8a648114bcb5a9ef193d58e66ed0e43d308fc5419da6d23c3973e43ce4e52ac->leave($__internal_a8a648114bcb5a9ef193d58e66ed0e43d308fc5419da6d23c3973e43ce4e52ac_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5b44c85ea1c7bc99147d1901833947d5cfde71bad937c3e5a5f762e5af75412b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b44c85ea1c7bc99147d1901833947d5cfde71bad937c3e5a5f762e5af75412b->enter($__internal_5b44c85ea1c7bc99147d1901833947d5cfde71bad937c3e5a5f762e5af75412b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bdc92c48621b71e8ae762b10c1925cb16a4de6ff156ea42bc12b0c756658f591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc92c48621b71e8ae762b10c1925cb16a4de6ff156ea42bc12b0c756658f591->enter($__internal_bdc92c48621b71e8ae762b10c1925cb16a4de6ff156ea42bc12b0c756658f591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_bdc92c48621b71e8ae762b10c1925cb16a4de6ff156ea42bc12b0c756658f591->leave($__internal_bdc92c48621b71e8ae762b10c1925cb16a4de6ff156ea42bc12b0c756658f591_prof);

        
        $__internal_5b44c85ea1c7bc99147d1901833947d5cfde71bad937c3e5a5f762e5af75412b->leave($__internal_5b44c85ea1c7bc99147d1901833947d5cfde71bad937c3e5a5f762e5af75412b_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_521d7aad28ca6d23e7d06a323bad35a3b3bab1d3fc2a6bc588c3eada1df34d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521d7aad28ca6d23e7d06a323bad35a3b3bab1d3fc2a6bc588c3eada1df34d1e->enter($__internal_521d7aad28ca6d23e7d06a323bad35a3b3bab1d3fc2a6bc588c3eada1df34d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2d40b789cf5cfb61e9ed2df8ca7145f31ea11287e9689142461f6142d055b54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d40b789cf5cfb61e9ed2df8ca7145f31ea11287e9689142461f6142d055b54b->enter($__internal_2d40b789cf5cfb61e9ed2df8ca7145f31ea11287e9689142461f6142d055b54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_2d40b789cf5cfb61e9ed2df8ca7145f31ea11287e9689142461f6142d055b54b->leave($__internal_2d40b789cf5cfb61e9ed2df8ca7145f31ea11287e9689142461f6142d055b54b_prof);

        
        $__internal_521d7aad28ca6d23e7d06a323bad35a3b3bab1d3fc2a6bc588c3eada1df34d1e->leave($__internal_521d7aad28ca6d23e7d06a323bad35a3b3bab1d3fc2a6bc588c3eada1df34d1e_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_fa46b34d819289d5b7288fd24696b576ddfed088cc97e50b35b105ddea6ebe22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa46b34d819289d5b7288fd24696b576ddfed088cc97e50b35b105ddea6ebe22->enter($__internal_fa46b34d819289d5b7288fd24696b576ddfed088cc97e50b35b105ddea6ebe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5e9c603ce2055f101a971a11281420a5019d9d259655a5b713a720c937626da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9c603ce2055f101a971a11281420a5019d9d259655a5b713a720c937626da3->enter($__internal_5e9c603ce2055f101a971a11281420a5019d9d259655a5b713a720c937626da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_5e9c603ce2055f101a971a11281420a5019d9d259655a5b713a720c937626da3->leave($__internal_5e9c603ce2055f101a971a11281420a5019d9d259655a5b713a720c937626da3_prof);

        
        $__internal_fa46b34d819289d5b7288fd24696b576ddfed088cc97e50b35b105ddea6ebe22->leave($__internal_fa46b34d819289d5b7288fd24696b576ddfed088cc97e50b35b105ddea6ebe22_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
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
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
