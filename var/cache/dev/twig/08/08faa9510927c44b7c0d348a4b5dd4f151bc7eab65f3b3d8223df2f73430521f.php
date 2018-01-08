<?php

/* ::materialize_layout.html.twig */
class __TwigTemplate_3d7d3c3a85178511a3fe9230684c6c76ba3549fb17cc3a4b071e33dd802a46e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "::materialize_layout.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ae1d6ed6227923d9ec1c72641e7e1ebbc452ef60b61da2b494579563ffcc4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae1d6ed6227923d9ec1c72641e7e1ebbc452ef60b61da2b494579563ffcc4a1->enter($__internal_8ae1d6ed6227923d9ec1c72641e7e1ebbc452ef60b61da2b494579563ffcc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materialize_layout.html.twig"));

        $__internal_420ae59c2c0e3e396694dab4f86ac93ba4303d40d23401fa43e0a30853adb38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420ae59c2c0e3e396694dab4f86ac93ba4303d40d23401fa43e0a30853adb38b->enter($__internal_420ae59c2c0e3e396694dab4f86ac93ba4303d40d23401fa43e0a30853adb38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materialize_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae1d6ed6227923d9ec1c72641e7e1ebbc452ef60b61da2b494579563ffcc4a1->leave($__internal_8ae1d6ed6227923d9ec1c72641e7e1ebbc452ef60b61da2b494579563ffcc4a1_prof);

        
        $__internal_420ae59c2c0e3e396694dab4f86ac93ba4303d40d23401fa43e0a30853adb38b->leave($__internal_420ae59c2c0e3e396694dab4f86ac93ba4303d40d23401fa43e0a30853adb38b_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bdeee280e42dfc95fcc2009227827885ec5c2a0020afc701f98c00643788b237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdeee280e42dfc95fcc2009227827885ec5c2a0020afc701f98c00643788b237->enter($__internal_bdeee280e42dfc95fcc2009227827885ec5c2a0020afc701f98c00643788b237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ae16ad6f2a4b7f8bd4e6ae53118a48f396c7f5583ebe70cb8c1a6691aec4190d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae16ad6f2a4b7f8bd4e6ae53118a48f396c7f5583ebe70cb8c1a6691aec4190d->enter($__internal_ae16ad6f2a4b7f8bd4e6ae53118a48f396c7f5583ebe70cb8c1a6691aec4190d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 4, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 4, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
        // line 7
        echo twig_escape_filter($this->env,  -        // line 8
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'label'), "html", null, true);
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo "</div>
    </div>";
        
        $__internal_ae16ad6f2a4b7f8bd4e6ae53118a48f396c7f5583ebe70cb8c1a6691aec4190d->leave($__internal_ae16ad6f2a4b7f8bd4e6ae53118a48f396c7f5583ebe70cb8c1a6691aec4190d_prof);

        
        $__internal_bdeee280e42dfc95fcc2009227827885ec5c2a0020afc701f98c00643788b237->leave($__internal_bdeee280e42dfc95fcc2009227827885ec5c2a0020afc701f98c00643788b237_prof);

    }

    // line 14
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_25c40741bd33c75539b4b16266a879993a3c6949223cd895bdd34896f0c6f1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c40741bd33c75539b4b16266a879993a3c6949223cd895bdd34896f0c6f1c7->enter($__internal_25c40741bd33c75539b4b16266a879993a3c6949223cd895bdd34896f0c6f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_47ba9098f7eece74e1220f975d67e6592f8e7557254d3b560973093f560db5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ba9098f7eece74e1220f975d67e6592f8e7557254d3b560973093f560db5c5->enter($__internal_47ba9098f7eece74e1220f975d67e6592f8e7557254d3b560973093f560db5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 15
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 15, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 16
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 16, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 18
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 19
        if (array_key_exists("tooltip", $context)) {
            // line 20
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "tooltip" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_47ba9098f7eece74e1220f975d67e6592f8e7557254d3b560973093f560db5c5->leave($__internal_47ba9098f7eece74e1220f975d67e6592f8e7557254d3b560973093f560db5c5_prof);

        
        $__internal_25c40741bd33c75539b4b16266a879993a3c6949223cd895bdd34896f0c6f1c7->leave($__internal_25c40741bd33c75539b4b16266a879993a3c6949223cd895bdd34896f0c6f1c7_prof);

    }

    // line 26
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_16b76e1b94afe53ab6a44ff9f853541b8e2d9ac855e23d8977e79abeeb5da086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b76e1b94afe53ab6a44ff9f853541b8e2d9ac855e23d8977e79abeeb5da086->enter($__internal_16b76e1b94afe53ab6a44ff9f853541b8e2d9ac855e23d8977e79abeeb5da086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cfaafd080feea856a7b48c75f376aae2f43c11b4cd720f6092ad1273cf3e54bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaafd080feea856a7b48c75f376aae2f43c11b4cd720f6092ad1273cf3e54bc->enter($__internal_cfaafd080feea856a7b48c75f376aae2f43c11b4cd720f6092ad1273cf3e54bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 27
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 27, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 28
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_cfaafd080feea856a7b48c75f376aae2f43c11b4cd720f6092ad1273cf3e54bc->leave($__internal_cfaafd080feea856a7b48c75f376aae2f43c11b4cd720f6092ad1273cf3e54bc_prof);

        
        $__internal_16b76e1b94afe53ab6a44ff9f853541b8e2d9ac855e23d8977e79abeeb5da086->leave($__internal_16b76e1b94afe53ab6a44ff9f853541b8e2d9ac855e23d8977e79abeeb5da086_prof);

    }

    // line 31
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7ffcb59a74b86c13970aa17ae5cd99ce9fcc23afd35b632e9de093d06a96a9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffcb59a74b86c13970aa17ae5cd99ce9fcc23afd35b632e9de093d06a96a9f4->enter($__internal_7ffcb59a74b86c13970aa17ae5cd99ce9fcc23afd35b632e9de093d06a96a9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6cade52fda8c45d60100cd587410a11b0a31f2cba7cacd25f03807be3703ae28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cade52fda8c45d60100cd587410a11b0a31f2cba7cacd25f03807be3703ae28->enter($__internal_6cade52fda8c45d60100cd587410a11b0a31f2cba7cacd25f03807be3703ae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 32
        echo "<div class=\"row ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 32, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'widget');
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'errors');
        // line 36
        echo "</div>";
        
        $__internal_6cade52fda8c45d60100cd587410a11b0a31f2cba7cacd25f03807be3703ae28->leave($__internal_6cade52fda8c45d60100cd587410a11b0a31f2cba7cacd25f03807be3703ae28_prof);

        
        $__internal_7ffcb59a74b86c13970aa17ae5cd99ce9fcc23afd35b632e9de093d06a96a9f4->leave($__internal_7ffcb59a74b86c13970aa17ae5cd99ce9fcc23afd35b632e9de093d06a96a9f4_prof);

    }

    // line 39
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f8c600afcdc8766027f81961d966946e73a9c34dec9e9af8839dcde7eb85c30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c600afcdc8766027f81961d966946e73a9c34dec9e9af8839dcde7eb85c30c->enter($__internal_f8c600afcdc8766027f81961d966946e73a9c34dec9e9af8839dcde7eb85c30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6a3ac17d8458438482d396f96f42cfe4caa0f602f5f585396932b784f3853d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3ac17d8458438482d396f96f42cfe4caa0f602f5f585396932b784f3853d6e->enter($__internal_6a3ac17d8458438482d396f96f42cfe4caa0f602f5f585396932b784f3853d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 40
        echo "<input type=\"checkbox\" class=\"filled-in\"";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 40, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6a3ac17d8458438482d396f96f42cfe4caa0f602f5f585396932b784f3853d6e->leave($__internal_6a3ac17d8458438482d396f96f42cfe4caa0f602f5f585396932b784f3853d6e_prof);

        
        $__internal_f8c600afcdc8766027f81961d966946e73a9c34dec9e9af8839dcde7eb85c30c->leave($__internal_f8c600afcdc8766027f81961d966946e73a9c34dec9e9af8839dcde7eb85c30c_prof);

    }

    // line 44
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_fa3980bc194167cdd7dbc6ac1a8bbdf178e00cec40c2ee763f0c6b7fa8b9cd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3980bc194167cdd7dbc6ac1a8bbdf178e00cec40c2ee763f0c6b7fa8b9cd5a->enter($__internal_fa3980bc194167cdd7dbc6ac1a8bbdf178e00cec40c2ee763f0c6b7fa8b9cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fd89c5c5d1b067b05f883fc3acba64c89e1e02da4d1f50166b4ef144d7667cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd89c5c5d1b067b05f883fc3acba64c89e1e02da4d1f50166b4ef144d7667cc7->enter($__internal_fd89c5c5d1b067b05f883fc3acba64c89e1e02da4d1f50166b4ef144d7667cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 45
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 45, $this->getSourceContext()); })()) === false)) {
            // line 46
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 46, $this->getSourceContext()); })())) {
                // line 47
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 47, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 47, $this->getSourceContext()); })())));
            }
            // line 49
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 49, $this->getSourceContext()); })())) {
                // line 50
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 50, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 52
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 52, $this->getSourceContext()); })()))) {
                // line 53
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 53, $this->getSourceContext()); })()))) {
                    // line 54
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 54, $this->getSourceContext()); })()), array("%name%" =>                     // line 55
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 55, $this->getSourceContext()); })()), "%id%" =>                     // line 56
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 56, $this->getSourceContext()); })())));
                } else {
                    // line 59
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 59, $this->getSourceContext()); })()));
                }
            }
            // line 62
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 62, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 63
            echo ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 63, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 63, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 63, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 63, $this->getSourceContext()); })()))));
            echo "
        </label>";
        }
        
        $__internal_fd89c5c5d1b067b05f883fc3acba64c89e1e02da4d1f50166b4ef144d7667cc7->leave($__internal_fd89c5c5d1b067b05f883fc3acba64c89e1e02da4d1f50166b4ef144d7667cc7_prof);

        
        $__internal_fa3980bc194167cdd7dbc6ac1a8bbdf178e00cec40c2ee763f0c6b7fa8b9cd5a->leave($__internal_fa3980bc194167cdd7dbc6ac1a8bbdf178e00cec40c2ee763f0c6b7fa8b9cd5a_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_6a87a15c40a95f354b498126b399283013e9acd6098328af411c54a420022004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a87a15c40a95f354b498126b399283013e9acd6098328af411c54a420022004->enter($__internal_6a87a15c40a95f354b498126b399283013e9acd6098328af411c54a420022004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fe10acf0470399d824803e49deef9eaf27c7bc0ab1809e85f248b1144ee167cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe10acf0470399d824803e49deef9eaf27c7bc0ab1809e85f248b1144ee167cf->enter($__internal_fe10acf0470399d824803e49deef9eaf27c7bc0ab1809e85f248b1144ee167cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 69, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_fe10acf0470399d824803e49deef9eaf27c7bc0ab1809e85f248b1144ee167cf->leave($__internal_fe10acf0470399d824803e49deef9eaf27c7bc0ab1809e85f248b1144ee167cf_prof);

        
        $__internal_6a87a15c40a95f354b498126b399283013e9acd6098328af411c54a420022004->leave($__internal_6a87a15c40a95f354b498126b399283013e9acd6098328af411c54a420022004_prof);

    }

    // line 73
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_544fa3fd282fd4adf9eb48ab918f97ca41c6ff10ced9f2e95f135f50f5edbb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544fa3fd282fd4adf9eb48ab918f97ca41c6ff10ced9f2e95f135f50f5edbb55->enter($__internal_544fa3fd282fd4adf9eb48ab918f97ca41c6ff10ced9f2e95f135f50f5edbb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9ba7b60bfaa4a900ecf79ee4f810cb3bb9bb5b96d51f123ba6a1ba5a081931e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba7b60bfaa4a900ecf79ee4f810cb3bb9bb5b96d51f123ba6a1ba5a081931e1->enter($__internal_9ba7b60bfaa4a900ecf79ee4f810cb3bb9bb5b96d51f123ba6a1ba5a081931e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 74
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 74, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 74, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 74, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 74, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 74, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 75
            $context["required"] = false;
        }
        // line 77
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 77, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 78
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 78, $this->getSourceContext()); })()))) {
            // line 79
            echo "<option value=\"\"";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 79, $this->getSourceContext()); })())) {
                echo " disabled=\"disabled\" ";
                if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 79, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 79, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 79, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 79, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 79, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 79, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 81
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 81, $this->getSourceContext()); })())) > 0)) {
            // line 82
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 82, $this->getSourceContext()); })());
            // line 83
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 84
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 84, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 84, $this->getSourceContext()); })())))) {
                // line 85
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 88
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 88, $this->getSourceContext()); })());
        // line 89
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 90
        echo "</select>";
        
        $__internal_9ba7b60bfaa4a900ecf79ee4f810cb3bb9bb5b96d51f123ba6a1ba5a081931e1->leave($__internal_9ba7b60bfaa4a900ecf79ee4f810cb3bb9bb5b96d51f123ba6a1ba5a081931e1_prof);

        
        $__internal_544fa3fd282fd4adf9eb48ab918f97ca41c6ff10ced9f2e95f135f50f5edbb55->leave($__internal_544fa3fd282fd4adf9eb48ab918f97ca41c6ff10ced9f2e95f135f50f5edbb55_prof);

    }

    // line 93
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7a2b6ea22e2bade8ae1cfb9ec59a296734247db60880a8774d9e9984ae11b535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2b6ea22e2bade8ae1cfb9ec59a296734247db60880a8774d9e9984ae11b535->enter($__internal_7a2b6ea22e2bade8ae1cfb9ec59a296734247db60880a8774d9e9984ae11b535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e39fa7bc23b70e5c28c021606e4bf60a5d77b5bf394d8e618091b42737519e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39fa7bc23b70e5c28c021606e4bf60a5d77b5bf394d8e618091b42737519e73->enter($__internal_e39fa7bc23b70e5c28c021606e4bf60a5d77b5bf394d8e618091b42737519e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 94
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 95
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e39fa7bc23b70e5c28c021606e4bf60a5d77b5bf394d8e618091b42737519e73->leave($__internal_e39fa7bc23b70e5c28c021606e4bf60a5d77b5bf394d8e618091b42737519e73_prof);

        
        $__internal_7a2b6ea22e2bade8ae1cfb9ec59a296734247db60880a8774d9e9984ae11b535->leave($__internal_7a2b6ea22e2bade8ae1cfb9ec59a296734247db60880a8774d9e9984ae11b535_prof);

    }

    // line 98
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3cdfa444b3e5d7d14aa880eeb7be01959f87600ee4d86ff20005be17051c836e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdfa444b3e5d7d14aa880eeb7be01959f87600ee4d86ff20005be17051c836e->enter($__internal_3cdfa444b3e5d7d14aa880eeb7be01959f87600ee4d86ff20005be17051c836e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2ca900ede8b2ebb9b297948bfe71406b1118961e8f7d81710229514093d0e1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca900ede8b2ebb9b297948bfe71406b1118961e8f7d81710229514093d0e1c2->enter($__internal_2ca900ede8b2ebb9b297948bfe71406b1118961e8f7d81710229514093d0e1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 99
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 99, $this->getSourceContext()); })())) > 0)) {
            // line 100
            echo "<ul>";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 101, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 102
                echo "<li class=\"error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</ul>";
        }
        
        $__internal_2ca900ede8b2ebb9b297948bfe71406b1118961e8f7d81710229514093d0e1c2->leave($__internal_2ca900ede8b2ebb9b297948bfe71406b1118961e8f7d81710229514093d0e1c2_prof);

        
        $__internal_3cdfa444b3e5d7d14aa880eeb7be01959f87600ee4d86ff20005be17051c836e->leave($__internal_3cdfa444b3e5d7d14aa880eeb7be01959f87600ee4d86ff20005be17051c836e_prof);

    }

    public function getTemplateName()
    {
        return "::materialize_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 104,  386 => 102,  382 => 101,  380 => 100,  378 => 99,  369 => 98,  358 => 95,  356 => 94,  347 => 93,  337 => 90,  335 => 89,  333 => 88,  327 => 85,  325 => 84,  323 => 83,  321 => 82,  319 => 81,  307 => 79,  305 => 78,  298 => 77,  295 => 75,  293 => 74,  284 => 73,  274 => 70,  272 => 69,  263 => 68,  250 => 63,  234 => 62,  230 => 59,  227 => 56,  226 => 55,  225 => 54,  223 => 53,  221 => 52,  218 => 50,  216 => 49,  213 => 47,  211 => 46,  209 => 45,  200 => 44,  180 => 40,  171 => 39,  161 => 36,  159 => 35,  157 => 34,  155 => 33,  149 => 32,  140 => 31,  130 => 28,  128 => 27,  119 => 26,  105 => 21,  102 => 20,  100 => 19,  98 => 18,  95 => 16,  92 => 15,  83 => 14,  72 => 10,  70 => 9,  68 => 8,  67 => 7,  65 => 6,  58 => 4,  49 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{
            - form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_row -%}
    <div class=\"row {% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block checkbox_widget -%}
    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget %}

{# Checkbox label is raw here #}
{%- block checkbox_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}
        </label>
    {%- endif -%}
{%- endblock -%}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}
    {{ parent() }}
{%- endblock -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li class=\"error\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}", "::materialize_layout.html.twig", "/home/fabien/symfony-stg/app/Resources/views/materialize_layout.html.twig");
    }
}
