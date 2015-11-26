<?php

/* MTDLoginBundle:Login:estudianteInicio.html.twig */
class __TwigTemplate_763995a6d633c2a439eda00de64061ffaed91d7376da4050a97a4a1ce6bbc9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Login:estudianteInicio.html.twig", 1);
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
        $__internal_b0f74d837c4ee245bd2f900c8e779696c3d35f5cc53147bab66745efbfd517fd = $this->env->getExtension("native_profiler");
        $__internal_b0f74d837c4ee245bd2f900c8e779696c3d35f5cc53147bab66745efbfd517fd->enter($__internal_b0f74d837c4ee245bd2f900c8e779696c3d35f5cc53147bab66745efbfd517fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:estudianteInicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f74d837c4ee245bd2f900c8e779696c3d35f5cc53147bab66745efbfd517fd->leave($__internal_b0f74d837c4ee245bd2f900c8e779696c3d35f5cc53147bab66745efbfd517fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5f893010db337688609f213a5b32a5c8c827ebbd3b768dc0eb62e4e001fdfd9 = $this->env->getExtension("native_profiler");
        $__internal_e5f893010db337688609f213a5b32a5c8c827ebbd3b768dc0eb62e4e001fdfd9->enter($__internal_e5f893010db337688609f213a5b32a5c8c827ebbd3b768dc0eb62e4e001fdfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div id=\"mostrar\">
    <div class=\"container\" style=\"text-align:center;\">
        <font FACE=\"courier\"  color=\"blue\">
            <h1 id=\"\"><b>MENU PRINCIPAL</b></h1>
        </font>
        </br>
        <a href=\"/inscripciones/nueva.php\"><button class=\"btn btn-primary glyphicon glyphicon-check\">    Inscribirse      </button></a>
        <a href=\"tareas.php\"><button class=\"btn btn-primary glyphicon glyphicon-file \">     Ver Tareas      </button></a>
        <a href=\"../../index.php\"><button class=\"btn btn-primary glyphicon glyphicon-remove-circle\"> Cerrar sesion </button></a>
            <br><br><br>
             <center>  

        <div id = 'calendario'></div>
        </center>
        <script type=\"text/javascript\" src=\"/js/calendario.js\"></script>
        <?php require \"_cargarTareas.php\"; ?>
        </div>
    </div>
";
        
        $__internal_e5f893010db337688609f213a5b32a5c8c827ebbd3b768dc0eb62e4e001fdfd9->leave($__internal_e5f893010db337688609f213a5b32a5c8c827ebbd3b768dc0eb62e4e001fdfd9_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Login:estudianteInicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div id="mostrar">*/
/*     <div class="container" style="text-align:center;">*/
/*         <font FACE="courier"  color="blue">*/
/*             <h1 id=""><b>MENU PRINCIPAL</b></h1>*/
/*         </font>*/
/*         </br>*/
/*         <a href="/inscripciones/nueva.php"><button class="btn btn-primary glyphicon glyphicon-check">    Inscribirse      </button></a>*/
/*         <a href="tareas.php"><button class="btn btn-primary glyphicon glyphicon-file ">     Ver Tareas      </button></a>*/
/*         <a href="../../index.php"><button class="btn btn-primary glyphicon glyphicon-remove-circle"> Cerrar sesion </button></a>*/
/*             <br><br><br>*/
/*              <center>  */
/* */
/*         <div id = 'calendario'></div>*/
/*         </center>*/
/*         <script type="text/javascript" src="/js/calendario.js"></script>*/
/*         <?php require "_cargarTareas.php"; ?>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
