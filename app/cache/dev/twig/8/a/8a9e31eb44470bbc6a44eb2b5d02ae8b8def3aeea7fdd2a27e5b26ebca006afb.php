<?php

/* layout.html.twig */
class __TwigTemplate_96fd477611942086fe29fb68d076b7bad333fe46761caecc20f13a249e736b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df6802a90f0782b88f870232c82e394747c18f90cd812156d2e89c50d55470b2 = $this->env->getExtension("native_profiler");
        $__internal_df6802a90f0782b88f870232c82e394747c18f90cd812156d2e89c50d55470b2->enter($__internal_df6802a90f0782b88f870232c82e394747c18f90cd812156d2e89c50d55470b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_df6802a90f0782b88f870232c82e394747c18f90cd812156d2e89c50d55470b2->leave($__internal_df6802a90f0782b88f870232c82e394747c18f90cd812156d2e89c50d55470b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7378f2e364dc58ee196c42164c5ed10d36103717eb35e9c85a029d3d917f0fe5 = $this->env->getExtension("native_profiler");
        $__internal_7378f2e364dc58ee196c42164c5ed10d36103717eb35e9c85a029d3d917f0fe5->enter($__internal_7378f2e364dc58ee196c42164c5ed10d36103717eb35e9c85a029d3d917f0fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inicio Login";
        
        $__internal_7378f2e364dc58ee196c42164c5ed10d36103717eb35e9c85a029d3d917f0fe5->leave($__internal_7378f2e364dc58ee196c42164c5ed10d36103717eb35e9c85a029d3d917f0fe5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59952c11e8cddaf783360c94405f5e28b4129ab815fb5e1f2c844e35b1c32842 = $this->env->getExtension("native_profiler");
        $__internal_59952c11e8cddaf783360c94405f5e28b4129ab815fb5e1f2c844e35b1c32842->enter($__internal_59952c11e8cddaf783360c94405f5e28b4129ab815fb5e1f2c844e35b1c32842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css1/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_59952c11e8cddaf783360c94405f5e28b4129ab815fb5e1f2c844e35b1c32842->leave($__internal_59952c11e8cddaf783360c94405f5e28b4129ab815fb5e1f2c844e35b1c32842_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_26333fc15bfd80fad63e4ceb91e6a0de1f3b522b75efaddc24d96fc0c070c71e = $this->env->getExtension("native_profiler");
        $__internal_26333fc15bfd80fad63e4ceb91e6a0de1f3b522b75efaddc24d96fc0c070c71e->enter($__internal_26333fc15bfd80fad63e4ceb91e6a0de1f3b522b75efaddc24d96fc0c070c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_26333fc15bfd80fad63e4ceb91e6a0de1f3b522b75efaddc24d96fc0c070c71e->leave($__internal_26333fc15bfd80fad63e4ceb91e6a0de1f3b522b75efaddc24d96fc0c070c71e_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01632e85769fca8d5c64f269a0fb456dcf4debc084d26fa3197c98ae6a3e04e3 = $this->env->getExtension("native_profiler");
        $__internal_01632e85769fca8d5c64f269a0fb456dcf4debc084d26fa3197c98ae6a3e04e3->enter($__internal_01632e85769fca8d5c64f269a0fb456dcf4debc084d26fa3197c98ae6a3e04e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_01632e85769fca8d5c64f269a0fb456dcf4debc084d26fa3197c98ae6a3e04e3->leave($__internal_01632e85769fca8d5c64f269a0fb456dcf4debc084d26fa3197c98ae6a3e04e3_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Inicio Login{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/css1/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {{ include('menu.html.twig')}}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/
/* */
