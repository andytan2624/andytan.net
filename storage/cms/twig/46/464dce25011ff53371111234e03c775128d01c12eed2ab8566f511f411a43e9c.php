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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"lead\">Hi! My name is Andy.</p>
                <p>Sydney Based Web Developer, striving to create websites that are both aesthetically pleasing but
                    also fits the users needs</p>
            </div>
        </div>
    </div>
</div>
<!-- End Jumbotron -->

";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("portfolio"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "
<!-- End Work -->
<!-- Begin Skills -->
<div class=\"container skills\">
    <h2>Some of my skills</h2>

    <p>Send it to your best friends and your grandma. It’ll work on their computers and phones.</p>

    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div  class=\"icons\">
                <img src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon/9-icon2-brush.png");
        echo "\" width=\"25\"
                     alt=\"60e99974-e829-4dc1-accd-daf1e7fdf1c1_9-icon2-brush.png\">
            </div>
            <h3>PHP</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique. .</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons\">
                <img src=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon/9-icon2-chat.png");
        echo "\" width=\"25\"
                     alt=\"3ac4f3ae-7b57-4c26-930b-fbaed24601b3_9-icon2-chat.png\">
            </div>
            <h3>CSS</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique. Duis cursus, mi quis viverra ornare, eros dolor</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons\">
                <img src=\"";
        // line 48
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon/9-icon2-drops.png");
        echo "\" width=\"25\"
                     alt=\"5b9ab216-8502-4c2a-9d0d-13f712a8d7c9_9-icon2-drops.png\">
            </div>
            <h3>Javascript</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"icons\">
                <img src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon/9-icon2-eye.png");
        echo "\" width=\"25\"
                     alt=\"a42359b6-c5c1-4aab-914c-968266ab740e_9-icon2-eye.png\">
            </div>
            <h3>jQuery</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique. Duis cursus, mi quis viverra ornare, eros dolor</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons\">
                <img src=\"";
        // line 70
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon/9-icon2-phone.png");
        echo "\" width=\"25\"
                     alt=\"da9ffb16-4e62-4c4e-aa8e-33932f9ccf71_9-icon2-phone.png\">
            </div>
            <h3>Sass</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique. Duis cursus, mi quis viverra ornare, eros dolor</p>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"icons\">
                <img src=\"";
        // line 80
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon/9-icon2-video.png");
        echo "\" width=\"25\"
                     alt=\"0a33fa10-b61c-421d-92ee-2e926c2fc717_9-icon2-video.png\">
            </div>
            <h3>Database Administration</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                tristique.</p>
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
        return array (  120 => 80,  107 => 70,  94 => 60,  79 => 48,  66 => 38,  53 => 28,  40 => 17,  36 => 16,  19 => 1,);
    }
}
/* <!-- End website will do -->*/
/* <!-- Jumbotron -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <p class="lead">Hi! My name is Andy.</p>*/
/*                 <p>Sydney Based Web Developer, striving to create websites that are both aesthetically pleasing but*/
/*                     also fits the users needs</p>*/
/*             </div>*/
/*         </div>*/
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
/*     <p>Send it to your best friends and your grandma. It’ll work on their computers and phones.</p>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-4">*/
/*             <div  class="icons">*/
/*                 <img src="{{'assets/images/icon/9-icon2-brush.png'|theme}}" width="25"*/
/*                      alt="60e99974-e829-4dc1-accd-daf1e7fdf1c1_9-icon2-brush.png">*/
/*             </div>*/
/*             <h3>PHP</h3>*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum*/
/*                 tristique. .</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons">*/
/*                 <img src="{{'assets/images/icon/9-icon2-chat.png'|theme}}" width="25"*/
/*                      alt="3ac4f3ae-7b57-4c26-930b-fbaed24601b3_9-icon2-chat.png">*/
/*             </div>*/
/*             <h3>CSS</h3>*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum*/
/*                 tristique. Duis cursus, mi quis viverra ornare, eros dolor</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons">*/
/*                 <img src="{{'assets/images/icon/9-icon2-drops.png'|theme}}" width="25"*/
/*                      alt="5b9ab216-8502-4c2a-9d0d-13f712a8d7c9_9-icon2-drops.png">*/
/*             </div>*/
/*             <h3>Javascript</h3>*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum*/
/*                 tristique.</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-4">*/
/*             <div class="icons">*/
/*                 <img src="{{'assets/images/icon/9-icon2-eye.png'|theme}}" width="25"*/
/*                      alt="a42359b6-c5c1-4aab-914c-968266ab740e_9-icon2-eye.png">*/
/*             </div>*/
/*             <h3>jQuery</h3>*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum*/
/*                 tristique. Duis cursus, mi quis viverra ornare, eros dolor</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons">*/
/*                 <img src="{{'assets/images/icon/9-icon2-phone.png'|theme}}" width="25"*/
/*                      alt="da9ffb16-4e62-4c4e-aa8e-33932f9ccf71_9-icon2-phone.png">*/
/*             </div>*/
/*             <h3>Sass</h3>*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum*/
/*                 tristique. Duis cursus, mi quis viverra ornare, eros dolor</p>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             <div class="icons">*/
/*                 <img src="{{'assets/images/icon/9-icon2-video.png'|theme}}" width="25"*/
/*                      alt="0a33fa10-b61c-421d-92ee-2e926c2fc717_9-icon2-video.png">*/
/*             </div>*/
/*             <h3>Database Administration</h3>*/
/* */
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum*/
/*                 tristique.</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
