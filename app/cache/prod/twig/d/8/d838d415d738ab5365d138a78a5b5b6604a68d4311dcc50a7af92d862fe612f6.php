<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_170b5caf020474523de63aae41768b56b8ea416717a5265b3689b7667167e963 extends Twig_Template
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
        $__internal_c346a545c85c16192fb22be3689090040a101484f9e1e6571abda4f265b1358f = $this->env->getExtension("native_profiler");
        $__internal_c346a545c85c16192fb22be3689090040a101484f9e1e6571abda4f265b1358f->enter($__internal_c346a545c85c16192fb22be3689090040a101484f9e1e6571abda4f265b1358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c346a545c85c16192fb22be3689090040a101484f9e1e6571abda4f265b1358f->leave($__internal_c346a545c85c16192fb22be3689090040a101484f9e1e6571abda4f265b1358f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7292c0751f2bad663a3d2c65da878dbd3ed587f8a38ef93c1297387d9daf6cc = $this->env->getExtension("native_profiler");
        $__internal_d7292c0751f2bad663a3d2c65da878dbd3ed587f8a38ef93c1297387d9daf6cc->enter($__internal_d7292c0751f2bad663a3d2c65da878dbd3ed587f8a38ef93c1297387d9daf6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7292c0751f2bad663a3d2c65da878dbd3ed587f8a38ef93c1297387d9daf6cc->leave($__internal_d7292c0751f2bad663a3d2c65da878dbd3ed587f8a38ef93c1297387d9daf6cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b07ef158bcddc4d080236a0a213a34cd87b6cf348c2be9984a7a4f9881be748a = $this->env->getExtension("native_profiler");
        $__internal_b07ef158bcddc4d080236a0a213a34cd87b6cf348c2be9984a7a4f9881be748a->enter($__internal_b07ef158bcddc4d080236a0a213a34cd87b6cf348c2be9984a7a4f9881be748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b07ef158bcddc4d080236a0a213a34cd87b6cf348c2be9984a7a4f9881be748a->leave($__internal_b07ef158bcddc4d080236a0a213a34cd87b6cf348c2be9984a7a4f9881be748a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_470fac3d5f4ca77cc86d2e5fb208118dfe63255fd375e6d4ca0157ef8c383bc4 = $this->env->getExtension("native_profiler");
        $__internal_470fac3d5f4ca77cc86d2e5fb208118dfe63255fd375e6d4ca0157ef8c383bc4->enter($__internal_470fac3d5f4ca77cc86d2e5fb208118dfe63255fd375e6d4ca0157ef8c383bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_470fac3d5f4ca77cc86d2e5fb208118dfe63255fd375e6d4ca0157ef8c383bc4->leave($__internal_470fac3d5f4ca77cc86d2e5fb208118dfe63255fd375e6d4ca0157ef8c383bc4_prof);

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
