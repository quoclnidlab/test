<?php

/* WebProfilerExtraBundle:Collector:assetic.html.twig */
class __TwigTemplate_4245095efdad72ae42b94de0799253e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img height=\"28\" alt=\"Assetic\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAcCAMAAABbGh8VAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2RTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2RjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4NzZDNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIyNjk4NzZENEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+oJdgdgAAAVlQTFRFd3d3UFBQ8fHxPj4+8vLyg4ODnZ2dgYGB9vb22traTExMgoKCf39/h4eHPDw8RUVFaGhonJyck5OTQEBARkZG19fXwsLCsbGxT09PeHd3PT09s7OzdnV1kJCQWlpaUVBQ+Pj4a2tr2NjYSUlJX19f7u7uvb29Q0NDV1dXjo2O4uLi6+vrpKSk9PTzi4uLYGBgk5ST1dXVqamplpaWU1NTn5+fOTk5U1JSp6en2dnZpaWluLi47+7v9PT0bm5ud3Z23t7eysrKubm5y8vLcnJyNDQ0+vr6aWpqRERE3d3d6enpeHh4qKio8PDw5+fneHd41tbWVFRTsbCwYmJi9fX1fn5+oqKidHNzZ2doeXh4ZWVl5eXlcXBwmpqasLCwODg48/PzVFRUxMTE39/f6unpenp6fX19NjY2rq6uXV1d7+/vVVVVhISESkpKsrKyOzs7SEhIPz8/////tq7LNgAAAHN0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AO+Lr34AAAEHSURBVHjafNFnU8IwGMDxB1K67GIvQVTce28RcOPee2+BNn7/F9okXK/29P/yd8mTSwJfnuAPyoWEqp3Qv9qggbxVs4s8d4iMuH1MQqfRlwVG3YwKly09R4Tu7hldiTtLffBUfJC4KUpYXms1huFGN5s/PrGTAvHILwpA3TLBS0kXNXlXuegWaSuvyDXL0OXBCp21SwiFpYtYaS9z7KxKhWeMkS3lTHBo0pSGsnMb10qDtPF09nG5U1Z7yYnJeRmn1mPSGxqNtqlg07k4y/NBfpoPjp1MhOI/pC1ubvtJHH37uoW7fLTEoZ/Qge7cxUcpnWivsax3shPKaqDKEjLif1/r7luAAQDrTKWvW5hpqwAAAABJRU5ErkJggg==\"/>
            <span class=\"sf-toolbar-info-piece-additional-detail\">Assetic</span>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Collections</b>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "collections")), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=25 src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofilerextra/images/assetic.png"), "html", null, true);
        echo "\" />
        </span>
        <strong>Assetic</strong>
        <span class=\"count\">
            <span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "collectionCount"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Assetic</h2>
    ";
        // line 33
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "collections"))) {
            // line 34
            echo "        <table>
            <tr>
                <th>Collection</th>
                <th>Sources</th>
                <th>Filters</th>
                <th>Target Url</th>
            </tr>
            ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "collections"));
            foreach ($context['_seq'] as $context["i"] => $context["collection"]) {
                // line 42
                echo "                <tr class=\"";
                echo ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2 == 1)) ? ("odd") : ("even"));
                echo "\">
                    <th align=\"center\">
                        ";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "
                    </th>
                    <td>
                        <ul>
                            ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "assets"));
                foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                    // line 49
                    echo "                                <li><code>";
                    echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "html", null, true);
                    echo "</code></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 51
                echo "                        </ul>
                    </td>
                    <td>
                        <ul>
                            ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "filters"));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 56
                    echo "                                <li><code>";
                    echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "html", null, true);
                    echo "</code></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 58
                echo "                        </ul>
                    </td>
                    <td>
                        <a target=\"_blank\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basePath"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "target"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "target"), "html", null, true);
                echo "</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['collection'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 65
            echo "        </table>
    ";
        } else {
            // line 67
            echo "        <p>
            <em>No assetic collection</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:assetic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  137 => 55,  65 => 20,  233 => 86,  217 => 83,  211 => 81,  105 => 42,  195 => 74,  127 => 48,  94 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  362 => 110,  355 => 106,  314 => 99,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  241 => 77,  220 => 70,  214 => 69,  208 => 68,  177 => 68,  169 => 65,  128 => 49,  71 => 17,  114 => 42,  78 => 21,  203 => 78,  182 => 69,  176 => 64,  173 => 67,  149 => 58,  144 => 53,  133 => 51,  99 => 30,  95 => 34,  57 => 16,  34 => 5,  31 => 4,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 88,  170 => 85,  163 => 82,  160 => 67,  153 => 77,  141 => 56,  90 => 33,  84 => 31,  68 => 30,  62 => 19,  28 => 3,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  312 => 98,  309 => 97,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  283 => 88,  274 => 97,  258 => 81,  243 => 92,  235 => 74,  224 => 71,  202 => 77,  156 => 62,  136 => 71,  122 => 49,  119 => 42,  112 => 43,  109 => 42,  85 => 25,  58 => 25,  44 => 10,  178 => 87,  175 => 86,  154 => 54,  134 => 54,  125 => 48,  121 => 45,  118 => 48,  113 => 48,  102 => 40,  87 => 32,  49 => 14,  46 => 7,  27 => 3,  91 => 35,  63 => 18,  45 => 8,  385 => 160,  382 => 159,  376 => 158,  374 => 116,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  341 => 105,  336 => 145,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  305 => 95,  303 => 106,  298 => 91,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  244 => 97,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  212 => 78,  209 => 82,  206 => 77,  204 => 95,  193 => 73,  190 => 76,  187 => 71,  185 => 75,  180 => 63,  174 => 65,  171 => 61,  168 => 62,  166 => 68,  159 => 53,  151 => 60,  148 => 46,  143 => 56,  140 => 54,  130 => 50,  116 => 36,  107 => 42,  103 => 37,  97 => 37,  88 => 25,  82 => 22,  79 => 21,  76 => 26,  73 => 19,  70 => 20,  67 => 15,  61 => 19,  47 => 9,  39 => 6,  36 => 5,  246 => 32,  164 => 59,  162 => 66,  157 => 56,  145 => 74,  139 => 50,  131 => 51,  115 => 39,  108 => 37,  106 => 33,  101 => 41,  98 => 38,  96 => 37,  92 => 34,  80 => 21,  74 => 22,  64 => 20,  55 => 16,  52 => 12,  50 => 10,  43 => 12,  41 => 9,  32 => 4,  29 => 3,  360 => 109,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  337 => 103,  329 => 154,  327 => 114,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  292 => 121,  285 => 89,  278 => 86,  263 => 95,  256 => 109,  249 => 138,  242 => 96,  232 => 93,  229 => 73,  221 => 86,  218 => 83,  213 => 82,  210 => 81,  205 => 79,  199 => 76,  191 => 67,  189 => 72,  179 => 72,  172 => 64,  165 => 60,  161 => 63,  158 => 80,  155 => 61,  147 => 58,  142 => 51,  138 => 50,  135 => 47,  132 => 51,  126 => 45,  123 => 61,  120 => 40,  117 => 39,  111 => 44,  104 => 41,  100 => 39,  93 => 28,  89 => 29,  86 => 24,  83 => 30,  75 => 23,  72 => 24,  69 => 22,  66 => 20,  60 => 13,  54 => 15,  51 => 10,  48 => 12,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
