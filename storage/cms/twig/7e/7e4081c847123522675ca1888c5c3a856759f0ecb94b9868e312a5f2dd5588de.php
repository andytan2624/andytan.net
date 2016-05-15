<?php

/* /Applications/MAMP/htdocs/atan/themes/main/partials/portfolioSpecial/default.htm */
class __TwigTemplate_fd5e5e1cf25a7b6909395d50d4a6035e81ed87c0a513a196a2297ad69dadafe4 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            $context["image"] = $this->getAttribute($this->getAttribute($context["item"], "images", array()), "first", array());
            // line 3
            echo "        <div class=\"figure\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path", array()), "html", null, true);
            echo "')\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
            echo "\"  target=\"_blank\">
                <div class=\"figcaption\">
                    <strong>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
            echo "</strong>
                    <span>";
            // line 7
            echo $this->getAttribute($context["item"], "description", array());
            echo "</span>
                    <a href=\"portfolio.php?cid=1&amp;pid=16\" class=\"opener\"></a>
                </div>
            </a>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/partials/portfolioSpecial/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for item in __SELF__.portfolio %}*/
/*     {% set image = item.images.first %}*/
/*         <div class="figure" style="background-image: url('{{ image.path }}')">*/
/*             <a href="{{ item.url }}" title="{{ image.title }}"  target="_blank">*/
/*                 <div class="figcaption">*/
/*                     <strong>{{ image.title }}</strong>*/
/*                     <span>{{ item.description|raw }}</span>*/
/*                     <a href="portfolio.php?cid=1&amp;pid=16" class="opener"></a>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/* {% endfor %}*/
