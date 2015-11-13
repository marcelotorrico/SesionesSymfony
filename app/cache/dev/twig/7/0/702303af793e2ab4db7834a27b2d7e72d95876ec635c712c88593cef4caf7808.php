<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7b0b3cb50af7f060363876318b885258c3025a6e700a1cad43df6c374a5b6b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee0c4e5c25e5b0b4fc2eb042c625a0e2bd157d1a96186b9dbc2dbf362ce0998b = $this->env->getExtension("native_profiler");
        $__internal_ee0c4e5c25e5b0b4fc2eb042c625a0e2bd157d1a96186b9dbc2dbf362ce0998b->enter($__internal_ee0c4e5c25e5b0b4fc2eb042c625a0e2bd157d1a96186b9dbc2dbf362ce0998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0c4e5c25e5b0b4fc2eb042c625a0e2bd157d1a96186b9dbc2dbf362ce0998b->leave($__internal_ee0c4e5c25e5b0b4fc2eb042c625a0e2bd157d1a96186b9dbc2dbf362ce0998b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d83d9b0103b37b8c072903273dd100e88c9b2ce343013e10754dfe31eaf7a2a = $this->env->getExtension("native_profiler");
        $__internal_8d83d9b0103b37b8c072903273dd100e88c9b2ce343013e10754dfe31eaf7a2a->enter($__internal_8d83d9b0103b37b8c072903273dd100e88c9b2ce343013e10754dfe31eaf7a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d83d9b0103b37b8c072903273dd100e88c9b2ce343013e10754dfe31eaf7a2a->leave($__internal_8d83d9b0103b37b8c072903273dd100e88c9b2ce343013e10754dfe31eaf7a2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4a5e53b7b920c21707345b20a567a8b53b719cbb0ba81c2d0470718c5700745 = $this->env->getExtension("native_profiler");
        $__internal_d4a5e53b7b920c21707345b20a567a8b53b719cbb0ba81c2d0470718c5700745->enter($__internal_d4a5e53b7b920c21707345b20a567a8b53b719cbb0ba81c2d0470718c5700745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4a5e53b7b920c21707345b20a567a8b53b719cbb0ba81c2d0470718c5700745->leave($__internal_d4a5e53b7b920c21707345b20a567a8b53b719cbb0ba81c2d0470718c5700745_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb9bd7d6618a7d8f90c6207fceeac7fc4d6dd6db1d982e4fa8ae697633d1863 = $this->env->getExtension("native_profiler");
        $__internal_9bb9bd7d6618a7d8f90c6207fceeac7fc4d6dd6db1d982e4fa8ae697633d1863->enter($__internal_9bb9bd7d6618a7d8f90c6207fceeac7fc4d6dd6db1d982e4fa8ae697633d1863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9bb9bd7d6618a7d8f90c6207fceeac7fc4d6dd6db1d982e4fa8ae697633d1863->leave($__internal_9bb9bd7d6618a7d8f90c6207fceeac7fc4d6dd6db1d982e4fa8ae697633d1863_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
