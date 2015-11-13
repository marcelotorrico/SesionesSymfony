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
        $__internal_e2bce0a2d34add1c3c927bba4b38ad5b37612562f13cef56a64b75bc6a26c90c = $this->env->getExtension("native_profiler");
        $__internal_e2bce0a2d34add1c3c927bba4b38ad5b37612562f13cef56a64b75bc6a26c90c->enter($__internal_e2bce0a2d34add1c3c927bba4b38ad5b37612562f13cef56a64b75bc6a26c90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2bce0a2d34add1c3c927bba4b38ad5b37612562f13cef56a64b75bc6a26c90c->leave($__internal_e2bce0a2d34add1c3c927bba4b38ad5b37612562f13cef56a64b75bc6a26c90c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c07b8a265fa003efc3e8815447d70dc7d563e7705e0abbfa1d2c0fc3f579fa7b = $this->env->getExtension("native_profiler");
        $__internal_c07b8a265fa003efc3e8815447d70dc7d563e7705e0abbfa1d2c0fc3f579fa7b->enter($__internal_c07b8a265fa003efc3e8815447d70dc7d563e7705e0abbfa1d2c0fc3f579fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c07b8a265fa003efc3e8815447d70dc7d563e7705e0abbfa1d2c0fc3f579fa7b->leave($__internal_c07b8a265fa003efc3e8815447d70dc7d563e7705e0abbfa1d2c0fc3f579fa7b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad6c4cf633cada15d3a86b76f9290450cc561b6e604bb7bcb66140adf23967f = $this->env->getExtension("native_profiler");
        $__internal_9ad6c4cf633cada15d3a86b76f9290450cc561b6e604bb7bcb66140adf23967f->enter($__internal_9ad6c4cf633cada15d3a86b76f9290450cc561b6e604bb7bcb66140adf23967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ad6c4cf633cada15d3a86b76f9290450cc561b6e604bb7bcb66140adf23967f->leave($__internal_9ad6c4cf633cada15d3a86b76f9290450cc561b6e604bb7bcb66140adf23967f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_acda685a85580ae5e83bea2be925d7b047ab09928c88dbd55d1eb637aca2180f = $this->env->getExtension("native_profiler");
        $__internal_acda685a85580ae5e83bea2be925d7b047ab09928c88dbd55d1eb637aca2180f->enter($__internal_acda685a85580ae5e83bea2be925d7b047ab09928c88dbd55d1eb637aca2180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_acda685a85580ae5e83bea2be925d7b047ab09928c88dbd55d1eb637aca2180f->leave($__internal_acda685a85580ae5e83bea2be925d7b047ab09928c88dbd55d1eb637aca2180f_prof);

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
