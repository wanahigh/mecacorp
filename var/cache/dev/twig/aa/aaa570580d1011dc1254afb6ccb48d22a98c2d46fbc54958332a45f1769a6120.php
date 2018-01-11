<?php

/* @EasyAdmin/default/layout.html.twig */
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
        $__internal_7f34b1f74f6a4f4f7aad3f5f48c14607d1d72d4a86dd433b6fe96fabf704f9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f34b1f74f6a4f4f7aad3f5f48c14607d1d72d4a86dd433b6fe96fabf704f9ff->enter($__internal_7f34b1f74f6a4f4f7aad3f5f48c14607d1d72d4a86dd433b6fe96fabf704f9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_8447142dfa1eae3375c51234f38f9b93d99028d545b292360abb16020addc229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8447142dfa1eae3375c51234f38f9b93d99028d545b292360abb16020addc229->enter($__internal_8447142dfa1eae3375c51234f38f9b93d99028d545b292360abb16020addc229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_7f34b1f74f6a4f4f7aad3f5f48c14607d1d72d4a86dd433b6fe96fabf704f9ff->leave($__internal_7f34b1f74f6a4f4f7aad3f5f48c14607d1d72d4a86dd433b6fe96fabf704f9ff_prof);

        
        $__internal_8447142dfa1eae3375c51234f38f9b93d99028d545b292360abb16020addc229->leave($__internal_8447142dfa1eae3375c51234f38f9b93d99028d545b292360abb16020addc229_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6a4cd2ab0706345de51f8ea1acbd203def43347bf53e48b7c0aaadc83ed9c9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4cd2ab0706345de51f8ea1acbd203def43347bf53e48b7c0aaadc83ed9c9c0->enter($__internal_6a4cd2ab0706345de51f8ea1acbd203def43347bf53e48b7c0aaadc83ed9c9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_db49ac7f18d9a340cbf6ce84c4ebfb5338b28995f5b8f5bebaa84c6fcdaa3299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db49ac7f18d9a340cbf6ce84c4ebfb5338b28995f5b8f5bebaa84c6fcdaa3299->enter($__internal_db49ac7f18d9a340cbf6ce84c4ebfb5338b28995f5b8f5bebaa84c6fcdaa3299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_db49ac7f18d9a340cbf6ce84c4ebfb5338b28995f5b8f5bebaa84c6fcdaa3299->leave($__internal_db49ac7f18d9a340cbf6ce84c4ebfb5338b28995f5b8f5bebaa84c6fcdaa3299_prof);

        
        $__internal_6a4cd2ab0706345de51f8ea1acbd203def43347bf53e48b7c0aaadc83ed9c9c0->leave($__internal_6a4cd2ab0706345de51f8ea1acbd203def43347bf53e48b7c0aaadc83ed9c9c0_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_22a8299a22e791166f1ba62f5f3e3cd3b760ae3ef15bcbc2194779c0305eb96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a8299a22e791166f1ba62f5f3e3cd3b760ae3ef15bcbc2194779c0305eb96e->enter($__internal_22a8299a22e791166f1ba62f5f3e3cd3b760ae3ef15bcbc2194779c0305eb96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_d4e129c513109bf220f935017513c3a660091cdcc8322d38e5083baac0b21281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e129c513109bf220f935017513c3a660091cdcc8322d38e5083baac0b21281->enter($__internal_d4e129c513109bf220f935017513c3a660091cdcc8322d38e5083baac0b21281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_d4e129c513109bf220f935017513c3a660091cdcc8322d38e5083baac0b21281->leave($__internal_d4e129c513109bf220f935017513c3a660091cdcc8322d38e5083baac0b21281_prof);

        
        $__internal_22a8299a22e791166f1ba62f5f3e3cd3b760ae3ef15bcbc2194779c0305eb96e->leave($__internal_22a8299a22e791166f1ba62f5f3e3cd3b760ae3ef15bcbc2194779c0305eb96e_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_a371d45a3ff11c601f772e294f538c0e580c3492f00003356562ed7487c58a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a371d45a3ff11c601f772e294f538c0e580c3492f00003356562ed7487c58a73->enter($__internal_a371d45a3ff11c601f772e294f538c0e580c3492f00003356562ed7487c58a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_1265be65501b09a9b9c0c2d3eb24013b756af48a1c46827cd5b403443254b70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1265be65501b09a9b9c0c2d3eb24013b756af48a1c46827cd5b403443254b70c->enter($__internal_1265be65501b09a9b9c0c2d3eb24013b756af48a1c46827cd5b403443254b70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_1265be65501b09a9b9c0c2d3eb24013b756af48a1c46827cd5b403443254b70c->leave($__internal_1265be65501b09a9b9c0c2d3eb24013b756af48a1c46827cd5b403443254b70c_prof);

        
        $__internal_a371d45a3ff11c601f772e294f538c0e580c3492f00003356562ed7487c58a73->leave($__internal_a371d45a3ff11c601f772e294f538c0e580c3492f00003356562ed7487c58a73_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_5dd80616d5a520f03c85bd9491f495cc691cb44cb3811f8b90bedd4db68ef8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd80616d5a520f03c85bd9491f495cc691cb44cb3811f8b90bedd4db68ef8a0->enter($__internal_5dd80616d5a520f03c85bd9491f495cc691cb44cb3811f8b90bedd4db68ef8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_c9240aa27241d7c74c699984e899e40c752116e207fe0394a4929131b49f3fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9240aa27241d7c74c699984e899e40c752116e207fe0394a4929131b49f3fff->enter($__internal_c9240aa27241d7c74c699984e899e40c752116e207fe0394a4929131b49f3fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_c9240aa27241d7c74c699984e899e40c752116e207fe0394a4929131b49f3fff->leave($__internal_c9240aa27241d7c74c699984e899e40c752116e207fe0394a4929131b49f3fff_prof);

        
        $__internal_5dd80616d5a520f03c85bd9491f495cc691cb44cb3811f8b90bedd4db68ef8a0->leave($__internal_5dd80616d5a520f03c85bd9491f495cc691cb44cb3811f8b90bedd4db68ef8a0_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_43e5efb5aa96b67c85505daeae738c9d55339c5c1e043ba7f3ef0b6b0bdc3b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e5efb5aa96b67c85505daeae738c9d55339c5c1e043ba7f3ef0b6b0bdc3b9f->enter($__internal_43e5efb5aa96b67c85505daeae738c9d55339c5c1e043ba7f3ef0b6b0bdc3b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_1a19e3243e3f06b8528108c98c6d30e07fef696c7cbe956bf6fb1c2eeaff86ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a19e3243e3f06b8528108c98c6d30e07fef696c7cbe956bf6fb1c2eeaff86ea->enter($__internal_1a19e3243e3f06b8528108c98c6d30e07fef696c7cbe956bf6fb1c2eeaff86ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_1a19e3243e3f06b8528108c98c6d30e07fef696c7cbe956bf6fb1c2eeaff86ea->leave($__internal_1a19e3243e3f06b8528108c98c6d30e07fef696c7cbe956bf6fb1c2eeaff86ea_prof);

        
        $__internal_43e5efb5aa96b67c85505daeae738c9d55339c5c1e043ba7f3ef0b6b0bdc3b9f->leave($__internal_43e5efb5aa96b67c85505daeae738c9d55339c5c1e043ba7f3ef0b6b0bdc3b9f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_fceb35160a0c7467d407ac30e0199362756a0c40551619b5abb91f51de55a8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fceb35160a0c7467d407ac30e0199362756a0c40551619b5abb91f51de55a8ea->enter($__internal_fceb35160a0c7467d407ac30e0199362756a0c40551619b5abb91f51de55a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec28dfc63c5789cc18dddbe2acc9228eb7c95372b2c4dce0459e80131c4d48fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec28dfc63c5789cc18dddbe2acc9228eb7c95372b2c4dce0459e80131c4d48fa->enter($__internal_ec28dfc63c5789cc18dddbe2acc9228eb7c95372b2c4dce0459e80131c4d48fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec28dfc63c5789cc18dddbe2acc9228eb7c95372b2c4dce0459e80131c4d48fa->leave($__internal_ec28dfc63c5789cc18dddbe2acc9228eb7c95372b2c4dce0459e80131c4d48fa_prof);

        
        $__internal_fceb35160a0c7467d407ac30e0199362756a0c40551619b5abb91f51de55a8ea->leave($__internal_fceb35160a0c7467d407ac30e0199362756a0c40551619b5abb91f51de55a8ea_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d2e679e1382fc3789b1c02fb947d00c3d4e2597bec267c395bdc6e9cd2754fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e679e1382fc3789b1c02fb947d00c3d4e2597bec267c395bdc6e9cd2754fed->enter($__internal_d2e679e1382fc3789b1c02fb947d00c3d4e2597bec267c395bdc6e9cd2754fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_3b00ab0cee98d67d1a774708e31ceabcbaa055ae442753dac3484e59f8a2ef42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b00ab0cee98d67d1a774708e31ceabcbaa055ae442753dac3484e59f8a2ef42->enter($__internal_3b00ab0cee98d67d1a774708e31ceabcbaa055ae442753dac3484e59f8a2ef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_3b00ab0cee98d67d1a774708e31ceabcbaa055ae442753dac3484e59f8a2ef42->leave($__internal_3b00ab0cee98d67d1a774708e31ceabcbaa055ae442753dac3484e59f8a2ef42_prof);

        
        $__internal_d2e679e1382fc3789b1c02fb947d00c3d4e2597bec267c395bdc6e9cd2754fed->leave($__internal_d2e679e1382fc3789b1c02fb947d00c3d4e2597bec267c395bdc6e9cd2754fed_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d074ea4a31aeadc539ddfb24f34b60eb6b0007924422e6fba3f6d0aacfa132ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d074ea4a31aeadc539ddfb24f34b60eb6b0007924422e6fba3f6d0aacfa132ba->enter($__internal_d074ea4a31aeadc539ddfb24f34b60eb6b0007924422e6fba3f6d0aacfa132ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_cce5ef64016d6ab8b68ee7cb54926409328ac14ce00c1391b8616f77cf7a013d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce5ef64016d6ab8b68ee7cb54926409328ac14ce00c1391b8616f77cf7a013d->enter($__internal_cce5ef64016d6ab8b68ee7cb54926409328ac14ce00c1391b8616f77cf7a013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_cce5ef64016d6ab8b68ee7cb54926409328ac14ce00c1391b8616f77cf7a013d->leave($__internal_cce5ef64016d6ab8b68ee7cb54926409328ac14ce00c1391b8616f77cf7a013d_prof);

        
        $__internal_d074ea4a31aeadc539ddfb24f34b60eb6b0007924422e6fba3f6d0aacfa132ba->leave($__internal_d074ea4a31aeadc539ddfb24f34b60eb6b0007924422e6fba3f6d0aacfa132ba_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_5a5d01d22a34b8032baf3775383984252e0a99cc9e9cae5bed647bec551c5d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5d01d22a34b8032baf3775383984252e0a99cc9e9cae5bed647bec551c5d12->enter($__internal_5a5d01d22a34b8032baf3775383984252e0a99cc9e9cae5bed647bec551c5d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_28e9750712b2f7412fda6c116501d0a9375f708271d7a85e89b1048a25b66259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e9750712b2f7412fda6c116501d0a9375f708271d7a85e89b1048a25b66259->enter($__internal_28e9750712b2f7412fda6c116501d0a9375f708271d7a85e89b1048a25b66259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_28e9750712b2f7412fda6c116501d0a9375f708271d7a85e89b1048a25b66259->leave($__internal_28e9750712b2f7412fda6c116501d0a9375f708271d7a85e89b1048a25b66259_prof);

        
        $__internal_5a5d01d22a34b8032baf3775383984252e0a99cc9e9cae5bed647bec551c5d12->leave($__internal_5a5d01d22a34b8032baf3775383984252e0a99cc9e9cae5bed647bec551c5d12_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_279995398c8cfb3e3ee6af1f11ac3ef387be713535c87e0b0c4daf536709956a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279995398c8cfb3e3ee6af1f11ac3ef387be713535c87e0b0c4daf536709956a->enter($__internal_279995398c8cfb3e3ee6af1f11ac3ef387be713535c87e0b0c4daf536709956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e58f38e846b531678e66f033410a67803035df8aa7fad4fb28ae74f4b4b63b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58f38e846b531678e66f033410a67803035df8aa7fad4fb28ae74f4b4b63b18->enter($__internal_e58f38e846b531678e66f033410a67803035df8aa7fad4fb28ae74f4b4b63b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_e58f38e846b531678e66f033410a67803035df8aa7fad4fb28ae74f4b4b63b18->leave($__internal_e58f38e846b531678e66f033410a67803035df8aa7fad4fb28ae74f4b4b63b18_prof);

        
        $__internal_279995398c8cfb3e3ee6af1f11ac3ef387be713535c87e0b0c4daf536709956a->leave($__internal_279995398c8cfb3e3ee6af1f11ac3ef387be713535c87e0b0c4daf536709956a_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_130642c8121cb1181bead3b6340c6a4cd9580359a7eb3559166a4fd87155c1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130642c8121cb1181bead3b6340c6a4cd9580359a7eb3559166a4fd87155c1f0->enter($__internal_130642c8121cb1181bead3b6340c6a4cd9580359a7eb3559166a4fd87155c1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_354b5b780f9bb7e596f730adebf96fc67acde64e78f2124164567756a0273788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354b5b780f9bb7e596f730adebf96fc67acde64e78f2124164567756a0273788->enter($__internal_354b5b780f9bb7e596f730adebf96fc67acde64e78f2124164567756a0273788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_354b5b780f9bb7e596f730adebf96fc67acde64e78f2124164567756a0273788->leave($__internal_354b5b780f9bb7e596f730adebf96fc67acde64e78f2124164567756a0273788_prof);

        
        $__internal_130642c8121cb1181bead3b6340c6a4cd9580359a7eb3559166a4fd87155c1f0->leave($__internal_130642c8121cb1181bead3b6340c6a4cd9580359a7eb3559166a4fd87155c1f0_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_eb27c10b6c7cd940ea65237b0dc828bacc897ef8fa06c70142ed4d3a27d8448c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb27c10b6c7cd940ea65237b0dc828bacc897ef8fa06c70142ed4d3a27d8448c->enter($__internal_eb27c10b6c7cd940ea65237b0dc828bacc897ef8fa06c70142ed4d3a27d8448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_03dd306ee44ec6e1e3df65a051ddf93135a01cd46b5021de0f658df5f8096754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dd306ee44ec6e1e3df65a051ddf93135a01cd46b5021de0f658df5f8096754->enter($__internal_03dd306ee44ec6e1e3df65a051ddf93135a01cd46b5021de0f658df5f8096754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_03dd306ee44ec6e1e3df65a051ddf93135a01cd46b5021de0f658df5f8096754->leave($__internal_03dd306ee44ec6e1e3df65a051ddf93135a01cd46b5021de0f658df5f8096754_prof);

        
        $__internal_eb27c10b6c7cd940ea65237b0dc828bacc897ef8fa06c70142ed4d3a27d8448c->leave($__internal_eb27c10b6c7cd940ea65237b0dc828bacc897ef8fa06c70142ed4d3a27d8448c_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_b90c351239af26f1dd457927d3a0e95e043441951b98bea0dabf45e48a45636e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90c351239af26f1dd457927d3a0e95e043441951b98bea0dabf45e48a45636e->enter($__internal_b90c351239af26f1dd457927d3a0e95e043441951b98bea0dabf45e48a45636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_a5c450131ed116bcd97910b257090590ffe6647b6817f2faad7730329d0acb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c450131ed116bcd97910b257090590ffe6647b6817f2faad7730329d0acb6c->enter($__internal_a5c450131ed116bcd97910b257090590ffe6647b6817f2faad7730329d0acb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_a5c450131ed116bcd97910b257090590ffe6647b6817f2faad7730329d0acb6c->leave($__internal_a5c450131ed116bcd97910b257090590ffe6647b6817f2faad7730329d0acb6c_prof);

        
        $__internal_b90c351239af26f1dd457927d3a0e95e043441951b98bea0dabf45e48a45636e->leave($__internal_b90c351239af26f1dd457927d3a0e95e043441951b98bea0dabf45e48a45636e_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_b6e38f89e7fc5da134c42932fc4318cef6465ffb94983bf3b17c096ce064a5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e38f89e7fc5da134c42932fc4318cef6465ffb94983bf3b17c096ce064a5ef->enter($__internal_b6e38f89e7fc5da134c42932fc4318cef6465ffb94983bf3b17c096ce064a5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_530386c386314decd10c44fa23ee08094f4a7491e7e6f90af1996320def75b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530386c386314decd10c44fa23ee08094f4a7491e7e6f90af1996320def75b27->enter($__internal_530386c386314decd10c44fa23ee08094f4a7491e7e6f90af1996320def75b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_530386c386314decd10c44fa23ee08094f4a7491e7e6f90af1996320def75b27->leave($__internal_530386c386314decd10c44fa23ee08094f4a7491e7e6f90af1996320def75b27_prof);

        
        $__internal_b6e38f89e7fc5da134c42932fc4318cef6465ffb94983bf3b17c096ce064a5ef->leave($__internal_b6e38f89e7fc5da134c42932fc4318cef6465ffb94983bf3b17c096ce064a5ef_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b434c80b64739b7c6556a71be237eed53c13a020716b25eba921acad930941fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b434c80b64739b7c6556a71be237eed53c13a020716b25eba921acad930941fc->enter($__internal_b434c80b64739b7c6556a71be237eed53c13a020716b25eba921acad930941fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bd89ad4125cda50b698b2647adfb3f5e6ca4ad86c78c54609e3e3ee9d063fa46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd89ad4125cda50b698b2647adfb3f5e6ca4ad86c78c54609e3e3ee9d063fa46->enter($__internal_bd89ad4125cda50b698b2647adfb3f5e6ca4ad86c78c54609e3e3ee9d063fa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_bd89ad4125cda50b698b2647adfb3f5e6ca4ad86c78c54609e3e3ee9d063fa46->leave($__internal_bd89ad4125cda50b698b2647adfb3f5e6ca4ad86c78c54609e3e3ee9d063fa46_prof);

        
        $__internal_b434c80b64739b7c6556a71be237eed53c13a020716b25eba921acad930941fc->leave($__internal_b434c80b64739b7c6556a71be237eed53c13a020716b25eba921acad930941fc_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_97236b9ba0f76f4ee6905ecbd8c7de98939de5c24f07b4c7a29a049e8c891396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97236b9ba0f76f4ee6905ecbd8c7de98939de5c24f07b4c7a29a049e8c891396->enter($__internal_97236b9ba0f76f4ee6905ecbd8c7de98939de5c24f07b4c7a29a049e8c891396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_5ba758b7499d384cd25c6e06a9686b4ade725dff0955513372988e859ef84219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba758b7499d384cd25c6e06a9686b4ade725dff0955513372988e859ef84219->enter($__internal_5ba758b7499d384cd25c6e06a9686b4ade725dff0955513372988e859ef84219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_5ba758b7499d384cd25c6e06a9686b4ade725dff0955513372988e859ef84219->leave($__internal_5ba758b7499d384cd25c6e06a9686b4ade725dff0955513372988e859ef84219_prof);

        
        $__internal_97236b9ba0f76f4ee6905ecbd8c7de98939de5c24f07b4c7a29a049e8c891396->leave($__internal_97236b9ba0f76f4ee6905ecbd8c7de98939de5c24f07b4c7a29a049e8c891396_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a56cf994e3bebfb97fd779b8e00896c3511f309ef96fbf25fb3960e85390948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a56cf994e3bebfb97fd779b8e00896c3511f309ef96fbf25fb3960e85390948->enter($__internal_6a56cf994e3bebfb97fd779b8e00896c3511f309ef96fbf25fb3960e85390948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_76277ed6a145f0566f17842046c41b1fb9e21b82fee0143e6ecdf6149cafd39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76277ed6a145f0566f17842046c41b1fb9e21b82fee0143e6ecdf6149cafd39c->enter($__internal_76277ed6a145f0566f17842046c41b1fb9e21b82fee0143e6ecdf6149cafd39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_76277ed6a145f0566f17842046c41b1fb9e21b82fee0143e6ecdf6149cafd39c->leave($__internal_76277ed6a145f0566f17842046c41b1fb9e21b82fee0143e6ecdf6149cafd39c_prof);

        
        $__internal_6a56cf994e3bebfb97fd779b8e00896c3511f309ef96fbf25fb3960e85390948->leave($__internal_6a56cf994e3bebfb97fd779b8e00896c3511f309ef96fbf25fb3960e85390948_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_dfbabac48e5023549d45f522ae987e21c31d7304065f9a754da2fc1c1c15b91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbabac48e5023549d45f522ae987e21c31d7304065f9a754da2fc1c1c15b91b->enter($__internal_dfbabac48e5023549d45f522ae987e21c31d7304065f9a754da2fc1c1c15b91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_d83d74be551a6cfc66bb2fd9acaf73bd0050498aa975421f19e6450aaf58730c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83d74be551a6cfc66bb2fd9acaf73bd0050498aa975421f19e6450aaf58730c->enter($__internal_d83d74be551a6cfc66bb2fd9acaf73bd0050498aa975421f19e6450aaf58730c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_d83d74be551a6cfc66bb2fd9acaf73bd0050498aa975421f19e6450aaf58730c->leave($__internal_d83d74be551a6cfc66bb2fd9acaf73bd0050498aa975421f19e6450aaf58730c_prof);

        
        $__internal_dfbabac48e5023549d45f522ae987e21c31d7304065f9a754da2fc1c1c15b91b->leave($__internal_dfbabac48e5023549d45f522ae987e21c31d7304065f9a754da2fc1c1c15b91b_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_efe856bafbbd1105a974c1fb07926b489b96d524778192ebe54b3f7718d318f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe856bafbbd1105a974c1fb07926b489b96d524778192ebe54b3f7718d318f9->enter($__internal_efe856bafbbd1105a974c1fb07926b489b96d524778192ebe54b3f7718d318f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_a741c63cb16dc890fb0d6e6b5f77517b91d05c74ea3a73640a0f04b763d7ada1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a741c63cb16dc890fb0d6e6b5f77517b91d05c74ea3a73640a0f04b763d7ada1->enter($__internal_a741c63cb16dc890fb0d6e6b5f77517b91d05c74ea3a73640a0f04b763d7ada1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_a741c63cb16dc890fb0d6e6b5f77517b91d05c74ea3a73640a0f04b763d7ada1->leave($__internal_a741c63cb16dc890fb0d6e6b5f77517b91d05c74ea3a73640a0f04b763d7ada1_prof);

        
        $__internal_efe856bafbbd1105a974c1fb07926b489b96d524778192ebe54b3f7718d318f9->leave($__internal_efe856bafbbd1105a974c1fb07926b489b96d524778192ebe54b3f7718d318f9_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f57c6c398aa4b41867965dba0e029a2d3514923487542a1e3ba706e4a9d6cbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57c6c398aa4b41867965dba0e029a2d3514923487542a1e3ba706e4a9d6cbcc->enter($__internal_f57c6c398aa4b41867965dba0e029a2d3514923487542a1e3ba706e4a9d6cbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c40ee408bbda87d0abfff5bf5998d3ba115cb00d4414f48285480e74adf8baaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40ee408bbda87d0abfff5bf5998d3ba115cb00d4414f48285480e74adf8baaf->enter($__internal_c40ee408bbda87d0abfff5bf5998d3ba115cb00d4414f48285480e74adf8baaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_c40ee408bbda87d0abfff5bf5998d3ba115cb00d4414f48285480e74adf8baaf->leave($__internal_c40ee408bbda87d0abfff5bf5998d3ba115cb00d4414f48285480e74adf8baaf_prof);

        
        $__internal_f57c6c398aa4b41867965dba0e029a2d3514923487542a1e3ba706e4a9d6cbcc->leave($__internal_f57c6c398aa4b41867965dba0e029a2d3514923487542a1e3ba706e4a9d6cbcc_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_39e62feeaa3555c83e99be1eb9f823b01be81a827c032c2db1a59954e3b0b11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e62feeaa3555c83e99be1eb9f823b01be81a827c032c2db1a59954e3b0b11e->enter($__internal_39e62feeaa3555c83e99be1eb9f823b01be81a827c032c2db1a59954e3b0b11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_0f712d34180725990a6558d9f414e139d720a6cc3661436df20acab57770fdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f712d34180725990a6558d9f414e139d720a6cc3661436df20acab57770fdb2->enter($__internal_0f712d34180725990a6558d9f414e139d720a6cc3661436df20acab57770fdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_0f712d34180725990a6558d9f414e139d720a6cc3661436df20acab57770fdb2->leave($__internal_0f712d34180725990a6558d9f414e139d720a6cc3661436df20acab57770fdb2_prof);

        
        $__internal_39e62feeaa3555c83e99be1eb9f823b01be81a827c032c2db1a59954e3b0b11e->leave($__internal_39e62feeaa3555c83e99be1eb9f823b01be81a827c032c2db1a59954e3b0b11e_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_a6264204e1e1ce7f60bd580ab4ba1a506d72888ea0e5ab5691832fbd09d5a613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6264204e1e1ce7f60bd580ab4ba1a506d72888ea0e5ab5691832fbd09d5a613->enter($__internal_a6264204e1e1ce7f60bd580ab4ba1a506d72888ea0e5ab5691832fbd09d5a613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2c73fd2314539b3ed3768481fafa82580eaa18daddfcb1815ebb6b5d11dec677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c73fd2314539b3ed3768481fafa82580eaa18daddfcb1815ebb6b5d11dec677->enter($__internal_2c73fd2314539b3ed3768481fafa82580eaa18daddfcb1815ebb6b5d11dec677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2c73fd2314539b3ed3768481fafa82580eaa18daddfcb1815ebb6b5d11dec677->leave($__internal_2c73fd2314539b3ed3768481fafa82580eaa18daddfcb1815ebb6b5d11dec677_prof);

        
        $__internal_a6264204e1e1ce7f60bd580ab4ba1a506d72888ea0e5ab5691832fbd09d5a613->leave($__internal_a6264204e1e1ce7f60bd580ab4ba1a506d72888ea0e5ab5691832fbd09d5a613_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_711088c647b303be1417c2db5da6f62141f24fe4814aa371714d75cfa225e635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711088c647b303be1417c2db5da6f62141f24fe4814aa371714d75cfa225e635->enter($__internal_711088c647b303be1417c2db5da6f62141f24fe4814aa371714d75cfa225e635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_d7bfe296f2350f1f0742fe45f7e1e172fce4845962266223130460e37d5468b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bfe296f2350f1f0742fe45f7e1e172fce4845962266223130460e37d5468b6->enter($__internal_d7bfe296f2350f1f0742fe45f7e1e172fce4845962266223130460e37d5468b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_d7bfe296f2350f1f0742fe45f7e1e172fce4845962266223130460e37d5468b6->leave($__internal_d7bfe296f2350f1f0742fe45f7e1e172fce4845962266223130460e37d5468b6_prof);

        
        $__internal_711088c647b303be1417c2db5da6f62141f24fe4814aa371714d75cfa225e635->leave($__internal_711088c647b303be1417c2db5da6f62141f24fe4814aa371714d75cfa225e635_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
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
", "@EasyAdmin/default/layout.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
