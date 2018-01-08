<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_f549480ecd3d30b891439e9c0d2bef5da2e8d7fe674508d5cd15eea14ebeceec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf7b7ce45d24670bdba31a7e3edb064104aa4a1142a752c4311eb74d9c114be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf7b7ce45d24670bdba31a7e3edb064104aa4a1142a752c4311eb74d9c114be->enter($__internal_baf7b7ce45d24670bdba31a7e3edb064104aa4a1142a752c4311eb74d9c114be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_9340e229886b86b06dd2128ef207e55dee0e35afeefd01a9f6c489b707d0b556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9340e229886b86b06dd2128ef207e55dee0e35afeefd01a9f6c489b707d0b556->enter($__internal_9340e229886b86b06dd2128ef207e55dee0e35afeefd01a9f6c489b707d0b556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_baf7b7ce45d24670bdba31a7e3edb064104aa4a1142a752c4311eb74d9c114be->leave($__internal_baf7b7ce45d24670bdba31a7e3edb064104aa4a1142a752c4311eb74d9c114be_prof);

        
        $__internal_9340e229886b86b06dd2128ef207e55dee0e35afeefd01a9f6c489b707d0b556->leave($__internal_9340e229886b86b06dd2128ef207e55dee0e35afeefd01a9f6c489b707d0b556_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_550fdbbd283eb9f20147d95cb7ac64cd5f43d67312ffeea123e140648612934f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550fdbbd283eb9f20147d95cb7ac64cd5f43d67312ffeea123e140648612934f->enter($__internal_550fdbbd283eb9f20147d95cb7ac64cd5f43d67312ffeea123e140648612934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_1126d999bc9012f36aaa810a74f0dc929934a6c2c75de171050ac82fc4ad26bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1126d999bc9012f36aaa810a74f0dc929934a6c2c75de171050ac82fc4ad26bf->enter($__internal_1126d999bc9012f36aaa810a74f0dc929934a6c2c75de171050ac82fc4ad26bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_1126d999bc9012f36aaa810a74f0dc929934a6c2c75de171050ac82fc4ad26bf->leave($__internal_1126d999bc9012f36aaa810a74f0dc929934a6c2c75de171050ac82fc4ad26bf_prof);

        
        $__internal_550fdbbd283eb9f20147d95cb7ac64cd5f43d67312ffeea123e140648612934f->leave($__internal_550fdbbd283eb9f20147d95cb7ac64cd5f43d67312ffeea123e140648612934f_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_5003ab242e84bbafff42021812a1e16a29f46c461ceb12b06b4554294be1cc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5003ab242e84bbafff42021812a1e16a29f46c461ceb12b06b4554294be1cc32->enter($__internal_5003ab242e84bbafff42021812a1e16a29f46c461ceb12b06b4554294be1cc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_62e0c9f148872f287ca7014775fb68250d11a21800d8964def71285c9134af0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e0c9f148872f287ca7014775fb68250d11a21800d8964def71285c9134af0c->enter($__internal_62e0c9f148872f287ca7014775fb68250d11a21800d8964def71285c9134af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_62e0c9f148872f287ca7014775fb68250d11a21800d8964def71285c9134af0c->leave($__internal_62e0c9f148872f287ca7014775fb68250d11a21800d8964def71285c9134af0c_prof);

        
        $__internal_5003ab242e84bbafff42021812a1e16a29f46c461ceb12b06b4554294be1cc32->leave($__internal_5003ab242e84bbafff42021812a1e16a29f46c461ceb12b06b4554294be1cc32_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_6d41c709dad6025bfb913fc03121503db45c2403b871916d2459c8213cc283bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d41c709dad6025bfb913fc03121503db45c2403b871916d2459c8213cc283bf->enter($__internal_6d41c709dad6025bfb913fc03121503db45c2403b871916d2459c8213cc283bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_41a7b97f4370ef2de864bbb268727dcbf505367e886d87e22345d72205d50d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a7b97f4370ef2de864bbb268727dcbf505367e886d87e22345d72205d50d75->enter($__internal_41a7b97f4370ef2de864bbb268727dcbf505367e886d87e22345d72205d50d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_41a7b97f4370ef2de864bbb268727dcbf505367e886d87e22345d72205d50d75->leave($__internal_41a7b97f4370ef2de864bbb268727dcbf505367e886d87e22345d72205d50d75_prof);

        
        $__internal_6d41c709dad6025bfb913fc03121503db45c2403b871916d2459c8213cc283bf->leave($__internal_6d41c709dad6025bfb913fc03121503db45c2403b871916d2459c8213cc283bf_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_e1488fc329da8380c0ebd271746ce06cac87b3b0150d981ef8d4f3352f1ae0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1488fc329da8380c0ebd271746ce06cac87b3b0150d981ef8d4f3352f1ae0f1->enter($__internal_e1488fc329da8380c0ebd271746ce06cac87b3b0150d981ef8d4f3352f1ae0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_70fa2eb386de5c8277f651e4264ff162281490c009fd57f579fc8deae26301bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fa2eb386de5c8277f651e4264ff162281490c009fd57f579fc8deae26301bb->enter($__internal_70fa2eb386de5c8277f651e4264ff162281490c009fd57f579fc8deae26301bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_70fa2eb386de5c8277f651e4264ff162281490c009fd57f579fc8deae26301bb->leave($__internal_70fa2eb386de5c8277f651e4264ff162281490c009fd57f579fc8deae26301bb_prof);

        
        $__internal_e1488fc329da8380c0ebd271746ce06cac87b3b0150d981ef8d4f3352f1ae0f1->leave($__internal_e1488fc329da8380c0ebd271746ce06cac87b3b0150d981ef8d4f3352f1ae0f1_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_5fd455c1d933f8a3cf6d77c8ec159da14a5cb1dd4bfc42802c34cebdf24838a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd455c1d933f8a3cf6d77c8ec159da14a5cb1dd4bfc42802c34cebdf24838a8->enter($__internal_5fd455c1d933f8a3cf6d77c8ec159da14a5cb1dd4bfc42802c34cebdf24838a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_0dde1e3a4d1bb19f24483675abb28e006d42940cacf5a88e9020a4c5e0afd905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dde1e3a4d1bb19f24483675abb28e006d42940cacf5a88e9020a4c5e0afd905->enter($__internal_0dde1e3a4d1bb19f24483675abb28e006d42940cacf5a88e9020a4c5e0afd905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_0dde1e3a4d1bb19f24483675abb28e006d42940cacf5a88e9020a4c5e0afd905->leave($__internal_0dde1e3a4d1bb19f24483675abb28e006d42940cacf5a88e9020a4c5e0afd905_prof);

        
        $__internal_5fd455c1d933f8a3cf6d77c8ec159da14a5cb1dd4bfc42802c34cebdf24838a8->leave($__internal_5fd455c1d933f8a3cf6d77c8ec159da14a5cb1dd4bfc42802c34cebdf24838a8_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f2f690db9ea62ca0a924224ae27875762904b6d036bcc1898d1f103aaab340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f2f690db9ea62ca0a924224ae27875762904b6d036bcc1898d1f103aaab340->enter($__internal_81f2f690db9ea62ca0a924224ae27875762904b6d036bcc1898d1f103aaab340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18c8690a163f625b9e210cff47d33b205b9772946a6a80164c2ee32f5e965098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c8690a163f625b9e210cff47d33b205b9772946a6a80164c2ee32f5e965098->enter($__internal_18c8690a163f625b9e210cff47d33b205b9772946a6a80164c2ee32f5e965098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_18c8690a163f625b9e210cff47d33b205b9772946a6a80164c2ee32f5e965098->leave($__internal_18c8690a163f625b9e210cff47d33b205b9772946a6a80164c2ee32f5e965098_prof);

        
        $__internal_81f2f690db9ea62ca0a924224ae27875762904b6d036bcc1898d1f103aaab340->leave($__internal_81f2f690db9ea62ca0a924224ae27875762904b6d036bcc1898d1f103aaab340_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f29d23a6df972ef0f044525fb707a207b8ff727c2f820b23c36188d75c8162df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29d23a6df972ef0f044525fb707a207b8ff727c2f820b23c36188d75c8162df->enter($__internal_f29d23a6df972ef0f044525fb707a207b8ff727c2f820b23c36188d75c8162df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d714a6a58442497ecb907e3138640fdb2fb52399c30e689c1cdb6711784221c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d714a6a58442497ecb907e3138640fdb2fb52399c30e689c1cdb6711784221c8->enter($__internal_d714a6a58442497ecb907e3138640fdb2fb52399c30e689c1cdb6711784221c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d714a6a58442497ecb907e3138640fdb2fb52399c30e689c1cdb6711784221c8->leave($__internal_d714a6a58442497ecb907e3138640fdb2fb52399c30e689c1cdb6711784221c8_prof);

        
        $__internal_f29d23a6df972ef0f044525fb707a207b8ff727c2f820b23c36188d75c8162df->leave($__internal_f29d23a6df972ef0f044525fb707a207b8ff727c2f820b23c36188d75c8162df_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1a51ed8f842e52ac00af6d54530c63d98d94ca080562ae3bf22234fbaa607669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a51ed8f842e52ac00af6d54530c63d98d94ca080562ae3bf22234fbaa607669->enter($__internal_1a51ed8f842e52ac00af6d54530c63d98d94ca080562ae3bf22234fbaa607669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2bc6a8098c3bb93e64b60dfaed341023e1e1dbef65d22fb05e9af6f749a1e701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc6a8098c3bb93e64b60dfaed341023e1e1dbef65d22fb05e9af6f749a1e701->enter($__internal_2bc6a8098c3bb93e64b60dfaed341023e1e1dbef65d22fb05e9af6f749a1e701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_2bc6a8098c3bb93e64b60dfaed341023e1e1dbef65d22fb05e9af6f749a1e701->leave($__internal_2bc6a8098c3bb93e64b60dfaed341023e1e1dbef65d22fb05e9af6f749a1e701_prof);

        
        $__internal_1a51ed8f842e52ac00af6d54530c63d98d94ca080562ae3bf22234fbaa607669->leave($__internal_1a51ed8f842e52ac00af6d54530c63d98d94ca080562ae3bf22234fbaa607669_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_855dd2bb01ef608ab977d919760a881d5ca92b8ac603c49dac3406922a94714e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855dd2bb01ef608ab977d919760a881d5ca92b8ac603c49dac3406922a94714e->enter($__internal_855dd2bb01ef608ab977d919760a881d5ca92b8ac603c49dac3406922a94714e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_de89378131eefb2c22b1c36b0b718725a0ba921eb75f63566a9a89fb7feec28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de89378131eefb2c22b1c36b0b718725a0ba921eb75f63566a9a89fb7feec28f->enter($__internal_de89378131eefb2c22b1c36b0b718725a0ba921eb75f63566a9a89fb7feec28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_de89378131eefb2c22b1c36b0b718725a0ba921eb75f63566a9a89fb7feec28f->leave($__internal_de89378131eefb2c22b1c36b0b718725a0ba921eb75f63566a9a89fb7feec28f_prof);

        
        $__internal_855dd2bb01ef608ab977d919760a881d5ca92b8ac603c49dac3406922a94714e->leave($__internal_855dd2bb01ef608ab977d919760a881d5ca92b8ac603c49dac3406922a94714e_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_965dcec9df0ee7acd0d046b61434e9c207b95a66977be016d427d72930b13a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965dcec9df0ee7acd0d046b61434e9c207b95a66977be016d427d72930b13a95->enter($__internal_965dcec9df0ee7acd0d046b61434e9c207b95a66977be016d427d72930b13a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bd66a8e37433e1615adb359a2b866a717b9b4516ff5130496053c5f13684540e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd66a8e37433e1615adb359a2b866a717b9b4516ff5130496053c5f13684540e->enter($__internal_bd66a8e37433e1615adb359a2b866a717b9b4516ff5130496053c5f13684540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_bd66a8e37433e1615adb359a2b866a717b9b4516ff5130496053c5f13684540e->leave($__internal_bd66a8e37433e1615adb359a2b866a717b9b4516ff5130496053c5f13684540e_prof);

        
        $__internal_965dcec9df0ee7acd0d046b61434e9c207b95a66977be016d427d72930b13a95->leave($__internal_965dcec9df0ee7acd0d046b61434e9c207b95a66977be016d427d72930b13a95_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_de0830841e34a5d09546653840b78fe8ad923d2fd40c86584cfa02447ec1a3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0830841e34a5d09546653840b78fe8ad923d2fd40c86584cfa02447ec1a3c1->enter($__internal_de0830841e34a5d09546653840b78fe8ad923d2fd40c86584cfa02447ec1a3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_39c2a4ab107ad3ff75de85eec84e8c85480ad977260866847216e605b58069da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c2a4ab107ad3ff75de85eec84e8c85480ad977260866847216e605b58069da->enter($__internal_39c2a4ab107ad3ff75de85eec84e8c85480ad977260866847216e605b58069da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_39c2a4ab107ad3ff75de85eec84e8c85480ad977260866847216e605b58069da->leave($__internal_39c2a4ab107ad3ff75de85eec84e8c85480ad977260866847216e605b58069da_prof);

        
        $__internal_de0830841e34a5d09546653840b78fe8ad923d2fd40c86584cfa02447ec1a3c1->leave($__internal_de0830841e34a5d09546653840b78fe8ad923d2fd40c86584cfa02447ec1a3c1_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_7ebc2c278d15ea3079350838d1ca49efc3c985ce2bee4d685f18c60b53edad7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebc2c278d15ea3079350838d1ca49efc3c985ce2bee4d685f18c60b53edad7e->enter($__internal_7ebc2c278d15ea3079350838d1ca49efc3c985ce2bee4d685f18c60b53edad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_cdf1065b662b25debb9aeb506528d264fb63e73cd0fd8978e771e0042aabf7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf1065b662b25debb9aeb506528d264fb63e73cd0fd8978e771e0042aabf7f2->enter($__internal_cdf1065b662b25debb9aeb506528d264fb63e73cd0fd8978e771e0042aabf7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_cdf1065b662b25debb9aeb506528d264fb63e73cd0fd8978e771e0042aabf7f2->leave($__internal_cdf1065b662b25debb9aeb506528d264fb63e73cd0fd8978e771e0042aabf7f2_prof);

        
        $__internal_7ebc2c278d15ea3079350838d1ca49efc3c985ce2bee4d685f18c60b53edad7e->leave($__internal_7ebc2c278d15ea3079350838d1ca49efc3c985ce2bee4d685f18c60b53edad7e_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_ed985691b1b319a7fcd18afa3f04a82a59004845873d9166ddc62aaf9db72c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed985691b1b319a7fcd18afa3f04a82a59004845873d9166ddc62aaf9db72c70->enter($__internal_ed985691b1b319a7fcd18afa3f04a82a59004845873d9166ddc62aaf9db72c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_34c3ad1a7d27824ff874898fae5d4c84f65a3bd1e84d6266662c90c49cf731c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c3ad1a7d27824ff874898fae5d4c84f65a3bd1e84d6266662c90c49cf731c2->enter($__internal_34c3ad1a7d27824ff874898fae5d4c84f65a3bd1e84d6266662c90c49cf731c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_34c3ad1a7d27824ff874898fae5d4c84f65a3bd1e84d6266662c90c49cf731c2->leave($__internal_34c3ad1a7d27824ff874898fae5d4c84f65a3bd1e84d6266662c90c49cf731c2_prof);

        
        $__internal_ed985691b1b319a7fcd18afa3f04a82a59004845873d9166ddc62aaf9db72c70->leave($__internal_ed985691b1b319a7fcd18afa3f04a82a59004845873d9166ddc62aaf9db72c70_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_2a27972cbd52dd9d5571ab17befafbdbd6b7794a5ee5b0376e2f66a2c56401cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a27972cbd52dd9d5571ab17befafbdbd6b7794a5ee5b0376e2f66a2c56401cc->enter($__internal_2a27972cbd52dd9d5571ab17befafbdbd6b7794a5ee5b0376e2f66a2c56401cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_6589ab935eba1ec66ddf5be560d5b1f623267012c54efe2b3bb6117c7e832e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6589ab935eba1ec66ddf5be560d5b1f623267012c54efe2b3bb6117c7e832e51->enter($__internal_6589ab935eba1ec66ddf5be560d5b1f623267012c54efe2b3bb6117c7e832e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_6589ab935eba1ec66ddf5be560d5b1f623267012c54efe2b3bb6117c7e832e51->leave($__internal_6589ab935eba1ec66ddf5be560d5b1f623267012c54efe2b3bb6117c7e832e51_prof);

        
        $__internal_2a27972cbd52dd9d5571ab17befafbdbd6b7794a5ee5b0376e2f66a2c56401cc->leave($__internal_2a27972cbd52dd9d5571ab17befafbdbd6b7794a5ee5b0376e2f66a2c56401cc_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2486c21a9abd262b687b45524fe07ccd5dad63aee918627a18629d6f6b7068e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2486c21a9abd262b687b45524fe07ccd5dad63aee918627a18629d6f6b7068e2->enter($__internal_2486c21a9abd262b687b45524fe07ccd5dad63aee918627a18629d6f6b7068e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_7202bc84e18e1bba7fda05ecb593bfd96da7dd1b386d0f74210ad911ca3e0861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7202bc84e18e1bba7fda05ecb593bfd96da7dd1b386d0f74210ad911ca3e0861->enter($__internal_7202bc84e18e1bba7fda05ecb593bfd96da7dd1b386d0f74210ad911ca3e0861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_7202bc84e18e1bba7fda05ecb593bfd96da7dd1b386d0f74210ad911ca3e0861->leave($__internal_7202bc84e18e1bba7fda05ecb593bfd96da7dd1b386d0f74210ad911ca3e0861_prof);

        
        $__internal_2486c21a9abd262b687b45524fe07ccd5dad63aee918627a18629d6f6b7068e2->leave($__internal_2486c21a9abd262b687b45524fe07ccd5dad63aee918627a18629d6f6b7068e2_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_c829f307a0feafce712b08f88a5c8a9ff9ddec294d16f7cf4600406d0d6d27cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c829f307a0feafce712b08f88a5c8a9ff9ddec294d16f7cf4600406d0d6d27cb->enter($__internal_c829f307a0feafce712b08f88a5c8a9ff9ddec294d16f7cf4600406d0d6d27cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_666714bd24da02622a18f1b014eabba1511189c7453ac76b3d5260c3f79ea7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666714bd24da02622a18f1b014eabba1511189c7453ac76b3d5260c3f79ea7af->enter($__internal_666714bd24da02622a18f1b014eabba1511189c7453ac76b3d5260c3f79ea7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_666714bd24da02622a18f1b014eabba1511189c7453ac76b3d5260c3f79ea7af->leave($__internal_666714bd24da02622a18f1b014eabba1511189c7453ac76b3d5260c3f79ea7af_prof);

        
        $__internal_c829f307a0feafce712b08f88a5c8a9ff9ddec294d16f7cf4600406d0d6d27cb->leave($__internal_c829f307a0feafce712b08f88a5c8a9ff9ddec294d16f7cf4600406d0d6d27cb_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_dec12e8adfd8b6b535dd786a855b993d3737ae49d3d2754645f2b6b7a7df4126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec12e8adfd8b6b535dd786a855b993d3737ae49d3d2754645f2b6b7a7df4126->enter($__internal_dec12e8adfd8b6b535dd786a855b993d3737ae49d3d2754645f2b6b7a7df4126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d1f2b294bad0a497223cc0b3addb96a9cb98f752342d7ba4cbc4fb6a26539486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f2b294bad0a497223cc0b3addb96a9cb98f752342d7ba4cbc4fb6a26539486->enter($__internal_d1f2b294bad0a497223cc0b3addb96a9cb98f752342d7ba4cbc4fb6a26539486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_d1f2b294bad0a497223cc0b3addb96a9cb98f752342d7ba4cbc4fb6a26539486->leave($__internal_d1f2b294bad0a497223cc0b3addb96a9cb98f752342d7ba4cbc4fb6a26539486_prof);

        
        $__internal_dec12e8adfd8b6b535dd786a855b993d3737ae49d3d2754645f2b6b7a7df4126->leave($__internal_dec12e8adfd8b6b535dd786a855b993d3737ae49d3d2754645f2b6b7a7df4126_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_c3b7703322510db11bb4ded1e59fb32165ebf05be82c0cb7af004a745f0e3c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b7703322510db11bb4ded1e59fb32165ebf05be82c0cb7af004a745f0e3c9d->enter($__internal_c3b7703322510db11bb4ded1e59fb32165ebf05be82c0cb7af004a745f0e3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_027c95a9f6868a73d080358eb10dbabb80d1e1127be0a4bf96d45c8baf15c564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027c95a9f6868a73d080358eb10dbabb80d1e1127be0a4bf96d45c8baf15c564->enter($__internal_027c95a9f6868a73d080358eb10dbabb80d1e1127be0a4bf96d45c8baf15c564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_027c95a9f6868a73d080358eb10dbabb80d1e1127be0a4bf96d45c8baf15c564->leave($__internal_027c95a9f6868a73d080358eb10dbabb80d1e1127be0a4bf96d45c8baf15c564_prof);

        
        $__internal_c3b7703322510db11bb4ded1e59fb32165ebf05be82c0cb7af004a745f0e3c9d->leave($__internal_c3b7703322510db11bb4ded1e59fb32165ebf05be82c0cb7af004a745f0e3c9d_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_71a5394d6725e3c1c50d5b2f91a3524182b4fd4e135d9b337e2f7fa3e2331cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a5394d6725e3c1c50d5b2f91a3524182b4fd4e135d9b337e2f7fa3e2331cb5->enter($__internal_71a5394d6725e3c1c50d5b2f91a3524182b4fd4e135d9b337e2f7fa3e2331cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_ce987ce663b49c998595201d9636ac022daccaaa48ef1187612c30921035db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce987ce663b49c998595201d9636ac022daccaaa48ef1187612c30921035db98->enter($__internal_ce987ce663b49c998595201d9636ac022daccaaa48ef1187612c30921035db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_ce987ce663b49c998595201d9636ac022daccaaa48ef1187612c30921035db98->leave($__internal_ce987ce663b49c998595201d9636ac022daccaaa48ef1187612c30921035db98_prof);

        
        $__internal_71a5394d6725e3c1c50d5b2f91a3524182b4fd4e135d9b337e2f7fa3e2331cb5->leave($__internal_71a5394d6725e3c1c50d5b2f91a3524182b4fd4e135d9b337e2f7fa3e2331cb5_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c128be960420fa15d16fdadf2ab7fc3b8e2dee207cdf51b04cf4cdcdf251bf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c128be960420fa15d16fdadf2ab7fc3b8e2dee207cdf51b04cf4cdcdf251bf67->enter($__internal_c128be960420fa15d16fdadf2ab7fc3b8e2dee207cdf51b04cf4cdcdf251bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_79d9bdf78751be2314f5d1ddf026711974e5d8c85713b28942ac6317d709ad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d9bdf78751be2314f5d1ddf026711974e5d8c85713b28942ac6317d709ad7f->enter($__internal_79d9bdf78751be2314f5d1ddf026711974e5d8c85713b28942ac6317d709ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_79d9bdf78751be2314f5d1ddf026711974e5d8c85713b28942ac6317d709ad7f->leave($__internal_79d9bdf78751be2314f5d1ddf026711974e5d8c85713b28942ac6317d709ad7f_prof);

        
        $__internal_c128be960420fa15d16fdadf2ab7fc3b8e2dee207cdf51b04cf4cdcdf251bf67->leave($__internal_c128be960420fa15d16fdadf2ab7fc3b8e2dee207cdf51b04cf4cdcdf251bf67_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_17833c1332dd3e76a3828fbe5409734bb48344333e6199cc6548b0dba62ff1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17833c1332dd3e76a3828fbe5409734bb48344333e6199cc6548b0dba62ff1d0->enter($__internal_17833c1332dd3e76a3828fbe5409734bb48344333e6199cc6548b0dba62ff1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_40d3f4577b21e50748ccefb341cd9d71a05652db974b82f242e2038ec2a5eedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d3f4577b21e50748ccefb341cd9d71a05652db974b82f242e2038ec2a5eedb->enter($__internal_40d3f4577b21e50748ccefb341cd9d71a05652db974b82f242e2038ec2a5eedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 140, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_40d3f4577b21e50748ccefb341cd9d71a05652db974b82f242e2038ec2a5eedb->leave($__internal_40d3f4577b21e50748ccefb341cd9d71a05652db974b82f242e2038ec2a5eedb_prof);

        
        $__internal_17833c1332dd3e76a3828fbe5409734bb48344333e6199cc6548b0dba62ff1d0->leave($__internal_17833c1332dd3e76a3828fbe5409734bb48344333e6199cc6548b0dba62ff1d0_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_77b087150e9add6951d5e95cdc5d5862cdc4ca1ffcfff91c409877da7c8382a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b087150e9add6951d5e95cdc5d5862cdc4ca1ffcfff91c409877da7c8382a8->enter($__internal_77b087150e9add6951d5e95cdc5d5862cdc4ca1ffcfff91c409877da7c8382a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0c3cefc382c2aeead58f620a4d110dd75444ee8905a937ecd39a5b6faa3aadaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3cefc382c2aeead58f620a4d110dd75444ee8905a937ecd39a5b6faa3aadaf->enter($__internal_0c3cefc382c2aeead58f620a4d110dd75444ee8905a937ecd39a5b6faa3aadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0c3cefc382c2aeead58f620a4d110dd75444ee8905a937ecd39a5b6faa3aadaf->leave($__internal_0c3cefc382c2aeead58f620a4d110dd75444ee8905a937ecd39a5b6faa3aadaf_prof);

        
        $__internal_77b087150e9add6951d5e95cdc5d5862cdc4ca1ffcfff91c409877da7c8382a8->leave($__internal_77b087150e9add6951d5e95cdc5d5862cdc4ca1ffcfff91c409877da7c8382a8_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_668eac21b467c6ee3c44d52bdb9c5739548227e9dc849b8ee84e56014fe4a01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668eac21b467c6ee3c44d52bdb9c5739548227e9dc849b8ee84e56014fe4a01f->enter($__internal_668eac21b467c6ee3c44d52bdb9c5739548227e9dc849b8ee84e56014fe4a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_edc60db33b0f6160512fe6ec00ee386b7f9ec08b744fcaaf4af9423830302448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc60db33b0f6160512fe6ec00ee386b7f9ec08b744fcaaf4af9423830302448->enter($__internal_edc60db33b0f6160512fe6ec00ee386b7f9ec08b744fcaaf4af9423830302448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_edc60db33b0f6160512fe6ec00ee386b7f9ec08b744fcaaf4af9423830302448->leave($__internal_edc60db33b0f6160512fe6ec00ee386b7f9ec08b744fcaaf4af9423830302448_prof);

        
        $__internal_668eac21b467c6ee3c44d52bdb9c5739548227e9dc849b8ee84e56014fe4a01f->leave($__internal_668eac21b467c6ee3c44d52bdb9c5739548227e9dc849b8ee84e56014fe4a01f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 155,  758 => 148,  748 => 144,  741 => 140,  737 => 138,  734 => 137,  725 => 136,  696 => 134,  687 => 133,  674 => 129,  665 => 128,  654 => 149,  652 => 148,  647 => 145,  644 => 136,  642 => 133,  638 => 131,  635 => 128,  626 => 127,  615 => 120,  613 => 117,  611 => 116,  602 => 115,  591 => 122,  589 => 115,  586 => 114,  577 => 113,  562 => 97,  559 => 96,  550 => 95,  540 => 103,  535 => 100,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 104,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 107,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 151,  370 => 127,  365 => 124,  363 => 113,  358 => 110,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 160,  291 => 158,  287 => 157,  284 => 156,  282 => 155,  278 => 153,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 162,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
