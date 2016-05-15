<?php

/* /Applications/MAMP/htdocs/atan/themes/main/pages/portfolio.htm */
class __TwigTemplate_f12b70834ca87701ff704a6f3bb857e372fedae5643e6ed35f0810e73f4f6b79 extends Twig_Template
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
        echo "<header class=\"intro-header\" style=\"background-image: url('";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/about-bg.png");
        echo "')\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 \">
            <div class=\"site-heading\">
                <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>
            </div>
        </div>
    </div>
</div>
</header>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <p>
                I am currently working as a PHP Developer at 4Mation Technologies since March 2015. I have previously worked as a developer at the following places:
                <ul>
                    <li>Red Propaganda (July 2013 - March 2015)</li>
                    <li>IBM (February 2010 - June 2013)</li>
                </ul>
            </p>
        </div>

        <div class=\"portfolio\">
            ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("portfolioSpecial"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/pages/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 26,  50 => 25,  28 => 6,  19 => 1,);
    }
}
/* <header class="intro-header" style="background-image: url('{{ "assets/images/about-bg.png"|theme }}')">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12 ">*/
/*             <div class="site-heading">*/
/*                 <h2>{{ this.page.title }}</h2>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </header>*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <p>*/
/*                 I am currently working as a PHP Developer at 4Mation Technologies since March 2015. I have previously worked as a developer at the following places:*/
/*                 <ul>*/
/*                     <li>Red Propaganda (July 2013 - March 2015)</li>*/
/*                     <li>IBM (February 2010 - June 2013)</li>*/
/*                 </ul>*/
/*             </p>*/
/*         </div>*/
/* */
/*         <div class="portfolio">*/
/*             {% component 'portfolioSpecial' %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
