<?php

/* /Applications/MAMP/htdocs/atan/plugins/arrizalamin/portfolio/components/portfolio/default.htm */
class __TwigTemplate_1f6db6a461e3ef99c50a591acc34c65b28a90edd870e1f2efc2ddbcb138a1e38 extends Twig_Template
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
        echo "<div class=\"container\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "images", array())) > 0)) {
                // line 4
                echo "    <div>
        ";
                // line 5
                $context["image"] = $this->getAttribute($this->getAttribute($context["item"], "images", array()), "first", array());
                // line 6
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\">
            <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path", array()), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
                echo "\">
        </a>
    </div>
    ";
            }
            // line 11
            echo "    <h2 class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h2>
    ";
            // line 12
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "tags", array())) > 0)) {
                // line 13
                echo "    <div class=\"text-center\">
        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 15
                    echo "        <a href=\"\\portfolio\\tags\\";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                    echo "\"><span class=\"label label-default\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                    echo "</span></a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "    </div>
    ";
            }
            // line 19
            echo "    ";
            if ($this->getAttribute($context["item"], "description", array())) {
                // line 20
                echo "    <div class=\"text-center\">
        ";
                // line 21
                echo $this->getAttribute($context["item"], "description", array());
                echo "
    </div>
    ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "lastPage", array()) > 1)) {
            // line 27
            echo "    <ul class=\"pagination\">
        ";
            // line 28
            if (($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "currentPage", array()) > 1)) {
                // line 29
                echo "        <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array("page" => ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "        <li class=\"";
                echo ((($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 34
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array("page" => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
        ";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "lastPage", array()) > $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "currentPage", array()))) {
                // line 39
                echo "        <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array("page" => ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "portfolio", array()), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 41
            echo "    </ul>
    ";
        }
        // line 43
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/plugins/arrizalamin/portfolio/components/portfolio/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  145 => 41,  139 => 39,  137 => 38,  134 => 37,  123 => 34,  118 => 33,  114 => 32,  111 => 31,  105 => 29,  103 => 28,  100 => 27,  98 => 26,  95 => 25,  89 => 24,  83 => 21,  80 => 20,  77 => 19,  73 => 17,  62 => 15,  58 => 14,  55 => 13,  53 => 12,  48 => 11,  39 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="container">*/
/*     {% for item in __SELF__.portfolio %}*/
/*     {% if item.images|length > 0 %}*/
/*     <div>*/
/*         {% set image = item.images.first %}*/
/*         <a href="{{ item.url }}">*/
/*             <img src="{{ image.path }}" class="img-responsive" alt="{{ image.title }}">*/
/*         </a>*/
/*     </div>*/
/*     {% endif %}*/
/*     <h2 class="text-center">{{ item.title }}</h2>*/
/*     {% if item.tags|length > 0 %}*/
/*     <div class="text-center">*/
/*         {% for tag in item.tags %}*/
/*         <a href="\portfolio\tags\{{ tag.name}}"><span class="label label-default">{{ tag.name }}</span></a>*/
/*         {% endfor %}*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if item.description %}*/
/*     <div class="text-center">*/
/*         {{ item.description|raw }}*/
/*     </div>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% if __SELF__.portfolio.lastPage > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if __SELF__.portfolio.currentPage > 1 %}*/
/*         <li><a href="{{ this.page.baseFileName|page({ page: (__SELF__.portfolio.currentPage - 1) }) }}">&larr; Prev</a></li>*/
/*         {% endif %}*/
/* */
/*         {% for page in 1..__SELF__.portfolio.lastPage %}*/
/*         <li class="{{ __SELF__.portfolio.currentPage == page ? 'active' : null }}">*/
/*             <a href="{{ this.page.baseFileName|page({ page: page }) }}">{{ page }}</a>*/
/*         </li>*/
/*         {% endfor %}*/
/* */
/*         {% if __SELF__.portfolio.lastPage > __SELF__.portfolio.currentPage %}*/
/*         <li><a href="{{ this.page.baseFileName|page({ page: (__SELF__.portfolio.currentPage + 1) }) }}">Next &rarr;</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/*     {% endif %}*/
/* */
/* </div>*/
/* */
/* */
