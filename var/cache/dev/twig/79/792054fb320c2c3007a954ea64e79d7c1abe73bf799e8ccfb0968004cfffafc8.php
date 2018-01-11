<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_bc2d54d92ee9c9450ef336f04d443902cdb2c652540ccd49141d3600d73cc118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4491138341d0e8e9b5afd16be84a3a8ce71cb1d2fe7829d2effb684b1c3262fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4491138341d0e8e9b5afd16be84a3a8ce71cb1d2fe7829d2effb684b1c3262fb->enter($__internal_4491138341d0e8e9b5afd16be84a3a8ce71cb1d2fe7829d2effb684b1c3262fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        $__internal_f80a0a01353e36f800b2212fda3c743f96434dd9675388761a33d2e2fd0c6c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80a0a01353e36f800b2212fda3c743f96434dd9675388761a33d2e2fd0c6c33->enter($__internal_f80a0a01353e36f800b2212fda3c743f96434dd9675388761a33d2e2fd0c6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 3, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "primary_key_field_name", array())));
        // line 4
        $context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"]) || array_key_exists("__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0", $context) ? $context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"]) || array_key_exists("__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0", $context) ? $context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0" does not exist.', 4, $this->getSourceContext()); })())), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 5, $this->getSourceContext()); })()));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4491138341d0e8e9b5afd16be84a3a8ce71cb1d2fe7829d2effb684b1c3262fb->leave($__internal_4491138341d0e8e9b5afd16be84a3a8ce71cb1d2fe7829d2effb684b1c3262fb_prof);

        
        $__internal_f80a0a01353e36f800b2212fda3c743f96434dd9675388761a33d2e2fd0c6c33->leave($__internal_f80a0a01353e36f800b2212fda3c743f96434dd9675388761a33d2e2fd0c6c33_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f203dac9eb29faa606f0ff83c50762fbb9d520bcde57c20a70e0153ca785f178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f203dac9eb29faa606f0ff83c50762fbb9d520bcde57c20a70e0153ca785f178->enter($__internal_f203dac9eb29faa606f0ff83c50762fbb9d520bcde57c20a70e0153ca785f178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_20414e02595a116ca461578dcca287c9dc1d0c7be4113225db06b587e161522a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20414e02595a116ca461578dcca287c9dc1d0c7be4113225db06b587e161522a->enter($__internal_20414e02595a116ca461578dcca287c9dc1d0c7be4113225db06b587e161522a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_20414e02595a116ca461578dcca287c9dc1d0c7be4113225db06b587e161522a->leave($__internal_20414e02595a116ca461578dcca287c9dc1d0c7be4113225db06b587e161522a_prof);

        
        $__internal_f203dac9eb29faa606f0ff83c50762fbb9d520bcde57c20a70e0153ca785f178->leave($__internal_f203dac9eb29faa606f0ff83c50762fbb9d520bcde57c20a70e0153ca785f178_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3c926e7cfa1886ab70c32575d1136832097ff76e1af2582e8b19390c65415b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c926e7cfa1886ab70c32575d1136832097ff76e1af2582e8b19390c65415b18->enter($__internal_3c926e7cfa1886ab70c32575d1136832097ff76e1af2582e8b19390c65415b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_75d2dfe37f8d5e95a962698e0aab492a57a93f475e6ae81810581ed655315f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d2dfe37f8d5e95a962698e0aab492a57a93f475e6ae81810581ed655315f31->enter($__internal_75d2dfe37f8d5e95a962698e0aab492a57a93f475e6ae81810581ed655315f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_75d2dfe37f8d5e95a962698e0aab492a57a93f475e6ae81810581ed655315f31->leave($__internal_75d2dfe37f8d5e95a962698e0aab492a57a93f475e6ae81810581ed655315f31_prof);

        
        $__internal_3c926e7cfa1886ab70c32575d1136832097ff76e1af2582e8b19390c65415b18->leave($__internal_3c926e7cfa1886ab70c32575d1136832097ff76e1af2582e8b19390c65415b18_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_09dfd07c5954c9ce4f7eb5bd5e3138be129f2a4536e2c0c06794b83c017df6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dfd07c5954c9ce4f7eb5bd5e3138be129f2a4536e2c0c06794b83c017df6b5->enter($__internal_09dfd07c5954c9ce4f7eb5bd5e3138be129f2a4536e2c0c06794b83c017df6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_0f0e0f7d732c26726ce306300d89c552ea64953fa9f4919ae53b2c15a383dc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0e0f7d732c26726ce306300d89c552ea64953fa9f4919ae53b2c15a383dc13->enter($__internal_0f0e0f7d732c26726ce306300d89c552ea64953fa9f4919ae53b2c15a383dc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "show", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"]) || array_key_exists("__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0", $context) ? $context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0f0e0f7d732c26726ce306300d89c552ea64953fa9f4919ae53b2c15a383dc13->leave($__internal_0f0e0f7d732c26726ce306300d89c552ea64953fa9f4919ae53b2c15a383dc13_prof);

        
        $__internal_09dfd07c5954c9ce4f7eb5bd5e3138be129f2a4536e2c0c06794b83c017df6b5->leave($__internal_09dfd07c5954c9ce4f7eb5bd5e3138be129f2a4536e2c0c06794b83c017df6b5_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_0a065a8fddafae5c93e313f2cc34800a193fff0f446d1cd115b2ebc33c03b8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a065a8fddafae5c93e313f2cc34800a193fff0f446d1cd115b2ebc33c03b8b3->enter($__internal_0a065a8fddafae5c93e313f2cc34800a193fff0f446d1cd115b2ebc33c03b8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f30e5ca320bf5652dfe285563c6085ead9b1c32b602d2067d88614940589feed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30e5ca320bf5652dfe285563c6085ead9b1c32b602d2067d88614940589feed->enter($__internal_f30e5ca320bf5652dfe285563c6085ead9b1c32b602d2067d88614940589feed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 24, $this->getSourceContext()); })()),             // line 4
(isset($context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"]) || array_key_exists("__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0", $context) ? $context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0" does not exist.', 4, $this->getSourceContext()); })()));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 28, $this->getSourceContext()); })()), "name", array()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 28, $this->getSourceContext()); })()), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "help", array()), array(),                 // line 4
(isset($context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"]) || array_key_exists("__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0", $context) ? $context["__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d21f5c5fe021bc3e76fa933b50182533a5126a7f7a249ca0c7971b09f31a04a0" does not exist.', 4, $this->getSourceContext()); })()));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_f30e5ca320bf5652dfe285563c6085ead9b1c32b602d2067d88614940589feed->leave($__internal_f30e5ca320bf5652dfe285563c6085ead9b1c32b602d2067d88614940589feed_prof);

        
        $__internal_0a065a8fddafae5c93e313f2cc34800a193fff0f446d1cd115b2ebc33c03b8b3->leave($__internal_0a065a8fddafae5c93e313f2cc34800a193fff0f446d1cd115b2ebc33c03b8b3_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_ab787cc618a5d642df54d81cfb8da5dfe523b990b65565b259ece07a6fc394e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab787cc618a5d642df54d81cfb8da5dfe523b990b65565b259ece07a6fc394e1->enter($__internal_ab787cc618a5d642df54d81cfb8da5dfe523b990b65565b259ece07a6fc394e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_95cc41e12a39ff493d540f0af21c8b7d260ff1a28b89d9d42c9605949391bab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cc41e12a39ff493d540f0af21c8b7d260ff1a28b89d9d42c9605949391bab5->enter($__internal_95cc41e12a39ff493d540f0af21c8b7d260ff1a28b89d9d42c9605949391bab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 41, $this->getSourceContext()); })()), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 42, $this->getSourceContext()); })()), "name", array()), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
(isset($context["_show_actions"]) || array_key_exists("_show_actions", $context) ? $context["_show_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_show_actions" does not exist.', 45, $this->getSourceContext()); })()), "request_parameters" =>         // line 46
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 46, $this->getSourceContext()); })()), "translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 47
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 47, $this->getSourceContext()); })()), "translation_domain", array()), "trans_parameters" =>         // line 48
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 48, $this->getSourceContext()); })()), "item_id" =>         // line 49
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 49, $this->getSourceContext()); })())), false);
        // line 50
        echo "
            ";
        
        $__internal_95cc41e12a39ff493d540f0af21c8b7d260ff1a28b89d9d42c9605949391bab5->leave($__internal_95cc41e12a39ff493d540f0af21c8b7d260ff1a28b89d9d42c9605949391bab5_prof);

        
        $__internal_ab787cc618a5d642df54d81cfb8da5dfe523b990b65565b259ece07a6fc394e1->leave($__internal_ab787cc618a5d642df54d81cfb8da5dfe523b990b65565b259ece07a6fc394e1_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_dde93129407d6b5e28a47bd482dc2b9136488d7bbb69c9073fcbb944a5f15c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde93129407d6b5e28a47bd482dc2b9136488d7bbb69c9073fcbb944a5f15c87->enter($__internal_dde93129407d6b5e28a47bd482dc2b9136488d7bbb69c9073fcbb944a5f15c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_530db6a26fb47ffee29a4bc782d0960c472f460571e29fa5fbb06ae4b7a0b8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530db6a26fb47ffee29a4bc782d0960c472f460571e29fa5fbb06ae4b7a0b8ad->enter($__internal_530db6a26fb47ffee29a4bc782d0960c472f460571e29fa5fbb06ae4b7a0b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 59
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 60, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 61
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 61, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 62
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 62, $this->getSourceContext()); })()), "_entity_config" =>         // line 63
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 63, $this->getSourceContext()); })())), false);
        // line 64
        echo "
    ";
        
        $__internal_530db6a26fb47ffee29a4bc782d0960c472f460571e29fa5fbb06ae4b7a0b8ad->leave($__internal_530db6a26fb47ffee29a4bc782d0960c472f460571e29fa5fbb06ae4b7a0b8ad_prof);

        
        $__internal_dde93129407d6b5e28a47bd482dc2b9136488d7bbb69c9073fcbb944a5f15c87->leave($__internal_dde93129407d6b5e28a47bd482dc2b9136488d7bbb69c9073fcbb944a5f15c87_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2e4aa735c4d7da0e6d7dc5956a063c7ebbaa64af9f353ba3b557aaf9f01e3733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4aa735c4d7da0e6d7dc5956a063c7ebbaa64af9f353ba3b557aaf9f01e3733->enter($__internal_2e4aa735c4d7da0e6d7dc5956a063c7ebbaa64af9f353ba3b557aaf9f01e3733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_8d9f1dfb50337a6946fd041ae4ca19cd313688b2114e996cc16dddb8cb8c685f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9f1dfb50337a6946fd041ae4ca19cd313688b2114e996cc16dddb8cb8c685f->enter($__internal_8d9f1dfb50337a6946fd041ae4ca19cd313688b2114e996cc16dddb8cb8c685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_8d9f1dfb50337a6946fd041ae4ca19cd313688b2114e996cc16dddb8cb8c685f->leave($__internal_8d9f1dfb50337a6946fd041ae4ca19cd313688b2114e996cc16dddb8cb8c685f_prof);

        
        $__internal_2e4aa735c4d7da0e6d7dc5956a063c7ebbaa64af9f353ba3b557aaf9f01e3733->leave($__internal_2e4aa735c4d7da0e6d7dc5956a063c7ebbaa64af9f353ba3b557aaf9f01e3733_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
