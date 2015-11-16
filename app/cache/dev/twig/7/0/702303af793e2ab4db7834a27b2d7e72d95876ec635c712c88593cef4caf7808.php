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
        $__internal_64abf0012f58f9f220be0f16d75f0bfb5eb65b4662ab31ea7ffe3d87cb9d640e = $this->env->getExtension("native_profiler");
        $__internal_64abf0012f58f9f220be0f16d75f0bfb5eb65b4662ab31ea7ffe3d87cb9d640e->enter($__internal_64abf0012f58f9f220be0f16d75f0bfb5eb65b4662ab31ea7ffe3d87cb9d640e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64abf0012f58f9f220be0f16d75f0bfb5eb65b4662ab31ea7ffe3d87cb9d640e->leave($__internal_64abf0012f58f9f220be0f16d75f0bfb5eb65b4662ab31ea7ffe3d87cb9d640e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7ed0843276cff87c0f63aa26023c748b60ccefff3ec6315cc6e6d0ec8b4a382 = $this->env->getExtension("native_profiler");
        $__internal_a7ed0843276cff87c0f63aa26023c748b60ccefff3ec6315cc6e6d0ec8b4a382->enter($__internal_a7ed0843276cff87c0f63aa26023c748b60ccefff3ec6315cc6e6d0ec8b4a382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7ed0843276cff87c0f63aa26023c748b60ccefff3ec6315cc6e6d0ec8b4a382->leave($__internal_a7ed0843276cff87c0f63aa26023c748b60ccefff3ec6315cc6e6d0ec8b4a382_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6075164f8ddf4b25fdaf0cde041b8e1efaf370cf1e8c00ea618745dceddac1c3 = $this->env->getExtension("native_profiler");
        $__internal_6075164f8ddf4b25fdaf0cde041b8e1efaf370cf1e8c00ea618745dceddac1c3->enter($__internal_6075164f8ddf4b25fdaf0cde041b8e1efaf370cf1e8c00ea618745dceddac1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6075164f8ddf4b25fdaf0cde041b8e1efaf370cf1e8c00ea618745dceddac1c3->leave($__internal_6075164f8ddf4b25fdaf0cde041b8e1efaf370cf1e8c00ea618745dceddac1c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f70732a1661bbb05cb9d3bdc9923f670494daf771e9e7b948169c0d519b07bd = $this->env->getExtension("native_profiler");
        $__internal_0f70732a1661bbb05cb9d3bdc9923f670494daf771e9e7b948169c0d519b07bd->enter($__internal_0f70732a1661bbb05cb9d3bdc9923f670494daf771e9e7b948169c0d519b07bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0f70732a1661bbb05cb9d3bdc9923f670494daf771e9e7b948169c0d519b07bd->leave($__internal_0f70732a1661bbb05cb9d3bdc9923f670494daf771e9e7b948169c0d519b07bd_prof);

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
