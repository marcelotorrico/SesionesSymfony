<?php

/* menu.html.twig */
class __TwigTemplate_ae0210dc141acecd993dac5be040284c05eb3fc872c85f2071953a5ab50aeafc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae50c18b58a3c90a6431cb528ca1436c8b28cba9e20ff324b348db7e18ebf71 = $this->env->getExtension("native_profiler");
        $__internal_cae50c18b58a3c90a6431cb528ca1436c8b28cba9e20ff324b348db7e18ebf71->enter($__internal_cae50c18b58a3c90a6431cb528ca1436c8b28cba9e20ff324b348db7e18ebf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<div class=\"\">
    <header>
        <!--<nav class=\"navbar navbar-default navbar-fixed-top role=\"navigation\">       -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Brand</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <!--  <ul class=\"nav navbar-nav role=\"tablist\">     -->
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("mtd_estudiante_inscripcionMateria");
        echo "\">Registro Materia <span class=\"sr-only\">(current)</span></a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\" onclick=\"actualizar()\">Registro Materia</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Cerrar Sesion</a></li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
</div>
<div id=\"cuerpo\"></div>";
        
        $__internal_cae50c18b58a3c90a6431cb528ca1436c8b28cba9e20ff324b348db7e18ebf71->leave($__internal_cae50c18b58a3c90a6431cb528ca1436c8b28cba9e20ff324b348db7e18ebf71_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 41,  42 => 19,  22 => 1,);
    }
}
/* <div class="">*/
/*     <header>*/
/*         <!--<nav class="navbar navbar-default navbar-fixed-top role="navigation">       -->*/
/*         <nav class="navbar navbar-default navbar-static-top" role="navigation">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#">Brand</a>*/
/*                 </div>*/
/* */
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <!--  <ul class="nav navbar-nav role="tablist">     -->*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="{{path('mtd_estudiante_inscripcionMateria')}}">Registro Materia <span class="sr-only">(current)</span></a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#" onclick="actualizar()">Registro Materia</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">One more separated link</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <form class="navbar-form navbar-left" role="search">*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" placeholder="Search">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default">Submit</button>*/
/*                     </form>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ path ('logout') }}">Cerrar Sesion</a></li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*     </header>*/
/* </div>*/
/* <div id="cuerpo"></div>*/
