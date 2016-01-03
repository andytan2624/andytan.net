<?php

/* /Applications/MAMP/htdocs/atan/themes/main/partials/footer.htm */
class __TwigTemplate_6b955781caa9d017c4282d3027b8ff1340d11851a8d9290d5b60b8b807954b10 extends Twig_Template
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
        echo "<!-- Begin Footer -->
<footer class=\"container \">
    <div class=\"row\">
        <div class=\"col-md-4 treehouse-ad\">
            <!--<a href=\"http://referrals.trhou.se/andytan\" target=\"_blank\"><img-->
                    <!--src=\"http://wac.a8b5.edgecastcdn.net/80A8B5/static-assets/assets/content/referral-badge-grn.png\"/></a>-->
        </div>
        <div class=\"col-md-4\">
        </div>
        <div class=\"col-md-4 social-icons\">
            <a href=\"mailto:andy.tan2624@gmail.com\">
                <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/social/14-social-email.png");
        echo "\" width=\"20\"
                     alt=\"35ec5a20-6309-494a-9d48-0e463a4d6214_14-social-email.png\">
            </a>
            <a href=\"https://www.facebook.com/andy.tan.585559\" target=\"_blank\">
                <img src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/social/14-social-facebook.png");
        echo "\" width=\"20\"
                     alt=\"Andy Tan Facebook\">
            </a>
            <a href=\"https://twitter.com/ashskywalker10\" target=\"_blank\">
                <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/social/14-social-twitter.png");
        echo "\" width=\"20\"
                     alt=\"a1c85180-93b5-44b0-9d23-1cfa6881fdfe_14-social-twitter.png\">
            </a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<script src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/vendor/jquery-1.10.2.min.js"));
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "@framework"));
        echo ".js\"></script>
<script src=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/bootstrap.min.js"));
        echo "\"></script>
<script src=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/plugins.js"));
        echo "\"></script>
<script src=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/main.js"));
        echo "\"></script>
<script src=\"";
        // line 34
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/front.js"));
        echo "\"></script>

";
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("gaCode"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/atan/themes/main/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  83 => 36,  78 => 34,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  46 => 20,  39 => 16,  32 => 12,  19 => 1,);
    }
}
/* <!-- Begin Footer -->*/
/* <footer class="container ">*/
/*     <div class="row">*/
/*         <div class="col-md-4 treehouse-ad">*/
/*             <!--<a href="http://referrals.trhou.se/andytan" target="_blank"><img-->*/
/*                     <!--src="http://wac.a8b5.edgecastcdn.net/80A8B5/static-assets/assets/content/referral-badge-grn.png"/></a>-->*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*         </div>*/
/*         <div class="col-md-4 social-icons">*/
/*             <a href="mailto:andy.tan2624@gmail.com">*/
/*                 <img src="{{'assets/images/social/14-social-email.png'|theme}}" width="20"*/
/*                      alt="35ec5a20-6309-494a-9d48-0e463a4d6214_14-social-email.png">*/
/*             </a>*/
/*             <a href="https://www.facebook.com/andy.tan.585559" target="_blank">*/
/*                 <img src="{{'assets/images/social/14-social-facebook.png'|theme}}" width="20"*/
/*                      alt="Andy Tan Facebook">*/
/*             </a>*/
/*             <a href="https://twitter.com/ashskywalker10" target="_blank">*/
/*                 <img src="{{'assets/images/social/14-social-twitter.png'|theme}}" width="20"*/
/*                      alt="a1c85180-93b5-44b0-9d23-1cfa6881fdfe_14-social-twitter.png">*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <!-- End Footer -->*/
/* */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>*/
/* <script src="{{ ['assets/javascript/vendor/jquery-1.10.2.min.js']|theme }}"></script>*/
/* <script type="text/javascript" src="{{ ['@framework']|theme}}.js"></script>*/
/* <script src="{{ ['assets/javascript/bootstrap.min.js']|theme }}"></script>*/
/* <script src="{{ ['assets/javascript/plugins.js']|theme }}"></script>*/
/* <script src="{{ ['assets/javascript/main.js']|theme }}"></script>*/
/* <script src="{{ ['assets/javascript/front.js']|theme }}"></script>*/
/* */
/* {% component "gaCode" %}*/
/* </body>*/
/* </html>*/
