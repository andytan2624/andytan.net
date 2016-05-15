<?php

/* /Applications/MAMP/htdocs/atan/themes/main/pages/posts.htm */
class __TwigTemplate_64a904c1996f0a258643dc9ded2762355df564b15b9050d26193b434e7850da1 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->themeFilter("/assets/images/posts.png");
        echo "')\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
            <div class=\"post-heading\">
                <h1 class=\"text-center\">";
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
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\" id=\"posts\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "            <div class=\"post-preview\">
                <a href=\"";
            // line 18
            echo $this->env->getExtension('CMS')->pageFilter("post", array("slug" => $this->getAttribute($context["post"], "slug", array())));
            echo "\">
                    <h2 class=\"post-title\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                    </h2>
                    <h3 class=\"post-subtitle\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
            echo "
                    </h3>
                </a>
                <span class=\"post-meta\">Published on ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "F jS, Y"), "html", null, true);
            echo "</span> <br/>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "                <a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter("category", array("slug" => $this->getAttribute($context["category"], "slug", array())));
                echo "\">
                    <span class=\"label label-primary\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span>
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
            <hr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <h2>No posts found.</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-2 col-md-offset-5\">
            <a id=\"load_more\"
               href=\"#\"
               class=\"btn btn-primary load-more-button\"
               data-request=\"onLoadMorePosts\"
               data-request-update=\"'ajax/posts': '@#posts'\"
               data-request-data='\"postsCount\": 1'
               data-request-success=\"incrementPostsCounter(\$el);disableLoadButton();\">
                Load more
            </a>
        </div>
    </div>

</div>

<script>
    function incrementPostsCounter(\$el){
        var data = \$.parseJSON( \"{\" + \$el.data('request-data') + \"}\" );
        console.log(JSON.stringify(\$el));
        \$el.data('request-data', '\"postsCount\": ' + (++data.postsCount) );
    }

    function disableLoadButton() {
        console.log('AMY KIM IS SO HOT');
    }
</script>

";
        // line 70
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 71
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 70
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/pages/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  139 => 71,  137 => 70,  102 => 37,  95 => 35,  88 => 32,  79 => 29,  74 => 28,  70 => 27,  66 => 26,  60 => 23,  54 => 20,  49 => 18,  46 => 17,  41 => 16,  28 => 6,  19 => 1,);
    }
}
/* <header class="intro-header" style="background-image: url('{{ "/assets/images/posts.png"|theme }}')">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*             <div class="post-heading">*/
/*                 <h1 class="text-center">{{ this.page.title }}</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </header>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" id="posts">*/
/*             {% for post in posts %}*/
/*             <div class="post-preview">*/
/*                 <a href="{{ 'post'|page({slug: post.slug}) }}">*/
/*                     <h2 class="post-title">*/
/*                         {{ post.title }}*/
/*                     </h2>*/
/*                     <h3 class="post-subtitle">*/
/*                         {{ post.excerpt }}*/
/*                     </h3>*/
/*                 </a>*/
/*                 <span class="post-meta">Published on {{ post.published_at|date("F jS, Y") }}</span> <br/>*/
/*                 {% for category in post.categories %}*/
/*                 <a href="{{ 'category'|page({slug: category.slug }) }}">*/
/*                     <span class="label label-primary">{{ category.name }}</span>*/
/*                 </a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <hr>*/
/*             {% else %}*/
/*             <h2>No posts found.</h2>*/
/*             {% endfor %}*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-2 col-md-offset-5">*/
/*             <a id="load_more"*/
/*                href="#"*/
/*                class="btn btn-primary load-more-button"*/
/*                data-request="onLoadMorePosts"*/
/*                data-request-update="'ajax/posts': '@#posts'"*/
/*                data-request-data='"postsCount": 1'*/
/*                data-request-success="incrementPostsCounter($el);disableLoadButton();">*/
/*                 Load more*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <script>*/
/*     function incrementPostsCounter($el){*/
/*         var data = $.parseJSON( "{" + $el.data('request-data') + "}" );*/
/*         console.log(JSON.stringify($el));*/
/*         $el.data('request-data', '"postsCount": ' + (++data.postsCount) );*/
/*     }*/
/* */
/*     function disableLoadButton() {*/
/*         console.log('AMY KIM IS SO HOT');*/
/*     }*/
/* </script>*/
/* */
/* {% put scripts %}*/
/* {% framework extras %}*/
/* {% endput %}*/
