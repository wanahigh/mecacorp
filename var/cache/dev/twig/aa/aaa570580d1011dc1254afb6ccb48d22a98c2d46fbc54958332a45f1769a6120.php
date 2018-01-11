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
        $__internal_9b705f51c903887d732e8f649fa52a4c6e71a7871b71f13aa44861cf04dcd236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b705f51c903887d732e8f649fa52a4c6e71a7871b71f13aa44861cf04dcd236->enter($__internal_9b705f51c903887d732e8f649fa52a4c6e71a7871b71f13aa44861cf04dcd236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_88b6942a117e629c0cb628654e220366d1416eba7447220b3ffec0a63a99da20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b6942a117e629c0cb628654e220366d1416eba7447220b3ffec0a63a99da20->enter($__internal_88b6942a117e629c0cb628654e220366d1416eba7447220b3ffec0a63a99da20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_9b705f51c903887d732e8f649fa52a4c6e71a7871b71f13aa44861cf04dcd236->leave($__internal_9b705f51c903887d732e8f649fa52a4c6e71a7871b71f13aa44861cf04dcd236_prof);

        
        $__internal_88b6942a117e629c0cb628654e220366d1416eba7447220b3ffec0a63a99da20->leave($__internal_88b6942a117e629c0cb628654e220366d1416eba7447220b3ffec0a63a99da20_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0bc23abcb01ce79b409a8e8424aab8310eadee9b0d294c41f06bbef15c298fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc23abcb01ce79b409a8e8424aab8310eadee9b0d294c41f06bbef15c298fb1->enter($__internal_0bc23abcb01ce79b409a8e8424aab8310eadee9b0d294c41f06bbef15c298fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f7c56a04b7f197fd01761e2d6bda2d6f0acaea20836b72d89d51d47cbef57b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c56a04b7f197fd01761e2d6bda2d6f0acaea20836b72d89d51d47cbef57b23->enter($__internal_f7c56a04b7f197fd01761e2d6bda2d6f0acaea20836b72d89d51d47cbef57b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f7c56a04b7f197fd01761e2d6bda2d6f0acaea20836b72d89d51d47cbef57b23->leave($__internal_f7c56a04b7f197fd01761e2d6bda2d6f0acaea20836b72d89d51d47cbef57b23_prof);

        
        $__internal_0bc23abcb01ce79b409a8e8424aab8310eadee9b0d294c41f06bbef15c298fb1->leave($__internal_0bc23abcb01ce79b409a8e8424aab8310eadee9b0d294c41f06bbef15c298fb1_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_0c26b66413c39002651f817542baebf3bf0579dd2950c97b3336c94a7ef5f3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c26b66413c39002651f817542baebf3bf0579dd2950c97b3336c94a7ef5f3dc->enter($__internal_0c26b66413c39002651f817542baebf3bf0579dd2950c97b3336c94a7ef5f3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_358c9f922d05c3a71f9dbde98e951612b0a31806651fd4e25c0fa0b25915ecd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358c9f922d05c3a71f9dbde98e951612b0a31806651fd4e25c0fa0b25915ecd4->enter($__internal_358c9f922d05c3a71f9dbde98e951612b0a31806651fd4e25c0fa0b25915ecd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_358c9f922d05c3a71f9dbde98e951612b0a31806651fd4e25c0fa0b25915ecd4->leave($__internal_358c9f922d05c3a71f9dbde98e951612b0a31806651fd4e25c0fa0b25915ecd4_prof);

        
        $__internal_0c26b66413c39002651f817542baebf3bf0579dd2950c97b3336c94a7ef5f3dc->leave($__internal_0c26b66413c39002651f817542baebf3bf0579dd2950c97b3336c94a7ef5f3dc_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_c6a151b8c0ea3b251897d9aa335ff3a87b755f9c40887a4c20e173f31b1bc6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a151b8c0ea3b251897d9aa335ff3a87b755f9c40887a4c20e173f31b1bc6bc->enter($__internal_c6a151b8c0ea3b251897d9aa335ff3a87b755f9c40887a4c20e173f31b1bc6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_016805a399238c058909ee1b405b49f2567668d20a82bce7ece9eda453802c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016805a399238c058909ee1b405b49f2567668d20a82bce7ece9eda453802c8f->enter($__internal_016805a399238c058909ee1b405b49f2567668d20a82bce7ece9eda453802c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_016805a399238c058909ee1b405b49f2567668d20a82bce7ece9eda453802c8f->leave($__internal_016805a399238c058909ee1b405b49f2567668d20a82bce7ece9eda453802c8f_prof);

        
        $__internal_c6a151b8c0ea3b251897d9aa335ff3a87b755f9c40887a4c20e173f31b1bc6bc->leave($__internal_c6a151b8c0ea3b251897d9aa335ff3a87b755f9c40887a4c20e173f31b1bc6bc_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_dd2d680c115386faa34a8d9746700f7c7b9866826b16f403aebcc768b015850c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2d680c115386faa34a8d9746700f7c7b9866826b16f403aebcc768b015850c->enter($__internal_dd2d680c115386faa34a8d9746700f7c7b9866826b16f403aebcc768b015850c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_ad5bfe4be803a5828d11c3e8ae4d0693e0551bcb4fae1d6e2c26ae440e30dbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5bfe4be803a5828d11c3e8ae4d0693e0551bcb4fae1d6e2c26ae440e30dbf2->enter($__internal_ad5bfe4be803a5828d11c3e8ae4d0693e0551bcb4fae1d6e2c26ae440e30dbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_ad5bfe4be803a5828d11c3e8ae4d0693e0551bcb4fae1d6e2c26ae440e30dbf2->leave($__internal_ad5bfe4be803a5828d11c3e8ae4d0693e0551bcb4fae1d6e2c26ae440e30dbf2_prof);

        
        $__internal_dd2d680c115386faa34a8d9746700f7c7b9866826b16f403aebcc768b015850c->leave($__internal_dd2d680c115386faa34a8d9746700f7c7b9866826b16f403aebcc768b015850c_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_918046b94cd0eb4b77e87152693d64fa93708e6d9ccd131bd077038544b1ac39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918046b94cd0eb4b77e87152693d64fa93708e6d9ccd131bd077038544b1ac39->enter($__internal_918046b94cd0eb4b77e87152693d64fa93708e6d9ccd131bd077038544b1ac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_edb435373ce9085ff1e08538608ad036796c83a2aad314a009e34807e63cc84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb435373ce9085ff1e08538608ad036796c83a2aad314a009e34807e63cc84e->enter($__internal_edb435373ce9085ff1e08538608ad036796c83a2aad314a009e34807e63cc84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_edb435373ce9085ff1e08538608ad036796c83a2aad314a009e34807e63cc84e->leave($__internal_edb435373ce9085ff1e08538608ad036796c83a2aad314a009e34807e63cc84e_prof);

        
        $__internal_918046b94cd0eb4b77e87152693d64fa93708e6d9ccd131bd077038544b1ac39->leave($__internal_918046b94cd0eb4b77e87152693d64fa93708e6d9ccd131bd077038544b1ac39_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e1d411813de5cb51f0d4f4dc4e8d97ccdc12b0f7539c060048c9933b132cbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1d411813de5cb51f0d4f4dc4e8d97ccdc12b0f7539c060048c9933b132cbad->enter($__internal_3e1d411813de5cb51f0d4f4dc4e8d97ccdc12b0f7539c060048c9933b132cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4510917362701de6743544efd328daf8ebb9061577888be1f7774d8c830d411a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4510917362701de6743544efd328daf8ebb9061577888be1f7774d8c830d411a->enter($__internal_4510917362701de6743544efd328daf8ebb9061577888be1f7774d8c830d411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4510917362701de6743544efd328daf8ebb9061577888be1f7774d8c830d411a->leave($__internal_4510917362701de6743544efd328daf8ebb9061577888be1f7774d8c830d411a_prof);

        
        $__internal_3e1d411813de5cb51f0d4f4dc4e8d97ccdc12b0f7539c060048c9933b132cbad->leave($__internal_3e1d411813de5cb51f0d4f4dc4e8d97ccdc12b0f7539c060048c9933b132cbad_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5838e5bfd9da90e85472e81968819cc14966f3507f9732116937ea900e8e5086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5838e5bfd9da90e85472e81968819cc14966f3507f9732116937ea900e8e5086->enter($__internal_5838e5bfd9da90e85472e81968819cc14966f3507f9732116937ea900e8e5086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_4cc9f7b762f2043dff761dc652ac7157a321cf1c9ab4985bb01b6453df9efe3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc9f7b762f2043dff761dc652ac7157a321cf1c9ab4985bb01b6453df9efe3d->enter($__internal_4cc9f7b762f2043dff761dc652ac7157a321cf1c9ab4985bb01b6453df9efe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_4cc9f7b762f2043dff761dc652ac7157a321cf1c9ab4985bb01b6453df9efe3d->leave($__internal_4cc9f7b762f2043dff761dc652ac7157a321cf1c9ab4985bb01b6453df9efe3d_prof);

        
        $__internal_5838e5bfd9da90e85472e81968819cc14966f3507f9732116937ea900e8e5086->leave($__internal_5838e5bfd9da90e85472e81968819cc14966f3507f9732116937ea900e8e5086_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_72c5990ecc781c7cda9c6c44c6d7242b9576a8f2a7cafe5bb2bdb8f48bdd692e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c5990ecc781c7cda9c6c44c6d7242b9576a8f2a7cafe5bb2bdb8f48bdd692e->enter($__internal_72c5990ecc781c7cda9c6c44c6d7242b9576a8f2a7cafe5bb2bdb8f48bdd692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_facae262c705fda049907f75b3ebe44d4a70d8800c14e510d12ae043c69a9d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facae262c705fda049907f75b3ebe44d4a70d8800c14e510d12ae043c69a9d1c->enter($__internal_facae262c705fda049907f75b3ebe44d4a70d8800c14e510d12ae043c69a9d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_facae262c705fda049907f75b3ebe44d4a70d8800c14e510d12ae043c69a9d1c->leave($__internal_facae262c705fda049907f75b3ebe44d4a70d8800c14e510d12ae043c69a9d1c_prof);

        
        $__internal_72c5990ecc781c7cda9c6c44c6d7242b9576a8f2a7cafe5bb2bdb8f48bdd692e->leave($__internal_72c5990ecc781c7cda9c6c44c6d7242b9576a8f2a7cafe5bb2bdb8f48bdd692e_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_89221a692d611643f18782d82621b8cbb692b404cdb4dc0e79d7237aee4cc09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89221a692d611643f18782d82621b8cbb692b404cdb4dc0e79d7237aee4cc09a->enter($__internal_89221a692d611643f18782d82621b8cbb692b404cdb4dc0e79d7237aee4cc09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_d88890b9fbb6e7dcda30b3e8c36a79cda416565fed5c9b491a0d7e0c22594690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88890b9fbb6e7dcda30b3e8c36a79cda416565fed5c9b491a0d7e0c22594690->enter($__internal_d88890b9fbb6e7dcda30b3e8c36a79cda416565fed5c9b491a0d7e0c22594690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_d88890b9fbb6e7dcda30b3e8c36a79cda416565fed5c9b491a0d7e0c22594690->leave($__internal_d88890b9fbb6e7dcda30b3e8c36a79cda416565fed5c9b491a0d7e0c22594690_prof);

        
        $__internal_89221a692d611643f18782d82621b8cbb692b404cdb4dc0e79d7237aee4cc09a->leave($__internal_89221a692d611643f18782d82621b8cbb692b404cdb4dc0e79d7237aee4cc09a_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_26b9150dff28f5098a3a945f1b0c9dfd755c5a72f24107d86af1fd5c35282ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b9150dff28f5098a3a945f1b0c9dfd755c5a72f24107d86af1fd5c35282ba2->enter($__internal_26b9150dff28f5098a3a945f1b0c9dfd755c5a72f24107d86af1fd5c35282ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_da05fd485749837d9dc978365158b2d27598dadbda7b200ff5471db57b08e485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da05fd485749837d9dc978365158b2d27598dadbda7b200ff5471db57b08e485->enter($__internal_da05fd485749837d9dc978365158b2d27598dadbda7b200ff5471db57b08e485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_da05fd485749837d9dc978365158b2d27598dadbda7b200ff5471db57b08e485->leave($__internal_da05fd485749837d9dc978365158b2d27598dadbda7b200ff5471db57b08e485_prof);

        
        $__internal_26b9150dff28f5098a3a945f1b0c9dfd755c5a72f24107d86af1fd5c35282ba2->leave($__internal_26b9150dff28f5098a3a945f1b0c9dfd755c5a72f24107d86af1fd5c35282ba2_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_db274316b6999d44177fe57c907e222e5101ae27afb51ce8dfa436a5f6443432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db274316b6999d44177fe57c907e222e5101ae27afb51ce8dfa436a5f6443432->enter($__internal_db274316b6999d44177fe57c907e222e5101ae27afb51ce8dfa436a5f6443432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_c788a2a87432d36842f49539cea4508a12fccace4a0b7110415407eda1a2db67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c788a2a87432d36842f49539cea4508a12fccace4a0b7110415407eda1a2db67->enter($__internal_c788a2a87432d36842f49539cea4508a12fccace4a0b7110415407eda1a2db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_c788a2a87432d36842f49539cea4508a12fccace4a0b7110415407eda1a2db67->leave($__internal_c788a2a87432d36842f49539cea4508a12fccace4a0b7110415407eda1a2db67_prof);

        
        $__internal_db274316b6999d44177fe57c907e222e5101ae27afb51ce8dfa436a5f6443432->leave($__internal_db274316b6999d44177fe57c907e222e5101ae27afb51ce8dfa436a5f6443432_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_32755364bca3eaa4d67ec23b45b7dec35fe4976933851faa7e2067fecf62378c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32755364bca3eaa4d67ec23b45b7dec35fe4976933851faa7e2067fecf62378c->enter($__internal_32755364bca3eaa4d67ec23b45b7dec35fe4976933851faa7e2067fecf62378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_1b46f923d6859959f699f8de65cce5aa91c3435557fca5203fc559ac90c4eea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b46f923d6859959f699f8de65cce5aa91c3435557fca5203fc559ac90c4eea0->enter($__internal_1b46f923d6859959f699f8de65cce5aa91c3435557fca5203fc559ac90c4eea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_1b46f923d6859959f699f8de65cce5aa91c3435557fca5203fc559ac90c4eea0->leave($__internal_1b46f923d6859959f699f8de65cce5aa91c3435557fca5203fc559ac90c4eea0_prof);

        
        $__internal_32755364bca3eaa4d67ec23b45b7dec35fe4976933851faa7e2067fecf62378c->leave($__internal_32755364bca3eaa4d67ec23b45b7dec35fe4976933851faa7e2067fecf62378c_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_9c64e922ed9e00589433a9edfa2cab7b7b5ed53ad5204ef503c0c18a5c27eef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c64e922ed9e00589433a9edfa2cab7b7b5ed53ad5204ef503c0c18a5c27eef9->enter($__internal_9c64e922ed9e00589433a9edfa2cab7b7b5ed53ad5204ef503c0c18a5c27eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_11bbe88317d58d40333060e9eb6137ab6c1a14402dd30fed4844a4f068bb1211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bbe88317d58d40333060e9eb6137ab6c1a14402dd30fed4844a4f068bb1211->enter($__internal_11bbe88317d58d40333060e9eb6137ab6c1a14402dd30fed4844a4f068bb1211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_11bbe88317d58d40333060e9eb6137ab6c1a14402dd30fed4844a4f068bb1211->leave($__internal_11bbe88317d58d40333060e9eb6137ab6c1a14402dd30fed4844a4f068bb1211_prof);

        
        $__internal_9c64e922ed9e00589433a9edfa2cab7b7b5ed53ad5204ef503c0c18a5c27eef9->leave($__internal_9c64e922ed9e00589433a9edfa2cab7b7b5ed53ad5204ef503c0c18a5c27eef9_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_cad5dbe4b6f72ae3629f1384f8c6438ae77b28352ccfbe5119003b5adfed39a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad5dbe4b6f72ae3629f1384f8c6438ae77b28352ccfbe5119003b5adfed39a6->enter($__internal_cad5dbe4b6f72ae3629f1384f8c6438ae77b28352ccfbe5119003b5adfed39a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_41cf6df0662a712e489edee33e7af33aa308580534a6fbd6be72932c3b4e19ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cf6df0662a712e489edee33e7af33aa308580534a6fbd6be72932c3b4e19ec->enter($__internal_41cf6df0662a712e489edee33e7af33aa308580534a6fbd6be72932c3b4e19ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_41cf6df0662a712e489edee33e7af33aa308580534a6fbd6be72932c3b4e19ec->leave($__internal_41cf6df0662a712e489edee33e7af33aa308580534a6fbd6be72932c3b4e19ec_prof);

        
        $__internal_cad5dbe4b6f72ae3629f1384f8c6438ae77b28352ccfbe5119003b5adfed39a6->leave($__internal_cad5dbe4b6f72ae3629f1384f8c6438ae77b28352ccfbe5119003b5adfed39a6_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b3fad67e5d5abc3eddc06224dec3bdeb0708b5bfa0143d6c7953e2a3001d7379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fad67e5d5abc3eddc06224dec3bdeb0708b5bfa0143d6c7953e2a3001d7379->enter($__internal_b3fad67e5d5abc3eddc06224dec3bdeb0708b5bfa0143d6c7953e2a3001d7379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_1a60bed09e8327e8e8294e81e4cf20745eb33eb461c947ad2c32e243a0056376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a60bed09e8327e8e8294e81e4cf20745eb33eb461c947ad2c32e243a0056376->enter($__internal_1a60bed09e8327e8e8294e81e4cf20745eb33eb461c947ad2c32e243a0056376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_1a60bed09e8327e8e8294e81e4cf20745eb33eb461c947ad2c32e243a0056376->leave($__internal_1a60bed09e8327e8e8294e81e4cf20745eb33eb461c947ad2c32e243a0056376_prof);

        
        $__internal_b3fad67e5d5abc3eddc06224dec3bdeb0708b5bfa0143d6c7953e2a3001d7379->leave($__internal_b3fad67e5d5abc3eddc06224dec3bdeb0708b5bfa0143d6c7953e2a3001d7379_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a6b1a45c14db3ecda28f5730ddaee8b40c7d631ec6da0b86447a390f040e69da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b1a45c14db3ecda28f5730ddaee8b40c7d631ec6da0b86447a390f040e69da->enter($__internal_a6b1a45c14db3ecda28f5730ddaee8b40c7d631ec6da0b86447a390f040e69da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_22367c066b57c3b34c46c730a18eab6a919625c4659d8f96bcc320e5ddaede46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22367c066b57c3b34c46c730a18eab6a919625c4659d8f96bcc320e5ddaede46->enter($__internal_22367c066b57c3b34c46c730a18eab6a919625c4659d8f96bcc320e5ddaede46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_22367c066b57c3b34c46c730a18eab6a919625c4659d8f96bcc320e5ddaede46->leave($__internal_22367c066b57c3b34c46c730a18eab6a919625c4659d8f96bcc320e5ddaede46_prof);

        
        $__internal_a6b1a45c14db3ecda28f5730ddaee8b40c7d631ec6da0b86447a390f040e69da->leave($__internal_a6b1a45c14db3ecda28f5730ddaee8b40c7d631ec6da0b86447a390f040e69da_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_fb7a63118ef03c382558bff16dd6ba7b50d2ea6700c95aea88a3afca3409ef4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7a63118ef03c382558bff16dd6ba7b50d2ea6700c95aea88a3afca3409ef4c->enter($__internal_fb7a63118ef03c382558bff16dd6ba7b50d2ea6700c95aea88a3afca3409ef4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b5140445d6f4f2aaa84a7d882977ad3c2287aceed4e833c88bab1ae2f5d94984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5140445d6f4f2aaa84a7d882977ad3c2287aceed4e833c88bab1ae2f5d94984->enter($__internal_b5140445d6f4f2aaa84a7d882977ad3c2287aceed4e833c88bab1ae2f5d94984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b5140445d6f4f2aaa84a7d882977ad3c2287aceed4e833c88bab1ae2f5d94984->leave($__internal_b5140445d6f4f2aaa84a7d882977ad3c2287aceed4e833c88bab1ae2f5d94984_prof);

        
        $__internal_fb7a63118ef03c382558bff16dd6ba7b50d2ea6700c95aea88a3afca3409ef4c->leave($__internal_fb7a63118ef03c382558bff16dd6ba7b50d2ea6700c95aea88a3afca3409ef4c_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_8f705b4a460eb1af826aba0c38a3377bb6ade4082c90c64efc1f213a4ece0e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f705b4a460eb1af826aba0c38a3377bb6ade4082c90c64efc1f213a4ece0e01->enter($__internal_8f705b4a460eb1af826aba0c38a3377bb6ade4082c90c64efc1f213a4ece0e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_ed1f97ff74742ba133aea8fd8b7872e65184017fe7cb331f8feca17620949f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1f97ff74742ba133aea8fd8b7872e65184017fe7cb331f8feca17620949f06->enter($__internal_ed1f97ff74742ba133aea8fd8b7872e65184017fe7cb331f8feca17620949f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_ed1f97ff74742ba133aea8fd8b7872e65184017fe7cb331f8feca17620949f06->leave($__internal_ed1f97ff74742ba133aea8fd8b7872e65184017fe7cb331f8feca17620949f06_prof);

        
        $__internal_8f705b4a460eb1af826aba0c38a3377bb6ade4082c90c64efc1f213a4ece0e01->leave($__internal_8f705b4a460eb1af826aba0c38a3377bb6ade4082c90c64efc1f213a4ece0e01_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_234300eca91604f82919d871fbf50526746a9930c092e324773a13e5c39f637e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234300eca91604f82919d871fbf50526746a9930c092e324773a13e5c39f637e->enter($__internal_234300eca91604f82919d871fbf50526746a9930c092e324773a13e5c39f637e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_3dfddde02be530a3d17cf69e59f568b0488c0defbbe8dc3e9010742f4c52ca5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfddde02be530a3d17cf69e59f568b0488c0defbbe8dc3e9010742f4c52ca5e->enter($__internal_3dfddde02be530a3d17cf69e59f568b0488c0defbbe8dc3e9010742f4c52ca5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_3dfddde02be530a3d17cf69e59f568b0488c0defbbe8dc3e9010742f4c52ca5e->leave($__internal_3dfddde02be530a3d17cf69e59f568b0488c0defbbe8dc3e9010742f4c52ca5e_prof);

        
        $__internal_234300eca91604f82919d871fbf50526746a9930c092e324773a13e5c39f637e->leave($__internal_234300eca91604f82919d871fbf50526746a9930c092e324773a13e5c39f637e_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3e3807c0fd75b3922371fb80d9e136933e63722abb48a7f1e6c584c4779ab57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3807c0fd75b3922371fb80d9e136933e63722abb48a7f1e6c584c4779ab57e->enter($__internal_3e3807c0fd75b3922371fb80d9e136933e63722abb48a7f1e6c584c4779ab57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c6e841d2f8ae5f5d43ba9cee5401a24e4ffd8c7a4e4e011c6585edc1a7afa099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e841d2f8ae5f5d43ba9cee5401a24e4ffd8c7a4e4e011c6585edc1a7afa099->enter($__internal_c6e841d2f8ae5f5d43ba9cee5401a24e4ffd8c7a4e4e011c6585edc1a7afa099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_c6e841d2f8ae5f5d43ba9cee5401a24e4ffd8c7a4e4e011c6585edc1a7afa099->leave($__internal_c6e841d2f8ae5f5d43ba9cee5401a24e4ffd8c7a4e4e011c6585edc1a7afa099_prof);

        
        $__internal_3e3807c0fd75b3922371fb80d9e136933e63722abb48a7f1e6c584c4779ab57e->leave($__internal_3e3807c0fd75b3922371fb80d9e136933e63722abb48a7f1e6c584c4779ab57e_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_4559f4c0be8cef62e6616fe91c1f1ea59e2ea4eb2975b50f4a77913113af9edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4559f4c0be8cef62e6616fe91c1f1ea59e2ea4eb2975b50f4a77913113af9edd->enter($__internal_4559f4c0be8cef62e6616fe91c1f1ea59e2ea4eb2975b50f4a77913113af9edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_da448340ecb133b926f7d957f848e9dc26a7d762b20b3b3d5a35faee36c62c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da448340ecb133b926f7d957f848e9dc26a7d762b20b3b3d5a35faee36c62c39->enter($__internal_da448340ecb133b926f7d957f848e9dc26a7d762b20b3b3d5a35faee36c62c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_da448340ecb133b926f7d957f848e9dc26a7d762b20b3b3d5a35faee36c62c39->leave($__internal_da448340ecb133b926f7d957f848e9dc26a7d762b20b3b3d5a35faee36c62c39_prof);

        
        $__internal_4559f4c0be8cef62e6616fe91c1f1ea59e2ea4eb2975b50f4a77913113af9edd->leave($__internal_4559f4c0be8cef62e6616fe91c1f1ea59e2ea4eb2975b50f4a77913113af9edd_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_29a525ddcd777ddd58e079eb1373a32ad171ddd63e3dda3d67d7b9a5097786ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a525ddcd777ddd58e079eb1373a32ad171ddd63e3dda3d67d7b9a5097786ea->enter($__internal_29a525ddcd777ddd58e079eb1373a32ad171ddd63e3dda3d67d7b9a5097786ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d5f28ef1dbadfc9542ccaa55d5b26be80ec5dc6785ca0dfd672ff221af784624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f28ef1dbadfc9542ccaa55d5b26be80ec5dc6785ca0dfd672ff221af784624->enter($__internal_d5f28ef1dbadfc9542ccaa55d5b26be80ec5dc6785ca0dfd672ff221af784624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d5f28ef1dbadfc9542ccaa55d5b26be80ec5dc6785ca0dfd672ff221af784624->leave($__internal_d5f28ef1dbadfc9542ccaa55d5b26be80ec5dc6785ca0dfd672ff221af784624_prof);

        
        $__internal_29a525ddcd777ddd58e079eb1373a32ad171ddd63e3dda3d67d7b9a5097786ea->leave($__internal_29a525ddcd777ddd58e079eb1373a32ad171ddd63e3dda3d67d7b9a5097786ea_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2e0c8a76abb50042d66409428915a4f59a5a8b7dcec54b971933262c9d2c4c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0c8a76abb50042d66409428915a4f59a5a8b7dcec54b971933262c9d2c4c14->enter($__internal_2e0c8a76abb50042d66409428915a4f59a5a8b7dcec54b971933262c9d2c4c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3b1d8299b6769c344211add9ccd08d58777110dfbf24a52c198122b4993fe413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1d8299b6769c344211add9ccd08d58777110dfbf24a52c198122b4993fe413->enter($__internal_3b1d8299b6769c344211add9ccd08d58777110dfbf24a52c198122b4993fe413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_3b1d8299b6769c344211add9ccd08d58777110dfbf24a52c198122b4993fe413->leave($__internal_3b1d8299b6769c344211add9ccd08d58777110dfbf24a52c198122b4993fe413_prof);

        
        $__internal_2e0c8a76abb50042d66409428915a4f59a5a8b7dcec54b971933262c9d2c4c14->leave($__internal_2e0c8a76abb50042d66409428915a4f59a5a8b7dcec54b971933262c9d2c4c14_prof);

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
", "@EasyAdmin/default/layout.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
