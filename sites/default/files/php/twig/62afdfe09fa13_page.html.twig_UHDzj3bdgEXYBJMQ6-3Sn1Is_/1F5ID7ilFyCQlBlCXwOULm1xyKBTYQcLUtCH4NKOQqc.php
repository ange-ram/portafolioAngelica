<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/handicraft_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_1a001b829a3164a1af1626665c2d0dcb5db6e24f5c0640230271c0d6d37d4a19 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!--Start: Top Message -->
";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 62)) {
            // line 63
            echo "  <div class=\"container-\">
    <div class=\"top-message\">
      ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 69
        echo "<!--End: Top Message -->


<!-- Start: Top Bar -->

<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">
      <div class=\"navbar-header col-md\">
        ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 78)) {
            // line 79
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 81
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 84)) {
            // line 85
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 87
        echo "      </div>
    </div>
  </div>
</div>

<div class=\"container\">

  <!-- Start: Header -->

  
  <!-- End: Header -->


  <!-- Start: Slides -->
  ";
        // line 101
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 102
            echo "    <div class=\"container-\">
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 106
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 106, $this->source));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        </ul>
      </div>
    </div>
  ";
        }
        // line 112
        echo "  <!-- End: Slides -->

  <div class=\"regions-group-\">

    ";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 116) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 116))) {
            // line 117
            echo "      <div class=\"topblock regions-group\">
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 119)) {
                // line 120
                echo "            <div class=\"col-sm-4 block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 122
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 122)) {
                // line 123
                echo "            <div class=\"col-sm block-content-wrap\">
              <div class=\"block-content\">";
                // line 124
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 127
            echo "        </div>
      </div>
    ";
        }
        // line 130
        echo "  
    ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 131) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 131))) {
            // line 132
            echo "      <div class=\"topblock regions-group\">
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 134)) {
                // line 135
                echo "            <div class=\"col-sm block-content-wrap\">
              <div class=\"block-content\">";
                // line 136
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 139
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 139)) {
                // line 140
                echo "            <div class=\"col-sm-4 block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 142
            echo "        </div>
      </div>
    ";
        }
        // line 145
        echo "
  </div>

      
  <!--Start: Highlighted -->
  ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 150)) {
            // line 151
            echo "    <div class=\"highlighted\">
      <div class=\"container-\">
        ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 157
        echo "  <!--End: Highlighted -->
  

  <!--Start: Title -->
  ";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 161) &&  !($context["is_front"] ?? null))) {
            // line 162
            echo "    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <div class=\"container-\">
          ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 170
        echo "  <!--End: Title -->


  <div class=\"main-content regions-group\">
    <div class=\"container-\">
      <div class=\"\">
        <!--Start: Breadcrumb -->
        ";
        // line 177
        if ( !($context["is_front"] ?? null)) {
            // line 178
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 182
        echo "        <!--End: Breadcrumb -->
        <div class=\"row layout\">
          <!--- Start: Left SideBar -->
          ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 185)) {
            // line 186
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 186, $this->source), "html", null, true);
            echo ">
              <div class=\"sidebar\">
                ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 192
        echo "          <!-- End Left SideBar -->
          <!--- Start Content -->
          ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 194)) {
            // line 195
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 195, $this->source), "html", null, true);
            echo ">
              <div class=\"content_layout\">
                ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
              </div>              
            </div>
          ";
        }
        // line 201
        echo "          <!-- End: Content -->
          <!-- Start: Right SideBar -->
          ";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 203)) {
            // line 204
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 204, $this->source), "html", null, true);
            echo ">
              <div class=\"sidebar\">
                ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 210
        echo "          <!-- End: Right SideBar -->
        </div>
      </div>
    </div>
  </div>
  <!-- End: Main content -->


  ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 218)) {
            // line 219
            echo "    <div class=\"products regions-group\">
      ";
            // line 220
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 223
        echo "

  <!-- Start: Features -->
  ";
        // line 226
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 226) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 226))) {
            // line 227
            echo "    <div class=\"features regions-group\">
      <div class=\"container-\">
        ";
            // line 229
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 229)) {
                // line 230
                echo "          <h2 class=\"custom-block-title\" >
            ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                echo "
          </h2>
        ";
            }
            // line 234
            echo "        <div class=\"row features-list\">
          ";
            // line 235
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 235)) {
                // line 236
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 236, $this->source), "html", null, true);
                echo ">
              ";
                // line 237
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 240
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 240)) {
                // line 241
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 241, $this->source), "html", null, true);
                echo ">
              ";
                // line 242
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 245
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 245)) {
                // line 246
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 246, $this->source), "html", null, true);
                echo ">
              ";
                // line 247
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 250
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 254
        echo "  <!--End: Features -->


  <!-- Start: Footer widgets -->
  ";
        // line 258
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 258) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 258)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 258))) {
            // line 259
            echo "    <div class=\"footer regions-group\" id=\"footer\">
      <div class=\"container-\">
        ";
            // line 261
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 261)) {
                // line 262
                echo "          <h2 class=\"custom-block-title\" >
            ";
                // line 263
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
                echo "
          </h2>
        ";
            }
            // line 266
            echo "        <div class=\"row\">
          ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 267)) {
                // line 268
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 268, $this->source), "html", null, true);
                echo ">
              ";
                // line 269
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 272
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 272)) {
                // line 273
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 273, $this->source), "html", null, true);
                echo ">
              ";
                // line 274
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 277
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 277)) {
                // line 278
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 278, $this->source), "html", null, true);
                echo ">
              ";
                // line 279
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 282
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 286
        echo "  <!--End: Footer widgets -->


  <!-- Start: Copyright -->
  <div class=\"copyright regions-group\">
    <div class=\"container-\">
      <span>Copyright © ";
        // line 292
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 293
        if (($context["show_credit_link"] ?? null)) {
            // line 294
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 296
        echo "    </div>
  </div>
  <!-- End: Copyright -->

</div>





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/handicraft_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 296,  500 => 294,  498 => 293,  494 => 292,  486 => 286,  480 => 282,  474 => 279,  469 => 278,  466 => 277,  460 => 274,  455 => 273,  452 => 272,  446 => 269,  441 => 268,  439 => 267,  436 => 266,  430 => 263,  427 => 262,  425 => 261,  421 => 259,  419 => 258,  413 => 254,  407 => 250,  401 => 247,  396 => 246,  393 => 245,  387 => 242,  382 => 241,  379 => 240,  373 => 237,  368 => 236,  366 => 235,  363 => 234,  357 => 231,  354 => 230,  352 => 229,  348 => 227,  346 => 226,  341 => 223,  335 => 220,  332 => 219,  330 => 218,  320 => 210,  313 => 206,  307 => 204,  305 => 203,  301 => 201,  294 => 197,  288 => 195,  286 => 194,  282 => 192,  275 => 188,  269 => 186,  267 => 185,  262 => 182,  256 => 179,  253 => 178,  251 => 177,  242 => 170,  234 => 165,  229 => 162,  227 => 161,  221 => 157,  214 => 153,  210 => 151,  208 => 150,  201 => 145,  196 => 142,  190 => 140,  187 => 139,  181 => 136,  178 => 135,  176 => 134,  172 => 132,  170 => 131,  167 => 130,  162 => 127,  156 => 124,  153 => 123,  150 => 122,  144 => 120,  142 => 119,  138 => 117,  136 => 116,  130 => 112,  124 => 108,  115 => 106,  111 => 105,  106 => 102,  104 => 101,  88 => 87,  82 => 85,  80 => 84,  75 => 81,  69 => 79,  67 => 78,  56 => 69,  49 => 65,  45 => 63,  43 => 62,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/handicraft_zymphonies_theme/templates/layout/page.html.twig", "/app/themes/contrib/handicraft_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62, "for" => 105);
        static $filters = array("escape" => 65, "raw" => 106, "date" => 292);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
