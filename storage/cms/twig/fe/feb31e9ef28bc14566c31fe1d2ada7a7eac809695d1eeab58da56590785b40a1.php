<?php

/* /Applications/MAMP/htdocs/atan/themes/main/pages/contact.htm */
class __TwigTemplate_a29c643b4a391b0ac72839f0b881867ac0810ab28ff77bb2b4f891ac44306e25 extends Twig_Template
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
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
            <div class=\"site-heading\">
                <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
            </div>
        </div>
    </div>
</div>
</header>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
            <h1>HTML Ipsum Presents</h1>

            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href=\"#\">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

            <h2>Header Level 2</h2>

            <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>

            <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

            <h3>Header Level 3</h3>

            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>

            <pre><code>
                #header h1 a {
                display: block;
                width: 300px;
                height: 80px;
                }
            </code></pre>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  19 => 1,);
    }
}
/* <header class="intro-header" style="background-image: url('{{ "assets/images/about-bg.png"|theme }}')">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*             <div class="site-heading">*/
/*                 <h1>{{ this.page.title }}</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </header>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*             <h1>HTML Ipsum Presents</h1>*/
/* */
/*             <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>*/
/* */
/*             <h2>Header Level 2</h2>*/
/* */
/*             <ol>*/
/*                 <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>*/
/*                 <li>Aliquam tincidunt mauris eu risus.</li>*/
/*             </ol>*/
/* */
/*             <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>*/
/* */
/*             <h3>Header Level 3</h3>*/
/* */
/*             <ul>*/
/*                 <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>*/
/*                 <li>Aliquam tincidunt mauris eu risus.</li>*/
/*             </ul>*/
/* */
/*             <pre><code>*/
/*                 #header h1 a {*/
/*                 display: block;*/
/*                 width: 300px;*/
/*                 height: 80px;*/
/*                 }*/
/*             </code></pre>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
