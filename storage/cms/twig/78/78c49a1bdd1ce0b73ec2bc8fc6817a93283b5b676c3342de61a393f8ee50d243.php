<?php

/* /Applications/MAMP/htdocs/atan/themes/main/partials/portfolio/default.htm */
class __TwigTemplate_05786e0aa9e3e324109048d4280f7d2d7f26572c6a94f60c197d6fe4ca8f8af0 extends Twig_Template
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
        echo "<!-- Begin Work -->
<div class=\"container\">
    <div class=\"row recentwork\">
        <h2>Recent Work</h2>

        <div class=\"row snapshot\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                <div class=\"col-md-4\">
                    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
            echo "\"  target=\"_blank\">
                        <div class=\"circle\" >
                            ";
            // line 11
            $context["image"] = $this->getAttribute($this->getAttribute($context["item"], "images", array()), "first", array());
            // line 12
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path", array()), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
            echo "\">
                        </div>
                    </a>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h3>
                    </a>
                    <p>";
            // line 18
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/partials/portfolio/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  63 => 18,  58 => 16,  52 => 15,  43 => 12,  41 => 11,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!-- Begin Work -->*/
/* <div class="container">*/
/*     <div class="row recentwork">*/
/*         <h2>Recent Work</h2>*/
/* */
/*         <div class="row snapshot">*/
/*             {% for item in __SELF__.portfolio %}*/
/*                 <div class="col-md-4">*/
/*                     <a href="{{ item.url }}" title="{{ image.title }}"  target="_blank">*/
/*                         <div class="circle" >*/
/*                             {% set image = item.images.first %}*/
/*                             <img src="{{ image.path }}" class="img-responsive" alt="{{ image.title }}">*/
/*                         </div>*/
/*                     </a>*/
/*                     <a href="{{ item.url }}" title="{{ image.title }}" target="_blank">*/
/*                         <h3>{{ item.title }}</h3>*/
/*                     </a>*/
/*                     <p>{{ item.description|raw }}</p>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
