<?php

/* /Applications/MAMP/htdocs/atan/themes/main/partials/navigation.htm */
class __TwigTemplate_103643463a7fd1d9e130448522bac6c87e68d4090d1be5678504455063777f5d extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Andy Tan</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\" aria-expanded=\"false\" style=\"height: 1px;\">

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about")) {
            echo "active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("about");
        echo "\">About</a></li>
                <li class=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "portfolio")) {
            echo "active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
                <li class=\"";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
            echo "active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("contact");
        echo "\">Contact</a></li>
                <li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("posts");
        echo "\">Blog</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  51 => 17,  43 => 16,  35 => 15,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Andy Tan</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="{% if( this.page.id == 'about') %}active {% endif %}"><a href="{{ 'about'|page }}">About</a></li>*/
/*                 <li class="{% if( this.page.id == 'portfolio') %}active {% endif %}"><a href="{{ 'portfolio'|page }}">Portfolio</a></li>*/
/*                 <li class="{% if( this.page.id == 'contact') %}active {% endif %}"><a href="{{ 'contact'|page }}">Contact</a></li>*/
/*                 <li class="{% if( this.page.id == 'posts') %}active {% endif %}"><a href="{{ 'posts'|page }}">Blog</a></li>*/
/*             </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*     </div><!--/.container-fluid -->*/
/* </nav>*/
