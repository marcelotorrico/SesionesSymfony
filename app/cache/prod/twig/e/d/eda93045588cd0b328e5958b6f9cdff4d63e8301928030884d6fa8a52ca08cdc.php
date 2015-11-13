<?php

/* MTDLoginBundle:Login:index.html.twig */
class __TwigTemplate_7ea2c50a0c6a4bcc3e8599d4593b7f61e600f1fa4840f39ffa6716d04192f745 extends Twig_Template
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
        $__internal_88a57e4cfe5a2dcf71cd7fdde2ca8755f52effdb19e738357777e771025d8058 = $this->env->getExtension("native_profiler");
        $__internal_88a57e4cfe5a2dcf71cd7fdde2ca8755f52effdb19e738357777e771025d8058->enter($__internal_88a57e4cfe5a2dcf71cd7fdde2ca8755f52effdb19e738357777e771025d8058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a57e4cfe5a2dcf71cd7fdde2ca8755f52effdb19e738357777e771025d8058->leave($__internal_88a57e4cfe5a2dcf71cd7fdde2ca8755f52effdb19e738357777e771025d8058_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99a55db7b5df25436d84593d694a9ec583e0d54b4b750904115f382764a20296 = $this->env->getExtension("native_profiler");
        $__internal_99a55db7b5df25436d84593d694a9ec583e0d54b4b750904115f382764a20296->enter($__internal_99a55db7b5df25436d84593d694a9ec583e0d54b4b750904115f382764a20296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                    <font FACE=\"courier\">
                        <center><h2><b>Ingresar al Sistema</b></h2></center>
                    </font>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon addonGroup\" >Nombre de Usuario:</span>
                            <input class=\"form-control\" type=\"text\" name=\"_username\" id=\"usuario\" placeholder=\"Ingrese nombre de usuario\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon addonGroup\" >Contraseña:</span>
                            <input class=\"form-control\" type=\"password\"  name=\"_password\" id=\"contrasena\" placeholder=\"Ingrese su contraseña\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <a class=\"btn btn-primary pull-left\" href=\"";
        // line 35
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/agiles.jpg"), "html", null, true);
        echo "\" alt=\"portadaInicio\" class=\"img-thumbnail\" width=\"700\" height=\"700\"></center>
                </font>
            </div>
        </div>
    </div>
";
        
        $__internal_99a55db7b5df25436d84593d694a9ec583e0d54b4b750904115f382764a20296->leave($__internal_99a55db7b5df25436d84593d694a9ec583e0d54b4b750904115f382764a20296_prof);

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
        return array (  97 => 43,  86 => 35,  65 => 18,  59 => 16,  57 => 15,  55 => 14,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <form action="{{ path('login_check') }}" method="post">*/
/*                     <font FACE="courier">*/
/*                         <center><h2><b>Ingresar al Sistema</b></h2></center>*/
/*                     </font>*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon addonGroup" >Nombre de Usuario:</span>*/
/*                             <input class="form-control" type="text" name="_username" id="usuario" placeholder="Ingrese nombre de usuario" required>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon addonGroup" >Contraseña:</span>*/
/*                             <input class="form-control" type="password"  name="_password" id="contrasena" placeholder="Ingrese su contraseña" required>*/
/*                         </div>*/
/*                     </div>*/
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
