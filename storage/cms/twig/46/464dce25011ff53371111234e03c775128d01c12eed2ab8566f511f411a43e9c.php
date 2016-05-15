<?php

/* /Applications/MAMP/htdocs/atan/themes/main/pages/home.htm */
class __TwigTemplate_547ecd95e5c0496ee0c76ccb5bb5957c9e20041fdb1002348a772c6aec5f64ea extends Twig_Template
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
        // line 1
        echo "<!-- End website will do -->
<!-- Jumbotron -->
<div class=\"jumbotron\">
    <div class=\"jumbotron-container\">
        Hi! My name is Andy.
        I am a Sydney Based Web Developer who strives to create websites that's both
        aesthetically pleasing and user friendly
    </div>
</div>
<!-- End Jumbotron -->

";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("portfolio"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "
<!-- End Work -->
<!-- Begin Skills -->
<div class=\"container skills\">
    <h2>Some of my skills</h2>

    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div  class=\"icons glyphicon glyphicon-pencil\">
            </div>
            <h3>PHP</h3>

            <p>Symfony 1.4, CakePHP, CodeIgniter, Laravel 5</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons glyphicon glyphicon-tint\">
            </div>
            <h3>CSS</h3>

            <p>Including SASS</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons glyphicon glyphicon-edit\">
            </div>
            <h3>Javascript</h3>

            <p>Including jQuery and Angular Development </p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"icons glyphicon glyphicon-flash\">
            </div>
            <h3>WordPress</h3>
            <p>
                Administration, Plugin and Theme development
            </p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons \tglyphicon glyphicon-transfer\">
            </div>
            <h3>Android</h3>

            <p>Native App Development</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons \tglyphicon glyphicon-tasks\">
            </div>
            <h3>Database Administration</h3>

            <p>MySQL, PostgreSQL, MS Access</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <!-- End website will do -->*/
/* <!-- Jumbotron -->*/
/* <div class="jumbotron">*/
/*     <div class="jumbotron-container">*/
/*         Hi! My name is Andy.*/
/*         I am a Sydney Based Web Developer who strives to create websites that's both*/
/*         aesthetically pleasing and user friendly*/
/*     </div>*/
/* </div>*/
/* <!-- End Jumbotron -->*/
/* */
/* {% component 'portfolio' %}*/
/* */
/* <!-- End Work -->*/
/* <!-- Begin Skills -->*/
/* <div class="container skills">*/
/*     <h2>Some of my skills</h2>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-4">*/
/*             <div  class="icons glyphicon glyphicon-pencil">*/
/*             </div>*/
/*             <h3>PHP</h3>*/
/* */
/*             <p>Symfony 1.4, CakePHP, CodeIgniter, Laravel 5</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons glyphicon glyphicon-tint">*/
/*             </div>*/
/*             <h3>CSS</h3>*/
/* */
/*             <p>Including SASS</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons glyphicon glyphicon-edit">*/
/*             </div>*/
/*             <h3>Javascript</h3>*/
/* */
/*             <p>Including jQuery and Angular Development </p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-4">*/
/*             <div class="icons glyphicon glyphicon-flash">*/
/*             </div>*/
/*             <h3>WordPress</h3>*/
/*             <p>*/
/*                 Administration, Plugin and Theme development*/
/*             </p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons 	glyphicon glyphicon-transfer">*/
/*             </div>*/
/*             <h3>Android</h3>*/
/* */
/*             <p>Native App Development</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons 	glyphicon glyphicon-tasks">*/
/*             </div>*/
/*             <h3>Database Administration</h3>*/
/* */
/*             <p>MySQL, PostgreSQL, MS Access</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
