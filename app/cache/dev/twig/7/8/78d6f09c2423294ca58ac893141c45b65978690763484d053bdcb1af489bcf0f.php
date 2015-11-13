<?php

/* MTDLoginBundle:Login:index.html.twig */
class __TwigTemplate_4294a98c4c7f170b664c91e4d7677e7ca8994aa644652995bbe8e5cf5ff5883f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c1833bb3cffc1affc5284ebe77d233bd529c7a9478590f7ded83ebdbda499ff = $this->env->getExtension("native_profiler");
        $__internal_9c1833bb3cffc1affc5284ebe77d233bd529c7a9478590f7ded83ebdbda499ff->enter($__internal_9c1833bb3cffc1affc5284ebe77d233bd529c7a9478590f7ded83ebdbda499ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1833bb3cffc1affc5284ebe77d233bd529c7a9478590f7ded83ebdbda499ff->leave($__internal_9c1833bb3cffc1affc5284ebe77d233bd529c7a9478590f7ded83ebdbda499ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a354d3c0ec1e9b52c38d05c2483a5f40b359ed6c2040bb41d0fe2588c233ffa6 = $this->env->getExtension("native_profiler");
        $__internal_a354d3c0ec1e9b52c38d05c2483a5f40b359ed6c2040bb41d0fe2588c233ffa6->enter($__internal_a354d3c0ec1e9b52c38d05c2483a5f40b359ed6c2040bb41d0fe2588c233ffa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class = \"container-fluid\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <h3><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/umss.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" ><font color='white'> <strong>UNIVERSIDAD MAYOR DE SAN SIMON &nbsp;&nbsp;&nbsp;</strong></h3>
            </div>
        </nav>
        <br><br><br><br><br><br><br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-4 col-lg-3\">
                <br>
                ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "                    ";
            // line 16
            echo "                    <script>alert('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "');</script>
                ";
        }
        // line 18
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("mtd_registro_login_check");
        echo "\" method=\"post\">
                    <font FACE=\"courier\">
                        <center><h2><b>Ingresar al Sistema</b></h2></center>
                    </font>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon addonGroup\" >Nombre de Usuario:</span>
                            <input class=\"form-control\" type=\"text\" name=\"_username\" id=\"username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Ingrese nombre de usuario\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon addonGroup\" >Contraseña:</span>
                            <input class=\"form-control\" type=\"password\"  name=\"_password\" id=\"password\" placeholder=\"Ingrese su contraseña\" required>
                        </div>
                    </div>
                    ";
        // line 35
        echo "                    <div class=\"form-group\">
                        <a class=\"btn btn-primary pull-left\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("mtd_registro");
        echo "\"> Regístrate</a>
                        <button type=\"submit\" name=\"ingresar\" class=\"btn btn-primary pull-right\" id=\"btn-registrarUser\"><span class=\"glyphicon glyphicon-ok\"></span> Ingresar</button>
                    </div>
                </form>
            </div>
            <div class=\"col-xs-12 col-sm-7 col-md-8 col-lg-9\">
                <font color=\"black\">
                    <center><b><h1>Bienvenido al Calendario de Tareas</h1></b></center>
                    <center><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/agiles.jpg"), "html", null, true);
        echo "\" alt=\"portadaInicio\" class=\"img-thumbnail\" width=\"700\" height=\"700\"></center>
                </font>
            </div>
        </div>
    </div>
";
        
        $__internal_a354d3c0ec1e9b52c38d05c2483a5f40b359ed6c2040bb41d0fe2588c233ffa6->leave($__internal_a354d3c0ec1e9b52c38d05c2483a5f40b359ed6c2040bb41d0fe2588c233ffa6_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  91 => 36,  88 => 35,  76 => 25,  65 => 18,  59 => 16,  57 => 15,  55 => 14,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class = "container-fluid">*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <h3><img src="{{ asset('imagenes/umss.png') }}" alt="Symfony!" ><font color='white'> <strong>UNIVERSIDAD MAYOR DE SAN SIMON &nbsp;&nbsp;&nbsp;</strong></h3>*/
/*             </div>*/
/*         </nav>*/
/*         <br><br><br><br><br><br><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">*/
/*                 <br>*/
/*                 {% if error %}*/
/*                     {#<div>{{ error.message }}</div>#}*/
/*                     <script>alert('{{ error.message }}');</script>*/
/*                 {% endif %}*/
/*                 <form action="{{ path('mtd_registro_login_check') }}" method="post">*/
/*                     <font FACE="courier">*/
/*                         <center><h2><b>Ingresar al Sistema</b></h2></center>*/
/*                     </font>*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon addonGroup" >Nombre de Usuario:</span>*/
/*                             <input class="form-control" type="text" name="_username" id="username" value="{{ last_username }}" placeholder="Ingrese nombre de usuario" required>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon addonGroup" >Contraseña:</span>*/
/*                             <input class="form-control" type="password"  name="_password" id="password" placeholder="Ingrese su contraseña" required>*/
/*                         </div>*/
/*                     </div>*/
/*                     {#<input type="hidden" name="_target_path" value="/estudiante/inicio" />#}*/
/*                     <div class="form-group">*/
/*                         <a class="btn btn-primary pull-left" href="{{path('mtd_registro')}}"> Regístrate</a>*/
/*                         <button type="submit" name="ingresar" class="btn btn-primary pull-right" id="btn-registrarUser"><span class="glyphicon glyphicon-ok"></span> Ingresar</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">*/
/*                 <font color="black">*/
/*                     <center><b><h1>Bienvenido al Calendario de Tareas</h1></b></center>*/
/*                     <center><img src="{{ asset('imagenes/agiles.jpg') }}" alt="portadaInicio" class="img-thumbnail" width="700" height="700"></center>*/
/*                 </font>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
