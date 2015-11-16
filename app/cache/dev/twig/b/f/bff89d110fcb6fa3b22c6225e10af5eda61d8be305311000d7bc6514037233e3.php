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
        $__internal_90d0f5eaa9f5ab76053b6b2049f170cea4b9ff32b4a1e6d3f464881e77286f58 = $this->env->getExtension("native_profiler");
        $__internal_90d0f5eaa9f5ab76053b6b2049f170cea4b9ff32b4a1e6d3f464881e77286f58->enter($__internal_90d0f5eaa9f5ab76053b6b2049f170cea4b9ff32b4a1e6d3f464881e77286f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:estudianteInicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d0f5eaa9f5ab76053b6b2049f170cea4b9ff32b4a1e6d3f464881e77286f58->leave($__internal_90d0f5eaa9f5ab76053b6b2049f170cea4b9ff32b4a1e6d3f464881e77286f58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b5d957c2d1d49dd64c1a7995e5f96da02ccc8b5bfa513f198a86c89889f234 = $this->env->getExtension("native_profiler");
        $__internal_a6b5d957c2d1d49dd64c1a7995e5f96da02ccc8b5bfa513f198a86c89889f234->enter($__internal_a6b5d957c2d1d49dd64c1a7995e5f96da02ccc8b5bfa513f198a86c89889f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
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
";
        
        $__internal_a6b5d957c2d1d49dd64c1a7995e5f96da02ccc8b5bfa513f198a86c89889f234->leave($__internal_a6b5d957c2d1d49dd64c1a7995e5f96da02ccc8b5bfa513f198a86c89889f234_prof);

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
/* {% endblock %}*/
/* */
