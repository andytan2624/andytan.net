<?php

/* /Applications/MAMP/htdocs/atan/themes/main/layouts/default.htm */
class __TwigTemplate_8dca1ae86a8fbf7098a416d2bc7cea87938f4e08f5aafb71d8dce5812cb38024 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 6
        echo "
<!-- End Skills -->
";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 6,  33 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial 'header' %}*/
/* */
/* {% partial 'navigation' %}*/
/* */
/* {% page %}*/
/* */
/* <!-- End Skills -->*/
/* {% partial 'footer' %}*/
