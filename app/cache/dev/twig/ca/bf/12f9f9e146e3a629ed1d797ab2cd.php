<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_cabf12f9f9e146e3a629ed1d797ab2cd extends Twig_Template
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
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  21 => 2,  81 => 29,  53 => 15,  24 => 3,  22 => 2,  19 => 1,  419 => 163,  410 => 160,  406 => 159,  399 => 157,  395 => 156,  375 => 144,  371 => 143,  364 => 141,  340 => 128,  325 => 124,  301 => 111,  276 => 98,  262 => 97,  253 => 94,  238 => 90,  226 => 86,  152 => 61,  77 => 28,  150 => 58,  137 => 55,  65 => 24,  233 => 86,  217 => 83,  211 => 81,  105 => 42,  195 => 74,  127 => 48,  94 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 158,  398 => 129,  393 => 126,  387 => 122,  384 => 147,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  362 => 110,  355 => 106,  314 => 115,  294 => 109,  268 => 85,  264 => 84,  252 => 80,  247 => 93,  241 => 91,  220 => 84,  214 => 82,  208 => 80,  177 => 68,  169 => 65,  128 => 49,  71 => 20,  114 => 42,  78 => 21,  203 => 78,  182 => 69,  176 => 64,  173 => 67,  149 => 60,  144 => 53,  133 => 51,  99 => 33,  95 => 34,  57 => 15,  34 => 5,  31 => 4,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 75,  170 => 71,  163 => 82,  160 => 67,  153 => 77,  141 => 55,  90 => 33,  84 => 35,  68 => 30,  62 => 19,  28 => 3,  332 => 126,  321 => 112,  318 => 111,  315 => 110,  312 => 98,  309 => 97,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  283 => 88,  274 => 97,  258 => 96,  243 => 92,  235 => 89,  224 => 71,  202 => 77,  156 => 62,  136 => 71,  122 => 45,  119 => 44,  112 => 43,  109 => 47,  85 => 25,  58 => 25,  44 => 10,  178 => 87,  175 => 72,  154 => 54,  134 => 51,  125 => 48,  121 => 45,  118 => 48,  113 => 41,  102 => 43,  87 => 32,  49 => 14,  46 => 7,  27 => 4,  91 => 37,  63 => 18,  45 => 8,  385 => 160,  382 => 159,  376 => 158,  374 => 116,  367 => 142,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 131,  341 => 105,  336 => 127,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  305 => 112,  303 => 106,  298 => 110,  289 => 120,  286 => 119,  284 => 101,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  244 => 92,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 85,  212 => 78,  209 => 82,  206 => 77,  204 => 95,  193 => 73,  190 => 76,  187 => 77,  185 => 75,  180 => 63,  174 => 65,  171 => 61,  168 => 70,  166 => 68,  159 => 53,  151 => 60,  148 => 46,  143 => 56,  140 => 54,  130 => 49,  116 => 36,  107 => 42,  103 => 37,  97 => 37,  88 => 25,  82 => 22,  79 => 21,  76 => 26,  73 => 27,  70 => 26,  67 => 15,  61 => 19,  47 => 11,  39 => 10,  36 => 7,  246 => 32,  164 => 68,  162 => 66,  157 => 56,  145 => 74,  139 => 50,  131 => 51,  115 => 39,  108 => 37,  106 => 37,  101 => 41,  98 => 38,  96 => 39,  92 => 29,  80 => 23,  74 => 22,  64 => 20,  55 => 16,  52 => 13,  50 => 10,  43 => 11,  41 => 9,  32 => 6,  29 => 5,  360 => 140,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  337 => 103,  329 => 125,  327 => 114,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  292 => 121,  285 => 89,  278 => 86,  263 => 95,  256 => 109,  249 => 138,  242 => 96,  232 => 88,  229 => 87,  221 => 86,  218 => 83,  213 => 82,  210 => 81,  205 => 79,  199 => 76,  191 => 79,  189 => 72,  179 => 72,  172 => 64,  165 => 60,  161 => 63,  158 => 80,  155 => 61,  147 => 58,  142 => 51,  138 => 50,  135 => 47,  132 => 51,  126 => 45,  123 => 61,  120 => 40,  117 => 39,  111 => 44,  104 => 41,  100 => 39,  93 => 28,  89 => 29,  86 => 25,  83 => 30,  75 => 23,  72 => 24,  69 => 22,  66 => 20,  60 => 16,  54 => 14,  51 => 10,  48 => 12,  42 => 7,  38 => 6,  35 => 5,  33 => 6,  30 => 3,);
    }
}